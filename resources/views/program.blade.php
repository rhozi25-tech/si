@extends('layouts/main')

@section('isi')
    <style>
        @media (max-width: 575.98px) {
            .badge-pelatihan {
                padding: 0;
            }


        }
    </style>
    <h2 class="mt-5 mb-5 text-center">Program GSI Academy</h2>

    <div class="event mb-5">
        <div class="container">
            <div class="row">
                @foreach ($posts as $post)
                    <div class="col-sm-4">
                        <div class="card shadow-sm program_event mb-3" style="max-height: 700px; transition: all ease 0.4s">
                            <img src="{{ $post['gambar'] }}" width="100" height="150" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p style="font-size: 14pt;" class="card-title"><a
                                        style="-webkit-line-clamp: 2; display: -webkit-box; -webkit-box-orient: vertical; overflow: hidden;"
                                        href="/program/{{ $post->slug }}">{{ $post->title }}</a></p>
                                <hr>
                                <div class="d-flex bd-highlight mb-3">
                                    <div class="mr-auto bd-highlight font-weight-bold">Mulai Rp. 199.000</div>
                                    <div
                                        class="bd-highlight font-weight-bold badge badge-primary ml-1  pt-1 badge-pelatihan">
                                        Pelatihan</div>
                                    <div
                                        class="bd-highlight font-weight-bold badge badge-success ml-1 pt-1 badge-pelatihan">
                                        Buku</div>
                                    <div
                                        class="bd-highlight font-weight-bold badge badge-warning ml-1 pt-1 badge-pelatihan">
                                        Video</div>
                                    <div class="bd-highlight font-weight-bold badge badge-danger ml-1 pt-1 badge-pelatihan">
                                        Slide</div>
                                </div>
                                <hr>
                                <a href="/program/{{ $post->slug }}" class="btn btn-outline-primary d-block btn-sm">
                                    Lihat Detail
                                    <i class="fas fa-arrow-right ml-2"></i>
                                </a>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-sm-12 text-center">
                    <a href="https://gsiacademy.id" target="_blank" class="btn btn-primary mt-3 mb-3 rounded"
                        style="padding: 5px 20px">
                        Lihat Lainnya
                        <i class="fas fa-arrow-right ml-2"></i>
                    </a>

                </div>
            </div>
        </div>
    </div>
@endsection
