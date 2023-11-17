@extends('layouts.app')
@section('body')
<div class="d-flex align-items-center justify-content-between mb-2">
    <h3 class="mb-0">Edit Author</h3>
    <a class="btn btn-dark" href="{{ route('author.index') }}" role="button">Kembali</a>
</div>
    <hr />
    <form action="{{ route('author.update', $author->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="nama" value="{{ $author->nama }}" placeholder="Nama Author">
            <label for="floatingInput">Nama Author</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="bidangkeahlian" value="{{ $author->bidangkeahlian }}" placeholder="Bidang Keahlian">
            <label for="floatingInput">Bidang Keahlian</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="nohp" value="{{ $author->nohp }}" placeholder="Nomor Hp">
            <label for="floatingInput">Nomor Hp</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="alamat" value="{{ $author->alamat }}" placeholder="Alamat">
            <label for="floatingInput">Alamat</label>
        </div>
          <button class="btn btn-dark ">Update</button>
    </form>
@endsection
