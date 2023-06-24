<?php
// Create database connection using config file
include_once("config.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM tbl_login_ardiansyah ORDER BY id DESC");
?>
 
<html>
<head>     
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Data Supplier</title>
</head>
 
<body>  
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="Menuutama.php">
    <img src="img/images.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="addsupplier.php">Data Supplier</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Viewdata
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="viewdatacustomer.php">Customer</a></li>
            <li><a class="dropdown-item" href="viewdatpemesanan.php">Pemesanan</a></li>
            <li><a class="dropdown-item" href="viewdatasupplier.php">Supplier</a></li>
            <li><a class="dropdown-item" href="viewdatauser.php">user</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link"  href="addcustomer.php">Data Customer</a>
        </li> 
        <li class="nav-item">
          <a class="nav-link" href="adduser.php">Data User</a>
        </li>
      </ul>
      <form action="logout.php" method="post" class="d-flex">
        <button class="btn btn-outline-success" type="submit" name="logout">
        <a href="Index.php">Logout</a> 
        </button>
      </form>
    </div>
  </div>
</nav>  

<table class="table">
      <thead class="thead-dark">
      <tr class="table-dark">
        <th scope="col">Id</th><th scope="col">Username</th><th scope="col">Password</th><th scope="col">Update</th>
    </tr> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    
    <?php   
    while($data_pesan = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$data_pesan['id']."</td>";
        echo "<td>".$data_pesan['username_ardiansyah']."</td>";
        echo "<td>".$data_pesan['password_ardiansyah']."</td>";  
        echo "<td><a href='edituser.php?id=$data_pesan[id]'>Edit</a> | <a href='deleteuser.php?id=$data_pesan[id]'>Delete</a></td></tr>";        
    }
    ?>
</table> 
     </body>
</html>