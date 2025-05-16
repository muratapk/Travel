<?php 
require_once("../../config/baglan.php");
echo $sql="Select * from rezervasyon";
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
      <th scope="col">RezervasyonId</th>
      <th scope="col">GirisTarih</th>
      <th scope="col">CikisTarih</th>
      <th scope="col">Yetiskin</th>
      <th scope="col">UyeId</th>
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
      <td><?php echo $row['RezervasyonId'];?></td>
      <td><?php echo $row['GirisTarih'];?></td>
      <td><?php echo $row['CikisTarih'];?></td>
      <td><?php echo $row['Yetiskin'];?></td>
      <td><?php echo $row['UyeId'];?></td>
      <td><a href="edit.php?oku=<?php echo $row['RezervasyonId'];?>">Düzelt</a></td>
      <td><a href ="delete.php?oku=<?php echo $row['RezervasyonId'];?>">Silme</a></td>
     </tr>

    <?php
      }
   ?>

     


   
   
  </tbody>
</table>