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
                    <th>ACTION</th>
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
            <form method="POST" action="{{ route('siswa.store') }}">
                @csrf
                    <label for="nama">Nama:</label>
<input type="text" name="NAMA" id="NAMA" class="form-control" required="">

<label for="nip">NISN:</label>
<input type="text" name="NIS" id="NIS" class="form-control" required="">
<label for="nip">KELAS:</label>
<input type="text" name="KELAS" id="KELAS" class="form-control" required="">
<label for="nip">JURUSAN:</label>
<input type="text" name="JURUSAN" id="JURUSAN" class="form-control" required="">

</select>
<button type="submit" class="btn btn-primary mt-5" >Add Siswa</button>

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
                    { data: 'action', name: 'action', orderable: false, searchable: false },

                ]
            });
        });
    </script>
<script>
    $(document).on('click', '.btn-delete', function () {
        var id = $(this).data('id');
        if (confirm("Apakah Anda yakin ingin menghapus siswa ini?")) {
            $.ajax({
                type: "DELETE",
                url: "{{ route('siswa.destroy', '') }}/" + id,
                data: {
                    "_token": "{{ csrf_token() }}",
                },
                success: function (data) {
                    alert("Siswa berhasil dihapus.");
                    $('#siswa-table').DataTable().ajax.reload();
                },
                error: function (data) {
                    console.log('Error:', data);
                }
            });
        }
    });
</script>
  


    </div>
     @endsection