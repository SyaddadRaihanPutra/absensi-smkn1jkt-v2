@extends('dashboard.layout')

@section('content')
    <!-- Your specific content for the 'content' section goes here -->
    <div class="container">

        <table class="table" id="siswa-table">
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