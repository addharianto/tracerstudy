@extends('layouts.backend.app',[
    'title' => 'Manage Alumni',
    'contentTitle' => 'Manage Alumni',
])
@push('css')
<!-- DataTables -->
<link rel="stylesheet" href="{{ asset('templates/backend/css/') }}/style.css">
<link rel="stylesheet" href="{{ asset('templates/backend/AdminLTE-3.0.1') }}/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
@endpush
@section('content')
<div class="row">
  <div class="col">
    <table class="table table-hover">
      <thead>
        <tr>
          <th>
            <div class="stepper">
              <a class="step--1 step-active">Langkah 1</a>
              <a class="step--2">Langkah 2</a>
              <a class="step--3">Langkah 3</a>
              <a class="step--4">Selesai</a>
            </div>
          </th>
      </tr>
      </thead>
    </table>
  </div>
  <div class="card-body table-responsive">
  <form class="form form-active"method="POST" enctype="multipart/form-data" action="{{ route('alumni.alumni.store') }}">
      
      <div class="form--header-container">
        <h1 class="form--header-title">
          DATA PRIBADI
          <a href="{{ route('alumni.alumni.create') }}" class="btn btn-success btn-sm">Tambah Data</a>
            
        </h1>
<!-- 
        <p class="form--header-text">
          Tell us more about your company.
        </p> -->
      </div>
      @csrf
            <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="kode_pt">Kode Perguruan Tinggi</label>
                    <input required="" type="" name="kode_pt" placeholder="Kode Perguruan Tinggi" class="form-control"> 
                </div>
                     <div id="form-group">
                        <label for="npm">NPM</label>
                        <input required="" name="npm" placeholder="Nomor Pokok Mahasiswa" id="tpm" class="form-control">
                    </div>
                    <div id="form-group">
                        <label for="tahun_lulus">Tahun Lulus</label>
                        <input required="" name="tahun_lulus" placeholder="Tahun Lulus" id="tahun_lulus" class="form-control">
                    </div>
                <!-- </div>            
                
                 <div class="col-lg-6"> -->
                    <div id="form-group">
                        <label for="nomor_hp">Nomor HP</label>
                        <input required="" name="nomor_hp" placeholder="Nomor HP" id="nomor_hp" class="form-control">
                    </div>
                    
                </div>
                <div class="col-lg-6">
                <div class="form-group">
                        <label>Prodi</label>
                        <select required="" class="form-control" name="kategori_artikel_id">
                        <option selected="" disabled="">- PILIH PRODI -</option>
                        @foreach($prodi as $pro)
                            <option value="{{ $pro->id }}">{{ $pro->nama }}</option>
                        @endforeach
                        </select>
                        
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Photo</label>
                        <input type="file" name="file" class="dropify form-control" data-height="190" data-allowed-file-extensions="png jpg gif jpeg svg webp jfif" required>
                    </div>
                </div>
            </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">UPDATE</button>
        </div>
    </form>
    <form class="form">
      <div class="form--header-container">
        <h1 class="form--header-title">
          Company Info
        </h1>

        <p class="form--header-text">
          Tell us more about your company.
        </p>
      </div>

      <input type="text" placeholder="Company Name" />
      <input type="text" placeholder="Job title" />
      <input type="text" placeholder="Location" />
      <button class="form__btn" id="btn-2-prev">Previous</button>
      <button class="form__btn" id="btn-2-next">Next</button>
    </form>
    <form class="form">
      <div class="form--header-container">
        <h1 class="form--header-title">
          Social account
        </h1>

        <p class="form--header-text">
          Tell us more about your social account.
        </p>
      </div>
      <input type="text" placeholder="Linkedin" />
      <input type="text" placeholder="Twitter" />
      <input type="text" placeholder="Github" />
      <button class="form__btn" id="btn-3">Submit</button>
    </form>
    <div class="form--message"></div>
  </div>
</div>

@stop
@push('js')
<!-- DataTables -->
<script src="{{ asset('templates/backend/js/') }}/style.js"></script>
<script src="{{ asset('templates/backend/AdminLTE-3.0.1') }}/plugins/datatables/jquery.dataTables.js"></script>
<script src="{{ asset('templates/backend/AdminLTE-3.0.1') }}/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<script>
  $(function () {
    $("#dataTable1").DataTable();
  });
</script>

@endpush