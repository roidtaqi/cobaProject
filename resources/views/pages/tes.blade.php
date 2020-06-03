@extends('layouts.template')

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
              <h2>Konfirmasi Pembayaran</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- breadcrumb start-->

  <!--================Cart Area =================-->
    <section class="cart_area padding_top">
    <form action="/tes/proses" method="POST" enctype="multipart/form-data">
					{{ csrf_field() }}
 
					<div class="form-group">
						<b>File Gambar</b><br/>
						<input type="file" name="file">
					</div>
 
					<input type="submit" name="submit" value="Upload" class="btn btn-primary">
				</form>
  </section>



  <br><br><br>
  <!--================End Cart Area =================-->
@stop

@section ('footer')
    @include ('footer')
@stop