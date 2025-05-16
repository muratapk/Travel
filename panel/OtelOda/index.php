<?php 
require_once("../../config/baglan.php");
echo $sql="Select * from oteloda";
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
      <th scope="col">OtelOdaId</th>
      <th scope="col">OtelId</th>
      <th scope="col">OdaId</th>
      
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
      <td><?php echo $row['OtelOdaId'];?></td>
      <td><?php echo $row['OtelId'];?></td>
      <td><?php echo $row['OdaId'];?></td>
      
      <td><a href="edit.php?oku=<?php echo $row['OtelOdaId'];?>">Düzelt</a></td>
      <td><a href ="delete.php?oku=<?php echo $row['OtelOdaId'];?>">Silme</a></td>
     </tr>

    <?php
      }
   ?>

     


   
   
  </tbody>
</table>