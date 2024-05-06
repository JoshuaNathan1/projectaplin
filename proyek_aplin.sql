
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `proyek_aplin`
--
DROP DATABASE proyek_aplin;
CREATE DATABASE IF NOT EXISTS `proyek_aplin` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `proyek_aplin`;

CREATE TABLE `users` (
  `username` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `profile_pic` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);
COMMIT;

INSERT INTO users VALUES (
  'defson', 'Defson Jeremy', '123','','agen'
);