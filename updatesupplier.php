<body bgcolor= white>
<?php $i = $_GET['i'];?>
<link rel="stylesheet" href="admin-style.css">
<nav>
    <a href="index.php"><img class="Logopic" src="assets/logo_kurded.png" alt="logo_kurded"></a>
    <h1 class="Title_Navbar">Toko Kurma Barokah Al-Swagiyyah</h1>
</nav>
<div class="Form-title-style">
    <h3 class="Form-title">Update Record Here</h3>
</div>
<form action="" method="Post">
    <fieldset class="Fieldset">
      <div class="Form-content-style">
          <center><input class="Form-content-style" type="text" name="Id_Supplier" value="<?php echo $i; ?>"> 
      </div>
      <div class="Form-content-style">
          <center><input class="Form-content-style" type="text" name="Nama_Supplier" value="" placeholder="Enter Nama Supplier Here"
          style="padding: 7px; width : 70%">
      </div>
      <div class="Form-content-style">
          <center><input class="Form-content-style" type="date" name="Tgl_Masuk" value="" placeholder="Enter Tanggal Masuk Here (YY-MM-DD)"
          style="padding: 7px; width : 70%">
      </div>
      <div class="Form-submit-style">
          <center><input class="Form-submit-style" type="submit" name="up" value="Update Data"
          style="padding: 5px; width : 30%">
      </div>
      </fieldset>
</form>
</div>
<?php
if(isset($_POST['up']))
{
    $con = mysqli_connect("localhost","root","","kurma");
    $i = $_POST ['Id_Supplier'];
    $ns = $_POST ['Nama_Supplier'];
    $tm = $_POST ['Tgl_Masuk'];
    mysqli_query($con,"update supplier set Nama_Supplier = '$ns', Tgl_Masuk = '$tm' where Id_Supplier ='$i'");
    echo "<div style= 'box-shadow;  1px 1px 5px 1px rgb(255, 90, 40);'><div>";
    header("location:supplier.php");
}
?>
<?php
$con = mysqli_connect("localhost","root","","kurma");
$s=mysqli_query($con,"select * from supplier");
?>

<footer>
    <ul>
        <li><a href="supplier.php">BACK</a></li>
    </ul>
</footer>