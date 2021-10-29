@extends('layouts.backend.app',[
	'title' => 'Edit Prodi',
	'contentTitle' => 'Edit Prodi'
])
@section('content')

<div class="">    
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">
                <a href="{{ route('admin.prodi.index') }}" class="btn btn-success btn-sm">Kembali</a>
            </h4>
        </div>
        <div class="card-body">
        <form method="POST" enctype="multipart/form-data" action="{{ route('admin.prodi.update',$prodi->id) }}">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="nama">Nama Prodi</label>
                <input value="{{ $prodi->nama }}" required="" type="" name="nama" placeholder="" class="form-control"> 
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-success">UPDATE</button>
        </div>
        </form>
    </div>
</div>

@stop