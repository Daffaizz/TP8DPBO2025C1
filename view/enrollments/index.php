<!DOCTYPE html>
<html>
<head>
    <title>Enrollment List</title>
    <link rel="stylesheet" href="assets/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="assets/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
<?php include __DIR__ . '/../layout/header.php'; ?>
<div class="container mt-4">
    <h2>Enrollments</h2>
    <a href="index.php?controller=enrollment&action=create" class="btn btn-primary mb-2">Add Enrollment</a>
    <table class="table table-bordered table-striped">
        <tr>
            <th>Student</th>
            <th>Course</th>
            <th>Action</th>
        </tr>
        <tbody>
            <?php foreach ($enrollments as $enrollment): ?>
                <tr>
                    <td><?= $enrollment['student_name'] ?></td>
                    <td><?= $enrollment['course_name'] ?></td>
                    <td>
                        <a href="index.php?controller=enrollment&action=edit&student_id=<?= $enrollment['student_id'] ?>&course_id=<?= $enrollment['course_id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="index.php?controller=enrollment&action=delete&student_id=<?= $enrollment['student_id'] ?>&course_id=<?= $enrollment['course_id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus ini?')">Delete</a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>
</body>
</html>
