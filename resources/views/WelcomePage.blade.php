<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clothing</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <header>


        <div class="nav-container">
            <div class="logo">
                <a href="index.html"><img src="image/logo.png" alt="hi"></a>
            </div>

         

            <nav class="nav-bar">
                <ul>
                    <li><a href="#" class="active">home</a></li>
                    <li><a href="#" class="#category">category</a></li>
                    <li><a href="#" class="#products">products</a></li>
                    <li><a href="#" class="#news">news</a></li>
                    <li>
                        @if (Route::has('login'))
                  
                        @auth
                            <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>
    
                            @if (Route::has('register'))
                           <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                            @endif
                        @endauth
                
                        @endif
                    </li>
              
                </ul>
            </nav>
        </div>


    </header>



    <div class="content">
        <div class="content-box">
            <h2>Get up to 45% <br>off new products</h2>
            <label>The biggest sale of the year is at <span>blaaa clothes</span></label> <br>
            <a href="#">Shop Now <i class="fa-solid fa-arrow-right"></i></a>
        </div>
    </div>



    <div class="category" id="category">
        <div class="category-title">
            <h2>blaaa Clothing category</h2>
        </div>
        <div class="category-box">
            <div class="box woman-box">
                <div class="box-content b2">
                    <h3>Most Popular style </h3>
                    <label>Woman</label>
                    <a href="#">Go Here</a>
                </div>
                <img src="image/category-img/img-1.jpeg">
            </div>
            <div class="box man-box">
                <div class="box-content">
                    <h3>Last year's trends </h3>
                    <label>men</label>
                    <a href="#">Go Here</a>
                </div>
                <img src="image/category-img/img-2.jpeg">
            </div>
          
        </div>
    </div>


    <div class="most-rated">
        <div class="most-rated-box">
            <div class="mosdt-rated-title">
                <h2>MOST RATED</h2>
            </div>

            <div class="most-rated-items">
                <div class="most-rated-item">
                    <div class="most-rated-image">
                        <img src="image/products-image/img-1.jpeg">
                    </div>
                    <div class="most-rated-body">
                        <h4>Woman T-Shirt</h4>
                        <div class="icons">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <div class="price">
                            <label class="sale">$89.99</label>
                            <label>$49.99</label>
                        </div>
                    </div>
                </div>


                <div class="most-rated-item">
                    <div class="most-rated-image">
                        <img src="image/products-image/img-4.png">
                    </div>
                    <div class="most-rated-body">
                        <h4>Unisex Shoes</h4>
                        <div class="icons">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <div class="price">
                            <label class="sale">$89.99</label>
                            <label>$49.99</label>
                        </div>
                    </div>
                </div>


                <div class="most-rated-item">
                    <div class="most-rated-image">
                        <img src="image/products-image/img-6.jpeg">
                    </div>
                    <div class="most-rated-body">
                        <h4>Man T-Shirt</h4>
                        <div class="icons">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <div class="price">
                            <label class="sale">$89.99</label>
                            <label>$49.99</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="popular-products" id="products">
        <div class="popular-products-box">
            <div class="popular-products-title">
                <h2>POPULAR PRODUCTS</h2>
            </div>
            <div class="popular-products-items">
                <div class="popular-products-item">
                    <div class="popular-products-image">
                        <img src="image/products-image/img-3.jpeg">
                    </div>
                    <div class="popular-products-body">
                        <h4>Women T-shirt</h4>
                        <div class="price">
                            <label>$49.99</label>
                        </div>
                    </div>
                </div>

                <div class="popular-products-item">
                    <div class="popular-products-image">
                        <img src="image/products-image/img-5.jpeg">
                    </div>
                    <div class="popular-products-body">
                        <h4>Women Dress</h4>
                        <div class="price">
                            <label>$49.99</label>
                        </div>
                    </div>
                </div>

                <div class="popular-products-item">
                    <div class="popular-products-image">
                        <img src="image/products-image/img-4.png">
                    </div>
                    <div class="popular-products-body">
                        <h4>Unisex Shoes</h4>
                        <div class="price">
                            <label>$49.99</label>
                        </div>
                    </div>
                </div>

                <div class="popular-products-item">
                    <div class="popular-products-image">
                        <img src="image/products-image/img-1.jpeg">
                    </div>
                    <div class="popular-products-body">
                        <h4>Women T-shirt</h4>
                        <div class="price">
                            <label>$49.99</label>
                        </div>
                    </div>
                </div>

                <div class="popular-products-item">
                    <div class="popular-products-image">
                        <img src="image/products-image/img-2.jpeg">
                    </div>
                    <div class="popular-products-body">
                        <h4>Unisex Shoes</h4>
                        <div class="price">
                            <label>$49.99</label>
                        </div>
                    </div>
                </div>


                <div class="popular-products-item">
                    <div class="popular-products-image">
                        <img src="image/products-image/img-6.jpeg">
                    </div>
                    <div class="popular-products-body">
                        <h4>Man T-shirt</h4>
                        <div class="price">
                            <label>$49.99</label>
                        </div>
                    </div>
                </div>

            </div>

            <div class="popular-products-btn">
                <button>More</button>
            </div>
        </div>
    </div>



    <div class="dicount-news" id="news">
        <div class="discount-news-box">
            <div class="discount-news-content">
                <p>80% discount on all products for the <br> new year </p>
                <div class="time">
                    <label>15 <span>:</span></label><!--day-->
                    <label>12 <span>:</span></label><!--hour-->
                    <label>56 <span>:</span></label><!--min-->
                    <label>02</label><!--sec-->
                </div>
            </div>
            <div class="discount-news-box-image">
                <img src="image/discount-news/img.png">
            </div>
        </div>
    </div>



    <div class="our-services">
        <div class="our-services-box">
            <div class="our-servies-item">
                <div class="our-services-icon">
                    <i class="fa-regular fa-user"></i>
                </div>
                <div class="our-services-body">
                    <h3>24/7 customer review</h3>
                    <label>Lorem ipsum dolor sit amet consectetur, adipisicing elit.!</label>
                </div>
            </div>

            <div class="our-servies-item">
                <div class="our-services-icon">
                    <i class="fa-regular fa-credit-card"></i>
                </div>
                <div class="our-services-body">
                    <h3>Secure Payment</h3>
                    <label>Lorem ipsum dolor sit amet consectetur, adipisicing elit.!</label>
                </div>
            </div>

            <div class="our-servies-item">
                <div class="our-services-icon">
                    <i class="fa-solid fa-dollar-sign"></i>
                </div>
                <div class="our-services-body">
                    <h3>Return Garentee</h3>
                    <label>Lorem ipsum dolor sit amet consectetur, adipisicing elit.!</label>
                </div>
            </div>
        </div>
    </div>

