@extends('template/admin')

@section('content2')
<div class="card">
    <div class="card-body">
        <form action="{{ route('produk.update', $product->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group row">
                <label for="kode" class="col-4 col-form-label">Kode:</label>
                <div class="col-8">
                    <input type="text" name="kode" id="kode" class="form-control" value="{{ $product->kode }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-4 col-form-label">Nama:</label> 
                <div class="col-8">
                    <input type="text" name="nama" id="nama" class="form-control" value="{{ $product->nama }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="stok" class="col-4 col-form-label">Stok:</label> 
                <div class="col-8">
                    <input type="text" name="stok" id="stok" class="form-control" value="{{ $product->stok }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="harga" class="col-4 col-form-label">Harga:</label>
                <div class="col-8">
                    <input type="text" name="harga" id="harga" class="form-control" value="{{ $product->harga }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="deskripsi" class="col-4 col-form-label">Description:</label>
                <div class="col-8">
                    <input type="textarea" name="deskripsi" id="deskripsi" class="form-control" value="{{ $product->deskripsi }}">
                </div>
            </div>
            <div class="form-group row">
            <label for="foto" class="col-4 col-form-label">Foto:</label>
                <div class="col-8">
                    <input type="text" name="foto" id="foto" class="form-control" value="{{ $product->foto }}">
                </div>
            </div>
            <div class="form-group row">
            <label for="type" class="col-4 col-form-label">Type:</label>
                <div class="col-8">
                    <select name="types_id" id="type" class="form-control">
                        <option value="">Pilih Type</option>
                        @foreach ($types as $type)
                        <option value="{{ $type->id }}" @if($type->id === $product->types_id) selected @endif>{{ $type->nama }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('produk.product') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>
@endsection
