@extends('layouts/main')
@section('isi')
    <style>
        :root {
            --gambar-url: url("{{ $post['gambar'] }}");
        }

        .bg-overlay {
            background: linear-gradient(rgba(9, 21, 78, 0.8), rgba(12, 23, 85, 0.8)), var(--gambar-url);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
            color: #fff;
            height: 300px;
            box-sizing: border-box;
            padding-top: 70px;
            margin-bottom: 15px;
            border-bottom-left-radius: 15px;
            border-bottom-right-radius: 15px;
        }

        .sub-judul:after {
            content: '';
            display: block;
            position: relative;
            width: 15%;
            border: 2px solid #f6921f;
            margin-top: 8px;
        }


        @media (max-width: 575.98px) {
            .bg-overlay {
                padding-top: 30px;
            }

        }

        .table-responsive {
            border: none;
        }
    </style>
    <div class="container bg-overlay">
        <div class="row">
            <div class="col-sm-12 banner-post">
                <p class="badge badge-primary">Event</p>
                <p class="badge badge-success">Pelatihan</p>
                <p class="text-white text-left" style="font-size: 18pt; font-weight: bold">{{ $post['title'] }}</p>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="row mb-4">
            <div class="col-sm-8 shadow-sm">
                <div class="konten p-3">
                    <p class="mb-2 sub-judul" style="font-size: 16pt; font-weight:bold">Deskripsi</p>
                    <p class="text-justify" style="font-size: 13pt">{!! nl2br($post['isi']) !!}</p>

                    <table class="table table-bordered table-responsive text-nowrap">
                        <thead>
                            <tr class="text-center table-success">
                                <th scope="col" style="width: 25%">Pelatihan</th>
                                <th scope="col" style="width: 25%">Buku</th>
                                <th scope="col" style="width: 25%">Video Pembelajaran</th>
                                <th scope="col" style="width: 25%">Slide Pembelajaran</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row text-center"><button type="button" style="width: 100%"
                                        class="btn btn-primary d-block btn-sm" data-toggle="modal"
                                        data-target="#daftarModal">
                                        Daftar
                                    </button></th>
                                <td><a href="/program/{{ $post['slug'] }}"
                                        class="btn btn-secondary d-block btn-sm disabled">Belum Tersedia</a></td>
                                <td><a href="/program/{{ $post['slug'] }}"
                                        class="btn btn-secondary d-block btn-sm disabled">Belum Tersedia</a></td>
                                <td><a href="/program/{{ $post['slug'] }}"
                                        class="btn btn-secondary d-block btn-sm disabled">Belum Tersedia</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>

            <div class="col-sm-4">
                <p class="mb-2 mt-2 sub-judul" style="font-size: 16pt; font-weight:bold">Gallery Pelatihan </p>

                <div class="row mb-4">
                    <div class="col-sm-6">
                        <div class="card mt-2">
                            <img src="../IT.jpg" class="card-img-top" alt="...">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card mt-2">
                            <img src="../IT.jpg" class="card-img-top" alt="...">
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="card mt-2">
                            <img src="../IT.jpg" class="card-img-top" alt="...">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card mt-2">
                            <img src="../IT.jpg" class="card-img-top" alt="...">
                        </div>
                    </div>


                </div>

                <div class="daftar p-4"
                    style="box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;">

                    <p style="font-size: 13pt">Ada pertanyaan ?</p>
                    <a href="" class="btn btn-success btn-lg d-block"><i class="fas fa-phone"></i> Hubungi Kami</a>





                </div>


            </div>
        </div>
    </div>

    {{-- MODAL  --}}
    <!-- Modal -->
    <div class="modal fade" id="daftarModal" tabindex="-1" role="dialog" aria-labelledby="daftarModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="daftarModalLabel">Informasi Pelatihan Online</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <p class="mb-2 sub-judul" style="font-size: 16pt; font-weight:bold">Persyaratan Peserta</p>
                                <p class="mb-2">
                                <ol style="font-size: 13pt" class="ml-3">
                                    @foreach (json_decode($post['persyaratan']) as $item)
                                        <li>{{ $item }}</li>
                                    @endforeach
                                </ol>

                                </p>



                                <p class="mb-2 sub-judul" style="font-size: 16pt; font-weight:bold">Benefit Peserta</p>
                                <p class="mb-2">
                                <ol style="font-size: 13pt" class="ml-3">
                                    @foreach (json_decode($post['benefit']) as $item)
                                        <li>{{ $item }}</li>
                                    @endforeach
                                </ol>
                                </p>
                            </div>

                            <div class="col-sm-6">
                                <p class="mb-2 sub-judul" style="font-size: 16pt; font-weight:bold">Pelaksanaan Program
                                </p>
                                <p class="mb-2">
                                <ol style="font-size: 13pt" class="ml-3">
                                    @foreach (json_decode($post['pelaksanaan']) as $item)
                                        <li>{!! $item !!}</li>
                                    @endforeach
                                </ol>
                                </p>

                                <p class="mb-2 sub-judul" style="font-size: 16pt; font-weight:bold">Biaya Program</p>
                                <table class="table table-bordered table-responsive text-nowrap">
                                    <thead>
                                        <tr class="text-center table-success">
                                            <th scope="col" style="width: 50%">Paket Personal</th>
                                            <th scope="col" style="width: 50%">Paket Keluarga</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td scope="row"><b>Rp. 119.000 </b> / 1 Orang</td>
                                            <td><b>Rp. 329.000 </b> / 3 Orang</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <a href="http://event.gsiacademy.id" target="_blank" class="btn btn-primary">Daftar Sekarang</a>
                </div>
            </div>
        </div>
    </div>


    {{-- END MODAL --}}
@endsection
