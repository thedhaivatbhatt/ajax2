<?php
session_start();
require_once("connection.php");
extract($_POST);
extract($_REQUEST);
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');


$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : "";


if ($action == "insertdata") {

    $first = isset($_POST['first']) ? $_POST['first'] : "";
    $middle = isset($_POST['middle']) ? $_POST['middle'] : "";
    $last = isset($_POST['last']) ? $_POST['last'] : "";
    $email = isset($_POST['email']) ? $_POST['email'] : "";
    $mobile = isset($_POST['mobile']) ? $_POST['mobile'] : "";
    $date1 = isset($_POST['date1']) ? $_POST['date1'] : "";
    $adtype = isset($_POST['adtype']) ? $_POST['adtype'] : "";
    $pincode = isset($_POST['pincode']) ? $_POST['pincode'] : "";
    $city = isset($_POST['city']) ? $_POST['city'] : "";
    $language = isset($_POST['language']) ? $_POST['language'] : "";
    $floatingtextarea = isset($_POST['floatingtextarea']) ? $_POST['floatingtextarea'] : "";


    $sql = "INSERT INTO form (`first`, `middle`, `last`, `email`, `mobile`, `adtype`, `pincode`, `floatingtextarea`, `date1`,`city`,`language`)value (?,?,?,?,?,?,?,?,?,?,?)";
    $data = [$first, $middle, $last, $email, $mobile, $adtype, $pincode, $floatingtextarea, $date1, $city, $language];
    $row = RunQuery($sql, $data);
    echo json_encode($data);
    
}
if ($action == "UpdateData") {

  
    $first = isset($_POST['first']) ? $_POST['first'] : "";
    $middle = isset($_POST['middle']) ? $_POST['middle'] : "";
    $last = isset($_POST['last']) ? $_POST['last'] : "";
    $email = isset($_POST['email']) ? $_POST['email'] : "";
    $mobile = isset($_POST['mobile']) ? $_POST['mobile'] : "";
    $date1 = isset($_POST['date1']) ? $_POST['date1'] : "";
    $adtype = isset($_POST['adtype']) ? $_POST['adtype'] : "";
    $pincode = isset($_POST['pincode']) ? $_POST['pincode'] : "";
    $city = isset($_POST['city']) ? $_POST['city'] : "";
    $language = isset($_POST['language']) ? $_POST['language'] : "";
    $floatingtextarea = isset($_POST['floatingtextarea']) ? $_POST['floatingtextarea'] : "";
    $studentid = isset($_POST['studentid']) ? $_POST['studentid'] : "";
    $sql = "update form set first=?,middle=?,last=?,email=?,mobile=?,adtype=?,pincode=?,floatingtextarea=?,date1=?,city=?,language=? where id=?";
    $data = [$first, $middle, $last, $email, $mobile, $adtype, $pincode, $floatingtextarea, $date1, $city, $language, $studentid];
    RunQuery($sql, $data);
    // update form set first=?,middle=?,last=?,email=?,mobile=?,adtype=?,pincode=?,floatingtextarea=?,date1=?,city=?,language=? where id=?
    echo json_encode($data);
    echo $sql;
    echo $studentid;
}

if ($action == "deletedata") {
    $id = isset($_POST['id']) ? $_POST['id'] : "";
    $sql = "delete from form  where id=$id";
    // $data=[$id];
    $row=RunQuery($sql);
    // print_r($row);
}
if ($action == "select")
{
    // echo $action;
    $sql = "select * from form ";
    $statement = $db->prepare($sql);
    // $statement->bindparam(1,$id);
    $statement->setFetchMode(PDO::FETCH_ASSOC);
    $statement->execute();
    $data = $statement->fetchAll();
    echo json_encode($data);
}

// var_dump($data);
// echo json_encode($data);
