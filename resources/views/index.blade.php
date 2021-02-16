<!DOCTYPE html>
    <html lang="en-ID">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Absensi Online UCIC</title>
        <link rel="shortcut icon" src="assets/img/profile.jpg">
        <link rel="stylesheet" href="assets/css/style.css">
    </head>

    <body>
        <div class="FormLogin">
            <img src="assets/img/profile.jpg" class="profile">

            <h2>Absensi Online</h2>
            <form action="proses.blade.php" method="post">
 <div class="form-group mb-3">
            <div class="input-group input-group-alternative">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-credit-card"></i></span>
                </div>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" autofocus placeholder="Masukkan Email ...">
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
            <div class="form-group">
            <div class="input-group input-group-alternative">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                </div>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="current-password" placeholder="Masukkan Password ...">
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary my-4">Login</button>
        </div>

            </form>
        </div>
    </body>

    </html>
