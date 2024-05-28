<?php
    include 'config.php';

     session_start();

         if(!isset($_SESSION['admin_name'])){
         header('location:login_form.php');
         }

    $account = mysqli_query($conn, "SELECT * FROM user_form;");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>

    <link rel="stylesheet" href="admin_page.css">

    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <title>Admin Dashboard Panel</title> 
</head>
<body>
    <nav>
        <div class="logo-name">
            <div class="logo-image">
                <img src="imgpage/dmlogo.png" alt="">
            </div>

            <span class="logo_name"> <?php echo $_SESSION['admin_name'] ?> </span>
        </div>

        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="#">
                    <i class="uil uil-estate"></i>
                    <span class="link-name">Dahsboard</span>
                </a></li>
                <li><a href="#">
                    <i class="uil uil-files-landscapes"></i>
                    <span class="link-name">Content</span>
                </a></li>
                <li><a href="#">
                    <i class="uil uil-chart"></i>
                    <span class="link-name">Analytics</span>
                </a></li>
                <li><a href="#">
                    <i class="uil uil-thumbs-up"></i>
                    <span class="link-name">Like</span>
                </a></li>
                <li><a href="#">
                    <i class="uil uil-comments"></i>
                    <span class="link-name">Comment</span>
                </a></li>
                <li><a href="#">
                    <i class="uil uil-share"></i>
                    <span class="link-name">Share</span>
                </a></li>
            </ul>
            
            <ul class="logout-mode">
                <li><a href="logout.php">
                    <i class="uil uil-signout"></i>
                    <span class="link-name">Logout</span>
                </a></li>

                <li class="mode">
                    <a href="#">
                        <i class="uil uil-moon"></i>
                    <span class="link-name">Dark Mode</span>
                </a>

                <div class="mode-toggle">
                  <span class="switch"></span>
                </div>
            </li>
            </ul>
        </div>
    </nav>

    <section class="dashboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>

            <div class="search-box">
                <i class="uil uil-search"></i>
                <input type="text" placeholder="Search here...">
            </div>
            
            <img src="imgpage/defaulticon.jpeg" alt="">
        </div>

        <div class="dash-content">
            <div class="overview">
                <div class="title_produk">
                    
                    <span class="text"><i class="fa-solid fa-cart-plus"></i> Tambah Produk</span>
            </div>
                <form action="proses.php" method="POST">
                    <div class="produk_details">
                        <div class="input-box">
                            <span>Nama Produk</span>
                            <input type="text" name="name" placeholder="Masukkan Produk yang ditambahkan" required>
                        </div>
                        <div class="input-box">
                            <span>Harga Produk</span>
                            <input type="text" name="harga" placeholder="Masukkan Harga Produk" required>
                        </div>
                        <div class="input-box">
                            <span>Game Produk</span>
                            <select name="game" id="game">
                                <option selected>Nama Game</option>
                                <option value="blackclover">BlackClover</option>
                                <option value="ClashOfClans">Clash Of Clans</option>
                                <option value="ClashRoyale">Clash Royale</option>
                                <option value="EAFCMobile">EA FC Mobile</option>
                                <option value="FreeFire">Free Fire</option>
                                <option value="fornite">Fornite</option>
                                <option value="GenshinImpact">Genshin Impact</option>
                                <option value="Honkai:Impact">Honkai Impact 3</option>
                                <option value="Honkai:StarRail">Honkai StarRail</option>
                                <option value="LOL:WildRift">League Of Legends: WildRift</option>
                                <option value="MobileLegend">Mobile Legend: BANG BANG</option>
                                <option value="pubg">PUBG Mobile</option>
                                <option value="Valorant">Valorant</option>
                            </select>
                        </div>
                        <div class="button">
                            <input type="submit" name="aksi" value="Tambahkan">
                        </div>
                    </div>
                </form>            
        </div>
    </section>

    <script src="script.js"></script>
</body>
</html>