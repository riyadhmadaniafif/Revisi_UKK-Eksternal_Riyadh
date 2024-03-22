<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Website Galeri Foto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center mb-5">Edit Pengguna Foto & Gambar</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    {{-- Form Data --}}
    
    <div class="container">
        <div class="row justify-content-center">
          <div class="col-8">
          <div class="card">
          <div class="card-body">
            <form action="/updatedata/{{ $data->id }}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="mb-3">
                <label for="exampleInputnama" class="form-label">Username</label>
                <input type="text" class="form-control" name="username" id="exampleInputEmail1" aria-describedby="usernamelHelp" value="{{ $data->username }}">
                <div id="textHelp" class="form-text">Your Name will show to everyone.</div>
              </div>
              <div class="mb-3">
                <label for="exampleInputtanggallahir" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="exampleInputpassword" value="{{ $data->password }}">
              </div>
              <div class="mb-3">
                <label for="exampleInputjeniskelamin" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="exampleInputemail" value="{{ $data->email }}">
                  
              </div>
              <div class="mb-3">
                <label for="exampleInputnomortelepon" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="exampleInputnamalengkap" name="namalengkap" value="{{ $data->namalengkap }}">
              </div>
              <div class="mb-3">
                <label for="exampleInputnomortelepon" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="exampleInputnamalengkap" name="alamat" value="{{ $data->alamat }}">
              </div>
              <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Ingat Saya</label>
              </div>
              <button type="submit" class="btn btn-primary">Ubah</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    </div>
    


    
</body>
</html>