<?php

$db = mysqli_connect('localhost', 'root', '', 'degree');

$query = "INSERT INTO degree (username, email, password)
          VALUES ('John', 'jonny@gmail.com')";

$result = mysqli_query($db, $query);

mysqli_close($db);



?>