@extends('layouts.backend.app',[
	'title' => 'Tambah Data',
])

@push('css')
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/summernote') }}/summernote-bs4.min.css">
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/dropify') }}/dist/css/dropify.min.css">
@endpush

@section('content')
<div class="container">    
    <div class="card card-success">
        <div class="card-header">
            <div class="row">
                <div class="col-9">
                    <h4 class="fs-title">KUESIONER PEMBELAJARAN</h4>
                </div>
                <div class="col-3">
                    <h4><font color="yellow">LANGKAH 2 DARI 5</font> </h4>
                </div>
            </div>  
        </div>
        <div class="card-body">
            <form method="POST" enctype="multipart/form-data" action="{{ route('alumni.pembelajaran.store') }}">
                @csrf
                <div class="row">
                    <div class="col-12">
                        <div class="card ">
                            <div class="card-body">
                                <div class="row">
                                    <h4 class="card-title">F2 Menurut anda seberapabesar penekanan pada metode pembelajaran di bawah ini dilaksanakan di program studi anda ? *</h4>
                                    <br><br>
                                </div>
                                <!-- baris 1 -->
                                <div class="row">
                                    <div class="col-2">
                                    
                                    </div>
                                    <div class="col-2">
                                        1. Sangat Besar
                                    </div>
                                    <div class="col-2">
                                        2. Besar
                                    </div>
                                    <div class="col-2">
                                        3. Cukup Besar
                                    </div>
                                    <div class="col-2">
                                        4. Kurang
                                    </div>
                                    <div class="col-2">
                                        5. Tidak Sama Sekali
                                    </div>
                                </div>
                                <!-- baris 2 -->
                                <br>
                                <div class="row">
                                    <div class="col-2">
                                        F2-01 Perkuliahan
                                    </div>
                                    <div class="col-2">
                                        <div class="form-group">                                            
                                            <div class="form-check">
                                                 <input required="" class="form-check-input" value="Sangat Besar" type="radio" name="f2_01">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="form-group">                                            
                                            <div class="form-check">
                                                 <input required="" class="form-check-input" value="Besar"type="radio" name="f2_01">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="form-group">                                            
                                            <div class="form-check">
                                                 <input required="" class="form-check-input" value="Cukup Besar" type="radio" name="f2_01">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="form-group">                                            
                                                <div class="form-check">
                                                     <input required="" class="form-check-input" value="Kurang" type="radio" name="f2_01">
                                                </div>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="form-group">                                            
                                                <div class="form-check">
                                                     <input required="" class="form-check-input" value="Tidak Sama Sekali" type="radio" name="f2_01">
                                                </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-2">
                                        F2-02 Demonstrasi
                                    </div>
                                    <div class="col-2">
                                        <div class="form-group">                                            
                                            <div class="form-check">
                                                 <input required="" class="form-check-input" value="Sangat Besar" type="radio" name="f2_02">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="form-group">                                            
                                            <div class="form-check">
                                                 <input required="" class="form-check-input" value="Besar" type="radio" name="f2_02">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="form-group">                                            
                                            <div class="form-check">
                                                 <input required="" class="form-check-input" value="Cukup Besar" type="radio" name="f2_02">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="form-group">                                            
                                            <div class="form-check">
                                                 <input required="" class="form-check-input" value="Kurang" type="radio" name="f2_02">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="form-group">                                            
                                            <div class="form-check">
                                                 <input required="" class="form-check-input" value="Tidak Sama Sekali" type="radio" name="f2_02">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- baris 3 -->
                                <br>
                                <div class="row">
                                    <div class="col-2">
                                        F2-03 Partisipasi <br> dalam proyek riset
                                    </div>
                                    <div class="col-2">
                                        <div class="form-group">                                            
                                            <div class="form-check">
                                                 <input required="" class="form-check-input" value="Sangat Besar" type="radio" name="f2_03">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="form-group">                                            
                                            <div class="form-check">
                                                 <input required="" class="form-check-input"  value="Besar" type="radio" name="f2_03">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="form-group">                                            
                                            <div class="form-check">
                                                 <input required="" class="form-check-input"  value="Cukup Besar" type="radio" name="f2_03">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="form-group">                                            
                                            <div class="form-check">
                                                 <input required="" class="form-check-input"  value="Kurang" type="radio" name="f2_03">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="form-group">                                            
                                                <div class="form-check">
                                                     <input required="" class="form-check-input"  value="Tidak Sama Sekali" type="radio" name="f2_03">
                                                </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- baris 4 -->
                                <br>
                                <div class="row">
                                    <div class="col-2">
                                        F2-04 Magang
                                    </div>
                                    <div class="col-2">
                                        <div class="form-group">                                            
                                            <div class="form-check">
                                                 <input required="" class="form-check-input" value="Sangat Besar" type="radio" name="f2_04">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="form-group">                                            
                                            <div class="form-check">
                                                <input required="" class="form-check-input" value="Besar" type="radio" name="f2_04">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="form-group">                                            
                                                <div class="form-check">
                                                     <input required="" class="form-check-input" value="Cukup Besar" type="radio" name="f2_04">
                                                </div>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="form-group">                                            
                                            <div class="form-check">
                                                 <input required="" class="form-check-input" value="Kurang" type="radio" name="f2_04">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="form-group">                                            
                                            <div class="form-check">
                                                 <input required="" class="form-check-input" value="Tidak Sama Sekali" type="radio" name="f2_04">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- baris 5 -->
                                <br>
                                <div class="row">
                                    <div class="col-2">
                                        F2-05 Praktikum
                                    </div>
                                    <div class="col-2">
                                        <div class="form-group">                                            
                                            <div class="form-check">
                                                 <input required="" class="form-check-input" value="Sangat Besar" type="radio" name="f2_05">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="form-group">                                            
                                            <div class="form-check">
                                                 <input required="" class="form-check-input" value="Besar" type="radio" name="f2_05">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="form-group">                                            
                                            <div class="form-check">
                                                 <input required="" class="form-check-input" value="Cukup Besar" type="radio" name="f2_05">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="form-group">                                            
                                            <div class="form-check">
                                                 <input required="" class="form-check-input" value="Kurang" type="radio" name="f2_05">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="form-group">                                            
                                            <div class="form-check">
                                                 <input required="" class="form-check-input" value="Tidak Sama Sekali" type="radio" name="f2_05">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- baris 6 -->
                                <br>
                                <div class="row">
                                    <div class="col-2">
                                        F2-06 Kerja Lapangan
                                    </div>
                                    <div class="col-2">
                                        <div class="form-group">                                            
                                            <div class="form-check">
                                                 <input required="" class="form-check-input" value="Sangat Besar" type="radio" name="f2_06">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="form-group">                                            
                                            <div class="form-check">
                                                 <input required="" class="form-check-input" value="Besar" type="radio" name="f2_06">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="form-group">                                            
                                            <div class="form-check">
                                                 <input required="" class="form-check-input" value="Cukup Besar" type="radio" name="f2_06">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="form-group">                                            
                                            <div class="form-check">
                                                 <input required="" class="form-check-input" value="Kurang" type="radio" name="f2_06">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="form-group">                                            
                                            <div class="form-check">
                                                 <input required="" class="form-check-input" value="Tidak Sama Sekali" type="radio" name="f2_06">
                                            </div>    
                                        </div>
                                    </div>
                                </div>
                                <!-- baris 7 -->
                                <br>
                                <div class="row">
                                    <div class="col-2">
                                        F2-07 Diskusi
                                    </div>
                                    <div class="col-2">
                                        <div class="form-group">                                            
                                            <div class="form-check">
                                                 <input required="" class="form-check-input" value="Sangat Besar" type="radio" name="f2_07">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="form-group">                                            
                                            <div class="form-check">
                                                 <input required="" class="form-check-input" value="Besar" type="radio" name="f2_07">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="form-group">                                            
                                            <div class="form-check">
                                                 <input required="" class="form-check-input" value="Cukup Besar" type="radio" name="f2_07">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="form-group">                                            
                                            <div class="form-check">
                                                 <input required="" class="form-check-input" value="Kurang" type="radio" name="f2_07">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="form-group">                                            
                                            <div class="form-check">
                                                <input class="form-check-input" value="Tidak Sama Sekali" type="radio" name="f2_07">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- baris 8 -->
                                <br>
                                
                        </div>
                    </div>
                </div>
                
            
            
            </div>
            
            <div class="container">  
                <div class="row">
                    <div class="col-1">
                    
                     </div>
                    <div class="col-10">
                        
                    </div>
                    <div class="col-1">
                        <button type="submit" class="btn btn-success">NEXT</button>
                    </div>  
                </div>
                
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