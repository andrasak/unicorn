<?php
    require __DIR__ . '/src/app.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unicorn</title>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400;600;700;900&display=swap" rel="stylesheet">
    <meta name="description" content="Story about Gregor Samsa">
    <script src="https://kit.fontawesome.com/be364085d2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/glide.core.css">
    <link rel="stylesheet" href="tiny-slider-master/dist/tiny-slider.css">
    <script>
        function myFunction() {
            var x = document.getElementById("mMenu");
            if (x.style.display === "block") {
                x.style.display = "none";
            } else {
                x.style.display = "block";
            }
        }
    </script>
</head>

<body>
    <header class="site-header"> <!-- SITE-HEADER START-->
       <div class="container flex-container">
         <div class="logo">UNICORN</div>
          <nav class="main-nav">
            <ul class="flex-container">
              <li><a href="#">Home</a></li>
              <li><a href="#">About</a></li>
              <li><a href="#">Stories</a></li>
              <li><a href="#">Hello</a></li>
              <li><a href="#"><i class="fas fa-bars"></i></a></li>
            </ul>
          </nav>
           <nav class="mobile-nav">
                <ul id="mMenu" class="flex-container"> 
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Stories</a></li>
                <li><a href="#">Hello</a></li>
                </ul>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                    <i class="fa fa-bars"></i>
                </a>
            </nav>
       </div>
       <div class="top-container container flex-container">
              <h1>STORYTELLER</h1>
              <p>One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections.</p>
              <a href="#">read the rest</a>
       </div>
    </header> <!-- SITE-HEADER END-->
    <section class="hero"> <!-- HERO START-->
        <div class="container">
            <img src="images/broccoli.png" alt="broccoli">
            <h2>Who & Why</h2>
            <p>The gentlemen who rented the room would sometimes take their evening meal at home in the living room that was used by everyone, and so the door to this room was often kept in the evening. But Gregor found it easy to give up having the door open, he had, after all, often failed to make use of it when it was open and, without the family having noticed it, lain in his room in its darkest corner. One time, though, the charwoman left the door.</p>
        </div>
    </section> <!-- HERO END-->
    <section class="services"> <!-- SERVICES START-->
        <div class="container flex-container">
            <div class="section-content">
                <img src="images/clock.png" alt="wow_feature">
                <h3>An Wow Feature</h3>
                <p>The gentlemen who rented the room would sometimes take their evening meal at home in the living. </p>
            </div>
             <div class="section-content">
                <img src="images/vector.png" alt="beautiful_feature">
                <h3>A Beautiful Feature</h3>
                <p>The gentlemen who rented the room would sometimes take their evening meal at home in the living. </p>
            </div>
             <div class="section-content">
                <img src="images/land_working.png" alt="amazing_feature">
                <h3>An Amazing Feature</h3>
                <p>The gentlemen who rented the room would sometimes take their evening meal at home in the living. </p>
            </div>
        </div>
    </section> <!-- SERVICES END-->
    <section class="featured-articles"> <!-- FEATURED-ARTICLES START-->
        <div class="container container2">
            <div class="section-heading">
                <h2>Featured Articles</h2>
                <p>The gentlemen who rented the room would sometimes take their evening meal at home in the living room that was used by everyone, and so the door to this room was often kept closed in the. </p>
            </div>
            <div class="section-blocks flex-container">
                <div class="glide__track04" data-glide-el="track">
                     <ul class="glide__slides04">
                <li class="block space">
                    <h5>COMIC</h5>
                    <p>A million ways to die in the wild wild wild west</p>
                    <div class="image-text flex-container">
                        <div class="image">
                            <img src="images/feature1.png" alt="jimmy_jeferson">
                        </div>
                        <div class="text"><h5>JIMMY JEFFERSON 21/08/2013</h5></div>
                    </div>
                </li>
                <li class="block space">
                    <h5>LIFESTYLE</h5>
                    <p>The most comfortable chair comes with no backpain</p>
                    <div class="image-text flex-container">
                        <div class="image">
                            <img src="images/feature2.png" alt="gail_gutierrez">
                        </div>
                        <div class="text"><h5>GAIL GUTIERREZ 21/08/2013</h5></div>
                    </div>
                </li>
                <li class="block space">
                    <h5>TRAVEL</h5>
                    <p>journey to the center of the earth with jefferson</p>
                    <div class="image-text flex-container">
                        <div class="image">
                            <img src="images/feature3.png" alt="mason_johnston">
                        </div>
                        <div class="text"><h5>MASON JOHNSTON 21/08/2013</h5></div>
                    </div>
                </li>
                <li class="block space">
                    <h5>COMIC</h5>
                    <p>A million ways to die in the wild wild wild west</p>
                    <div class="image-text flex-container">
                        <div class="image">
                            <img src="images/feature1.png" alt="jimmy_jefferson">
                        </div>
                        <div class="text"><h5>JIMMY JEFFERSON 21/08/2013</h5></div>
                    </div>
                </li>
                    </ul>
                </div>
                <div class="glide__arrows04" data-glide-el="controls">
                        <button class="glide__arrow04 glide__arrow--right" data-glide-dir=">"><i class="fas fa-angle-right"></i></button>
                </div>
            </div>
           </div> 
    </section> <!-- FEATURED-ARTICLES END -->
    <section class="clients"> <!-- CLIENTS START-->
        <div class="container">
            <div class="section-clients">
                <h2>Clients</h2>
            </div>
            <div class="glide flex-container">
                <div class="glide__track" data-glide-el="track">
                    <ul class="glide__slides">
                        <li class="glide__slide"><img src="images/clients1.png" alt="client_logo"></li>
                        <li class="glide__slide"><img src="images/clients2.png" alt="client_logo"></li>
                        <li class="glide__slide"><img src="images/clients3.png" alt="client_logo"></li>
                        <li class="glide__slide"><img src="images/clients4.png" alt="client_logo"></li>
                        <li class="glide__slide"><img src="images/clients5.png" alt="client_logo"></li>
                        <li class="glide__slide"><img src="images/clients6.png" alt="client_logo"></li>
                    </ul>
               </div>
                <div class="glide__arrows0" data-glide-el="controls">
                        <button class="glide__arrow0" data-glide-dir=">"><i class="fas fa-angle-right"></i></button>
                    </div>
            </div>
          </div>       
    </section> <!-- CLIENTS END-->
    <section class="portfolio"> <!-- PORTFOLIO START-->
        <div class="container">
            <div class="section-portfolio section-heading">
                <h2>Portfolio & Screenshots</h2>
                <p>The gentlemen who rented the room would sometimes take their evening meal at home in the living room that was used by everyone, and so the door to this room was often kept in the</p>
            <nav class="meniu">
                <ul class="second-nav flex-container">           
                <li><a href="#"><h5>Art</h5></a></li>
                <li><a href="#"><h5>Mystey</h5></a></li>
                <li><a href="#"><h5>Illusion</h5></a></li>
                <li><a href="#"><h5>Travel</h5></a></li>
                <li><a href="#"><h5>Paitings</h5></a></li>
                </ul>
            </nav>
            </div>
            <div class="glide02">
                <div class="glide_track02" data-glide-el="track">
                   <ul class="screenshots flex-container">
                       <li class="glide_slide02"><img src="images/portfolio1-compressor.png" alt="portfolio_eveningview"></li>
                        <li class="glide_slide02"><img src="images/portfolio2-compressor.png" alt="portfolio_juwelly"></li>
                        <li class="glide_slide02"><img src="images/portfolio3-compressor.png" alt="portfolio_workingspace"></li>
                        <li class="glide_slide02"><img src="images/portfolio1-compressor.png" alt="portfolio_eveningview"></li>
                        <li class="glide_slide02"><img src="images/portfolio2-compressor.png" alt="portfolio_juwelly"></li>
                    </ul>
                </div>
                <div id="glidedots" class="glide__bullets0" data-glide-el="controls[nav]">
                    <button id="glide__bullet1" class="glide__bullet0" data-glide-dir="=0"></button>
                    <button class="glide__bullet0" data-glide-dir="=1"></button>
                    <button class="glide__bullet0" data-glide-dir="=2"></button>
                    <button class="glide__bullet0" data-glide-dir="=3"></button>
                </div>
            </div>
        </div>
    </section> <!-- PORTFOLIO END-->
    <section class="quote"> <!-- QUOTE START-->
        <div class="container">
            <div class="main-quote">
                <i class="fas fa-quote-right"></i>
                <p>Happiness cannot be traveled to, owned, earned, or worn. It is the spiritual experience of living every minute with love, grace & gratitude.</p>
                <h4>Denis Waitley</h4>
            </div>
        </div>
    </section> <!-- QUOTE END-->
    <section class="team-members"> <!-- TEAM-MEMBERS START-->
        <div class="container">
            <div class="team section-heading">
                <h2>Team Members</h2>
                <p>The gentlemen who rented the room would sometimes take their evening meal at home in the living room that was used by everyone, and so the door to this room was often kept in the</p>
            </div>
            <div class="all-members flex-container">
                <div class="member">
                    <img src="images/JamesPhilly.png" alt="james_philly">
                    <h4>JAMES PHILLY</h4>
                    <p>Lead Developer</p>
                </div>
                <div class="member">
                    <img src="images/CactusJack.png" alt="cactus_jack">
                    <h4>CACTUS JACK</h4>
                    <p>3D Model Designer</p>
                </div>
                <div class="member">
                    <img src="images/JackSparrow.png" alt="jack_sparrow">
                    <h4>JACK SPARROW</h4>
                    <p>Master of All Trade</p>
                </div>
                <div class="member">
                    <img src="images/YagaSquarehead.png" alt="yaga_squarehead">
                    <h4>YAGA SQUAREHEAD</h4>
                    <p>Manages Money</p>
                </div>
            </div>
        </div>
    </section> <!-- TEAM-MEMBERS END -->
    <section class="facts"> <!-- FACTS START -->
        <div class="container">
            <div class="facts-heading section-heading">
                <h2>Facts & Numbers</h2>
            </div>
            <div class="numbers flex-container blog-column">
                <div class="number">
                    <h3>110</h3>
                    <p>successful projects</p>
                </div>
                <div class="number">
                    <h3>25</h3>
                    <p>awesome clients</p>
                </div>
                <div class="number">
                    <h3>30</h3>
                    <p>open source plugins</p>
                </div>
                <div class="number">
                    <h3>13</h3>
                    <p>open source themes</p>
                </div>
            </div>
        </div>
    </section> <!-- FACTS END -->
    <section class="blog"> <!-- BLOG START -->
        <div class="container flex-container blog-column">
            <div class="new-blog reverse">
                <img src="images/blog1-compressor.png" alt="blogphoto_photoshoot">
                <div class="info container size">
                    <h5>Travel / 21st March, 2014</h5>
                    <h3>A New Product Is Coming</h3>
                    <p>The office assistant was the boss’s man, spineless, and with no understanding. What about if he reported sick? But that would be extremely strained and suspicious as in fifteen years of ser-vice Gregor had never.</p>
                </div>
                
            </div>
            <div class="new-blog">
                <img src="images/blog2-compressor.png" alt="blogphoto_gametime">
                <div class="info container size">
                    <h5>Gadget / 3rd March, 2014</h5>
                    <h3>Jimmy's New Xbox Controller</h3>
                    <p>The office assistant was the boss’s man, spineless, and with no understanding. What about if he reported sick? But that would be extremely strained and suspicious as in fifteen years of ser-vice Gregor had never.</p>
                </div>
            </div>
            <div class="new-blog reverse">
                <img src="images/blog3-compressor.png" alt="blogphoto_snacktime">
                <div class="info container size">
                    <h5>Travel / 21st March, 2014</h5>
                    <h3>A New Product Is Coming</h3>
                    <p>The office assistant was the boss’s man, spineless, and with no understanding. What about if he reported sick? But that would be extremely strained and suspicious as in fifteen years of ser-vice Gregor had never.</p>
                </div>
            </div>
        </div>
    </section> <!-- BLOG END -->
    <section class="new-posts"> <!-- NEW-POST START -->
        <div class="container">
            <div class="new flex-container">
                <div class="glide__track03" data-glide-el="track">
                     <ul class="glide__slides03  flex-container">  
                        <li class="post">
                            <h4>Another Day In Paradise</h4>
                            <h5>Travel / 21st March, 2014</h5>
                        </li>
                        <li class="post">
                            <h4>Jimmy's New Book on Aliens</h4>
                            <h5>Personal / 21st March, 2014</h5>
                        </li>
                        <li class="post">
                            <h4>Sarah's New House</h4>
                            <h5>Travel / 21st March, 2014</h5>
                        </li>
                    </ul>
                </div>
                <div class="glide__arrows03" data-glide-el="controls">
                    <button class="glide__arrow03" data-glide-dir=">"><i class="fas fa-angle-right"></i></button>
                </div>
            </div>
        </div>
    </section> <!-- NEW-POST END -->
    <section class="tweets"> <!-- TWEETS START -->
        <div class="container flex-container column">
            <i class="fab fa-twitter"></i>
            <img src="images/loveless.png" alt="loveless_photo">
            <p>Happiness cannot be traveled to, owned, earned, or worn. It is the spiritual experience of living every minute with love, grace & gratitude.</p>
            <h5>@loveless</h5>
        </div>
    </section> <!-- TWEETS END -->
    <section class="footer1"> <!-- FOOTER1 START -->
        <div class="container flex-container space container3">
            <div class="primary-footer">
                <h3>UNICORN</h3>
                <p>One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible wermin. He lay on his</p>
                <form class="contact-form" id="contact" action="index.php" method="post">
                    <div class="input-row flex-container">
                        <input type="email" name="email" placeholder="EMAIL" required>
                        <input type="text" name="subject" placeholder="SUBJECT" required>
                    </div>
                    <textarea name="message" rows="1" placeholder="MESSAGE" required></textarea>
                    <button class="hvr-icon-forward" name="submit" type="submit" id="contact-submit">SEND <i class="fas fa-caret-right hvr-icon"></i></button>
                </form>
            </div>
            <div class="secondary-footer">
                <div class="links">
                    <ul>
                        <li><h4>LINKS</h4></li>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Menu</a></li>
                        <li><a href="#">Restaurants</a></li>
                        <li><a href="#">Work Hours</a></li>
                        <li><a href="#">Call Hours</a></li>
                    </ul>
                </div>
                <div class="friends">
                    
                    <ul>
                        <li><h4>FRIENDS</h4></li>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Menu</a></li>
                        <li><a href="#">Restaurants</a></li>
                    </ul>
                </div>
                <div class="social">
                    
                    <ul>
                        <li><h4>SOCIAL</h4></li>
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Github</a></li>
                        <li><a href="#">Printerest</a></li>
                        <li><a href="#">Google Plus</a></li>
                        <li><a href="#">Dribbble</a></li>
                        <li><a href="#">Flickr</a></li>
                        <li><a href="#">Others</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section> <!-- FOOTER1 END -->
    <section class="footer2"> <!-- FOOTER2 START -->
        <div class="container space">
            <div class="main-footer">
                <div class="last-word">
                    <p>One morning, when Gregor Samsa woke from troubled dreams, he found</p>
                    <p>&copy 2015 Your Awesome Company</p>
                </div>
                <nav class="secondary-nav">
                    <ul class="last-nav flex-container">
                        <li><a href="#">TERMS</a></li>
                        <li><a href="#">PRIVACY POLICY</a></li>
                        <li><a href="#">CONTACT</a></li>
                        <li><a href="#">JOB</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </section> <!-- FOOTER2 END -->
    <script src="glide-3.4.1/dist/glide.js"></script>
    <script src="jquery.min.js"></script>
    <script src="manojquery.js"></script>
    <script>
        
    const config = {
    type: "carousel",
    perView: 5,
    gap: -140,
        breakpoints: {
    800: {
      perView: 3
    },
    640: {
      perView: 2,
    },
    417:{
        perView: 1
    }
  }
    };
        
    const config2 = {
    type: "carousel",
    perView: 3,
    };
        
    const config3 = {
    type: "slider",
    perView: 3,
    gap: 40,
    bound: true,
        breakpoints: {
    800: {
      perView: 2
    },
    640: {
      perView: 2,
        gap: 20
    },
  }
     };
    const config4 = {
        type: "carousel",
        dragThreshold:false,
        perView: 3,  
         breakpoints: {
    640: {
      perView: 2,
    },
    414: {
      perView: 2,
    },
  }
    };
        
 new Glide(".glide02", config4).mount();        
        
new Glide(".glide", config).mount(); 
        
new Glide(".new", config2).mount(); 
        
new Glide(".section-blocks", config3).mount();  
        
</script>
   
</body>
</html>
