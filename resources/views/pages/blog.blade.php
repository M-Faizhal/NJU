@extends('layouts.app')

@section('title', 'Nusa Jaya Unggul')

@section('masthead')
    <header class="masthead" style="background: url('{{ asset('assets/img/mastheadblog.jpg') }}') center/cover no-repeat;">
        <div class="overlay"></div>
        <div class="container">
            <div class="masthead-heading text-uppercase">Bangun Pengetahuan, Bangun Masa Depan</div>
        </div>
    </header>
@endsection

@section('content')

<style>
    .img-card-blog {
        width: 100%;
        height: 180px;
        object-fit: cover;
        border-top-left-radius: 8px;
        border-top-right-radius: 8px;
    }

    .card.blog {
        transition: 0.2s;
        cursor: pointer;
    }

    .card.blog:hover {
        transform: scale(1.02);
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
    }

    .headline-left {
        height: 350px;
        overflow: hidden;
        border-radius: 10px;
        position: relative;
    }

    .headline-right-small {
        height: 160px;
        overflow: hidden;
        border-radius: 10px;
        position: relative;
    }

    .headline-text, .headline-text-sm {
        position: absolute;
        bottom: 0;
        background: linear-gradient(to top, rgba(0,0,0,0.6), transparent);
        width: 100%;
        color: white;
        padding: 10px;
    }

    .headline-left img,
    .headline-right-small img {
        object-fit: cover;
        width: 100%;
        height: 100%;
    }
</style>

<!-- Blog Section -->
<div class="container my-5">

    <!-- Headline -->
    <div class="row mb-4">
        <div class="col-md-8">
            <a href="{{ url('/isiblog') }}">
                <div class="headline-left">
                    <img src="{{ asset('assets/img/blog1.jpg') }}">
                    <div class="headline-text">
                        <h4>Dosen Unismuh Makassar Kupas Modus Korupsi Jasa Konstruksi dalam Forum Nasional</h4>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4 d-flex flex-column gap-3">
            <a href="{{ url('/isiblog') }}">
                <div class="headline-right-small">
                    <img src="{{ asset('assets/img/blog2.jpeg') }}">
                    <div class="headline-text-sm">
                        <p class="mb-0">KPK Tahan Dua Tersangka Korupsi Dana PEN di Situbondo</p>
                    </div>
                </div>
            </a>
            <a href="{{ url('/isiblog') }}">
                <div class="headline-right-small">
                    <img src="{{ asset('assets/img/blog3.jpeg') }}">
                    <div class="headline-text-sm">
                        <p class="mb-0">Kasus Korupsi Jerat Gubernur Kalsel Sahbirin Noor</p>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <!-- Blog Cards -->
    <div class="row">
        @php
            $blogs = [
                ['img' => 'blog4.jpg', 'title' => 'Kejagung Periksa 3 Dirut Perusahaan Konstruksi Terkait Korupsi Tol MBZ'],
                ['img' => 'blog5.jpg', 'title' => 'KPK Tahan Tersangka Korupsi Proyek di Pemerintah Kota Semarang'],
                ['img' => 'blog6.jpg', 'title' => 'Bos Perumahan Banjarmasin Korupsi Rp100 Triliun'],
                ['img' => 'blog7.jpg', 'title' => 'OTT KPK Dugaan Korupsi Proyek di Kalimantan Selatan'],
                ['img' => 'blog8.jpg', 'title' => 'Proyek Flyover SKA Riau Rugikan Negara Rp60 Miliar'],
                ['img' => 'blog9.jpeg', 'title' => 'Korupsi Dirut Taspen Rugikan Rp200 Miliar'],
            ];
        @endphp

        @foreach ($blogs as $blog)
            <div class="col-md-4 my-3">
                <a href="{{ url('/isiblog') }}" class="text-decoration-none text-dark">
                    <div class="card blog shadow-sm">
                        <img src="{{ asset('assets/img/' . $blog['img']) }}" class="img-card-blog">
                        <div class="p-3">
                            <h5>{{ $blog['title'] }}</h5>
                            <p>Ini adalah deskripsi singkat artikel.</p>
                            <span>Selengkapnya &rarr;</span>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</div>

@endsection
