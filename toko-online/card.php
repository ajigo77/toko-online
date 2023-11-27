<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Portofolio</title>

    <!-- FAVICON -->
    <link rel="shortcut icon" href="image/src/fav-icon.png" type="image/png">

    <!-- FONT AWESOME CDN LINK -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- BOX ICONS CDN LINK -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- CDN FORM JQUERY -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <!-- INTERNAL CSS -->
    <style>
        * {
            margin:0;
            padding:0;
            box-sizing: border-box;
            font-family: 'Arial';
        }

        header {
            position: fixed;
            top:0;
            left:0;
            width: 100%;
            box-shadow: 1px 1px 8px #9DB2BF;
            padding:35px 60px;
            display:flex;
            justify-content: space-between;
            align-items: center;
            z-index: 1;
            background-color:#fff;
        }

        .logo {
            display: inline;
            user-select: none;
            margin:0px 0px 8px 0px;
        }

        .brand-logo img {
            left:0;
            top: 0;
            margin:15px 50px;
            width: 100px;
            height: 60px;
            position: fixed;
            float: left;
        }

        .navigation a {
            position: relative;
            font-size: 20px;
            color: #219C90;
            text-decoration: none;
            font-weight: 450;
            margin-left:30px;
        }

        .navigation a i {
            display: inline;
            font-size: 20px;
            margin-right: 3px;
            top: 15px;
        }

        .navigation a:hover {
            color: #219C90;
        }

        .navigation a::after {
            content: '';
            position: absolute;
            width: 100%;
            height: 3px;
            border-radius: 4px;
            background-color: #219C90;
            left: 0;
            bottom: -5px;
            transform: scaleX(0);
            transition: transform .2s;
            transform-origin: right;
        }

        .navigation a:hover::after {
            transform-origin: left;
            transform: scaleX(1);
        }

        /*CONTENT*/
        .container {
            box-sizing: border-box;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 30px 30px;
            padding: 30px 30px;
            align-items: center;
            min-height: 100vh;
            font-family: 'Arial';
            position:relative;
        }

        .container .card {
            overflow: hidden;
            width: 350px;
            height: 300px;
            background: #fff;
            display: flex;
            border-radius: 10px;
            box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 10px 0px;
            justify-content: center;
            transition: .5s;
            position: relative;
        }

        .container .card:hover {
            height: 420px;
        }

        .container .card .img-box {
            position: absolute;
            width: 280px;
            height: 220px;
            top: 30px;
            border-radius: 10px;
            transition: 0.5s;
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }

        .container .card .img-box i {
            position: absolute;
            font-size:18px;
            float:right;
            right:8px;
            top:8px;
            z-index: 1;
            background-color:#F0F0F0;
            padding:5px;
            border-radius:18px;
            cursor:pointer;
            display:none;
            opacity:70%;
        }

        .container .card .img-box i:hover {
            background-color:#B4B4B3;
        }

        .container .card:hover .img-box {
            top:-25px;
            transform: scale(0.65);
            box-shadow: 5px 10px 50px rgba(0,0,0,0.13);
        }

        .container .card:hover .img-box i {
            display:flex;
        }

        .container .card .content {
            position: absolute;
            width: 100%;
            padding: 0 60px;
            text-align: center;
            top: 260px;
            transition: 0.5s;
            overflow: hidden;
        }

        .container .card .img-box img {
            position: absolute;
            top:0;
            left:0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            cursor: pointer;
        }

        .container .card:hover .content {
            height: 220px;
            top:180px;
        }

        .container .card .content h2 {
            font-size: 1.5em;
            font-weight: 450;
            color:#219C90;
            margin-bottom: 10px;
        }

        .container .card .content p {
            font-size: 1.1em;
            font-weight: 400;
            color:#444;
            margin-top: 15px;
        }

        .container .card .content a {
            display: flex;
            width: 50%;
            line-height: 45px;
            transform: translate(0);
            height: 45px;
            background-color:#219C90;
            color: #fff;
            text-decoration: none;
            text-align: center;
            margin: 10px 50px;
            border-radius: 100px;
            justify-content: center;
            align-items: center;
            transition: .3s;
        }

        .container .card .content a:hover {
            color: #219C90;
            border: 1px solid #219C90;
            background-color: #fff;
        }
        
        /* STYLE FOR POP UP */
        .products-preview {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.3);
            backdrop-filter: blur(5px);
            justify-content: center;
            align-items: center;
            z-index: 1;
            display: none;
        }

        .products-preview .preview {
            background: #fff;
            border-radius: 10px;
            padding: 40px 30px;
            max-width: 500px;
            min-height: 500px;
            text-align: center;
            position: relative;
        }
        
        .products-preview .preview.active {
            display: inline-block;
        }

        .products-preview .preview .fa-times {
            position: absolute;
            top: 1rem;
            right: 1.5rem;
            cursor: pointer;
            color: #3a3c3d;
            font-size: 1.5rem;
            width: 40px;
            height: 40px;
            border-radius: 30px;
            background-color: #fff;
            padding: 8px;
            transition: 0.3s;
        }

        .products-preview .preview .fa-times:hover {
            background-color: #DDE6ED;
            transform: rotate(90deg);
            color: #219C90;
        }

        .products-preview .preview h3 {
            color: #444;
            font-size: 1.6rem;
            text-transform: capitalize;
        }

        .products-preview .preview .stars {
            padding: 1rem 0;
        }

        .products-preview .preview .stars i {
            font-size: 1.3rem;
            color: #F4CE14;
        }

        .products-preview .preview .stars span {
            color: #999;
            font-size: 1.1rem;
            margin-left: 5px;
        }

        .products-preview .preview p {
            line-height: 1.5;
            padding: 1rem  0;
            font-size: 1.3rem;
            color: #777;
        }

        .products-preview .preview .price {
            padding: 1rem 0;
            font-size: 1.5rem;
            color: #444;
        }

        .products-preview .preview .buttons {
            display: flex;
            gap: 1rem;
            margin-top: 1rem;
        }
        
        .products-preview .preview .buttons a {
            border-radius: 100px;
            flex: 1 1 16rem;
            padding: 12px;
            font-size: 1.3rem;
            color: #444;
            border: 1px solid #444;
            text-decoration: none;
            margin-bottom: 6px;
        }

        .products-preview .preview .buttons i {
            font-size: 22px;
            margin: 5px 2px;
            line-height: 1rem;
        }

        .products-preview .preview .buttons a.buy {
            background-color: #219C90;
            color: #fff;
            border: none;
        }

        .products-preview .preview .buttons a.buy:hover {
            background-color: #008170;
        }

        .products-preview .preview .buttons a.cart:hover {
            color: #fff;
            background-color: #444;
        }

        .judul {
            display:flex;
        }

        .judul h2 {
            font-family:'Arial';
            font-size:22px;
            font-weight:480;
            transform:translateY(70px);
            padding:15px 30px;
            margin:50px 35px;
            color: #219C90;
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">
            <div class="brand-logo"><img src="image/src/logo-pkk.png"></div>
        </div>
        <nav class="navigation">
            <a href="#profile">Profile</a>
            <a href="#kategori">Kategori</a>
            <a href="#skill">Skill</a>
            <a href="card.php">Produk</a>
            <a href="login.php" class="sign-in"><i class='bx bxs-user-circle'></i> Sign in</a>
            <a href="register.php" class="sign-in"><i class='bx bx-exit'></i> Sign up</a>
        </nav>
    </header>
    <!--CONTENT SEPATU 1-->
    <div class="judul">
        <h2>Produk Baru</h2>
    </div>
    <section id="animals">
        <div class="container">
            <div class="card" data-name="p-1">
                <div class="img-box">
                    <i class='bx bx-dots-vertical-rounded'></i>
                    <img src="image/src/sepatu/sepatu-1.jpg">
                </div>
                <div class="content">
                    <h2>Air Jordan</h2>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum natus odit quaerat iure eaque atque.</p>
                    <a href="#">Lihat</a>
                </div>
            </div>
            <div class="card" data-name="p-2">
                <div class="img-box">
                    <i class='bx bx-dots-vertical-rounded'></i>
                    <img src="image/src/sepatu/sepatu-2.jpg">
                </div>
                <div class="content">
                    <h2>Louis Vuitton</h2>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum natus odit quaerat iure eaque atque.</p>
                    <a href="#">Lihat</a>
                </div>
            </div>
            <div class="card" data-name="p-3">
                <div class="img-box">
                    <i class='bx bx-dots-vertical-rounded'></i>
                    <img src="image/src/sepatu/sepatu-3.jpg">
                </div>
                <div class="content">
                    <h2>Balenciaga</h2>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum natus odit quaerat iure eaque atque.</p>
                    <a href="#">Lihat</a>
                </div>
            </div>
            <div class="card" data-name="p-4">
                <div class="img-box">
                    <i class='bx bx-dots-vertical-rounded'></i>
                    <img src="image/src/sepatu/sepatu-4.jpg">
                </div>
                <div class="content">
                    <h2>Prada</h2>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum natus odit quaerat iure eaque atque.</p>
                    <a href="#">Lihat</a>
                </div>
            </div>
            <div class="card" data-name="p-5">
                <div class="img-box">
                    <i class='bx bx-dots-vertical-rounded'></i>
                    <img src="image/src/sepatu/sepatu-5.jpg">
                </div>
                <div class="content">
                    <h2>Yeezy</h2>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum natus odit quaerat iure eaque atque.</p>
                    <a href="#">Lihat</a>
                </div>
            </div>
            <div class="card" data-name="p-6">
                <div class="img-box">
                    <i class='bx bx-dots-vertical-rounded'></i>
                    <img src="image/src/sepatu/sepatu-6.jpg">
                </div>
                <div class="content">
                    <h2>Off-White</h2>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum natus odit quaerat iure eaque atque.</p>
                    <a href="#">Lihat</a>
                </div>
            </div>
            <div class="card" data-name="p-7">
                <div class="img-box">
                    <i class='bx bx-dots-vertical-rounded'></i>
                    <img src="image/src/sepatu/sepatu-7.jpg">
                </div>
                <div class="content">
                    <h2>Versace</h2>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum natus odit quaerat iure eaque atque.</p>
                    <a href="#">Lihat</a>
                </div>
            </div>
            <div class="card" data-name="p-8">
                <div class="img-box">
                    <i class='bx bx-dots-vertical-rounded'></i>
                    <img src="image/src/sepatu/sepatu-8.jpg">
                </div>
                <div class="content">
                    <h2>Puma</h2>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum natus odit quaerat iure eaque atque.</p>
                    <a href="#">Lihat</a>
                </div>
            </div>
            <div class="card" data-name="p-9">
                <div class="img-box">
                    <i class='bx bx-dots-vertical-rounded'></i>
                    <img src="image/src/sepatu/sepatu-9.jpg">
                </div>
                <div class="content">
                    <h2>Fendi</h2>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum natus odit quaerat iure eaque atque.</p>
                    <a href="#">Lihat</a>
                </div>
            </div>
            <div class="card" data-name="p-10">
                <div class="img-box">
                    <i class='bx bx-dots-vertical-rounded'></i>
                    <img src="image/src/sepatu/sepatu-10.jpg">
                </div>
                <div class="content">
                    <h2>New Balance</h2>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum natus odit quaerat iure eaque atque.</p>
                    <a href="#">Lihat</a>
                </div>
            </div>
            <div class="card" data-name="p-11">
                <div class="img-box">
                    <i class='bx bx-dots-vertical-rounded'></i>
                    <img src="image/src/sepatu/sepatu-11.jpg">
                </div>
                <div class="content">
                    <h2>Converse</h2>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum natus odit quaerat iure eaque atque.</p>
                    <a href="#">Lihat</a>
                </div>
            </div>
            <div class="card" data-name="p-12">
                <div class="img-box">
                    <i class='bx bx-dots-vertical-rounded'></i>
                    <img src="image/src/sepatu/sepatu-12.jpg">
                </div>
                <div class="content">
                    <h2>Reebok</h2>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum natus odit quaerat iure eaque atque.</p>
                    <a href="#">Lihat</a>
                </div>
            </div>
        </div>
    </section>

    <!--CONTENT SEPATU 2-->
    <section id="plant">
        <div class="container">
            <div class="card" data-name="p-13">
                <div class="img-box">
                    <i class='bx bx-dots-vertical-rounded'></i>
                    <img src="image/src/sepatu/sepatu-13.jpg">
                </div>
                <div class="content">
                    <h2>Maison Margiela</h2>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum natus odit quaerat iure eaque atque.</p>
                    <a href="#">Lihat</a>
                </div>
            </div>
            <div class="card" data-name="p-14">
                <div class="img-box">
                    <i class='bx bx-dots-vertical-rounded'></i>
                    <img src="image/src/sepatu/sepatu-14.jpg">
                </div>
                <div class="content">
                    <h2>Alexander McQueen</h2>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum natus odit quaerat iure eaque atque.</p>
                    <a href="#">Lihat</a>
                </div>
            </div>
            <div class="card" data-name="p-15">
                <div class="img-box">
                    <i class='bx bx-dots-vertical-rounded'></i>
                    <img src="image/src/sepatu/sepatu-15.jpg">
                </div>
                <div class="content">
                    <h2>Ventage</h2>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum natus odit quaerat iure eaque atque.</p>
                    <a href="#">Lihat</a>
                </div>
            </div>
            <div class="card" data-name="p-16">
                <div class="img-box">
                    <i class='bx bx-dots-vertical-rounded'></i>
                    <img src="image/src/sepatu/sepatu-16.jpg">
                </div>
                <div class="content">
                    <h2>Bottega Venetta</h2>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum natus odit quaerat iure eaque atque.</p>
                    <a href="#">Lihat</a>
                </div>
            </div>
            <div class="card" data-name="p-17">
                <div class="img-box">
                    <i class='bx bx-dots-vertical-rounded'></i>
                    <img src="image/src/sepatu/sepatu-17.jpg">
                </div>
                <div class="content">
                    <h2>Salvatore Ferragamo</h2>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum natus odit quaerat iure eaque atque.</p>
                    <a href="#">Lihat</a>
                </div>
            </div>
            <div class="card" data-name="p-18">
                <div class="img-box">
                    <i class='bx bx-dots-vertical-rounded'></i>
                    <img src="image/src/sepatu/sepatu-18.jpg">
                </div>
                <div class="content">
                    <h2>Jimmy Choo</h2>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum natus odit quaerat iure eaque atque.</p>
                    <a href="#">Lihat</a>
                </div>
            </div>
            <div class="card" data-name="p-19">
                <div class="img-box">
                    <i class='bx bx-dots-vertical-rounded'></i>
                    <img src="image/src/sepatu/sepatu-19.jpg">
                </div>
                <div class="content">
                    <h2>Berluti</h2>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum natus odit quaerat iure eaque atque.</p>
                    <a href="#">Lihat</a>
                </div>
            </div>
            <div class="card" data-name="p-20">
                <div class="img-box">
                    <i class='bx bx-dots-vertical-rounded'></i>
                    <img src="image/src/sepatu/sepatu-20.jpg">
                </div>
                <div class="content">
                    <h2>Buscemi</h2>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum natus odit quaerat iure eaque atque.</p>
                    <a href="#">Lihat</a>
                </div>
            </div>
            <div class="card" data-name="p-21">
                <div class="img-box">
                    <i class='bx bx-dots-vertical-rounded'></i>
                    <img src="image/src/sepatu/sepatu-21.jpg">
                </div>
                <div class="content">
                    <h2>Tom Ford</h2>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum natus odit quaerat iure eaque atque.</p>
                    <a href="#">Lihat</a>
                </div>
            </div>
            <div class="card" data-name="p-22">
                <div class="img-box">
                    <i class='bx bx-dots-vertical-rounded'></i>
                    <img src="image/src/sepatu/sepatu-22.jpg">
                </div>
                <div class="content">
                    <h2>Giuseppe Zanotti</h2>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum natus odit quaerat iure eaque atque.</p>
                    <a href="#">Lihat</a>
                </div>
            </div>
            <div class="card" data-name="p-23">
                <div class="img-box">
                    <i class='bx bx-dots-vertical-rounded'></i>
                    <img src="image/src/sepatu/sepatu-23.jpg">
                </div>
                <div class="content">
                    <h2>Rick Owens</h2>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum natus odit quaerat iure eaque atque.</p>
                    <a href="#">Lihat</a>
                </div>
            </div>
            <div class="card" data-name="p-24">
                <div class="img-box">
                    <i class='bx bx-dots-vertical-rounded'></i>
                    <img src="image/src/sepatu/sepatu-24.jpg">
                </div>
                <div class="content">
                    <h2>Saint Laurent</h2>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum natus odit quaerat iure eaque atque.</p>
                    <a href="#">Lihat</a>
                </div>
            </div>
        </div>
    </section>

    <!-- POP UP -->
    <div class="products-preview">
            <div class="preview" data-target="p-1">
                <i class="fas fa-times" data-toggle="tooltip" title="close"></i>
                <img src="image/src/sepatu/sepatu-1.jpg" width="300" height="300">
                <h3>Air Jordan</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <span>(250)</span>
                </div>
                <p>Thank you for choosing our online store. Explore our latest collections and enjoy exclusive discounts.</p>
                <div class="price">$2.000</div>
                <div class="buttons">
                    <a href="#" class="buy"><i class='bx bx-crown'></i> Buy Now</a>
                    <a href="#" class="cart"><i class='bx bx-cart-add'></i> Add to cart</a>
                </div>
            </div>
            <div class="preview" data-target="p-2">
                <i class="fas fa-times" data-toggle="tooltip" title="close"></i>
                <img src="image/src/sepatu/sepatu-2.jpg" width="300" height="300">
                <h3>louis vuitton</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <span>(250)</span>
                </div>
                <p>Thank you for choosing our online store. Explore our latest collections and enjoy exclusive discounts.</p>
                <div class="price">$2.000</div>
                <div class="buttons">
                    <a href="#" class="buy"><i class='bx bx-crown'></i> Buy Now</a>
                    <a href="#" class="cart"><i class='bx bx-cart-add'></i> Add to cart</a>
                </div>
            </div>
            <div class="preview" data-target="p-3">
                <i class="fas fa-times" data-toggle="tooltip" title="close"></i>
                <img src="image/src/sepatu/sepatu-3.jpg" width="300" height="300">
                <h3>balenciaga</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <span>(120)</span>
                </div>
                <p>Thank you for choosing our online store. Explore our latest collections and enjoy exclusive discounts.</p>
                <div class="price">$600</div>
                <div class="buttons">
                    <a href="#" class="buy"><i class='bx bx-crown'></i> Buy Now</a>
                    <a href="#" class="cart"><i class='bx bx-cart-add'></i> Add to cart</a>
                </div>
            </div>
            <div class="preview" data-target="p-4">
                <i class="fas fa-times" data-toggle="tooltip" title="close"></i>
                <img src="image/src/sepatu/sepatu-4.jpg" width="300" height="300">
                <h3>prada</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <span>(50)</span>
                </div>
                <p>Thank you for choosing our online store. Explore our latest collections and enjoy exclusive discounts.</p>
                <div class="price">$200</div>
                <div class="buttons">
                    <a href="#" class="buy"><i class='bx bx-crown'></i> Buy Now</a>
                    <a href="#" class="cart"><i class='bx bx-cart-add'></i> Add to cart</a>
                </div>
            </div>
            <div class="preview" data-target="p-5">
                <i class="fas fa-times" data-toggle="tooltip" title="close"></i>
                <img src="image/src/sepatu/sepatu-5.jpg" width="300" height="300">
                <h3>yezzy</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <span>(920)</span>
                </div>
                <p>Thank you for choosing our online store. Explore our latest collections and enjoy exclusive discounts.</p>
                <div class="price">$25.000</div>
                <div class="buttons">
                    <a href="#" class="buy"><i class='bx bx-crown'></i> Buy Now</a>
                    <a href="#" class="cart"><i class='bx bx-cart-add'></i> Add to cart</a>
                </div>
            </div>
            <div class="preview" data-target="p-6">
                <i class="fas fa-times" data-toggle="tooltip" title="close"></i>
                <img src="image/src/sepatu/sepatu-6.jpg" width="300" height="300">
                <h3>off white</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <span>(850)</span>
                </div>
                <p>Thank you for choosing our online store. Explore our latest collections and enjoy exclusive discounts.</p>
                <div class="price">$20.000</div>
                <div class="buttons">
                    <a href="#" class="buy"><i class='bx bx-crown'></i> Buy Now</a>
                    <a href="#" class="cart"><i class='bx bx-cart-add'></i> Add to cart</a>
                </div>
            </div>
            <div class="preview" data-target="p-7">
                <i class="fas fa-times" data-toggle="tooltip" title="close"></i>
                <img src="image/src/sepatu/sepatu-7.jpg" width="300" height="300">
                <h3>vercase</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <span>(300)</span>
                </div>
                <p>Thank you for choosing our online store. Explore our latest collections and enjoy exclusive discounts.</p>
                <div class="price">$2.000</div>
                <div class="buttons">
                    <a href="#" class="buy"><i class='bx bx-crown'></i> Buy Now</a>
                    <a href="#" class="cart"><i class='bx bx-cart-add'></i> Add to cart</a>
                </div>
            </div>
            <div class="preview" data-target="p-8">
                <i class="fas fa-times" data-toggle="tooltip" title="close"></i>
                <img src="image/src/sepatu/sepatu-8.jpg" width="300" height="300">
                <h3>puma</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <span>(200)</span>
                </div>
                <p>Thank you for choosing our online store. Explore our latest collections and enjoy exclusive discounts.</p>
                <div class="price">$2.000</div>
                <div class="buttons">
                    <a href="#" class="buy"><i class='bx bx-crown'></i> Buy Now</a>
                    <a href="#" class="cart"><i class='bx bx-cart-add'></i> Add to cart</a>
                </div>
            </div>
            <div class="preview" data-target="p-9">
                <i class="fas fa-times" data-toggle="tooltip" title="close"></i>
                <img src="image/src/sepatu/sepatu-9.jpg" width="300" height="300">
                <h3>fendi</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <span>(500)</span>
                </div>
                <p>Thank you for choosing our online store. Explore our latest collections and enjoy exclusive discounts.</p>
                <div class="price">$4.000</div>
                <div class="buttons">
                    <a href="#" class="buy"><i class='bx bx-crown'></i> Buy Now</a>
                    <a href="#" class="cart"><i class='bx bx-cart-add'></i> Add to cart</a>
                </div>
            </div>
            <div class="preview" data-target="p-10">
                <i class="fas fa-times" data-toggle="tooltip" title="close"></i>
                <img src="image/src/sepatu/sepatu-10.jpg" width="300" height="300">
                <h3>new balance</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <span>(50)</span>
                </div>
                <p>Thank you for choosing our online store. Explore our latest collections and enjoy exclusive discounts.</p>
                <div class="price">$300</div>
                <div class="buttons">
                    <a href="#" class="buy"><i class='bx bx-crown'></i> Buy Now</a>
                    <a href="#" class="cart"><i class='bx bx-cart-add'></i> Add to cart</a>
                </div>
            </div>
            <div class="preview" data-target="p-11">
                <i class="fas fa-times" data-toggle="tooltip" title="close"></i>
                <img src="image/src/sepatu/sepatu-11.jpg" width="300" height="300">
                <h3>converse</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <span>(210)</span>
                </div>
                <p>Thank you for choosing our online store. Explore our latest collections and enjoy exclusive discounts.</p>
                <div class="price">$3.000</div>
                <div class="buttons">
                    <a href="#" class="buy"><i class='bx bx-crown'></i> Buy Now</a>
                    <a href="#" class="cart"><i class='bx bx-cart-add'></i> Add to cart</a>
                </div>
            </div>
            <div class="preview" data-target="p-12">
                <i class="fas fa-times" data-toggle="tooltip" title="close"></i>
                <img src="image/src/sepatu/sepatu-12.jpg" width="300" height="300">
                <h3>reebok</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <span>(380)</span>
                </div>
                <p>Thank you for choosing our online store. Explore our latest collections and enjoy exclusive discounts.</p>
                <div class="price">$5.000</div>
                <div class="buttons">
                    <a href="#" class="buy"><i class='bx bx-crown'></i> Buy Now</a>
                    <a href="#" class="cart"><i class='bx bx-cart-add'></i> Add to cart</a>
                </div>
            </div>
            <div class="preview" data-target="p-13">
                <i class="fas fa-times" data-toggle="tooltip" title="close"></i>
                <img src="image/src/sepatu/sepatu-13.jpg" width="300" height="300">
                <h3>maison margiela</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <span>(200)</span>
                </div>
                <p>Thank you for choosing our online store. Explore our latest collections and enjoy exclusive discounts.</p>
                <div class="price">$1.000</div>
                <div class="buttons">
                    <a href="#" class="buy"><i class='bx bx-crown'></i> Buy Now</a>
                    <a href="#" class="cart"><i class='bx bx-cart-add'></i> Add to cart</a>
                </div>
            </div>
            <div class="preview" data-target="p-14">
                <i class="fas fa-times" data-toggle="tooltip" title="close"></i>
                <img src="image/src/sepatu/sepatu-14.jpg" width="300" height="300">
                <h3>Alexander McQueen</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <span>(180)</span>
                </div>
                <p>Thank you for choosing our online store. Explore our latest collections and enjoy exclusive discounts.</p>
                <div class="price">$800</div>
                <div class="buttons">
                    <a href="#" class="buy"><i class='bx bx-crown'></i> Buy Now</a>
                    <a href="#" class="cart"><i class='bx bx-cart-add'></i> Add to cart</a>
                </div>
            </div>
            <div class="preview" data-target="p-15">
                <i class="fas fa-times" data-toggle="tooltip" title="close"></i>
                <img src="image/src/sepatu/sepatu-15.jpg" width="300" height="300">
                <h3>ventage</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <span>(450)</span>
                </div>
                <p>Thank you for choosing our online store. Explore our latest collections and enjoy exclusive discounts.</p>
                <div class="price">$10.000</div>
                <div class="buttons">
                    <a href="#" class="buy"><i class='bx bx-crown'></i> Buy Now</a>
                    <a href="#" class="cart"><i class='bx bx-cart-add'></i> Add to cart</a>
                </div>
            </div>
            <div class="preview" data-target="p-16">
                <i class="fas fa-times" data-toggle="tooltip" title="close"></i>
                <img src="image/src/sepatu/sepatu-16.jpg" width="300" height="300">
                <h3>bottege venetta</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <span>(400)</span>
                </div>
                <p>Thank you for choosing our online store. Explore our latest collections and enjoy exclusive discounts.</p>
                <div class="price">$7.000</div>
                <div class="buttons">
                    <a href="#" class="buy"><i class='bx bx-crown'></i> Buy Now</a>
                    <a href="#" class="cart"><i class='bx bx-cart-add'></i> Add to cart</a>
                </div>
            </div>
            <div class="preview" data-target="p-17">
                <i class="fas fa-times" data-toggle="tooltip" title="close"></i>
                <img src="image/src/sepatu/sepatu-17.jpg" width="300" height="300">
                <h3>salvatore ferragamo</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <span>(280)</span>
                </div>
                <p>Thank you for choosing our online store. Explore our latest collections and enjoy exclusive discounts.</p>
                <div class="price">$2.000</div>
                <div class="buttons">
                    <a href="#" class="buy"><i class='bx bx-crown'></i> Buy Now</a>
                    <a href="#" class="cart"><i class='bx bx-cart-add'></i> Add to cart</a>
                </div>
            </div>
            <div class="preview" data-target="p-18">
                <i class="fas fa-times" data-toggle="tooltip" title="close"></i>
                <img src="image/src/sepatu/sepatu-18.jpg" width="300" height="300">
                <h3>jimmy choo</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <span>(450)</span>
                </div>
                <p>Thank you for choosing our online store. Explore our latest collections and enjoy exclusive discounts.</p>
                <div class="price">$8.000</div>
                <div class="buttons">
                    <a href="#" class="buy"><i class='bx bx-crown'></i> Buy Now</a>
                    <a href="#" class="cart"><i class='bx bx-cart-add'></i> Add to cart</a>
                </div>
            </div>
            <div class="preview" data-target="p-19">
                <i class="fas fa-times" data-toggle="tooltip" title="close"></i>
                <img src="image/src/sepatu/sepatu-19.jpg" width="300" height="300">
                <h3>berluti</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <span>(60)</span>
                </div>
                <p>Thank you for choosing our online store. Explore our latest collections and enjoy exclusive discounts.</p>
                <div class="price">$400</div>
                <div class="buttons">
                    <a href="#" class="buy"><i class='bx bx-crown'></i> Buy Now</a>
                    <a href="#" class="cart"><i class='bx bx-cart-add'></i> Add to cart</a>
                </div>
            </div>
            <div class="preview" data-target="p-20">
                <i class="fas fa-times" data-toggle="tooltip" title="close"></i>
                <img src="image/src/sepatu/sepatu-20.jpg" width="300" height="300">
                <h3>buscemi</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <span>(300)</span>
                </div>
                <p>Thank you for choosing our online store. Explore our latest collections and enjoy exclusive discounts.</p>
                <div class="price">$3.000</div>
                <div class="buttons">
                    <a href="#" class="buy"><i class='bx bx-crown'></i> Buy Now</a>
                    <a href="#" class="cart"><i class='bx bx-cart-add'></i> Add to cart</a>
                </div>
            </div>
            <div class="preview" data-target="p-21">
                <i class="fas fa-times" data-toggle="tooltip" title="close"></i>
                <img src="image/src/sepatu/sepatu-21.jpg" width="300" height="300">
                <h3>tom ford</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <span>(250)</span>
                </div>
                <p>Thank you for choosing our online store. Explore our latest collections and enjoy exclusive discounts.</p>
                <div class="price">$2.000</div>
                <div class="buttons">
                    <a href="#" class="buy"><i class='bx bx-crown'></i> Buy Now</a>
                    <a href="#" class="cart"><i class='bx bx-cart-add'></i> Add to cart</a>
                </div>
            </div>
            <div class="preview" data-target="p-22">
                <i class="fas fa-times" data-toggle="tooltip" title="close"></i>
                <img src="image/src/sepatu/sepatu-22.jpg" width="300" height="300">
                <h3>giyseppe zanotti</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <span>(450)</span>
                </div>
                <p>Thank you for choosing our online store. Explore our latest collections and enjoy exclusive discounts.</p>
                <div class="price">$8.000</div>
                <div class="buttons">
                    <a href="#" class="buy"><i class='bx bx-crown'></i> Buy Now</a>
                    <a href="#" class="cart"><i class='bx bx-cart-add'></i> Add to cart</a>
                </div>
            </div>
            <div class="preview" data-target="p-23">
                <i class="fas fa-times" data-toggle="tooltip" title="close"></i>
                <img src="image/src/sepatu/sepatu-23.jpg" width="300" height="300">
                <h3>rick owens</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <span>(90)</span>
                </div>
                <p>Thank you for choosing our online store. Explore our latest collections and enjoy exclusive discounts.</p>
                <div class="price">$1.000</div>
                <div class="buttons">
                    <a href="#" class="buy"><i class='bx bx-crown'></i> Buy Now</a>
                    <a href="#" class="cart"><i class='bx bx-cart-add'></i> Add to cart</a>
                </div>
            </div>
            <div class="preview" data-target="p-24">
                <i class="fas fa-times" data-toggle="tooltip" title="close"></i>
                <img src="image/src/sepatu/sepatu-24.jpg" width="300" height="300">
                <h3>siant laurent</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <span>(500)</span>
                </div>
                <p>Thank you for choosing our online store. Explore our latest collections and enjoy exclusive discounts.</p>
                <div class="price">$12.000</div>
                <div class="buttons">
                    <a href="#" class="buy"><i class='bx bx-crown'></i> Buy Now</a>
                    <a href="#" class="cart"><i class='bx bx-cart-add'></i> Add to cart</a>
                </div>
            </div>
        </div>
    
    <!-- EXTERNAL JAVASCRIPT -->
    <script src="card.js"></script>
</body>
</html>