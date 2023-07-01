<?php
include('config.php');
$exam_section = $_POST['exam_section'];
$exam_level = $_POST['exam_level'];
$exam_term = $_POST['exam_term'];
$exam_course_name = $_POST['exam_course_name'];
$exam_type = $_POST['exam_type'];
$exam_from = $_POST['exam_from'];
$exam_to = $_POST['exam_to'];
$exam_doctor_name = $_POST['exam_doctor_name']; 
$exam_notes = $_POST['exam_notes'];

$temporary = explode(".", $_FILES["exam_file"]["name"]);
$exam_file_name = $temporary[0];

$exam_file_path="exams/".$_FILES["exam_file"]["name"];
if (($_FILES["exam_file"]["size"] < 10000000)) {
	if ($_FILES["exam_file"]["error"] > 0) 
	{
		$exam_file_name="";
		$exam_file_path="";
	} 
	else 
	{	
		//$filename="files/" .$pd_folder_name."/". $file_name;
		move_uploaded_file($_FILES['exam_file']["tmp_name"], $exam_file_path);
	}
}


	$sql="insert into exams(exam_section,exam_level,exam_term,exam_course_name,exam_file_path,exam_file_name,exam_type,exam_from,exam_to,exam_doctor_name,exam_notes) 
	values('".$exam_section."','".$exam_level."','".$exam_term."','".$exam_course_name."','".$exam_file_path."','".$exam_file_name."','".$exam_type."','".$exam_from."','".$exam_to."','".$exam_doctor_name."','".$exam_notes."')";
	$result = mysqli_query($con, $sql);
	$result1['message']="Record Added Successfully";
	$myJSON = json_encode($result1);
	echo $myJSON;

?>