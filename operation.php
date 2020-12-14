<?php

require_once ("db.php");
require_once ("component.php");


$con=Createdb();

//create btn click
if (isset($_POST['create'])){
    createData();
}

if (isset($_POST['update'])){
    UpdateData();

}
if (isset($_POST['read'])){
    getData();
}




function createData(){
    $student_name =textboxValue("student_name");
    $student_course=textboxValue("student_course");
    $student_phone=textboxValue("student_phone");
    $student_gender=textboxValue("student_gender");


    if ($student_name && $student_course && $student_phone && $student_gender) {


        $sql="INSERT INTO students(student_name,student_course,student_phone,student_gender)
                          VALUES('$student_name','$student_course','$student_phone','$student_gender')";

        if(mysqli_query($GLOBALS['con'],$sql)) {
            TextNode("error","Record Successfully Inserted...");
        }else{
            echo "error";
        }
    }else{
        TextNode("error","Provide data in the textbox");


    }
}

function textboxValue($value){
    $textbox=mysqli_real_escape_string($GLOBALS['con'],trim($_POST[$value]));
    if(empty($textbox)) {
        return false;
    }else{
        return $textbox;
    }
}

//messages
function TextNode($classname,$msg){
    $element="<h6 class='$classname'>$msg</h6>";
    echo $element;
}

//get data from mysql
function getData(){
    $sql="SELECT*FROM students";

    $result=mysqli_query($GLOBALS['con'],$sql);

    if (mysqli_num_rows($result)>0){
        return $result;
        }


}

//update data
function UpdateData(){
    $id=textboxValue("student_id");
    $student_name=textboxValue("student_name");
    $student_course=textboxValue("student_course");
    $student_phone=textboxValue("student_phone");
    $student_gender=textboxValue("student_gender");


    if ($student_name && $student_course && $student_phone && $student_gender) {
        $sql = "UPDATE students SET student_name='$student_name',student_course = 'student_course',student_phone = 'student_phone',student_gender = 'student_gender'
            WHERE  id = '$id'";

        if (mysqli_query($GLOBALS['con'], $sql)) {
            TextNode("success", "Data Successfully Updated");
        } else {
            TextNode("error", "Enable to update data");

        }
        }else{
        TextNode("error","select data using edit");

}

}