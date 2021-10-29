@extends('layouts.backend.app',[
    'title' => 'Manage Lowongan',
    'contentTitle' => 'Manage Lowongan',
])
@push('css')
<!-- DataTables -->
<link rel="stylesheet" href="{{ asset('templates/backend/AdminLTE-3.0.1') }}/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
@endpush
@section('content')
<x-alert></x-alert>
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('admin.lowongan.create') }}" class="btn btn-primary btn-sm">Tambah Data</a>
            </div>
            <div class="card-body table-responsive">
                <table id="dataTable1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Judul</th>
                  <th>Posisi</th>
                  <th>Jumlah</th>
                  <th>Deskripsi</th>
                  <th>Perusahaan</th>
                  <th>Tanggal Mulai</th>
                  <th>Tanggal Berakhir</th>
                  <th>Slug</th>
                  <th>Author</th>
                  <th>Tgl Upload</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @php 
                    $no=1;
                @endphp

                @foreach($lowongan as $pn)
                <tr>
                  <td>{{ $no++ }}</td>
                  <td>{{ $pn->judul }}</td>
                  <td>{{ $pn->posisi }}</td>
                  <td>{{ $pn->jumlah }}</td>
                  <td>{{ $pn->deskripsi }}</td>
                  <td>{{ $pn->perusahaan->nama }}</td>
                  <td>{{ $pn->tglMulai }}</td>
                  <td>{{ $pn->tglBerakhir }}</td>
                  <td>{{ $pn->slug }}</td>
                  <td>{{ $pn->user->name }}</td>
                  <td>{{ $pn->tgl }}</td>
                  
                  <td>
                    @if(auth()->user()->id == $pn->user_id)
                    <div class="row ml-2">
                        <a href="{{ route('admin.lowongan.edit',$pn->id) }}" class="btn btn-primary btn-sm"><i class="fas fa-edit fa-fw"></i></a>
                        
                        <form method="POST" action="{{ route('admin.lowongan.destroy',$pn->id) }}">
                            @csrf
                            @method('DELETE')
                            <button onclick="return confirm('Yakin hapus ?')" type="submit" class="btn btn-danger btn-sm ml-2"><i class="fas fa-trash fa-fw"></i></button>
                        </form>
                    </div>
                    @else
                    <a href="javasript:void(0)" class="btn btn-danger btn-sm">
                    <i class="fas fa-ban"></i> No Action Available
                    </a>
                    @endif
                  </td>
                </tr>
                @endforeach
                </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
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