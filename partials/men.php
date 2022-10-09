<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
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
    <link rel="stylesheet" href="../css1/style.css">
    <link rel="stylesheet" href="../css1/utils.css">
    <link rel="stylesheet" href="../css1/responsive.css">
    <link rel="icon" type="image/x-icon" href="../favicon.ico">

</head>

<body>
    <header>
        <nav>
            <div class="logo">
                <a href="welcome.php"><img src="../logo.png" alt=""></a>
            </div>

            <div class="search">
                <input type="text" name="button" placeholder="Serach Here">
                <button class="btn">Search</button>
            </div>

            <ul>
                <li><a href="../welcome.php">Home</a></li>
                <li><a href="men.php">Men</a></li>
                <li><a href="women.php">Women</a></li>
                <li> <a href="../Contact.php">ContactUs</a></li>
                <li> <a href="../logout.php">Logout</a></li>
            </ul>

        </nav>

    </header>
    <main>
        <div class="container">
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

            <div class="nehru">
                <h2>Stay classy with a Nehru Jacket...</h2>
                <div class="nehru-item">
                    <img src="https://www.rajwadi.com/image/cache/data/stylish-nehru-jacket-set-with-digital-geometric-print-38864-800x1100.jpg"
                        alt="">
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
    <script src="../js/script1.js"></script>

</body>

</html>