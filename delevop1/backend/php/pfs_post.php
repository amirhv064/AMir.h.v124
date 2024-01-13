<?php

include('connection.php');

echo '<br>';


$pfs_name = $_POST['pfs_name'];
$course = $_POST['course'];
$id = $_POST['id'];
echo 'successfully created';

echo '<br>';

$insert="INSERT INTO chat.professors (professors_name, course, id) 
VALUE('$pfs_name', '$course', '$id')";

if($conn->query($insert)){
    echo 'successfully sended';
}else{
    var_dump($insert);
}

?>