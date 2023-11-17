@extends('layouts.app')

@section('body')
    <div class="d-flex align-items-center justify-content-between mb-2">
        <h3 class="mb-0">Edit Artikel</h3>
        <a class="btn btn-dark" href="{{ route('artikel.index') }}" role="button">Kembali</a>
    </div>
    <hr />

    <form action="{{ route('artikel.update', $artikel->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="judul" value="{{ $artikel->judul }}"
                placeholder="Judul Artikel">
            <label for="floatingInput">Judul Artikel</label>
        </div>
        {{-- <div class="form-floating mb-3">
            <input type="text" class="form-control" name="author" value="{{ $artikel->author }}"
                placeholder="Nama autor">
            <label for="floatingInput">Nama Autor</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="jurusan" value="{{ $artikel->jurusan }}" placeholder="jurusan">
            <label for="floatingInput">Jurusan</label>
        </div> --}}

        <select class="form-select mb-3" aria-label="Default select example" disabled>
            <option value="{{ $artikel->kategori }}">{{ $artikel->kategori }}</option>
        </select>
{{-- 
        <select class="form-select mb-3" aria-label="Default select example" name="kategori">
            <option hidden>Pilih Author</option>
            @foreach($author as $a)
                <option value="{{$a->nama}}">{{$a->nama}}</option>
            @endforeach
        </select> --}}

        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="namaauthor" placeholder="Nama Author" disabled>
            <label for="floatingInput">{{$artikel->author}}</label>
        </div>
    

        <label for="gambar">Pilih Gambar</label>
        <div class="input-group ">
            <input type="file" class="form-control-file mb-3" id="gambar" name="gambar"
                onchange="previewImage(event)">
        </div>
        <img id="preview" class="mt-2 mb-2" src="#" alt="Preview Gambar"
            style="display: none; max-width: 200px; max-height: 200px;">

        <script>
            function previewImage(event) {
                const input = event.target;
                if (input.files && input.files[0]) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        const preview = document.getElementById('preview');
                        preview.src = e.target.result;
                        preview.style.display = 'block';
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            }
        </script>

        <div class="form-floating mb-3">
            <textarea class="form-control" placeholder="Deskripsi" name="description" rows="5" style="height: 250px;">{{ $artikel->description }}</textarea>
            <label for="floatingTextarea2">Description</label>
        </div>
        <button class="btn btn-dark ">Update</button>

    </form>
@endsection