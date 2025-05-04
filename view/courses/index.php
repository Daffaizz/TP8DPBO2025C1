<!DOCTYPE html>
<html>
<head>
    <title>Course List</title>
    <link rel="stylesheet" href="assets/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="assets/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <?php include __DIR__ . '/../layout/header.php'; ?>
    <div class="container mt-4">
        <h2>Courses</h2>
        <a href="index.php?controller=course&action=create" class="btn btn-primary mb-2">Add New Course</a>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($courses as $course): ?>
                    <tr>
                        <td><?= $course['id'] ?></td>
                        <td><?= $course['name'] ?></td>
                        <td><?= $course['description'] ?></td>
                        <td>
                            <a href="index.php?controller=course&action=edit&id=<?= $course['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="index.php?controller=course&action=delete&id=<?= $course['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus ini?')">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <?php include __DIR__ . '/../layout/footer.php'; ?>
</body>
</html>