<?php
require_once __DIR__ . '/../models/Course.php';

class CourseController {
    public function index() {
        $courses = Course::all();
        include __DIR__ . '/../view/courses/index.php';
    }

    public function create() {
        include __DIR__ . '/../view/courses/create.php';
    }

    public function store() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            Course::store($_POST);
            header("Location: index.php?controller=course&action=index");
        }
    }

    public function edit() {
        $id = $_GET['id'] ?? null;
        $course = Course::find($id);
        include __DIR__ . '/../view/courses/edit.php';
    }

    public function update() {
        $id = $_POST['id'] ?? null;
        Course::update($id, $_POST);
        header("Location: index.php?controller=course&action=index");
    }

    public function delete() {
        $id = $_GET['id'] ?? null;
        Course::delete($id);
        header("Location: index.php?controller=course&action=index");
    }
}
