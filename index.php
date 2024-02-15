<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Clothing Store</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Welcome to My Clothing Store</h1>
    </header>
    
    <main>
        <section class="featured-items">
            <h2>Featured Items</h2>
            <div class="item">
                <!-- Featured Men's Clothing -->
                <h3>Men's Clothing</h3>
                <?php include 'get_featured_items.php'; ?>
            </div>
            <div class="item">
                <!-- Featured Women's Clothing -->
                <h3>Women's Clothing</h3>
                <?php include 'get_featured_items.php'; ?>
            </div>
            <div class="item">
                <!-- Special Offers -->
                <h3>Special Offers</h3>
                <?php include 'get_special_offers.php'; ?>
            </div>
        </section>

        <section class="categories">
            <h2>Shop by Category</h2>
            <ul class="category-list">
                <li>
                    <a href="#">Women</a>
                    <ul class="submenu">
                        <li><a href="#">Tops</a></li>
                        <li><a href="#">Dresses</a></li>
                        <li><a href="#">Bottoms</a></li>
                        <li><a href="#">Shoes</a></li>
                        <li><a href="#">Accessories</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Men</a>
                    <ul class="submenu">
                        <li><a href="#">Shirts</a></li>
                        <li><a href="#">Trousers</a></li>
                        <li><a href="#">Jackets</a></li>
                        <li><a href="#">Shoes</a></li>
                        <li><a href="#">Accessories</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Girls</a>
                    <ul class="submenu">
                        <li><a href="#">Tops</a></li>
                        <li><a href="#">Dresses</a></li>
                        <li><a href="#">Bottoms</a></li>
                        <li><a href="#">Shoes</a></li>
                        <li><a href="#">Accessories</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Boys</a>
                    <ul class="submenu">
                        <li><a href="#">Shirts</a></li>
                        <li><a href="#">Trousers</a></li>
                        <li><a href="#">Jackets</a></li>
                        <li><a href="#">Shoes</a></li>
                        <li><a href="#">Accessories</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Women's Fashion</a>
                    <ul class="submenu">
                        <li><a href="#">Dresses</a></li>
                        <li><a href="#">Tops</a></li>
                        <li><a href="#">Bottoms</a></li>
                        <li><a href="#">Shoes</a></li>
                        <li><a href="#">Accessories</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Kids</a>
                    <ul class="submenu">
                        <li><a href="#">Tops</a></li>
                        <li><a href="#">Bottoms</a></li>
                        <li><a href="#">Shoes</a></li>
                        <li><a href="#">Accessories</a></li>
                        <li><a href="#">Outerwear</a></li>
                    </ul>
                </li>
            </ul>
        </section>

        <section class="vision-goals">
            <h2>Our Vision and Company Goals</h2>
            <div class="vision">
                <h3>Vision</h3>
                <p>Our vision is to provide high-quality clothing and exceptional customer service to our valued customers, making fashion accessible and enjoyable for everyone.</p>
            </div>
            <div class="goals">
                <h3>Goals</h3>
                <ul>
                    <li>Offer a diverse range of stylish and affordable clothing for men and women.</li>
                    <li>Ensure customer satisfaction by providing a seamless online shopping experience.</li>
                    <li>Stay updated with the latest fashion trends and regularly refresh our inventory.</li>
                    <li>Build long-term relationships with our customers through excellent service and communication.</li>
                </ul>
            </div>
        </section>
        
        <section class="apply-for-job">
            <a href="apply_for_the_job.php"><h1>Apply For The Job</h1></a>
            <a href="contact_us.php"><h2>Contact Us</h2></a>
        </section>
        
        <section class="about-me">
            <div class="about-me-content">
                <h2>About Me</h2>
                <img src="your-profile-picture.jpg" alt="Your Name">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget metus id augue fermentum dignissim vel et massa. Nulla facilisi.</p>
                <p>Sed a ligula ac magna posuere lobortis. Vivamus quis risus nec libero fermentum ultrices. Sed vel malesuada felis, in laoreet justo.</p>
                <!-- Add more information about yourself as needed -->
            </div>
        </section>
        
    </main>

    <footer>
        <div class="social-icons">
            <a href="https://www.facebook.com/your-facebook-page" target="_blank">
                <img src="facebook-icon.png" alt="Facebook">
            </a>
            <a href="https://www.twitter.com/your-twitter-profile" target="_blank">
                <img src="twitter-icon.png" alt="Twitter">
            </a>
            <a href="https://www.instagram.com/your-instagram-profile" target="_blank">
                <img src="instagram-icon.png" alt="Instagram">
            </a>
            <!-- Add more social media icons as needed -->
        </div>
    </footer>
</body>
</html>
