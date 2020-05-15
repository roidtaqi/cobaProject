@extends('template')

@section ('header')
    @include ('header')
@stop

@section('content')
  <!--================Home Banner Area =================-->
  <!-- breadcrumb start-->
  <section class="breadcrumb breadcrumb_bg">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="breadcrumb_iner">
            <div class="breadcrumb_iner_item">
              <h2>Checkout Produk</h2>
              <p>Home <span>-</span> Checkout</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- breadcrumb start-->

  <!--================Checkout Area =================-->
  <section class="checkout_area pt-3 pb-3">
    <div class="container">
      <div class="returning_customer">
         <a class="btn_1 mb-2" href="{{ url('cart') }}"><i class="fas fa-arrow-left"> </i> Kembali Ke Keranjang</a>
         <br>
         <br>
      <!--   <p>
          If you have shopped with us before, please enter your details in the
          boxes below. If you are a new customer, please proceed to the
          Billing & Shipping section.
        </p> -->
        <!-- <form class="row contact_form" action="#" method="post" novalidate="novalidate">
          <div class="col-md-6 form-group p_star">
            <input type="text" class="form-control" id="name" name="name" value=" " />
            <span class="placeholder" data-placeholder="Username or Email"></span>
          </div>
          <div class="col-md-6 form-group p_star">
            <input type="password" class="form-control" id="password" name="password" value="" />
            <span class="placeholder" data-placeholder="Password"></span>
          </div>
          <div class="col-md-12 form-group">
            <button type="submit" value="submit" class="btn_3">
              log in
            </button>
            <div class="creat_account">
              <input type="checkbox" id="f-option" name="selector" />
              <label for="f-option">Remember me</label>
            </div>
            <a class="lost_pass" href="#">Lost your password?</a>
          </div>
        </form> -->
      </div>
     <!--  <div class="cupon_area">
        <div class="check_title">
          <h2>
            Have a coupon?
            <a href="#">Click here to enter your code</a>
          </h2>
        </div>
        <input type="text" placeholder="Enter coupon code" />
        <a class="tp_btn" href="#">Apply Coupon</a>
      </div> -->
      <div class="billing_details">
        <div class="row">
          <div class="col-lg-6">
            <h2 align="center">Data Penagihan</h2>
            <hr>
            <br>
             <table class="table table-striped mt-3">
                        <tbody>
                        <tr>
                            <td>Nama</td>
                            <td width="5">:</td>
                            <td>{{ old('name', auth()->user()->name) }}</td>
                        </tr>    
                        <tr>
                            <td>Email</td>
                            <td width="5">:</td>
                            <td>{{ old('email', auth()->user()->email) }}</td>
                        </tr>
                        <tr>
                            <td>No. Handphone</td>
                            <td width="5">:</td>
                            <td>{{ old('no_hp', auth()->user()->no_hp) }}</td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td width="5">:</td>
                            <td>{{ old('alamat', auth()->user()->alamat) }}</td>
                        </tr>    

                        </tbody>
                    </table>
          </div>

          <div class="col-lg-6">
            <div class="order_box">
              <h2 align="center">Pesanan Anda</h2>
              <table class="table table-bordered">
                <thead>
                  <tr align="center">
                    <th>Produk</th>
                    <th colspan="1"></th>
                    <th>Harga</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($pesanan_details as $pd)
                  <tr>
                    <td align="center"><strong>{{ $pd->barang->namabarang }}</strong></td>
                    <td align="center"><strong> x {{ $pd->jumlah }}</strong></td>
                    <td align="center"><strong>Rp. {{ number_format ($pd->barang->harga) }}</strong></td>
                  </tr>
                </tbody>
                  @endforeach

              <table class="table table-bordered">
                  <tbody>
                    <tr>
                     <td>
                      <h5>Subtotal</h5>
                    </td>

                     <td align="center"> : </td>
                     <td align="center"><strong>Rp. {{ number_format ($pd->pesanan->jumlah_harga) }}</strong></td>
                  </tr>
                  <tr>
                   <td>
                      <h5>Transfer</h5>
                    </td>

                     <td align="center"> : </td>
                     <td align="center"><strong>Rp. {{ number_format ($pd->pesanan->kode) }}</strong></td>
                  </tr>
                  <tr>
                   <td>
                      <h5>Total</h5>
                    </td>

                     <td align="center"> : </td>
                     <td align="center"><strong>Rp. {{ number_format ($pd->pesanan->jumlah_harga+$pd->pesanan->kode) }}</strong></td>
                  </tr>
                  </tbody>
                </table>
              </table>
              
              <div class="creat_account">
                <input type="checkbox" id="f-option4" name="selector" required/>
                <label for="f-option4">Saya telah membaca dan menyetujui </label>
                <a href="#">Syarat dan Ketentuan</a>
              </div>
              <a class="btn_3" href="#">Checkout</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================End Checkout Area =================-->
@stop

@section ('footer')
    @include ('footer')
@stop