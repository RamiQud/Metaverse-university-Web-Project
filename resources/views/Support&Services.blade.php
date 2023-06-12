<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hello meeting</title>
    <!-- Tab image -->
    <link rel="icon" href="{{ asset('images/metaverse-etp-logo.png') }}" type="image/x-icon">
    <!-- Custom CSS file Lonk -->
    <link rel="stylesheet" href="{{ asset('css/Support&Services-Style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style-slide-swiper.css') }}">
    <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Custom JS file Lonk -->
    <link rel="stylesheet" href="{{ asset('vanilla-tilt.js') }}">
    <link rel="stylesheet" href="{{ asset('js folder/style.js') }}">
    <!-- Font Awesome CDN Link  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <!-- Render All Elements Normally -->
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
</head>

<body>
    <!-- header section starts  -->
    <header class="header">

        <a href="{{ route('index')}}" class="logo">
            <img src="{{ asset('images/m-metaverse-etp-logo.png') }}" alt="">
            <h1>Hello Meeting</h1>
        </a>

        <nav class="navbar">
            <a href="{{ route('index')}}">Home</a>
            <a href="{{ route('Packeges')}}">Packeges</a>
            <a href="{{ route('Creat-Avatar')}}">Create Avatar</a>
            <a href="{{ route('General-Chat')}}">General Chat</a>
            <a href="{{ route('Support&Services')}}">Support & Services</a>
            <a href="{{ route('contact')}}">contact</a>
        </nav>

        <div class="icons">
            <div class="fas fa-search" id="search-btn"></div>
            <span class="material-symbols-outlined" id="cart-btn">account_circle</span>
            <div class="fas fa-bars" id="menu-btn"></div>
        </div>

        <div class="search-form">
            <input type="search" id="search-box" placeholder="search here...">
            <label for="search-box" class="fas fa-search"></label>
        </div>

        <div class="cart-items-container">

            <h1 class="octpous">Profile</h1>
            <a href="{{ route('login')}}" class="btn">Login</a>
            <a href="{{ route('register')}}" class="btn">Sigen up</a>
        </div>

    </header>
    <!-- header section ends -->

    <!-- Start body Section  -->
    <section class="Main-Sirvices-Carts">
        <div class="Carts">
            <div class="Cart-1 Cart-Stayle">
                <img src="{{ asset('images/startup.png') }}">
                <h1>Getting Start</h1>
                <p>Everything you need to know to get started with Hello Metting prodsact and features.</p>
            </div>
            <div class="Cart-2 Cart-Stayle">
                <img src="{{ asset('images/accounting.png') }}">
                <h1>Account Management</h1>
                <p>Manage billing information, get login support, and secure your Hello-Meeting meetings.</p>
            </div>
            <div class="Cart-3 Cart-Stayle">
                <img src="{{ asset('images/technical-support (1).png') }}">
                <h1>Product Support</h1>
                <p>Discover resourses and tools specific to your product.</p>
            </div>
            <div class="Cart-4 Cart-Stayle">
                <img src="{{ asset('images/online-video.png') }}">
                <h1>Learning Center</h1>
                <p>Become a qualified Hello-Metting expert with on-demand and live training options.</p>
            </div>
            <div class="Cart-5 Cart-Stayle">
                <img src="{{ asset('images/conversation.png') }}">
                <h1>Community</h1>
                <p>Find solutions, ask questions and collaborate with Hello-Metting users in General Chat.</p>
            </div>
        </div>
    </section>
    <!-- End body Section  -->
    <!-- Start Video Learning Section -->
    <!-- <div class="Video-Learning-Section">
        <h1>Video Tutorials</h1>
        <div class="fa-angle-right">
            <div class="Campany-Video-Learning">
                <a href="#"><video src="../video/Animated Backgrounds - floatingboxes.mp4" class="Video-Learning-Style" autoplay loop muted playsinline></video></a>
                <a href="#"> <video src="../video/Animated Backgrounds - flyingapps.mp4" class="Video-Learning-Style" autoplay loop muted playsinline></video></a>
                <a href="#"> <video src="../video/Computer Keyboard - 3174.mp4" class="Video-Learning-Style" autoplay loop muted playsinline></video></a>
                <a href="#"> <video src="../video/Computer Keyboard - 3188.mp4" class="Video-Learning-Style" autoplay loop muted playsinline></video></a>
                <a href="#"> <video src="../video/istock-1028550030_preview.mp4" class="Video-Learning-Style" autoplay loop muted playsinline></video></a>
                <a href="#"> <video src="../video/istockphoto-1149298286-640_adpp_is.mp4" class="Video-Learning-Style" autoplay loop muted playsinline></video></a>
                <a href="#"> <video src="../video/istockphoto-1153262889-640_adpp_is.mp4" class="Video-Learning-Style" autoplay loop muted playsinline></video></a>
                <a href="#"> <video src="../video/Motion Graphics - Intro Clips - redtrianglescroll-91.mp4" class="Video-Learning-Style" autoplay loop muted playsinline></video></a>
                <a href="#"> <video src="../video/Motion Graphics - Intro Clips - slidingbackground-91.mp4" class="Video-Learning-Style" autoplay loop muted playsinline></video></a>
                <a href="#"> <video src="../video/Motion Graphics - Intro Clips - spinningcomputer-91.mp4" class="Video-Learning-Style" autoplay loop muted playsinline></video></a>
                <a href="#"> <video src="../video/Motion Graphics - Intro Clips - tictactoe-91.mp4" class="Video-Learning-Style" autoplay loop muted playsinline></video></a>
                <a href="#"> <video src="../video/Planet Earth - 2118.mp4" class="Video-Learning-Style" autoplay loop muted playsinline></video></a>
                <a href="#"> <video src="../video/rainbow-bars-background.mp4" class="Video-Learning-Style" autoplay loop muted playsinline></video></a>
                <a href="#"> <video src="../video/Security - 2176.mp4" class="Video-Learning-Style" autoplay loop muted playsinline></video></a>
                <a href="#"><video src="../video/Security - 2181.mp4" class="Video-Learning-Style" autoplay loop muted
                        playsinline></video></a>
                <a href="#"><video src="../video/triangles-passing-background.mp4" class="Video-Learning-Style" autoplay
                        loop muted playsinline></video></a>
            </div>
        </div>
        <div class="button-transperant">
            <div id="prev" class="fas fa-angle-left"></div>
            <div id="next" class="fas fa-angle-right"></div>
            <div class="swiper-pagination"></div>
        </div>
    </div> -->
    <!-- ********************** -->
    <div class="slide-container swiper">
        <div class="slide-content">
            <div class="card-wrapper swiper-wrapper">
                <div class="card swiper-slide">
                    <div class="Video-content">
                        <span class="overlay"></span>

                        <div class="card-video">
                            <video src="{{ asset('video/istock-1028550030_preview.mp4') }}" class="Video-Learning-Style card-video" autoplay loop muted playsinline></video>
                            <img src="images/profile1.jpg" alt="" class="card-video">
                        </div>
                    </div>
                    <div class="card-content">
                        <h2 class="name">Learn use</h2>
                        <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                        <button class="button">View More</button>
                    </div>
                </div>
                <div class="card swiper-slide">
                    <div class="Video-content">
                        <span class="overlay"></span>

                        <div class="card-video">
                        <video src="{{ asset('video/istock-1028550030_preview.mp4') }}" class="Video-Learning-Style card-video" autoplay loop muted playsinline></video>
                            <img src="images/profile2.jpg" alt="" class="card-video">
                        </div>
                    </div>

                    <div class="card-content">
                        <h2 class="name">Create Your Meeting</h2>
                        <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                        <button class="button">View More</button>
                    </div>
                </div>
                <div class="card swiper-slide">
                    <div class="Video-content">
                        <span class="overlay"></span>

                        <div class="card-video">
                        <video src="{{ asset('video/istock-1028550030_preview.mp4') }}" class="Video-Learning-Style card-video" autoplay loop muted playsinline></video>
                            <img src="images/profile3.jpg" alt="" class="card-video">
                        </div>
                    </div>

                    <div class="card-content">
                        <h2 class="name">Use Our Room Tools</h2>
                        <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                        <button class="button">View More</button>
                    </div>
                </div>
                <div class="card swiper-slide">
                    <div class="Video-content">
                        <span class="overlay"></span>

                        <div class="card-video">
                        <video src="../video/Animated Backgrounds - floatingboxes.mp4" class="Video-Learning-Style card-video" autoplay loop muted playsinline></video>
                            <img src="images/profile4.jpg" alt="" class="card-video">
                        </div>
                    </div>

                    <div class="card-content">
                        <h2 class="name">David Dell</h2>
                        <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                        <button class="button">View More</button>
                    </div>
                </div>
                <div class="card swiper-slide">
                    <div class="Video-content">
                        <span class="overlay"></span>

                        <div class="card-video">
                        <video src="../video/Animated Backgrounds - floatingboxes.mp4" class="Video-Learning-Style card-video" autoplay loop muted playsinline></video>
                            <img src="images/profile5.jpg" alt="" class="card-video">
                        </div>
                    </div>

                    <div class="card-content">
                        <h2 class="name">David Dell</h2>
                        <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                        <button class="button">View More</button>
                    </div>
                </div>
                <div class="card swiper-slide">
                    <div class="Video-content">
                        <span class="overlay"></span>

                        <div class="card-video">
                        <video src="../video/istock-1028550030_preview.mp4" class="Video-Learning-Style card-video" autoplay loop muted playsinline></video>
                            <img src="images/profile6.jpg" alt="" class="card-video">
                        </div>
                    </div>

                    <div class="card-content">
                        <h2 class="name">David Dell</h2>
                        <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                        <button class="button">View More</button>
                    </div>
                </div>
                <div class="card swiper-slide">
                    <div class="Video-content">
                        <span class="overlay"></span>

                        <div class="card-video">
                        <video src="../video/Motion Graphics - Intro Clips - spinningcomputer-91.mp4" class="Video-Learning-Style card-video" autoplay loop muted playsinline></video>
                            <img src="images/profile7.jpg" alt="" class="card-video">
                        </div>
                    </div>

                    <div class="card-content">
                        <h2 class="name">David Dell</h2>
                        <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                        <button class="button">View More</button>
                    </div>
                </div>
                <div class="card swiper-slide">
                    <div class="Video-content">
                        <span class="overlay"></span>

                        <div class="card-video">
                        <video src="../video/Animated Backgrounds - floatingboxes.mp4" class="Video-Learning-Style card-video" autoplay loop muted playsinline></video>
                            <img src="images/profile8.jpg" alt="" class="card-video">
                        </div>
                    </div>

                    <div class="card-content">
                        <h2 class="name">David Dell</h2>
                        <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                        <button class="button">View More</button>
                    </div>
                </div>
                <div class="card swiper-slide">
                    <div class="Video-content">
                        <span class="overlay"></span>

                        <div class="card-video">
                            <img src="images/profile9.jpg" alt="" class="card-video">
                        </div>
                    </div>

                    <div class="card-content">
                        <h2 class="name">David Dell</h2>
                        <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                        <button class="button">View More</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="swiper-button-next swiper-navBtn"></div>
        <div class="swiper-button-prev swiper-navBtn"></div>
        <div class="swiper-pagination"></div>
    </div>
    <!-- End Video Learning Section -->
    <!-- footer section starts  -->
    <section class="footer" id="blogs">

        <div class="box-container">

            <div class="box">
                <h3> About </h3>
                <a href="#" class="links"> <i class="fas fa-arrow-right"></i> Hello-Meeting Blog </a>
                <a href="#" class="links"> <i class="fas fa-arrow-right"></i> Customers </a>
                <a href="#" class="links"> <i class="fas fa-arrow-right"></i> Our Team </a>
                <a href="#" class="links"> <i class="fas fa-arrow-right"></i> Career</a>
                <a href="#" class="links"> <i class="fas fa-arrow-right"></i> Integrations </a>
                <a href="#" class="links"> <i class="fas fa-arrow-right"></i> ESG Responsibility </a>
                <a href="#" class="links"> <i class="fas fa-arrow-right"></i> Media Kit </a>

            </div>

            <div class="box">
                <h3>contact info</h3>
                <a href="#" class="links"> <i class="fas fa-phone"></i> +970-595-326217 </a>
                <a href="#" class="links"> <i class="fas fa-phone"></i> +972-594-126281 </a>
                <a href="#" class="links"> <i class="fas fa-envelope"></i> HelloMeeting@gmail.com </a>
                <a href="#" class="links"> <i class="fas fa-map-marker-alt"></i> Palestine, Gaza Strip</a>
            </div>

            <div class="box">
                <h3>Support</h3>
                <a href="#" class="links"> <i class="fas fa-arrow-right"></i> Support Center </a>
                <a href="#" class="links"> <i class="fas fa-arrow-right"></i> Learning Center </a>
                <a href="#" class="links"> <i class="fas fa-arrow-right"></i> Feedback </a>
                <a href="#" class="links"> <i class="fas fa-arrow-right"></i> Accessibility</a>
                <a href="#" class="links"> <i class="fas fa-arrow-right"></i> Privacy, Security, Legal </a>
                <a href="#" class="links"> <i class="fas fa-arrow-right"></i> Policies </a>
            </div>

            <div class="box">
                <form>
                    <label class="language" for="2">Language</label>
                    <br>
                    <br>
                    <select class="option" name="">
                    <option>English</option>
                    <option>Arabic</option>
                </select>
                </form>
                <br>
                <form>
                    <label class="language" for="2">Currency</label>
                    <br>
                    <br>
                    <select class="option" name="">
                    <option>US Dollars $</option>
                    <option>EUR €</option>
                    <option>USDT (TRC20)</option>
                </select>
                </form>
                <!-- <p>subscribe for latest updates</p>
        <input type="email" placeholder="your email" class="email">
        <input type="submit" value="subscribe" class="btn"> -->
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter" id="twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                    <a href="#" class="fab fa-youtube"></a>
                    <a href="#" class="fab fa-wordpress"></a>
                </div>
                <img src="{{ asset('images/payment.png') }}" class="payment-img" alt="">

            </div>

        </div>

        <div class="credit">
            <p>copyright is reserved <i class="far fa-copyright "></i> 2023 -</p><span>  Hello Meeting Community </span>
        </div>

    </section>
    <!-- footer section ends -->





    <!-- slide moving  -->
    <!-- Swiper JS -->
    <script src="{{ asset('js/swiper-bundle.min.js') }}"></script>

    <!-- JavaScript -->
    <script src="{{ asset('js/script-slide.js') }}"></script>
    <!-- custom js file link  -->
    <script src="{{ asset('js/script.js') }}"></script>

    <script type="text/javascript" src="{{ asset('vanilla-tilt.js') }}"></script>
    <script>
        VanillaTilt.init(document.querySelectorAll(".card"), {
            max: 25,
            speed: 400,
            glare: true,
            "max-glare": 1,
        });
    </script>
    <script>
        VanillaTilt.init(document.querySelectorAll(".our-clinte"), {
            max: 25,
            speed: 400,
            glare: true,
            "max-glare": 0.5,
        });
    </script>
</body>

</html>