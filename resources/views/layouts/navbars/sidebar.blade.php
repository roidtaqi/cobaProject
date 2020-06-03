<div class="sidebar">
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="#" class="simple-text logo-mini">{{ __('S') }}</a>
            <a href="#" class="simple-text logo-normal">{{ __('Symfony') }}</a>
        </div>
        <ul class="nav">
            <li @if ($pageSlug == 'dashboard') class="active " @endif>
                <a href="{{ route('dashboard') }}">
                    <i class="tim-icons icon-chart-pie-36"></i>
                    <p>{{ __('Dashboard') }}</p>
                </a>
            </li>
            <li @if ($pageSlug == 'profile') class="active " @endif>
                <a href="{{ route('profile.edit')  }}">
                   <i class="tim-icons icon-single-02"></i>
                   <p>{{ __('Profil Pengguna') }}</p>
                </a>
           </li>
            <li @if ($pageSlug == 'users') class="active " @endif>
                <a href="{{ route('admin.users.index')  }}">
                    <i class="tim-icons icon-badge"></i>
                    <p>{{ __('Pengelolaan User') }}</p>
                </a>
            </li>
            <li>
                <a data-toggle="collapse" href="#tes" aria-expanded="true">
                    <i class="tim-icons icon-bullet-list-67" ></i>
                    <span class="nav-link-text" >{{ __('Transaksi') }}</span>
                    <b class="caret mt-1"></b>
                </a>

                <div class="collapse hide" id="tes">
                    <ul class="nav pl-4">
                        <li @if ($pageSlug == 'tables') class="active " @endif>
                            <a href="{{ route('barang.index') }}">
                                <i class="tim-icons icon-app"></i>
                                <p>{{ __('Barang') }}</p>
                            </a>
                        </li>
                        <li @if ($pageSlug == 'checkout') class="active " @endif>
                            <a href="{{ route('checkout.index')  }}">
                                <i class="tim-icons icon-cart"></i>
                                <p>{{ __('Pembelian') }}</p>
                            </a>
                        </li>
                        <li @if ($pageSlug == 'pengiriman') class="active " @endif>
                            <a href="{{ route('pengiriman.index')  }}">
                                <i class="tim-icons icon-delivery-fast"></i>
                                <p>{{ __('Pengiriman') }}</p>
                            </a>
                        </li>

                    </ul>
                </div>
            </li>
            <li @if ($pageSlug == 'maps') class="active " @endif>
                <a href="{{ route('pages.maps') }}">
                    <i class="tim-icons icon-square-pin"></i>
                    <p>{{ __('Maps') }}</p>
                </a>
            </li>
            <li @if ($pageSlug == 'home') class="active " @endif>
                <a href="{{ route('home') }}">
                    <i class="tim-icons icon-world"></i>
                    <p>{{ __('Kembali Ke Halaman User') }}</p>
                </a>
            </li>
        </ul>
    </div>
</div>
