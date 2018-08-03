<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <?php include("includes/head.html");?>
    <!--    Timeline JS-->
      <!-- 1 -->
      <link title="timeline-styles" rel="stylesheet" href="https://cdn.knightlab.com/libs/timeline3/latest/css/timeline.css">

      

    <link rel="stylesheet" href="css/landing2.css">
</head>

<body>
        <div class="name-plaque section one">
            <img class='plaque-image' src="raw/nameplaque.svg" alt="">
            <h1 class='name-title'>Jocelyn Huang</h1>
        </div>



    <div class="spacer"></div>



    <div class="container one">
        <img src="raw/geom-01.svg" alt="">
        <img src="raw/geom-02.svg" alt="">
        <img src="raw/geom-03.svg" alt="">
        <img src="raw/geom-04.svg" alt="">
        <img src="raw/geom-05.svg" alt="">
        <img src="raw/geom-06.svg" alt="">
        <img src="raw/geom-07.svg" alt="">
        <img src="raw/geom-08.svg" alt="">
        <img src="raw/geom-09.svg" alt="">
        <img src="raw/geom-10.svg" alt="">
        <img src="raw/geom-11.svg" alt="">
        <img src="raw/geom-12.svg" alt="">
        <img src="raw/geom-13.svg" alt="">
        <img src="raw/geom-14.svg" alt="">
        <img src="raw/geom-15.svg" alt="">
        <img src="raw/geom-16.svg" alt="">
        <img src="raw/geom-18.svg" alt="">
    </div>



    <div class="section two card-container">
        <img class='button-bkg one' src="raw/geom-01.svg" alt="">
        <img class='button-bkg two' src="raw/geom-01.svg" alt="">

        <div class='container-bkg'></div>

        <div class="card-bkg ">
            <div class="card-content about-me">
                <div class='text'>
                    <h2>About Me</h2>
                    <p>I’m a passionate web designer and developer who lives for creating and building beautiful yet effortlessly usable websites and applications.
                    </p>

                    <p>I recently graduated from the University of Virginia in May 2018, and am currently open to full-time employment opportunies.
                    </p>

                    <p>I love everything about working with digital products, but what fascinates me the most is how the digital space allows us to share information and our own creations in unimaginable ways.
                    </p>
                </div>
            </div>
        </div>

        <div class="card-bkg ">
            <div class="card-content about-me">
                <div class='text'>
                    <h2>The web and I were meant to be</h2>
                    <p>I have been in love once and still am with... the web.</p>

                    <p>Yes, it’s true - designing and development let’s me combine my artistic ability with my coding skills and indulge my fascination for psychology, businesss, and efficiency.
                    </p>

                    <p>When I discovered the field, I knew I found where I wanted to work for the rest of my life.
                    </p>

                    <p>It’s almost uncanny how well my background aligns with the space of digital products. Let me show you what I mean with the timeline below...</p>
                </div>
            </div>
        </div>

        <div class="card-bkg ">
            <div class="card-content about-me">
                <div class='text'>
                    <p>My accomplishments & experiences equip me with skills for success in work & life. Here is an overview of what I’ve been up to recently.
                    </p>
                </div>
            </div>
        </div>


        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>


    <div class="spacer"></div>
    
    <div class="parallax-container">
        <div class="container timeline">
            <img src="raw/geom-28.svg" alt="">
        </div>
    </div>
    
    <div class="section timeline">
        <script src="https://cdn.knightlab.com/libs/timeline3/latest/js/timeline.js"></script>

      <div id='timeline-embed' style="width: 100%; height: 600px"></div>
    <div class='btn-container'>
