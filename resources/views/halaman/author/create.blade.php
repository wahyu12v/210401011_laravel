@extends('layouts.app')
@section('body')

<div class="d-flex align-items-center justify-content-between mb-2">
    <h3 class="mb-0">Tambah Author</h3>
    <a class="btn btn-dark" href="{{ route('author.index') }}" role="button">Kembali</a>
</div>
<hr />
<form action="{{ route('author.store') }}" method="POST">
    @csrf
    <div class="form-floating mb-3">
        <input type="text" class="form-control" name="nama" placeholder="Nama Author">
        <label for="floatingInput">Nama Author</label>
      </div>
      <div class="form-floating mb-3">
        <input type="text" class="form-control" name="bidangkeahlian" placeholder="Bidang Keahlian">
        <label for="floatingInput">Bidang Keahlian</label>
      </div>
      <div class="form-floating mb-3">
        <input type="text" class="form-control" name="nohp" placeholder="Nomor Hp">
        <label for="floatingInput">Nomor Hp</label>
      </div>
      <div class="form-floating mb-3">
        <textarea class="form-control" placeholder="Alamat" name="alamat" style="height: 200px"></textarea>
        <label for="floatingInput">Alamat</label>
      </div>
      <button class="btn btn-dark ">Submit</button>
</form>

@endsection
