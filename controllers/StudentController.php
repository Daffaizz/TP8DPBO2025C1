<?php
require_once __DIR__ . '/../models/Student.php';

class StudentController {
    public function index() {
        $students = Student::all();
        $data = ['students' => $students];
        include __DIR__ . '/../view/students/index.php';
    }

    public function create() {
        include __DIR__ . '/../view/students/create.php';
    }

    public function store() {
        $data = [
            'name' => $_POST['name'],
            'nim' => $_POST['nim'],
            'phone' => $_POST['phone'],
            'join_date' => $_POST['join_date']
        ];

        Student::store($data);
        header('Location: index.php');
        exit;
    }

    public function edit() {
        if (!isset($_GET['id'])) {
            header("Location: index.php");
            exit;
        }

        $id = $_GET['id'];
        $student = Student::find($id);

        if (!$student) {
            echo "Student not found";
            exit;
        }

        $data = ['student' => $student];
        include __DIR__ . '/../view/students/edit.php';
    }

    public function update() {
        $id = $_POST['id'];
        $data = [
            'name' => $_POST['name'],
            'nim' => $_POST['nim'],
            'phone' => $_POST['phone'],
            'join_date' => $_POST['join_date']
        ];

        Student::update($id, $data);
        header("Location: index.php");
    }

    public function delete() {
        if (!isset($_GET['id'])) {
            header("Location: index.php");
            exit;
        }

        $id = $_GET['id'];
        Student::delete($id);
        header("Location: index.php");
    }
}
