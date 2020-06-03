@extends ('template')

@section ('header')
    @include ('header')
@stop

@section ('content')
   <!--================Home Banner Area =================-->
   <!-- breadcrumb start-->
   <section class="breadcrumb breadcrumb_bg">
      <div class="container">
         <div class="row justify-content-center">
            <div class="col-lg-8">
               <div class="breadcrumb_iner">
                  <div class="breadcrumb_iner_item">
                     <h2>FAQ</h2>
                     <p>Home <span>-</span> FAQ</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- breadcrumb start-->


   <!--================FAQ Area =================-->
   <section name="faq-area" style="padding-top: 20px;">
      <div class="container">
         <div class="row">
             <div class="col-lg-4" style="margin-left: -40px; margin-top: 55px;">
                  <div class="left_sidebar_area">
                           <div class="list-group">
                              <a class="list-group-item" href="/faq">Cara Pembelian</a>
                              <a class="list-group-item active" href="/syarat">Syarat dan Ketentuan</a>
                              <a class="list-group-item" href="/kebijakan">Kebijakan Privasi</a>
                           </div>
                  </div>
            </div>
            <div class="col-lg-8 posts-list">
               <div class="single-post">
                  <div class="blog_details">
                     <h2>Syarat dan Ketentuan</h2>
                     <hr>
                     <p style="text-align: justify;">
                        Terima kasih telah mengunjungi website kami. Sebelum berbelanja, silakan membaca syarat dan ketentuan penggunaan website terlebih dahulu. Dengan berbelanja di website kami, berarti Anda setuju dengan syarat dan ketentuan yang telah ditentukan.<br>

                        Seiring berkembangnya FouniTour, kami juga akan melakukan perubahan pada syarat dan ketentuan di website kami. Anda disarankan untuk membaca syarat dan ketentuan sebelum melakukan transaksi dengan kami.
                     </p>

                     <h5>Ketepatan Foto Produk</h5>
                     <hr>
                     <p style="text-align: justify;">
                       Kami berusaha sebaik mungkin untuk memastikan produk yang dijual di website serupa dengan foto yang terdapat di website. Akan tetapi, pengerjaan secara manual serta penggunaan material dari bahan alami dapat menyebabkan hasil yang bervariasi mulai dari bentuk permukaan serta warna kayu tersebut, hal ini membuat setiap produk menjadi lebih unik dan memiliki ciri khas tersendiri. Kami berusaha semaksimal mungkin untuk menampilkan foto di website yang serupa dengan produk asli secara akurat. Akan tetapi, warna yang Anda lihat di website kami akan bergantung pada tampilan layar Anda, sehingga kami tidak dapat menjamin tampilan pada layar Anda dapat merepresentasikan warna produk kami secara 100% akurat.
                     </p>
                    
                    <h5>Tanggung Jawab</h5>
                     <hr>
                     <p style="text-align: justify;">
                       FourniTour tidak akan mengambil tanggung jawab untuk produk yang hilang, rusak dan cedera pribadi (yang diakibatkan oleh pelanggan setelah produk diterima) yang dialami oleh pelanggan atau pihak ketiga. FourniTour juga melepaskan tanggung jawab atas masalah yang mungkin dialami oleh Anda atau pihak ketiga yang ditimbulkan secara langsung atau tidak langsungnya sewaktu Anda mengakses dan menggunakan website kami. Kami tidak akan pernah melepaskan atau memberikan informasi Anda kepada pihak ketiga lainnya.
                     </p>

                     <h5>Hak Kekayaan Intelektual</h5>
                     <hr>
                     <p style="text-align: justify;">
                     Semua konten di website kami dimiliki oleh FourniTour dan/atau pemberi lisensinya dan dilindungi oleh hukum hak cipta. Anda tidak diperbolehkan untuk menggunakan konten website kami tanpa persetujuan tertulis dari FourniTour.<br>

                     Semua konten yang dilindungi adalah teks, desain grafik, tombol ikon, gambar, foto, logo, judul kampanye, digital download dan klip audio adalah milik FourniTour. Hak cipta melindungi semua konten tersebut.<br>

                     Anda dapat menyimpan, menampilkan dan mencetak konten yang tersedia hanya untuk penggunaan pribadi Anda. Anda tidak diizinkan untuk memanipulasi, mendistribusikan, mempublikasikan, memproduksi ulang dalam format apapun.<br>

                     Jika Anda mencetak dan menyalin ulang bagian dari website kami, berarti Anda melanggar Syarat dan Ketentuan ini. Jika Syarat dan Ketentuan ini dilanggar, maka hak Anda untuk menggunakan website kami akan segera diberhentikan dan Anda harus memusnahkan atau mengembalikan salinan materi yang Anda buat.<br>
                     </p>

                     <h5>Hak Kekayaan Intelektual</h5>
                     <hr>
                     <li style="text-align: justify;">Semua foto furnitur yang terdapat di website
                        FourniTour adalah hak cipta FourniTour by Symfony. Karenanya, semua pihak diluar <strong> PT FourniTour by Symfony</strong>. tidak diperkenankan mengambil/ menggunakan/ memperbanyak foto furniture yang ada dalam website FourniTour.</li><br>
                     <li style="text-align: justify;">Bilamana diketahui terjadi penyalahgunaan foto milik <strong> PT FourniTour by Symfony</strong>. oleh pihak manapun tanpa terkecuali, akan dikenakan sanksi.</li>
                  </div>
               </div>
         </div>
      </div>
   </section>
   <!--================Blog Area end =================-->
@stop

@section ('footer')
    @include ('footer')
@stop