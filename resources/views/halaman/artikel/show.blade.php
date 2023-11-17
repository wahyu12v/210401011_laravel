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
            <img src="/images/{{$artikel->img}}" class="mx-auto d-block image-fluid" style="max-width: 50%; height:50%;" alt="Image">
            <div class="my-3">
                <div class="row">
                    <div class="col-md-6">
                      
                        <h6 class="card-subtitle text-muted">Penulis:</h6>
                        <p>{{ $artikel->author }}</p>
                    </div>
                    <div class="col-md-6">
                     
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                      
                        <h6 class="card-subtitle text-muted">Kategori : {{ $artikel->kategori }}  </h6>
                      
                    </div>
                </div>
                <h6 class="card-subtitle text-muted">{{ $artikel->updated_at->format('F d, Y') }}</h6>
            </div>
            <p class="card-text">{{ $artikel->description }}</p>
        </div>
    </div>
</div>

@endsection
