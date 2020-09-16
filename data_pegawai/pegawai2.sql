CREATE TABLE tb_pegawai (
id_pegawai INT (20) NOT NULL AUTO_INCREMENT,
nip INT (20) NOT NULL,
nama VARCHAR (100) NOT NULL,
tempat_lahir VARCHAR (100) NOT NULL,
tanggal_lahir DATE,
agama VARCHAR (20) NOT NULL,
jenis_kelamin VARCHAR (20) NOT NULL,
status VARCHAR (20) NOT NULL,
alamat TEXT (100) NOT NULL,
telepon INT (50) NOT NULL,
email VARCHAR (50) NOT NULL,
tahun_masuk INT (10) NOT NULL,
tahun_pensiun INT (10) NOT NULL,
PRIMARY KEY (id_pegawai)
);


CREATE TABLE tb_golongan (
id_gol INT (20) NOT NULL AUTO_INCREMENT,
divisi VARCHAR (20) NOT NULL,
golongan VARCHAR (50) NOT NULL,
id_pegawai INT (20),
PRIMARY KEY (id_gol),
FOREIGN KEY (id_pegawai)
REFERENCES tb_pegawai (id_pegawai)
);


CREATE TABLE tb_gaji (
id_gaji INT (20) NOT NULL AUTO_INCREMENT,
id_pegawai INT (20) NOT NULL,
tgl_gaji DATE,
tunjangan INT (100),
gaji_pokok INT (100),
PRIMARY KEY (id_gaji),
FOREIGN KEY (id_pegawai)
REFERENCES tb_pegawai (id_pegawai)
);


CREATE TABLE tb_data_istri (
id_istri INT (20) NOT NULL AUTO_INCREMENT,
nama_istri VARCHAR (20) NOT NULL,
ket VARCHAR (20) NOT NULL,
id_pegawai INT (20),
PRIMARY KEY (id_istri),
FOREIGN KEY (id_pegawai)
REFERENCES tb_pegawai (id_pegawai)
);


CREATE TABLE tb_anak (
id_anak INT (20) NOT NULL AUTO_INCREMENT,
nama_anak VARCHAR (100) NOT NULL,
anak_ke INT (10) NOT NULL,
usia INT (20) NOT NULL,
id_istri INT(20) NOT NULL,
PRIMARY KEY (id_anak),
FOREIGN KEY (id_istri)
REFERENCES tb_data_istri (id_istri)
);


CREATE TABLE tb_pensiun (
id_pensiun INT (20) NOT NULL AUTO_INCREMENT,
tahun_masuk INT (10) NOT NULL,
tahun_pensiun INT (20) NOT NULL,
usia INT (20) NOT NULL,
id_pegawai INT (20) NOT NULL,
PRIMARY KEY (id_pensiun),
FOREIGN KEY (id_pegawai)
REFERENCES tb_pegawai (id_pegawai)
);








