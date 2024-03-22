<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<link rel="stylesheet" href="loginregister.css">
</head>
  <body>
    <h1 class="text-center">Login</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
	<form>
		<div class="container">
		<div class="mb-3">
		  <label for="exampleInputUsername" class="form-label">Username</label>
		  <input type="username" class="form-control" id="exampleInputUsername" aria-describedby="usernameHelp">
		  <div id="usernameHelp" class="form-text">Kamu Harus Mengisi Ini !</div>
		</div>
		<div class="mb-3">
		  <label for="exampleInputPassword" class="form-label">Password</label>
		  <input type="password" class="form-control" id="exampleInputPassword">
		  <div id="usernameHelp" class="form-text">Lupa Password ?</div>
		</div>
		<div class="mb-3 form-check">
		  <input type="checkbox" class="form-check-input" id="exampleCheck1">
		  <label class="form-check-label" for="exampleCheck1">Ingat Saya</label>
		</div>
		<a href="/dashboard2" type="submit" class="btn btn-primary">Masuk</a>
	</div>
	<br>
	<br>
	<h5 class="text-center">Belum Memiliki Akun ?</h5>
	<h5 class="text-center">Silahan Register Terlebih Dahulu !</h5>
	<br>
	<div class="d-grid gap-2">
		<a href="/register2" class="btn btn-primary container" type="button">Register</a>
		
	  </div>
	  </form>
</body>
</html>