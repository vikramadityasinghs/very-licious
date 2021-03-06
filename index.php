<?php 

include 'config.php';

error_reporting(0);

session_start();

try{
    if (isset($_POST['submit'])) {
        echo `<script>console.log("API called")</script>`;
        $name = $_POST['name'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $date = $_POST['date'];
        $time = $_POST['time'];
        $produce = $_POST['produce'];
        $kg = $_POST['kg'];
    
        $sql = "INSERT INTO admin  (name, email, address, phone, date, time, produce, kg) VALUES ('$name', '$email', '$address', '$phone', '$date', '$time', '$produce', '$kg')";
        $result = mysqli_query($conn, $sql);
            echo "<script>alert(`Thank you! ${name} Your order for ${kg} KG ${produce}  has been booked successfully!`)</script>";
            $name = "";
            $email = "";  
            $address = "";  
            $phone = ""; 
            $date = ""; 
            $time = ""; 
            $produce = ""; 
            $kg = ""; 
        }
}
catch(err) {
        echo `<script>alert($err)</script>`;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
        href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/aos.css">
    <link rel="icon" href="cakefavicon.ico">

    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">


    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="style.css">
    <title>Very Licious</title>
</head>

<body>


    <!-- navigation starts -->
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a href="index.html" class="navbar-brand">Very Licious</a>

            <div class="collpase navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="#" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="#about" class="nav-link">About</a></li>
                    <li class="nav-item"><a href="#gallery" class="nav-link">Gallery</a></li>
                    <li class="nav-item"><a href="#menu" class="nav-link">Menu</a></li>
                    <li class="nav-item"><a href="#testimonial" class="nav-link">Testimonials</a></li>
                    <li class="nav-item"><a href="#chef" class="nav-link">recipes</a></li>
                    <li class="nav-item cta"><a href="#order" class="nav-link">Order Fresh Produce</a></li>
                    <li class="nav-item"><a href="#blog" class="nav-link">Blog</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- navigation ends -->

    <!-- slider  section start -->
    <section class="home-slider owl-carousel js-fullheight">
        <div class="slider-item js-fullheight" style="background-image: url(images/mutton.jpeg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text js-fullheight justify-content-center align-items-center"
                    data-scrollax-parent="true">

                    <div class="col-md-12 col-sm-12 text-center ftco-animate">
                        <span class="subheading">Very Licious</span>
                        <h1 class="mb-4">Fresh Mutton(Biryani Cut)</h1>
                    </div>

                </div>
            </div>
        </div>

        <div class="slider-item js-fullheight" style="background-image: url(images/chicken_skinless.jpeg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text js-fullheight justify-content-center align-items-center"
                    data-scrollax-parent="true">

                    <div class="col-md-12 col-sm-12 text-center ftco-animate">
                        <span class="subheading">Very Licious</span>
                        <h1 class="mb-4">Fresh Chicken(Skinless)</h1>
                    </div>

                </div>
            </div>
        </div>

        <div class="slider-item js-fullheight" style="background-image: url(images/seafood.jpeg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text js-fullheight justify-content-center align-items-center"
                    data-scrollax-parent="true">

                    <div class="col-md-12 col-sm-12 text-center ftco-animate">
                        <span class="subheading">Very Licious</span>
                        <h1 class="mb-4"> Fresh Seafood</h1>
                    </div>

                </div>
            </div>
        </div>

        <div class="slider-item js-fullheight" style="background-image: url(images/cold_cuts.jpeg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text js-fullheight justify-content-center align-items-center"
                    data-scrollax-parent="true">

                    <div class="col-md-12 col-sm-12 text-center ftco-animate">
                        <span class="subheading">Very Licious</span>
                        <h1 class="mb-4">Cold Cuts</h1>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- slider  section end  -->

    <!-- featured section starts  -->
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="featured">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="featured-menus ftco-animate">
                                    <div class="menu-img img" style="background-image: url(images/chicken_fav.jepg);"></div>
                                    <div class="text text-center">
                                        <h3>Chicken</h3>
                                        <p><span>Fresh</span>,
                                            <span>Boneless</span>,<span>Keema</span>,<span>Ready-to Eat</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="featured-menus ftco-animate">
                                    <div class="menu-img img" style="background-image: url(images/fish_fav.jpeg);"></div>
                                    <div class="text text-center">
                                        <h3>Seafood</h3>
                                        <p><span>Fish</span>,
                                            <span>Prawns</span>,<span>Crabs</span>,<span>Shark</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="featured-menus ftco-animate">
                                    <div class="menu-img img" style="background-image: url(images/mutton_fav.jpeg);"></div>
                                    <div class="text text-center">
                                        <h3>Mutton</h3>
                                        <p><span>Fresh Mutton</span>,
                                            <span>Biryani Cut</span>,<span>Keema</span>,<span>Trotters</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="featured-menus ftco-animate">
                                    <div class="menu-img img" style="background-image: url(images/ready_to_cook.png);"></div>
                                    <div class="text text-center">
                                        <h3>Cold Cuts</h3>
                                        <p><span>Salami</span>,
                                            <span>Ham</span>,<span>Sausages</span>,<span>Ready to eat</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- featured section ends  -->


    <!-- about us section starts  -->

    <section class="ftco-wrap-about" id="about">
        <div class="intro">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="intro_content">
                            <div class="intro_subtitle page_subtitle">About Us</div>
                            <div class="intro_title">
                                <h2>Why Very Licious?</h2>
                            </div>
                            <div class="intro_text">
                                <p>Licious is your one-stop fresh meat delivery shop. In here, you get nothing but the freshest meat & seafood, delivered straight to your doorstep. Now you can buy meat online anytime at your convenience. Indulge in our diverse selection: Chicken, Mutton, Seafood (Fish, Prawns, Crabs), Marinades & Cold Cuts. All our products are completely natural and healthy. Once you've experienced Licious, you'll never go back to the old way of buying meat and seafood.

</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-4 col-md-6 intro_col">
                                <div class="intro_image"><img src="images/aboutbg1.jfif" alt="intro"></div>
                            </div>
                            <div class="col-xl-4 col-md-6 intro_col">
                                <div class="intro_image"><img src="images/aboutbg2.jpeg" alt="intro"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-counter img ftco-no-pt" id="section-counter">
        <div class="container">
            <div class="row d-md-flex">
                <div class="col-md-9">
                    <div class="row d-md-flex align-items-center">
                        <div
                            class="col-md-6 col-lg-3 mb-4 mb-lg-0 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18">
                                <div class="text">
                                    <strong class="number" data-number="4">0</strong>
                                    <span>Years of Experience</span>
                                </div>
                            </div>
                        </div>
                        <div
                            class="col-md-6 col-lg-3 mb-4 mb-lg-0 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18">
                                <div class="text">
                                    <strong class="number" data-number="1000">0</strong>
                                    <span>Products</span>
                                </div>
                            </div>
                        </div>
                        <div
                            class="col-md-6 col-lg-3 mb-4 mb-lg-0 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18">
                                <div class="text">
                                    <strong class="number" data-number="5000">0</strong>
                                    <span>Employees</span>
                                </div>
                            </div>
                        </div>
                        <div
                            class="col-md-6 col-lg-3 mb-4 mb-lg-0 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18">
                                <div class="text">
                                    <strong class="number" data-number="1000000">0</strong>
                                    <span>Happy Customers</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center text-md-left">
                    <p>The amount of love gained by you people is just pure and we are keep on improving our services
                        and tastes.</p>
                </div>
            </div>
        </div>
    </section>


    <!-- about us section ends  -->

    <!-- gallery section starts  -->
    <section class="ftco-section bg-light" id="gallery">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title normal-title">
                        <div class="row justify-content-center mb-5 pb-2">
                            <div class="col-md-12 text-center heading-section ftco-animate">
                                <span class="subheading">Gallery</span>
                                <h2 class="mb-4">Our Most Popular Items</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-6 p-0">
                    <div class="gallery__pic">
                        <img src="images/collage1.jpeg" alt="1">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 p-0">
                    <div class="gallery__pic">
                        <img src="images/collage2.jpeg" alt="2">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 p-0">
                    <div class="gallery__pic">
                        <img src="images/collage3.jpeg" alt="3">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 p-0">
                    <div class="gallery__pic">
                        <img src="images/collage4.jpeg" alt="4">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 p-0">
                    <div class="gallery__pic">
                        <img src="images/collage5.jpeg" alt="5">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 p-0">
                    <div class="gallery__pic">
                        <img src="images/collage6.jpeg" alt="6">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 p-0">
                    <div class="gallery__pic">
                        <img src="images/collage7.jpeg" alt="7">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 p-0">
                    <div class="gallery__pic">
                        <img src="images/collage8.jpeg" alt="8">
                    </div>
                </div>
            </div>
        </div>


    </section>
    <!-- gallery section ends  -->

    <!-- menu section starts -->
    <section class="ftco-section" id="menu">
        <div class="container-fluid px-4">
            <div class="row justify-content-center mb-5 pb-2">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <span class="subheading">Specialities</span>
                    <h2 class="mb-4">Our Menu</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-lg-4 menu-wrap">
                    <div class="heading-menu text-center ftco-animate">
                        <h3>Chicken</h3>
                    </div>
                    <div class="menus d-flex ftco-animate">
                        <div class="menu-img img" style="background-image: url(images/chicken_skinless.jpeg);"></div>
                        <div class="text">
                            <div class="d-flex">
                                <div class="one-half">
                                    <h3>Whole Cut(Skinless) Chicken</h3>
                                </div>
                                <div class="one-forth">
                                    <span class="price">???400</span>
                                </div>
                            </div>
                            <p><span>Fresh Produce</span>, <span>Clean</span>, <span>Hygenic</span>, <span>Approx. 8 pieces</span>
                            </p>
                        </div>
                    </div>
                    <div class="menus d-flex ftco-animate">
                        <div class="menu-img img" style="background-image: url(images/menu2.jpg);"></div>
                        <div class="text">
                            <div class="d-flex">
                                <div class="one-half">
                                    <h3>Boneless Chicken</h3>
                                </div>
                                <div class="one-forth">
                                    <span class="price">???399</span>
                                </div>
                            </div>
                            <p><span>Fresh Produce</span>, <span>Clean</span>, <span>Hygenic</span>, <span>Apporx. 20 pieces</span>
                            </p>
                        </div>
                    </div>
                    <div class="menus d-flex ftco-animate">
                        <div class="menu-img img" style="background-image: url(images/menu3.jpg);"></div>
                        <div class="text">
                            <div class="d-flex">
                                <div class="one-half">
                                    <h3>Chicken Keema</h3>
                                </div>
                                <div class="one-forth">
                                    <span class="price">???400</span>
                                </div>
                            </div>
                            <p><span>Freshly Minced</span>, <span>Clean</span>, <span>Hygenic</span>, <span>Apporx. 500 grams</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 menu-wrap">
                    <div class="heading-menu text-center ftco-animate">
                        <h3>Mutton</h3>
                    </div>
                    <div class="menus d-flex ftco-animate">
                        <div class="menu-img img" style="background-image: url(images/menu4.jpg);"></div>
                        <div class="text">
                            <div class="d-flex">
                                <div class="one-half">
                                    <h3>Biryani Cut Mutton</h3>
                                </div>
                                <div class="one-forth">
                                    <span class="price">???450</span>
                                </div>
                            </div>
                            <p><span>Fresh Produce</span>, <span>Clean</span>, <span>Hygenic</span>, <span>Apporx. 10 pieces</span>
                            </p>
                        </div>
                    </div>
                    <div class="menus d-flex ftco-animate">
                        <div class="menu-img img" style="background-image: url(images/menu5.jpg);"></div>
                        <div class="text">
                            <div class="d-flex">
                                <div class="one-half">
                                    <h3>Korma Mutton</h3>
                                </div>
                                <div class="one-forth">
                                    <span class="price">???400</span>
                                </div>
                            </div>
                            <p><span>Fresh Produce</span>, <span>Clean</span>, <span>Hygenic</span>, <span>Apporx. 10 pieces</span>
                            </p>
                        </div>
                    </div>
                    <div class="menus d-flex ftco-animate">
                        <div class="menu-img img" style="background-image: url(images/menu6.jpg);"></div>
                        <div class="text">
                            <div class="d-flex">
                                <div class="one-half">
                                    <h3>Mutton Keema</h3>
                                </div>
                                <div class="one-forth">
                                    <span class="price">???400</span>
                                </div>
                            </div>
                            <p><span>Freshly Minced</span>, <span>Clean</span>, <span>Hygenic</span>, <span>Apporx. 500 grams</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 menu-wrap">
                    <div class="heading-menu text-center ftco-animate">
                        <h3>Seafood</h3>
                    </div>
                    <div class="menus d-flex ftco-animate">
                        <div class="menu-img img" style="background-image: url(images/menu7.jpg);"></div>
                        <div class="text">
                            <div class="d-flex">
                                <div class="one-half">
                                    <h3>Prawns</h3>
                                </div>
                                <div class="one-forth">
                                    <span class="price">???400</span>
                                </div>
                            </div>
                            <p><span>Fresh Produce</span>, <span>Clean</span>, <span>Hygenic</span>, <span>Apporx. 10 pieces</span>   
                        </p>
                        </div>
                    </div>
                    <div class="menus d-flex ftco-animate">
                        <div class="menu-img img" style="background-image: url(images/menu8.jpg);"></div>
                        <div class="text">
                            <div class="d-flex">
                                <div class="one-half">
                                    <h3>Seer (Surmai) Steak</h3>
                                </div>
                                <div class="one-forth">
                                    <span class="price">???675</span>
                                </div>
                            </div>
                            <p><span>Fresh Produce</span>, <span>Clean</span>, <span>Hygenic</span>, <span>Apporx. 10 pieces</span>  
                            </p>
                        </div>
                    </div>
                    <div class="menus d-flex ftco-animate">
                        <div class="menu-img img" style="background-image: url(images/menu9.jpg);"></div>
                        <div class="text">
                            <div class="d-flex">
                                <div class="one-half">
                                    <h3>White Pomfret</h3>
                                </div>
                                <div class="one-forth">
                                    <span class="price">???500</span>
                                </div>
                            </div>
                            <p><span>Fresh Produce</span>, <span>Clean</span>, <span>Hygenic</span>, <span>Apporx. 450 grams</span>  
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- menu section ends -->

    <!-- testimonial section starts -->
    <section class="ftco-section testimony-section img" id="testimonial"
        style="background-image: url(images/bg_1.jpg);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
                    <span class="subheading">Testimonials</span>
                    <h2 class="mb-3">Happy Clients</h2>
                </div>
            </div>
            <div class="row ftco-animate">
                <div class="col-md-12">
                    <div class="carousel-testimony owl-carousel ftco-owl">
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="fa fa-quote-left"></span>
                                </div>
                                <div class="text">
                                    <p class="mb-4">
                                      So happy to write a review for Licious. The chicken is fresh and already clean.Its super convienient and hassle-free. the quality of the produce is very important for me and licious delivered. I cannot speak highly enough about the experience???
                                    </p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/person_1.jpg);"></div>
                                        <div class="pl-3">
                                            <p class="name">Bhuwan</p>
                                            <span class="position">Owner</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="fa fa-quote-left"></span>
                                </div>
                                <div class="text">
                                    <p class="mb-4">
                                        A flavourful and easy chicken recipe, perfect for occasions like dinner party with friends or a get together with family on festivals like Eid or Diwali. It is the most basic and simple chicken recipe to try at home, cooked in less than an hour! Chicken masala can be paired with some steamed rice or any Indian bread of your choice like roti, naan or hot and piping parathas.    
                                    </p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/person_2.jpg);"></div>
                                        <div class="pl-3">
                                            <p class="name">Mayank</p>
                                            <span class="position">Owner</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="fa fa-quote-left"></span>
                                </div>
                                <div class="text">
                                    <p class="mb-4">
                                        While there are many different styles of chicken gravies cooked in different parts of the country, this one has spicy chicken curried in tomatoes and a variety of spices, cooked till soft and finished with cream and coriander leaves.
   
                                    </p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/person_3.jpg);"></div>
                                        <div class="pl-3">
                                            <p class="name">Tanmay</p>
                                            <span class="position">Owner</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="fa fa-quote-left"></span>
                                </div>
                                <div class="text">
                                    <p class="mb-4">
                                        For all the chicken lovers, here is a delicious chicken curry right from yout favourite dhaba! Chicken sauteed in onion tomato masala, flavoured with aromatic spices and served with your favourite Indian bread, dhaba-styled chicken is perfect to satiate your chicken curry cravings. 
                                    </p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/person_4.jpg);"></div>
                                        <div class="pl-3">
                                            <p class="name">Kusshagra</p>
                                            <span class="position">Owner</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="fa fa-quote-left"></span>
                                </div>
                                <div class="text">
                                    <p class="mb-4">
                                        This place is amazing. They sell EVERYTHING, chicken, mutton, seafood, and even ready to eat products!. The products are always clean, and the staff is very friendly. You can place an order very easily. They also have gluten-free options.
                                    </p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/person_1.jpg);"></div>
                                        <div class="pl-3">
                                            <p class="name">sanskriti</p>
                                            <span class="position">Owner</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- testimonial section ends -->

    <!-- staff section --- chef starts -->

    <section class="ftco-section" id="chef">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-2">
                <div class="col-md-12 text-center heading-section ftco-animate">
                    <span class="subheading">Recipes
                    </span>
                    <h2 class="mb-4">From licious to your house</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="staff">
                        <div class="img" style="background-image: url(images/chef4.jpg);"></div>
                        <div class="text pt-4">
                            <h3>Chicken tikka masala</h3>
                            <span class="position mb-2">Time Required: approx. 1 hour</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="staff">
                        <div class="img" style="background-image: url(images/chef1.jpg);"></div>
                        <div class="text pt-4">
                            <h3>Mutton biryani</h3>
                            <span class="position mb-2">Time Required: approx. 2 hour</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="staff">
                        <div class="img" style="background-image: url(images/chef2.jpg);"></div>
                        <div class="text pt-4">
                            <h3>Prawn Curry</h3>
                            <span class="position mb-2">Time Required: approx. 2 hour</span>
                         
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="staff">
                        <div class="img" style="background-image: url(images/chef3.jpg);"></div>
                        <div class="text pt-4">
                            <h3>roasted chicken</h3>
                            <span class="position mb-2">Time Required: approx. 1.5 hour</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- staff section --- chef ends -->

    <!-- order a cake section starts -->
