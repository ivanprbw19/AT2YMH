<?php
   include("config.php");
    if(isset($_POST["submit"]))
    {
    	//post all value
    	extract($_POST);
    	$query = "INSERT INTO `sepatu` (`id_sepatu`, `brand`, `type`, `size`) VALUES (NULL, '".$brand."', '".$type."', '".$size."');";

    	mysqli_query($connect,$query);
    	header("location:index.php");
    }


?>
<html>
<head>
	<title>AT2YMH.co</title>
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
                            <form action="" method="POST" name="form1">
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
                                    <input type="text" name="type" class="form-control" placeholder="Enter a Shoes Name....">
                                </div>
                                <div class="form-group">
                                    <label>Size Shoes</label>
                                    <input type="text" name="size" class="form-control" placeholder="Enter Your Size Shoes....">
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="submit" value="Add" class="btn btn-primary btn-block">
                                </div>
                            </form>
                        </h1>
                    </div>
                </div>
            </div>
        <div class="container" style="width: 800px; margin-top: 10px;">
            <h3 align="center">All the Things You Must Have.</h3>
                <div class="row">
                    <table id="example" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Customer</th>
                                <th>Address</th>
                                <th>Brand</th>
                                <th>Type</th>
                                <th>Size</th>
                                <th>Payment Code</th>
                                <th>Edit</th>
                                <th>Delete</th>
                                <th>Instagram</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $query ="SELECT cust.nama, cust.alamat, cust.telp, cust.id_cust, sepatu.id_sepatu, sepatu.brand, sepatu.type, sepatu.size, pembayaran.id_pembayaran FROM cust INNER JOIN sepatu ON cust.id_cust = sepatu.id_sepatu INNER JOIN pembayaran ON cust.id_cust = pembayaran.id_pembayaran ";
                                $sql = mysqli_query($connect,$query);
                                while($row = mysqli_fetch_array($sql))
                                {

                            ?>
                                <tr>
                                    <td><?php echo $row["id_cust"];?></td>
                                    <td><?php echo $row["nama"];?></td>
                                    <td><?php echo $row["alamat"];?></td>
                                    <td><?php echo $row["telp"];?></td>
                                    <td><?php echo $row["brand"];?></td>
                                    <td><?php echo $row["type"];?></td>
                                    <td><?php echo $row["size"];?></td>
                                    <td><?php echo $row["id_pembayaran"];?></td>
                                    <td><a href="edit.php?id_sepatu=<?php echo $row['id_sepatu'];?>">EDIT</a></td>
                                    <td><a href="delete.php?id_sepatu=<?php echo $row['id_sepatu'];?>" onClick="return confirm('Are you sure you want to delete?')">DELETE</a></td>
                                    <td><a href="https://www.instagram.com/vanprbw" class="btn btn-info">instagram</a></td>
                                </tr>
                            <?php 
                                } 
                            ?>           
                        </tbody>   
                    </table>
		        </div>
            </h3>
	    </div>
</body>
</html>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
        $('#example').DataTable();
        } );
    </script>