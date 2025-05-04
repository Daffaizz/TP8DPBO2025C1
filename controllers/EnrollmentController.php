<?php
require_once __DIR__ . '/../models/Enrollment.php';
require_once __DIR__ . '/../models/Student.php';
require_once __DIR__ . '/../models/Course.php';

class EnrollmentController {
    public function index() {
        $enrollments = Enrollment::all();
        include __DIR__ . '/../view/enrollments/index.php';
    }

    public function create() {
        $students = Student::all();
        $courses = Course::all();
        include __DIR__ . '/../view/enrollments/create.php';
    }

    public function store() {
        $student_id = $_POST['student_id'];
        $course_id = $_POST['course_id'];
        Enrollment::store($student_id, $course_id);
        header('Location: index.php?controller=enrollment&action=index');
    }

    public function edit() {
        $old_student_id = $_GET['student_id'];
        $old_course_id = $_GET['course_id'];
    
        $students = Student::all();
        $courses = Course::all();
    
        include __DIR__ . '/../view/enrollments/edit.php';
    }
    
    public function update() {
        $old_student_id = $_POST['old_student_id'];
        $old_course_id = $_POST['old_course_id'];
        $new_student_id = $_POST['student_id'];
        $new_course_id = $_POST['course_id'];
    
        // Delete old relation, then insert new
        Enrollment::delete($old_student_id, $old_course_id);
        Enrollment::store($new_student_id, $new_course_id);
    
        header("Location: index.php?controller=enrollment&action=index");
    }
    

    public function delete() {
        $student_id = $_GET['student_id'];
        $course_id = $_GET['course_id'];
        Enrollment::delete($student_id, $course_id);
        header('Location: index.php?controller=enrollment&action=index');
    }
}
?>