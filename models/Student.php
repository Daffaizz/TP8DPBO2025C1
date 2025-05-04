<?php
require_once __DIR__ . '/../config/db.php';

class Student {
    public static function all() {
        global $pdo;
        $stmt = $pdo->query("SELECT * FROM students");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function find($id) {
        global $pdo;
        $stmt = $pdo->prepare("SELECT * FROM students WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function store($data) {
        global $pdo;
        $stmt = $pdo->prepare("INSERT INTO students (name, nim, phone, join_date) VALUES (?, ?, ?, ?)");
        return $stmt->execute([$data['name'], $data['nim'], $data['phone'], $data['join_date']]);
    }

    public static function update($id, $data) {
        global $pdo;
        $stmt = $pdo->prepare("UPDATE students SET name = ?, nim = ?, phone = ?, join_date = ? WHERE id = ?");
        return $stmt->execute([$data['name'], $data['nim'], $data['phone'], $data['join_date'], $id]);
    }

    public static function delete($id) {
        global $pdo;
        $stmt = $pdo->prepare("DELETE FROM students WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
