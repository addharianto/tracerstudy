@extends('layouts.backend.app',[
    'title' => 'Lowongan',
    'contentTitle' => 'Lowongan',
])
@push('css')
<!-- DataTables -->
<link rel="stylesheet" href="{{ asset('templates/backend/AdminLTE-3.0.1') }}/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
@endpush
@section('content')

@if($lowongan->count() > 0)
<section class="upcoming-events section-padding-100-0 mb-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading">
                    <h3>List Lowongan</h3>
                </div>
            </div>
        </div>

        <div class="row">
            @foreach($lowongan as $pn)
            <div class="col-12 col-md-3 col-lg-3">
                <div class="single-upcoming-events mb-50 wow fadeInUp" data-wow-delay="250ms">
                    <!-- Events Thumb -->
                    <div class="events-thumb">
                        <img src="{{ asset('img/bg') }}/lowongan.png" alt="">
                        <h6 class="event-date">{{ $pn->tgl }} | BY : {{ $pn->user->name }}</h6>
                        <h4 class="event-title">{{ $pn->judul }}</h4>
                        <h4 class="event-title">{{ $pn->perusahaan->nama }}</h4>                        
                        <!-- <h4 class="event-title">{{ $pn->posisi }}</h4>
                        <h4 class="event-title">{{ $pn->jumlah }}</h4> -->
                    </div>
                    <div>
                        <a href="{{ route('lowongan.show',$pn->slug) }}" class="btn btn-primary col-lg">Detail</a>
                    </div>
                </div>
            </div>
            @endforeach

            <div class="pagination justify-content-center">
                {{ $lowongan->links() }}
            </div>
        </div>
    </div>
</section>
@endif

@stop
@push('js')
<!-- DataTables -->
<script src="{{ asset('templates/backend/AdminLTE-3.0.1') }}/plugins/datatables/jquery.dataTables.js"></script>
<script src="{{ asset('templates/backend/AdminLTE-3.0.1') }}/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<script>
  $(function () {
    $("#dataTable1").DataTable();
  });
</script>
@endpush