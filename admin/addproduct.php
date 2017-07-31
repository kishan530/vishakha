<?php include('header.php') ?>

<?php

	 $name = $category = $status = $description = ''; 
	
   $errors = array();
   $message = '';
   if($_SERVER["REQUEST_METHOD"] == "POST") {

    if (!isset($_POST["product"])) {
               $errors[] = "product is required";
       }
	
	 $name = mysqli_real_escape_string($con,$_POST['product']); 
     $category=$_POST['category'];
	  $description = $_POST['description'];
	 
	 if(isset($_FILES['image'])){
	  
	 
	  $design_file_name = $_FILES['image']['name'];
		  $file_size =$_FILES['image']['size'];
		  $file_tmp =$_FILES['image']['tmp_name'];
		  $file_type=$_FILES['image']['type'];
		  $file_ext=strtolower(end(explode('.',$design_file_name)));
		  
		  $expensions= array("jpeg","jpg","png");
		  
		  if(in_array($file_ext,$expensions)=== false){
			 $errors[]="extension not allowed, please choose a JPEG or PNG file.";
		  }
		  if(count($errors)==0){
			 move_uploaded_file($file_tmp,"../images/product/".$design_file_name);
		  }
	}
	 
     if(count($errors)==0){
	//mysqli_autocommit($con,FALSE);
	//$today = date('Y-m-d H:i:s');
		// Attempt insert query execution
		$sql = "INSERT INTO product (name, description, image, category,active) VALUES ('$name','$description','$design_file_name','$category','1')";
		if(mysqli_query($con, $sql)){
			$message = "product added successfully.";
			 $name = '';
			 $category = ''; 
			 $description = ''; 
		} else{
			 $errors[]= "Could not able to save product " . mysqli_error($con);
		}
	  }
	  
	  if(count($errors)>0){
		//echo var_dump($errors);
		//exit();
	  }
   }
?>

 

  <!-- =============================================== -->

   <?php include('sidebar.php') ?>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add product
        <small>add new product here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
       <!--  <li><a href="#">Projects</a></li> -->
        <li class="active">Add product</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
 <div class="row">
      <div class="col-md-9">
          <!-- general form elements -->
          <div class="box box-primary">
			<h3> <?php echo $message ?> </h3>
			<?php foreach ($errors as $error){ ?>
			<div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
			<?php } ?>
            <!-- form start -->
			
            <form role="form" action="addproduct.php" method="POST" enctype="multipart/form-data">
              <div class="box-body">
				
				<div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" id="product" name="product" placeholder="Enter product" value="<?php echo $name; ?>" required >
                </div>	
				<div class="form-group">
                  <label for="description">Description</label>
			  
                <textarea class="textarea" id="description" name="description" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $description; ?></textarea>
            </div>
				<div class="form-group">
                  <label for="category">Category</label>
				  <select id="category" name="category"  class="form-control">
									<option>Select</option>
									<?php foreach($categories as $ca){ ?>
                                    <option value="<?php echo $ca['id']; ?>" <?php if($category==$ca['id']) echo 'selected'; ?>><?php echo $ca['type']; ?></option>
									<?php } ?>
									<option value="General" <?php if($status) echo 'selected'; ?>>General</option>
                    <option value="Gallery" <?php if(!$status) echo 'selected'; ?>>Gallery</option>
                   </select>
                </div>
              <div id="upload_image_widget">
                <div class='form-group'>
                  <label for='inputFile'>Image</label>
                  <input type='file' id='inputFile' name='image'> 
				<p class='help-block'>Supported formats JPEG, JPG and PNG</p>				  
                </div>
				</div>					
				
             </div>

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
		  </div>
</div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php include('footer.php') ?>