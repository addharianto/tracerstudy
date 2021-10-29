@extends('layouts.backend.app',[
	'title' => 'Edit Alumni',
	'contentTitle' => 'Edit Alumni'
])

@push('css')
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/summernote') }}/summernote-bs4.min.css">
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/dropify') }}/dist/css/dropify.min.css">
@endpush

@section('content')
<div class="">    
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Box Alumni</h4>
        </div>
        <div class="card-body">
        <form method="POST" enctype="multipart/form-data" action="{{ route('admin.alumni.update',$alumni->id) }}">
            @csrf
            <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="kode_pt">Kode Perguruan Tinggi</label>
                    <input required="" type="" name="kode_pt" placeholder="Kode Perguruan Tinggi" class="form-control"> 
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
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Photo</label>
                        <input type="file" name="file" class="dropify form-control" data-height="190" data-allowed-file-extensions="png jpg gif jpeg svg webp jfif" required>
                    </div>
                </div>
            </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">UPDATE</button>
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

    $('.dropify').dropify({
        messages: {
            default: 'Drag atau Drop untuk memilih gambar',
            replace: 'Ganti',
            remove:  'Hapus',
            error:   'error'
        }
    });

    $('.title').keyup(function(){
        var title = $(this).val().toLowerCase().replace(/[&\/\\#^, +()$~%.'":*?<>{}]/g,'-');
        $('.slug').val(title);
    });
</script>
@endpush