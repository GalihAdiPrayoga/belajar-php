-- Database: belajar_php
CREATE DATABASE IF NOT EXISTS belajar_php;
USE belajar_php;

-- --------------------------------------------------------
-- Table structure for table `users`
-- --------------------------------------------------------
CREATE TABLE users (
  id INT(11) AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50) NOT NULL,
  password VARCHAR(255) NOT NULL
);

-- --------------------------------------------------------
-- Table structure for table `buku`
-- --------------------------------------------------------
CREATE TABLE buku (
  id INT(11) AUTO_INCREMENT PRIMARY KEY,
  judul VARCHAR(100) NOT NULL,
  gambar VARCHAR(255) DEFAULT NULL,
  deskripsi TEXT,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);
