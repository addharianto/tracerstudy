@extends('layouts.frontend.app',[
	'title' => 'Detail Agenda',
])
@section('content')
<div class="clever-catagory blog-details bg-img d-flex align-items-center justify-content-center p-3 height-400" style="background-image: url({{ asset('img/bg/agenda.png') }});">
    <div class="blog-details-headline">
        <h3>{{ $agenda->judul }}</h3>
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
                    <h4>Agenda {!! $agenda->judul !!}</h4>
                    {!! $agenda->deskripsi !!}
                    <ul class="contact-list">
                        <li>
                            <h6><i class="fa fa-clock-o fa-fw" aria-hidden="true"></i>Tanggal Mulai</h6>
                            <h6>{!! $agenda->tgl_mulai !!} Jam {!! $agenda->jam_mulai !!} WITA</h6>
                        </li>
                        
                        <li>
                            <h6><i class="fa fa-clock-o fa-fw" aria-hidden="true"></i>Tanggal Selesai</h6>
                            <h6>{!! $agenda->tgl_selesai !!} Jam {!! $agenda->jam_selesai !!} WITA</h6>
                        </li>
                    </ul>
                </div>
            </div>  
        </div>
    </div>
</div>
@stop