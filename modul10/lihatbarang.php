<!DOCTYPE html>
<html lang="en">
<head>
  <title>Prak Web</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<style>
table {
    border-collapse: collapse;
    width: 70%;
	text-align: center;
    font-size:18px;
}

th, td {
    text-align: left;
    padding: 8px;
}

th {
    background-color: darkblue;
    color: white;
}

</style>

<body>



<?php
session_start();

?>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#" data-toggle="tooltip" title="Ma Chung!">Toko Online Ma Chung</a>
    </div>
	
    <ul class="nav navbar-nav">
      <li class="active"><a href="#" data-toggle="tooltip" >Home</a></li>
   
	   <li><a href="lihatbarang.php" data-toggle="tooltip" >Lihat Barang</a></li>
    </ul>
	
    <ul class="nav navbar-nav navbar-right">
    
	 
    </ul>
	
  </div>
</nav>
	 <br>
	 
	 
<?php

$db = new mysqli('localhost','root','','toko'); 

if (mysqli_connect_errno()) 
{ 
	echo 'Error!'; exit(); 
} 
$query="Select * FROM barang"; 
$result=$db->query($query); 
{ 
echo"<table border='1' width='60%' style='margin:50px;'> 
<tr> 
	<th>Gambar barang</th> 
	<th>Nama Barang</th> 
	<th>Harga</th> 
	<th>Add To Cart</th> 
</tr>"; 

while($row = mysqli_fetch_assoc($result)) 
{ 
echo "<tr>"; 
?>

<td><img src="img/<?php echo $row['nama_barang']?>.png" alt="" /></td>
<?php

echo '<td>'.$row['nama_barang'].'</td>'; 
echo '<td>'.$row['harga'].'</td>'; 
echo '<td> <a href="#?id=' . $row['id'] . '"><button class="btn btn-info"><span class="glyphicon glyphicon-shopping-cart " ></span>Add To Cart </button></a></td>';

echo "</tr>"; 
} 
} 
echo "</table>"; 


?>

</body>

</html>

