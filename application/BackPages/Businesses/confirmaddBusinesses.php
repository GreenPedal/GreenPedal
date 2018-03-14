<?php
	session_start();
	
	if(!isset($_SESSION['admin'])) {
		header("Location:index.php");
	}
	
	if(isset($_POST['submit'])) {
		$_SESSION['addBusinesses']['name']=$_POST['name'];
		$_SESSION['addBusinesses']['website']=$_POST['website'];
    
	} else {
		if($_SESSION['addBusinesses']['pic']!="noimage.jpg"){
			unlink("images/".$_SESSION['addBusinesses']['Pic']);
		}
	
		}
	
	if($_FILES['fileToUpload']['name']!="") {
		$_SESSION['addBusinesses']['Pic']=$_FILES['fileToUpload']['name'];
		$target_dir = "images/";
		$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		if(isset($_POST["submit"])) {
			$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
			if($check !== false) {
				//echo "File is an image - " . $check["mime"] . ".";
				$uploadOk = 1;
			} else {
				echo "File is not an image.";
				$uploadOk = 0;
			}
		}
		if ($_FILES["fileToUpload"]["size"] > 500000) {
			echo "Sorry, your file is too large.";
			$uploadOk = 0;
		}
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" ) {
			echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
			$uploadOk = 0;
		}
		if ($uploadOk == 0) {
			echo "Sorry, your file was not uploaded.";
		} else {
			
		if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
			?>
<center>
  <?php  include("header.php");?>

  <div class="text">
    <h1>Confirm User details</h1>
  <p><img height="100" width="100" src="images/<?php echo $_SESSION['addBusinesses']['Pic']; ?>" /> </p>
  <p><?php echo $_SESSION['addBusinesses']['name']; ?></p>
  <p><?php echo $_SESSION['addBusinesses']['website']; ?> </p>
<?php
		} else {
			echo "Sorry, there was an error uploading your file.";
		}
	}
		?>
<?php
	}
?>
<p><a href="index.php?page=Businesses/addBusinesses&update=true">Go back</a> - <a href="index.php?page=Businesses/enterBusinesses">Confirm</a></p>
</div>
</center>
