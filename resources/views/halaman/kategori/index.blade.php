@extends('layouts.app')
@section('body')


<div class=" ">
    <div class="d-flex align-items-center justify-content-between mb-2">
        <h3 class="mb-0">List Kategori</h3>
        <a class="btn btn-dark" href="{{ route('kategori.create') }}" role="button">Tambah Kategori</a>
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
                    <th>nama Kategori</th>
                    <th>Jenis Kategori</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @if ($kategoris->count() > 0)
                    @foreach ($kategoris as $kategori )
                    <tr class="text-center">
                        <td class="align-middle" style="text-align: center;">{{ $loop->iteration }}</td>
                        <td class="align-middle" style="text-align: center;">{{ $kategori->namakategori }}</td>
                        <td class="align-middle" style="text-align: center;">{{ $kategori->jenis }}</td>
                        <td class="d-flex justify-content-center">
                            <a href="{{ route('kategori.edit', $kategori->id) }}" type="button" class="btn btn-warning mx-1">Edit</a>
                            <form action="{{ route('kategori.destroy', $kategori->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus kategori ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger p-2">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="4" style="text-align: center;">Data Tidak Ada</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>

@endsection
