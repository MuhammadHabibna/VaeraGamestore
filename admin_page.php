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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="admin_page.css">
     
    <!----===== Iconscout CSS ===== -->
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
                <div class="title">
                    <i class="uil uil-tachometer-fast-alt"></i>
                    <span class="text">Dashboard</span>
            </div>

                <div class="boxes">
                    <div class="box box1">
                        <i class="fa-solid fa-users"></i>
                        <span class="text">Total account</span>
                        <span class="number">
                            <?php
                                $account_query = "SELECT * from user_form";
                                $account_query_run = mysqli_query($conn, $account_query);

                                if($account_total = mysqli_num_rows($account_query_run)){
                                    echo "$account_total";
                                }else {
                                    echo '0';
                                }
                            ?>
                        </span>
                    </div>
                    <div class="box box2">
                        <i class="fa-solid fa-user"></i>
                        <span class="text">
                            Admin Account
                        </span>
                        <span class="number">
                            <?php
                                $account_admin = mysqli_query($conn, "SELECT * from user_form WHERE user_type = 'admin'");

                                if($admin_total= mysqli_num_rows($account_admin)){
                                    echo "$admin_total";
                                }else {
                                    echo "0";
                                }
                            ?>
                        </span>
                    </div>
                    <div class="box box3">
                        <i class="fa-solid fa-circle-user"></i>
                        <span class="text">Users</span>
                        <span class="number">
                            <?php
                                $account_user = mysqli_query($conn, "SELECT * from user_form WHERE user_type = 'user'");

                                if($user_total= mysqli_num_rows($account_user)){
                                    echo "$user_total";
                                }else {
                                    echo "0";
                                }
                            ?>
                        </span>
                        </span>
                    </div>
                </div>
            </div>

        <div class="activity">
                <div class="title">
                    <span class="text"><i class="uil uil-user"></i>Data Akun pengguna</span>
                    <div class="add">
                        <a href="register_form.php">
                            <h1><i class="fa-solid fa-plus"></i>Tambah Akun</h1>
                        </a>
                    </div>
                </div>

            <div class="table-box">
                <div class="activity-data head">
                    <div class="data akun">
                        <p>Nama akun</p>
                    </div>
                    <div class="data email">
                        <p>Email akun</p>
                    </div>
                    <div class="data type">
                        <p>Type akun</p>
                    </div>
                    <div class="data aksi">
                        <p>Aksi</p>
                    </div>
                </div>

                <?php while($result = mysqli_fetch_assoc($account)) { ?>
                    <div class="activity-data">
                    <div class="data akun">
                        <p><?php echo $result['name']; ?></p>
                    </div>
                    <div class="data email">
                        <p><?php echo $result['email']; ?></p>
                    </div>
                    <div class="data type">
                        <p><?php echo $result['user_type']; ?></p>
                    </div>
                    <div class="data aksi">
                        <a href="proses.php?hapus=<?php echo$result['id']; ?>" type="button"
                        onClick="return confirm('Hapus Akun?')">
                            <i class="fa-solid fa-trash"></i>
                        </a>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>

        <div class="activity">
                <div class="title">
                    <span class="text"><i class="uil uil-shopping-cart"></i> Produk Tersedia</span>
                    <div class="add">
                        <a href="kelola_produk.php">
                            <h1><i class="fa-solid fa-plus"></i>Tambah Produk!</h1>
                        </a>
                    </div>
                </div>

                <div class="boxes_produk">
                    <div class="box_produk box1">
                        <i class="fa-solid fa-gamepad"></i>
                        <span class="text">Black Clover</span>
                        <span class="number">
                        <?php
                                $produk_query = "SELECT * from produk_form WHERE game = 'blackclover';";
                                $produk_query_run = mysqli_query($conn, $produk_query);

                                if($produk_total = mysqli_num_rows($produk_query_run)){
                                    echo "$produk_total";
                                }else {
                                    echo '0';
                                }
                            ?>
                        </span>
                    </div>
                    <div class="box_produk box2">
                        <i class="fa-solid fa-gamepad"></i>
                        <span class="text">
                            Clash Of Clans
                        </span>
                        <span class="number">
                        <?php
                                $produk_query = "SELECT * from produk_form WHERE game = 'ClashOfClans';";
                                $produk_query_run = mysqli_query($conn, $produk_query);

                                if($produk_total = mysqli_num_rows($produk_query_run)){
                                    echo "$produk_total";
                                }else {
                                    echo '0';
                                }
                            ?>
                        </span>
                    </div>
                    <div class="box_produk box3">
                        <i class="fa-solid fa-gamepad"></i>
                        <span class="text">
                            Clash Royale
                        </span>
                        <span class="number">
                        <?php
                                $produk_query = "SELECT * from produk_form WHERE game = 'ClashRoyale';";
                                $produk_query_run = mysqli_query($conn, $produk_query);

                                if($produk_total = mysqli_num_rows($produk_query_run)){
                                    echo "$produk_total";
                                }else {
                                    echo '0';
                                }
                            ?>
                        </span>
                        </span>
                    </div>
                    <div class="box_produk box4">
                        <i class="fa-solid fa-gamepad"></i>
                        <span class="text">
                            EA FC Mobile
                        </span>
                        <span class="number">
                        <?php
                                $produk_query = "SELECT * from produk_form WHERE game = 'EAFCMobile';";
                                $produk_query_run = mysqli_query($conn, $produk_query);

                                if($produk_total = mysqli_num_rows($produk_query_run)){
                                    echo "$produk_total";
                                }else {
                                    echo '0';
                                }
                            ?>
                        </span>
                        </span>
                    </div>
                    <div class="box_produk box2">
                        <i class="fa-solid fa-gamepad"></i>
                        <span class="text">Free Fire</span>
                        <span class="number">
                        <?php
                                $produk_query = "SELECT * from produk_form WHERE game = 'FreeFire';";
                                $produk_query_run = mysqli_query($conn, $produk_query);

                                if($produk_total = mysqli_num_rows($produk_query_run)){
                                    echo "$produk_total";
                                }else {
                                    echo '0';
                                }
                            ?>
                        </span>
                    </div>
                    <div class="box_produk box1">
                        <i class="fa-solid fa-gamepad"></i>
                        <span class="text">
                            Genshin Impact
                        </span>
                        <span class="number">
                        <?php
                                $produk_query = "SELECT * from produk_form WHERE game = 'GenshinImpact';";
                                $produk_query_run = mysqli_query($conn, $produk_query);

                                if($produk_total = mysqli_num_rows($produk_query_run)){
                                    echo "$produk_total";
                                }else {
                                    echo '0';
                                }
                            ?>
                        </span>
                    </div>
                    <div class="box_produk box4">
                        <i class="fa-solid fa-gamepad"></i>
                        <span class="text">
                            Honkai: StarRail
                        </span>
                        <span class="number">
                        <?php
                                $produk_query = "SELECT * from produk_form WHERE game = 'Honkai:StarRail';";
                                $produk_query_run = mysqli_query($conn, $produk_query);

                                if($produk_total = mysqli_num_rows($produk_query_run)){
                                    echo "$produk_total";
                                }else {
                                    echo '0';
                                }
                            ?>
                        </span>
                        </span>
                    </div>
                    <div class="box_produk box3">
                        <i class="fa-solid fa-gamepad"></i>
                        <span class="text">
                            Honkai: Impact 3
                        </span>
                        <span class="number">
                        <?php
                                $produk_query = "SELECT * from produk_form WHERE game = 'Honkai:Impact';";
                                $produk_query_run = mysqli_query($conn, $produk_query);

                                if($produk_total = mysqli_num_rows($produk_query_run)){
                                    echo "$produk_total";
                                }else {
                                    echo '0';
                                }
                            ?>
                        </span>
                        </span>
                    </div>
                    <div class="box_produk box3">
                        <i class="fa-solid fa-gamepad"></i>
                        <span class="text">
                            Mobile Legend
                        </span>
                        <span class="number">
                        <?php
                                $produk_query = "SELECT * from produk_form WHERE game = 'MobileLegend';";
                                $produk_query_run = mysqli_query($conn, $produk_query);

                                if($produk_total = mysqli_num_rows($produk_query_run)){
                                    echo "$produk_total";
                                }else {
                                    echo '0';
                                }
                            ?>
                        </span>
                    </div>
                    <div class="box_produk box4">
                        <i class="fa-solid fa-gamepad"></i>
                        <span class="text">
                            PUBG
                        </span>
                        <span class="number">
                        <?php
                                $produk_query = "SELECT * from produk_form WHERE game = 'pubg';";
                                $produk_query_run = mysqli_query($conn, $produk_query);

                                if($produk_total = mysqli_num_rows($produk_query_run)){
                                    echo "$produk_total";
                                }else {
                                    echo '0';
                                }
                            ?>
                        </span>
                    </div>
                    <div class="box_produk box1">
                        <i class="fa-solid fa-computer"></i>
                        <span class="text">
                            Fornite
                        </span>
                        <span class="number">
                        <?php
                                $produk_query = "SELECT * from produk_form WHERE game = 'fornite';";
                                $produk_query_run = mysqli_query($conn, $produk_query);

                                if($produk_total = mysqli_num_rows($produk_query_run)){
                                    echo "$produk_total";
                                }else {
                                    echo '0';
                                }
                            ?>
                        </span>
                        </span>
                    </div>
                    <div class="box_produk box2">
                        <i class="fa-solid fa-computer"></i>
                        <span class="text">
                            LOL: Wild Rift
                        </span>
                        <span class="number">
                        <?php
                                $produk_query = "SELECT * from produk_form WHERE game = 'LOL:WildRift';";
                                $produk_query_run = mysqli_query($conn, $produk_query);

                                if($produk_total = mysqli_num_rows($produk_query_run)){
                                    echo "$produk_total";
                                }else {
                                    echo '0';
                                }
                            ?>
                        </span>
                        </span>
                    </div>
                    <div class="box_produk box4">
                        <i class="fa-solid fa-computer"></i>
                        <span class="text">
                            Valorant
                        </span>
                        <span class="number">
                        <?php
                                $produk_query = "SELECT * from produk_form WHERE game = 'Valorant';";
                                $produk_query_run = mysqli_query($conn, $produk_query);

                                if($produk_total = mysqli_num_rows($produk_query_run)){
                                    echo "$produk_total";
                                }else {
                                    echo '0';
                                }
                            ?>
                        </span>
                        </span>
                    </div>
                </div>

                <div class="table-box">
                <div class="activity-data head">
                    <div class="data no">
                        <p>No. </p>
                    </div>
                    <div class="data nama">
                        <p>Nama Produk</p>
                    </div>
                    <div class="data harga">
                        <p>Harga</p>
                    </div>
                    <div class="data game">
                        <p>Game</p>
                    </div>
                    <div class="data aksi">
                        <p>Aksi</p>
                    </div>
                </div>

                <?php 
                $produk= mysqli_query($conn, "SELECT * FROM produk_form;");
                $no = 0;
                while($result_produk = mysqli_fetch_assoc($produk)) { 
                    $no++;
                    ?>
                    <div class="activity-data">
                    <div class="data no">
                        <p><?php echo $no ?></p>
                    </div>
                    <div class="data nama">
                        <p><?php echo $result_produk['name']; ?></p>
                    </div>
                    <div class="data harga">
                        <p><?php echo $result_produk['price']; ?></p>
                    </div>
                    <div class="data game">
                        <p><?php echo $result_produk['game']; ?></p>
                    </div>
                    <div class="data aksi">
                        <a href="proses.php?hapus=<?php echo$result_produk['id']; ?>" type="button"
                        onClick="return confirm('Hapus Akun?')">
                            <i class="fa-solid fa-trash"></i>
                        </a>
                    </div>
                </div>
                <?php } ?>
            </div>
            </div>
            

        </div>
    </section>
    <script src="admin.js">
    </script>
</body>
</html>