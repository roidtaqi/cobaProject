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
                              <a class="list-group-item" href="/syarat">Syarat dan Ketentuan</a>
                              <a class="list-group-item active" href="/kebijakan">Kebijakan Privasi</a>
                           </div>
                  </div>
            </div>
            <div class="col-lg-8 posts-list">
               <div class="single-post">
                  <div class="blog_details">
                     <h2>Kebijakan Privasi</h2>
                     <hr>
                     <p style="text-align: justify;">
                     Kebijakan privasi ini ditujukan untuk memberi informasi kepada Anda tentang penggunaan informasi pribadi yang dikumpulkan selama kunjungan Anda ke FourniTour. Kami menghargai privasi pelanggan kami dan menghargai kepercayaan Anda kepada kami. Kami menghormati privasi Anda dan tidak akan menggunakan nama Anda dan informasi lain yang berhubungan dengan Anda sesuai dengan kebijakan privasi ini. Kami hanya akan mengumpulkan informasi yang menurut kami penting dan dibutuhkan oleh kami untuk menjalin hubungan dengan Anda.<br>

                     Dengan mengunjungi dan menggunakan Situs Web kami, Anda telah menyepakati persyaratan yang tercantum di dalam Kebijakan Privasi ini. Maka dari itu, dimohon untuk dibaca Kebijakan Privasi ini dengan seksama.<br>

                     Dengan berkembangnya FourniTour, Kebijakan Privasi dan Persyaratan Penggunaan Situs Web akan berubah dengan berjalannya waktu. Persyaratan Privasi ini berlaku untuk semua informasi tentang Anda dan akun Anda yang ada di FourniTour.<br>
                     </p>

                     <h5>Pengumpulan Informasi Pribadi</h5>
                     <hr>
                     <p style="text-align: justify;">
                     FourniTour tidak akan menjual atau menyebarkan informasi pribadi pelanggan kepada siapapun. Informasi yang kami kumpulkan secara online hanya akan digunakan secara internal dalam perusahaan kami untuk melayani Anda dengan lebih baik.<br>

                     Saat Anda membuat akun di FourniTour, berikut informasi pribadi Anda yang mungkin kami kumpulkan:
                     </p>
                     <div style="margin-left: 40px;">
                     <li>Nama</li>
                     <li>Email</li>
                     <li>Alamat</li>
                     <li>Foto Identitas</li>
                     <li>Nomor Telepon</li>
                     </div>
                     
                     <br>
                     <p style="text-align: justify;">
                     Kami hanya akan mengumpulkan informasi tersebut jika Anda bersedia menyerahkan informasinya kepada kami. Jika Anda memilih untuk tidak memberi informasi pribadi kepada kami, maka kami tidak dapat melayani Anda atau melakukan kesepakatan apapun yang kami miliki dengan Anda.<br>

                     Jika Anda mendaftar melalui dan menghubungkan akun media sosial Anda denganakun FourniTour, maka kami dapat mengakses informasi Anda yang terdapat pada dalam akun media sosial Anda tersebut sesuai dengan kebijakan penyedia media sosial yang bersangkutan. Lalu kami akan menggunakan data pribadi Anda sesuai dengan kebijakan privasi FourniTour.<br>
                     </p>
                     
                     <h5>Keamanan</h5>
                     <hr>
                     <p style="text-align: justify;">
                     Di FourniTour, pelanggan adalah prioritas kami. Maka dari itu, kami berkomitmen untuk menyediakan Web Situs yang aman dan nyaman digunakan bagi semua pelanggan kami.<br>

                     Dengan menggunakan peramban Internet yang aman, seperti Microsoft Internet Explorer, Mozilla Firefox, Safari dan Google Chrome, Anda dapat membantu memastikan agar informasi Anda yang dapat diidentifikasi oleh pihak ketiga tidak berkaitan.<br>

                     Jika keamanan informasi pribadi Anda dalam kendali kami terbongkar, maka kami akan memberitahukan kepada Anda sesuai dengan kebijakan kami. Kami akan berupaya agar memberitahukan kepada Anda secepat mungkin melalui email yang Anda berikan kepada kami.<br>
                     </p>
         </div>
      </div>
   </section>
   <!--================Blog Area end =================-->
@stop

@section ('footer')
    @include ('footer')
@stop