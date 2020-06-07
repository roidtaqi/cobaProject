@extends('layouts.app', ['page' => __('Pembelian'), 'pageSlug' => 'checkout'])

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card ">
      <div class="card-header">
      <h5 class="title">Ubah Status Pemesanan {{ $pesanan -> id }}</h5>
              </div>
              <div class="card-body">
              <form action="{{ route('checkout.update', $pesanan) }}" method="POST" enctype="multipart/form-data">
              {{csrf_field()}}
              {{ method_field('PATCH') }}
  <div class="row">
  <div class="col-sm-4">
                    <div class="form-check">
                            <label class="form-check-label" >Menunggu Pembayaran
                              <input class="form-check-input" name="status" id="status" type="checkbox" value="1" @if($pesanan->status == 1) checked @endif>
                              <span class="form-check-sign">
                                <span class=""></span>
                              </span>
                            </label>
                          </div>
                          </div>
                          <div class="col-sm-4">
                          <div class="form-check">
                            <label class="form-check-label" >Pesanan Sedang Diproses
                              <input class="form-check-input" name="status" id="status" type="checkbox" value="2" @if($pesanan->status == 2) checked @endif>
                              <span class="form-check-sign">
                                <span class=""></span>
                              </span>
                            </label>
                          </div>
                          </div>
                          <div class="col-sm-4">
                          <div class="form-check">
                            <label class="form-check-label" >Pesanan Telah Selesai
                              <input class="form-check-input" name="status" id="status" type="checkbox" value="3" @if($pesanan->status == 3) checked @endif>
                              <span class="form-check-sign">
                                <span class=""></span>
                              </span>
                            </label>
                            </div>
                          </div>
                          </div>
                          <br>
                      <div class="row">
                    <div class="col-2">
                    <button type="submit" class="btn btn-fill btn-primary">Update</button>
                    </div>
                    <div class="col-2">
                        <button href="/pembelian" class="btn btn-fill btn-danger">Batal</button>
                    </div>
                </div>
                </form>
              </div>
            </div>
          </div>
@endsection
