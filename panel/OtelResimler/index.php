<?php 
require_once("../../config/baglan.php");
echo $sql="Select * from otelresimler";
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
      <th scope="col">ResimAdi</th>
      <th scope="col">ResimId</th>
      <th scope="col">OtelId</th>
      <th scope="col">ResimYolu</th>
      
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
      <td><?php echo $row['ResimAdi'];?></td>
      <td><?php echo $row['ResimId'];?></td>
      <td><?php echo $row['OtelId'];?></td>
      <td><?php echo $row['ResimYolu'];?></td>
     
      <td><a href="edit.php?oku=<?php echo $row['ResimId'];?>">Düzelt</a></td>
      <td><a href ="delete.php?oku=<?php echo $row['ResimId'];?>">Silme</a></td>
     </tr>

    <?php
      }
   ?>

     


   
   
  </tbody>
</table>