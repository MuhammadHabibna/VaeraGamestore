<?php

@include '../config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:../login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VaeraStore</title>
    <!--google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Alkatra:wght@400;500;600&family=Poppins:ital,wght@0,100;0,300;0,400;0,500;0,600;0,700;1,700&
    family=Sedgwick+Ave+Display&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <!--Feather Icon-->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Swiper -->
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"
    />

    <link rel="stylesheet" href="../style.css">
    <link rel="shorcut icon" href="../imgpage/dmlogo.png">
</head>
<body>
    <nav class="navbar">
        <a href="../page.php" class="navbar-logo">
            <h1>Vaera<span>Store</span>.</h1>
          </a>
        <div class="navbar-ekstra">

            <div href="#" class="user-pic">
                    <i class="fa-regular fa-user"></i>
                    <p><span><?php echo $_SESSION['user_name'] ?></span></p>
                </div>
                <div class="sub-menu-warp" id="subMenu">
                    <div class="sub-menu">
                        <div class="user-info">
                            <i class="fa-regular fa-user"></i>
                            <h2><?php echo $_SESSION['user_name'] ?></h2>
                        </div>
                        <hr>

                        <a href="#" class="sub-menu-link">
                            <img src="imgpage/profile.png">
                            <p>Edit Profil</p>
                            <span>></span>
                        </a>
                        <a href="#" class="sub-menu-link">
                            <img src="imgpage/setting.png">
                            <p>Setting & Privacy </p>
                            <span>></span>
                        </a>
                        <a href="#" class="sub-menu-link">
                            <img src="imgpage/help.png">
                            <p>Help & Support</p>
                            <span>></span>
                        </a>
                        <a href="login_system/logout.php" class="sub-menu-link">
                            <img src="imgpage/logout.png">
                            <p>Logout</p>
                            <span>></span>
                        </a>
                    </div>
            </div>
        </div>
    </nav>

    <div class="produk" id="blur">
        <div class="row">
            <div class="profil">
                <img src="../imgpage/pubgm3.jpg">
                <!-- <div class="underline"><span></span></div> -->
                <div class="profil-text">
                <h1 class="panduan">Panduan Topup</h1>
                <h1 class="how">
                    Cara TopUp
                </h1>
                <p>1. Lengkapi User ID serta Server untuk identitas game anda</p>
                <p>2. Pilih Produk yang diinginkan <span>reload Website untuk pilih ulang</span></p>
                <p>3. pilih Metode Pembayaran</p>
                <p>4. Tekan 'Beli Sekarang' jika data sudah terisi lengkap</p>
                <p>5. Pesanan Telah di proses</p>
                <br>
                <h1 class="how">
                    Cara Menemukan User ID gamemu
                </h1>
                <p>1. Masuk ke profilmu dan masuk ke game-nya</p>
                <p>2. Buka halaman profil</p>
                <p>3. Disitu kamu akan menemukan nomor UID</p>
                </div>
            </div>
            <div class="content">
                <div class="judul">
                <h1>PUBG MOBILE</h1>
                <p>Tencent</p>
                <!-- <p>Top Up Crystal Genesis GenshinImpact Resmi Hoyoverse 100% Legal , Murah , Aman Dan Terpercaya.</p> -->
                <div class="ads">
                    
                    <p><i class="fa-solid fa-crown"></i> Product Mobile Terbaik</p>
                </div>
                </div>
                <div class="akun">
                    <h2>Identitas Game</h2>
                    <div class="flex">
                        <div class="id">
                            <p>User ID</p>
                            <input type="text" placeholder="Masukkan User ID..." required id="id">
                        </div>
                        <div class="server">
                            <p>Server</p>
                            <input type="text" placeholder="Masukkan Server" required id="server">
                        </div>
                    </div>
                    <h4>Masukkan identitas game anda dengan benar</h4>
                </div>
                <div class="price">
                    <h1 class="h1">Produk TopUp yang tersedia</h1>
                    <div class="up">
                
                        <p><i class="fa-solid fa-fire"></i> 101 Items dibeli dalam 1 hari terakhir</p>
                    </div>
                    <div class="item">
                    <?php 
                        $product = mysqli_query($conn, "SELECT * FROM produk_form WHERE game = 'pubg';");
                        $no = 0;
                        while($result = mysqli_fetch_assoc($product)){
                            $no++;
                    ?>
                        <div class="price-item" id="price<?php echo $no ?>" onclick="getVal<?php echo $no; ?>();" value="<?php echo $result['price']; ?>" name="<?php echo $result['name']; ?>">
                            <h1><?php echo $result['name']; ?></h1>
                            <p><?php echo $result['price']; ?></p>
                        </div>
                        <?php
                        }
                        ?>
                    </div>
                    <p>* Reload Website untuk Pilih Ulang</p>
                </div>


                <div class="gateway">
                    <div class="total">
                        <h1>Total yang harus dibayarkan</h1>
                        <input type="text" id="h">
                    </div>

                    <a type="submit" href="pubg.php#blur" class="gateway-order" onclick="toggle()">
                        <p>Beli Sekarang </p>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                    
                </div>
            </div>  
        </div>
    </div>
    <div id="popup" class="popup">
        <img src="../imgpage/done.png">
            <div class="title">
                <h1>Verifikasi Pembayaran</h1>
            </div>
            <form action="#">
                <div class="user-details">
                    <div class="input-box">
                        <h1 class="details">Id:</h1>
                        <input type="text" required id="akunid">
                    </div>
                    <div class="input-box">
                        <h1 class="details">Server:</h1>
                        <input type="text" required id="akunserver">
                    </div>
                    <div class="input-box">
                        <h1 class="details">Produk:</h1>
                        <input type="text" required id="name">
                    </div>
                </div>
                    <div class="gateway-box">
                        <div class="input-box">
                            <h1 class="details">Harga:</h1>
                            <input type="text" required id="harga">
                        </div>
                        <div class="input-box">
                            <h1 class="details">Admin:</h1>
                            <input type="text" value="Rp. 0" required>
                        </div>
                        <div class="total">
                            <div class="input-box">
                                <h1 class="details">Total:</h1>
                                <input type="text" required id="totalharga">
                            </div>
                        </div>
                        <div class="warning">
                            <p>PENTING! Mohon Transfer sesuai jumlah yang tertera</p>
                        </div>
                    </div>
                    <div class="transfer">
                        <div class="gopay">
                            <i class="fa-solid fa-wallet"></i>
                            <p>Transfer Gopay ke +6285730470740</p>
                        </div>
                        <div class="whatsapp">
                            <i class="fa-brands fa-whatsapp"></i>
                            <p>Kirim Bukti Transfer ke <a href="https://api.whatsapp.com/send/?phone=6285730470740&text&type=phone_number&app_absent=0">+6285730470740</a></p>
                        </div>
                    </div>
            </form>
            <div class="shorcut">
            <a class="back" type="submit" href="../page.php#iklan" onclick="Closetoogle()">
                <h1><i class="fa-solid fa-arrow-left"></i> Kembali</h1>
            </a>
            <a class="next" href="pubg.php" onclick="Closetoogle()">
                <p>Lanjut Order <i class="fa-solid fa-arrow-right"></i></p>
            </a>
            </div>

    </div>

    <footer>
        <div class="row">
            <div class="col">
                <h1><span>Vaera</span> GameStore</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima quam accusantium 
                    similique reprehenderit deserunt nisi delectus, inventore consequatur aliquam ad!</p>
            </div>
            <div class="col">
                <h3>Follow Us: <div class="underline"><span></span></div></h3>
                <p><i class="fa-solid fa-angle-right"></i>
                    <i class="fa-brands fa-instagram"></i> RaymeHakke</p>
                <p><i class="fa-solid fa-angle-right"></i>
                    <i class="fa-brands fa-facebook"></i> HabibCerdas</p>
                <p><i class="fa-solid fa-angle-right"></i>
                    <i class="fa-brands fa-x-twitter"></i> Xenonite</p>
                <p><i class="fa-solid fa-angle-right"></i>
                    <i class="fa-brands fa-youtube"></i> Habibgt96</p>
            </div>
            <div class="col">
                <h3>Layanan <div class="underline"><span></span></div></h3>
                <ul>
                    <li><a href="page.html#populer">
                        <i class="fa-solid fa-angle-right"></i>
                        Trending Game</a></li>
                    <li><a href="page.html#">
                        <i class="fa-solid fa-angle-right"></i>
                        Mobile Game Topup</a></li>
                    <li><a href="page.html#">
                        <i class="fa-solid fa-angle-right"></i>
                        PC game Topup</a></li>
                    <li><a href="page.html#">
                        <i class="fa-solid fa-angle-right"></i>
                        Jasa Joki (soon)</a></li>
                </ul>
            </div>
            <div class="col">
                <h3>Butuh Bantuan? <div class="underline"><span></span></div></h3>
                <form>
                    <i class="fa-brands fa-whatsapp"></i>
                    <input type="text" placeholder="Hubungi Kami" required>
                    <button type="submit"><i class="fa-solid fa-angle-right"></i>
                    </button>
                </form>
                <p class="email-id">hgt.pro96@gmail.com</p>
                <h4>+62 8573047xxxx</h4>
            </div>
        </div>
        <hr>
        <div class="hr-bg">
        <p class="copyright">copyright &copy; 2023 by: <span>Muhammad Habib</span> |
        Designed by: @Xenon1te_
        </p>
        </div>
    </footer>
        <!-- Footer end -->

        <script>
            feather.replace()
        </script>
        <!-- JavaScript -->
        <script src="../javascript/script.js"></script>
    </body>
    </html>