<?php

class DoubleLinkedListNode
{
    public $data;
    public $next1;
    public $next2;

    public function __construct($data)
    {
        $this->data = $data;
        $this->next1 = null;
        $this->next2 = null;
    }
}

$node1 = new DoubleLinkedListNode(1);
$node2 = new DoubleLinkedListNode(2);
$node3 = new DoubleLinkedListNode(3);

$node1->next1 = $node2;
$node1->next2 = $node3;
$node2->next1 = $node3;

// Класс узла
class DoublyNode
{
    public $data;
    public $next;
    public $prev;

    public function __construct($data)
    {
        $this->data = $data;
        $this->next = null;
        $this->prev = null;
    }
}

// Класс двусвязного списка
 class DoubleLinkedList
 {
    private $head;
    private $tail;

    public function __construct()
    {
        $this->head = null;
        $this->tail = null;
    }
    public function append($data)
    {
        $newNode = new DoublyNode($data);
        if ($this->head == null) {
            $this->head = $newNode;
            $this->tail = $newNode;
            return;
        }
        $newNode->prev = $this->tail;
        $this->tail->next = $newNode;
        $this->tail = $newNode;
    }
    public function prepend($data)
    {
        $newNode = new DoublyNode($data);
        if ($this->head == null) {
            $this->head = $newNode;
            $this->tail = $newNode;
            return;
        }
        $newNode->next = $this->head;
        $this->head->prev = $newNode;
        $this->head = $newNode;
    }
    public function displayForward()
    {
        $current = $this->head;
        echo "Forward: ";
        while ($current !== null) {
            echo $current->data . " <-> ";
            $current = $current->next;
        }
        echo "Null<br>";
    }
    public function displayBackward ()
    {
        $current = $this->tail;
        echo "Backward: ";
        while ($current !== null) {
            echo $current->data . " <-> ";
            $current = $current->prev;
        }
        echo "Null<br>";
    }
 }

 $dll = new DoubleLinkedList();

 $dll->append(10);
 $dll->append(20);
 $dll->prepend(5);
 $dll->append(30);

 $dll->displayForward();
 $dll->displayBackward();

 function linearSearch(array $arg, $target)
 {
    foreach ($arg as $value) {
        if ($value == $target) {
            return true;
        }
    }
    return false;
 }

 function binarySearch(array $sortedArr, $target)
 {
    $left = 0;
    $right = count($sortedArr) - 1;

    while ($left <= $right) {
        $mid = (int)(($left + $right) / 2);
        if ($sortedArr[$mid] === $target) {
            return true;
        }
        if ($sortedArr[$mid] < $target) {
            $left = $mid + 1;
        } else {
            $right = $mid - 1;
        }
    }
    return false;
 }