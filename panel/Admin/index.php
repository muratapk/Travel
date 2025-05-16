<?php
 require_once("../config/baglan.php");
 $sql="Select * from admin";
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
   <tbody>
      <?php
      while($row=mysqli_fetch_assoc($result))
      {
        ?>
        <tr>
      <th scope="row">1</th>
      <td><?php echo $row['Kul'];?></td>
      <td><?php echo $row['Sifre'];?></td>
      <td><?php echo $row['Yetki'];?></td>
      <td><a href="edit.php?oku=<?php echo $row['AdminId'];?>">Düzelt</a></td>
      <td><a href ="delete.php?oku=<?php echo $row['AdminId'];?>">Silme</a></td>
    </tr>


<?php
      }
    ?>
    
  </tbody>


</table>
