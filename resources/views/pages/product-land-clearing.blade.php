@extends('layouts.app')

@section('title', 'Land Clearing')

@section('masthead')
<header class="masthead" style="background: url('{{ asset('assets/img/land-clearing-banner.jpg') }}') center/cover no-repeat;">
    <div class="overlay"></div>
    <div class="container">
        <div class="masthead-heading text-uppercase">Jasa Land Clearing</div>
    </div>
</header>
@endsection

@section('content')
<section class="page-section py-5">
    <div class="container">
        <h2 class="fw-bold mb-4">Jasa Land Clearing</h2>
        <p>
            Kami menyediakan layanan land clearing sebagai tahap awal dalam pekerjaan konstruksi dan pengembangan lahan.
            Proses ini mencakup pembersihan vegetasi, pohon, semak belukar, serta material organik lainnya yang dapat menghambat proses pembangunan.
        </p>
        <p>
            Dengan menggunakan unit alat berat seperti bulldozer, excavator, dan grubber, kami memastikan setiap lahan siap untuk tahap pengerjaan selanjutnya.
            Cocok untuk proyek infrastruktur, kawasan industri, hingga pertanian skala besar.
        </p>
    </div>
</section>
@endsection
