@extends('layouts.backend.app',[
	'title' => 'Edit Kategori Perusahaan',
	'contentTitle' => 'Edit Kategori Perusahaan'
])
@section('content')

<div class="">    
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">
                <a href="{{ route('admin.kategori-perusahaan.index') }}" class="btn btn-success btn-sm">Kembali</a>
            </h4>
        </div>
        <div class="card-body">
        <form method="POST" enctype="multipart/form-data" action="{{ route('admin.kategori-perusahaan.update',$kategoriPerusahaan->id) }}">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="nama_kategori_perusahaan">Nama kategori</label>
                <input value="{{ $kategoriPerusahaan->nama_kategori_perusahaan }}" required="" type="" name="nama_kategori_perusahaan" placeholder="" class="form-control"> 
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">UPDATE</button>
        </div>
        </form>
    </div>
</div>

@stop