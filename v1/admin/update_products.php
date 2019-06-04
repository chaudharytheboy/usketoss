<?php
session_start();
include '../database.php';
$error ="";
$url = $_SERVER['DOCUMENT_ROOT'];
if(isset($_POST['update'])){
	$id = $_GET['id'];
	$offer=$_POST['offer'];
	$offer1=$_POST['offer1'];
	$regulartext=$_POST['regulartext'];	
	$url_1=$_POST['url_1'];
	$tracking_link=$_POST['tracking_link'];
	
	if( $id == 49 )
	{
	
	$file_name = $_FILES["images"]["name"];
	$temp_name = $_FILES["images"]["tmp_name"];
	$target_path = "../images/".$file_name;
	$target_path1 = "../images/".$file_name;

	$image_name = $_FILES["images1"]["name"];
	$temperary_name = $_FILES["images1"]["tmp_name"];
	$path = "../images/".$image_name;
	$path1 = "../images/".$image_name;
	}

	elseif( $id == 60 )
	{
	$file_name = $_FILES["images"]["name"];
	$temp_name = $_FILES["images"]["tmp_name"];
	$target_path =  "../../v2/images/".$file_name;
	$target_path2 = "images/".$file_name;
	$target_path1 = "images/".$file_name;
 		
	$image_name = $_FILES["images1"]["name"];
	$temperary_name = $_FILES["images1"]["tmp_name"];
	$path = "../../v2/images/".$image_name;
	$path2 = "images/".$image_name;
	$path1 = "images/".$image_name;
	}
	
	elseif( $id == 61 )
	{
	$file_name = $_FILES["images"]["name"];
	$temp_name = $_FILES["images"]["tmp_name"];
	$target_path =  "../../v3/images/".$file_name;
	$target_path2 = "images/".$file_name;
	$target_path1 = "images/".$file_name;
 		
	$image_name = $_FILES["images1"]["name"];
	$temperary_name = $_FILES["images1"]["tmp_name"];
	$path = "../../v3/images/".$image_name;
	$path2 = "images/".$image_name;
	$path1 = "images/".$image_name;
	}

	elseif( $id == 62 )
	{
	$file_name = $_FILES["images"]["name"];
	$temp_name = $_FILES["images"]["tmp_name"];
	$target_path =  "../../v4/images/".$file_name;
	$target_path2 = "images/".$file_name;
	$target_path1 = "images/".$file_name;
 		
	$image_name = $_FILES["images1"]["name"];
	$temperary_name = $_FILES["images1"]["tmp_name"];
	$path = "../../v4/images/".$image_name;
	$path2 = "images/".$image_name;
	$path1 = "images/".$image_name;
	}
	
	elseif( $id == 63 )
	{
	$file_name = $_FILES["images"]["name"];
	$temp_name = $_FILES["images"]["tmp_name"];
	$target_path =  "../../v5/images/".$file_name;
	$target_path2 = "images/".$file_name;
	$target_path1 = "images/".$file_name;
 		
	$image_name = $_FILES["images1"]["name"];
	$temperary_name = $_FILES["images1"]["tmp_name"];
	$path = "../../v5/images/".$image_name;
	$path2 = "images/".$image_name;
	$path1 = "images/".$image_name;
	}


	if($image_name && $file_name){
	    
		move_uploaded_file($temp_name, $target_path); 
		copy($target_path, $target_path2);
		move_uploaded_file($temperary_name, $path);
		copy($path, $path2);
		mysqli_query($conn,"update products set offer = '$offer', offer1 = '$offer1', images1 = '$path1', images = '$target_path1', regulartext = '$regulartext', url_1 = '$url_1', tracking_link = '$tracking_link'  WHERE id = '$id' ");
	}elseif($file_name){
		move_uploaded_file($temp_name, $target_path);
		mysqli_query($conn,"update products set offer = '$offer', offer1 = '$offer1', images = '$target_path1', regulartext = '$regulartext', url_1 = '$url_1', tracking_link = '$tracking_link'  WHERE id = '$id' ");
	}elseif($image_name){
		move_uploaded_file($temperary_name, $path);
		mysqli_query($conn,"update products set offer = '$offer', offer1 = '$offer1', images1 = '$path1', regulartext = '$regulartext', url_1 = '$url_1', tracking_link = '$tracking_link' WHERE id = '$id' ");
	}else{
		mysqli_query($conn,"update products set offer = '$offer', offer1 = '$offer1', regulartext = '$regulartext', url_1 = '$url_1', tracking_link = '$tracking_link' WHERE id = '$id' ");
	}
	

	header ('Location:dashboard.php');
}
include 'layout-top.php';
$id = $_GET['id'];
$products = mysqli_query($conn,"select * from products where id='$id'");
//print_r($products);exit;
$data = mysqli_fetch_array($products,MYSQLI_BOTH);
//print_r($data);exit;

?>

<div class="col" style='text-align:center;background-color:#cd1e25;color:#fff;letter-spacing:1px;font-family:roboto;padding:2px;margin-top:1rem'>
	<h3>Update Products</h3>
</div>
<a href="dashboard.php"  style="float:right;text-decoration:underline; margin-top:70px; padding-right:200px; font-size:18px;">Go back</a>
<div class="container" style="margin:4rem 0">
	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
			<form method="post" action="" enctype="multipart/form-data" id="submitData">
				<div class="form-group">
					<label>Offer</label>
					<input type="text" name="offer" class="form-control" value="<?php echo $data['offer']; ?>">
				</div>
				<div class="form-group">
					<label>Offer1</label>
					<input type="text" name="offer1" class="form-control" value="<?php echo $data['offer1']; ?>">
				</div>
				<div class="form-group">
					<label>Regular Text</label>
					<input type="text" name="regulartext" class="form-control" value="<?php echo $data['regulartext']; ?>">
				</div>
				
				
			<div class="form-group">
					<label>URL SITE</label>
					<input type="text" name="url_1" class="form-control" value="<?php echo $data['url_1']; ?>" readonly>
				</div>
				<div class="form-group">
					<label>Tracking Link</label>
					<input type="text" name="tracking_link" class="form-control" value="<?php echo $data['tracking_link']; ?>">
				</div>

			<div class="form-group">
	        <label for="exampleInputPassword1">Images</label></br>
	        <img src="<?php echo $data['images'];?>" width="100px;" id = "usasurvey">
	        <input type="file" name="images" onchange = Usasurvey(this); >
	        <input type="hidden" name="image_id" value="<?php echo $data['id']; ?>">
                            
			</div>

			<div class="form-group">
	        <label for="exampleInputPassword1">Images1</label></br>
	        <img src="<?php echo $data['images1'];?>" width="100px;" id = "usaimgpopular">
            <input type="file" name="images1" onchange = Usasurveyimage(this);>
             <input type="hidden" name="image_id" value="<?php echo $data['id']; ?>">
                            
			</div>

			<button type="submit" name="update" class="btn btn-primary" style="width:100%;letter-spacing:2px;">Update</button>
		</form>
	</div>
</div>
</div>
<?php
include 'layout-bottom.php';
?>