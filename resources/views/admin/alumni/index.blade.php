@extends('layouts.backend.app',[
    'title' => 'Manage Alumni',
    'contentTitle' => 'Manage Alumni',
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
                <a href="{{ route('admin.alumni.create') }}" class="btn btn-primary btn-sm">Isi Data</a>
            </div>
            <div class="card-body table-responsive">
                <table id="dataTable1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>NPM</th>
                  <th>NAMA</th>
                  <th>JURUSAN</th>
                  <th>NO HP</th>
                  <th>PHOTO</th>
                  <th>AKSI</th>
                </tr>
                </thead>
                <tbody>
                @php 
                    $no=1;
                @endphp

                @foreach($alumni as $alu)
                <tr>
                  <td>{{ $no++ }}</td>
                  <td>{{ $alu->npm }}</td>
                  <td>{{ $alu->user->name }}</td>
                  <td>{{ $alu->prodi->nama }}</td>
                  <td>{{ $alu->nomor_hp }}</td>
                  <td><a href="/" class="brand-link"><img src="{{ asset('uploads/img/alumni/'.$alu->photo) }}" class="brand-image img-circle elevation-3" style="opacity: .8"></a></td>
                  
                  
                  <td>
                    @if(auth()->user()->id == $alu->user_id)
                    <div class="row ml-2">
                        <a href="{{ route('admin.alumni.edit',$alu->id) }}" class="btn btn-primary btn-sm"><i class="fas fa-edit fa-fw"></i></a>
                        
                        <form method="POST" action="{{ route('admin.alumni.destroy',$alu->id) }}">
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