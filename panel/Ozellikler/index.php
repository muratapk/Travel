<?php
 require_once("../../config/baglan.php");
 $sql="Select * from ozellikler";
 $result = mysqli_query($conn, $sql);
 if(mysqli_num_rows($result)>0)
 {

 }
 else
 {
    echo "<h2>Kayıtlı Veri Yok</h2>";
 }
 ?>
 <a href="create.php">Yeni Kayıt</a>


 <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Özellik Adı</th>
      <th scope="col">Simgesi</th>

      <th scope="col">Düzeltme</th>
      <th scope="col">Silme</th>
</tr>


   <tbody>
      <?php
      while($row=mysqli_fetch_assoc($result))
      {
        ?>
        <tr>
      <th scope="row">1</th>
      <td><?php echo $row['OzelAd'];?></td>
      <td><?php echo $row['OzelSimge'];?></td>
      
      
      <td><a href="edit.php?oku=<?php echo $row['OzelId'];?>">Düzelt</a></td>
      <td><a href ="delete.php?oku=<?php echo $row['OzelId'];?>">Silme</a></td>
    </tr>


<?php
      }
    ?>
    
  </tbody>


</table>
