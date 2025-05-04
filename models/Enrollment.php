<?php
require_once __DIR__ . '/../config/db.php';

class Enrollment {
    public static function all() {
        global $pdo;
        $stmt = $pdo->query("SELECT sc.student_id, sc.course_id, s.name AS student_name, c.name AS course_name
                             FROM student_courses sc
                             JOIN students s ON sc.student_id = s.id
                             JOIN courses c ON sc.course_id = c.id");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function store($student_id, $course_id) {
        global $pdo;
        $check = $pdo->prepare("SELECT COUNT(*) FROM student_courses WHERE student_id = ? AND course_id = ?");
        $check->execute([$student_id, $course_id]);

        if ($check->fetchColumn() > 0) {
            return false;
        }

        $stmt = $pdo->prepare("INSERT INTO student_courses (student_id, course_id) VALUES (?, ?)");
        return $stmt->execute([$student_id, $course_id]);
    }

    public static function delete($student_id, $course_id) {
        global $pdo;
        $stmt = $pdo->prepare("DELETE FROM student_courses WHERE student_id = ? AND course_id = ?");
        return $stmt->execute([$student_id, $course_id]);
    }
}
