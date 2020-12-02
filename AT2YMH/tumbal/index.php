<?php
   include("config.php");
    if(isset($_POST["Submit"]))
    {
    	//post all value
    	extract($_POST);
    	$query = "INSERT INTO `tmhs` (`id_mhs`, `nama`, `brand`, `sepatu`, `ukuran`) VALUES (NULL, '".$nama."', '".$brand."', '".$sepatu."', '".$ukuran."');";

    	mysqli_query($connect,$query);
    	header("location:index.php");
    }


?>
<html>
<head>
	<title>AT2YMH.co</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
</head>

<body>
    <nav id="myNavbar" class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="container">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="#"><img src="images/logo.png" alt="AT2YMH.co"></a>
                        <a class="navbar-brand" href="logout.php"><img src="images/logo.png" alt="Logout"></a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                    </div>
                </div>
            </nav>
            <div class="container" style="width: 800px; margin-top: 100px;">
		<div class="row">
			<div class="col-sm-6"> 
                <h1>Pre-Orders Now!</h1>
                    <form action="" method="post" name="form1">
                        <div class="form-group">
                                <label>Your Name</label>
                                <input type="text" name="nama" class="form-control" placeholder="Enter a Your Name...">
                        </div>
                            <div class="form-group">
                                <label>Brand Name</label>
                                <input type="text" name="brand" class="form-control" placeholder="Enter a Brand Name..">
                            </div>
                            <div class="form-group">
                                <label>Shoes Name</label>
                                <input type="text" name="sepatu" class="form-control" placeholder="Enter a Shoes Name....">
                            </div>
                            <div class="form-group">
                                <label>Size Shoes</label>
                                <input type="text" name="ukuran" class="form-control" placeholder="Enter Your Size Shoes....">
                            </div>
                                <div class="form-group">
                                <input type="Submit" name="Submit" value="Add" class="btn btn-primary btn-block">
                    </form>

</div>
</div>
</div>
    <div class="container" style="width: 870px; margin-top: 10px;">
		<h3 align="center">All the Things You Must Have.</h3>
		<div class="row">
             <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Brand Name</th>
                <th>Shoes Name</th>
                <th>Size Shoes</th>
                <th>Edit</th>
                <th>Delete</th>
                <th>Instagram</th>
            </tr>
        </thead>
        <tbody>
        	<?php
        	      include("config.php");
                  $query ="SELECT * FROM tmhs";
                  $sql = mysqli_query($connect,$query);
                  while($row = mysqli_fetch_array($sql))
                  {

        	?>
            <tr>
                <td><?php echo $row["id_mhs"];?></td>
                <td><?php echo $row["nama"];?></td>
                <td><?php echo $row["brand"];?></td>
                <td><?php echo $row["sepatu"];?></td>
                <td><?php echo $row["ukuran"];?></td>
                <td><a href="edit.php?id_mhs=<?php echo $row['id_mhs'];?>" class="btn btn-info">EDIT</a></td>
                <td><a href="delete.php?id_mhs=<?php echo $row['id_mhs'];?>" class="btn btn-danger" onClick="return confirm('Are you sure you want to delete?')">DELETE</a></td>
                <td><a href="https://www.instagram.com/vanprbw" class="btn btn-info">instagram</a></td>
            </tr>
            <?php } ?>
            
        </tbody>
        
    </table>
		</div>
	</div>
</body>
</html>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
    $('#example').DataTable();
    } );
</script>