<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Mahasiswa</title>
  </head>
  <body>
    <div class>
      <nav class="navbar-light bg-dark">
        <div class="parent container d-flex justify-content-center align-items-center mb-4">
          <a class="navbar-brand" style="color: white;" href="#">Edit Data Mahasiswa</a>
        </div>
      </nav>
<div class="container">
    <div class="row mx-auto">
      <div class="card">
        <div class="card-body">
          <form action="/updatedata/{{ $data->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Nama</label>
              <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="namalHelp" value="{{ $data->nama }}">
            </div>
            <div class="mb-3">
              <label for="exampleInputNPM" class="form-label">NPM</label>
              <input type="number" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==8) return false;" name="npm" class="form-control" id="exampleInputNPM" aria-describedby="npmHelp" value="{{ $data->npm }}">
            </div>
            <div class="mb-3">
              <label for="exampleInputKelas" class="form-label">Kelas</label>
              <input type="text" maxlength="5" name="kelas" class="form-control" id="exampleInputKelas" aria-describedby="kelasHelp" value="{{ $data->kelas }}">
            </div>
            <div class="mb-3">
              <label for="exampleInputJenisKelamin" class="form-label">Jenis Kelamin</label>
              <select class="form-select" name="jenis_kelamin" aria-label="Default select example">>
                <option value="Laki-laki" {{ $data->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                <option value="Perempuan" {{ $data->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
              </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    
    </div>
</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>