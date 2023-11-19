@extends('layouts.app')
@section('body')
    <div class="d-flex align-items-center justify-content-between mb-2">
        <h3 class="mb-0">Detail Artikel</h3>
        <a class="btn btn-dark" href="{{ route('artikel.index') }}" role="button">kembali</a>
    </div>
    <div class="">
        <div class="card mb-5">
            <div class="card-body">
                <h2 class="card-title text-center mb-2">{{ $artikel->judul }}</h2>
                <img src="/images/{{ $artikel->img }}" class="mx-auto d-block image-fluid"
                    style="max-width: 50%; height:50%;" alt="Image">
                <div class="my-3">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <td class="text-muted" style="width: 15%;">Penulis </td>
                                <td class="font-weight-bold">: {{ $artikel->author }}</td>
                            </tr>
                            <tr>
                                <td class="text-muted" style="width: 15%;">Kategori</td>
                                <td class="font-weight-bold">: {{ $artikel->kategori }}</td>
                            </tr>
                            <tr>
                                <td class="text-muted" style="width: 15%;">Tanggal diposting </td>
                                <td class="font-weight-bold">: {{ $artikel->updated_at->format('F d, Y') }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <p class="card-text">{{ $artikel->description }}</p>
            </div>
        </div>
    </div>



    
@endsection
