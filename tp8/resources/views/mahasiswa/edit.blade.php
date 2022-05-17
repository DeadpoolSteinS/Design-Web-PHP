<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Edit Mahasiswa</title>
</head>
<body>
    <div class="container pt-4 bg-white">
        <div class="row">
            <div class="col-md-8 col-xl-6">
                <h1>Pendaftaran Mahasiswa</h1><hr>
                <form action="{{ route('mahasiswas.update',['mahasiswa' => $mahasiswa->id]) }}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="mb-3">
                        <label class="form-label" for="nim">NIM</label>
                        <input type="text" id="nim" name="nim" value="{{ old('nim') ?? $mahasiswa->nim }}" class="form-control @error('nim') is-invalid @enderror">
                        @error('nim')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="nama">Nama Lengkap</label>
                        <input type="text" id="nama" name="nama" value="{{ old('nama') ?? $mahasiswa->nama }}" class="form-control @error('nama') is-invalid @enderror">
                        @error('nama')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="tanggal_lahir">Tanggal Lahir</label>
                        <input type="date" id="tanggal_lahir" name="tanggal_lahir" value="{{ old('tanggal_lahir') ?? $mahasiswa->tanggal_lahir }}" class="form-control @error('tanggal_lahir') is-invalid @enderror">
                        @error('tanggal_lahir')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="tempat_lahir">Tempat Lahir</label>
                        <input type="text" id="tempat_lahir" name="tempat_lahir" value="{{ old('tempat_lahir') ?? $mahasiswa->tempat_lahir }}" class="form-control @error('tempat_lahir') is-invalid @enderror">
                        @error('tempat_lahir')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Jenis Kelamin</label>
                        <div class="d-flex">
                            <div class="form-check me-3">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki_laki" value="L" {{ (old('jenis_kelamin') ?? $mahasiswa->jenis_kelamin) == 'L' ? 'checked': '' }}>
                                <label class="form-check-label" for="laki_laki">Laki-laki</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="P" {{ (old('jenis_kelamin') ?? $mahasiswa->jenis_kelamin) == 'P' ? 'checked': '' }}>
                                <label class="form-check-label" for="perempuan">Perempuan</label>
                            </div>
                        </div>
                        @error('jenis_kelamin')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    @php
                        $faculties = ["FIP", "FPIPS", "FPBS", "FPSD", "FPMIPA", "FPTK", "FPEB"];
                    @endphp
                    <div class="mb-3">
                        <label class="form-label" for="fakultas">Fakultas</label>
                        <select class="form-select" name="fakultas" id="fakultas" value="{{ old('fakultas') }}">
                        @foreach ($faculties as $faculty)
                            <option value="{{ $faculty }}" {{ (old('fakultas') ?? $mahasiswa->fakultas)==$faculty ? 'selected': '' }}>{{ $faculty }}</option>
                        @endforeach
                        </select>
                        @error('fakultas')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="jurusan">Jurusan</label>
                        <input type="text" id="jurusan" name="jurusan" value="{{ old('jurusan') ?? $mahasiswa->jurusan }}" class="form-control @error('jurusan') is-invalid @enderror">
                        @error('jurusan')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="ipk">IPK</label>
                        <input type="number" id="ipk" name="ipk" value="{{ old('ipk') ?? $mahasiswa->ipk }}" step="any" class="form-control @error('ipk') is-invalid @enderror">
                        <div id="ipkHelp" class="form-text">(Angka desimal dipisah dengan karakter titik ".")</div>
                        @error('ipk')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="alamat">Alamat</label>
                        <textarea class="form-control" id="alamat" rows="3" name="alamat">{{ old('alamat') ?? $mahasiswa->alamat }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary mb-2">Update</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>