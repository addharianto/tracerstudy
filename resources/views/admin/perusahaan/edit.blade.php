@extends('layouts.backend.app',[
    'title' => 'Edit Perusahaan',
    'contentTitle' => 'Edit Perusahaan'
])

@push('css')
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/summernote') }}/summernote-bs4.min.css">
@endpush

@section('content')
<div class="">    
    <div class="card">
        <div class="card-header">
            <a href="{{ route('admin.perusahaan.index') }}" class="btn btn-success btn-sm">Kembali</a>
        </div>
        <div class="card-body">
        <form method="POST" enctype="multipart/form-data" action="{{ route('admin.perusahaan.update',$perusahaan->id) }}">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="nama">Nama</label>
                <input value="{{ $perusahaan->nama }}" required="" type="" name="nama" placeholder="" class="form-control title"> 
            </div>
            <div class="form-group">
                <label for="alamat">alamat</label>
                <input value="{{ $perusahaan->alamat }}" required="" type="" name="alamat" placeholder="" class="form-control title"> 
            </div>
            <div class="col-lg-6">
                    <div class="form-group">
                        <label>Kategori</label>
                        <select required="" class="form-control" name="kategori_perusahaan_id">
                        <option selected="" disabled="">- PILIH KATEGORI -</option>
                        @foreach($kategoriPerusahaan as $kategori)
                            <option value="{{ $kategori->id }}">{{ $kategori->nama_kategori_perusahaan }}</option>
                        @endforeach
                        </select>
                    </div>
                </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea value="" required="" name="deskripsi" id="deskripsi" class="text-dark form-control summernote">{!! $perusahaan->deskripsi !!}</textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-sm">UPDATE</button>    
            </div> 
        </div>
        </form>
    </div>
</div>
@stop

@push('js')
<script type="text/javascript" src="{{ asset('plugins/summernote') }}/summernote-bs4.min.js"></script>
<script type="text/javascript">
    $(".summernote").summernote({
        height:500,
        callbacks: {
        // callback for pasting text only (no formatting)
            onPaste: function (e) {
              var bufferText = ((e.originalEvent || e).clipboardData || window.clipboardData).getData('Text');
              e.preventDefault();
              bufferText = bufferText.replace(/\r?\n/g, '<br>');
              document.execCommand('insertHtml', false, bufferText);
            }
        }
    })

    $(".summernote").on("summernote.enter", function(we, e) {
        $(this).summernote("pasteHTML", "<br><br>");
        e.preventDefault();
    });
</script>
@endpush