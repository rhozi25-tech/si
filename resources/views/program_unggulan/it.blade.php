@extends('../layouts/main')

@section('isi')
    <style>
        .card-title {
            text-align: center;
        }

        .nav-tabs-vertical {
            border: 1px solid #ddd;
        }

        .nav-tabs-vertical .nav-item {
            margin-bottom: 0;
        }

        .nav-tabs-vertical .nav-link {
            border: none;
            border-radius: 0;
            padding: 10px 15px;
            color: #333;
            background-color: #f8f9fa;
        }

        .nav-tabs-vertical .nav-link.active {
            background-color: #007bff;
            color: #fff;
        }
    </style>
    <div class="container">
        <div class="row">
            <div class="col text-center my-4">
                <p class="h3 font-weight-bold">Bidang Teknologi Informasi</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3 mb-3">
                <div class="nav flex-column nav-tabs nav-tabs-vertical" id="myVerticalTabs" role="tablist"
                    aria-orientation="vertical">
                    <a class="nav-link active" id="tab1-tab" data-toggle="tab" href="#tab1" role="tab"
                        aria-controls="tab1" aria-selected="true">1. CFB 1</a>
                    <a class="nav-link" id="tab2-tab" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2"
                        aria-selected="false">2. CFB 2</a>
                    <a class="nav-link" id="tab3-tab" data-toggle="tab" href="#tab3" role="tab" aria-controls="tab3"
                        aria-selected="false">3. Talent Mapping</a>
                    <a class="nav-link" id="tab4-tab" data-toggle="tab" href="#tab4" role="tab" aria-controls="tab4"
                        aria-selected="false">4. Kelas Reguler</a>
                    <a class="nav-link" id="tab5-tab" data-toggle="tab" href="#tab5" role="tab" aria-controls="tab5"
                        aria-selected="false">5. kelas Penjurusan</a>
                    <a class="nav-link" id="tab6-tab" data-toggle="tab" href="#tab6" role="tab" aria-controls="tab6"
                        aria-selected="false">6. Kelas Akselerasi</a>
                    <a class="nav-link" id="tab7-tab" data-toggle="tab" href="#tab7" role="tab" aria-controls="tab7"
                        aria-selected="false">7. ODT</a>
                    <a class="nav-link" id="tab8-tab" data-toggle="tab" href="#tab8" role="tab" aria-controls="tab8"
                        aria-selected="false">8. Khwarizmi</a>
                    <a class="nav-link" id="tab9-tab" data-toggle="tab" href="#tab9" role="tab" aria-controls="tab9"
                        aria-selected="false">9. Sejarah Technopreneurship</a>
                    <a class="nav-link" id="tab10-tab" data-toggle="tab" href="#tab10" role="tab" aria-controls="tab10"
                        aria-selected="false">10. Starupology</a>
                </div>
            </div>
            <div class="col-md-9">
                <div class="tab-content" id="myVerticalTabsContent">
                    <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
                        <!-- Content for tab 1 -->
                        <div class="card mb-3">
                            <div class="card-header">
                                <p class="card-title h5">1. CFB 1</p>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                    <img src="it/unggulan.jpg" class="card-img-top img-fluid" alt="...">

                                </div>
                                <div class="col-sm-9 d-flex justify-content-center align-items-center">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit quidem reiciendis ipsa
                                        nihil perspiciatis dolor quam adipisci odit odio eius ipsum est, facere modi ratione
                                        placeat sit quisquam voluptates ullam?</p>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Repeat the above structure for other tabs -->
                    <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
                        <!-- Content for tab 1 -->
                        <div class="card mb-3">
                            <div class="card-header">
                                <p class="card-title h5">2. CFB 2</p>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                    <img src="it/unggulan.jpg" class="card-img-top img-fluid" alt="...">

                                </div>
                                <div class="col-sm-9 d-flex justify-content-center align-items-center">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit quidem reiciendis ipsa
                                        nihil perspiciatis dolor quam adipisci odit odio eius ipsum est, facere modi ratione
                                        placeat sit quisquam voluptates ullam?</p>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab3-tab">
                        <!-- Content for tab 1 -->
                        <div class="card mb-3">
                            <div class="card-header">
                                <p class="card-title h5">3. Talent Mapping</p>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                    <img src="it/unggulan.jpg" class="card-img-top img-fluid" alt="...">

                                </div>
                                <div class="col-sm-9 d-flex justify-content-center align-items-center">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit quidem reiciendis ipsa
                                        nihil perspiciatis dolor quam adipisci odit odio eius ipsum est, facere modi ratione
                                        placeat sit quisquam voluptates ullam?</p>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="tab4" role="tabpanel" aria-labelledby="tab4-tab">
                        <!-- Content for tab 1 -->
                        <div class="card mb-3">
                            <div class="card-header">
                                <p class="card-title h5">4. Kelas Reguler</p>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                    <img src="it/unggulan.jpg" class="card-img-top img-fluid" alt="...">

                                </div>
                                <div class="col-sm-9 d-flex justify-content-center align-items-center">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit quidem reiciendis ipsa
                                        nihil perspiciatis dolor quam adipisci odit odio eius ipsum est, facere modi ratione
                                        placeat sit quisquam voluptates ullam?</p>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="tab5" role="tabpanel" aria-labelledby="tab5-tab">
                        <!-- Content for tab 1 -->
                        <div class="card mb-3">
                            <div class="card-header">
                                <p class="card-title h5">5. Kelas Penjurusan (Programming / DKV)</p>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                    <img src="it/unggulan.jpg" class="card-img-top img-fluid" alt="...">

                                </div>
                                <div class="col-sm-9 d-flex justify-content-center align-items-center">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit quidem reiciendis ipsa
                                        nihil perspiciatis dolor quam adipisci odit odio eius ipsum est, facere modi ratione
                                        placeat sit quisquam voluptates ullam?</p>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="tab6" role="tabpanel" aria-labelledby="tab6-tab">
                        <!-- Content for tab 1 -->
                        <div class="card mb-3">
                            <div class="card-header">
                                <p class="card-title h5">6. Kelas Akselerasi Programming / DKV</p>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                    <img src="it/unggulan.jpg" class="card-img-top img-fluid" alt="...">

                                </div>
                                <div class="col-sm-9 d-flex justify-content-center align-items-center">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit quidem reiciendis ipsa
                                        nihil perspiciatis dolor quam adipisci odit odio eius ipsum est, facere modi ratione
                                        placeat sit quisquam voluptates ullam?</p>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="tab7" role="tabpanel" aria-labelledby="tab7-tab">
                        <!-- Content for tab 1 -->
                        <div class="card mb-3">
                            <div class="card-header">
                                <p class="card-title h5">7. ODT</p>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                    <img src="it/unggulan.jpg" class="card-img-top img-fluid" alt="...">

                                </div>
                                <div class="col-sm-9 d-flex justify-content-center align-items-center">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit quidem reiciendis ipsa
                                        nihil perspiciatis dolor quam adipisci odit odio eius ipsum est, facere modi ratione
                                        placeat sit quisquam voluptates ullam?</p>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="tab8" role="tabpanel" aria-labelledby="tab8-tab">
                        <!-- Content for tab 1 -->
                        <div class="card mb-3">
                            <div class="card-header">
                                <p class="card-title h5">8. Khwarizmi</p>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                    <img src="it/unggulan.jpg" class="card-img-top img-fluid" alt="...">

                                </div>
                                <div class="col-sm-9 d-flex justify-content-center align-items-center">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit quidem reiciendis ipsa
                                        nihil perspiciatis dolor quam adipisci odit odio eius ipsum est, facere modi ratione
                                        placeat sit quisquam voluptates ullam?</p>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="tab9" role="tabpanel" aria-labelledby="tab9-tab">
                        <!-- Content for tab 1 -->
                        <div class="card mb-3">
                            <div class="card-header">
                                <p class="card-title h5">9. Level 2 Sejarah Technopreneurship</p>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                    <img src="it/unggulan.jpg" class="card-img-top img-fluid" alt="...">

                                </div>
                                <div class="col-sm-9 d-flex justify-content-center align-items-center">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit quidem reiciendis ipsa
                                        nihil perspiciatis dolor quam adipisci odit odio eius ipsum est, facere modi ratione
                                        placeat sit quisquam voluptates ullam?</p>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="tab10" role="tabpanel" aria-labelledby="tab10-tab">
                        <!-- Content for tab 1 -->
                        <div class="card mb-3">
                            <div class="card-header">
                                <p class="card-title h5">10. Level 2 Startupology</p>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                    <img src="it/unggulan.jpg" class="card-img-top img-fluid" alt="...">

                                </div>
                                <div class="col-sm-9 d-flex justify-content-center align-items-center">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit quidem reiciendis ipsa
                                        nihil perspiciatis dolor quam adipisci odit odio eius ipsum est, facere modi ratione
                                        placeat sit quisquam voluptates ullam?</p>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Repeat for other tabs -->
                </div>
            </div>
        </div>
    </div>
@endsection
