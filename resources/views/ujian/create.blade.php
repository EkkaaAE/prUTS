<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- CDN Boostrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Create Data</title>
</head>
<body>
    <form class="container mt-5" action="{{ url('ujian') }}" method="post">
        @csrf
        <div class="mb-3">
          <label class="form-label">Nama Lengkap :</label>
          <input type="text" class="form-control" value="ERWAN">
        </div>
        <div class="mb-3">
          <label class="form-label">NIM :</label>
          <input type="text" class="form-control" value="22104410028">
        </div>
        <div class="mb-3">
          <label class="form-label">Jurusan :</label>
          <input type="text" class="form-control" value="Teknik Informatika">
        </div>
        <div class="mb-3">
          <label class="form-label">Semester :</label>
          <input type="text" class="form-control" value="Semester 4">
        </div>
        <input type="submit" class="btn btn-primary" value="Tambahkan">

        <a href="../ujian" class="d-flex justify-content-center mt-5 text-decoration-none">
            <button type="button" class="btn btn-danger">Kembali</button>
        </a>
      </form>
</body>
</html>