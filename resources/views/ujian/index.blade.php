<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- CDN Boostrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>UTS Kelompok 4</title>
</head>
<body>
    
    @if (session()->get('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
             
    @endif
    
    <div id="root">
        <nav class="navbar bg-body-tertiary mb-5">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">KELOMPOK 4</a>
            </div>
        </nav>
        {{-- Biodata Kelompok --}}
        <div class="d-flex justify-content-center gap-3">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Erwan</h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary">22104410039</h6>
                    <p class="card-text">Teknik Informatika A <br> Semester 4</p>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Eka Prasetiawan</h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary">22104410028</h6>
                    <p class="card-text">Teknik Informatika A <br> Semester 4</p>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Sttyo Ari Ramadhan</h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary">22104410029</h6>
                    <p class="card-text">Teknik Informatika A <br> Semester 4</p>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Muhamad Danish Haffizi</h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary">22104410035</h6>
                    <p class="card-text">Teknik Informatika A <br> Semester 4</p>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Rafi Ari Fiandi</h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary">22104410057</h6>
                    <p class="card-text">Teknik Informatika A <br> Semester 4</p>
                </div>
            </div>
        </div>
        {{-- Link ke create.blade.php --}}
        <a href="./ujian/create" class="d-flex justify-content-center mt-5">
            <button type="button" class="btn btn-primary btn-sm">Buat Data Baru</button>
        </a>
    </div>

</body>
</html>