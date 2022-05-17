<?php

class Dosen extends DB
{
    function __construct($db_host = '', $db_user = '', $db_password = '', $db_name = '')
    {
        $this->DB($db_host, $db_user, $db_password, $db_name);
    }

    function getDosen()
    {
        $query = "SELECT * FROM dosen";
        return $this->execute($query);
    }

    function getDetailDosen($id)
    {
        $query = "SELECT * FROM dosen WHERE id = '$id'";
        return $this->execute($query);
    }

    function getMahasiswa($id)
    {
        $query = "SELECT * FROM mahasiswa WHERE dosen_id=$id";
        return $this->execute($query);
    }

    function insert()
    {
        $nim           = htmlspecialchars($_POST["nim"]);
        $nama          = htmlspecialchars($_POST["nama"]);
        $tempat_lahir  = htmlspecialchars($_POST["tempat_lahir"]);
        $tanggal_lahir = htmlspecialchars($_POST["tanggal_lahir"]);
        $jenis_kelamin = (isset($_POST["jenis_kelamin"])) ? htmlspecialchars($_POST["jenis_kelamin"]) : "";
        $fakultas      = htmlspecialchars($_POST["fakultas"]);
        $jurusan       = htmlspecialchars($_POST["jurusan"]);

        $query = "INSERT INTO dosen VALUES (NULL, '$nim', '$nama', '$tempat_lahir', '$tanggal_lahir', '$jenis_kelamin', '$fakultas', '$jurusan')";
        // Mengeksekusi query
        $this->execute($query);
        return ($this->changed() > 0) ? "berhasil" : "gagal";
    }

    function update($id)
    {
        $nim           = htmlspecialchars($_POST["nim"]);
        $nama          = htmlspecialchars($_POST["nama"]);
        $tempat_lahir  = htmlspecialchars($_POST["tempat_lahir"]);
        $tanggal_lahir = htmlspecialchars($_POST["tanggal_lahir"]);
        $jenis_kelamin = (isset($_POST["jenis_kelamin"])) ? htmlspecialchars($_POST["jenis_kelamin"]) : "";
        $fakultas      = htmlspecialchars($_POST["fakultas"]);
        $jurusan       = htmlspecialchars($_POST["jurusan"]);

        $query = "UPDATE dosen SET nim='$nim', nama='$nama', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', jenis_kelamin='$jenis_kelamin', fakultas='$fakultas', jurusan='$jurusan' WHERE id=$id";
        // Mengeksekusi query
        $this->execute($query);
        return ($this->changed() > 0) ? "berhasil" : "gagal";
    }

    function delete($id)
    {
        $query = "DELETE FROM dosen WHERE id = '$id'";

        // Mengeksekusi query
        $this->execute($query);
        return ($this->changed() > 0) ? "berhasil" : "gagal";
    }
}
