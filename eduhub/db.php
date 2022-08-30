<?php
require_once 'class.php';

$db=mysqli_connect('localhost','root','','eduhub') or die("database is not connected");
 
$id = '';

if(isset($_POST['x'])){
        $id = $_POST['x'];

}
$sqlx = "SELECT * FROM bookinfo ";

//rsult fetch
$resultx = mysqli_query($db, $sqlx);

//$noOfDatax = mysqli_num_rows($resultx);




$course_name ='';
$faculty_name = '';
$outline = '';
$book = '';
$exam_question = '';
$materials = '';




while ($row = mysqli_fetch_array($resultx)) {
      
        $course_name = $row['course_name'];
        $faculty_name = $row['faculty_name'];
        $outline = $row['outline'];
        $book = $row['book'];
        $exam_question = $row['exam_question'];
        $materials = $row['Materials'];
        

}
 
?>