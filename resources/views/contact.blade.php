@include('body.header')

@include('body.navbar')

        <!-- Home Start -->
        <section class="bg-half-170 bg-primary d-table w-100" style="background: url('{{asset('assest/images/AboutBG1.webp')}}') center">
            <div class="container">
                <div class="row mt-5 justify-content-center">
                    <div class="col-12">
                        <div class="heading-title text-center">
                            <h2 class="text-dark title-dark title mb-3">Contact us</h2>
                            <p class="para-desc mx-auto text-dark-50">Get in touch with our business development manager or schedule a <br> <b>FREE demo of our Products</b>.</p>
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

        <!-- Start -->
        <section class="section pb-0">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="features-absolute bg-white p-4 p-md-5 rounded shadow">
                            <div class="custom-form">
                                <form method="POST" action="{{ route('submit.contact') }}" id="contactForm" class="contact-form">
                                    @csrf
                                    <input type="hidden" name="recaptcha_response" id="recaptchaResponseContact">
                                    @if(session('error'))
                                        <div class="alert alert-danger">
                                            {{ session('error') }}
                                        </div>
                                    @endif
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Your Name <span class="text-danger">*</span></label>
                                                <input name="name" type="text" class="form-control" placeholder="Name :" required>
                                            </div>
                                        </div>
    
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Your Email <span class="text-danger">*</span></label>
                                                <input name="email" type="email" class="form-control" placeholder="Email :" required>
                                            </div> 
                                        </div><!--end col-->
    
                                        <div class="col-6">
                                            <div class="mb-3">
                                                <label class="form-label">WhatsApp<span class="text-danger">*</span></label>
                                                <input name="phone" class="form-control" placeholder="whatsApp #" required>
                                            </div>
                                        </div><!--end col-->

                                        <div class="col-6">
                                            <div class="mb-3">
                                                <label class="form-label">Interested Product<span class="text-danger">*</span></label>
                                                <select name="product" class="form-control" required>
                                                    <option value="">Select Option</option>
                                                    <option value="CRM">AI Driven CRM</option>
                                                    <option value="API Integration">API Integration</option>
                                                    <option value="Lead Automation">Lead Automation</option>
                                                    <option value="AI Integration">AI Integrations</option>

                                                </select>
                                            </div>
                                        </div><!--end col-->
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="d-grid">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </form>
                            </div><!--end custom-form-->
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->

            <div class="container mt-100 mt-60">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="card border-0 text-center features feature-primary">
                            <div class="icon text-center mx-auto rounded-md">
                                <h3 class="mb-0"><i class="uil uil-phone"></i></h3>
                            </div>

                            <div class="card-body p-0 mt-4">
                                <h5 class="title fw-bold">Phone</h5>
                                <p class="text-muted">Drop us a message on our WhatsApp</p>
                                <a href="https://wa.me/+923010441111?text=Hello, I am interested in your services!" target="_blank" class="link">+92 301 044 1111</a><br>
                                <a href="https://wa.me/+212624763999?text=Hello, I am interested in your services!" target="_blank" class="link">+212 624 763 999</a>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-4 col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <div class="card border-0 text-center features feature-primary">
                            <div class="icon text-center mx-auto rounded-md">
                                <h3 class="mb-0"><i class="uil uil-envelope"></i></h3>
                            </div>

                            <div class="card-body p-0 mt-4">
                                <h5 class="title fw-bold">Email</h5>
                                <p class="text-muted">send your detailed inquiry over our email.</p>
                                <a href="mailto:info@arazit.com" class="link">info@arazit.com</a>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-4 col-md-6 mt-4 mt-lg-0 pt-2 pt-lg-0">
                        <div class="card border-0 text-center features feature-primary">
                            <div class="icon text-center mx-auto rounded-md">
                                <h3 class="mb-0"><i class="uil uil-map-marker"></i></h3>
                            </div>

                            <div class="card-body p-0 mt-4">
                                <h5 class="title fw-bold">Location</h5>
                                <p class="text-muted">54 Al Qadir Heights, Garden Town. <br> Lahore, Pakistan.</p>
                                <p class="text-muted">Bureau 1, 7ème étage , 174 Bd Mohamed Zerktouni, Casablanca, Morocco </p>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->

            <div class="container-fluid mt-100 mt-60">
                <div class="row">
                    <div class="col-12 p-0">
                        <div class="card map border-0">
                            <div class="card-body p-0">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1661.8583084079442!2d-7.63252296115381!3d33.58670632774855!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda7d2961c16c0c7%3A0x9f4e917e3ccb9afb!2sCdvi!5e0!3m2!1sen!2s!4v1726434698711!5m2!1sen!2s" style="border:0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End -->

 





@include('body.footer')

<script>
document.addEventListener('DOMContentLoaded', function () {
    const contactForm = document.querySelector('.contact-form');
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            grecaptcha.ready(function() {
                grecaptcha.execute('{{ env('RECAPTCHA_SITE_KEY') }}', {action: 'contact_submission'})
                    .then(function(token) {
                        document.getElementById('recaptchaResponseContact').value = token;
                        contactForm.submit();
                    });
            });
        });
    }
});
</script>