<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Enrollment</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
    <?php include __DIR__ . '/../layout/header.php'; ?>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card shadow">
                    <div class="card-header bg-primary text-white">
                        <h2 class="mb-0">Edit Enrollment</h2>
                    </div>
                    <div class="card-body">
                        <form action="index.php?controller=enrollment&action=update" method="post">
                            <input type="hidden" name="old_student_id" value="<?= $old_student_id ?>">
                            <input type="hidden" name="old_course_id" value="<?= $old_course_id ?>">

                            <div class="mb-3">
                                <label for="student_id" class="form-label">Student</label>
                                <select name="student_id" id="student_id" class="form-control" required>
                                    <?php foreach ($students as $student): ?>
                                        <option value="<?= $student['id'] ?>" <?= $student['id'] == $old_student_id ? 'selected' : '' ?>>
                                            <?= htmlspecialchars($student['name']) ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="course_id" class="form-label">Course</label>
                                <select name="course_id" id="course_id" class="form-control" required>
                                    <?php foreach ($courses as $course): ?>
                                        <option value="<?= $course['id'] ?>" <?= $course['id'] == $old_course_id ? 'selected' : '' ?>>
                                            <?= htmlspecialchars($course['name']) ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <div class="d-flex justify-content-between">
                                <button type="submit" class="btn btn-success">Update</button>
                                <a href="index.php?controller=enrollment&action=index" class="btn btn-secondary">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
