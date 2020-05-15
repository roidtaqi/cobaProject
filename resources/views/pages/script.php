 <?php
                                $pesanan_utama = \App\Pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();

                                if (!empty($pesanan_utama)) 
                                {
                                $notif = \App\PesananDetail::where('pesanan_id', $pesanan_utama->id)->count();
                                }
                            ?>
