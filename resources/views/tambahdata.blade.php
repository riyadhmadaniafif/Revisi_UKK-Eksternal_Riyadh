<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Website Galeri Foto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center mb-5">Tambah Pengguna Foto & Gambar</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    {{-- Form Data --}}
    
    <div class="container">
        <div class="row justify-content-center">
          <div class="col-8">
          <div class="card">
          <div class="card-body">
            <form action="/insertdata" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="mb-3">
                <label for="exampleInputnama" class="form-label">Username</label>
                <input type="text" class="form-control" name="username" id="exampleInputUsername" aria-describedby="usernameHelp">
                <div id="textHelp" class="form-text">Your Name will show to everyone.</div>
              </div>
              <div class="mb-3">
                <label for="exampleInputpassword" class="form-label">Password</label>
                <input type="text" class="form-control" name="password" id="exampleInputpassword">
              </div>
              <div class="mb-3">
                <label for="exampleInputjeniskelamin" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="exampleInputemail">
                
              </div>
              <div class="mb-3">
                <label for="exampleInputnamalengkap" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="exampleInputnamalengkap" name="namalengkap">
              </div>
              <div class="mb-3">
                <label for="exampleInputusia" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="exampleInputalamat" name="alamat">
              </div>
              <div class="mb-3 form-check">
              </div>
              <button type="submit" class="btn btn-primary">Tambahkan</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    </div>
    


    
</body>
</html>