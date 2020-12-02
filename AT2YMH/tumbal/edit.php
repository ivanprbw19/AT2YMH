<?php
// including the database connection file
include_once("config.php");
 
if(isset($_POST['Submit']))
{    
    $id_mhs = $_POST['id_mhs'];
    $nama=$_POST['nama'];
    $brand=$_POST['brand'];
	$sepatu=$_POST['sepatu'];
	$ukuran=$_POST['ukuran'];    
    
    
        $result = mysqli_query($connect, "UPDATE tmhs SET nama='$nama',brand='$brand',sepatu='$sepatu',ukuran='$ukuran' WHERE id_mhs='$id_mhs'");
        
        //redirectig to the display page. In our case, it is index.php
        header("Location: index.php");
    
}
?>
<?php
//error_reporting(0);
//getting id from url
$id_mhs = $_GET['id_mhs'];
 
//selecting data associated with this particular id
$result = mysqli_query($connect, "SELECT * FROM tmhs WHERE id_mhs='$id_mhs'");
 
while($row = mysqli_fetch_array($result))
{
    $nama = $row['nama'];
    $brand = $row['brand'];
	$sepatu = $row['sepatu'];
	$ukuran = $row['ukuran'];
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
				
				<input type="hidden" name="id_mhs" class="form-control" value="<?php echo $id_mhs;?>">
			
		</div>
		<div class="form-group">
				<label>Your Name</label>
				<input type="text" name="nama" class="form-control" value="<?php echo $nama;?>">
			
		</div>
			   <div class="form-group">
				<label>Brand Name</label>
				<input type="text" name="brand" class="form-control" value=" <?php echo $brand;?>">
			</div>
			 <div class="form-group">
				<label>Shoes Name</label>
				<input type="text" name="sepatu" class="form-control" value="<?php echo $sepatu;?>">
			  </div>
				<div class="form-group">
				<label>Size Shoes</label>
				<input type="text" name="ukuran" class="form-control" value="<?php echo $ukuran;?>">
			  </div>
				<div class="form-group">
				
				<input type="Submit" name="Submit" value="update" class="btn btn-primary btn-block" name="update">
			
		
	</form>

</div>
</div>
</div>
</body>
</html>

