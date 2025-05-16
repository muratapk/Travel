<?php 
require_once("../../config/baglan.php");
echo $sql="Select * from rezerveoda";
$result = mysqli_query($conn, $sql);
//veritabanında sorgu çalışmak için kullanıyor
if($result)
{

}
else
{
    echo "<h2>Kayıtlı Veri Yok</h2>";
}
?>
<a  href="create.php">Yeni Kayıt</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">RezerveOdaId</th>
      <th scope="col">OtelId</th>
      <th scope="col">OdaId</th>
      <th scope="col">GirisTarihi</th>
      <th scope="col">CikisTarihi</th>
      <th scope="col">OdaDurumu</th>
      <th scope="col">Düzelt</th>
      <th scope="col">Silme</th>
    </tr>
  </thead>
  <tbody>
   <?php
    while($row=mysqli_fetch_assoc($result))
      {
        ?>
    <tr>
      <th scope="row">1</th>
      <td><?php echo $row['RezerveOdaId'];?></td>
      <td><?php echo $row['OtelId'];?></td>
      <td><?php echo $row['OdaId'];?></td>
      <td><?php echo $row['GirisTarihi'];?></td>
      <td><?php echo $row['CikisTarihi'];?></td>
      <td><?php echo $row['OdaDurumu'];?></td>
      <td><a href="edit.php?oku=<?php echo $row['RezerveOdaId'];?>">Düzelt</a></td>
      <td><a href ="delete.php?oku=<?php echo $row['RezerveOdaId'];?>">Silme</a></td>
     </tr>

    <?php
      }
   ?>

     


   
   
  </tbody>
</table>