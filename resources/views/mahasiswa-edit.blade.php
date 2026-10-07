<!DOCTYPE html>
<html>
<head>
    <title>Ubah Mahasiswa</title>
</head>
<body>

    <h1>Ubah Mahasiswa</h1>

    @if (session('gagal'))
        <p>{{ session('gagal') }}</p>
    @endif

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('mahasiswa.update', $mahasiswa['id']) }}" method="POST">
        @csrf
        @method('PUT')

        <p>
            <label>NIM</label><br>
            <input
                type="text"
                name="nim"
                value="{{ old('nim', $mahasiswa['nim']) }}"
            >
        </p>

        <p>
            <label>Nama</label><br>
            <input
                type="text"
                name="nama"
                value="{{ old('nama', $mahasiswa['nama']) }}"
            >
        </p>

        <p>
            <label>Email</label><br>
            <input
                type="email"
                name="email"
                value="{{ old('email', $mahasiswa['email']) }}"
            >
        </p>

        <p>
            <label>Usia</label><br>
            <input
                type="number"
                name="usia"
                value="{{ old('usia', $mahasiswa['usia']) }}"
            >
        </p>

        <p>
            <label>Program Studi</label><br>
            <select name="program_studi_id">
                <option value="">-- Pilih Program Studi --</option>

                @foreach ($daftarProgramStudi as $prodi)
                    <option
                        value="{{ $prodi['id'] }}"
                        {{ old('program_studi_id', $mahasiswa['program_studi_id']) == $prodi['id'] ? 'selected' : '' }}
                    >
                        {{ $prodi['nama_prodi'] }}
                    </option>
                @endforeach
            </select>
        </p>

        <button type="submit">Simpan Perubahan</button>

        <a href="{{ route('mahasiswa.index') }}">
            Kembali
        </a>
    </form>

</body>
</html>