@extends('layouts.backend.app',[
	'title' => 'Tambah Alumni',
])

@push('css')
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/summernote') }}/summernote-bs4.min.css">
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/dropify') }}/dist/css/dropify.min.css">
@endpush

@section('content')
<div class="">    
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">DATA ALUMNI</h4>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-6">
            @foreach($alumni as $alu)
              <div class="row">
            @if(auth()->user()->id == $alu->user_id)
                <div class="col-12">
                  <img src="{{ asset('uploads/img/alumni/'.$alu->photo) }}" width="60%" style="height: 300px; object-fit: cover; object-position: center;">
                </div>
           
              </div>
            
            </div>
            <div class="col-10">
              
              <div class="row">
                <div class="col-5">
                  <label> NPM</label>
                </div>
                <div class="col-1">
                  <label>:</label>
                </div>
                <div class="col-6">
                <label>{{$alu->npm }}</label>
                </div>
              </div>
              <div class="row">
                <div class="col-5">
                  <label> NAMA</label>
                </div>
                <div class="col-1">
                  <label>:</label>
                </div>
                <div class="col-6">
                <label>{{ auth()->user()->name }}</label>
                </div>
              </div>
              <div class="row">
                <div class="col-5">
                  <label> EMAIL</label>
                </div>
                <div class="col-1">
                  <label>:</label>
                </div>
                <div class="col-6">
                <label>{{ auth()->user()->email }}</label>
                </div>
              </div>
              <div class="row">                
                <div class="col-5">
                  <label> PRODI</label>
                </div>
                <div class="col-1">
                  <label>:</label>
                </div>
                <div class="col-6">
                  <label>{{$alu->prodi->nama}}</label>
                 
                </div>
              </div>
              <div class="row">
                <div class="col-5">
                  <label> NOMOR HP</label>
                </div>
                <div class="col-1">
                  <label>:</label>
                </div>
                <div class="col-6">
                <label>{{ $alu->nomor_hp }}</label>
                </div>
              </div>
              <div class="row">
                <div class="col-5">
                  <label>TAHUN LULUS</label>
                </div>
                <div class="col-1">
                  <label>:</label>
                </div>
                <div class="col-6">
                <label>{{ $alu->tahun_lulus }}</label>
                </div>
              </div>
            </div>
            @else @endif
            @endforeach
            <div class="col-3">
            @foreach($alumni as $alu)
            @if(auth()->user()->id != $alu->user_id)
              <div class="row">
                <a href="{{ route('alumni.alumni.create') }}" class="btn btn-success btn-sm">Isi Data Tracer Study</a>
              </div>
            @endif
            @endforeach
            </div>
           
          </div>
        </div>
    </div>
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