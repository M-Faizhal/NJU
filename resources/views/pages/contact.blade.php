@extends('layouts.app')

@section('title', 'Nusa Jaya Unggul')

@section('masthead')
    <header class="masthead" style="background: url('{{ asset('assets/img/mastheadcontact.jpg') }}') center/cover no-repeat;">
        <div class="overlay"></div>
        <div class="container">
            <div class="masthead-heading text-uppercase">Mari Bangun Proyek Impianmu Bersama Kami</div>
        </div>
    </header>
@endsection

@section('content')
    <div class="container py-5">
        <div class="row">
            <!-- Kolom Kiri: Contact Form -->
            <div class="col-md-6">
                <h2>Contact Us</h2>
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

            <!-- Kolom Kanan: Google Maps -->
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
        </div>
    </div>
@endsection
