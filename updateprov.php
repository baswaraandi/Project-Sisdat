<body bgcolor= white>
<?php $i = $_GET['i'];?>
<link rel="stylesheet" href="admin-style.css">
<nav>
    <img class="Logopic" src="assets/logo_kurded.png" alt="logo_kurded">
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
          <center><input class="Form-content-style" type="text" name="Id_Supplier" value="" placeholder="Enter Id Supplier Here"
          style="padding: 7px; width : 70%">
      </div>
      <div class="Form-content-style">
          <center><input class="Form-content-style" type="date" name="Tgl_Ambil" value="" placeholder="Enter Tanggal Ambil Here (YY-MM-DD)"
          style="padding: 7px; width : 70%">
      </div>
      <div class="Form-submit-style">
          <center><input class="Form-submit-style" type="submit" name="ins" value="Update Data"
          style="padding: 5px; width : 30%">
      </div>
      </fieldset>
</form>
</div>
<?php
if(isset($_POST['up']))
{
    $con = mysqli_connect("localhost","root","","kurma");
    $i = $_POST ['Id_Stock'];
    $ids = $_POST ['Id_Supplier'];
    $ta = $_POST ['Tgl_Ambil'];
    mysqli_query($con,"update provide set Id_Supplier = '$ids', Tgl_Ambil = '$ta' where Id_Stock ='$i'");
    echo "<div style= 'box-shadow;  1px 1px 5px 1px rgb(255, 90, 40);'><div>";
}
?>
<?php
$con = mysqli_connect("localhost","root","","kurma");
$s=mysqli_query($con,"select * from provide");
?>

<footer>
    <ul>
        <li><a href="provide.php">BACK</a></li>
    </ul>
</footer>