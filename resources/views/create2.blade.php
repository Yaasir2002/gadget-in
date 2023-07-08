@extends('template/admin')

@section('content1')
<div class="row mb-2">
  <div class="col-sm-6">
    <h1>Tambah Pelanggan</h1>
  </div>
  <div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
      <li class="breadcrumb-item"><a href="/admin">Home</a></li>
      <li class="breadcrumb-item">Pelanggan</li>
      <li class="breadcrumb-item active">Tambah Pelanggan</li>
    </ol>
  </div>
</div>
@endsection

@section('content2')
<div class="card">
    <div class="card-body">
        <form action="{{ route('pelanggan.store2') }}" method="POST">
        @csrf
        <div class="form-group row">
            <label for="nama" class="col-4 col-form-label">Nama:</label> 
            <div class="col-8">
                <input type="text" name="nama" id="nama" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="address" class="col-4 col-form-label">Alamat:</label> 
            <div class="col-8">
                <input type="textarea" name="address" id="address" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="no_hp" class="col-4 col-form-label">No. Hp:</label>
            <div class="col-8">
                <input type="text" name="no_hp" id="no_hp" class="form-control">
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