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

<main>
    <h2>Daftar Riwayat Hidup</h2>
    <?php 
    //KONEKSI DATABASE
    $con = mysqli_connect("localhost","root","","web_pert9");
    
    //MEMBUAT QUERY
    if (isset($_POST['filter'])) {
        $filter_key ="%".$_POST['filter']."%";
    } else {
        $filter_key="%%";
    }

    $sql = "select * from t_drh_master where nama like '$filter_key' or 
            telp like '$filter_key' or alamat like '$filter_key'";
    $query = mysqli_query($con, $sql); 

    //inisialisasi ->eksekusi query
    $id_drh_master = 1;

    //awal loop
    echo '<table border = 1>
		<thead>
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>Alamat</th>
				<th>Telp</th>
                <th>Email</th>
				<th>Pendidikan</th>
			</tr>
		</thead>
		<tbody>';
    while ($data = mysqli_fetch_object($query)) {
        //print -> menampilkan data
          echo '<tr>
			<td>'.$id_drh_master.'</td>
			<td>'.$data -> nama.'</td>
            <td>'.$data -> alamat.'</td>
			<td>'.$data -> telp.'</td>
            <td>'.$data -> email.'</td>
			<td>'.$data -> pendidikan.'</td>
			';

        $key = $data -> id_drh_master;
        echo " <td> <a href='index2.php?key=$key'>Detail </a> </td>";
        
        //next -> next record
        $id_drh_master++;
    } 
    echo '
	</tbody>
    </table>';
    ?>

</main>


</body>
</html>
