@extends('layouts.app')

@section('body')

    <div class="d-flex align-items-center justify-content-between mb-2">
        <h3 class="mb-0">Tambah Artikel</h3>
        <a class="btn btn-dark" href="{{ route('artikel.index') }}" role="button">Kembali</a>
    </div>
    <hr />

    <form action="{{ route('artikel.store') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="form-floating mb-3">
          <input type="text" class="form-control" name="judul" placeholder="Judul Artikel">
          <label for="floatingInput">Judul artikel</label>
      </div>
      {{-- <div class="form-floating mb-3">
          <input type="text" class="form-control" name="author" placeholder="Nama author">
          <label for="floatingInput">Nama Author</label>
      </div>
      <div class="form-floating mb-3">
          <input type="text" class="form-control" name="jurusan" placeholder="Jurusan">
          <label for="floatingInput">Jurusan</label>
      </div> --}}
      <select class="form-select mb-3" aria-label="Default select example" name="kategori">
          <option hidden>Pilih Kategori</option>
          @foreach($kategori as $k)
              <option value="{{$k->namakategori}}">{{$k->namakategori}}</option>
          @endforeach
      </select>

      <select class="form-select mb-3" aria-label="Default select example" name="author">
        <option hidden>Pilih Author</option>
       
            @foreach($dataAuthor as $a)
                <option value="{{ $a->nama }}">{{ $a->nama }}</option>
            @endforeach
     
    </select>
{{-- 
    <div class="form-floating mb-3">
        <input type="text" class="form-control" name="namaauthor" placeholder="Nama Author">
        <label for="floatingInput">nama Author</label>
    </div> --}}


      <label for="gambar">Pilih Gambar</label>
      <div class="input-group mb-3">
          <input type="file" class="form-control-file" id="gambar" name="gambar" onchange="previewImage(event)">
      </div>
      <img id="preview" class="mt-2 mb-2" src="#" alt="Preview Gambar" style="display: none; max-width: 200px; max-height: 200px;">
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
          <textarea class="form-control" placeholder="Deskripsi" name="description" style="height: 300px"></textarea>
          <label for="floatingTextarea2">Description</label>
      </div>
      <button class="btn btn-dark ">Submit</button>
  </form>



@endsection
