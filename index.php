<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Florist.Premium.</title>


    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">

    <!--css file link-->
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="kontak.css">

    <link rel="stylesheet" href="review.css">



</head>

<body>

    <!--header section starts-->

    <header>

        <input type="checkbox" name="" id="toggler">
        <label for="toggler" class="fas fa-bars"></label>

        <a href="#home" class="logo">florist.premium<span>.</span></a>

        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#about">tentang</a>
            <a href="#products">produk</a>
            <a href="#review">review</a>
            <a href="#contact">kontak</a>
        </nav>

        <div class="icons">
            <a href="#" class="fas fa-heart"></a>
            <a href="cart.php" class="fas fa-shopping-cart"></a>
            <a href="login.php" class="fas fa-user"></a>
        </div>

    </header>

    <!--header section ends-->

    <!--home section starts-->

    <section class="home" id="home">

        <div class="content">
            <h3>Hiasi Kenangan</h3>
            <span>dengan buket bunga cantik</span>
            <p>Ciptakan momen spesial dengan bucket bunga segar yang dirangkai dengan penuh cinta. Kombinasi warna dan aroma yang menawan, bisa untuk segala acara yaitu ulang tahun, anniversary, wisuda, atau sekadar memberi kejutan kepada orang tercinta.</p>
            <a href="#products" class="btn">beli sekarang</a>
        </div>
    </section>
    <!--header section ends-->

    <!--about section starts-->
    <section class="about" id="about">

        <h1 class="heading"><span> tentang </span> kami </h1>

        <div class="row">

            <div class="video-container">
                <video src="videoo.mp4" loop autoplay muted></video>
                <div class="text-overlay">
                    <h3>buket bunga terbaik se-Indonesia</h3>
                </div>
            </div>

            <div class="content">
                <h3>Kenapa pilih kami?</h3>
                <p>Tahukah Anda bahwa Bunga Segar ini dapat meningkatkan suasana hati Anda, mengurangi stres, membantu Anda berkonsentrasi dan membantu Anda tidur lebih nyenyak? Cobalah sendiri.</p>
                <p>Bunga-bunga segar cenderung mati, tetapi kenangan tetap selamanya. Buket bunga ini sangat cocok untuk diberikan untuk acara yang biasanya diabadikan bersamaan dengannya, seperti wisuda, Anniversary, ulang tahun, atau acara penting lainnya.</p>
                <a href="#" class="btn">Pelajari Lebih Lanjut</a>
            </div>

        </div>
    </section>

    </section>
    <!--about section ends-->

    <!--icons section starts-->
    <section class="icons-container">

        <div class="icons">
            <img src="icons1.png" alt="">
            <div class="info">
                <h3>Gratis Ongkir</h3>
                <span>untuk pengiriman ke Jabodetabek</span>
            </div>
        </div>

        <div class="icons">
            <img src="icons2.png" alt="">
            <div class="info">
                <h3>bisa refund dalam 10 hari</h3>
                <span>dijamin uang kembali 100% </span>
            </div>
        </div>

        <div class="icons">
            <img src="icons3.png" alt="">
            <div class="info">
                <h3>terima hadiah & pesanan</h3>
                <span>untuk semua request</span>
            </div>
        </div>

        <div class="icons">
            <img src="icons4.png" alt="">
            <div class="info">
                <h3>Pembayaran mudah</h3>
                <span>gopay, dana, bank transfer</span>
            </div>
        </div>

    </section>
    <!--icons section ends-->

    <!--prodcuts section starts-->

    <section class="products" id="products">

        <h1 class="heading"> produk <span> best seller </span></h1>

        <div class="box-container">

            <div class="box">
                <span class="discount">-50%</span>
                <div class="image">
                    <img src="Carnation.jpg" alt="">
                    <div class="icons">
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="cart-btn">add to cart</a>
                        <a href="#" class="fas fa-share"></a>
                    </div>
                </div>
                <div class="content">
                    <h3>Carnation scarlet queen bouquet</h3>
                    <div class="price"> Rp.325.000 <span>Rp.650.000</span></div>
                </div>
            </div>

            <div class="box">
                <span class="discount">-50%</span>
                <div class="image">
                    <img src="matahari.jpg" alt="">
                    <div class="icons">
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="cart-btn">add to cart</a>
                        <a href="#" class="fas fa-share"></a>
                    </div>
                </div>
                <div class="content">
                    <h3>sun flower</h3>
                    <div class="price"> Rp.442.500 <span>Rp.885.000</span></div>
                </div>
            </div>

            <div class="box">
                <span class="discount">-65%</span>
                <div class="image">
                    <img src="matih.jpg" alt="">
                    <div class="icons">
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="cart-btn">add to cart</a>
                        <a href="#" class="fas fa-share"></a>
                    </div>
                </div>
                <div class="content">
                    <h3>white roses</h3>
                    <div class="price"> Rp.581.750 <span>Rp.895.000</span></div>
                </div>
            </div>

            <div class="box">
                <span class="discount">-35%</span>
                <div class="image">
                    <img src="lily.jpg" alt="">
                    <div class="icons">
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="cart-btn">add to cart</a>
                        <a href="#" class="fas fa-share"></a>
                    </div>
                </div>
                <div class="content">
                    <h3>lily</h3>
                    <div class="price"> Rp.175.000 <span>Rp.500.000</span></div>
                </div>
            </div>

            <div class="box">
                <span class="discount">-65%</span>
                <div class="image">
                    <img src="mawma.jpg" alt="">
                    <div class="icons">
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="cart-btn">add to cart</a>
                        <a href="#" class="fas fa-share"></a>
                    </div>
                </div>
                <div class="content">
                    <h3>red roses</h3>
                    <div class="price"> Rp.581.750 <span>Rp.895.000</span></div>
                </div>
            </div>

            <div class="box">
                <span class="discount">-35%</span>
                <div class="image">
                    <img src="tulip.jpg" alt="">
                    <div class="icons">
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="cart-btn">add to cart</a>
                        <a href="#" class="fas fa-share"></a>
                    </div>
                </div>
                <div class="content">
                    <h3>tulip</h3>
                    <div class="price"> Rp.192.500 <span>Rp.550.000</span></div>
                </div>
            </div>

            <div class="box">
                <span class="discount">-40%</span>
                <div class="image">
                    <img src="hydrangea.jpg" alt="">
                    <div class="icons">
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="cart-btn">add to cart</a>
                        <a href="#" class="fas fa-share"></a>
                    </div>
                </div>
                <div class="content">
                    <h3>hydrangea flower</h3>
                    <div class="price"> Rp.220.000 <span>Rp.550.000</span></div>
                </div>
            </div>

            <div class="box">
                <span class="discount">-45%</span>
                <div class="image">
                    <img src="BabyBreath.jpg" alt="">
                    <div class="icons">
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="cart-btn">add to cart</a>
                        <a href="#" class="fas fa-share"></a>
                    </div>
                </div>
                <div class="content">
                    <h3>Baby Breath</h3>
                    <div class="price"> Rp.157.000 <span>Rp.350.000</span></div>
                </div>
            </div>

            <div class="box">
                <span class="discount">-35%</span>
                <div class="image">
                    <img src="mix.jpg" alt="">
                    <div class="icons">
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="cart-btn">add to cart</a>
                        <a href="#" class="fas fa-share"></a>
                    </div>
                </div>
                <div class="content">
                    <h3>mix flowers</h3>
                    <div class="price"> Rp.227.500 <span>Rp.350.000</span></div>
                </div>
            </div>


        </div>

    </section>

    <!--prodcuts section ends-->

    <!--review section starts-->
    <section class="review" id="review">

        <h1 class="heading"> review <span>pelanggan</span> </h1>

        <div class="box-container">

            <div class="box">
                <img src="asep.jpg" alt="Customer 1">
                <h3>Asep Bengkel</h3>
                <p>"Suka bangett kelopaknya sempurna dan terlihat segar"</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="box">
                <img src="maul.jpg" alt="Customer 2">
                <h3>Bagas Maul</h3>
                <p>"wangi bunganya tahan lama, suka banget kamarku jadi harum bunga asli"</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>

            <div class="box">
                <img src="rara.jpg" alt="Customer 3">
                <h3>Rara Utit</h3>
                <p>"Bunga mawar merah makin tahan lama, setelah di potong"</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>

            <div class="box">
                <img src="syabrina.jpg" alt="Customer 4">
                <h3>Syabrina Nur</h3>
                <p>"Harganya terjangkau tapi kita bisa dapat bunga dengan kualitas premium nih, ga nyesel beli disini"</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>


        </div>

    </section>
    <!--review section ends-->

    <!--contact section starts-->
    <section class="contact" id="contact">

        <h1 class="heading"> <span>Hubungi</span> Kami </h1>

        <div class="row">

            <form action="messages.inc.php" method="post">
                <h3>get in touch</h3>
                <div class="contactus">
                    <input type="text" name="uname" placeholder="your name" required>
                    <input type="email" name="cemail" placeholder="your email" required>
                </div>
                <div class="contactus">
                    <input type="text" name="phone" placeholder="your phone number" required>
                    <input type="text" name="subjects" placeholder="subject" required>
                </div>
                <textarea name="messages" placeholder="your message" rows="10" required></textarea>
                <input type="submit" value="send message" class="btn">
            </form>

            <div class="contact-info">
                <h3>contact info</h3>
                <div class="info">
                    <i class="fas fa-map-marker-alt"></i>
                    <p>Jl.Intinya jalan NO.00, Jakarta, Post 10000</p>
                </div>
                <div class="info">
                    <i class="fas fa-envelope"></i>
                    <p>floristpremiumid@gmail.com</p>
                </div>
                <div class="info">
                    <i class="fas fa-phone"></i>
                    <p>+62 8929-7828-9662</p>
                </div>
                <div class="info">
                    <i class="fas fa-clock"></i>
                    <p>Open: Sen - Jum: 9:00 WIB - 18:00 WIB</p>
                </div>
            </div>

        </div>

    </section>
    <!--contact section ends-->






</body>

</html>