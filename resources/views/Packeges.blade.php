<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello Meeting</title>

    <!-- font awesome cdn link  -->
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <!-- custom css file link  -->
    <!-- main template CSS File -->
    <link rel="stylesheet" href="{{ asset('css/Packeges-Style.css') }}">
    <!-- Render All Elements Normally -->
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    <!-- Font awesome Libray -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
    <!-- lenk font by Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('vanilla-tilt.js') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
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
            <a href="{{ route('Creat-Avatar')}}">Create  Avatar</a>
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
    <!-- review section starts  -->

    <div class="contact-card" id="review">

        <div class="card">
            <div class="contant">
            <img style="width:100px" src="{{ asset('images/accounting.png') }}">
                <h1>Free Room</h1>
                <p class="coler">These rooms are technologically equipped interactive spaces for virtual meetings and job interviews between businessmen. This room provides an almost realistic experience of traditional in-person interviews, with the ability to connect and interact in a virtual environment.
                </p>
                <div class="p-text">
                    <p><i class="far fa-check-circle"></i> full time</p>
                    <p><i class="far fa-check-circle"></i> all this free</p>
                    <p><i class="far fa-check-circle"></i> unlimited watchh</p>
                    <p><i class="far fa-check-circle"></i> unlimited watch</p>
                </div>
                <button><a href="#FreeRoom">Chose your room</a></button>
            </div>
        </div>
        <div class="card GoldCard">
            <div class="contant">
            <img style="width:100px" src="{{ asset('images/conversation.png') }}">
                <h1>Gold Room</h1>
                <p class="coler">These rooms are technologically equipped interactive spaces for virtual meetings and job interviews between businessmen. This room provides an almost realistic experience of traditional in-person interviews, with the ability to connect and interact in a virtual environment.</p>
                <div class="p-text">
                    <p><i class="far fa-check-circle"></i> full time</p>
                    <p><i class="far fa-check-circle"></i> all this free</p>
                    <p><i class="far fa-check-circle"></i> unlimited watch</p>
                    <p><i class="far fa-check-circle"></i> unlimited watch</p>
                </div>
                <button><a href="#GooldRoom">Chose your room</a></button>
            </div>
        </div>
        <div class="card">
            <div class="contant">
            <img style="width:100px" src="{{ asset('images/startup.png') }}">
                <h1>Platenum Room</h1>
                <p class="coler">Experience imaginary interviews with virtual reality technology. Share and interact with other candidates.
                </p>
                <div class="p-text">
                    <p><i class="far fa-check-circle"></i> full time</p>
                    <p><i class="far fa-check-circle"></i> all this free</p>
                    <p><i class="far fa-check-circle"></i> unlimited watch</p>
                    <p><i class="far fa-check-circle"></i> unlimited watch</p>
                </div>
                <button><a href="#PlatinumRoom">Chose your room</a></button>
            </div>
        </div>


    </div>
    <!-- review section end  -->
    <!-- menu section starts  -->

    <section class="menu" id="menu">

        <div id="FreeRoom"></div>
        <h1 class="heading"><span>Free</span> Room </h1>

        <div class="box-container">

            <div class="box">
                <img src="images/Room (9)person.jpg" alt="">
                <h3>tasty and healty</h3>
                <div class="price Pri-colo">Free</div>
                <a href="#" class="btn">Enter The Room</a>
            </div>

            <div class="box">
                <img src="images/Room (10)person.jpg" alt="">
                <h3>tasty and healty</h3>
                <div class="price Pri-colo">Free</div>
                <a href="#" class="btn">Enter The Room</a>
            </div>

            <div class="box">
                <img src="images/Room (10-12) person.jpg" alt="">
                <h3>tasty and healty</h3>
                <div class="price Pri-colo">Free</div>
                <a href="#" class="btn">Enter The Room</a>
            </div>

            <div class="box">
                <img src="images/Room (14)person.jpg" alt="">
                <h3>tasty and healty</h3>
                <div class="price Pri-colo">Free</div>
                <a href="#" class="btn">Enter The Room</a>
            </div>

            <div class="box">
                <img src="images/Room (29) person- New photo.jpg" alt="">
                <h3>tasty and healty</h3>
                <div class="price Pri-colo">Free</div>
                <a href="#" class="btn">Enter The Room</a>
            </div>

            <div class="box">
                <img src="images/Room (100-200)person.jpg" alt="">
                <h3>tasty and healty</h3>
                <div class="price Pri-colo">Free</div>
                <a href="#" class="btn">Enter The Room</a>
            </div>

        </div>

    </section>
    <section class="menu" id="menu">
        <div id="GooldRoom"></div>

        <h1 class="heading"><span>Goold</span> Room</h1>

        <div class="box-container">

            <div class="box">
                <img src="images/Special Meeting Room 5 person.jpg" alt="">
                <h3>tasty and healty</h3>
                <div class="price Pri-colo">$9.99 <span>14.99</span></div>
                <a href="#" class="btn">Enter The Room</a>
            </div>

            <div class="box">
                <img src="images/White Modern Living Room.png" alt="">
                <h3>tasty and healty</h3>
                <div class="price Pri-colo">$9.99 <span>14.99</span></div>
                <a href="#" class="btn">Enter The Room</a>
            </div>

            <div class="box">
                <img src="images/Room (100-200)person.jpg" alt="">
                <h3>tasty and healty</h3>
                <div class="price Pri-colo">$9.99 <span>14.99</span></div>
                <a href="#" class="btn">Enter The Room</a>
            </div>

            <div class="box">
                <img src="images/Room (9)person.jpg" alt="">
                <h3>tasty and healty</h3>
                <div class="price Pri-colo">$9.99 <span>14.99</span></div>
                <a href="#" class="btn">Enter The Room</a>
            </div>

            <div class="box">
                <img src="images/Room (29) person- New photo.jpg" alt="">
                <h3>tasty and healty</h3>
                <div class="price Pri-colo">$9.99 <span>14.99</span></div>
                <a href="#" class="btn">Enter The Room</a>
            </div>

            <div class="box">
                <img src="images/v.jpg" alt="">
                <h3>tasty and healty</h3>
                <div class="price Pri-colo">$9.99 <span>14.99</span></div>
                <a href="#" class="btn">Enter The Room</a>
            </div>

        </div>

    </section>
    <section class="menu" id="menu">
        <div id="PlatinumRoom"></div>

        <h1 class="heading"><span>Platenum</span> Room</h1>

        <div class="box-container">
            <div class="box">
                <img src="images/Room (12) person -3D -mi.png" alt="">
                <h3>tasty and healty</h3>
                <div class="price Pri-colo">$15.99 <span>20.99</span></div>
                <a href="#" class="btn">Enter The Room</a>
            </div>

            <div class="box">
                <img src="images/Room (50)person.jpg" alt="">
                <h3>tasty and healty</h3>
                <div class="price Pri-colo">$15.99 <span>20.99</span></div>
                <a href="#" class="btn">Enter The Room</a>
            </div>

            <div class="box">
                <img src="images/Room (50) person.jpg" alt="">
                <h3>tasty and healty</h3>
                <div class="price Pri-colo">$15.99 <span>20.99</span></div>
                <a href="#" class="btn">Enter The Room</a>
            </div>

            <div class="box">
                <img src="images/Room (29) person.jpg" alt="">
                <h3>tasty and healty</h3>
                <div class="price Pri-colo">$15.99 <span>20.99</span></div>
                <a href="#" class="btn">Enter The Room</a>
            </div>

            <div class="box">
                <img src="images/Room (16)person.jpg" alt="">
                <h3>tasty and healty</h3>
                <div class="price Pri-colo">$15.99 <span>20.99</span></div>
                <a href="#" class="btn">Enter The Room</a>
            </div>

            <div class="box">
                <img src="images/Room (12) person -3D -mi.png" alt="">
                <h3>tasty and healty</h3>
                <div class="price Pri-colo">$15.99 <span>20.99</span></div>
                <a href="#" class="btn">Enter The Room</a>
            </div>

        </div>

    </section>

    <!-- menu section ends -->
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
            <p>copyright is reserved <i class="far fa-copyright "></i> 2023 -</p><span> Hello Meeting Community </span>
        </div>

    </section>
    <!-- footer section ends -->




    <!-- custom js file link  -->
    <script src="../js/script.js"></script>

    <script type="text/javascript" src="../vanilla-tilt.js"></script>
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
    <p>𝓒𝓪𝓶𝓶𝓲𝓷𝓰 𝓢𝓸𝓸𝓷</p>
</body>

</html>