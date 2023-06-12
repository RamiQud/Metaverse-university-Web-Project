<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello Meeting</title>

    <!-- Tab image -->
    <link rel="icon" href="{{ asset('images/metaverse-etp-logo.png') }}" type="image/x-icon">
    <!-- Custom CSS file Lonk -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
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

    <!-- start video in intro -->
    <div class="intro" id="home">
        <div>
            <video src="{{ asset('video/istock-1028550030_preview.mp4') }}" autoplay loop controls muted playsinline></video>
        </div>
    </div>
    <!-- end video in intro -->

    <!-- about section 1 starts  -->
    <section class="about" id="about">

        <h1 class="heading"> <span>about</span> us </h1>
        <div class="about-Metaverse">

            <div class="hexagon-1">
                <img src="./images/Hexsa.png">
                <img id="img-mataverse-around" src="{{ asset('images/metaverse-etp-logo-around.png') }}">
                <img id="img-mataverse" src="{{ asset('images/m-metaverse-etp-logo.png') }}">

            </div>
            <div class="description" id="Metaverse">
                <h5>overview about Metaverse</h5>
                <h2>What Is the Metaverse ?</h2>
                <p>The metaverse is a concept of a persistent, online, 3D universe that combines multiple different virtual spaces. You can think of it as a future iteration of the internet. The metaverse will allow users to work, meet, game, and socialize
                    together in these 3D spaces. The metaverse isn’t fully in existence, but some platforms contain metaverse-like elements. Video games currently provide the closest metaverse experience on offer. Developers have pushed the boundaries
                    of what a game is through hosting in-game events and creating virtual economies.</p>
            </div>
            <div class="features">
                <div class="feature"><i class="far fa-check-circle"></i>Why are video games linked to the metaverse ?
                </div>
                <div class="feature"><i class="far fa-check-circle"></i>How does crypto fit into the metaverse ?</div>
                <div class="feature"><i class="far fa-check-circle"></i>What is a metaverse job ?</div>

            </div>
        </div>
    </section>
    <!-- about section 1 ends -->

    <!-- about section2 starts  -->
    <section class="about" id="about">

        <div class="about-Metaverse-2">

            <div class=" hexagon-2">
                <img src="{{ asset('images/Hexsa.png') }}">
                <img id="img-mataverse-around" src="{{ asset('images/metaverse-etp-logo-around.png') }}">
                <img id="img-mataverse" src="{{ asset('images/m-metaverse-etp-logo.png') }}">
            </div>
            <div class="description-2">
                <h2>Metaverse examples :-</h2>
                </p>
                <p>While we don't yet have a single, linked metaverse, we have plenty of platforms and projects similar to the metaverse. Typically, these also incorporate NFTs and other blockchain elements .
                </p>
            </div>
            <p class="p2">Llll ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis deserunt culpa, nemo deleniti quasi tempora. Beatae rerum quibusdam tempora quam!
            </p>
            <h3>Let's look at three examples :</h3>
            <div class="features features-2">
                <div class="feature"><i class="far fa-check-circle"></i>SecondLive .</div>
                <div class="feature"><i class="far fa-check-circle"></i>Axie Infinity .</div>
                <div class="feature"><i class="far fa-check-circle"></i>Decentraland .</div>
            </div>
        </div>
    </section>
    <!-- about section2 ends -->

    <!-- products Section Start -->
    <section class="products" id="products">

        <h1 class="heading"> our <span>products</span> </h1>

        <div class="box-container">

            <div class="box">
                <div class="icons">
                    <a href="#" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="{{ asset('images/Special Meeting Room 5 person.jpg') }}" alt="">
                </div>
                <div class="content">
                    <h3>Fantasy Room</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="price">$2.99 <span>$5.99</span></div>
                </div>
            </div>

            <div class="box">
                <div class="icons">
                    <a href="#" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="{{ asset('images/Room (9)person.jpg') }}" alt="">
                </div>
                <div class="content">
                    <h3>Special Meeting Room</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="price">$4.99 <span>$10.99</span></div>
                </div>
            </div>

            <div class="box">
                <div class="icons">
                    <a href="#" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="{{ asset('images/Room (10-12) person.jpg') }}" alt="">
                </div>
                <div class="content">
                    <h3>Small Company Room</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="price">$9.99 <span>$15.99</span></div>
                </div>
            </div>

        </div>

    </section>
    <!-- products Section End -->

    <!-- review section starts  -->
    <div class="contact-card" id="review">

        <div class="card">
            <div class="contant">
                <img style="width:100px" src="{{ asset('images/accounting.png') }}">
                <h1>Business ROOM</h1>
                <p class="coler">These rooms are technologically equipped interactive spaces for virtual meetings and job interviews between businessmen. This room provides an almost realistic experience of traditional in-person interviews, with the ability to connect and interact in a virtual environment.</p>
                <div class="p-text">
                    <p><i class="far fa-check-circle" style="margin-right:5px;"></i>Wear virtual glasses (VR) to blend reality with imagination.</p>
                    <p><i class="far fa-check-circle" style="margin-right:5px;"></i>3D Audio: 3D audio technology is used to provide realistic and spatial sound.</p>
                    <p><i class="far fa-check-circle" style="margin-right:5px;"></i>Participants interact with each other in the virtual environment, such as shaking hands or using various communication tools such as chat.</p>
                </div>
                <button><a href="{{ route('Packeges')}}">Chose your room</a></button>
            </div>
        </div>
        <div class="card">
            <div class="contant">
                <img style="width:100px" src="{{ asset('images/conversation.png') }}">
                <h1>Studant ROOM</h1>
                <p class="coler">These rooms are technologically equipped interactive spaces for virtual meetings and job interviews between businessmen. This room provides an almost realistic experience of traditional in-person interviews, with the ability to connect and interact in a virtual environment.
                </p>
                <div class="p-text">
                    <p><i class="far fa-check-circle" style="margin-right:5px;"></i>Wear virtual glasses (VR) to blend reality with imagination.</p>
                    <p><i class="far fa-check-circle" style="margin-right:5px;"></i>3D Audio: 3D audio technology is used to provide realistic and spatial sound.</p>
                    <p><i class="far fa-check-circle" style="margin-right:5px;"></i>Participants interact with each other in the virtual environment, such as shaking hands or using various communication tools such as chat.</p>
                </div>
                <button><a href="{{ route('Packeges')}}">Chose your room</a></button>
            </div>
        </div>
        <div class="card">
            <div class="contant">
                <img style="width:100px" src="{{ asset('images/startup.png') }}">
                <h1>Fantasy ROOM </h1>
                <p class="coler">Experience imaginary interviews with virtual reality technology. Share and interact with other candidates.
                </p>
                <div class="p-text">
                    <p><i class="far fa-check-circle" style="margin-right:5px;"></i>Wear virtual glasses (VR) to blend reality with imagination.</p>
                    <p><i class="far fa-check-circle" style="margin-right:5px;"></i>3D Audio: 3D audio technology is used to provide realistic and spatial sound.</p>
                    <p><i class="far fa-check-circle" style="margin-right:5px;"></i>Participants interact with each other in the virtual environment, such as shaking hands or using various communication tools such as chat.</p>
                </div>
                <button><a href="{{ route('Packeges')}}">Chose your room</a></button>
            </div>
        </div>


    </div>
    <!-- review section end  -->

    <!-- contact section starts  -->
    <section class="contact" id="contact">

        <h1 class="heading"> <span>contact</span> us </h1>

        <div class="row">

            <!-- <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30153.788252261566!2d72.82321484621745!3d19.141690214227783!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b63aceef0c69%3A0x2aa80cf2287dfa3b!2sJogeshwari%20West%2C%20Mumbai%2C%20Maharashtra%20400047!5e0!3m2!1sen!2sin!4v1629452077891!5m2!1sen!2sin" allowfullscreen="" loading="lazy"></iframe> -->
            <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d4200.931417037886!2d34.303879002174746!3d31.34279249502823!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMzHCsDIwJzM1LjgiTiAzNMKwMTgnMDYuMyJF!5e0!3m2!1sar!2s!4v1678043280228!5m2!1sar!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <form action="">
                <h3>get in touch</h3>
                <div class="inputBox">
                    <span class="fas fa-user"></span>
                    <input type="text" placeholder="name">
                </div>
                <div class="inputBox">
                    <span class="fas fa-envelope"></span>
                    <input type="email" placeholder="email">
                </div>
                <div class="inputBox">
                    <span class="fas fa-phone"></span>
                    <input type="number" placeholder="number">
                </div>
                <div class="inputBox">
                    <span class="fas fa-city "></span>
                    <input type="conutry" placeholder="conutry">
                </div>
                <div class="inputBox">
                    <span class="fa fa-question"></span>
                    <input type="text" placeholder="your Question?">
                </div>
                <div class="submit">
                    <input type="submit" value="submit" class="btn">
                </div>
            </form>

        </div>

    </section>
    <!-- contact section ends -->

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
    <script>
        // script for adding animation for triangel on servises part
        // tringel C
        let el3 = document.getElementById('tilt-c')
        const cheight = el3.clientHeight
        const cwidth = el3.clientWidth
        el3.addEventListener('mousemove', handleMove)

        function handleMove(e) {
            const xVal = e.layerX
            const yVal = e.layerY
            const xRotation = 20 * ((xVal - cwidth / 2) / cwidth)
            const yRotation = -20 * ((yVal - cheight / 2) / cheight)
            const string = 'perspective(500px) scale(1.1) rotateX(' + xRotation + 'deg) rotateY(' + yRotation + 'deg)'
            el3.style.transform = string
        }
        el3.addEventListener('mouseout', function() {
            el3.style.transform = 'perspectlive(500px) scale(1) rotateX(0) rotateY(0)'
        })
        el3.addEventListener('mousedown', function() {
            el3.style.transform = 'perspectlive(100px) scale(0.9) rotateX(0) rotateY(0)'
        })
        el3.addEventListener('mouseup', function() {
            el3.style.transform = 'perspectlive(500px) scale(1.1) rotateX(0) rotateY(0)'
        })

        // Animation between all parts
        function reveal() {
            var reveals = document.querySelectorAll(".reveal");

            reveals.forEach((reveal) => {
                var windowHeight = window.innerHeight;
                var elementTop = reveal.getBoundingClientRect().top;
                var elemintVisible = 100;

                if (elementTop < windowHeight - elemintVisible) {
                    reveal.classList.add("active");
                } else {
                    reveal.classList.remove("active");
                }

            })
        }
        window.addEventListener("scroll", reveal);

        // script for make button to traslation section
        var slideIndex = 1;
        showDivs(slideIndex);

        function plusDivs(n) {
            showDivs(slideIndex += n);
        }

        function currentDiv(n) {
            showDivs(slideIndex = n);
        }

        function showDivs(n) {
            var i;
            var x = document.getElementsByClassName("mySlides ");
            var dots = document.getElementsByClassName("demo ");
            if (n > x.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = x.length
            }
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none ";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace("red ", " ");
            }
            x[slideIndex - 1].style.display = "flex ";
            dots[slideIndex - 1].className += "red ";
        }
    </script>
    <script>
        // nvigation window
        type = alert("Wellcom in Hello Meeting Community");

        //preloader
        var loader = document.getElementById("preloader ");
        window.addEventListener("load ", function() {
            loader.style.display = "none ";
        })
    </script>
</body>

</html>