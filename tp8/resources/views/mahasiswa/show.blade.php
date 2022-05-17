<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Biodata {{ $mahasiswa->nama }}</title>
</head>
<body>
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <div class="pt-3 d-flex justify-content-between align-items-center">
                    <h2>Biodata {{$mahasiswa->nama}}</h2>
                    <div class="d-flex">
                        <a href="{{ route('mahasiswas.edit',['mahasiswa' => $mahasiswa->id]) }}" class="btn btn-primary">Edit</a>
                        <form method="POST" action="{{ route('mahasiswas.destroy',['mahasiswa' => $mahasiswa->id]) }}">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger ms-3">Hapus</button>
                        </form>
                    </div>
                </div><hr>
                @if(session()->has('pesan'))
                    <div class="alert alert-success" role="alert">{{ session()->get('pesan')}}</div>
                @endif
                <ul>
                    <li>NIM: {{$mahasiswa->nim}} </li>
                    <li>Nama: {{$mahasiswa->nama}} </li>
                    <li>Tanggal Lahir: {{$mahasiswa->tanggal_lahir}}</li>
                    <li>Tempat Lahir: {{$mahasiswa->tempat_lahir}}</li>
                    <li>Jenis Kelamin: {{$mahasiswa->jenis_kelamin == 'P' ? 'Perempuan' : 'Laki-laki'}} </li>
                    <li>Fakultas: {{$mahasiswa->fakultas}} </li>
                    <li>Jurusan: {{$mahasiswa->jurusan}}</li>
                    <li>IPK: {{$mahasiswa->ipk}}</li>
                    <li>Alamat: {{$mahasiswa->alamat == '' ? 'N/A' : $mahasiswa->alamat}} </li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>