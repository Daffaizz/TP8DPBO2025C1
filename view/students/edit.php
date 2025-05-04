<?php include __DIR__ . '/../layout/header.php'; ?>
<?php $student = $data['student']; ?>
<!DOCTYPE html>
<html>
<head>
  <title>Ubah</title>
  <link rel="stylesheet" href="assets/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="assets/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-lg-6">
        <div class="card shadow">
          <div class="card-header bg-warning text-center">
            <h1 class="text-white">Update Student</h1>
          </div>
          <div class="card-body">
            <form method="post" action="index.php?controller=student&action=update">
              <input type="hidden" name="id" value="<?= $student['id'] ?>" class="form-control">
              <div class="mb-3">
                <label for="name" class="form-label">NAME:</label>
                <input type="text" id="name" name="name" value="<?= $student['name'] ?>" class="form-control">
              </div>
              <div class="mb-3">
                <label for="nim" class="form-label">NIM:</label>
                <input type="text" id="nim" name="nim" value="<?= $student['nim'] ?>" class="form-control">
              </div>
              <div class="mb-3">
                <label for="phone" class="form-label">PHONE:</label>
                <input type="text" id="phone" name="phone" value="<?= $student['phone'] ?>" class="form-control">
              </div>
              <div class="mb-3">
                <label for="join_date" class="form-label">JOIN DATE:</label>
                <input type="date" id="join_date" name="join_date" value="<?= $student['join_date'] ?>" class="form-control">
              </div>
              <div class="d-grid gap-2">
                <button class="btn btn-success" type="submit">Submit</button>
                <a class="btn btn-info" href="index.php">Cancel</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
<?php include __DIR__ . '/../layout/footer.php'; ?>