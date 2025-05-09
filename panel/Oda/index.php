<?php
require_once("../../config/baglan.php");

$sql = "SELECT * FROM oda";
$result = mysqli_query($conn, $sql);
?>

<a href="create.php" class="btn btn-success mb-3">Yeni Kayıt</a>

<?php if (mysqli_num_rows($result) > 0) { ?>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>#</th>
        <th>Oda Adı</th>
        <th>Oda Fiyatı</th>
        <th>Oda Durumu</th>
        <th>İşlemler</th>
      </tr>
    </thead>
    <tbody>
      <?php while ($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
          <td><?php echo $row['OdaId']; ?></td>
          <td><?php echo $row['OdaAdi']; ?></td>
          <td><?php echo $row['OdaFiyat']; ?></td>
          <td><?php echo $row['OdaDurum']; ?></td>
          <td>
            <a href="edit.php?oku=<?php echo $row['OdaId']; ?>" class="btn btn-sm btn-primary">Düzelt</a>

            <form action="delete.php" method="post" style="display:inline;">
              <input type="hidden" name="OdaId" value="<?php echo $row['OdaId']; ?>">
              <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Silmek istediğinizden emin misiniz?');">
                Sil
              </button>
            </form>
          </td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
<?php } else {
  echo "<h4>Kayıtlı Oda Yok</h4>";
} ?>
