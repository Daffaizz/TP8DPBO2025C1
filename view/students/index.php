<!DOCTYPE html>
<html>
<head>
  <title>Student List</title>
  <link rel="stylesheet" href="assets/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="assets/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
  <?php include __DIR__ . '/../layout/header.php'; ?>

  <div class="container mt-4">
    <h2>Students</h2>
    <a href="index.php?controller=student&action=create" class="btn btn-primary mb-2">Add Student</a>
    <table class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>Id</th>
          <th>Name</th>
          <th>NIM</th>
          <th>Phone</th>
          <th>Join Date</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($students as $student): ?>
          <tr>
            <td><?= $student['id'] ?></td>
            <td><?= $student['name'] ?></td>
            <td><?= $student['nim'] ?></td>
            <td><?= $student['phone'] ?></td>
            <td><?= $student['join_date'] ?></td>
            <td>
              <a href="index.php?controller=student&action=edit&id=<?= $student['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
              <a href="index.php?controller=student&action=delete&id=<?= $student['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus ini?')">Delete</a>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>

  <?php include __DIR__ . '/../layout/footer.php'; ?>
</body>
</html>