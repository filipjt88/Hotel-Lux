<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Grand Hotel</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" type="image/png" href="img/crown.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,400i,600,600i,700,700i&display=swap" rel="stylesheet">
</head>
<body>
    
    <!--navbar -->
<div class="navbar">


    <input type="checkbox" class="checkbox" id="click" hidden>

    <!-- sidebar -->

    <div class="sidebar">
        <label for="click">
        <div class="menu-icon">
            <div class="line line-1"></div>
            <div class="line line-2"></div>
            <div class="line line-3"></div>
        </div>
    </label>

         <ul class="social-icons-list">
             <li>
                 <a href="https://www.facebook.com" class="social-link"><i class="fab fa-facebook-f"></i></a>
             </li>

             <li>
                <a href="https://www.twitter.com" class="social-link"><i class="fab fa-twitter"></i></a>
            </li>

            <li>
                <a href="https://www.google.com" class="social-link"><i class="fab fa-google-plus-g"></i></a>
            </li>

            <li>
                <a href="https://www.instagram.com" class="social-link"><i class="fab fa-instagram"></i></a>
            </li>
         </ul>

         <div class="year">
             <p>2019</p>
         </div>
    </div>
    <!-- end of sidebar -->
    <!-- navigation-->
    <nav class="navigation">
<div class="navigation-header">
         <h1 class="navigation-heading">Lux Hotel</h1>

         <form class="navigation-search">
             <input type="text" class="navigation-search-input" placeholder="Search. . .">
             <button class="navigation-search-btn">
                 <i class="fas fa-search"></i>
             </button>
         </form>
         </div>
        
         <ul class="navigation-list">
           
             <li class="navigation-item">
                 <a href="#" class="navigation-link">home</a>
             </li>

             <li class="navigation-item">
                <a href=".about-us" class="navigation-link">about</a>
            </li>

            <li class="navigation-item">
                <a href="#" class="navigation-link">rooms</a>
            </li>

            <li class="navigation-item">
                <a href="#" class="navigation-link">events</a>
            </li>

            <li class="navigation-item">
                <a href="#" class="navigation-link">customers</a>
            </li>

            <li class="navigation-item">
                <a href="#" class="navigation-link">contact</a>
            </li>
         </ul>

         <div class="copyright">
             <p>&copy; 2019. Lux Hotel. All Rights Reserved</p>
         </div>
    </nav>

    <!-- end of navigation-->
