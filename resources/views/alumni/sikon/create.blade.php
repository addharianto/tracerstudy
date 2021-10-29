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
                    <h4 class="fs-title">KUESIONER SITUASI ANDA</h4>
                </div>
                <div class="col-3">
                    <h4><font color="yellow">LANGKAH 4 DARI 5</font> </h4>
                </div>
            </div>  
        </div>
        <div class="card-body">
            <form method="POST" enctype="multipart/form-data" action="{{ route('alumni.sikon.store') }}">
                @csrf
                <div class="row">
                    <!-- kolom kanan -->
                    <div class="col-12">
                        <div class="card ">
                            <!-- P2 -->
                            <div class="card-body">
                                <div class="row">
                                    <h4 class="card-title"><strong>F9. Bagaimana anda menggambarkan situasi anda saat ini? (jawaban bisa lebih dari satu) ? *</strong></h4>
                                    
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-sm-9">
                                       
                                    </div>
                                    <div class="col-sm-3">
                                        <h6>1. Sesuai</h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-9">
                                        <div class="form-group"> 
                                            <div class="form-check">
                                            F9-01. Saya masih belajar/melanjutkan kuliah profesi atau pascasarjana	
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <input class="form-check-input" value="Saya masih belajar/melanjutkan kuliah profesi atau pascasarjana" type="checkbox" name="F9_01">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-9">
                                        <div class="form-group"> 
                                            <div class="form-check">
                                            F9-02. Saya menikah
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <input class="form-check-input" value="Saya menikah" type="checkbox" name="F9_02">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-9">
                                        <div class="form-group"> 
                                            <div class="form-check">
                                            F9-03. Saya sibuk dengan keluarga dan anak-anak	
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <input class="form-check-input" value="Saya sibuk dengan keluarga dan anak-anak" type="checkbox" name="f9_03">
                                    </div>
                                </div>
                                <!--  -->
                                <div class="row">
                                    <div class="col-sm-9">
                                        <div class="form-group"> 
                                            <div class="form-check">
                                            F9-04. Saya sekarang sedang mencari pekerjaan	
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <input class="form-check-input" value="Saya sekarang sedang mencari pekerjaan" type="checkbox" name="f9_04">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-9">
                                        <div class="form-group"> 
                                            <div class="form-check">
                                            F9-05. LAINNYA
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <input class="form-check-input" value="LAINNYA" type="checkbox" name="f9_05">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card "> 
                            <div class="card-body">
                                <div class="row">
                                    <h4 class="card-title"><strong>F9-06. Jika anda memilih LAINNYA pada poin F9-05. Sebutkan bagaiamana gambaran situasi anda saat ini ?</strong></h4>
                                        <P>Dapat dikosongkan jika anda tidak memilih LAINNYA</p>
                                </div>  

                                <div class="row">
                                    <div class="col-sm-6">
                                    <!-- text input -->
                                        <div class="form-group">
                                            <input type="text" name="F9_06" class="form-control" placeholder="Jawaban anda">
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        
                        </div>
                        <!--  -->
                        <div class="card ">
                            <div class="card-body">
                                <div class="row">
                                    <h3 class="card-title"><strong>F10-01. Apakah anda aktif mencari pekerjaan dalam 4 minggu terakhir? *</strong></h3>
                                </div>
                                <div class="row">
                                    <!-- P1 -->
                                    <div class="col-sm-8">
                                        <div class="form-group">                                            
                                            <div class="form-check">
                                                <input required="" class="form-check-input" value="Tidak" type="radio" name="f10_01">
                                                <label class="form-check-label">1. Tidak</label>
                                            </div>
                                            <div class="form-check">
                                                <input required="" class="form-check-input" value="Tidak, tapi saya sedang menunggu hasil lamaran kerja" type="radio" name="f10_01">
                                                <label class="form-check-label">2. Tidak, tapi saya sedang menunggu hasil lamaran kerja</label>
                                            </div>
                                            <div class="form-check">
                                                <input required="" class="form-check-input" value="Ya, saya akan mulai bekerja dalam 2 minggu ke depan" type="radio" name="f10_01">
                                                <label class="form-check-label">3. Ya, saya akan mulai bekerja dalam 2 minggu ke depan</label>
                                            </div>
                                            <div class="form-check">
                                                <input required="" class="form-check-input" value="Setelah Lulus" type="radio" name="f10_01">
                                                <label class="form-check-label">4. Ya, tapi saya belum pasti akan bekerja dalam 2 minggu ke depan</label>
                                            </div>
                                            <div class="form-check">
                                                <input required="" class="form-check-input" value="Setelah Lulus" type="radio" name="f10_01">
                                                <label class="form-check-label">5. Lainnya</label>
                                            </div>
                                            <div class="form-check">
                                                <div class="row">
                                                    <div class="col-3">
                                                        <input required="" class="form-check-input" value="Lainnya" type="radio" name="f10_01">
                                                        <label class="form-check-label">Yang lain :</label>
                                                    </div>
                                                    <div class="col-9">
                                                        <div class="form-group">
                                                            <input type="text" name="F10_01_lainnya" class="form-control" placeholder="Jawaban anda">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                
                                </div>
                            </div>
                        </div>
                        <!--  -->
                        <div class="card ">
                            <div class="card-body">
                                <div class="row">
                                    <h3 class="card-title"><strong>F11-01. Apa jenis perusahaan/instansi/institusi tempat anda bekerja sekarang ?*</strong></h3>
                                </div>
                                <div class="row">
                                    <!-- P1 -->
                                    <div class="col-sm-6">
                                        <div class="form-group">                                            
                                            <div class="form-check">
                                                <input required="" class="form-check-input" value="Tidak" type="radio" name="f11_01">
                                                <label class="form-check-label">1. Instansi pemerintah (termasuk BUMN)</label>
                                            </div>
                                            <div class="form-check">
                                                <input required="" class="form-check-input" value="Tidak, tapi saya sedang menunggu hasil lamaran kerja" type="radio" name="f11_01">
                                                <label class="form-check-label">2. Organisasi non-profit/Lembaga Swadaya Masyarakat</label>
                                            </div>
                                            <div class="form-check">
                                                <input required="" class="form-check-input" value="Ya, saya akan mulai bekerja dalam 2 minggu ke depan" type="radio" name="f11_01">
                                                <label class="form-check-label">3. Perusahaan swasta</label>
                                            </div>
                                            <div class="form-check">
                                                <input required="" class="form-check-input" value="Setelah Lulus" type="radio" name="f11_01">
                                                <label class="form-check-label">4. Wiraswasta/perusahaan sendiri</label>
                                            </div>
                                            <div class="form-check">
                                                <input required="" class="form-check-input" value="Setelah Lulus" type="radio" name="f11_01">
                                                <label class="form-check-label">5. Lainnya</label>
                                            </div>
                                            <div class="form-check">
                                                <div class="row">
                                                    <div class="col-3">
                                                        <input required="" class="form-check-input" value="Lainnya" type="radio" name="f11_01">
                                                        <label class="form-check-label">Yang lain :</label>
                                                    </div>
                                                    <div class="col-9">
                                                        <div class="form-group">
                                                            <input type="text" name="F11_01_lainnya" class="form-control" placeholder="Jawaban anda">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                
                                </div>
                            </div>
                        </div>
                        <!--  -->
                        <div class="card ">
                            <!-- P2 -->
                            <div class="card-body">
                                <div class="row">
                                    <h4 class="card-title"><strong>F16. Jika Menurut anda pekerjaan anda saat ini tidak sesuai dengan pendidikan anda, mengapa anda mengambilnya? (jawaban bisa lebih dari satu) ? *</strong></h4>
                                    
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-sm-9">
                                       
                                    </div>
                                    <div class="col-sm-3">
                                        <h6>1. Sesuai (centang jika sesuai)</h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-9">
                                        <div class="form-group"> 
                                            <div class="form-check">
                                            F16-01. Pertanyaan tidak sesuai; pekerjaan saya sekarang sudah sesuai dengan pendidikanya
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <input class="form-check-input" value="Pertanyaan tidak sesuai; pekerjaan saya sekarang sudah sesuai dengan pendidikanya" type="checkbox" name="f16_01">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-9">
                                        <div class="form-group"> 
                                            <div class="form-check">
                                            F16-02. Saya belum mendapatkan pekerjaan yang lebih sesuai	
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <input class="form-check-input" value="Saya belum mendapatkan pekerjaan yang lebih sesuai" type="checkbox" name="f16_02">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-9">
                                        <div class="form-group"> 
                                            <div class="form-check">
                                            F16-03. Di pekerjaan ini saya memperoleh prospek karir yang baik
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <input class="form-check-input" value="Di pekerjaan ini saya memperoleh prospek karir yang baik" type="checkbox" name="f16_03">
                                    </div>
                                </div>
                                <!--  -->
                                <div class="row">
                                    <div class="col-sm-9">
                                        <div class="form-group"> 
                                            <div class="form-check">
                                            F16-04. Saya lebih suka bekerja di area pekerjaan yang tidak ada hubungannya dengan pendidikan saya.	
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <input class="form-check-input" value="Saya lebih suka bekerja di area pekerjaan yang tidak ada hubungannya dengan pendidikan saya" type="checkbox" name="f16_04">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-9">
                                        <div class="form-group"> 
                                            <div class="form-check">
                                            F16-05. Saya dipromosikan ke posisi yang kurang berhubungan dengan pendidikan saya dibanding posisi sebelumnya		
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <input class="form-check-input" value="Saya dipromosikan ke posisi yang kurang berhubungan dengan pendidikan saya dibanding posisi sebelumnya" type="checkbox" name="f16_05">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-9">
                                        <div class="form-group"> 
                                            <div class="form-check">
                                            F16-06. Saya dapat memperoleh pendapatan yang lebih tinggi di pekerjaan ini.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <input class="form-check-input" value="Saya dapat memperoleh pendapatan yang lebih tinggi di pekerjaan ini." type="checkbox" name="f16_06">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-9">
                                        <div class="form-group"> 
                                            <div class="form-check">
                                            F16-07. Pekerjaan saya saat ini lebih aman/terjamin/secure		
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <input class="form-check-input" value="Pekerjaan saya saat ini lebih aman/terjamin/secure" type="checkbox" name="f16_07">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-9">
                                        <div class="form-group"> 
                                            <div class="form-check">
                                            F16-08. Pekerjaan saya saat ini lebih menarik		
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <input class="form-check-input" value="Pekerjaan saya saat ini lebih menarik" type="checkbox" name="f16_08">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-9">
                                        <div class="form-group"> 
                                            <div class="form-check">
                                            F16-09. Pekerjaan saya saat ii lebih memungkinkan saya mengambil pekerjaan tambahan/jadwal yang fleksibel, dll		
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <input class="form-check-input" value="Pekerjaan saya saat ii lebih memungkinkan saya mengambil pekerjaan tambahan/jadwal yang fleksibel, dll" type="checkbox" name="f16_09">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-9">
                                        <div class="form-group"> 
                                            <div class="form-check">
                                            F16-10. Pekerjaan saya saat ini lokasinya lebih dekat dari rumah saya	
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <input class="form-check-input" value="Pekerjaan saya saat ini lokasinya lebih dekat dari rumah saya" type="checkbox" name="f16_10">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-9">
                                        <div class="form-group"> 
                                            <div class="form-check">
                                            F16-11. Pekerjaan saya saat ini dapat lebih menjamin kebutuhan keluarga saya		
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <input class="form-check-input" value="Pekerjaan saya saat ini dapat lebih menjamin kebutuhan keluarga saya" type="checkbox" name="f16_11">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-9">
                                        <div class="form-group"> 
                                            <div class="form-check">
                                            F16-12. Pada awal meniti karir ini, saya harus menerima pekerjaan yang tidak berhubungan dengan pendidikan saya		
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <input class="form-check-input" value="Pada awal meniti karir ini, saya harus menerima pekerjaan yang tidak berhubungan dengan pendidikan saya" type="checkbox" name="f16_12">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-9">
                                        <div class="form-group"> 
                                            <div class="form-check">
                                            F16-13.Lainnya	
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <input class="form-check-input" value="Lainnya" type="checkbox" name="f16_13">
                                    </div>
                                </div>                                
                            </div>
                        </div>
                        <!--  -->
                        <div class="card ">
                            <!-- P2 -->
                            <div class="card-body">
                                <div class="row">
                                    <h4 class="card-title"><strong>F16-14. jika anda memilih LAINNYA pada poin F16-13. Sebutkan apabila Menurut anda pekerjaan anda saat ini tidak sesuai dengan pendidikan anda, mengapa anda mengambilnya ? *</strong></h4>
                                    <p>Dapat dikosongkan jika anda sudah memiliki pilihan pada F16-01 sampai F16-12.</p>
                                </div>  

                                <div class="row">
                                    <div class="col-sm-6">
                                    <!-- text input -->
                                        <div class="form-group">
                                            <input type="text" name="f16_14" class="form-control" placeholder="Jawaban anda">
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>
                        <!--  -->
                    <div class="container">  
                            <div class="row">
                                <div class="col-1">
                                <a href="{{route('alumni.pekerjaan.create') }}" class="btn btn-danger pull-right">KEMBALI</a>
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