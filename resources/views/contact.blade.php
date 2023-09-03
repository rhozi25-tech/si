@extends('layouts/main')
@section('isi')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .sub-judul:after {
            content: '';
            display: block;
            position: relative;
            width: 15%;
            border: 2px solid #f6921f;
            margin-top: 8px;
        }
    </style>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <p style="font-size: 19pt" class="sub-judul mt-5 mb-3">Hubungi Kami</p>
            </div>
        </div>

        <div class="row">
            <!-- WhatsApp Card -->
            <div class="col-md-3 mb-4 mt-2">
                <div class="card ">
                    <div class="card-body text-center  kontak" style="transition: all ease 0.4s;">
                        <i class="fa fa-whatsapp fa-5x mb-3"></i>
                        <h5 class="card-title">WhatsApp</h5>
                        <p class="card-text">087772254404 (Admin)</p>
                        <a href="https://wa.me/6287772254404" class="btn btn-primary">Hubungi Kami</a>
                    </div>
                </div>
            </div>

            <!-- YouTube Card -->
            <div class="col-md-3 mb-4 mt-2">
                <div class="card ">
                    <div class="card-body text-center  kontak" style="transition: all ease 0.4s;">
                        <i class="fa fa-youtube fa-5x mb-3"></i>
                        <h5 class="card-title">YouTube</h5>
                        <p class="card-text">@GSI-Channel</p>
                        <a href="https://www.youtube.com/@GSI-Channel" class="btn btn-danger">Subscribe</a>
                    </div>
                </div>
            </div>

            <!-- Facebook Card -->
            <div class="col-md-3 mb-4 mt-2">
                <div class="card ">
                    <div class="card-body text-center  kontak" style="transition: all ease 0.4s;">
                        <i class="fa fa-facebook fa-5x mb-3"></i>
                        <h5 class="card-title">Facebook</h5>
                        <p class="card-text">@quadrantboardingschool</p>
                        <a href="#" class="btn btn-primary">Like</a>
                    </div>
                </div>
            </div>

            <!-- Instagram Card -->
            <div class="col-md-3 mb-4 mt-2">
                <div class="card ">
                    <div class="card-body text-center  kontak" style="transition: all ease 0.4s;">
                        <i class="fa fa-instagram fa-5x mb-3"></i>
                        <h5 class="card-title">Instagram</h5>
                        <p class="card-text">@fahimquranplus</p>
                        <a href="#" class="btn btn-danger">Follow</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
