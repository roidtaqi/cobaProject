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
                <a data-toggle="collapse" href="#laravel-examples" aria-expanded="true">
                    <i class="tim-icons icon-bullet-list-67" ></i>
                    <span class="nav-link-text" >{{ __('Detail Barang') }}</span>
                    <b class="caret mt-1"></b>
                </a>

                <div class="collapse show" id="laravel-examples">
                    <ul class="nav pl-4">
                        <li @if ($pageSlug == 'tables') class="active " @endif>
                            <a href="{{ route('barang.index') }}">
                                <i class="tim-icons icon-app"></i>
                                <p>{{ __('Barang') }}</p>
                            </a>
                        </li>
                        <li @if ($pageSlug == 'tables') class="active " @endif>
                            <a href="{{ route('barang.index')  }}">
                                <i class="tim-icons icon-credit-card"></i>
                                <p>{{ __('Pembayaran') }}</p>
                            </a>
                        </li>
                        <li @if ($pageSlug == 'tables') class="active " @endif>
                            <a href="{{ route('barang.index') }}">
                                <i class="tim-icons icon-delivery-fast"></i>
                                <p>{{ __('Pengirimian') }}</p>
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
        </ul>
    </div>
</div>
