<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>2003941 - Novaldi Sandi Ago | Latihan Praktikum 9</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body class="bg-light">

  <div class="container mt-5 bg-white px-5 py-4 rounded mb-5">
    <h1 class="text-center mb-4">Mahasiswa Ilkom-C1 2020</h1>
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nim</th>
          <th scope="col">Nama</th>
          <th scope="col">Email</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $students = [
          [
            "nim" => "2006945",
            "nama" => "Hafizh Lutfi Hidayat",
            "email" => "hafizh.lutfihidayat@upi.edu",
          ],
          [
            "nim" => "2007698",
            "nama" => "Hakasa Putri",
            "email" => "hakasa@upi.edu",
          ],
          [
            "nim" => "2004191",
            "nama" => "Muhammad Azar Nuzy",
            "email" => "azarnuzy@upi.edu",
          ],
          [
            "nim" => "2000318",
            "nama" => "Silmi Aulia Rohmah",
            "email" => "silmiaulia38@upi.edu",
          ],
          [
            "nim" => "2002939",
            "nama" => "Sarah Muhammad Abduh",
            "email" => "sarah21@upi.edu",
          ],
          [
            "nim" => "2000199",
            "nama" => "Nelly Joy Christi Simanjuntak",
            "email" => "nellyjoy@upi.edu",
          ],
          [
            "nim" => "2000879",
            "nama" => "Hilman Fauzi Herdiana",
            "email" => "hilmanfauzih@upi.edu",
          ],
          [
            "nim" => "2000952",
            "nama" => "Ghifari Octaverin",
            "email" => "ghifariocta@upi.edu",
          ],
          [
            "nim" => "2000952",
            "nama" => "Rizal Teddyansyah",
            "email" => "rizal17@upi.edu",
          ],
          [
            "nim" => "2003623",
            "nama" => "Alief Muhammad Abdillah",
            "email" => "aliefmabdillah09@upi.edu",
          ],
          [
            "nim" => "2009576",
            "nama" => "Fajri Maulana Iskandar",
            "email" => "fajrimaulanai@upi.edu",
          ],
          [
            "nim" => "2000352",
            "nama" => "Axel Eldrian Hadiwibowo",
            "email" => "eldrianaxel1@upi.edu",
          ],
          [
            "nim" => "2008084",
            "nama" => "Listia Ningrum",
            "email" => "listianingrum2002@upi.edu",
          ],
          [
            "nim" => "2001521",
            "nama" => "Surya Alfin Maoludin",
            "email" => "surya.alvin33@upi.edu",
          ],
          [
            "nim" => "2000360",
            "nama" => "Muhammad Aditya Hasta Pratama",
            "email" => "mdhstama@upi.edu",
          ],
          [
            "nim" => "2002969",
            "nama" => "Farhan Dwian Saputra",
            "email" => "dwyanfarhan@upi.edu",
          ],
          [
            "nim" => "2002969",
            "nama" => "Rahma Maulida",
            "email" => "rahma.m15@upi.edu",
          ],
          [
            "nim" => "2002969",
            "nama" => "D'Riski Maulana",
            "email" => "driskimaulana@upi.edu",
          ],
          [
            "nim" => "2004305",
            "nama" => "Raden Fadhil Anugerah Ardiwilaga",
            "email" => "fadhilanugrah21@upi.edu",
          ],
          [
            "nim" => "2004222",
            "nama" => "Muhammad Rafi Shidiq",
            "email" => "muhammadrafishidiq@upi.edu",
          ],
          [
            "nim" => "2003941",
            "nama" => "Novaldi Sandi Ago",
            "email" => "novaldisandi27@upi.edu",
          ],
          [
            "nim" => "2000188",
            "nama" => "Meutia Jasmine Annisa Herawan",
            "email" => "meutia.ja@upi.edu",
          ],
          [
            "nim" => "2009534",
            "nama" => "Muhammad Ridho Izzulhaq",
            "email" => "ridhoizzulhaq@upi.edu",
          ],
          [
            "nim" => "2000049",
            "nama" => "Alifia Isti Fadhila",
            "email" => "alifialif@upi.edu",
          ],
          [
            "nim" => "2000152",
            "nama" => "Hanifah Al Humaira",
            "email" => "hanifah200201@upi.edu",
          ],
          [
            "nim" => "2003721",
            "nama" => "Alvin Giovani",
            "email" => "alvingiovani17@upi.edu",
          ],
          [
            "nim" => "2003128",
            "nama" => "Cahya Gumilang",
            "email" => "cahya.gumilang@upi.edu",
          ],
          [
            "nim" => "2006412",
            "nama" => "Alyaa Qasthalani",
            "email" => "alyaaqasthalani@upi.edu",
          ],
          [
            "nim" => "2007235",
            "nama" => "Hilman Ahmad Rusydi",
            "email" => "hilman.ahmad1219@upi.edu",
          ],
          [
            "nim" => "2008433",
            "nama" => "Aji Muhammad Zapar",
            "email" => "aji.muhammad@upi.edu",
          ],
          [
            "nim" => "2007703",
            "nama" => "Sekar Madu Kusumawardani",
            "email" => "sekarmadu@upi.edu",
          ],
          [
            "nim" => "2007392",
            "nama" => "Arik Rizki Akbar",
            "email" => "arz147@upi.edu",
          ],
          [
            "nim" => "2006363",
            "nama" => "Devia Nursa'adah",
            "email" => "devians@upi.edu",
          ],
          [
            "nim" => "2007591",
            "nama" => "daffan alfauzi nurrobby",
            "email" => "daffanalfauzi6@upi.edu",
          ],
          [
            "nim" => "2003717",
            "nama" => "Ayurika Sinambela",
            "email" => "ayurika.s@upi.edu",
          ],
          [
            "nim" => "2007993",
            "nama" => "Muhammad Zakaria Saputra",
            "email" => "zakariasaputra@upi.edu",
          ],
        ];

        $no = 1;
        foreach ($students as $student) {
          echo "<tr>";
          echo "<td>" . $no++ . "</td>";
          echo "<td>" . $student['nim'] . "</td>";
          echo "<td>" . $student['nama'] . "</td>";
          echo "<td>" . $student['email'] . "</td>";
          echo "</tr>";
        }
        ?>
      </tbody>
    </table>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>