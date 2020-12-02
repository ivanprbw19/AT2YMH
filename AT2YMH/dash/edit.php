<?php
// including the database connection file
include_once("config.php");
 
if(isset($_POST['Submit']))
{    
    $id_mhs =$_POST['id_sepatu'];
    $brand	=$_POST['brand'];
	$sepatu	=$_POST['type'];
	$ukuran	=$_POST['size'];    
    
    
        $result = mysqli_query($connect, "UPDATE sepatu SET brand='$brand',type='$type',size='$size' WHERE id_sepatu='$id_sepatu'");
        
        //redirectig to the display page. In our case, it is index.php
        header("Location: index.php");
    
}
?>
<?php
	//error_reporting(0);
	//getting id from url
	$id_mhs = $_GET['id_sepatu'];
	
	//selecting data associated with this particular id
	$result = mysqli_query($connect, "SELECT * FROM sepatu WHERE id_sepatu='$id_sepatu'");
	
	while($row = mysqli_fetch_array($result))
	{
		$brand = $row['brand'];
		$type = $row['type'];
		$size = $row['size'];
	}
?>
<html>
	<head>
		<title>Edit Data</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>										
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>

	<body>
		<div class="container" style="width: 800px; margin-top: 100px;">
			<div class="row">
				<h3>Change Action</h3>
					<div class="col-sm-6"> 
						<form action="" method="post" name="form1">
							<div class="form-group">	
								<input type="hidden" name="id_sepatu" class="form-control" value="<?php echo $id_sepatu;?>">
							</div>
							<div class="form-group">
								<label>Brand</label>
								<input type="text" name="brand" class="form-control" value=" <?php echo $brand;?>">
							</div>
							<div class="form-group">
								<label>Type Of Shoes</label>
								<input type="text" name="sepatu" class="form-control" value="<?php echo $type;?>">
							</div>
							<div class="form-group">
								<label>Size</label>
								<input type="text" name="ukuran" class="form-control" value="<?php echo $size;?>">
							</div>
							<div class="form-group">	
								<input type="Submit" name="Submit" value="update" class="btn btn-primary btn-block" name="update">
							</div>
						</form>
					</div>
				</h3>
			</div>
		</div>
	</body>
</html>

