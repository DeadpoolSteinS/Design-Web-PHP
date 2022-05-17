<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <link href="assets/upi.png" rel="shortcut icon">
    <title>Pegawai</title>
</head>

<body>


<h2>Pengalaman Pekerjaan</h2>
<?php 

$sesuatu = $_GET['key']; 

$sql = "select * from t_drh_detail where id_drh_master = '$sesuatu'";
$con = mysqli_connect("localhost","root","","web_pert9");
$id_drh_detail = 1;

$query = mysqli_query($con, $sql); 

echo '<table border = 1>
    <thead>
        <tr>
            <th>No</th>
            <th>Tahun</th>
            <th>Perusahaan</th>
            <th>Bidang</th>
            <th>Keterangan</th>
        </tr>
    </thead>
    <tbody>';

while ($data = mysqli_fetch_array($query)) {
    
      echo '<tr>
        <td>'.$id_drh_detail.'</td>
        <td>'.$data['tahun'].'</td>
        <td>'.$data['perusahaan'].'</td>
        <td>'.$data['bidang'].'</td>
        <td>'.$data['keterangan'].'</td>
        ';

    $key = $data['id_drh_detail'];
    
    //next -> next record
    $id_drh_detail++;
} 
echo '
</tbody>
</table>';
?>


</body>