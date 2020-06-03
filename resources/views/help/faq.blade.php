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
                              <a class="list-group-item active" href="/faq">Cara Pembelian</a>
                              <a class="list-group-item" href="/syarat">Syarat dan Ketentuan</a>
                              <a class="list-group-item" href="/kebijakan">Kebijakan Privasi</a>
                           </div>
                  </div>
            </div>
            <div class="col-lg-8 posts-list">
               <div class="single-post">
                  <div class="blog_details">
                     <h2>Cara Pembelian</h2>
                     <hr>
                     <br>
                     <img src="img/belanja/1.png" width="1000">
                     <p>
                        1. Pilih produk yang ingin Anda beli
                     </p>
                     <img src="img/belanja/2.png" width="1000">
                     <p>
                        2. Anda akan diarahkan ke halaman detail produk, masukkan jumlah sesuai yang Anda inginkan lalu klik <b>'+ keranjang'</b> untuk memasukkan produk ke dalam keranjang.
                     </p>
                     <img src="img/belanja/3.png" width="1000">
                     <p>
                        3. Anda akan berada di <b>halaman keranjang</b>, klik <b>lanjut berbelanja</b> jika Anda ingin membeli produk lainnya, atau klik <b>proses checkout</b> untuk lanjut ke proses selanjutnya.
                     </p>
                     <img src="img/belanja/4.png" width="1000">
                     <p>
                        4. Anda akan berada di halaman checkout, pastikan produk yang ingin Anda beli telah masuk kedalam tabel <b>'Pesanan Anda'</b> juga akan ditampilkan informasi tagihan yang akan dibebankan kepada Anda. Klik <b>'Buat Pesanan'</b> untuk lanjut ke proses selanjutnya.
                     </p>
                     <img src="img/belanja/5.png" width="1000">
                     <p>
                        5. Anda berada di halaman <b>'riwayat pemesanan'</b>. 
                        <br>
                        <strong style="font-size: 10pt; font-weight: 700px;">Note : Jika Anda belum memiliki/login akun, segera klik <b>'detail'</b> untuk melihat rincian pemesanan sekaligus mengkonfirmasi/menyimpan pesanan yang telah Anda buat.</strong>
                     </p>
                     <img src="img/belanja/6.png" width="1000">
                     <p>
                        6. Anda akan diarahkan ke halaman <b>'Rincian Pemesanan'</b>, di halaman ini akan ditampilkan data pemesanan Anda.
                     </p>
                     <p>
                        7. Selanjutnya Anda akan diminta untuk <strong style="font-weight: 700px;"><b>mengupload bukti pembayaran</b></strong> ke rekening yang ditampilkan pada <b>'Info Pemesanan'</b> sesuai dengan total bayar yang dibebankan kepada Anda agar pesanan dapat diproses.
                     </p>
                     <img src="img/belanja/7.png" width="1000">
                     <p>
                        8. Jika Anda klik tombol lacak pesanan maka Anda akan diarahkan ke halaman <b>'Lacak Pesanan'</b>. Di halaman ini akan ditampilkan status pengiriman, alamat penerima, dan barang yang telah dipesan.
                     </p>
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