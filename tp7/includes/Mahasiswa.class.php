<?php

class Mahasiswa extends DB
{
    function __construct($db_host = '', $db_user = '', $db_password = '', $db_name = '')
    {
        $this->DB($db_host, $db_user, $db_password, $db_name);
    }

    function getMahasiswa()
    {
        $query = "SELECT mahasiswa.*, dosen.nama as dosen FROM mahasiswa INNER JOIN dosen ON mahasiswa.dosen_id=dosen.id ORDER BY mahasiswa.id ASC";
        return $this->execute($query);
    }

    function getDetailMahasiswa($id)
    {
        $query = "SELECT * FROM mahasiswa WHERE id = '$id'";
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
        $ipk           = htmlspecialchars($_POST["ipk"]);
        $dosen_id      = htmlspecialchars($_POST["dosen_id"]);

        $query = "INSERT INTO mahasiswa VALUES (NULL, '$nim', '$nama', '$tempat_lahir', '$tanggal_lahir', '$jenis_kelamin', '$ipk', '$fakultas', '$jurusan', '$dosen_id')";

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
        $ipk           = htmlspecialchars($_POST["ipk"]);
        $dosen_id      = htmlspecialchars($_POST["dosen_id"]);

        $query = "UPDATE mahasiswa SET nim='$nim', nama='$nama', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', jenis_kelamin='$jenis_kelamin', ipk='$ipk', fakultas='$fakultas', jurusan='$jurusan', dosen_id='$dosen_id' WHERE id=$id";

        // Mengeksekusi query
        $this->execute($query);
        return ($this->changed() > 0) ? "berhasil" : "gagal";
    }

    function delete($id)
    {
        $query = "DELETE FROM mahasiswa WHERE id = '$id'";

        // Mengeksekusi query
        $this->execute($query);
        return ($this->changed() > 0) ? "berhasil" : "gagal";
    }
}
