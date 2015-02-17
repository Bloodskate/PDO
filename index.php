<?php

include 'connect.php';

$name = 'Prasanna';
$message = 'Hello';

$sql = "INSERT INTO guestbook (name, message, posted) VALUES (:name, :message, NOW())";
$query = $handler->prepare($sql);

$query->execute(array(
	':name' => $name,
	':message' => $message
));

echo $handler->lastInsertId();