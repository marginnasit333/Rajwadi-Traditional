<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: home.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Rajwadi Traditional Wear
    </title>
    <link rel="stylesheet" href="css1/style.css">
    <link rel="stylesheet" href="css1/utils.css">
    <link rel="stylesheet" href="css1/responsive.css">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    
    
</head>

<body >
    <header>
        <nav>
            <div class="logo">
                <a href="welcome.php"><img src="logo.png" alt=""></a>
            </div>
            
            <div class="search">
                <input type="text" name="button" placeholder="Serach Here">
                <button class="btn">Search</button>
            </div>

            <ul>
                <li><a href="welcome.php">Home</a></li>
                <li><a href="partials/men.php">Men</a></li>
                <li><a href="partials/women.php">Women</a></li>
                <li> <a href="Contact.php">ContactUs</a></li>
                <li> <a href="logout.php">Logout</a></li>
            </ul>

        </nav>

    </header>
    <main style="margin: 0px">
        <div class="container">
            <div class="slider" onclick="shop()">
                <img src="https://www.rajwadi.com/image/data/2022/September%202022/Diwali%20Collection.jpg" alt="">
                <div class="overlay">
                    <img src="https://www.rajwadi.com/image/data/2022/September%202022/Saree.jpg" alt="">
                </div>
            </div>
            <div class="section">
                <div class="men" onclick="men()">
                    <h2>Men Section</h2>
                    <img src="https://www.rajwadi.com/image/data/2022/September%202022/sherwanis.jpg" alt="">
                </div>
                <div class="women" onclick="women()">
                    <h2>Women Section</h2>
                    <img src="https://www.rajwadi.com/image/data/2022/September%202022/lehenga.jpg" alt="">
                </div>

            </div>
            <div class="saree">
                <h2>Stay sanskari with a saree...</h2>
                <div class="saree-item">
                    <img src="https://www.rajwadi.com/image/cache/data/gota-patti-work-bandhani-print-saree-37757-297x408.jpg"
                        alt="">
                    <div class="lines">
                        <p>Bandhani Saree</p>
                        <p>Min 40% off</p>
                        <p><button class="btn1">Buy Now</button></p>
                    </div>

                </div>
                <div class="saree-item">
                    <img src="https://www.rajwadi.com/image/cache/data/bandhani-print-designer-saree-in-pink-color-37758-297x408.jpg"
                        alt="">
                    <div class="lines">
                        <p>Banarsi Saree</p>
                        <p>Min 35% off</p>
                        <p><button class="btn1">Buy Now</button></p>
                    </div>

                </div>
                <div class="saree-item">
                    <img src="https://www.rajwadi.com/image/cache/data/patan-patola-goldenrod-designer-saree-28255-800x1100.jpg"
                        alt="">
                    <div class="lines">
                        <p>Chikankari Saree</p>
                        <p>Min 20% off</p>
                        <p><button class="btn1">Buy Now</button></p>
                    </div>

                </div>
                <div class="saree-item">
                    <img src="https://www.rajwadi.com/image/cache/data/silk-multi-colour-patch-border-classic-saree-32371-800x1100.jpg"
                        alt="">
                    <div class="lines">
                        <p>Bomkai Saree</p>
                        <p>Min 25% off</p>
                        <p><button class="btn1">Buy Now</button></p>
                    </div>

                </div>
                <div class="saree-item">
                    <img src="https://www.rajwadi.com/image/cache/data/yellow-silk-sangeet-designer-traditional-saree-35171-800x1100.jpg"
                        alt="">
                    <div class="lines">
                        <p>Chanderi Saree</p>
                        <p>Min 50% off</p>
                        <p><button class="btn1">Buy Now</button></p>
                    </div>

                </div>
            </div>
            <div class="kurta">
                <h2>Stay Tradition with a kurta...</h2>
                <div class="kurta-item">
                    <img src="https://www.rajwadi.com/image/cache/data/navy-cream-kurta-pajama-for-men-27412-800x1100.jpg"
                        alt="">
                    <div class="lines">
                        <p>Blue stylish kurta</p>
                        <p>Min 40% off</p>
                        <p><button class="btn1">Buy Now</button></p>
                    </div>

                </div>
                <div class="kurta-item">
                    <img src="https://www.rajwadi.com/image/cache/data/polka-dots-men-s-printed-kurta-27418-800x1100.jpg"
                        alt="">
                    <div class="lines">
                        <p>Printed kurta</p>
                        <p>Min 35% off</p>
                        <p><button class="btn1">Buy Now</button></p>
                    </div>

                </div>
                <div class="kurta-item">
                    <img src="https://www.rajwadi.com/image/cache/data/mustard-yellow-cotton-kurta-pajama-27381-800x1100.jpg"
                        alt="">
                    <div class="lines">
                        <p>Yellow cotton kurta</p>
                        <p>Min 20% off</p>
                        <p><button class="btn1">Buy Now</button></p>
                    </div>

                </div>
                <div class="kurta-item">
                    <img src="https://www.rajwadi.com/image/cache/data/golden-white-color-kurta-pajama-31420-800x1100.jpg"
                        alt="">
                    <div class="lines">
                        <p>Wedding kurta</p>
                        <p>Min 25% off</p>
                        <p><button class="btn1">Buy Now</button></p>
                    </div>

                </div>
                <div class="kurta-item">
                    <img src="https://www.rajwadi.com/image/cache/data/navy-blue-kurta-pajama-in-for-wedding-wear-37680-297x408.jpg"
                        alt="">
                    <div class="lines">
                        <p>Simple kurta</p>
                        <p>Min 50% off</p>
                        <p><button class="btn1">Buy Now</button></p>
                    </div>

                </div>
            </div>

            <div class="dress">
                <h2>Stay model with a dress...</h2>
                <div class="dress-item">
                    <img src="https://www.rajwadi.com/image/cache/data/designer-floor-length-georgette-fabric-anarkali-suit-37726-297x408.jpg"
                        alt="">
                    <div class="lines">
                        <p>Salwar kameez</p>
                        <p>Min 20% off</p>
                        <p><button class="btn1">Buy Now</button></p>
                    </div>
                </div>
                <div class="dress-item">
                    <img src="https://www.rajwadi.com/image/cache/data/sequins-work-net-dress-material-27917-297x408.jpg"
                        alt="">
                    <div class="lines">
                        <p>Sequins Work net</p>
                        <p>Min 30% off</p>
                        <p><button class="btn1">Buy Now</button></p>
                    </div>
                </div>
                <div class="dress-item">
                    <img src="https://www.rajwadi.com/image/cache/data/navy-blue-festival-georgette-designer-palazzo-suit-36195-297x408.jpg"
                        alt="">
                    <div class="lines">
                        <p>Rajwadi Blue dress</p>
                        <p>Min 35% off</p>
                        <p><button class="btn1">Buy Now</button></p>
                    </div>
                </div>
                <div class="dress-item">
                    <img src="https://www.rajwadi.com/image/cache/data/simplistic-navy-blue-faux-georgette-designer-palazzo-suit-34028-297x408.jpg"
                        alt="">
                    <div class="lines">
                        <p>Rajputi Dress</p>
                        <p>Min 10% off</p>
                        <p><button class="btn1">Buy Now</button></p>
                    </div>
                </div>
                <div class="dress-item">
                    <img src="https://www.rajwadi.com/image/cache/data/wedding-wear-sky-blue-and-mustard-yellow-lehenga-choli-37765-252x347.jpg"
                        alt="">
                    <div class="lines">
                        <p>Wedding Dress</p>
                        <p>Min 5% off</p>
                        <p><button class="btn1">Buy Now</button></p>
                    </div>
                </div>
            </div>
            <div class="pathani">
                <h2>Stay stylish with a Pathani...</h2>
                <div class="pathani-item">
                    <img src="https://www.rajwadi.com/image/cache/data/0G2B2357-c-800x1100.jpg" alt="">
                    <div class="lines">
                        <p>Red stylish Pathani</p>
                        <p>Min 35% off</p>
                        <p><button class="btn1">Buy Now</button></p>
                    </div>

                </div>
                <div class="pathani-item">
                    <img src="https://i.pinimg.com/originals/56/dc/fe/56dcfe206ae645a9ac888ff0d2519052.jpg" alt="">
                    <div class="lines">
                        <p>Blue Pathani Suit</p>
                        <p>Min 57% off</p>
                        <p><button class="btn1">Buy Now</button></p>
                    </div>

                </div>
                <div class="pathani-item">
                    <img src="https://www.rajwadi.com/image/cache/data/simple-printed-pathani-suit-for-any-function-33456-800x1100.jpg"
                        alt="">
                    <div class="lines">
                        <p>Simple printed Pathani</p>
                        <p>Min 33% off</p>
                        <p><button class="btn1">Buy Now</button></p>
                    </div>

                </div>
                <div class="pathani-item">
                    <img src="https://www.rajwadi.com/image/cache/data/cotton-silk-white-pathani-suit-34744-800x1100.jpg"
                        alt="">
                    <div class="lines">
                        <p>Cotton silk Pathani</p>
                        <p>Min 44% off</p>
                        <p><button class="btn1">Buy Now</button></p>
                    </div>

                </div>
                <div class="pathani-item">
                    <img src="https://www.rajwadi.com/image/cache/data/black-and-white-pathani-suit-for-men-35286-800x1100.jpg"
                        alt="">
                    <div class="lines">
                        <p>Black & White Pathani</p>
                        <p>Min 37% off</p>
                        <p><button class="btn1">Buy Now</button></p>
                    </div>

                </div>
            </div>
            <div class="top">
                <h2>Stay hot with a top...</h2>
                <div class="top-item">
                    <img src="https://www.rajwadi.com/image/cache/data/cotton-silk-printed-tunic-top-33357-800x1100.jpg"
                        alt="">
                    <div class="lines">
                        <p>Cotton slik</p>
                        <p>Min 20% off</p>
                        <p><button class="btn1">Buy Now</button></p>
                    </div>
                </div>
                <div class="top-item">
                    <img src="https://www.rajwadi.com/image/cache/data/simple-navy-blue-color-tunic-top-33347-800x1100.jpg"
                        alt="">
                    <div class="lines">
                        <p>Simlpe</p>
                        <p>Min 33% off</p>
                        <p><button class="btn1">Buy Now</button></p>
                    </div>
                </div>
                <div class="top-item">
                    <img src="https://www.rajwadi.com/image/cache/data/cotton-yellow-color-tunic-top-33346-800x1100.jpg"
                        alt="">
                    <div class="lines">
                        <p>Floral</p>
                        <p>Min 27% off</p>
                        <p><button class="btn1">Buy Now</button></p>
                    </div>
                </div>
                <div class="top-item">
                    <img src="https://www.rajwadi.com/image/cache/data/2.jpg-b-800x1100.jpg" alt="">
                    <div class="lines">
                        <p>Jacket style</p>
                        <p>Min 30% off</p>
                        <p><button class="btn1">Buy Now</button></p>
                    </div>
                </div>
                <div class="top-item">
                    <img src="https://www.rajwadi.com/image/cache/data/handkerchief-layer-lehenga-with-embroidered-crop-top-21215-297x408.jpg"
                        alt="">
                    <div class="lines">
                        <p>Crop top</p>
                        <p>Min 40% off</p>
                        <p><button class="btn1">Buy Now</button></p>
                    </div>
                </div>

            </div>
            <div class="nehru">
                <h2>Stay classy with a Nehru Jacket...</h2>
                <div class="nehru-item">
                    <img src="https://www.rajwadi.com/image/cache/data/stylish-nehru-jacket-set-with-digital-geometric-print-38864-800x1100.jpg" alt="">
                    <div class="lines">
                        <p>Pista Green Nehru Jacket</p>
                        <p>Min 40% off</p>
                        <p><button class="btn1">Buy Now</button></p>
                    </div>

                </div>
                <div class="nehru-item">
                    <img src="https://www.rajwadi.com/image/cache/data/mens-black-koti-set-25517-800x1100.jpg" alt="">
                    <div class="lines">
                        <p>Black Nehru Jacket</p>
                        <p>Min 52% off</p>
                        <p><button class="btn1">Buy Now</button></p>
                    </div>

                </div>
                <div class="nehru-item">
                    <img src="https://www.rajwadi.com/image/cache/data/wedding-wear-art-silk-nehru-jacket-set-35764-800x1100.jpg"
                        alt="">
                    <div class="lines">
                        <p>Art Slik Nehru Jacket</p>
                        <p>Min 46% off</p>
                        <p><button class="btn1">Buy Now</button></p>
                    </div>

                </div>
                <div class="nehru-item">
                    <img src="https://www.rajwadi.com/image/cache/data/peach-color-nehru-jacket-set-for-mens-wear-37705-800x1100.jpg"
                        alt="">
                    <div class="lines">
                        <p>Peach Nehru Jacket</p>
                        <p>Min 70% off</p>
                        <p><button class="btn1">Buy Now</button></p>
                    </div>

                </div>
                <div class="nehru-item">
                    <img src="https://www.rajwadi.com/image/cache/data/multi-color-geometric-print-nehru-jacket-set-38869-800x1100.jpg"
                        alt="">
                    <div class="lines">
                        <p>Blue Nehru Jacket</p>
                        <p>Min 40% off</p>
                        <p><button class="btn1">Buy Now</button></p>
                    </div>

                </div>
            </div>
        </div>
        </div>
    </main>
    <footer class="flex-all-center">
        <p>
            Copyright &copy; Rajwadi.com
        </p>
    </footer>
    <script src="js/script.js"></script>

</body>

</html>