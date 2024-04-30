-- tabel properti/rumah/hotel
CREATE TABLE properti (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(255) NOT NULL,
    harga DECIMAL(10,2) NOT NULL,
    lokasi VARCHAR(255) NOT NULL,
    deskripsi TEXT,
    foto VARCHAR(255)
);

-- tabel agen
CREATE TABLE agen (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    telepon VARCHAR(20) NOT NULL
);

-- tabel pelanggan / customer
CREATE TABLE pelanggan (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    telepon VARCHAR(20) NOT NULL
);

-- tabel transaksi
CREATE TABLE transaksi (
    id INT AUTO_INCREMENT PRIMARY KEY,
    properti_id INT NOT NULL,
    agen_id INT NOT NULL,
    pelanggan_id INT NOT NULL,
    tipe ENUM('Pembelian', 'Penjualan', 'Sewa') NOT NULL,
    tanggal DATE NOT NULL,
    FOREIGN KEY (properti_id) REFERENCES properti(id),
    FOREIGN KEY (agen_id) REFERENCES agen(id),
    FOREIGN KEY (pelanggan_id) REFERENCES pelanggan(id)
);

-- untuk hak akses
CREATE TABLE user (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL,
    role ENUM('Admin', 'Agen', 'Pelanggan') NOT NULL
);
