

<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    


    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Jungle Fit!</title>
    <link rel="icon" type="image/png" href="img/icon.png" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    <script src="javascript/script2.js"></script>
    <script>    
    if(typeof window.history.pushState == 'function') {
        window.history.pushState({}, "Hide", '<?php echo $_SERVER['PHP_SELF'];?>');
    }
</script>
    

  </head>
  <body>
    
    <header>

      <nav class="navbar navbar-expand-md">
        <ul class="navbar nav" data-aos="fade-up" data-aos-duration="2000">
          <li class="nav-item"><a class="nav-link" href="index.php">HOME</a></li>
          <li class="nav-item"><a class="nav-link" href="fitnessroom.php">FITNESS ROOM</a></li>
          <li class="nav-item"><a class="nav-link" href="coaches.php">COACHES</a></li>
          <li class="nav-item"><a class="nav-link" href="about.php">ABOUT</a></li>
          <li class="nav-item"><a class="nav-link" id="my-id" href="#contact">CONTACT</a></li>
        </ul>
      </nav>

      <div data-aos="fade-up" data-aos-duration="2000"></div>

    </header>

    <section class="sec1">

      <div>

        <h2 data-aos="fade-up" data-aos-duration="1000">SERVICES FOR A<br>FITNESS ROOM</h2>

        <div data-aos="fade-up" data-aos-duration="2000">

          <div>
            <button name="button" onclick="window.location.href = 'fitnessroom.php';" type="button" data-aos="fade-up" data-aos-duration="2000">Details.</button>
          </div>
          
          <div>
            <p>Fitness Room</p>
            <p >Showcase site</p>
          </div>
          
        </div>

      </div>

      <div></div>


    </section>

    <section class="sec2">

      <div>

        <h2 data-aos="fade-up" data-aos-duration="1000">COACHES</h2>

        <div data-aos="fade-up" data-aos-duration="2000">

          <div>
            <button onclick="window.location.href = 'coaches.php';"  data-aos="fade-up" data-aos-duration="2000" name="button" href="fitnessroom.php" type="button">Details.</button>
          </div>
          
          <div>
            <p >Coaches</p>
            <p >Showcase site</p>
          </div>
          
        </div>

      </div>

      <div></div>


    </section>

    <section class='sec3'>
      <div>

        <h2 data-aos="fade-up" data-aos-duration="1000">JOIN US !</h2>

        <div class="result" data-aos="fade-up" data-aos-duration="1500"><?php if (isset($_GET["resultat"])){
          echo $_GET["resultat"];
          unset($_GET["resultat"]);
          } ?>
        </div>
        
        <form class="nlb" action="newsletter.php" method="post" data-aos="fade-up" data-aos-duration="1500">
          <input type="email" autocomplete="off" name="email" placeholder="Enter your e-mail adress...">
          <button>Subscribe</button>
        </form>

        <div data-aos="fade-up" data-aos-duration="1500"></div>
        
        <form action="unscribe.php" class="nlb2" method="post" data-aos="fade-up" data-aos-duration="1800">
          <input type="email" autocomplete="off" name="email2" placeholder="Enter your e-mail adress...">
          <button>unsubscribe</button>
        </form>
        <div>
          <a href="https://www.instagram.com/junglefit_agency/?hl=fr"><i class="fab fa-instagram" data-aos="fade-up" data-aos-duration="1800" ></i></a>
          <a href="https://www.facebook.com/profile.php?id=100076501943252"><i class="fab fa-facebook-f" data-aos="fade-up" data-aos-duration="2100"></i></a>
          <a href="https://twitter.com/AmoudruzGreg"><i class="fab fa-twitter" data-aos="fade-up" data-aos-duration="2400"></i></a>
          <a href="https://www.deezer.com/fr/"><i class="fab fa-deezer" data-aos="fade-up" data-aos-duration="2700"></i></a>
          <a href="https://www.linkedin.com/in/jungle-fit-a19a27228/"><i class="fab fa-linkedin-in" data-aos="fade-up" data-aos-duration="3000"></i></a>
        </div>
      </div>
    </section>

    <footer id="contact" >
      <div >
        <div data-aos="fade-up" data-aos-duration="1000">
          <div></div>
          <h3>THE JUNGLE</h3>
          <p>We are a competent and <br> close-knit team. We will <br> support you throughout <br> your development.</p>
        </div>
        <div data-aos="fade-up" data-aos-duration="1400">
          <div></div>
          <h3>NAVIGATIONS</h3>
          <a href="index.php">HOME</a>
          <a href="fitnessroom.php">FITNESS ROOM</a>
          <a href="coaches.php">COACHES</a>
          <a href="about.php">ABOUT</a>
          <a href="#contact">CONTACT</a>

        </div>

        <div data-aos="fade-up" data-aos-duration="1700">
          <div></div>
          <h3>CONTACT</h3>
          <p>4096 N Highland St,<br>
             Arlington, VA<br>
            32101, USA<br>
            junglefit@gmail.com<br>
            0788064060
            </p>
        </div>

        <div data-aos="fade-up" data-aos-duration="2000">
          <div></div>
          <h3>SCHEDULE</h3>
          <p>Mon-Thu: 8:30 - 18:30 <br>
            Fri: 8:00 - 16:00</p>
        </div>
      </div>
      <div onclick="window.location.href = 'https://www.cnil.fr/fr/reglement-europeen-protection-donnees';">RGPD</div>
    </footer>



    <!-- scripts -->
    <script src="https://kit.fontawesome.com/eaf125a6c0.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="javascript/script1.js"></script>
    
    
  </body>
</html>
