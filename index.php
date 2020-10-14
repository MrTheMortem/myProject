<?php
include $_SERVER['DOCUMENT_ROOT'] . '\autoload.php';


$messageToDB = new \myLib\Message('TestName','TestEmail', 'TestMessage');
$messageToDB->addMessage();
//$db = new \myLib\DB(PDO::FETCH_ASSOC);
//$db->execute("INSERT INTO messages SET `name`= 'test', `email`= 'test', `message`= 'test', `answer`= 'test'");




