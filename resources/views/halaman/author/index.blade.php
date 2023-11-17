@extends('layouts.app')
@section('body')
<div class=" ">
    <div class="d-flex align-items-center justify-content-between mb-2">
        <h3 class="mb-0">List Author</h3>
        <a class="btn btn-dark" href="{{ route('author.create') }}" role="button">Tambah Author</a>
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
                    <th>nama Author</th>
                    <th>Bidang Keahlian</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @if ($authors->count() > 0)
                    @foreach ($authors as $author )
                    <tr class="text-center">
                        <td class="align-middle" style="text-align: center;">{{ $loop->iteration }}</td>
                        <td class="align-middle" style="text-align: center;">{{ $author->nama }}</td>
                        <td class="align-middle" style="text-align: center;">{{ $author->bidangkeahlian }}</td>
                        <td class="d-flex justify-content-center">
                            <a href="{{ route('author.show', $author->id) }}" type="button" class="btn btn-success mx-1">Detail</a>
                            <a href="{{ route('author.edit', $author->id) }}" type="button" class="btn btn-warning mx-1">Edit</a>
                            <form action="{{ route('author.destroy', $author->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus Author ?')">
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
