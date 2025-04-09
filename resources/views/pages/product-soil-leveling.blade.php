@extends('layouts.app')

@section('title', 'Pemerataan Tanah')

@section('masthead')
<header class="masthead" style="background: url('{{ asset('assets/img/soil-leveling-banner.jpg') }}') center/cover no-repeat;">
    <div class="overlay"></div>
    <div class="container">
        <div class="masthead-heading text-uppercase">Jasa Pemerataan Tanah</div>
    </div>
</header>
@endsection

@section('content')
<section class="page-section py-5">
    <div class="container">
        <h2 class="fw-bold mb-4">Jasa Pemerataan Tanah</h2>
        <p>
            PT Nusa Jaya Unggul menyediakan layanan pemerataan tanah (cut and fill) untuk kebutuhan pembangunan yang membutuhkan elevasi lahan yang presisi.
        </p>
        <p>
            Didukung operator berpengalaman dan alat berat seperti dozer, motor grader, dan vibratory roller, kami menjamin hasil sesuai spesifikasi teknis proyek.
        </p>
    </div>
</section>
@endsection
