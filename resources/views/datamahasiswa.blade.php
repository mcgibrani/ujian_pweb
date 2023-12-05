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
            <a class="navbar-brand" style="color: white;" href="#">Data Mahasiswa</a>
          </div>
        </nav>
<div class="container">
<a href="/tambahmahasiswa" type="button" class="btn btn-success">Create</a>
    <div class="row">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama</th>
      <th scope="col">NPM</th>
      <th scope="col">Kelas</th>
      <th scope="col">Jenis Kelamin</th>
      <th scope="col">Waktu Dibuat</th>
      <th scope="col">Diupdate Pada</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    @php
     $no = 1;
     @endphp
    <tr>
    <?php foreach ($data as $row): ?>
      <tr>
      <th scope="row">{{ $no++ }}</th>
      <td>{{ $row->nama }}</td>
      <td>{{ $row->npm }}</td>
      <td>{{ $row->kelas }}</td>
      <td>{{ $row->jenis_kelamin }}</td>
      <td>{{ $row->created_at }}</td>
      <td>{{ $row->updated_at }}</td>

      <td>
      <a href="/tampilkandata/{{ $row->id }}" class="btn btn-primary">Edit</a>
      <a href="/delete/{{ $row->id }}"class="btn btn-danger">Delete</button>
      </td>
      <?php endforeach; ?>
    </tr>
  </tbody>
</table>
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