<?php include "functions.php";
include('config.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>StarLink- About Us</title>
</head>

<body>

  <body class="aboutus-background-gif">
    <header>
      <nav class="nav-bar">
        <div class="container">
          <a href="index.php" class="logo"><img src="img/sl5.png" alt="Logo"></a>
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="product.php">Product</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="aboutus.php">About us</a></li>
          </ul>
        </div>
      </nav>



    </header>
    <div class="section bg1">
      <h1 class="revealUp"> <?php $result = GetDBInfo('Info1', 14);
                            foreach ($result as $info) {
                              echo "$info->Info1";
                            } ?></h1>
    </div>
    <div>
      <h2 class="aboutus-textcontainer">
        <?php $result = GetDBInfo('Info1', 15);
        foreach ($result as $info) {
          echo "$info->Info1";
        } ?>
      </h2>
    </div>

    <style>
      .aboutus-textcontainer {
        width: 75%;
        position: absolute;
        padding: 30px;
        text-align: center;
        overflow: hidden;
        display: flex;
        justify-content: center;
        align-items: center;
        top: 50px;
        left: 12.5%;
        border-radius: 25px;
        background-color: gray;
        box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
        opacity: 90%;
      }
    </style>


    <div class="spacer"></div>
    <div class="aboutp-content"></div>
    <footer class="footer-aboutp"></footer>
    <script>
      console.log(window);
      window.addEventListener("scroll", () => {
        console.log(window.pageYOffset);
      });
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/ScrollTrigger.min.js"></script>


    <script src="about.js"></script>
  </body>

</html>