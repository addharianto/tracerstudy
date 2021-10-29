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
                    <h4 class="fs-title">KUESIONER KOMPETENSI</h4>
                </div>
                <div class="col-3">
                    <h4><font color="yellow">LANGKAH 5 DARI 5</font> </h4>
                </div>
            </div>  
        </div>
        <div class="card-body">
            <form method="POST" enctype="multipart/form-data" action="{{ route('alumni.kompetensi.store') }}">
                @csrf
                <div class="row">
                    <!-- kolom kanan -->
                    <div class="col-12">
                        <!--  -->
                        <div class="card ">
                            <div class="card-body">
                                <div class="row">
                                    <h3 class="card-title"><strong>F17A. Pada saat lulus, pada tingkat mana kompetensi di bawah ini anda kuasai? *</strong></h3>
                                    <p>silahkan dipilih berdasarkan kriteria sebagai berikut: (1) Sangat rendah; (2) Rendah; (3) Sedang; (4) Tinggi; dan (5) Sangat Tinggi </p>
                                </div>

                                <!-- <div class="card"> -->
                                    <div class="row">
                                        <!-- P1 -->
                                        <div class="col-sm-7">
                                            <div class="form-group">  
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                                                                        
                                            <label>1</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                            <label>2</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                            <label>3</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                            <label>4</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                            <label>5</label>
                                            </div>
                                        </div>
                                    </div>
                                <!-- </div> -->
                                <!-- 1 -->
                                <div class="card ">
                                    <div class="card-body">
                                        <div class="row">
                                        <!-- P1 -->
                                        <div class="col-sm-7">
                                            <div class="form-group">
                                                <label>F17A-1. Pengetahuan dibidang atau disiplin ilmu anda</label>  
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Sangat Rendah" type="radio" name="f17a_1">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Rendah" type="radio" name="f17a_1">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Sedang" type="radio" name="f17a_1">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Tinggi" type="radio" name="f17a_1">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Sangat Tinggi" type="radio" name="f17a_1">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <!-- 2 -->
                                <div class="card ">
                                    <div class="card-body">
                                        <div class="row">
                                        <!-- P1 -->
                                        <div class="col-sm-7">
                                            <div class="form-group">
                                                <label>F17A-3. Pengetahuan di luar bidang atau disiplin ilmu anda</label>  
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Sangat Rendah" type="radio" name="f17a_3">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Rendah" type="radio" name="f17a_3">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Sedang" type="radio" name="f17a_3">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Tinggi" type="radio" name="f17a_3">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Sangat Tinggi" type="radio" name="f17a_3">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <!-- 3 -->
                                <div class="card ">
                                    <div class="card-body">
                                        <div class="row">
                                        <!-- P1 -->
                                        <div class="col-sm-7">
                                            <div class="form-group">
                                                <label>F17A-5. Pengetahuan Umum</label>  
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Sangat Rendah" type="radio" name="f17a_5">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Rendah" type="radio" name="f17a_5">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Sedang" type="radio" name="f17a_5">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Tinggi" type="radio" name="f17a_5">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Sangat Tinggi" type="radio" name="f17a_5">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                    <!-- 4 -->
                                <div class="card ">
                                    <div class="card-body">
                                        <div class="row">
                                        <!-- P1 -->
                                        <div class="col-sm-7">
                                            <div class="form-group">
                                                <label>F17A-5a. Bahasa Inggris</label>  
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Sangat Rendah" type="radio" name="f17a_5a">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Rendah" type="radio" name="f17a_5a">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Sedang" type="radio" name="f17a_5a">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Tinggi" type="radio" name="f17a_5a">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Sangat Tinggi" type="radio" name="f17a_5a">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                
                                <!-- 5 -->
                                <div class="card ">
                                    <div class="card-body">
                                        <div class="row">
                                        <!-- P1 -->
                                        <div class="col-sm-7">
                                            <div class="form-group">
                                                <label>F17A-7. Ketrampilan Internet</label>  
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Sangat Rendah" type="radio" name="f17a_7">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Rendah" type="radio" name="f17a_7">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Sedang" type="radio" name="f17a_7">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Tinggi" type="radio" name="f17a_7">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Sangat Tinggi" type="radio" name="f17a_7">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <!--6  -->
                                <div class="card ">
                                    <div class="card-body">
                                        <div class="row">
                                        <!-- P1 -->
                                        <div class="col-sm-7">
                                            <div class="form-group">
                                                <label>F17A-9. Ketrampilan Komputer</label>  
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Sangat Rendah" type="radio" name="f17a_9">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Rendah" type="radio" name="f17a_9">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Sedang" type="radio" name="f17a_9">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Tinggi" type="radio" name="f17a_9">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Sangat Tinggi" type="radio" name="f17a_9">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <!-- 7 -->
                                <div class="card ">
                                    <div class="card-body">
                                        <div class="row">
                                        <!-- P1 -->
                                        <div class="col-sm-7">
                                            <div class="form-group">
                                                <label>F17A-11. Berpikir Kritis</label>  
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Sangat Rendah" type="radio" name="f17a_11">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Rendah" type="radio" name="f17a_11">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Sedang" type="radio" name="f17a_11">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Tinggi" type="radio" name="f17a_11">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Sangat Tinggi" type="radio" name="f17a_11">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <!-- 8 -->
                                <div class="card ">
                                    <div class="card-body">
                                        <div class="row">
                                        <!-- P1 -->
                                        <div class="col-sm-7">
                                            <div class="form-group">
                                                <label>F17A-13. Ketrampilan riset</label>  
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Sangat Rendah" type="radio" name="f17a_13">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Rendah" type="radio" name="f17a_13">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Sedang" type="radio" name="f17a_13">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Tinggi" type="radio" name="f17a_13">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Sangat Tinggi" type="radio" name="f17a_13">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                    <!-- 9 -->
                                <div class="card ">
                                    <div class="card-body">
                                        <div class="row">
                                        <!-- P1 -->
                                        <div class="col-sm-7">
                                            <div class="form-group">
                                                <label>F17A-15. Kemampuan Belajar</label>  
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Sangat Rendah" type="radio" name="f17a_15">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Rendah" type="radio" name="f17a_15">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Sedang" type="radio" name="f17a_15">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Tinggi" type="radio" name="f17a_15">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Sangat Tinggi" type="radio" name="f17a_15">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <!-- 10 -->
                                <div class="card ">
                                    <div class="card-body">
                                        <div class="row">
                                        <!-- P1 -->
                                        <div class="col-sm-7">
                                            <div class="form-group">
                                                <label>F17A-17. Kemampuan berkomunikasi</label>  
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Sangat Rendah" type="radio" name="f17a_17">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Rendah" type="radio" name="f17a_17">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Sedang" type="radio" name="f17a_17">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Tinggi" type="radio" name="f17a_17">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Sangat Tinggi" type="radio" name="f17a_17">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <!-- 11 -->
                                <div class="card ">
                                    <div class="card-body">
                                        <div class="row">
                                        <!-- P1 -->
                                        <div class="col-sm-7">
                                            <div class="form-group">
                                                <label>F17A-19. Bekerja di bawah tekanan</label>  
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Sangat Rendah" type="radio" name="f17a_19">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Rendah" type="radio" name="f17a_19">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Sedang" type="radio" name="f17a_19">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Tinggi" type="radio" name="f17a_19">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Sangat Tinggi" type="radio" name="f17a_19">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <!--  12-->
                                <div class="card ">
                                    <div class="card-body">
                                        <div class="row">
                                        <!-- P1 -->
                                        <div class="col-sm-7">
                                            <div class="form-group">
                                                <label>F17A-21. Manajemen waktu</label>  
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Sangat Rendah" type="radio" name="f17a_21">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Rendah" type="radio" name="f17a_21">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Sedang" type="radio" name="f17a_21">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Tinggi" type="radio" name="f17a_21">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Sangat Tinggi" type="radio" name="f17a_21">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <!-- 13 -->
                                <div class="card ">
                                    <div class="card-body">
                                        <div class="row">
                                        <!-- P1 -->
                                            <div class="col-sm-7">
                                                <div class="form-group">
                                                    <label>F17A-23. Bekerja secara mandiri</label>  
                                                </div>
                                            </div>
                                            <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Sangat Rendah" type="radio" name="f17a_23">
                                                </div>
                                            </div>
                                            </div>
                                            <div class="col-sm-1">
                                                <div class="form-group">                                            
                                                    <div class="form-check">
                                                        <input required="" class="form-check-input" value="Rendah" type="radio" name="f17a_23">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-1">
                                                <div class="form-group">                                            
                                                    <div class="form-check">
                                                        <input required="" class="form-check-input" value="Sedang" type="radio" name="f17a_23">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-1">
                                                <div class="form-group">                                            
                                                    <div class="form-check">
                                                        <input required="" class="form-check-input" value="Tinggi" type="radio" name="f17a_23">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-1">
                                                <div class="form-group">                                            
                                                    <div class="form-check">
                                                        <input required="" class="form-check-input" value="Sangat Tinggi" type="radio" name="f17a_23">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    <!-- 14 -->
                                <div class="card ">
                                    <div class="card-body">
                                        <div class="row">
                                        <!-- P1 -->
                                        <div class="col-sm-7">
                                            <div class="form-group">
                                                <label>F17A-25. Bekerja dalam tim/bekerjasama dengan orang lain</label>  
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Sangat Rendah" type="radio" name="f17a_25">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Rendah" type="radio" name="f17a_25">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Sedang" type="radio" name="f17a_25">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Tinggi" type="radio" name="f17a_25">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Sangat Tinggi" type="radio" name="f17a_25">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <!-- 15 -->
                                <div class="card ">
                                    <div class="card-body">
                                        <div class="row">
                                        <!-- P1 -->
                                        <div class="col-sm-7">
                                            <div class="form-group">
                                                <label>F17A-27. Kemampuan dalam memecahkan masalah</label>  
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Sangat Rendah" type="radio" name="f17a_27">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Rendah" type="radio" name="f17a_27">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Sedang" type="radio" name="f17a_27">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Tinggi" type="radio" name="f17a_27">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Sangat Tinggi" type="radio" name="f17a_27">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <!--16  -->
                                <div class="card ">
                                    <div class="card-body">
                                        <div class="row">
                                        <!-- P1 -->
                                        <div class="col-sm-7">
                                            <div class="form-group">
                                                <label>F17A-29. Negosiasi</label>  
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Sangat Rendah" type="radio" name="f17a_29">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Rendah" type="radio" name="f17a_29">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Sedang" type="radio" name="f17a_29">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Tinggi" type="radio" name="f17a_29">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Sangat Tinggi" type="radio" name="f17a_29">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <!-- 17 -->
                                <div class="card ">
                                    <div class="card-body">
                                        <div class="row">
                                        <!-- P1 -->
                                        <div class="col-sm-7">
                                            <div class="form-group">
                                                <label>F17A-31. Kemampuan analisis</label>  
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Sangat Rendah" type="radio" name="f17a_31">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Rendah" type="radio" name="f17a_31">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Sedang" type="radio" name="f17a_31">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Tinggi" type="radio" name="f17a_31">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Sangat Tinggi" type="radio" name="f17a_31">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                    <!-- 18 -->
                                <div class="card ">
                                    <div class="card-body">
                                        <div class="row">
                                        <!-- P1 -->
                                        <div class="col-sm-7">
                                            <div class="form-group">
                                                <label>F17A-33. Toleransi</label>  
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Sangat Rendah" type="radio" name="f17a_33">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Rendah" type="radio" name="f17a_33">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Sedang" type="radio" name="f17a_33">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Tinggi" type="radio" name="f17a_33">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Sangat Tinggi" type="radio" name="f17a_33">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <!-- 19 -->
                                <div class="card ">
                                    <div class="card-body">
                                        <div class="row">
                                        <!-- P1 -->
                                        <div class="col-sm-7">
                                            <div class="form-group">
                                                <label>F17A-35. Kemampuan Adaptasi</label>  
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Sangat Rendah" type="radio" name="f17a_35">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Rendah" type="radio" name="f17a_35">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Sedang" type="radio" name="f17a_35">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Tinggi" type="radio" name="f17a_35">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Sangat Tinggi" type="radio" name="f17a_35">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                               
                                <!--  -->
                            </div>    
                            </div>  
                        </div> 
                        <!-- f17 b -->
                        <div class="card ">
                            <div class="card-body">
                                <div class="row">
                                    <h3 class="card-title"><strong>F17B Pada saat ini, pada tingkat mana kompetensi di bawah ini diperlukan dalam pekerjaan ? *</strong></h3>
                                    <p>silahkan dipilih berdasarkan kriteria sebagai berikut: (1) Sangat rendah; (2) Rendah; (3) Sedang; (4) Tinggi; dan (5) Sangat Tinggi </p>
                                </div>

                                <!-- <div class="card"> -->
                                    <div class="row">
                                        <!-- P1 -->
                                        <div class="col-sm-7">
                                            <div class="form-group">  
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                                                                        
                                            <label>1</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                            <label>2</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                            <label>3</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                            <label>4</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                            <label>5</label>
                                            </div>
                                        </div>
                                    </div>
                                <!-- </div> -->
                                <!--  -->
                                <div class="card ">
                                    <div class="card-body">
                                        <div class="row">
                                        <!-- P1 -->
                                        <div class="col-sm-7">
                                            <div class="form-group">
                                                <label>F17B-2b. Pengetahuan dibidang atau disiplin ilmu anda</label>  
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Sangat Rendah" type="radio" name="f17b_2b">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Rendah" type="radio" name="f17b_2b">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Sedang" type="radio" name="f17b_2b">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Tinggi" type="radio" name="f17b_2b">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Sangat Tinggi" type="radio" name="f17b_2b">
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
                                        <!-- P1 -->
                                        <div class="col-sm-7">
                                            <div class="form-group">
                                                <label>F17B-4b. Pengetahuan di luar bidang atau disiplin ilmu anda</label>  
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Sangat Rendah" type="radio" name="f17b_4b">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Rendah" type="radio" name="f17b_4b">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Sedang" type="radio" name="f17b_4b">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Tinggi" type="radio" name="f17b_4b">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Sangat Tinggi" type="radio" name="f17b_4b">
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
                                        <!-- P1 -->
                                        <div class="col-sm-7">
                                            <div class="form-group">
                                                <label>F17B-6b. Pengetahuan Umum</label>  
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Sangat Rendah" type="radio" name="f17b_6b">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Rendah" type="radio" name="f17b_6b">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Sedang" type="radio" name="f17b_6b">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Tinggi" type="radio" name="f17b_6b">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Sangat Tinggi" type="radio" name="f17b_6b">
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
                                        <!-- P1 -->
                                        <div class="col-sm-7">
                                            <div class="form-group">
                                                <label>F17B-6ba. Bahasa Inggris</label>  
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Sangat Rendah" type="radio" name="f17b_6ba">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Rendah" type="radio" name="f17b_6ba">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Sedang" type="radio" name="f17b_6ba">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Tinggi" type="radio" name="f17b_6ba">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Sangat Tinggi" type="radio" name="f17b_6ba">
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
                                        <!-- P1 -->
                                        <div class="col-sm-7">
                                            <div class="form-group">
                                                <label>F17B-8b. Ketrampilan Internet</label>  
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Sangat Rendah" type="radio" name="f17b_8b">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Rendah" type="radio" name="f17b_8b">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Sedang" type="radio" name="f17b_8b">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Tinggi" type="radio" name="f17b_8b">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Sangat Tinggi" type="radio" name="f17b_8b">
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
                                        <!-- P1 -->
                                        <div class="col-sm-7">
                                            <div class="form-group">
                                                <label>F17B-10b. Ketrampilan Komputer</label>  
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Sangat Rendah" type="radio" name="f17b_10b">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Rendah" type="radio" name="f17b_10b">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Sedang" type="radio" name="f17b_10b">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Tinggi" type="radio" name="f17b_10b">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Sangat Tinggi" type="radio" name="f17b_10b">
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
                                        <!-- P1 -->
                                        <div class="col-sm-7">
                                            <div class="form-group">
                                                <label>F17B-12b. Berpikir Kritis</label>  
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Sangat Rendah" type="radio" name="f17b_12b">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Rendah" type="radio" name="f17b_12b">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Sedang" type="radio" name="f17b_12b">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Tinggi" type="radio" name="f17b_12b">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Sangat Tinggi" type="radio" name="f17b_12b">
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
                                        <!-- P1 -->
                                        <div class="col-sm-7">
                                            <div class="form-group">
                                                <label>F17B-14b. Ketrampilan riset</label>  
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Sangat Rendah" type="radio" name="f17b_14b">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Rendah" type="radio" name="f17b_14b">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Sedang" type="radio" name="f17b_14b">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Tinggi" type="radio" name="f17b_14b">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Sangat Tinggi" type="radio" name="f17b_14b">
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
                                        <!-- P1 -->
                                        <div class="col-sm-7">
                                            <div class="form-group">
                                                <label>F17B-16b. Kemampuan Belajar</label>  
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Sangat Rendah" type="radio" name="f17b_16b">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Rendah" type="radio" name="f17b_16b">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Sedang" type="radio" name="f17b_16b">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Tinggi" type="radio" name="f17b_16b">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Sangat Tinggi" type="radio" name="f17b_16b">
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
                                        <!-- P1 -->
                                        <div class="col-sm-7">
                                            <div class="form-group">
                                                <label>F17B-18b. Kemampuan berkomunikasi</label>  
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Sangat Rendah" type="radio" name="f17b_18b">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Rendah" type="radio" name="f17b_18b">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Sedang" type="radio" name="f17b_18b">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Tinggi" type="radio" name="f17b_18b">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Sangat Tinggi" type="radio" name="f17b_18b">
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
                                        <!-- P1 -->
                                        <div class="col-sm-7">
                                            <div class="form-group">
                                                <label>F17B-20b. Bekerja di bawah tekanan</label>  
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Sangat Rendah" type="radio" name="f17b_20b">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Rendah" type="radio" name="f17b_20b">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Sedang" type="radio" name="f17b_20b">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Tinggi" type="radio" name="f17b_20b">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Sangat Tinggi" type="radio" name="f17b_20b">
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
                                        <!-- P1 -->
                                        <div class="col-sm-7">
                                            <div class="form-group">
                                                <label>F17B-22b. Manajemen waktu</label>  
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Sangat Rendah" type="radio" name="f17b_22b">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Rendah" type="radio" name="f17b_22b">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Sedang" type="radio" name="f17b_22b">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Tinggi" type="radio" name="f17b_22b">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Sangat Tinggi" type="radio" name="f17b_22b">
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
                                        <!-- P1 -->
                                        <div class="col-sm-7">
                                            <div class="form-group">
                                                <label>F17B-24b. Bekerja secara mandiri</label>  
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Sangat Rendah" type="radio" name="f17b_24b">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Rendah" type="radio" name="f17b_24b">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Sedang" type="radio" name="f17b_24b">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Tinggi" type="radio" name="f17b_24b">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Sangat Tinggi" type="radio" name="f17b_24b">
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
                                        <!-- P1 -->
                                        <div class="col-sm-7">
                                            <div class="form-group">
                                                <label>F17B-26b. Bekerja dalam tim/bekerjasama dengan orang lain</label>  
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Sangat Rendah" type="radio" name="f17b_26b">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Rendah" type="radio" name="f17b_26b">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Sedang" type="radio" name="f17b_26b">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Tinggi" type="radio" name="f17b_26b">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Sangat Tinggi" type="radio" name="f17b_26b">
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
                                        <!-- P1 -->
                                        <div class="col-sm-7">
                                            <div class="form-group">
                                                <label>F17B-28b. Kemampuan dalam memecahkan masalah</label>  
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Sangat Rendah" type="radio" name="f17b_28b">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Rendah" type="radio" name="f17b_28b">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Sedang" type="radio" name="f17b_28b">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Tinggi" type="radio" name="f17b_28b">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Sangat Tinggi" type="radio" name="f17b_28b">
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
                                        <!-- P1 -->
                                        <div class="col-sm-7">
                                            <div class="form-group">
                                                <label>F17B-30b. Negosiasi</label>  
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Sangat Rendah" type="radio" name="f17b_30b">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Rendah" type="radio" name="f17b_30b">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Sedang" type="radio" name="f17b_30b">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Tinggi" type="radio" name="f17b_30b">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Sangat Tinggi" type="radio" name="f17b_30b">
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
                                        <!-- P1 -->
                                        <div class="col-sm-7">
                                            <div class="form-group">
                                                <label>F17B-32b. Kemampuan analisis</label>  
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Sangat Rendah" type="radio" name="f17b_32b">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Rendah" type="radio" name="f17b_32b">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Sedang" type="radio" name="f17b_32b">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Tinggi" type="radio" name="f17b_32b">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Sangat Tinggi" type="radio" name="f17b_32b">
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
                                        <!-- P1 -->
                                        <div class="col-sm-7">
                                            <div class="form-group">
                                                <label>F17B-34b. Toleransi</label>  
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Sangat Rendah" type="radio" name="f17b_34b">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Rendah" type="radio" name="f17b_34b">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Sedang" type="radio" name="f17b_34b">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Tinggi" type="radio" name="f17b_34b">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Sangat Tinggi" type="radio" name="f17b_34b">
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
                                        <!-- P1 -->
                                        <div class="col-sm-7">
                                            <div class="form-group">
                                                <label>F17B-36b. Kemampuan Adaptasi</label>  
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Sangat Rendah" type="radio" name="f17b_36b">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Rendah" type="radio" name="f17b_36b">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Sedang" type="radio" name="f17b_36b">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Tinggi" type="radio" name="f17b_36b">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Sangat Tinggi" type="radio" name="f17b_36b">
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
                                        <!-- P1 -->
                                        <div class="col-sm-7">
                                            <div class="form-group">
                                                <label>F17B-2b. Pengetahuan dibidang atau disiplin ilmu anda</label>  
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Sangat Rendah" type="radio" name="f17b_2b">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Rendah" type="radio" name="f17b_2b">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Sedang" type="radio" name="f17b_2b">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Tinggi" type="radio" name="f17b_2b">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Sangat Tinggi" type="radio" name="f17b_2b">
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
                                        <!-- P1 -->
                                        <div class="col-sm-7">
                                            <div class="form-group">
                                                <label>F17B-4b. Pengetahuan di luar bidang atau disiplin ilmu anda</label>  
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Sangat Rendah" type="radio" name="f17b_4b">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Rendah" type="radio" name="f17b_4b">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Sedang" type="radio" name="f17b_4b">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input required="" class="form-check-input" value="Tinggi" type="radio" name="f17b_4b">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">                                            
                                                <div class="form-check">
                                                    <input class="form-check-input" value="Sangat Tinggi" type="radio" name="f17a_21">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <!--  -->
                            </div>    
                        </div> 
                    </div>
                        <!--  -->
                      
                        <!--  -->
                    <div class="container">  
                            <div class="row">
                                <div class="col-1">
                                <a href="{{route('alumni.sikon.create') }}" class="btn btn-danger pull-right">KEMBALI</a>
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