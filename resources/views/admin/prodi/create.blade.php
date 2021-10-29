@extends('layouts.backend.app',[
	'title' => 'Tambah Kategori Prodi',
	'contentTitle' => 'Tambah Kategori Prodi'
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
        <form method="POST" enctype="multipart/form-data" action="{{ route('admin.prodi.store') }}">
            @csrf
            <div class="form-group">
                <label for="nama">Nama Prodi</label>
                <input required="" type="" name="nama" placeholder="" class="form-control"> 
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-success">SIMPAN</button>
        </div>
        </form>
    </div>
</div>

@stop