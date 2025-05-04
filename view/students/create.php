<?php include __DIR__ . '/../layout/header.php'; ?>
<?php
if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $nim = $_POST['nim'];
  $phone = $_POST['phone'];
  $join_date = $_POST['join_date'];
  $q = "INSERT INTO `students`(`name`, `nim`, `phone`, `join_date`) VALUES ('$name', '$nim', '$phone', '$join_date')";

  $query = mysqli_query($conn, $q);
}
?>
<!DOCTYPE html>
<html>
  <title>Tambah</title>
  <link rel="stylesheet" href="bootstrap.min.css">
<head>
<body>
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-lg-6">
        <form method="post" action="index.php?controller=student&action=store">
          <div class="card shadow">
            <div class="card-header bg-primary">
              <h1 class="text-white text-center">Create Student</h1>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label>NAME:</label>
                <input type="text" name="name" class="form-control" required>
              </div>
              <div class="form-group">
                <label>NIM:</label>
                <input type="text" name="nim" class="form-control" required>
              </div>
              <div class="form-group">
                <label>PHONE:</label>
                <input type="text" name="phone" class="form-control" required>
              </div>
              <div class="form-group">
                <label>JOIN DATE:</label>
                <input type="date" name="join_date" class="form-control" required>
              </div>
            </div>
            <div class="card-footer text-center">
              <button class="btn btn-success" type="submit" name="submit">Submit</button>
              <a class="btn btn-info" href="index.php">Cancel</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
<?php include __DIR__ . '/../layout/footer.php'; ?>