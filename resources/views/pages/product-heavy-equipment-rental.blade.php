@extends('layouts.app')

@section('title', 'Sewa Alat Berat')

@section('masthead')
<header class="masthead" style="background: url('{{ asset('assets/img/heavy-equipment-banner.jpg') }}') center/cover no-repeat;">
    <div class="overlay"></div>
    <div class="container">
        <div class="masthead-heading text-uppercase">Sewa Alat Berat</div>
    </div>
</header>
@endsection

@section('content')
<section class="page-section py-5">
    <div class="container">
        <h2 class="fw-bold mb-4">Sewa Alat Berat</h2>
        <p>
            PT Nusa Jaya Unggul menyediakan layanan persewaan alat berat untuk menunjang kebutuhan proyek konstruksi, pertambangan, dan pengolahan lahan.
        </p>
        <ul>
            <li><strong>Bulldozer:</strong> Untuk pendorongan material, pembukaan akses, dan land clearing.</li>
            <li><strong>Excavator:</strong> Untuk penggalian, pengangkutan, pemindahan material, hingga loading.</li>
            <li><strong>Dump Truck:</strong> Untuk pengangkutan tanah, pasir, batu dengan kapasitas besar.</li>
        </ul>
        <p>
            Tersedia opsi sewa harian, mingguan, hingga bulanan. Didukung pengemudi berlisensi dan dukungan teknis selama proyek berjalan.
        </p>
    </div>
</section>
@endsection
