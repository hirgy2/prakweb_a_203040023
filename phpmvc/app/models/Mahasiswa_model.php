<?php

class Mahasiswa_model {
    // database handler
    private $dbh;
    private $stmt;

    public function __construct()
    {
        // data source name
        $dsn = 'mysql:host=localhost;dbname=phpmvc';

        try {
            $this->dbh = new PDO($dsn, 'root', '');
        } catch(PDOException $e) {
            die($e->getMessage());
        }
    }

    // private $mhs = [
    //     [
    //         "nama" => "Muhammad Rhyamizard Hirgy",
    //         "nrp" => "203040023",
    //         "email" => "hirgy9@gmail.com",
    //         "jurusan" => "Teknik Informatika"
    //     ],
    //     [
    //         "nama" => "John Karbit",
    //         "nrp" => "203040024",
    //         "email" => "john_karbit@gmail.com",
    //         "jurusan" => "Teknik Lingkungan"
    //     ],
    //     [
    //         "nama" => "Asep Dalton",
    //         "nrp" => "203040025",
    //         "email" => "asepD@gmail.com",
    //         "jurusan" => "Teknik Industri"
    //     ],
    //     [
    //         "nama" => "Muhammad Dilan",
    //         "nrp" => "203040026",
    //         "email" => "m_dilan@gmail.com",
    //         "jurusan" => "Teknik Mesin"
    //     ],
    //     ];

        public function getAllMahasiswa()
        {
            $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
            $this->stmt->execute();
            return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
        }
}