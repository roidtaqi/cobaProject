@extends('template')

@section ('header')
    @include ('header')
@stop

@section('content')
    <!-- banner part start-->
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="banner_slider owl-carousel">
                        <div class="single_banner_slider">
                            <div class="row">
                                <div class="col-lg-5 col-md-8">
                                    <div class="banner_text">
                                        <div class="banner_text_iner">
                                            <h1>Desain Berkelas Dengan Bahan Terbaik</h1>
                                           <!--  <a href="#" class="btn_2">Beli Sekarang</a> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="banner_img d-none d-lg-block">
                                    <img src="img/banner_img.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="single_banner_slider">
                            <div class="row">
                                <div class="col-lg-5 col-md-8">
                                    <div class="banner_text">
                                        <div class="banner_text_iner">
                                            <h1>Kami menyediakan furnitur terbaik untuk hunian Anda</h1>
                                            <!-- <a href="#" class="btn_2">buy now</a> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="banner_img d-none d-lg-block">
                                    <img src="img/offer_img.png" alt="">
                                </div>
                            </div>
                        </div>
                        <!-- <div class="single_banner_slider">
                            <div class="row">
                                <div class="col-lg-5 col-md-8">
                                    <div class="banner_text">
                                        <div class="banner_text_iner">
                                            <h1>Wood & Cloth
                                                Sofa</h1>
                                            <p>Incididunt ut labore et dolore magna aliqua quis ipsum
                                                suspendisse ultrices gravida. Risus commodo viverra</p>
                                            <a href="#" class="btn_2">buy now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="banner_img d-none d-lg-block">
                                    <img src="img/banner_img.png" alt="">
                                </div>
                            </div>
                        </div> -->
                        <!-- <div class="single_banner_slider">
                            <div class="row">
                                <div class="col-lg-5 col-md-8">
                                    <div class="banner_text">
                                        <div class="banner_text_iner">
                                            <h1>Cloth $ Wood Sofa</h1>
                                            <p>Incididunt ut labore et dolore magna aliqua quis ipsum
                                                suspendisse ultrices gravida. Risus commodo viverra</p>
                                            <a href="#" class="btn_2">buy now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="banner_img d-none d-lg-block">
                                    <img src="img/banner_img.png" alt="">
                                </div>
                            </div>
                        </div> -->
                    </div>
                   <!--  <div class="slider-counter"></div> -->
                </div>
            </div>
        </div>
    </section>
    <!-- banner part start-->

    <!-- feature_part start-->
    <section class="feature_part padding_top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 mb-4">
                    <div class="section_title text-center">
                        <h2>Katalog Unggulan</h2>
                    </div>
                </div>
            </div>   
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-2">
                    <div class="single_feature_post_text">
                        <!-- <p>Premium Quality</p> -->
                        <h3>Ruang Makan</h3>
                         <img src="img/category/dining-icon.png">
                        <a href="ruang-makan" class="feature_btn">Eksplor<i class="fas fa-play"></i></a>
                       <!--  <img src="img/feature/feature_1.png" alt=""> -->
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="single_feature_post_text">
                        <!-- <p>Premium Quality</p> -->
                        <h3>Kamar Tidur</h3>
                        <img src="img/category/bedroom-icon.jpg">
                        <a href="kamar-tidur" class="feature_btn">Eksplor <i class="fas fa-play"></i></a>
                        <!-- <img src="img/feature/feature_2.png" alt=""> -->
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="single_feature_post_text">
                       <!--  <p>Premium Quality</p> -->
                        <h3>Ruang Tamu</h3>
                        <img src="img/category/living-icon.png">
                        <a href="ruang-tamu" class="feature_btn">Eksplor <i class="fas fa-play"></i></a>
                       <!--  <img src="img/feature/feature_3.png" alt=""> -->
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="single_feature_post_text">
                       <!--  <p>Premium Quality</p> -->
                        <h3>Ruang Kerja</h3>
                         <img src="img/category/workspace-icon.png">
                        <a href="ruang-kerja" class="feature_btn">Eksplor <i class="fas fa-play"></i></a>
                       <!--  <img src="img/feature/feature_4.png" alt=""> -->
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="single_feature_post_text">
                       <!--  <p>Premium Quality</p> -->
                        <h3>Dekorasi</h3>
                         <img src="img/category/decor-icon.png">
                        <a href="dekorasi" class="feature_btn">Eksplor<i class="fas fa-play"></i></a>
                       <!--  <img src="img/feature/feature_4.png" alt=""> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- upcoming_event part start-->

 <!-- product_list part start-->
    <section class="product_list best_seller section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="section_tittle text-center">
                        <h2>Produk Terlaris</h2>
                    </div>
                </div>
            </div>
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-12">
                    <div class="best_product_slider owl-carousel">
                    @if(!empty($barang))
				    <?php foreach ($barang as $ba): ?>
                        <div class="single_product_item">
                        <img src="{{ url('uploads') }}/{{ $ba->gambar }}"/>
                                <div class="single_product_text">
                                    <h4>{{ $ba->namabarang }}</h4>
                                    <h3>{{ $ba->harga }}</h3>
                                    <a href="{{ url('detail') }}/{{ $ba->namabarang }}" class="add_cart">+ Tambah Ke Keranjang</a>
                            </div>
                        </div>
                        <?php endforeach ?>
		            @else
			        <p>Tidak ada data Barang</p>
	                @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product_list part end-->
    <!-- awesome_shop start-->
   <!--  <section class="our_offer section_padding">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6 col-md-6">
                    <div class="offer_img">
                        <img src="img/offer_img.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="offer_text">
                        <h2>Weekly Sale on
                            60% Off All Products</h2>
                        <div class="date_countdown">
                            <div id="timer">
                                <div id="days" class="date"></div>
                                <div id="hours" class="date"></div>
                                <div id="minutes" class="date"></div>
                                <div id="seconds" class="date"></div>
                            </div>
                        </div>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="enter email address"
                                aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <a href="#" class="input-group-text btn_2" id="basic-addon2">book now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- awesome_shop part start-->

    <!-- product_list part start-->
    <section class="product_list best_seller section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="section_tittle text-center">
                        <h2>Rekomendasi Kami</h2>
                    </div>
                </div>
            </div>
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-12">
                    <div class="best_product_slider owl-carousel">
                        <div class="single_product_item">
                            <img src="img/product/kursi-kerja.jpg" alt="">
                                <div class="single_product_text">
                                    <h4>Kursi Kerja</h4>
                                    <h3>IDR 300.000</h3>
                                    <a href="#" class="add_cart">+ Tambah Ke Keranjang</i></a>
                            </div>
                        </div>
                        <div class="single_product_item">
                            <img src="img/product/meja-kerja.jpg" alt="">
                                <div class="single_product_text">
                                    <h4>Meja Kerja</h4>
                                    <h3>IDR 500.000</h3>
                                    <a href="#" class="add_cart">+ Tambah Ke Keranjang</i></a>
                            </div>
                        </div>
                        <div class="single_product_item">
                             <img src="img/product/penyimpanan.jpg" alt="">
                                <div class="single_product_text">
                                    <h4>Kabinet</h4>
                                    <h3>IDR 350.000</h3>
                                    <a href="#" class="add_cart">+ Tambah Ke Keranjang</a>
                            </div>
                        </div>
                        <div class="single_product_item">
                           <img src="img/product/lampu.jpg" alt="">
                                <div class="single_product_text">
                                    <h4>Lampu Gantung</h4>
                                    <h3>IDR 150.000</h3>
                                    <a href="#" class="add_cart">+ Tambah Ke Keranjang</a>
                            </div>
                        </div>
                        <div class="single_product_item">
                            <img src="img/product/meja-makan.jpg" alt="">
                                <div class="single_product_text">
                                    <h4>Meja Makan</h4>
                                    <h3>IDR 500.000</h3>
                                    <a href="#" class="add_cart">+ Tambah Ke Keranjang</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product_list part end-->

    <!-- subscribe_area part start-->
    <!-- <section class="subscribe_area section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="subscribe_area_text text-center">
                        <h5>Join Our Newsletter</h5>
                        <h2>Subscribe to get Updated
                            with new offers</h2>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="enter email address"
                                aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <a href="#" class="input-group-text btn_2" id="basic-addon2">subscribe now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!--::subscribe_area part end::-->

    <!-- subscribe_area part start-->
   <!--  <section class="client_logo padding_top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="single_client_logo">
                        <img src="img/client_logo/client_logo_1.png" alt="">
                    </div>
                    <div class="single_client_logo">
                        <img src="img/client_logo/client_logo_2.png" alt="">
                    </div>
                    <div class="single_client_logo">
                        <img src="img/client_logo/client_logo_3.png" alt="">
                    </div>
                    <div class="single_client_logo">
                        <img src="img/client_logo/client_logo_4.png" alt="">
                    </div>
                    <div class="single_client_logo">
                        <img src="img/client_logo/client_logo_5.png" alt="">
                    </div>
                    <div class="single_client_logo">
                        <img src="img/client_logo/client_logo_3.png" alt="">
                    </div>
                    <div class="single_client_logo">
                        <img src="img/client_logo/client_logo_1.png" alt="">
                    </div>
                    <div class="single_client_logo">
                        <img src="img/client_logo/client_logo_2.png" alt="">
                    </div>
                    <div class="single_client_logo">
                        <img src="img/client_logo/client_logo_3.png" alt="">
                    </div>
                    <div class="single_client_logo">
                        <img src="img/client_logo/client_logo_4.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!--::subscribe_area part end::-->
@stop

@section ('footer')
    @include ('footer')
@stop