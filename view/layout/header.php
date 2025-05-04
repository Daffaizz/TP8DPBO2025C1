<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="assets/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>TP MVC</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">MVC</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link <?= ($_GET['controller'] ?? '') == 'student' ? 'active' : '' ?>" 
             href="index.php?controller=student&action=index">Students</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= ($_GET['controller'] ?? '') == 'course' ? 'active' : '' ?>" 
             href="index.php?controller=course&action=index">Courses</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= ($_GET['controller'] ?? '') == 'entollments' ? 'active' : '' ?>" 
             href="index.php?controller=enrollment&action=index">Enrollments</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container mt-4">