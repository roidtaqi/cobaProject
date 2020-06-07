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
                     <h2>Tentang Kami</h2>
                     <p>Home <span>-</span> Tentang Kami</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- breadcrumb start-->
  <!--================Blog Area =================-->
   <section class="blog_area single-post-area padding_top">
      <div class="container">
         <div class="row">
            <div class="col-lg-10 posts-list">
               <div class="single-post">
                  <h2>Halo, Selamat Datang di FourniTour!</h2>
                  <hr align="left" width="90%">
                  <div class="feature-img">
                     <img class="img-fluid" src="img/blog/tentang-kami.jpg" alt="">
                  </div>
                  <div class="blog_details">
                      <ul class="blog-info-link mt-3 mb-4">
                        <!-- <li><a href="#"><i class="far fa-user"></i> Travel, Lifestyle</a></li> -->
                        <li><a href="#"><i class="far fa-comments"></i> 17 April 2020 - 10 Juni 2020</a></li>
                     </ul>
                     
                     <h2>Perkenalkan, kami adalah Symfony Team</h2>
                     <p>Berdiri sejak tahun 2020, kami bergerak di bidang furnitur dan desain interior. Kami menyediakan berbagai furnitur mulai dari furnitur ruang tamu, ruang makan, kamar tidur, ruang kerja, hingga beragam dekorasi rumah. Seluruh furnitur yang kami jual merupakan hasil karya perajin Indonesia dengan material pilihan yang berkualitas premium dengan harga terbaik.</p><br>
                     <p>Salah satu misi kami adalah mewujudkan surga pada hunianmu. Karenanya, kualitas, kenyamanan, dan kehangatan menjadi fokus dasar dari setiap furnitur yang kami jual. Kami juga bekerja sama dengan para produsen manufaktur lokal kelas atas sehingga mereka dapat menjual produk-produknya di website kami. Dengan menggabungkan aksen modern dan minimalis, produk yang kami jual memiliki cita estetika yang akan menghangatkan rumahmu. Lebih daripada itu, kami memastikan bahwa furnitur dan produk yang kami jual tak hanya unik secara visual namun juga sepenuhnya fungsional.</p><br>
                     <p>Mengisi seluruh rumah di Indonesia dengan furnitur Fabelio menjadi misi lainnya yang kami miliki. Kami percaya ada kebahagiaan di tiap sudut hunian, biarkan kami berkarya dan membantumu mengisi sudut kebahagiaan itu. Rasakan kenyamanan dan keamanan berbelanja furnitur bersama FourniTour!</p>
                     <hr width="90%" color="black" align="left">
                 
                     <h2>Website ini Dibangun Sebagai Project Akhir Mata Kuliah Desain dan Pemrograman Web
                     </h2>
                    
                     <p class="excert">
                      <strong> Dosen Pengampu : Rajiansyah, S.Kom., M.Sc </strong>
                     </p>
                     <p>
                       <strong> Oleh : <br>
                       Nama : Ardy Ferdian Ramadhan (18615006) & Muhammad Roid Taqi (18615022)<br>
                       Kelas : TI 4A </strong>
                     </p>
         </div>
      </div>
   </section>
   <!--================Blog Area end =================-->
@stop

@section ('footer')
    @include ('footer')
@stop