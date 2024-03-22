<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center">Register</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
	<form>
		<div class="container">
            <div class="mb-3">
                <label for="exampleInputPassword" class="form-label">Nama</label>
                <input type="nama" class="form-control" id="exampleInputNama">
                <div id="usernameHelp" class="form-text">Silahkan Masukkan Nama</div>
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword" class="form-label">Email</label>
                <input type="email" class="form-control" id="exampleInputEmail">
                <div id="usernameHelp" class="form-text">Silahkan Masukkan Email</div>
              </div>
		<div class="mb-3">
		  <label for="exampleInputUsername" class="form-label">Username</label>
		  <input type="username" class="form-control" id="exampleInputUsername" aria-describedby="usernameHelp">
		  <div id="usernameHelp" class="form-text">Silahkan Masukkan Username</div>
		</div>
		<div class="mb-3">
		  <label for="exampleInputPassword" class="form-label">Password</label>
		  <input type="password" class="form-control" id="exampleInputPassword">
		  <div id="usernameHelp" class="form-text">Silahkan Masukkan Password</div>
		</div>
		<div class="mb-3 form-check">
		  </div>
		<a href="/login2" type="submit" class="btn btn-primary">Daftar</a>
    <br>
	<br>
	<h5 class="text-center">Sudah Memiliki Akun ?</h5>
	<h5 class="text-center">Silahan Login Jika Anda Telah Memiliki Akun !</h5>
	<br>
	<div class="d-grid gap-2">
		<a href="/register2" class="btn btn-primary container" type="button">Login</a>
		
	  </div>
	</div>
	  </form>
</body>
</html>