<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Website Galeri Foto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center mb-5">Tabel Pengguna Foto & Gambar</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    {{-- Tabel Data --}}
    
    <div class="container">
        <a href="/tambahdata2" class="btn btn-success">Tambah +</a>
        <div class="row">
          @if ($message = Session::get('success'))
          <div class="alert alert-success" role="alert">
            {{ $message }}
          </div>
          @endif
    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Judul Foto</th>
            <th scope="col">Deskripsi Foto</th>
            <th scope="col">Tanggal Unggah</th>
            <th scope="col">Lokasi File</th>
            <th scope="col">Dibuat</th>
            <th scope="col">Diubah</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          @php
              $no = 1;
          @endphp
          @foreach ($data as $row)
              
          <tr>
            <th scope="row">{{ $no++ }}</th>
            <td>{{ $row->judulfoto }}</td>
            <td>{{ $row->deskripsifoto }}</td>
            <td>{{ $row->tanggalunggah }}</td>
            <td>{{ $row->lokasifile }}</td>
            <td>{{ $row->created_at->format('D M Y') }}</td>
            <td>{{ $row->updated_at->format('D M Y') }}</td>
            <td>
              <img src="{{ asset('fotosesuatu/'.$row->foto) }}" alt="" style="width: 100px;">
            </td>
            <td>
                <a href="/tampilkandata2/{{ $row->id }}" class="btn btn-warning">Edit</a>
                <a href="#" class="btn btn-danger delete" data-id="{{ $row->id }}">Hapus</a>
            </td>
          </tr>
          
          @endforeach
          
        </tbody>
      </table>
    </div>
    </div>
    <script
  src="https://code.jquery.com/jquery-3.7.1.slim.js"
  integrity="sha256-UgvvN8vBkgO0luPSUl2s8TIlOSYRoGFAX4jlCIm9Adc="
  crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    


    
</body>
<script>
 
  $('.delete').click(function(){
    var galeriid = $(this).attr('data-id');
    swal({
  title: "Apakah Kamu Yakin ?",
  text: "Data yang dihapus tidak akan dapat dikembalikan dengan id "+galeriid+" ",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
  .then((willDelete) => {
  if (willDelete) {
    window.location = "/hapusdata2/"+galeriid+""
    swal("Wah! Data Kamu telah berhasil dihapus !", {
      icon: "success",
    });
  } else {
    swal("Data tidak jadi dihapus !");
  }
  });
  });

  

</script>
</html>