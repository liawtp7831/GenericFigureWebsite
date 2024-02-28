<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/slideshow.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <link rel="stylesheet" href="css/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="javascript/dropdown.js"></script>
        <script src="javascript/slideshow.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    </head>

    <body>
        <?php include('header.php'); ?>
        <?php include('navigation.php'); ?>

        <div class="container-md">

            <div class="d-flex align-items-stretch">
                <a href="#" alt="Product Page" style="flex: 1; margin-right: 10px;">
                    <img src="source/bundle.jpeg" class="img-fluid" alt="bundle image" style="width: 100%; height: 100%;">
                </a>

                <div class="card text-white text-bg-secondary flex-grow-1 m-3 px-3 py-4" style="max-width: 500px; font-family: 'Arial, sans-serif';">
                    <div class="card-body text-center d-flex flex-column justify-content-center">
                        <p class="card-text mb-3" style="font-size: 24px; font-weight: bold;">
                            Welcome to Generic Figure
                        </p>

                        <p class="card-text" style="font-size: 18px;">
                            Shop figure, Pre-order Figurine, Free shipping to Peninsular Malaysia.
                            "Only what you can't imagine, nothing you can't buy."
                        </p>

                        <a href="#" alt="Product">
                            <button type="button" class="btn btn-light" style="font-size: 16px;">Buy Now</button>
                        </a>
                    </div>
                </div>
            </div>


            <!-- Slideshow container -->
            <div class="slideshow-container">
                <script>
                    function showSlides(n) {
                    let i;
                    let slides = document.getElementsByClassName("mySlides");
                    let dots = document.getElementsByClassName("dot");

                    if (n > slides.length) {
                        slideIndex = 1
                    }
                    if (n < 1) {
                        slideIndex = slides.length
                    }
                    for (i = 0; i < slides.length; i++) {
                        slides[i].style.display = "none";
                    }
                    for (i = 0; i < dots.length; i++) {
                        dots[i].className = dots[i].className.replace(" active", "");
                    }
                    slides[slideIndex-1].style.display = "block";
                    dots[slideIndex-1].className += " active";
                    }
                </script>

            <!-- Full-width images with number and caption text -->
            <div class="mySlides fade">
            <div class="numbertext">1 / 3</div>
            <img src="source/bundle.jpeg" style="width:100%" loading="lazy">
            <div class="text">Caption Text</div>
            </div>

            <div class="mySlides fade">
            <div class="numbertext">2 / 3</div>
            <img src="source/bundle.jpeg" style="width:100%" loading="lazy">
            <div class="text">Caption Two</div>
            </div>

            <div class="mySlides fade">
            <div class="numbertext">3 / 3</div>
            <img src="source/bundle.jpeg" style="width:100%" loading="lazy">
            <div class="text">Caption Three</div>
            </div>

            <!-- Next and previous buttons -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
            <br>

            <!-- The dots/circles -->
            <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
            </div>
        </div>
     
    </body>
</html>