<body bgcolor= white>
<div style="width: 50%; margin: 0 auto; border: 2px double #FF000";
    background-color: white; box-shadow: 1px 1px 10px 1px;">
    <h3 align="center">Insert New Record Here </h3>
<form action="" method="Post">
    <fieldset>
    <div style="padding: 10px; text-align: center;">
          <input type="text" name="Id_Supplier" value="" placeholder="Enter Id Supplier Here"
          style="padding: 5px; width : 90%">
      </div>
      <div style="padding: 10px; text-align: center;">
          <input type="text" name="Id_Store" value="" placeholder="Enter Id Store Here"
          style="padding: 5px; width : 90%">
      </div>
      <div style="padding: 10px; text-align: center;">
          <input type="text" name="Tgl_Kirim" value="" placeholder="Enter Tanggal Kirim Here (YY-MM-DD)"
          style="padding: 5px; width : 90%">
      </div>
      <div style="padding: 10px; text-align: center;">
          <input type="text" name="Tgl_Sampai" value="" placeholder="Enter Tanggal Sampai Here (YY-MM-DD)"
          style="padding: 5px; width : 90%">
      </div>
      <div style="padding: 10px; text-align: center;">
          <input type="text" name="Jasa_Kirim" value="" placeholder="Enter Jasa Kirim  Here"
          style="padding: 5px; width : 90%">
      </div>
      <div style="padding: 10px; text-align: center;">
          <input type="submit" name="ins" value="Edit Data"
          style="padding: 5px; width : 50%">
      </div>
      </fieldset>
</form>
</div>
<?php
if(isset($_POST['ins']))
{
    $con = mysqli_connect("localhost","root","admin","kurma");
    $ids = $_POST ['Id_Supplier'];
    $idst = $_POST ['Id_Store'];
    $tk = $_POST ['Tgl_Kirim'];
    $ts = $_POST ['Tgl_Sampai'];
    $jk = $_POST ['Jasa_Kirim'];
    mysqli_query($con,"insert into ship values('$ids','$idst','$tk','$ts','$jk')");
    echo "<div style= 'box-shadow;  1px 1px 5px 1px rgb(255, 90, 40);'> Data Berhasil Ditambahkan.....<div>";
}
?>
<?php
$con = mysqli_connect("localhost","root","admin","kurma");
$s=mysqli_query($con,"select * from ship");
?>
<style>
    .content-table {
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}
    .content-table thead tr {
    background-color: #009879;
    color: #ffffff;
    text-align: left;
}
    .content-table th,
    .content-table td {
    padding: 12px 15px
}
    .content-table tbody tr {
    border-bottom: 1px solid #dddddd;
}

    .content-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

    .content-table tbody tr:last-of-type {
    border-bottom: 2px solid #009879;
}
    .content-table tbody tr.active-row {
    font-weight: bold;
    color: #009879;
}

</style>
<table class = content-table>
<thead>
    <tr>
        <th>Id_Supplier</th>
        <th>Id_Store</th>
        <th>Tgl_Kirim</th>
        <th>Tgl_Sampai</th>
        <th>Jasa_Kirim</th>
    </tr>
</thead>
<?php
while($r = mysqli_fetch_array($s))
{
?>
<tbody>
    <tr>
        <td><?php echo $r['Id_Supplier']; ?></td>
        <td><?php echo $r['Id_Store']; ?></td>
        <td><?php echo $r['Tgl_Kirim']; ?></td>
        <td><?php echo $r['Tgl_Sampai']; ?></td>
        <td><?php echo $r['Jasa_Kirim']; ?></td>
    </tr>
</tbody>
<?php
}
?>
</table>