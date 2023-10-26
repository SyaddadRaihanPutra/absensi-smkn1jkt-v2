@extends('dashboard.layout')

@section('content')
        <div class="mt-3 row">
            <div class="mt-5 rounded col-sm-6">
                <div class="text-center card">
                    <div class="p-4 rounded shadow-lg card-body">
                        <div>
                            <i class="top-0 mb-2 ri-group-line summary-icon bg-primary position-absolute start-50 translate-middle"></i>
                        </div>
                        <h5 class="mt-5 card-title">DATA SISWA</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="{{ route('siswa.index') }}" class="btn btn-outline-primary">Lihat selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="mt-5 col-sm-6">
                <div class="text-center card">
                    <div class="p-4 rounded shadow-lg card-body">
                        <div>
                            <i class="top-0 mb-2 ri-user-line summary-icon bg-primary position-absolute start-50 translate-middle"></i>
                        </div>
                        <h5 class="mt-5 card-title">REKAP PRESENSI</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-outline-primary">Lihat selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-5 row g-3">
            <div>Akses Cepat</div>
            <div class="col-12 col-sm-6 col-lg-3">
                <a href="#" class="p-3 bg-white rounded shadow-sm text-dark text-decoration-none d-flex justify-content-between summary-primary">
                    <div>
                        <i class="mb-2 ri-file-chart-line summary-icon bg-primary"></i>
                        <div>Ekspor Absensi Kelas-XII</div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-sm-6 col-lg-3">
                <a href="#" class="p-3 bg-white rounded shadow-sm text-dark text-decoration-none d-flex justify-content-between summary-indigo">
                    <div>
                        <i class="mb-2 ri-file-chart-line summary-icon bg-indigo"></i>
                        <div>Ekspor Absensi Kelas-XI</div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-sm-6 col-lg-3">
                <a href="#" class="p-3 bg-white rounded shadow-sm text-dark text-decoration-none d-flex justify-content-between summary-success">
                    <div>
                        <i class="mb-2 ri-file-chart-line summary-icon bg-success"></i>
                        <div>Ekspor Absensi Kelas-X</div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-sm-6 col-lg-3">
                <a href="#" class="p-3 bg-white rounded shadow-sm text-dark text-decoration-none d-flex justify-content-between summary-danger">
                    <div>
                        <i class="mb-2 ri-equalizer-line summary-icon bg-danger"></i>
                        <div>Pengaturan</div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</main>
@endsection