<!--

    <div class="footer">
        <div class="footer-box">
            <div class="footer-i f1">
                <h4>Contact</h4>

                <label>Street: 2017 kollonawa</label>
                <label>City: colombo</label>
                <label>State full:</label>
                <label>Zip code: 3900</label>
                <label>Phone No: 07 000 2300</label>
                <label>Mobile No: 00 22 3454</label>
            </div>

            <div class="footer-i f2">
                <h4>Visit Us</h4>

                <label>Getting Here</label>
                <label>Our Support</label>
                <label>Seating Charts</label>
                <label>Staff Directory</label>
                <label>Current Season</label>
                <label>Donor Events</label>
            </div>

            <div class="footer-i f3">
                <h4>Recent Post</h4>

                <label>Breaking down Barriers</label>
                <label>A celebration of sucess</label>
                <label>world of ooprtunities </label>
                
            </div>

            <div class="footer-i f4">
                <h4>BLAAA clothing</h4>

                <label>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aspernatur assumenda excepturi ipsam saepe sunt quam. Optio blanditiis dignissimos perferendis rerum, porro tenetur sit ut esse excepturi earum! Dolores, vel ratione.</label>
                
                <input type="text" placeholder="Email Adress">
                <button><i class="fa-solid fa-share"></i></button>
                <div class="social-media">
                    <a href="#"><i class="fa-brand fa-instagram"></i></a>
                    <a href="#"><i class="fa-brand fa-youtube"></i></a>
                    <a href="#"><i class="fa-brand fa-linkedin"></i></a>
                    <a href="#"><i class="fa-brand fa-twitter"></i></a>
                    <a href="#"><i class="fa-brand fa-facebook"></i></a>

                </div>
            </div>
        </div>
    </div>


-->


    

    
    <footer>
        <div class="footer-container">
            <div class="footer">
                <div class="footer-heading footer-1">
                    <h3>About Us</h3>
                    <a href="#">Blog</a>
                    <a href="#">Demo</a>
                    <a href="#">Customers</a>
                    <a href="#">Investors</a>
                    <a href="#">Terms of Services</a>
                </div>
                <div class="footer-heading footer-2">
                    <h3>Contact Us</h3>
                    <a href="#">Support</a>
                    <a href="#">Contact</a>
                    <a href="#">sponsorship</a>
                </div>
                <div class="footer-heading footer-3">
                    <h3>Social Media</h3>
                    <a href="#">Instagram</a>
                    <a href="#">Facebook</a>
                    <a href="#">Youtube</a>
                    <a href="#">Twitter</a>
                    <a href="#">Terms of Services</a>
                </div>
                <div class="footer-email-form">
                    <h3>Join us for more details</h3>
                    <input type="email" placeholder="Enter your email adress" id="footer-email">
                    <input type="submit" value="Sign up" id="footer-email-btn">
                </div>
            </div>
        </div>
        </footer>
    
    



    <script src="script.js"></script>
</body>

</html>