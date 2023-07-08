@extends('template/admin')

@section('content1')
<div class="row mb-2">
  <div class="col-sm-6">
    <h1>Tambah Produk</h1>
  </div>
  <div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
      <li class="breadcrumb-item"><a href="/admin">Home</a></li>
      <li class="breadcrumb-item">Produk</li>
      <li class="breadcrumb-item active">Tambah Produk</li>
    </ol>
  </div>
</div>
@endsection

@section('content2')
<div class="card">
  <div class="card-body">
    <form action="{{ route('produk.store') }}" method="POST">
        @csrf
      <div class="form-group row">
        <label for="kode" class="col-4 col-form-label">Kode:</label>
        <div class="col-8">
            <input type="text" name="kode" id="kode" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <label for="nama" class="col-4 col-form-label">Nama:</label> 
        <div class="col-8">
            <input type="text" name="nama" id="nama" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <label for="stok" class="col-4 col-form-label">Stok:</label> 
        <div class="col-8">
            <input type="text" name="stok" id="stok" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <label for="harga" class="col-4 col-form-label">Harga:</label>
        <div class="col-8">
            <input type="text" name="harga" id="harga" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <label for="deskripsi" class="col-4 col-form-label">Description:</label>
        <div class="col-8">
            <input type="text" name="deskripsi" id="deskripsi" class="form-control">
        </div>
      </div>
      <div class="form-group row">
      <label for="foto" class="col-4 col-form-label">Foto:</label>
        <div class="col-8">
            <input type="text" name="foto" id="foto" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <label for="type" class="col-4 col-form-label">Type:</label>
          <div class="col-8">
              <select name="types_id" id="type" class="form-control">
                  <option value="">Pilih Type</option>
                  @foreach ($types as $type)
                  <option value="{{ $type->id }}">{{ $type->nama }}</option>
                  @endforeach
              </select>
          </div>
      </div>
      <div class="form-group row">
        <div class="offset-4 col-8">
          <button name="submit" type="submit" class="btn btn-primary">Submit</button>
        </div>
      </div>
    </form>
  </div>
</div>
@endsection