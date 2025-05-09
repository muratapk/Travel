<?php 
require_once("../../config/baglan.php");
$sql="Select * from kategori";
$result = mysqli_query($conn, $sql);
//veritabanında sorgu çalışmak için kullanıyor
if(mysqli_num_rows($result)>0)
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
      <th scope="col">Kategori Adı</th>
      
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
      <td><?php echo $row['KategoriAdi'];?></td>
      
      <td><a href="edit.php?oku=<?php echo $row['KategoriId'];?>">Düzelt</a></td>
      <td><a href ="delete.php?oku=<?php echo $row['KategoriId'];?>">Silme</a></td>
     </tr>

    <?php
      }
   ?>

     


   
   
  </tbody>
</table>