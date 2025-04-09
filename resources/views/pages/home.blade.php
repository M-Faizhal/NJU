@extends('layouts.app')

@section('title', 'Nusa Jaya Unggul')

@section('content')
    <!-- Masthead-->
    <header class="masthead">
        <div class="container">
            <div class="masthead-subheading">Welcome To Our Studio!</div>
            <div class="masthead-heading text-uppercase">It's Nice To Meet You</div>
            <a class="btn btn-primary btn-xl text-uppercase" href="#services">Tell Me More</a>
        </div>
    </header>
    <!-- About Us-->
    <section class="page-section" id="about">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">About Us</h2>
            <h3 class="section-subheading text-muted"></h3>
        </div>
        <div class="row align-items-center">
            <div class="col-md-6 mb-4 mb-md-0">
                <img src="/assets/home-service.jpg" alt="Jasa Persewaan Alat Berat" class="img-fluid rounded shadow-sm">
            </div>
            <div class="col-md-6">
                <p class="text-muted" style="text-align: justify;">
                    PT Nusa Jaya Unggul menyediakan layanan persewaan alat berat untuk menunjang berbagai kebutuhan proyek konstruksi, pertambangan, dan pengolahan lahan. Seluruh unit kami dalam kondisi prima, terawat secara berkala, dan siap digunakan untuk mendukung efisiensi operasional di lapangan.
                </p>
            </div>
        </div>
    </div>
</section>
    <!-- Why Us-->
    <section class="page-section" id="why-us">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-heading text-uppercase">WHY US?</h2>
        </div>
        <div class="row text-center">
            <div class="col-md-4 mb-4">
                <img src="/assets/terkangkau.jpg" alt="Terjangkau" class="img-fluid rounded shadow-sm mb-3">
                <h4 class="fw-bold">TERJANGKAU</h4>
            </div>
            <div class="col-md-4 mb-4">
                <img src="/assets/profesional.jpg" alt="Profesional" class="img-fluid rounded shadow-sm mb-3">
                <h4 class="fw-bold">PROFESIONAL</h4>
            </div>
            <div class="col-md-4 mb-4">
                <img src="/assets/terpercaya.jpg" alt="Terpercaya" class="img-fluid rounded shadow-sm mb-3">
                <h4 class="fw-bold">TERPERCAYA</h4>
            </div>
        </div>
        
        <ul class="timeline">
            <!-- ...existing code for about timeline... -->
        </ul>
    </div>
</section>
<!-- Our Services -->
    <section class="page-section" id="service">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-heading text-uppercase">Our Services</h2>
        </div>
        <div class="row text-center">
            <div class="col-md-4 mb-4">
                <img src="/assets/land-clearing.jpg" alt="" class="img-fluid rounded shadow-sm mb-3">
                <h4 class="fw-bold">LAND CLEARING</h4>
                <p>Land clearing sebagai tahap awal dalam pekerjaan konstruksi dan pengembangan lahan</p>
            </div>
            <div class="col-md-4 mb-4">
                <img src="/assets/tanah.jpg" alt="" class="img-fluid rounded shadow-sm mb-3">
                <h4 class="fw-bold">PEMERATAAN TANAH</h4>
                <p>Pemerataan tanah (cut and fill) untuk memenuhi kebutuhan proyek pembangunan yang membutuhkan kestabilan dan elevasi lahan yang presisi.</p>
            </div>
            <div class="col-md-4 mb-4">
                <img src="/assets/sewa.jpg" alt="" class="img-fluid rounded shadow-sm mb-3">
                <h4 class="fw-bold">SEWA ALAT BERAT</h4>
                <p>Layanan persewaan alat berat untuk menunjang berbagai kebutuhan proyek konstruksi, pertambangan, dan pengolahan lahan</p>
            </div>
        </div>
        
        <ul class="timeline">
            <!-- ...existing code for about timeline... -->
        </ul>
    </div>
</section>

    <!-- Contact-->
    <section class="page-section" id="contact">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Contact Us</h2>
                <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
            </div>
            <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                <!-- ...existing code for contact form... -->
                 <div class="row">
        <!-- Kolom Kiri: Contact Form -->
        <div class="col-md-6">
            <h2 class="text-light">Contact Us</h2>
            <form action="#" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan nama Anda">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email Anda">
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">No. Telepon</label>
                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Masukkan nomor telepon Anda">
                </div>
                <button type="submit" class="btn btn-primary">Kirim</button>
            </form>
        </div>
        <div class="col-md-6">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31693.08306609354!2d106.827153!3d-6.175110!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3e8c9a8e3e1%3A0x1c9d378af0ec56b9!2sMonas!5e0!3m2!1sid!2sid!4v1612312312312!5m2!1sid!2sid" 
                width="100%" 
                height="400" 
                frameborder="0" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy">
            </iframe>
        </div>
            </form>
        </div>
    </section>
@endsection
