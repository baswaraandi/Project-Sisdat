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
          <center><input class="Form-content-style" type="text" name="Id_Store"  value="<?php echo $i; ?>">
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
          <center><input class="Form-content-style" type="text" name="Harga_Rp_perKg" value="" placeholder="Enter Harga per Kg Here"
          style="padding: 7px; width : 70%">
      </div>
      <div class="Form-content-style">
          <center><input class="Form-content-style" type="text" name="Jumlah_Kg" value="" placeholder="Enter Jumlah (Kg) Kurma Here"
          style="padding: 7px; width : 70%">
      </div>
      <div class="Form-content-style">
          <center><input class="Form-content-style" type="text" name="Nama_Pegawai" value="" placeholder="Enter Nama Pegawai Kurma Here"
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
    $i= $_POST ['Id_Store'];
    $jk = $_POST ['Jenis_Kurma'];
    $qk = $_POST ['Qualitas_Kurma'];
    $hg = $_POST ['Harga_Rp_perKg'];
    $jkg = $_POST ['Jumlah_Kg'];
    $np = $_POST ['Nama_Pegawai'];
    mysqli_query($con,"update store set Jenis_Kurma = '$jk', Qualitas_Kurma = '$qk', Harga_Rp_perKg = '$hg', Jumlah_Kg = '$jkg', Nama_Pegawai = '$np' where Id_Store ='$i'");
    echo "<div style= 'box-shadow;  1px 1px 5px 1px rgb(255, 90, 40);'><div>";
}
?>
<?php
$con = mysqli_connect("localhost","root","","kurma");
$s=mysqli_query($con,"select * from store");
?>

<footer>
    <ul>
        <li><a href="store.php">BACK</a></li>
    </ul>
</footer>