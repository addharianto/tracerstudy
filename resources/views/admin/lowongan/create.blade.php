@extends('layouts.backend.app',[
    'title' => 'Tambah Lowongan',
    'contentTitle' => 'Tambah Lowongan'
])

@push('css')
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/summernote') }}/summernote-bs4.min.css">
@endpush

@section('content')
<div class="">    
    <div class="card">
        <div class="card-header">
            <a href="{{ route('admin.lowongan.index') }}" class="btn btn-success btn-sm">Kembali</a>
        </div>
        <div class="card-body">
        <form method="POST" enctype="multipart/form-data" action="{{ route('admin.lowongan.store') }}">
            @csrf
            <div class="form-group">
                <label for="judul">Judul</label>
                <input required="" type="" name="judul" placeholder="" class="form-control title"> 
            </div>
            <div class="col-lg-6">
                    <div class="form-group">
                        <label>Nama Perusahaan</label>
                        <select required="" class="form-control" name="perusahaan_id">
                        <option selected="" disabled="">- PILIH PERUSAHAAN -</option>
                        @foreach($perusahaan as $perus)
                            <option value="{{ $perus->id }}">{{ $perus->nama }}</option>
                        @endforeach
                        </select>
                    </div>
                </div>
            <div class="form-group">
                <label for="posisi">Posisi</label>
                <input required="" type="" name="posisi" placeholder="" class="form-control title"> 
            </div>
            <div class="form-group">
                <label for="jumlah">Jumlah</label>
                <input required="" type="" name="jumlah" placeholder="" class="form-control title"> 
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea required="" name="deskripsi" id="deskripsi" class="text-dark form-control"></textarea>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="tglMulai">Tanggal Mulai</label>
                        <input type="date" name="tglMulai" id="tglMulai" class="form-control">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="tglBerakhir">Tanggal Berakhir</label>
                        <input type="date" name="tglBerakhir" id="tglBerakhir" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-sm">UPLOAD</button>    
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