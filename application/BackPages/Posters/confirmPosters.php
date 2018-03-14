<?php
	session_start();
	
	if(!isset($_SESSION['admin'])) {
		header("Location:index.php");
	}
	
	if(isset($_POST['submit'])) {
		$_SESSION['addPosters']['name']="";
		$_SESSION['addPosters']['website']="";	
		$_SESSION['addPosters']['pic']="noimage.jpg";
	} else {
		header("Location:index.php");
	}
	
	
	if($_FILES['fileToUpload']['name']!="") {
		$_SESSION['addPosters']['pic']=$_FILES['fileToUpload']['name'];
		$target_dir = "Posters/image/";
		$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		// Check if image file is a actual image or fake image
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
		// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" ) {
			echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
			$uploadOk = 0;
		}
		
		if ($uploadOk == 0) {
			echo "Sorry, your file was not uploaded.";
			// if everything is ok, try to upload file
		} else {
		if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
			?>
<center>
  <?php  include("header.php");?>

  <div class="text">
    <h1>Confirm item details</h1>
				<p><img height="100" width="100" src="images/<?php echo $_SESSION['addPosters']['pic']; ?>" /></img></p>
				<p>
          <?php echo $_SESSION['addPosters']['name']; ?></p>
				<p>
            <?php echo $_SESSION['addPosters']['website']; ?></p>


  </div>	
  <?php
		} else {
			echo "Sorry, there was an error uploading your file.";
		}
	}
	
} // the code below only runs if no image is selected	
	else {
		$_SESSION['addPosters']['pic']="noimage.jpg";
		?>
		<div class="text">
				<p>NO PIC</p>
          <?php echo $_SESSION['addPosters']['name']; ?>
        </p>
				<p>
            <?php echo $_SESSION['addPosters']['website']; ?></p>
				
			
			
			
		<?php
	}
?>
<p><a href="index.php?page=Businesses/addBusinesses">Go back</a> - <a href="index.php?page=Businesses/enterBusinesses">Confirm</a></p>
</div>
</center>
