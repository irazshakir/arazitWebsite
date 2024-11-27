@include('body.header')

@include('body.navbar')

    <!-- Home Start -->
    <section class="bg-half-170 d-table w-100" style="background: url('{{asset('assest/images/AboutBG2.webp')}}')">
            
        <div class="container">
            <div class="row mt-5 justify-content-center">
                <div class="col-12">
                    <div class="heading-title text-center">
                        <h2 class="text-dark title title-dark mb-3">Our Innovations</h2>
                        
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
    <div class="position-relative">
        <div class="shape overflow-hidden text-white">
            <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>
    <!-- Home End -->

    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 filters-group-wrap">
                    <div class="filters-group">
                        <ul class="container-filter categories-filter list-inline mb-0 filter-options text-center">
                            <li class="list-inline-item position-relative categories categories-name text-dark rounded px-1 mx-1 active" data-group="all">All</li>
                            <li class="list-inline-item position-relative categories categories-name text-dark rounded px-1 mx-1" data-group="CRM">CRM</li>
                            <li class="list-inline-item position-relative categories categories-name text-dark rounded px-1 mx-1" data-group="API Integrations">API Integrations</li> 
                            <li class="list-inline-item position-relative categories categories-name text-dark rounded px-1 mx-1" data-group="Automations">Automations</li>
                        </ul>
                    </div>
                </div><!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div id="grid" class="row row-cols-lg-2 row-cols-md-2">
                        <div 
                            class="col-12 mt-4 pt-2 picture-item" data-groups='["CRM"]'>
                            <div class="card work-container work-primary work-border position-relative overflow-hidden shadow rounded border-0">
                                <div class="card-body p-0">
                                    <a href="javascript:void(0)" class="lightbox">
                                        <img src="{{url('assest/images/crm-hajj.webp')}}" class="img-fluid" alt="work-image">
                                    </a>
                                    <div class="overlay-work bg-dark"></div>
                                    <div class="content p-3">
                                        <h6 class="tag text-muted mb-1">AI Driven CRM</h6>
                                        <a href="javascript:void(0)" class="title text-dark d-block h5 mb-0">Hajj & Umrah Companies</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end col-->

                        <div class="col-12 mt-4 pt-2 picture-item" data-groups='["CRM"]'>
                            <div
                                class="card work-container work-primary work-border position-relative overflow-hidden shadow rounded border-0">
                                <div class="card-body p-0">
                                    <a href="{{url('assest/images/work/2.jpg')}}" class="lightbox">
                                        <img src="{{url('assest/images/crm-ecommerce.webp')}}" class="img-fluid" alt="work-image">
                                    </a>
                                    <div class="overlay-work bg-dark"></div>
                                    <div class="content p-3">
                                        <h6 class="tag text-muted mb-1">AI Driven CRM</h6>
                                        <a href="javascript:void(0)" class="title text-dark d-block h5 mb-0">Ecommerce Companies</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end col-->

                        <div class="col-12 mt-4 pt-2 picture-item" data-groups='["CRM"]'>
                            <div
                                class="card work-container work-primary work-border position-relative overflow-hidden shadow rounded border-0">
                                <div class="card-body p-0">
                                    <a href="javascript:void(0)" class="lightbox">
                                        <img src="{{url('assest/images/crm-travel.webp')}}" class="img-fluid" alt="work-image">
                                    </a>
                                    <div class="overlay-work bg-dark"></div>
                                    <div class="content p-3">
                                        <h6 class="tag text-muted mb-1">AI Driven CRM</h6>
                                        <a href="javascript:void(0)" class="title text-dark d-block h5 mb-0">Travel & Tours Companies</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end col-->

                        <div class="col-12 mt-4 pt-2 picture-item" data-groups='["API Integrations"]'>
                            <div
                                class="card work-container work-primary work-border position-relative overflow-hidden shadow rounded border-0">
                                <div class="card-body p-0">
                                    <a href="images/work/4.jpg" class="lightbox">
                                        <img src="{{url('assest/images/apiIntegration-payments.webp')}}" class="img-fluid" alt="work-image">
                                    </a>
                                    <div class="overlay-work bg-dark"></div>
                                    <div class="content p-3">
                                        <h6 class="tag text-muted mb-1">Payment Gateways</h6>
                                        <a href="javascript:void(0)" class="title text-dark d-block h5 mb-0">All Types of Payment APIs</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end col-->

                        <div class="col-12 mt-4 pt-2 picture-item" data-groups='["API Integrations"]'>
                            <div
                                class="card work-container work-primary work-border position-relative overflow-hidden shadow rounded border-0">
                                <div class="card-body p-0">
                                    <a href="images/work/5.jpg" class="lightbox">
                                        <img src="{{url('assest/images/apiIntegration-social.webp')}}" class="img-fluid" alt="work-image">
                                    </a>
                                    <div class="overlay-work bg-dark"></div>
                                    <div class="content p-3">
                                        <h6 class="tag text-muted mb-1">Social Platforms</h6>
                                        <a href="javascript:void(0)" class="title text-dark d-block h5 mb-0">Lead Automations</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end col-->

                        <div class="col-12 mt-4 pt-2 picture-item" data-groups='["API Integrations"]'>
                            <div
                                class="card work-container work-primary work-border position-relative overflow-hidden shadow rounded border-0">
                                <div class="card-body p-0">
                                    <a href="images/work/6.jpg" class="lightbox">
                                        <img src="{{url('assest/images/apiIntegration-ecommerce.webp')}}" class="img-fluid" alt="work-image">
                                    </a>
                                    <div class="overlay-work bg-dark"></div>
                                    <div class="content p-3">
                                        <h6 class="tag text-muted mb-1">Ecommerce Platforms</h6>
                                        <a href="javascript:void(0)" class="title text-dark d-block h5 mb-0">Connect Platforms with CRM </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end col-->

                        <div class="col-12 mt-4 pt-2 picture-item" data-groups='["Automations"]'>
                            <div
                                class="card work-container work-primary work-border position-relative overflow-hidden shadow rounded border-0">
                                <div class="card-body p-0">
                                    <a href="images/work/6.jpg" class="lightbox">
                                        <img src="{{url('assest/images/dialogflow.webp')}}" class="img-fluid" alt="work-image">
                                    </a>
                                    <div class="overlay-work bg-dark"></div>
                                    <div class="content p-3">
                                        <h6 class="tag text-muted mb-1">Dialogflow Automations</h6>
                                        <a href="javascript:void(0)" class="title text-dark d-block h5 mb-0">Automations </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end col-->

                        <div class="col-12 mt-4 pt-2 picture-item" data-groups='["Automations"]'>
                            <div
                                class="card work-container work-primary work-border position-relative overflow-hidden shadow rounded border-0">
                                <div class="card-body p-0">
                                    <a href="images/work/6.jpg" class="lightbox">
                                        <img src="{{url('assest/images/openAI.webp')}}" class="img-fluid" alt="work-image">
                                    </a>
                                    <div class="overlay-work bg-dark"></div>
                                    <div class="content p-3">
                                        <h6 class="tag text-muted mb-1">Open AI Automations</h6>
                                        <a href="javascript:void(0)" class="title text-dark d-block h5 mb-0">Automations </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end col-->

                    </div>
                    <!--end row-->
                    
                </div>
            </div>
        </div>
        <!--end container-->
    </section>
    <!--end section-->

    <div class="container-fluid px-0"></div>
    <div class="mt-100 py-5 bg-footer">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-7">
                    <div class="section-title">
                        <div class="d-flex">
                            <i class="uil uil-mobile-android display-4 text-white title-dark"></i>
                            <div class="flex-1 ms-md-4 ms-3">
                                <h4 class="fw-bold text-light title-dark mb-1">Contact our Sales Team !</h4>
                                <p class="text-white-50 mb-0">If you have inquiry about the product feel free to contact.</p>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-md-5 mt-4 mt-sm-0">
                    <div class="text-md-end ms-5 ms-sm-0">
                        <a href="javascript:void(0)" class="btn btn-primary me-2 me-lg-2 me-md-0 my-2"><i class="uil uil-whatsapp"></i> Whats App</a>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </div><!--end div-->
</div><!--end container-->
<!-- End -->




@include('body.footer')