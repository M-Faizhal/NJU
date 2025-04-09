@extends('layouts.app')

@section('title', 'Produk Jasa')

@section('masthead')
    <header class="masthead" style="background: url('{{ asset('assets/img/mastheadproduk.jpg') }}') center/cover no-repeat;">
        <div class="overlay"></div>
        <div class="container">
            <div class="masthead-subheading">Berbagai layanan yang kami tawarkan untuk mendukung kebutuhan proyek Anda</div>
            <div class="masthead-heading text-uppercase">Produk Jasa</div>
            <a class="btn btn-primary btn-xl text-uppercase" href="#services">Tell Me More</a>
        </div>
    </header>
@endsection

@section('content')
    <!-- Produk List -->
    <section class="page-section py-5">
        <div class="container">

            <!-- Item: Land Clearing -->
            <div class="row align-items-start mb-5">
                <div class="col-md-4">
                    <img src="{{ asset('/assets/img/land-clearing.jpg') }}" alt="Land Clearing" class="img-fluid rounded shadow">
                </div>
                <div class="col-md-8">
                    <h4 class="fw-bold mb-2">Jasa Land Clearing</h4>
                    <p class="text-muted">
                        Kami menyediakan layanan land clearing sebagai tahap awal dalam pekerjaan konstruksi dan pengembangan lahan.
                        Proses ini mencakup pembersihan vegetasi, pohon, semak belukar, serta material organik lainnya yang dapat menghambat proses pembangunan.
                        Dengan menggunakan unit alat berat seperti bulldozer, excavator, dan grubber, kami memastikan setiap lahan siap untuk tahap pengerjaan selanjutnya.
                        Cocok untuk proyek infrastruktur, kawasan industri, hingga pertanian skala besar. PT Nusa Jaya Unggul menjamin proses kerja efisien, aman, dan sesuai standar.
                    </p>
                </div>
            </div>

            <hr>

            <!-- Item: Pemerataan Tanah -->
            <div class="row align-items-start mb-5">
                <div class="col-md-4">
                    <img src="{{ asset('/assets/img/tanah.jpg') }}" alt="Pemerataan Tanah" class="img-fluid rounded shadow">
                </div>
                <div class="col-md-8">
                    <h4 class="fw-bold mb-2">Jasa Pemerataan Tanah</h4>
                    <p class="text-muted">
                        PT Nusa Jaya Unggul menyediakan layanan pemerataan tanah (cut and fill) untuk kebutuhan pembangunan yang membutuhkan elevasi lahan yang presisi.
                        Didukung operator berpengalaman dan alat berat seperti dozer, motor grader, dan vibratory roller, kami menjamin hasil sesuai spesifikasi teknis proyek.
                        Ideal untuk pengembangan infrastruktur jalan, kawasan industri, dan gedung.
                    </p>
                </div>
            </div>

            <hr>

            <!-- Item: Sewa Alat Berat -->
            <div class="row align-items-start mb-5">
                <div class="col-md-4">
                    <img src="{{ asset('/assets/img/sewa.jpg') }}" alt="Sewa Alat Berat" class="img-fluid rounded shadow">
                </div>
                <div class="col-md-8">
                    <h4 class="fw-bold mb-2">Sewa Alat Berat</h4>
                    <p class="text-muted">
                        PT Nusa Jaya Unggul menyediakan layanan persewaan alat berat untuk menunjang kebutuhan proyek konstruksi, pertambangan, dan pengolahan lahan.
                        Semua unit dalam kondisi prima, terawat, dan siap pakai. Pilihan unit meliputi:
                    </p>
                    <ul>
                        <li><strong>Bulldozer:</strong> Untuk pendorongan material, pembukaan akses, dan land clearing.</li>
                        <li><strong>Excavator:</strong> Untuk penggalian, pengangkutan, pemindahan material, hingga loading.</li>
                        <li><strong>Dump Truck:</strong> Untuk pengangkutan tanah, pasir, batu dengan kapasitas besar.</li>
                    </ul>
                    <p class="text-muted">
                        Tersedia opsi sewa harian, mingguan, hingga bulanan. Didukung pengemudi berlisensi dan dukungan teknis selama proyek berjalan.
                    </p>
                </div>
            </div>

        </div>
    </section>
@endsection