<!--        <button id='studgov'>Show Student Government</button>-->
        <button id='arts'> Music & Arts</button>
        <button id='design'> Design</button>
        <button id='dev'> Development</button>
        <button id='marketing'> Marketing</button>
        <button id="leadership">General Leadership</button>
        <button id="all">All</button>
    </div>

   <script>
        $(document).ready(function() {
            var embed = document.getElementById('timeline-embed');
            var options = {
                //            start_at_end: true,
                hash_bookmark: false,
                timenav_height_percentage: 60
            }
            embed.style.height = getComputedStyle(document.body).height;
            window.timeline = new TL.Timeline('timeline-embed', 'timeline.json', options);
            window.addEventListener('resize', function() {
                var embed = document.getElementById('timeline-embed');
                embed.style.height = getComputedStyle(document.body).height;
                timeline.updateDisplay();
            })
        });


        
        $(document).ready(function() {
            window.onload = function () {
//            console.log("Initializing boop beep boop");
          var allMarkers = [];
            $(".tl-timenav-item-container").find(".tl-timemarker").each(function() {
                allMarkers.push(this.id);
            });
                
            var musicElems = allMarkers.filter(markername => markername.includes("music") || markername.includes("flute") || markername.includes("conductor") || (markername.includes("symphony") && markername.includes("president") === false) || markername.includes("ensemble"));
                
            var studgovElems = allMarkers.filter(markername => markername.includes("council") || markername.includes("leadership") || markername.includes("lighting") || markername.includes("representative") || markername.includes("office"));
                
            var designElems = allMarkers.filter(markername => markername.includes("design") || markername.includes("second") || markername.includes("lighting") || markername.includes("web") || markername.includes("president") || markername.includes("guide"));
                
            var devElems = allMarkers.filter(markername => (markername.includes("web") && markername.includes("president") === false) || markername.includes("development") || markername.includes("developer") );
                 
            var marketingElems = allMarkers.filter(markername => markername.includes("marketing") || markername.includes("second") || markername.includes("brand") );
                
            var leadershipElems = allMarkers.filter(markername => markername.includes("director") || markername.includes("president") || markername.includes("conductor") || markername.includes("leadership") || markername.includes("council") || markername.includes("office") || markername.includes("instructor") );
           
                
            $('button#arts').click(function() {
                $('.tl-timemarker').hide();
                musicElems.forEach(elem => $("#"+elem).show());
            });   
                
            $('button#studgov').click(function() {
                $('.tl-timemarker').hide();
                studgovElems.forEach(elem => $("#"+elem).show());
            });  
                
            $('button#design').click(function() {
                $('.tl-timemarker').hide();
                designElems.forEach(elem => $("#"+elem).show());
            });  
                
            $('button#dev').click(function() {
                $('.tl-timemarker').hide();
                devElems.forEach(elem => $("#"+elem).show());
            }); 
            
                
            $('button#leadership').click(function() {
                $('.tl-timemarker').hide();
                leadershipElems.forEach(elem => $("#"+elem).show());
            }); 
                
            };
        });
        
    
    
        
         $(document).ready(function() {
            $('button#all').click(function() {
                $('.tl-timemarker').show();
            });
        });
        
        
        
        

    </script>
    </div>


    <div class="parallax-container">
        <div class="container ring-stars">
            <img src="raw/geom-23.svg" alt="">
<!--
            <img src="raw/geom-25.svg" alt="">
            <img src="raw/geom-26.svg" alt="">
            <img src="raw/geom-27.svg" alt="">
-->
        </div>
    </div>
    <div class="section ring-stars">

        <div class='text'>
            <p class='shadow space-below'>This all means...</p>
            <p class='shadow'>I'm looking to join a company </p>
            <p class='indent shadow'>shooting for the <strong>MOON</strong> and back</p>
        </div>
    </div>



    <div class="spacer"></div>



    <div class="parallax-container">
        <div class='container planet'>
            <img src="raw/rocket.svg" alt="">
<!--            <img src="raw/geom-15.svg" alt="">-->
            <img src="raw/geom-25.svg" alt="">
            <img src="raw/geom-26.svg" alt="">
            <img src="raw/geom-27.svg" alt="">
            <img src="raw/geom-28.svg" alt="">
            <!--
                <img src="raw/big-stars.svg" alt="">
                <img src="raw/small-stars.svg" alt="">
        -->
        </div>
    </div>

    <div class="section planet">
        <div class="img-container">
<!--            <img src="raw/moon-17.svg" alt="">-->
        </div>
        <div class="text">
            <p>I’m ready to join a team that lives for </p>
            <p>their work and can’t believe their
            </p>

            <p class='vstrong'>
                LUCK
            </p>

            <p>contributing to this starship and </p>
            <p>working tirelessly while</p>
            <p><strong class='cursive'>Dreaming</strong> of it’s </p>
            <p class='vstrong launch'>LAUNCH</p>
        </div>

    </div>

    <div class="spacer"></div>
    <div class="spacer"></div>
    <div class="spacer"></div>

    <div class="parallax-container">
        <div class='container four'>

            <img src="raw/geom-21.svg" alt="">
            <img src="raw/big-stars.svg" alt="">
            <img src="raw/small-stars.svg" alt="">


        </div>
    </div>

    <div class="section five">
        <div class="text">
            <p>Let's take off together</p>
            <a class='portfolio-button' href="http://www.jocelynhuang.com/web.php">See my Work &#10095;</a>
        </div>


    </div>


    <div class="footer">
       <img src="raw/moon-17.svg" alt="">
        <div class="footer content container">
            
        </div>
    </div>

    <script>
        var slideIndex = 1;
        showSlides(slideIndex);

        // Next/previous controls
        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        // Thumbnail image controls
        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("card-bkg");
            var dots = document.getElementsByClassName("dot");
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
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
        }

    </script>


</body>

</html>
