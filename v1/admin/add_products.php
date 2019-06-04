<?php
include 'layout-top.php';
include '../database.php';
if(isset($_POST['add'])){
	$offer=$_POST['offer'];
	$offer1=$_POST['offer1'];
	$url_1=$_POST['url_1'];
	$regulartext=$_POST['regulartext'];

	$file_name = $_FILES["images"]["name"];
	$temp_name = $_FILES["images"]["tmp_name"];
	$target_path = $file_name;
	$target_path1 = $file_name;

	$file_name = $_FILES["images1"]["name"];
	$temp_name = $_FILES["images1"]["tmp_name"];
	$target_path = $file_name;
	$path = $image_name;
    $path1 = $file_name;

	move_uploaded_file($temp_name, $target_path);
	move_uploaded_file($temp_name, $target_path);
	mysqli_query($conn,"INSERT INTO `products` (`offer`,`offer1`,`regulartext`,`url_1`,`images`,`images1`) VALUES ('$offer','$offer1','$regulartext','$url_1','".$target_path1."','".$path1."')");
	header ('Location:dashboard.php');
}
?>
<div class="col" style='text-align:center;background-color:#cd1e25;color:#fff;letter-spacing:1px;font-family:roboto;padding:2px;margin-top:1rem'>
	<h3>Add Products</h3>
</div>
<a href="dashboard.php"  style="float:right;text-decoration:underline; margin-top:70px; padding-right:200px; font-size:18px;">Go back</a>
<div class="container" style="margin:4rem 1">
	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
			<form method="post" action="add_products.php" enctype="multipart/form-data" id="submitData">
				<div class="form-group">
					<label>Offer</label>
					<input type="text" name="offer" class="form-control">
				</div>
				<div class="form-group">
					<label>Offer1</label>
					<input type="text" name="offer1" class="form-control">
				</div>
				<div class="form-group">
					<label>Regular Text</label>
					<input type="text" name="regulartext" class="form-control">
				</div>
				<div class="URL"><select name="url_1">
					<option value="Select URL">Select URL</option>
					<option value="http://fitbitty.com/usketoss/v1/">http://fitbitty.com/usketoss/v1/</option>
					<option value="http://fitbitty.com/usketoss/v2/">http://fitbitty.com/usketoss/v2/</option>
					<option value="http://fitbitty.com/usketoss/v3/">http://fitbitty.com/usketoss/v3/</option>
					<option value="http://fitbitty.com/usketoss/v4/">http://fitbitty.com/usketoss/v4/</option>
					<option value="http://fitbitty.com/usketoss/v5/">http://fitbitty.com/usketoss/v5/</option>
				</select>
			</div>


			<div class="form-group">
	        <label for="exampleInputPassword1">Images</label></br>
	        <img src="../<?php echo $data['images'];?>" width="100px;" id = "usasurvey">
	        <input type="file" name="images" onchange = Usasurvey(this); >
	        <input type="hidden" name="image_id" value="<?php echo $data['id']; ?>">
                            
			</div>

			<div class="form-group">
	        <label for="exampleInputPassword1">Images1</label></br>
	        <img src="../<?php echo $data['images1'];?>" width="100px;" id = "usaimgpopular">
            <input type="file" name="images1" onchange = Usasurveyimage(this);>
             <input type="hidden" name="image_id" value="<?php echo $data['id']; ?>">
                            
			</div>

			<button type="submit" name="add" class="btn btn-primary" style="width:100%;letter-spacing:2px;">Add</button>
		</form>
	</div>
</div>
</div>
<?php
include 'layout-bottom.php';
?>