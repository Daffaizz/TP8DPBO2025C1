CREATE DATABASE tp_mvc;
USE tp_mvc;

CREATE TABLE students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    nim VARCHAR(50),
    phone VARCHAR(20),
    join_date DATE
);

CREATE TABLE courses (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    description TEXT
);

CREATE TABLE student_courses (
    student_id INT,
    course_id INT,
    PRIMARY KEY(student_id, course_id),
    FOREIGN KEY(student_id) REFERENCES students(id) ON DELETE CASCADE,
    FOREIGN KEY(course_id) REFERENCES courses(id) ON DELETE CASCADE
);

INSERT INTO students (name, nim, phone, join_date) VALUES
('Alya Rahma', '210001', '081234567890', '2022-09-01'),
('Bima Prasetya', '210002', '081234567891', '2022-09-02'),
('Citra Lestari', '210003', '081234567892', '2022-09-03'),
('Dino Nugraha', '210004', '081234567893', '2022-09-04');

INSERT INTO courses (name, description) VALUES
('Web Programming', 'Belajar dasar-dasar HTML, CSS, dan PHP'),
('Database', 'Belajar MySQL dan manajemen basis data relasional'),
('Mobile App', 'Pengembangan aplikasi mobile dengan Flutter'),
('Data Structures', 'Pengenalan struktur data dasar seperti stack dan queue');

INSERT INTO student_courses (student_id, course_id) VALUES
(1, 1),  -- Alya -> Web Programming
(1, 2),  -- Alya -> Database
(2, 1),  -- Bima -> Web Programming
(2, 3),  -- Bima -> Mobile App
(3, 2),  -- Citra -> Database
(3, 4),  -- Citra -> Data Structures
(4, 1),  -- Dino -> Web Programming
(4, 4);  -- Dino -> Data Structures