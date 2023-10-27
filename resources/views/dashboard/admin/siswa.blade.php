@extends('dashboard.layout')

@section('content')
    <!-- Your specific content for the 'content' section goes here -->
    <div class="container pt-5">
        <div class="page-header">
            <h1 class="page-title ">Data Siswa</h1>
            <div>

            </div>
        </div>
        <div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xl-8">
        <table class="table table-striped" id="siswa-table">
            <thead>
                <tr>
                    <th>NIS</th>
                    <th>NAMA_LENGKAP</th>
                    <th>KELAS</th>
                    <th>JURUSAN</th>
                </tr>
            </thead>
        </table>
   </div>
   <div class="col-lg-12 col-xl-4 col-sm-12 col-md-12">
        
    <div class="card">
        <div class="card-header">
            <div class="card-title">Tambah Siswa</div>
        </div>
        <div class="card-body py-2">
            <div class="table-responsive">
            <form method="POST" action="http://203.77.246.219:8015/siswa">
<input type="hidden" name="_token" value="2Fullu8jUEXm3kaEV1RCpyD8pXENGJM4A2N1ZFiq">        <label for="nama">Nama:</label>
<input type="text" name="nama" id="nama" class="form-control" required="">

<label for="nip">NISN:</label>
<input type="text" name="nip" id="nip" class="form-control" required="">
<label for="nip">KELAS:</label>
<input type="text" name="nip" id="nip" class="form-control" required="">
<label for="nip">JURUSAN:</label>
<input type="text" name="nip" id="nip" class="form-control" required="">

</select>
<button type="submit" class="btn btn-primary mt-5"  disabled>Add Siswa</button>
</form>
            </div>
        </div>
        <div class="card-footer">
            
        </div>
    </div>
                            </div>
    </div>
</div>







    <script>
        $(document).ready(function() {
            $('#siswa-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{ route("siswa.data") }}',
                columns: [
                    { data: 'NIS', name: 'NIS' },
                    { data: 'NAMA_LENGKAP', name: 'NAMA_LENGKAP' },
                    { data: 'KELAS', name: 'KELAS' },
                    { data: 'JURUSAN', name: 'JURUSAN' },
                ]
            });
        });
    </script>
  


    </div>
     @endsection