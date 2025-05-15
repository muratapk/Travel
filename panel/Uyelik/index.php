<?php 
require_once("../../config/baglan.php");
echo $sql="Select * from uyelik";
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
      <th scope="col">Üye Adı</th>
      <th scope="col">Cep</th>
      <th scope="col">Mail</th>
      <th scope="col">Kullanıcı Adı</th>
      <th scope="col">Şifre</th>
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
      <td><?php echo $row['UyeAd'];?></td>
      <td><?php echo $row['Cep'];?></td>
      <td><?php echo $row['Mail'];?></td>
      <td><?php echo $row['Kul'];?></td>
      <td><?php echo $row['Sifre'];?></td>
      <td><a href="edit.php?oku=<?php echo $row['UyeId'];?>">Düzelt</a></td>
      <td><a href ="delete.php?oku=<?php echo $row['UyeId'];?>">Silme</a></td>
     </tr>

    <?php
      }
   ?>

     


   
   
  </tbody>
</table>