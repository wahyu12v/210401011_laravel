@extends('layouts.app')
@section('body')

<div class="d-flex align-items-center justify-content-between mb-2">
    <h3 class="mb-0">Tambah Kategori</h3>
    <a class="btn btn-dark" href="{{ route('kategori.index') }}" role="button">Kembali</a>
</div>
<hr />

<form action="{{ route('kategori.store') }}" method="POST">
    @csrf
    <div class="form-floating mb-3">
        <input type="text" class="form-control" name="namakategori" placeholder="Nama Kategori">
        <label for="floatingInput">Nama Kategori</label>
      </div>
      <div class="form-floating mb-3">
        <input type="text" class="form-control" name="jenis"  placeholder="jenis kategori">
        <label for="floatingInput">Jenis Kategori</label>
      </div>


      <button class="btn btn-dark ">Submit</button>

</form>
@endsection
