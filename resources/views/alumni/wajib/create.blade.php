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
                    <h4 class="fs-title">KUESIONER WAJIB</h4>
                </div>
                <div class="col-3">
                    <h4><font color="yellow">LANGKAH 1 DARI 5</font> </h4>
                </div>
            </div>  
        </div>
        <div class="card-body">
            
            <form method="POST" enctype="multipart/form-data" action="{{ route('alumni.wajib.store') }}">
                @csrf
                <div class="row">
                    <!-- kolom kanan -->
                    <div class="col-12">
                        <!-- pertanyaan 1 -->
                        <div class="card ">
                            <!-- <div class="card-header">
                                <h3 class="card-title">F5-01 Kapan anda memperoleh pekerjaan anda ? *</h3>
                            </div> -->
                            <div class="card-body">
                                <div class="row">
                                    <h3 class="card-title">F5-01 Kapan anda memperoleh pekerjaan anda ? <font color="red">*</font></h3>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">                                            
                                            <div class="form-check">
                                                <input required="" class="form-check-input" value="Setelah Lulus" type="radio" name="f5_01">
                                                <label class="form-check-label">1- Setelah Lulus</label>
                                            </div>
                                            <div class="form-check">
                                                <input required="" class="form-check-input @error('f5_01') is-invalid @enderror" value="Sebelum Lulus" type="radio" name="f5_01">
                                                <label class="form-check-label">2- Sebelum Lulus</label>
                                                @error('f5_01')
                                                <div class="invalid-feedback">
                                                {{$message}}
                                                </div>                                                
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- pertanyaan 2 -->
                        <div class="card ">
                            <div class="card-body">
                                <div class="row">
                                    <h4 class="card-title">F5-02 Kira-kira berapa bulan SEBELUM lulus anda memperoleh pekerjaan pertama anda ? <font color="red">*</font></h4>
                                    <p>isi 0 (angka NOL) apabila anda memperoleh pekerjaan SETELAH LULUS</p>
                                </div>  

                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <input required="" type="text" name="f5_02"class="form-control @error('name') is-invalid @enderror" placeholder="Jawaban anda">
                                            @error('name')
                                                <div class="invalid-feedback">
                                                {{$message}}
                                                </div>                                                
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>  
                        <!-- pertanyaan 3 -->
                        <div class="card ">
                            <div class="card-body">
                                <div class="row">
                                    <h4 class="card-title">F5-03 Kira-kira berapa bulan SETELAH lulus anda memperoleh pekerjaan pertama anda ? <font color="red">*</font></h4>
                                    <p>isi 0 (angka NOL) apabila anda memperoleh pekerjaan SEBELUM LULUS</p>
                                </div>
                            <div class="row">
                                    <div class="col-sm-6">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <input required="" type="text" name="f5_03" class="form-control" placeholder="Jawaban anda">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- pertanyaan 4 -->
                        <div class="card ">
                            <div class="card-body">
                            <div class="row">
                                <h3 class="card-title">F12-01 Sebutkan sumber dana dalam pembiayaan kuliah ? <font color="red">*</font></h3>
                            </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">                                            
                                            <div class="form-check">
                                                <input required="" class="form-check-input" value="Biaya Sendiri / Keluarga" type="radio" name="f12_01">
                                                <label class="form-check-label">1 - Biaya Sendiri / Keluarga</label>
                                            </div>
                                            <div class="form-check">
                                                <input required="" class="form-check-input" value="Beasiswa ADIK" type="radio" name="f12_01">
                                                <label class="form-check-label">2 - Beasiswa ADIK</label>
                                            </div>
                                            <div class="form-check">
                                                <input required="" class="form-check-input" value="Beasiswa BIDIKMISI" type="radio" name="f12_01">
                                                <label class="form-check-label">3 - Beasiswa BIDIKMISI</label>
                                            </div>
                                            <div class="form-check">
                                                <input required="" class="form-check-input" value="Beasiswa PPA" type="radio" name="f12_01">
                                                <label class="form-check-label">4 - Beasiswa PPA</label>
                                            </div>
                                            <div class="form-check">
                                                <input required="" class="form-check-input" value="Beasiswa AFIRMASI" type="radio" name="f12_01">
                                                <label class="form-check-label">5 - Beasiswa AFIRMASI</label>
                                            </div>
                                            <div class="form-check">
                                                <input required="" class="form-check-input" value="Beasiswa Perusahaan / Swasta" type="radio" name="f12_01">
                                                <label class="form-check-label">6 - Beasiswa Perusahaan / Swasta</label>
                                            </div>
                                            <div class="form-check">
                                                <input required="" required="" class="form-check-input" value="Lainnya" type="radio" name="f12_01">
                                                <label class="form-check-label">7 - Lainnya</label>
                                            </div>

                                             <!-- text input -->
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-2">
                                                        <div class="form-check">
                                                            <input class="form-check-input" value="Yang lain" type="radio" name="f12_01">
                                                            <label class="form-check-label">8 - Yang lain</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-10">
                                                        <input type="text" name="f12_01_lainnya" class="form-control" placeholder="isi jika ada lainnya">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div> 

                    </div>
                    <!-- pertanyaan 5 -->
                    <div class="card ">
                            <div class="card-body">
                                <div class="row">
                                    <h3 class="card-title">F8 Apakah anda bekerja saat ini (termasuk kerja sambilan dan wirausaha) ? <font color="red">*</font></h3>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">                                            
                                            <div class="form-check">
                                                <input required="" class="form-check-input" value="Ya" type="radio" name="f8">
                                                <label class="form-check-label">1- Ya</label>
                                            </div>
                                            <div class="form-check">
                                                <input required="" class="form-check-input" value="Tidak" type="radio" name="f8">
                                                <label class="form-check-label">2- Tidak</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <!-- pertanyaan 6 -->
                    <div class="card ">
                            <div class="card-body">
                                <div class="row">
                                    <h3 class="card-title">F8 Seberapa erat hubungan antara bidang setudi dengan pekerjaan anda ? <font color="red">*</font></h3>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">                                            
                                            <div class="form-check">
                                                <input required="" class="form-check-input" value="Sangat Erat" type="radio" name="f14">
                                                <label class="form-check-label">1- Sangat Erat</label>
                                            </div>
                                            <div class="form-check">
                                                <input required="" class="form-check-input" value="Erat" type="radio" name="f14">
                                                <label class="form-check-label">2 - Erat</label>
                                            </div>
                                            <div class="form-check">
                                                <input required="" class="form-check-input" value="Cukup Erat" type="radio" name="f14">
                                                <label class="form-check-label">3 - Cukup Erat</label>
                                            </div>
                                            <div class="form-check">
                                                <input required=""class="form-check-input" value="Kurang Erat" type="radio" name="f14">
                                                <label class="form-check-label">4 - Kurang Erat</label>
                                            </div>
                                            <div class="form-check">
                                                <input required="" class="form-check-input" value="Tidak Sama Sekali" type="radio" name="f14">
                                                <label class="form-check-label">5 - Tidak Sama Sekali</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <!-- pertanyaan 7 -->
                    <div class="card ">
                            <div class="card-body">
                            <div class="row">
                                <h3 class="card-title">F15 Tingkat pendidikan apa yang paling tepat/sesuai untuk pekerjaan anda saat ini ? <font color="red">*</font></h3>
                            </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">                                            
                                            <div class="form-check">
                                                <input required="" class="form-check-input" value="Setingkat Lebih Tinggi" type="radio" name="f15">
                                                <label class="form-check-label">1 - Setingkat Lebih Tinggi</label>
                                            </div>
                                            <div class="form-check">
                                                <input required="" class="form-check-input" value="Tingkatan yang sama" type="radio" name="f15">
                                                <label class="form-check-label">2 - Tingkatan yang sama</label>
                                            </div>
                                            <div class="form-check">
                                                <input required="" class="form-check-input" value="Setingkat Lebih Rendah" type="radio" name="f15">
                                                <label class="form-check-label">3 - Setingkat Lebih Rendah</label>
                                            </div>
                                            <div class="form-check">
                                                <input required="" class="form-check-input" value="Tidak Perlu Pendidikan Tinggi" type="radio" name="f15">
                                                <label class="form-check-label">4 - Tidak Perlu Pendidikan Tinggi</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- pertanyaan 8 -->
                        <div class="card ">
                            <div class="card-body">
                            <div class="row">
                                <h4 class="card-title">F13-01 Kira-kira berapa pendapatan dari pekerjaan utama anda setiap bulannya ? <font color="red">*</font></h4>
                            </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <input required="" type="text" name="f13_01" class="form-control" placeholder="0">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- pertanyaan 9 -->
                        <div class="card ">
                            <div class="card-body">   
                                <div class="row">
                                    <h4 class="card-title">F13-02 Kira-kira berapa pendapatan dari LEMBUR DAN TIPS anda setiap bulannya ? <font color="red">*</font></h4>
                                    <P>isi dengan 0 (angka NOL) jika tidak ada pendapatan dari LEMBUR dan TIPS</P>
                                </div>                             
                                 <div class="row">  
                                    <div class="col-sm-6">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <input required="" type="text" name="f13_02" class="form-control" placeholder="0">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- pertanyaan 10 -->
                        <div class="card ">
                            <div class="card-body">
                                <div class="row">
                                    <h4 class="card-title">F13-03 Kira-kira berapa pendapatan dari PEKERJAAN LAIN anda setiap bulannya ? <font color="red">*</font></h4>
                                    <P>isi dengan 0 (angka NOL) jika tidak ada pendapatan dari PEKERJAAN LAIN</p>
                                </div>                               
                                <div class="row">    
                                    <div class="col-sm-6">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <input required="" type="text" name="f13_03" class="form-control" placeholder="0">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                </div>
            
            <div class="container">  
                <div class="row">
                    <div class="col-1">
                    <a href="{{route('alumni.alumni.index') }}" class="btn btn-danger pull-right">KEMBALI</a>
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