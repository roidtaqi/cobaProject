@extends ('layouts.template')

@section ('header')
    @include ('header')
@stop

@section ('content')
  <!-- breadcrumb start-->
  <section class="breadcrumb breadcrumb_bg">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="breadcrumb_iner">
            <div class="breadcrumb_iner_item">
              <h2>Detail Barang</h2>
              <!-- <p>Home <span>-</span> Shop Single</p> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- breadcrumb start-->
  <!--================End Home Banner Area =================-->

  <!--================Single Product Area =================-->
  <div class="product_image_area section_padding">
    <div class="container">
      <div class="row s_product_inner justify-content-between">
        <div class="col-lg-7">
          <div class="product_slider_img">
            <div id="vertical" style="margin-left: 100px;">
              <div data-thumb="{{ url('uploads') }}/{{ $barang->gambar }}">
                <img src="{{ url('uploads') }}/{{ $barang->gambar }}" />
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="s_product_text">
            <!-- <h5>previous <span>|</span> next</h5> -->
            <h3>{{ $barang->namabarang }}</h3>
            <h2>Rp. {{ number_format ($barang->harga) }}</h2>
            <ul class="list">
              <li>
                <a class="active" href="#">
                  <span>Kategori</span> : {{ $barang->kategori }}</a>
              </li>
              <li>
                <a href="#"> <span> Status </span>  : 
                  @if($barang->stok >= 10)
                  Tersedia
                  @elseif ($barang->stok <= 5)
                  Tersisa < 5
                  @elseif ($barang->stok == 0)
                  Stok Kosong
                  @endif
                </a>
              </li>
            </ul>
            <p>
              {{ $barang->keterangan }}
            </p>

          <div class="card_area d-flex justify-content-between align-items-center">
           <!-- TAMBAHKAN FORM ACTION -->
            <form action="{{ url('pesan') }}/{{ $barang->id }}" method="POST">
              @csrf
              <div class="product_count">
                <label for="jumlah_pesan">Pesan:</label>
                <input type="text" name="jumlah_pesan" id="sst" maxlength="12" value="1" title="Quantity:" class="input-text form-control">
                
                <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;"
                class="increase items-count mr-2" type="button">
                  <span class="number-increment"> <i class="ti-plus"></i></span>
                </button>

                <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;"
                class="reduced items-count" type="button">
                  <span class="number-increment"> <i class="ti-minus"></i></span>
                </button>
              </div>

              <!-- Default template -->
              <!-- <div class="product_count">
                <span class="inumber-decrement"> <i class="ti-minus"></i></span>
                <input class="input-number" type="text" value="1" min="0" max="10">
                <span class="number-increment"> <i class="ti-plus"></i></span>
              </div> -->
            @php
            $token = csrf_token();
            @endphp
              <input type="hidden" name="user_id" value="{{$token}}">

                <!-- UBAH JADI BUTTON -->
                <button class="btn_3 mt-3"><i class="fas fa-cart-plus"></i> 
                  + keranjang
                </button>
                <!-- UBAH JADI BUTTON -->
            </form>
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>  
  <!--================End Single Product Area =================-->
@stop

@section ('footer')
    @include ('footer')
@stop