<!-- order a cake section starts -->

<section class="ftco-section img" id="order" style="background-image: url(images/order_bg.jpg);"
        data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-7 ftco-animate makereservation p-4 px-md-5 pb-md-5">
                    <div class="heading-section ftco-animate mb-5 text-center">
                        <span class="subheading">Order</span>
                        <h2 class="mb-4">Your produce</h2>
                    </div>
                    <form action="" method="POST">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Name</label>
                                    <input name="name" type="text" class="form-control" placeholder="John Doe" value="<?php echo $name; ?>" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input name="email" type="email" class="form-control" placeholder="johndoe@gmail.com" value="<?php echo $email; ?>" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Address</label>
                                    <input name="address" type="text" class="form-control" placeholder="123 Avenue Street" value="<?php echo $address; ?>" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Phone</label>
                                    <input name="phone" type="text" class="form-control" placeholder="9874563215" value="<?php echo $phone; ?>" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Date</label>
                                    <input name="date" type="text" class="form-control" id="book_date" placeholder="Date" value="<?php echo $date; ?>" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Time</label>
                                    <input name="time" type="text" class="form-control" id="book_time" placeholder="Time" value="<?php echo $time; ?>" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">produce</label>
                                    <div class="select-wrap one-third">
                                        <div class="icon"><span class="ios-ios-arrow-down"></span></div>
                                        <select name="produce" class="form-control" value="<?php echo $produce; ?>" required>
                                            <option value="Chicken(Boneless)">Chicken(Boneless)</option>
                                            <option value="Chicken keema">Chicken keema</option>
                                            <option value="Mutton(Biryani Cut)">Mutton(Biryani Cut)</option>
                                            <option value="Mutton(Korma Cut)">Mutton(Korma Cut)</option>
                                            <option value="Mutton Keema">Mutton Keema</option>
                                            <option value="Prawns">Prawns</option>
                                            <option value="White Pomfret">White Pomfret</option>
                                            <option value="Seer (Surmai) Steak">Seer (Surmai) Steak</option>
                                        </select>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">kg</label>
                                    <div class="select-wrap one-third">
                                        <div class="icon"><span class="ios-ios-arrow-down"></span></div>
                                        <select name="kg" class="form-control" value="<?php echo $kg; ?>" required>
                                            <option value="0.5">0.5</option>
                                            <option value="1">1</option>
                                            <option value="1.5">1.5</option>
                                            <option value="2.5">2.5</option>
                                            <option value="5">5</option>
                                            <option value="10">10</option>
                                            <option value="Custom">Custom</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 mt-3">
                                <div class="form-group text-center">
                                    <button name="submit" class="btn btn-primary py-3 px-5">
                                        Order Your produce
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- order section ends -->

    <!-- blog section starts -->
    <section class="ftco-section bg-light" id="blog">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <span class="subheading">Blog</span>
                    <h2 class="mb-4">Recent Posts</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="single-cat-widget">
                        <div class="content relative">
                            <div class="overlay overlay-bg"></div>
                            <a href="#" target="_blank">
                                <div class="thumb">
                                    <img src="images/cat-widget1.jpg" alt=""
                                        class="content-image img-fluid d-block mx-auto">
                                </div>
                                <div class="content-details">
                                    <h4 class="content-title mx-auto text-uppercase">Corporate deals</h4>
                                    <span></span>
                                    <p>Very Licious for corporate.</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-cat-widget">
                        <div class="content relative">
                            <div class="overlay overlay-bg"></div>
                            <a href="#" target="_blank">
                                <div class="thumb">
                                    <img src="images/cat-widget2.jpg" alt=""
                                        class="content-image img-fluid d-block mx-auto">
                                </div>
                                <div class="content-details">
                                    <h4 class="content-title mx-auto text-uppercase">Catering services</h4>
                                    <span></span>
                                    <p>Caterig for big events.</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-cat-widget">
                        <div class="content relative">
                            <div class="overlay overlay-bg"></div>
                            <a href="#" target="_blank">
                                <div class="thumb">
                                    <img src="images/cat-widget3.jpg" alt=""
                                        class="content-image img-fluid d-block mx-auto">
                                </div>
                                <div class="content-details">
                                    <h4 class="content-title mx-auto text-uppercase">Covid-19</h4>
                                    <span></span>
                                    <p>How very Licious helped in Battle against COVID 19.</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog section ends -->

    <!-- footer section starts -->
    <section class="ftco-footer ftco-bg-dark ftco-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-6 col-lg-3">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Very Licious</h2>
                        <p>Fresh Chicken, Meat, Seafood available in the variety of cuts. Hygienically vacuum packed. Cook delicious meaty dishes with a wide range of safe, fresh Meats & Seafood from Licious.
                            <br><br><br>
                            verylicious@gmail.com
                            <br>
                            8888888888
                        </p>
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                            <li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Deliverable Hours</h2>
                        <ul class="list-unstyled open-hours">
                            <li class="d-flex"><span>Monday</span><span>9:00 - 24:00</span></li>
                            <li class="d-flex"><span>Tuesday</span><span>9:00 - 24:00</span></li>
                            <li class="d-flex"><span>Wednesday</span><span>9:00 - 24:00</span></li>
                            <li class="d-flex"><span>Thursday</span><span>9:00 - 24:00</span></li>
                            <li class="d-flex"><span>Friday</span><span>9:00 - 02:00</span></li>
                            <li class="d-flex"><span>Saturday</span><span>9:00 - 02:00</span></li>
                            <li class="d-flex"><span>Sunday</span><span> 9:00 - 02:00</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Instagram</h2>
                        <div class="thumb d-sm-flex">
                            <a href="#" class="thumb-menu img" style="background-image: url(images/insta-1.jpg);"></a>
                            <a href="#" class="thumb-menu img" style="background-image: url(images/insta-2.jpg);"></a>
                            <a href="#" class="thumb-menu img" style="background-image: url(images/insta-3.jpg);"></a>
                        </div>
                        <div class="thumb d-sm-flex">
                            <a href="#" class="thumb-menu img" style="background-image: url(images/insta-4.jpg);"></a>
                            <a href="#" class="thumb-menu img" style="background-image: url(images/insta-5.jpg);"></a>
                            <a href="#" class="thumb-menu img" style="background-image: url(images/insta-6.jpg);"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Newsletter</h2>
                        <p>To get Exclusive deals every month subscribe below.</p>
                        <form action="#" class="subscribe-form">
                            <div class="form-group">
                                <input type="text" class="form-control mb-2 text-center"
                                    placeholder="verylicious@gmail.com">
                                <input type="submit" value="Subscribe" class="form-control submit px-3">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- footer section ends -->





    <!-- scripts -->
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/jquery.timepicker.min.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script src="main.js"></script>
</body>

</html>
