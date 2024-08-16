<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Slideshow</title>
    <style>
        body {
            background: url('hjhj.png') no-repeat center center fixed;
            background-size: cover;
            text-align: center;
        }

        #slideshow-container {
            position: relative;
            max-width: 800px;
            margin: 0 auto;
        }

        .mySlides {
            display: none;
        }

        .slide-image {
            width: 100%;
            height: auto;
            border-radius: 10px; 
        }

        .text {
            position: absolute;
            bottom: 0;
            width: 100%;
            background-color: peachpuff;
            padding: 10px;
            text-align: center;
    font-size: 16px;
        }

        .prev, .next {
            cursor: pointer;
            display: inline-block;
            padding: 10px 20px; 
            background-color: peachpuff;
            color: brown;
            text-decoration: none;
            border: none;
            border-radius: 6px;
            font-size: 14px; 
            transition: background-color 0.3s, color 0.3s;
            margin: 10px; 
        }

        .prev:hover, .next:hover {
            background-color: yellow;
        }

        .prev:hover, .next:hover {
            background-color: black;
            color: white;
        }

        .prev {
            left: 0;
        }

        .next {
            right: 0;
        }

        .go-back {
            cursor: pointer;
            display: inline-block;
            padding: 15px 40px; 
            background-color: peachpuff;
            color: brown;
            text-decoration: none;
            border: none;
            border-radius: 6px;
            font-size: 18px; 
            transition: background-color 0.3s, color 0.3s;
            margin: 10px;
        }

        .go-back:hover {
            background-color: yellow;
        }

        .go-back:hover {
            background-color: black;
            color: white;
        }
    </style>
</head>
<body>
    <h1> 💓THESE ARE THE ANGELS YOU'RE HELPING 💓</h1>

    <div id="slideshow-container">
        <div class="mySlides">
            <img class="slide-image" src="poor.jpg" alt="Image 1">
            <div class="text">Meet Lily, who, with the help of generous donations, now enjoys a stable home and education.</div>
        </div>
        <div class="mySlides">
            <img class="slide-image" src="poor2.jpg" alt="Image 2">
            <div class="text">Sophia, thanks to your contributions, has access to nutritious meals, ensuring her well-being.</div>
        </div>
        <div class="mySlides">
            <img class="slide-image" src="poor3.jpg" alt="Image 3">
            <div class="text">James, who, with your support, has a brighter future filled with hope and possibilities.</div>
        </div>
        <div class="mySlides">
    <img class="slide-image" src="poor4.jpg" alt="Image 4">
    <div class="text">There's Daniel, who received support to access healthcare and is growing strong and healthy.</div>
</div>

        <div class="mySlides">
            <img class="slide-image" src="poor5.jpg" alt="Image 5">
            <div class="text">Aiden's dreams are within reach, as your donations provided him with educational opportunities.</div>
        </div>
        <div class="mySlides">
            <img class="slide-image" src="poor6.jpg" alt="Image 6">
            <div class="text">James, who, with your support, has a brighter future filled with hope and possibilities.</div>
        </div>
        <div class="mySlides">
            <img class="slide-image" src="poor7.jpg" alt="Image 7">
            <div class="text"> And finally Olivia, once struggling, now has warm clothing and essentials, all due to your generous contributions.</div>
        </div>
    </div>

    <a class="prev" onclick="plusSlides(-1)">Previous</a>
    <a class="go-back" href="home.php">Go Back</a>
    <a class="next" onclick="plusSlides(1)">Next</a>

    <script>
        let slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function showSlides(n) {
            let i;
            let slides = document.getElementsByClassName("mySlides");

            if (n > slides.length) {
                slideIndex = 1;
            }

            if (n < 1) {
                slideIndex = slides.length;
            }

            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }

            slides[slideIndex - 1].style.display = "block";
        }
    </script>
</body>
</html>
