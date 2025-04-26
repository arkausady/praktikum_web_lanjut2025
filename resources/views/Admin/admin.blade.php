<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Tambah Admin</title>
</head>

<body>
    <h1>Form Tambah Admin</h1>

    @if ($errors->any())
    <div style="color: red;">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    @if (session('success'))
    <div style="color: green;">
        {{ session('success') }}
    </div>
    @endif

    <form action="/admin/store" method="POST">
        @csrf
        <label>Nama:</label><br>
        <input type="text" name="nama" value="{{ old('nama') }}"><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" value="{{ old('email') }}"><br><br>

        <label>No. HP:</label><br>
        <input type="text" name="no_hp" value="{{ old('no_hp') }}"><br><br>

        <label>Alamat:</label><br>
        <textarea name="alamat">{{ old('alamat') }}</textarea><br><br>

        <label>Role:</label><br>
        <select name="role">
            <option value="">-- Pilih Role --</option>
            <option value="Super Admin" {{ old('role') == 'Super Admin' ? 'selected' : '' }}>Super Admin</option>
            <option value="Kasir" {{ old('role') == 'Kasir' ? 'selected' : '' }}>Kasir</option>
        </select><br><br>

        <button type="submit">Simpan</button>
    </form>
</body>

</html>