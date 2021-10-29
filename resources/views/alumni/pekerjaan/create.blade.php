@extends('layouts.backend.app',[
	'title' => 'Isi Data Pekerjaan',
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
                    <h4 class="fs-title">KUESIONER PEKERJAAN</h4>
                </div>
                <div class="col-3">
                    <h4><font color="yellow">LANGKAH 3 DARI 5</font> </h4>
                </div>
            </div>  
        </div>
        <div class="card-body">
            <form method="POST" enctype="multipart/form-data" action="{{ route('alumni.pekerjaan.store') }}">
                @csrf
                <div class="row">
                    <!-- kolom kanan -->
                    <div class="col-12">
                        <!-- pertanyaan 1 -->
                        <div class="card ">
                            <div class="card-body">
                                <div class="row">
                                    <h3 class="card-title"><strong>F3-01 Kapan anda mulai mencari pekerjaan (mohon pekerjaan sambilan jangan dimasukkan) ? *</strong></h3>
                                </div>
                                <div class="row">
                                    <!-- P1 -->
                                    <div class="col-sm-6">
                                        <div class="form-group">                                            
                                            <div class="form-check">
                                                 <input required="" class="form-check-input" value="Setelah Lulus" type="radio" name="f3_01">
                                                <label class="form-check-label">1 - Setelah Lulus</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" value="Sebelum Lulus" type="radio" name="f3_01">
                                                <label class="form-check-label">2 - Sebelum Lulus</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" value="Saya tidak mencari kerja" type="radio" name="f3_01">
                                                <label class="form-check-label">3 - Saya tidak mencari kerja</label>
                                            </div>
                                        </div>
                                    </div>
                                
                                </div>
                            </div>
                        </div>
                        <div class="card ">
                            <!-- P2 -->
                            <div class="card-body">
                                <div class="row">
                                    <h4 class="card-title"><strong>F3-02 Berapa bulan anda mulai mencari pekerjaan SEBELUM LULUS ? *</strong></h4>
                                        <p>disi jika anda memilih SEBELUM LULUS pada F3-01. isi 0 (angka NOL) apabila anda memperoleh pekerjaan SETELAH LULUS</p>
                                </div>  

                                <div class="row">
                                    <div class="col-sm-6">
                                    <!-- text input -->
                                        <div class="form-group">
                                            <input type="text" name="f3_02" class="form-control" placeholder="Jawaban anda">
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>
                        <!-- P3 -->
                        <div class="card ">
                            <!-- P2 -->
                            <div class="card-body">
                                <div class="row">
                                    <h4 class="card-title"><strong>F3-03 Berapa bulan anda mulai mencari pekerjaan SESUDAH LULUS ? *</strong></h4>
                                        <p>disi jika anda memilih SETELAH LULUS pada F3-01. isi 0 (angka NOL) apabila anda memperoleh pekerjaan SEBELUM LULUS</p>
                                </div>  

                                <div class="row">
                                    <div class="col-sm-6">
                                    <!-- text input -->
                                        <div class="form-group">
                                            <input type="text" name="f3_03" class="form-control" placeholder="Jawaban anda">
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>
                        <!-- P4 -->
                        <div class="card ">
                            <div class="card-body">
                                <div class="row">
                                    <h3 class="card-title"><strong>F4. Bagaimana anda mencari pekerjaan tersebut? (jawaban bisa lebih dari satu) ?*</strong></h3>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="form-group"> 
                                            <div class="form-check">
                                                F4-01. Melalui iklan di koran/majalah, brosur
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <input class="form-check-input" value="Melalui iklan di koran/majalah, brosur" type="checkbox" name="f4_01">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="form-group"> 
                                            <div class="form-check">
                                            F4-02. Melamar ke prusahaan tanpa mengetahui lowongan yang ada
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <input class="form-check-input" value="Melamar ke prusahaan tanpa mengetahui lowongan yang ada" type="checkbox" name="f4_02">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="form-group"> 
                                            <div class="form-check">
                                            F4-03. Pergi ke bursa/pameran kerja	
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <input class="form-check-input" value="Pergi ke bursa/pameran kerja" type="checkbox" name="f4_03">
                                    </div>
                                </div>
                                <!--  -->
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="form-group"> 
                                            <div class="form-check">
                                            F4-04. Mencari lewat internet/iklan online/milis	
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <input class="form-check-input" value="Mencari lewat internet/iklan online/milis" type="checkbox" name="f4_04">
                                    </div>
                                </div>
                                <!--  -->
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="form-group"> 
                                            <div class="form-check">
                                            F4-05. Dihubungi oleh perusahaan	
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <input class="form-check-input" value="Dihubungi oleh perusahaan" type="checkbox" name="f4_05">
                                    </div>
                                </div>
                                <!--  -->
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="form-group"> 
                                            <div class="form-check">
                                            F4-06. Menghubungi Kemenakertrans		
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <input class="form-check-input" value="Menghubungi Kemenakertrans" type="checkbox" name="f4_06">
                                    </div>
                                </div>
                                <!--  -->
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="form-group"> 
                                            <div class="form-check">
                                            F4-07. Menghubungi agen tenaga kerja komersial/swasta		
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <input class="form-check-input" value="Menghubungi agen tenaga kerja komersial/swasta" type="checkbox" name="f4_07">
                                    </div>
                                </div>
                                <!--  -->
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="form-group"> 
                                            <div class="form-check">
                                            F4-08. Memperoleh informasi dari pusat/kantor pengembangan karir fakultas/universitas		
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <input class="form-check-input" value="Memperoleh informasi dari pusat/kantor pengembangan karir fakultas/universitas	" type="checkbox" name="f4_08">
                                    </div>
                                </div>
                                <!--  -->
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="form-group"> 
                                            <div class="form-check">
                                            F4-09. Menghubungi kantor kemahasiswaan/hubungan alumni		
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <input class="form-check-input" value="Menghubungi kantor kemahasiswaan/hubungan alumni" type="checkbox" name="f4_09">
                                    </div>
                                </div>
                                <!--  -->
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="form-group"> 
                                            <div class="form-check">
                                            F4-10. Membangun jejaring (network) sejak masih kuliah		
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <input class="form-check-input" value="Membangun jejaring (network) sejak masih kuliah" type="checkbox" name="f4_10">
                                    </div>
                                </div>
                                <!--  -->
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="form-group"> 
                                            <div class="form-check">
                                            F4-11. Melalui relasi (misalnya dosen, orang tua, saudara, teman, dll)			
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <input class="form-check-input" value="melalui relasi (misalnya dosen, orang tua, saudara, teman, dll)" type="checkbox" name="f4_11">
                                    </div>
                                </div>
                                <!--  -->
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="form-group"> 
                                            <div class="form-check">
                                            F4-12. Membangun bisnis sendiri			
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <input class="form-check-input" value="Membangun bisnis sendiri" type="checkbox" name="f4_12">
                                    </div>
                                </div>
                                <!--  -->
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="form-group"> 
                                            <div class="form-check">
                                            F4-13. Melalui penemapatan kerja atau magang			
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <input class="form-check-input" value="Melalui penemapatan kerja atau magang" type="checkbox" name="f4_13">
                                    </div>
                                </div>
                                <!--  -->
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="form-group"> 
                                            <div class="form-check">
                                            F4-14. Bekerja di tempat yang sama dengan tempat kerja semasa kuliah			
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <input class="form-check-input" value="Bekerja di tempat yang sama dengan tempat kerja semasa kuliah" type="checkbox" name="f4_14">
                                    </div>
                                </div>
                                <!--  -->
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="form-group"> 
                                            <div class="form-check">
                                            F4-15. Lainnya			
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <input class="form-check-input" value="Lainnya" type="checkbox" name="f4_15">
                                    </div>
                                </div>
                                <!--  -->
                                <!--  -->
                            </div>
                        </div>
                        <div class="card ">
                            <!-- P2 -->
                            <div class="card-body">
                                <div class="row">
                                    <h4 class="card-title"><strong>F4-16 Jika anda memilih LAINNYA pada point F4-15, Sebutkan cara LAIN anda mencari pekerjaan tersebut ?</strong></h4>
                                        <p>dapat dikosongkan jika anda memilih salah satu pada pin F4-01 sampai F4-14</p>
                                </div>  

                                <div class="row">
                                    <div class="col-sm-6">
                                    <!-- text input -->
                                        <div class="form-group">
                                             <input required="" type="text" name="f4_16" class="form-control" placeholder="Jawaban anda">
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                    <div class="card card-success">
                        <div class="card-header">
                            <h4 class="fs-title"><center>KUESIONER TERKAIT PERUSAHAAN</center></h4>
                        </div>
                    </div>
                        <div class="card ">
                            <!-- P2 -->
                            <div class="card-body">
                                <div class="row">
                                    <h4 class="card-title"><strong>F6. Berapa perusahaan/instansi/institusi yang sudah anda lamar (lewat surat atau email) SEBELUM anda memperoleh pekerjaan pertama?</strong></h4>
	                                    <p>dapat dikosongkan apabila anda tidak melamar pekerjaan </p>
                                </div>  

                                <div class="row">
                                    <div class="col-sm-6">
                                    <!-- text input -->
                                        <div class="form-group">
                                             <input required="" type="text" name="f6" class="form-control" placeholder="Jawaban anda">
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>
                        <div class="card ">
                            <!-- P2 -->
                            <div class="card-body">
                                <div class="row">
                                    <h4 class="card-title"><strong>F7. Berapa banyak perusahaan/instansi/institusi yang merespon lamaran anda ?</strong></h4>
                                        <p>dapat dikosongkan apabila anda tidak melamar pekerjaan</p>
                                </div>  

                                <div class="row">
                                    <div class="col-sm-6">
                                    <!-- text input -->
                                        <div class="form-group">
                                             <input required="" type="text" name="f7" class="form-control" placeholder="Jawaban anda">
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>
                        <div class="card ">
                            <!-- P2 -->
                            <div class="card-body">
                                <div class="row">
                                    <h4 class="card-title"><strong>F8. Berapa banyak perusahaan/instansi/institusi yang mengundang anda untuk wawancara ?</strong></h4>
	                                    <p>dapat dikosongkan apabila anda tidak melamar pekerjaan</p>
                                        
                                </div>  

                                <div class="row">
                                    <div class="col-sm-6">
                                    <!-- text input -->
                                        <div class="form-group">
                                            <input type="text" name="f8" class="form-control" placeholder="Jawaban anda">
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>
                        
                    <div class="container">  
                            <div class="row">
                                <div class="col-1">
                                <a href="{{route('alumni.pembelajaran.create') }}" class="btn btn-danger pull-right">KEMBALI</a>
                                </div>
                                <div class="col-10">
                                    
                                </div>
                                <div class="col-1">
                                    <button type="submit" class="btn btn-success">NEXT</button>
                                </div>  
                            </div>
                            
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