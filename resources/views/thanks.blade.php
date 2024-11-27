@include('body.header')

@include('body.navbar')

<div class="container mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-8 text-center">
            <h2>Thank You!</h2>
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <p>We have received your demo request and will get back to you shortly.</p>
            <a href="{{ route('welcome') }}" class="btn btn-primary mt-3">Back to Home</a>
        </div>
    </div>
</div>

@include('body.footer')