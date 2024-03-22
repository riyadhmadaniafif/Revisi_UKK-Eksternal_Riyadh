<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Website Galeri Foto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center mb-5">Edit Data Foto & Gambar</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    {{-- Form Data --}}
    
    <div class="container">
        <div class="row justify-content-center">
          <div class="col-8">
          <div class="card">
          <div class="card-body">
            <form action="/updatedata2/{{ $data->id }}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="mb-3">
                <label for="exampleInputnama" class="form-label">Judul Foto</label>
                <input type="text" class="form-control" name="judulfoto" id="exampleInputjudulfoto" aria-describedby="judulfotoHelp" value="{{ $data->judulfoto }}">
                <div id="textHelp" class="form-text">Judul Foto Akan Terlihat !.</div>
              </div>
              <div class="mb-3">
                <label for="exampleInputtanggallahir" class="form-label">Deskripsi Foto</label>
                <input type="text" class="form-control" name="deskripsifoto" id="exampleInputdeskripsifoto" value="{{ $data->tanggalunggah }}">
              </div>
              <div class="mb-3">
                <label for="exampleInputnomortelepon" class="form-label">Tanggal Unggah</label>
                <input type="text" class="form-control" id="exampleInputtanggalunggah" name="tanggalunggah" value="{{ $data->tanggalunggah }}">
              </div>
              <div class="mb-3">
                <label for="exampleInputusia" class="form-label">Lokasi File</label>
                <input type="text" class="form-control" id="exampleInputlokasifile" name="lokasifile" value="{{ $data->lokasifile }}"">
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