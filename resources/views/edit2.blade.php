@extends('template/admin')

@section('content1')
<div class="row mb-2">
  <div class="col-sm-6">
    <h1>Edit Customer</h1>
  </div>
  <div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
      <li class="breadcrumb-item"><a href="/admin">Home</a></li>
      <li class="breadcrumb-item">Pelanggan</li>
      <li class="breadcrumb-item active">Edit Customer</li>
    </ol>
  </div>
</div>
@endsection

@section('content2')
<div class="card">
    <div class="card-body">
        <form action="{{ route('pelanggan.update2', $customer->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group row">
                <label for="nama" class="col-4 col-form-label">Nama:</label> 
                <div class="col-8">
                    <input type="text" name="nama" id="nama" class="form-control" value="{{ $customer->nama }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="address" class="col-4 col-form-label">Alamat:</label>
                <div class="col-8">
                    <input type="text" name="address" id="address" class="form-control" value="{{ $customer->address }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="no_hp" class="col-4 col-form-label">No. HP:</label>
                <div class="col-8">
                    <input type="text" name="no_hp" id="no_hp" class="form-control" value="{{ $customer->no_hp }}">
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('pelanggan.customers') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>
@endsection
