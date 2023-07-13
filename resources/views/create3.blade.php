@extends('template/admin')

@section('content2')
<div class="card">
    <div class="card-body">
        <form action="{{ route('type.store3') }}" method="POST">
        @csrf
        <div class="form-group row">
            <label for="nama" class="col-4 col-form-label">Tipe Kategori:</label> 
            <div class="col-8">
                <input type="text" name="nama" id="nama" class="form-control">
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