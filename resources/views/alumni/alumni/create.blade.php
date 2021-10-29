@extends('layouts.backend.app',[
	'title' => 'Tambah Data',
])

@push('css')
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/summernote') }}/summernote-bs4.min.css">
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/dropify') }}/dist/css/dropify.min.css">
@endpush

@section('content')
<div class="container">    
    <div class="card">
        <div class="card-header">
        <h2 class="fs-title"><center>Kuisioner Wajib</center></h2> 
        </div>
        <div class="card-body">
        <form method="POST" enctype="multipart/form-data" action="{{ route('alumni.alumni.store') }}">
            @csrf
            <div class="row">
                <div class="col-lg-4">
                </div>
                <div class="col-lg-4">
                    
                    <div class="form-group">
                        <label for="kode_pt">Kode Perguruan Tinggi</label>
                        <input type="disable" value="252" placeholder="252"name="kode_pt" class="form-control"></input>
                    </div>
                        <div id="form-group">
                            <label for="npm">NPM</label>
                            <input required="" name="npm" placeholder="Nomor Pokok Mahasiswa" id="tpm" class="form-control">
                        </div>
                        <div id="form-group">
                            <label for="tahun_lulus">Tahun Lulus</label>
                            <input required="" name="tahun_lulus" placeholder="Tahun Lulus" id="tahun_lulus" class="form-control">
                        </div>
                    <!-- </div>            
                    
                    <div class="col-lg-6"> -->
                        <div id="form-group">
                            <label for="nomor_hp">Nomor HP</label>
                            <input required="" name="nomor_hp" placeholder="Nomor HP" id="nomor_hp" class="form-control">
                        </div>
                        
                        <div class="form-group">
                            <label>Prodi</label>
                            <select required="" class="form-control" name="prodi_id">
                            <option selected="" disabled="">- PILIH PRODI -</option>
                            @foreach($prodi as $pro)
                                <option value="{{ $pro->id }}">{{ $pro->nama }}</option>
                            @endforeach
                            </select>
                            
                        </div>
                        <div class="col-lg-6">
                    <div class="form-group">
                            <label>Photo</label>
                            <input type="file" name="file" class="dropify form-control" data-height="190" data-allowed-file-extensions="png jpg gif jpeg svg webp jfif" required>
                    </div>
                </div>
                    <div class="card-footer">
                <button type="submit" class="btn btn-success">NEXT</button>
            </div>
            <div class="col-lg-4">
            </div>
        </form>
    </div>
</div>

@stop

@push('js')
<script type="text/javascript" src="{{ asset('plugins/summernote') }}/summernote-bs4.min.js"></script>
<script type="text/javascript" src="{{ asset('plugins/dropify') }}/dist/js/dropify.min.js"></script>
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
    $('.title').keyup(function(){
        var title = $(this).val().toLowerCase().replace(/[&\/\\#^, +()$~%.'":*?<>{}]/g,'-');
        $('.slug').val(title);
    });
</script>
@endpush