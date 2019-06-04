<?php
session_start();
include '../database.php';
$error ="";
error_reporting(E_ALL);
ini_set('display_errors',1);
//print_r($_POST['idfrom']);
//die;
if(isset($_POST['productID']) && $_POST['productID'] != "")
{
  $fromIDs = explode('_', $_POST['productID']);  
  $update = mysqli_query($conn,"update products set images='' where id=".$fromIDs[1]);
  $response = array('status'=>TRUE);
  echo json_encode($response);
}

if(isset($_POST['image_id']) && $_POST['image_id'] != "")
{
  $fromIDs = explode('_', $_POST['image_id']);
  $update = mysqli_query($conn, "update products set images1 ='' where id =" .$fromIDs[1]); 
  echo json_encode(array('status' => TRUE));
}

if(isset($_POST['idfrom'])  && isset($_POST['idTo']))
{
  $offerFrom = trim($_POST['offerfrom']);
  $offer1From = trim($_POST['offer1from']);
  $_POST['proImagefrom'] = str_replace('../',"",$_POST['proImagefrom']);
  $_POST['proImage1from'] = str_replace('../',"",$_POST['proImage1from']);
  $regulartextFrom = trim($_POST['regulartextfrom']);
  
  $offerTo = trim($_POST['offerTo']); 
  $offer1To = trim($_POST['offer1To']); 
  $_POST['proImageTo'] = str_replace('../',"",$_POST['proImageTo']);
  $_POST['proImage1To'] = str_replace('../',"",$_POST['proImage1To']);
  $regulartextTo = trim($_POST['regulartextTo']); 
  $fromIDs = explode('_', $_POST['idfrom']);

  $update = mysqli_query($conn,"update products set tracking_link ='".$_POST['tracking_linkfrom']."', offer = '".$offerFrom."', 
    offer1 = '".$offer1From."', images = '".$_POST['proImagefrom']."', images1 = '".$_POST['proImage1from']."', regulartext = '".$regulartextFrom."' where id=".$fromIDs[1]);
$roIDs = explode('_', $_POST['idTo']);  

  $update = mysqli_query($conn,"update products set tracking_link ='".$_POST['tracking_linkTo']."', offer = '".$offerTo."', offer1 = '".$offer1To."',
  images = '".$_POST['proImageTo']."', images1 = '".$_POST['proImage1To']."', regulartext = '".$regulartextTo."' where id=".$roIDs[1]);
  $response = array('status'=>TRUE);
  echo json_encode($response);
}
