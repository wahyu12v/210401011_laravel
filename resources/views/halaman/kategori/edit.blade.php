@extends('layouts.app')
@section('body')

<div class="d-flex align-items-center justify-content-between mb-2">
    <h3 class="mb-0">Edit Kategori</h3>
    <a class="btn btn-dark" href="{{ route('kategori.index') }}" role="button">Kembali</a>
</div>
    <hr />

    <form action="{{ route('kategori.update', $kategori->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="namakategori" value="{{ $kategori->namakategori }}" placeholder="Nama kategori">
            <label for="floatingInput">Nama kategori</label>
          </div>
          <div class="form-floating mb-3">
            <input type="text" class="form-control" name="jenis" value="{{ $kategori->jenis }}" placeholder="Jenis Kategori">
            <label for="floatingInput">Jenis Kategori</label>
          </div>
          <button class="btn btn-dark">Update</button>

    </form>
@endsection
