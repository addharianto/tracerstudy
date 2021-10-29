@extends('layouts.backend.app',[
    'title' => 'Detail Lowongan',
])
@push('css')
<!-- DataTables -->
<link rel="stylesheet" href="{{ asset('templates/backend/AdminLTE-3.0.1') }}/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
@endpush
@section('content')
<div class="clever-catagory blog-details bg-img d-flex align-items-center justify-content-center p-3 height-400" style="background-image: url({{ asset('img/bg/lowongan.png') }});">
    <div class="blog-details-headline">
        <h3>{{ $lowongan->judul }}</h3>
    </div>
</div>
<!-- ##### Catagory Area End ##### -->

<!-- ##### Blog Details Content ##### -->
<div class="blog-details-content section-padding-100">
    <div class="container">
        <div class="row justify-content-center">
                <!-- Contact Info -->
            <div class="col-12 col-lg-">
                <div class="contact--info mt-50">
                    <h4>Lowongan {!! $lowongan->judul !!}</h4>
                    <h6>{!! $lowongan->deskripsi !!}</h6>
                    <ul class="contact-list">
                    <li>
                            <h6><i class="fa fa-clock-o fa-fw" aria-hidden="true"></i>Nama Perusahaan</h6>
                            <h6>{!! $lowongan->perusahaan->nama !!}</h6>
                        </li>
                        <li>
                            <h6><i class="fa fa-clock-o fa-fw" aria-hidden="true"></i>Posisi</h6>
                            <h6>{!! $lowongan->posisi !!}</h6>
                        </li>
                        <li>
                            <h6><i class="fa fa-clock-o fa-fw" aria-hidden="true"></i>Jumlah</h6>
                            <h6>{!! $lowongan->jumlah !!}</h6>
                        </li>
                        <li>
                            <h6><i class="fa fa-clock-o fa-fw" aria-hidden="true"></i>Tanggal Mulai</h6>
                            <h6>{!! $lowongan->tglMulai !!}</h6>
                        </li>
                        
                        <li>
                            <h6><i class="fa fa-clock-o fa-fw" aria-hidden="true"></i>Tanggal Selesai</h6>
                            <h6>{!! $lowongan->tglBerakhir !!}</h6>
                        </li>
                    </ul>
                </div>
            </div>  
        </div>
    </div>
</div>
@stop