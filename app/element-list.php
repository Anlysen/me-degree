<?php

use Soap\Url;

class User
{
	private string $name;
	private ?User $next;
	private ?User $prev;

	public function __construct(string $name)
	{
		$this->name = $name;
		$this->next = null;
		$this->prev = null;
	}
	public function getName(): string
	{
		return $this->name;
	}

	public function getNext(): ?User
	{
		return $this->next;
	}

	public function setNext(?User $next): void
	{
		$this->next = $next;
	}

	public function getPrev(): ?User
	{
		return $this->prev;
	}

	public function setPrev(?User $prev): void
	{
		$this->next = $prev;
	}
}

class UsersList
{
	private ?User $head;
	private ?User $tail;

	public function __construct()
	{
		$this->head = null;
		$this->tail = null;
	}

	public function getHead(): ?User
	{
		return $this->head;
	}

	public function getTail(): ?User
	{
		return $this->tail;
	}

	public function add(string $name): User
	{
		$newElement = new User($name);
		if ($this->head === null) {
			$this->head = $newElement;
			$this->tail = $newElement;
		} else {
			$newElement->setPrev($this->tail);
			$this->tail->setNext($newElement);
			$this->tail = $newElement;
		}
		return $newElement;
	}

	public function find(string $name): ?User
	{
		if ($name === '') {
			return null;
		}

		if ($this->head === null) {
			return null;
		}

		if ($this->head->getName() === $name) {
			return $this->head;
		}

		$currentElement = $this->head->getNext();

		while ($currentElement !== null) {
			if ($currentElement->getName() === $name) {
				break;
			}

			$currentElement = $currentElement->getNext();
		}

		return $currentElement;
	}

	public function remove(string $name): bool
	{
		$userToRemove = $this->find($name);
		if ($userToRemove === null) {
			return false;
		}

		$prevUser = $userToRemove->getPrev();
		$nextUser = $userToRemove->getNext();

		if ($prevUser !== null) {
			$prevUser->setNext($nextUser);
		} else {
			$this->head = $nextUser;
		}

		if ($nextUser !== null) {
			$nextUser->setPrev($prevUser);
		} else {
			$this->tail = $prevUser;
		}
		return true;
	}
}

$list = new UsersList();
$aleksey = $list->add('Aleksey');
$andrey = $list->add('Andrey');
$ilya = $list->add('Ilya');


$searchedElement = $list->find('Aleksey');

echo $searchedElement
	? 'User is founded'
	: 'User not found';
echo "<br>";

echo "Remove Aleksey: " . ($list->remove('Aleksey')
	? "Success"
	: "Failed") . "<br>";

echo "Remove non-existent: " . ($list->remove('Non-exists')
	? "Success"
	: "Failed") . "<br>";

echo "Лист после удаления: <br>";
$current = $list->getHead();
while ($current !== null) {
	echo $current->getName() . "<br>";
	$current = $current->getNext();
}
