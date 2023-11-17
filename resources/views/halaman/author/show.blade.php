@extends('layouts.app')
@section('body')
<div class="d-flex align-items-center justify-content-between mb-2">
    <h3 class="mb-0">Detail Author</h3>
    <a class="btn btn-dark" href="{{ route('author.index') }}" role="button">kembali</a>
</div>

<hr>
<div class="form-floating mb-3">
    <input type="text" class="form-control" name="nama" value="{{ $author->nama }}" placeholder="Nama Author" readonly>
    <label for="floatingInput">Nama Author</label>
  </div>
  <div class="form-floating mb-3">
    <input type="text" class="form-control" name="bidangkeahlian" value="{{ $author->bidangkeahlian }}" placeholder="Bidang Keahlian" readonly>
    <label for="floatingInput">Bidang Keahlian</label>
  </div>
  <div class="form-floating mb-3">
    <input type="text" class="form-control" name="nohp" value="{{ $author->nohp }}" placeholder="Nomor Hp" readonly>
    <label for="floatingInput">Nomor Hp</label>
  </div>
  <div class="form-floating mb-3">
    <input type="text" class="form-control" name="alamat" value="{{ $author->alamat }}" placeholder="Alamat" readonly>
    <label for="floatingInput">Alamat</label>
  </div>
@endsection
