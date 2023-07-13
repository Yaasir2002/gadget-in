@extends('template/admin')

@section('content2')
<div class="card">
    <div class="card-body">
        <form action="{{ route('type.update3', $types->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group row">
                <label for="nama" class="col-4 col-form-label">Tipe Kategori:</label> 
                <div class="col-8">
                    <input type="text" name="nama" id="nama" class="form-control" value="{{ $types->nama }}">
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('type.kategori') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>
@endsection
