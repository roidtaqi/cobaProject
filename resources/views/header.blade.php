 <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="/"> FurniTour </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="menu_icon"><i class="fas fa-bars"></i></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="/">Home</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown_1"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Katalog
                                    </a>
                                     <div class="dropdown-menu" aria-labelledby="navbarDropdown_1">
                                        @if(!empty($kategori))
                                            <?php foreach ($kategori as $kat): ?>
                                                <a class="dropdown-item" href="{{ $kat->slug }}">{{ $kat->name }}</a>
                                            <?php endforeach ?>
                                        @else
                                      <p>Tidak ada data Barang</p>
                                    @endif
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown_3"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Order
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown_2">
                                      <!--   <a class="dropdown-item" href="tracking">tracking</a> -->
                                        <a class="dropdown-item" href="/checkout">checkout</a>
                                        <a class="dropdown-item" href="/confirmation">konfirmasi pembayaran</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/single-blog">tentang kami</a>
                                </li>

                                <!-- SINTAKS LOGIN DROPDOWN -->
                           <!--  <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown_2"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        akun
                                    </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown_2">
                                    <a href="login" class="dropdown-item">Login</a>
                                    <a href="register" class="dropdown-item">Register</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                </div>
                            </li> -->
                            </ul>
                        </div>
                        @guest
                        <ul class="navbar-nav">
                            <li class="hearer_icon d-flex">
                                <a id="search_1" href="javascript:void(0)"><i class="ti-search"></i></a>
                            </li>
                        <li class="icon">
                                <a href="/cart">
                                    <i class="fas fa-cart-plus"></i>
                                    <span class="badge badge-pill badge-danger"></span>
                                </a>
                            </li>
                            <li class="user">
                                <div class="user_login">
                                    <a href="/login" class="btn btn-success" role="button">
                                        <p>Login</p>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    @endguest
                            @auth
                            <ul class="navbar-nav">
                            <li class="hearer_icon d-flex">
                                <a id="search_1" href="javascript:void(0)"><i class="ti-search"></i></a>
                            </li>
                        <li class="icon">
                             <?php
                                $pesanan_utama = \App\Pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();

                                if (!empty($pesanan_utama)) 
                                {
                                $notif = \App\PesananDetail::where('pesanan_id', $pesanan_utama->id)->count();
                                }
                            ?>
                                <a href="/cart">
                                    <i class="fas fa-cart-plus"></i>
                                    @if(!empty($notif))
                                    <span class="badge badge-pill badge-danger">{{ $notif }}</span>
                                    @endif
                                </a>
                            </li>
                        </ul>
                        <div class="nav-item dropdown">
                                <a class="nav-link" href="#" id="navbarDropdown_3"
                                        role="button" data-toggle="dropdown">
                                    <i class="fas fa-user"></i>
                                </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown_2">
                                      <!--   <a class="dropdown-item" href="tracking">tracking</a> -->
                                        <a class="dropdown-item" href="/edit">Profil</a>
                                        <a class="dropdown-item" href="/logout">Logout</a>
                                    </div>
                        </div>
                     @endauth
                  
                                <!-- <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <div class="single_product">
    
                                    </div>
                                </div> -->
                                
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <div class="search_input" id="search_input_box">
            <div class="container ">
                <form class="d-flex justify-content-between search-inner">
                    <input type="text" class="form-control" id="search_input" placeholder="Sedang mencari apa?">
                    <button type="submit" class="btn"></button>
                    <span class="ti-close" id="close_search" title="Close Search"></span>
                </form>
            </div>
        </div>
    </header>
    <!-- Header part end-->