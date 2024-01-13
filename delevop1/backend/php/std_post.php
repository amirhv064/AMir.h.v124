<?php 
include('connection.php');

echo'<br>';

$std_name = $_POST['std_name'];
$course = $_POST['course'];
$semester = $_POST['semester'];
$std_num = $_POST['std_num'];
echo 'successfully created';
echo'<br>';

$insert = "INSERT INTO chat.student (student_name, course_name, grade, student_number) 
VALUE('$std_name', '$course', '$semester', '$std_num')";
if($conn->query($insert) === TRUE){
    echo 'successfullly sended';
}else{
    var_dump($insert);
}
?>