</div>

    <!-- end of navbar -->


    <!--  header -->

      <header class="header">
          <div class="brand">
              <div>
                  <img src="img/crown.png" width="80">
              </div>
              <h3 class="hotel-heading">Lux Hotel</h3>
            </div>
              <div class="banner">
                  <h1 class="banner-heading">Welcome to Lux Hotel</h1>
                  <p class="banner-paragraph">Make your life luxurious</p>
                  <button class="banner-button">Check Out</button>
              </div>
          
      </header>


    <!-- end of header -->


    <!-- about us -->

    <section class="about-us">
      <div class="about-us-content">

        <h1 class="about-us-heading">About Us</h1>
        <div class="underline">
            <div class="small-underline"></div>
            <div class="big-underline"></div>
        </div>
        <h3 class="sub-heading">Lux Hotel</h3>
        <p class="about-us-paragraph">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Alias delectus fugiat nihil praesentium ratione ipsa natus cum officia velit cumque rerum sint, dolore iste, modi dolorem, voluptatem iure quidem libero.</p>
        <button class="about-us-btn">
            Read More 
            <i class="fas fa-angle-double-right btn-arrow"></i>
        </button>
      </div>
       <div class="about-us-images">
           <img src="img/about-us-img-1.jpeg" class="image image-1">
           <img src="img/about-us-img-2.jpeg" class="image image-2">
           <img src="img/about-us-img-3.jpeg" class="image image-3">
           <img src="img/about-us-img-4.jpeg" class="image image-4">
       </div>
    </section>

    <!-- end of about us -->

    <!-- rooms-->

    <section class="rooms">
    <div class="common-header">
        <h1 class="common-heading">Rooms in Lux Hotel</h1>
        <div class="underline">
            <div class="small-underline"></div>
            <div class="big-underline"></div>
        </div>
    </div>

    <div class="rooms-cards-wrapper">
        <div class="room-card">
            <img src="img/single-room.jpeg" class="room-image">
            <div class="room-card-content">
                <h4 class="room-card-heading">Single Room</h4>
                <p class="room-card-paragraph">Lorem ipsum dolor sit amet.</p>
                <p class="room-price">99.00 &#8364;</p>
                <button class="room-card-btn">
                    Book Now

                    <i class="fas fa-angle-double-right btn-arrow"></i>
                </button>
            </div>
        </div>

        <div class="room-card">
            <img src="img/double.jpg" class="room-image">
            <div class="room-card-content">
                <h4 class="room-card-heading">Double Room</h4>
                <p class="room-card-paragraph">Lorem ipsum dolor sit amet.</p>
                <p class="room-price">199.00 &#8364;</p>
                <button class="room-card-btn">
                    Book Now

                    <i class="fas fa-angle-double-right btn-arrow"></i>
                </button>
            </div>
        </div>

        <div class="room-card">
            <img src="img/lux.jpg" class="room-image">
            <div class="room-card-content">
                <h4 class="room-card-heading">Lux</h4>
                <p class="room-card-paragraph">Lorem ipsum dolor sit amet.</p>
                <p class="room-price">299.00 &#8364;</p>
                <button class="room-card-btn">
                    Book Now

                    <i class="fas fa-angle-double-right btn-arrow"></i>
                </button>
            </div>
        </div>

        <div class="room-card">
            <img src="img/vip.jpeg" class="room-image">
            <div class="room-card-content">
                <h4 class="room-card-heading">VIP</h4>
                <p class="room-card-paragraph">Lorem ipsum dolor sit amet.</p>
                <p class="room-price">399.00 &#8364;</p>
                <button class="room-card-btn">
                    Book Now

                    <i class="fas fa-angle-double-right btn-arrow"></i>
                </button>
            </div>
        </div>
    </div>
    

    <div class="rooms-btn-wrapper">
        <button class="rooms-btn">Check All Rooms</button>
    </div>
    </section>
     <!-- end of rooms-->

     <!--customers -->

     <section class="customers">

        <div class="common-header">
            <h1 class="common-heading">Our Customers</h1>
            <div class="underline">
                <div class="small-underline"></div>
                <div class="big-underline"></div>
            </div>
        </div>

        <p class="customers-paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi maiores corrupti nesciunt repudiandae! Illo eius temporibus, eum inventore nisi mollitia?</p>
        
        <div class="customers-card-wrapper">
            <div class="customers-card">
                <div class="customers-image-wrapper">
                    <img src="img/girl1.jpg" style="position:relative;left:13px;" class="customer-image">
                </div>
                <div class="customer-info">
                    <h3 class="customer-fullname">Sara Aloe</h3>
                    <p class="customer-paragraph-1">Happy Customer</p>
                    <p class="customer-paragraph-2">"Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident cumque quasi ipsam aspernatur iure sunt dolorum, doloribus hic, amet, fugit neque excepturi. Eius, soluta? Sint iusto nam incidunt impedit quod."</p>
                </div>
            </div>

            <div class="customers-card">
                <div class="customers-image-wrapper">
                    <img src="img/girl2.jpg" style="position:relative;left:13px;" class="customer-image">
                </div>
                <div class="customer-info">
                    <h3 class="customer-fullname">Venus Hamilton</h3>
                    <p class="customer-paragraph-1">Monica Smith</p>
                    <p class="customer-paragraph-2">"Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident cumque quasi ipsam aspernatur iure sunt dolorum, doloribus hic, amet, fugit neque excepturi. Eius, soluta? Sint iusto nam incidunt impedit quod."</p>
                </div>
            </div>
        </div>
     </section>

     <!-- end of customers-->

     <!-- footer -->

      <footer class="footer">
          <div class="main-part">
              <div class="footer-list-wrapper">
                  <h3 class="footer-heading">Lux Hotel</h3>
                  <ul class="footer-list">
                      <li class="footer-list-item">
                          <a href="#" class="footer-list-link">
                              support@grandhotel.com
                          </a>
                      </li>

                      <li class="footer-list-item">
                        <a href="#" class="footer-list-link">
                            Las Vegas, Main Street 123
                        </a>
                    </li>

                    <li class="footer-list-item">
                        <a href="#" class="footer-list-link">
                           Tel: +123 456 789
                        </a>
                    </li>
                  </ul>
              </div>

              <div class="footer-list-wrapper">
                <h3 class="footer-heading">Explore</h3>
                <ul class="footer-list">
                    <li class="footer-list-item">
                        <a href="#" class="footer-list-link">
                            Home
                        </a>
                    </li>

                    <li class="footer-list-item">
                      <a href="#" class="footer-list-link">
                          About Us
                      </a>
                  </li>

                  <li class="footer-list-item">
                      <a href="#" class="footer-list-link">
                         Rooms
                      </a>
                  </li>

                  <li class="footer-list-item">
                    <a href="#" class="footer-list-link">
                       Events
                    </a>
                </li>

                <li class="footer-list-item">
                    <a href="#" class="footer-list-link">
                       Customers
                    </a>
                </li>

                <li class="footer-list-item">
                    <a href="#" class="footer-list-link">
                       Contact
                    </a>
                </li>
                </ul>
            </div>

            <div class="contact">
                <h3 class="footer-heading">Contact</h3>
                <p>Sign Up for News</p>
                <form class="footer-form">
                    <input type="text" class="footer-input" placeholder="Your email ...">
                    <button class="footer-btn">Sign Up</button>
                </form>
            </div>

            <div class="gallery">
                <h3 class="footer-heading">Gallery</h3>
                <div class="gallery-images">
                    <div class="image-wrapper">
                        <img src="img/gallery-img-1.jpeg" class="footer-image">
                    </div>

                    <div class="image-wrapper">
                        <img src="img/gallery-img-2.jpeg" class="footer-image">
                    </div>

                    <div class="image-wrapper">
                        <img src="img/gallery-img-3.jpeg" class="footer-image">
                    </div>

                    <div class="image-wrapper">
                        <img src="img/gallery-img-4.jpeg" class="footer-image">
                    </div>

                    <div class="image-wrapper">
                        <img src="img/gallery-img-5.jpeg" class="footer-image">
                    </div>

                    <div class="image-wrapper">
                        <img src="img/gallery-img-6.jpeg" class="footer-image">
                    </div>
                </div>
            </div>
          </div>
          <div class="creator-part">
              <div class="copyright-text">
                  <p>Copyright &copy; 2019 Lux Hotel. All Rights Reserved</p>
              </div>

              <div class="text-right">
                  <p>Made With by <span> Filip Jotic</span></p>
              </div>
          </div>
      </footer>

     <!-- end of footer -->
    

</body>
</html>























