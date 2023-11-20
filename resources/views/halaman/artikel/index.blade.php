@extends('layouts.app')
@section('body')
<div class="">
    <div class="d-flex align-items-center justify-content-between mb-2">
        <h3 class="mb-0">List Artikel</h3>
        <a class="btn btn-dark" href="{{ route('artikel.create') }}" role="button">Tambah Artikel</a>
    </div> <hr>
    @if (Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{ Session::get('success') }}
                </div>
    @endif
    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr class="text-center">
                    <th style="width: 5%">Nomor</th>
                    <th>Judul artikel</th>
                    <th>Author</th>
                    <th>kateggori</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @if ($artikels->count() > 0)
                    @foreach ($artikels as $artikel )
                    <tr class="text-center">
                        <td class="align-middle" style="text-align: center;">{{ $loop->iteration }}</td>
                        <td class="align-middle" style="text-align: center;">{{ $artikel->judul }}</td>
                        <td class="align-middle" style="text-align: center;">{{ $artikel->author}}</td>
                        <td class="align-middle" style="text-align: center;">{{ $artikel->kategori}}</td>
                        <td class="d-flex justify-content-center">
                            <a href="{{ route('artikel.show', $artikel->id) }}" type="button" class="btn btn-success mx-1">Detail</a>
                            <a href="{{ route('artikel.edit', $artikel->id) }}" type="button" class="btn btn-warning mx-1">Edit</a>
                            <form action="{{ route('artikel.destroy', $artikel->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus artikel ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger p-2">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="5" style="text-align: center;">Data Tidak Ada</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>
@endsection
