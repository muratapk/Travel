<?php
 require_once("../../config/baglan.php");
 $sql="Select * from yorumlar";
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
      <th scope="col">OtelId</th>
      <th scope="col">YorumAd</th>
       <th scope="col">Yorum</th>
        <th scope="col">Gizle</th>
         

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
      <td><?php echo $row['OtelId'];?></td>
      <td><?php echo $row['YorumAd'];?></td>
      <td><?php echo $row['Yorum'];?></td>
      <td><?php echo $row['Gizle'];?></td>
      
      
      
      <td><a href="edit.php?oku=<?php echo $row['YorumId'];?>">Düzelt</a></td>
      <td><a href ="delete.php?oku=<?php echo $row['YorumId'];?>">Silme</a></td>
    </tr>


<?php
      }
    ?>
    
  </tbody>


</table>
