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
          <center><input class="Form-content-style" type="text" name="Id_Stock" value="<?php echo $i; ?>"> 
      </div>
      <div class="Form-content-style">
          <center><input class="Form-content-style" type="text" name="Jenis_Kurma" value="" placeholder="Enter Jenis Kurma Here"
          style="padding: 7px; width : 70%">
      </div>
      <div class="Form-content-style">
          <center><input class="Form-content-style" type="text" name="Qualitas_Kurma" value="" placeholder="Enter Qualitas Kurma Here"
          style="padding: 7px; width : 70%">
      </div>
      <div class="Form-content-style">
          <center><input class="Form-content-style" type="text" name="Asal_Negara" value="" placeholder="Enter Asal Negara Here"
          style="padding: 7px; width : 70%">
      </div>
      <div class="Form-content-style">
          <center><input class="Form-content-style" type="text" name="Ketersediaan_Kg" value="" placeholder="Enter Ketersediaan(KG) Kurma Here"
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
    $i  = $_POST ['Id_Stock'];
    $jk = $_POST ['Jenis_Kurma'];
    $qk = $_POST ['Qualitas_Kurma'];
    $an = $_POST ['Asal_Negara'];
    $kk = $_POST ['Ketersediaan_Kg'];
    mysqli_query($con,"update stock set Jenis_Kurma = '$jk', Qualitas_Kurma = '$qk', Asal_Negara = '$an', Ketersediaan_Kg = '$kk' where Id_Stock ='$i'");
    echo "<div style= 'box-shadow;  1px 1px 5px 1px rgb(255, 90, 40);'><div>";
    header("location:stock.php");
}
?>
<?php
$con = mysqli_connect("localhost","root","","kurma");
$s=mysqli_query($con,"select * from stock");
?>

<footer>
    <ul>
        <li><a href="stock.php">BACK</a></li>
    </ul>
</footer>