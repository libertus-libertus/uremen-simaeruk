@extends('layouts.admin.dashboard')
@section('title', 'Dashboard Admin')
@section('header', 'Dashboard')
@section('subheader', 'Ringkasan Statistik')

@section('content')
<section class="content">
    <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-aqua"><i class="fa fa-users"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Total Pengguna</span>
                    <span class="info-box-number">1,234</span>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-red"><i class="fa fa-newspaper"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Postingan Aktif</span>
                    <span class="info-box-number">87</span>
                </div>
            </div>
        </div>
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-green"><i class="fa fa-project-diagram"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Projek Selesai</span>
                    <span class="info-box-number">45</span>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-yellow"><i class="fa fa-wallet"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Pendapatan (Bulan Ini)</span>
                    <span class="info-box-number">Rp 12.5 Jt</span>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Postingan Terbaru</h3>
                    <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>
                <div class="box-body">
                    <div class="table-responsive">
                        <table class="table no-margin">
                            <thead>
                                <tr>
                                    <th>ID Postingan</th>
                                    <th>Judul</th>
                                    <th>Penulis</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href="posts.html">P-12345</a></td>
                                    <td>Mengenal Teknologi Terbaru</td>
                                    <td>John Doe</td>
                                    <td><span class="label label-success">Aktif</span></td>
                                </tr>
                                <tr>
                                    <td><a href="posts.html">P-12346</a></td>
                                    <td>Panduan Lengkap SEO</td>
                                    <td>Jane Smith</td>
                                    <td><span class="label label-warning">Draft</span></td>
                                </tr>
                                <tr>
                                    <td><a href="posts.html">P-12347</a></td>
                                    <td>Desain UI/UX untuk Pemula</td>
                                    <td>Admin</td>
                                    <td><span class="label label-success">Aktif</span></td>
                                </tr>
                                <tr>
                                    <td><a href="posts.html">P-12348</a></td>
                                    <td>Tips Membangun Portofolio</td>
                                    <td>Budi Santoso</td>
                                    <td><span class="label label-info">Menunggu Review</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="box-footer clearfix">
                    <a href="javascript::;" class="btn btn-sm btn-info btn-flat pull-left">Tambah Postingan Baru</a>
                    <a href="posts.html" class="btn btn-sm btn-default btn-flat pull-right">Lihat Semua Postingan</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Projek Terbaru</h3>
                    <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>
                <div class="box-body">
                    <ul class="products-list product-list-in-box">
                        <li class="item">
                            <div class="product-img">
                                <img src="{{ asset('assets/images/icons/tailwind.svg') }}" alt="Product Image">
                            </div>
                            <div class="product-info">
                                <a href="javascript::;" class="product-title">Website E-commerce <span
                                        class="label label-warning pull-right">Dalam Proses</span></a>
                                <span class="product-description">
                                    Pengembangan platform toko online.
                                </span>
                            </div>
                        </li>
                        <li class="item">
                            <div class="product-img">
                                <img src="{{ asset('assets/images/icons/vue.svg') }}" alt="Product Image">
                            </div>
                            <div class="product-info">
                                <a href="javascript::;" class="product-title">Aplikasi Mobile Android <span
                                        class="label label-success pull-right">Selesai</span></a>
                                <span class="product-description">
                                    Pembuatan aplikasi mobile untuk manajemen tugas.
                                </span>
                            </div>
                        </li>
                        <li class="item">
                            <div class="product-img">
                                <img src="{{ asset('assets/images/icons/laravel.svg') }}" alt="Product Image">
                            </div>
                            <div class="product-info">
                                <a href="javascript::;" class="product-title">Sistem Informasi Akademik <span
                                        class="label label-info pull-right">Ulasan</span></a>
                                <span class="product-description">
                                    Membangun sistem untuk data mahasiswa dan nilai.
                                </span>
                            </div>
                        </li>
                        <li class="item">
                            <div class="product-img">
                                <img src="{{ asset('assets/images/icons/next-js.svg') }}" alt="Product Image">
                            </div>
                            <div class="product-info">
                                <a href="javascript::;" class="product-title">Sistem Pemasaran Digital <span
                                        class="label label-danger pull-right">Tertunda</span></a>
                                <span class="product-description">
                                    Integrasi alat pemasaran otomatis.
                                </span>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="box-footer text-center">
                    <a href="projects.html" class="uppercase">Lihat Semua Projek</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection