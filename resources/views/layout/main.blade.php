<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1,
                shrink-to-fit=no">
<!-- Bootstrap CSS -->
<link rel="stylesheet"
  href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js">
</script>
<script
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js">
</script>
<title>@yield('title')</title>
</head>
<body>
<div class="container">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

<a class="navbar-brand" href="/">HOME</a>
<button class="navbar-toggler" type="button"

                data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false"
                aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
<div class="navbar-nav">
<a class="nav-item nav-link" href="/mahasiswa">Mahasiswa</a>
<a class="nav-item nav-link" href="/absen">Absen</a>
<a class="nav-item nav-link" href="/matakuliah">Daftar Matakuliah</a>
<a class="nav-item nav-link" href="/kontrak_matakuliah">Kontrak_matakuliah</a>
<a class="nav-item nav-link" href="/jadwal">Jadwal</a>
<a class="nav-item nav-link" href="/semester">Semester</a>


</div>
</div>
</nav>
</div>
@yield('content')
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
</body>
</html>
