<?php
    if($_POST['submit']) {
        $recipient='violetyell@yahoo.com';
        $subject='Message from Portfolio';
        $sender=$_POST['sender'];
        $senderEmail=$_POST['senderEmail'];
        $message=$_POST['message'];
        
        $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";
        
        mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");
        
        $thankYou = '<p>Thank you!  Your message has been sent.</p>';
    }
    
   


?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Jocelyn Huang's Portfolio</title>
        <?php include("includes/head.html");?>
        <!--    Timeline JS-->
        <!-- 1 -->
        <link title="timeline-styles" rel="stylesheet" href="https://cdn.knightlab.com/libs/timeline3/latest/css/timeline.css">



        <link rel="stylesheet" href="css/landing2.css">
    </head>

    <body>
        <div class="name-plaque section one">
            <!--
            <img class='plaque-image' src="raw/index/nameplaque.svg" alt="">
            <h1 class='name-title'>Jocelyn Huang</h1>
-->
            <div class="title-plaque">
                <h1 class='name-title'>Jocelyn</h1>
                <p>Designer & Developer</p>
<!--
                <img class='blue-triangle bottom' src="raw/index/blue-triangle-1.svg" alt="">
                <img class='blue-triangle top' src="raw/index/blue-triangle-2.svg" alt="">
-->
            </div>
        </div>





        <div class="container one">
            <img src="raw/index/geom-01.svg" alt="">
            <img src="raw/index/geom-02.svg" alt="">
            <img src="raw/index/geom-03.svg" alt="">
            <img src="raw/index/geom-04.svg" alt="">
            <img src="raw/index/geom-05.svg" alt="">
            <img src="raw/index/geom-06.svg" alt="">
            <img src="raw/index/geom-07.svg" alt="">
            <img src="raw/index/geom-08.svg" alt="">
            <img src="raw/index/geom-09.svg" alt="">
            <img src="raw/index/geom-10.svg" alt="">
            <img src="raw/index/geom-11.svg" alt="">
            <img src="raw/index/geom-12.svg" alt="">
            <img src="raw/index/geom-13.svg" alt="">
            <img src="raw/index/geom-14.svg" alt="">
            <img src="raw/index/geom-15.svg" alt="">
            <img src="raw/index/geom-16.svg" alt="">
            <img src="raw/index/geom-18.svg" alt="">
        </div>



        <div class="section two card-container">
            <img class='button-bkg one' src="raw/index/geom-01.svg" alt="">
            <img class='button-bkg two' src="raw/index/geom-01.svg" alt="">

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
                        <p>My accomplishments & experiences equip me with skills for success in work & life. Check out the timeline below for an overview of what I’ve been up to recently.
                        </p>
                    </div>
                </div>
            </div>


            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>


        <div class="parallax-container">
            <div class="container timeline">
                <!--            <img src="raw/index/timeline-stars.svg" alt="">-->
            </div>
        </div>

        <div class="section timeline">
            <script src="https://cdn.knightlab.com/libs/timeline3/latest/js/timeline.js"></script>

            <div id='timeline-embed' style="width: 100%; height: 600px"></div>
            <!--
    <div class='btn-container'>
        <button id='studgov'>Show Student Government</button>
       <h4>Filter by:</h4>
        <button id='arts'> Music & Arts</button>
        <button id='design'> Design</button>
        <button id='dev'> Development</button>
        <button id='marketing'> Marketing</button>
        <button id="leadership">General Leadership</button>
        <button id="all">All</button>
    </div>
-->

            <script>
                $(document).ready(function() {
                    var embed = document.getElementById('timeline-embed');
                    var options = {
                        //            start_at_end: true,
                        hash_bookmark: false
                        //                timenav_height_percentage: 60
                    }
                    embed.style.height = getComputedStyle(document.body).height;
                    window.timeline = new TL.Timeline('timeline-embed', 'timeline-design.json', options);
                    window.addEventListener('resize', function() {
                        var embed = document.getElementById('timeline-embed');
                        embed.style.height = getComputedStyle(document.body).height;
                        timeline.updateDisplay();
                    })
                   

                });


                //       Filter timeline events by role

                $(document).ready(function() {
                    window.onload = function() {
//                        $("<div class='btn-container'><h4>Filter by:</h4><button id='arts'> Music & Arts</button><button id='design'> Design</button><button id='dev'> Development</button><button id='marketing'> Marketing</button><button id='leadership'>General Leadership</button><button id='all'>All</button></div>").insertAfter(".tl-storyslider");
                        //            console.log("Initializing boop beep boop");
                        var allMarkers = [];
                        $(".tl-timenav-item-container").find(".tl-timemarker").each(function() {
                            allMarkers.push(this.id);
                        });

                        var musicElems = allMarkers.filter(markername => markername.includes("music") || markername.includes("flute") || markername.includes("conductor") || (markername.includes("symphony") && markername.includes("president") === false) || markername.includes("ensemble"));

                        var studgovElems = allMarkers.filter(markername => markername.includes("council") || markername.includes("leadership") || markername.includes("lighting") || markername.includes("representative") || markername.includes("office"));

                        var designElems = allMarkers.filter(markername => markername.includes("design") || markername.includes("second") || markername.includes("lighting") || markername.includes("web") || markername.includes("president") || markername.includes("guide"));

                        var devElems = allMarkers.filter(markername => (markername.includes("web") && markername.includes("president") === false) || markername.includes("development") || markername.includes("developer"));

                        var marketingElems = allMarkers.filter(markername => markername.includes("marketing") || markername.includes("second") || markername.includes("brand"));

                        var leadershipElems = allMarkers.filter(markername => markername.includes("director") || markername.includes("president") || markername.includes("conductor") || markername.includes("leadership") || markername.includes("council") || markername.includes("office") || markername.includes("instructor"));


                        $('button#arts').click(function() {
                            $('.tl-timemarker').hide();
                            musicElems.forEach(elem => $("#" + elem).show());
                        });

                        $('button#studgov').click(function() {
                            $('.tl-timemarker').hide();
                            studgovElems.forEach(elem => $("#" + elem).show());
                        });

                        $('button#design').click(function() {
                            $('.tl-timemarker').hide();
                            designElems.forEach(elem => $("#" + elem).show());
                        });

                        $('button#dev').click(function() {
                            $('.tl-timemarker').hide();
                            devElems.forEach(elem => $("#" + elem).show());
                        });


                        $('button#leadership').click(function() {
                            $('.tl-timemarker').hide();
                            leadershipElems.forEach(elem => $("#" + elem).show());
                        });

                    };
                });




                $(document).ready(function() {
                    $('button#all').click(function() {
                        $('.tl-timemarker').show();
                    });
                });


                // Create space for filter buttons 

                $(document).ready(function() {
                    var div = document.createElement("div");
                    div.style.width = "100px";
                    div.style.height = "100px";
                    div.style.background = "red";
                    div.style.color = "white";
                    div.innerHTML = "Hello";

                    $('.tl-storyslider').appendChild(div);
                });

            </script>
        </div>


        <div class="parallax-container">
            <div class="container ring-stars">
                <img src="raw/index/light-stars-23.svg" alt="">
                <img src="raw/index/geom-14.svg" alt="">

                <!--
            <img src="raw/index/geom-25.svg" alt="">
            <img src="raw/index/geom-26.svg" alt="">
            <img src="raw/index/geom-27.svg" alt="">
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
                <img src="raw/index/rocket.svg" alt="">
                <!--            <img src="raw/index/geom-15.svg" alt="">-->
                <img src="raw/index/geom-25.svg" alt="">
                <img src="raw/index/geom-26.svg" alt="">
                <img src="raw/index/geom-27.svg" alt="">
                <img src="raw/index/geom-28.svg" alt="">
                <!--
                <img src="raw/index/big-stars.svg" alt="">
                <img src="raw/index/small-stars.svg" alt="">
        -->
            </div>
        </div>

        <div class="section planet">
<!--
            <div class="img-container">
                            <img src="raw/index/moon-17.svg" alt="">
            </div>
-->
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

                <img src="raw/index/geom-21.svg" alt="">
                <img src="raw/index/big-stars.svg" alt="">
                <img src="raw/index/small-stars.svg" alt="">


            </div>
        </div>

        <div class="section five">
            <div class="text">
                <p>Let's take off together</p>
                <a class='portfolio-button' href="http://www.jocelynhuang.com/web.php">See my Work <span class='arrow'>
      <svg id='arrow-container' width="66px" height="35px" viewBox="0 0 66 43" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <g id="arrow" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
          <path class="one" d="M40.1543933,3.89485454 L43.9763149,0.139296592 C44.1708311,-0.0518420739 44.4826329,-0.0518571125 44.6771675,0.139262789 L65.6916134,20.7848311 C66.0855801,21.1718824 66.0911863,21.8050225 65.704135,22.1989893 C65.7000188,22.2031791 65.6958657,22.2073326 65.6916762,22.2114492 L44.677098,42.8607841 C44.4825957,43.0519059 44.1708242,43.0519358 43.9762853,42.8608513 L40.1545186,39.1069479 C39.9575152,38.9134427 39.9546793,38.5968729 40.1481845,38.3998695 C40.1502893,38.3977268 40.1524132,38.395603 40.1545562,38.3934985 L56.9937789,21.8567812 C57.1908028,21.6632968 57.193672,21.3467273 57.0001876,21.1497035 C56.9980647,21.1475418 56.9959223,21.1453995 56.9937605,21.1432767 L40.1545208,4.60825197 C39.9574869,4.41477773 39.9546013,4.09820839 40.1480756,3.90117456 C40.1501626,3.89904911 40.1522686,3.89694235 40.1543933,3.89485454 Z" ></path>
          <path class="two" d="M20.1543933,3.89485454 L23.9763149,0.139296592 C24.1708311,-0.0518420739 24.4826329,-0.0518571125 24.6771675,0.139262789 L45.6916134,20.7848311 C46.0855801,21.1718824 46.0911863,21.8050225 45.704135,22.1989893 C45.7000188,22.2031791 45.6958657,22.2073326 45.6916762,22.2114492 L24.677098,42.8607841 C24.4825957,43.0519059 24.1708242,43.0519358 23.9762853,42.8608513 L20.1545186,39.1069479 C19.9575152,38.9134427 19.9546793,38.5968729 20.1481845,38.3998695 C20.1502893,38.3977268 20.1524132,38.395603 20.1545562,38.3934985 L36.9937789,21.8567812 C37.1908028,21.6632968 37.193672,21.3467273 37.0001876,21.1497035 C36.9980647,21.1475418 36.9959223,21.1453995 36.9937605,21.1432767 L20.1545208,4.60825197 C19.9574869,4.41477773 19.9546013,4.09820839 20.1480756,3.90117456 C20.1501626,3.89904911 20.1522686,3.89694235 20.1543933,3.89485454 Z" ></path>
          <path class="three" d="M0.154393339,3.89485454 L3.97631488,0.139296592 C4.17083111,-0.0518420739 4.48263286,-0.0518571125 4.67716753,0.139262789 L25.6916134,20.7848311 C26.0855801,21.1718824 26.0911863,21.8050225 25.704135,22.1989893 C25.7000188,22.2031791 25.6958657,22.2073326 25.6916762,22.2114492 L4.67709797,42.8607841 C4.48259567,43.0519059 4.17082418,43.0519358 3.97628526,42.8608513 L0.154518591,39.1069479 C-0.0424848215,38.9134427 -0.0453206733,38.5968729 0.148184538,38.3998695 C0.150289256,38.3977268 0.152413239,38.395603 0.154556228,38.3934985 L16.9937789,21.8567812 C17.1908028,21.6632968 17.193672,21.3467273 17.0001876,21.1497035 C16.9980647,21.1475418 16.9959223,21.1453995 16.9937605,21.1432767 L0.15452076,4.60825197 C-0.0425130651,4.41477773 -0.0453986756,4.09820839 0.148075568,3.90117456 C0.150162624,3.89904911 0.152268631,3.89694235 0.154393339,3.89485454 Z" ></path>
        </g>
      </svg>
    </span> </a>
            </div>


        </div>

<!--        FOOTER          -->

        <div class="footer">
            <div class="moon-container">
                <img src="raw/index/moon3-34.svg" alt="">
                <img class='mobile-moon' src="raw/index/moon-top-32.svg" alt="">
                <img class='mobile-moon' src="raw/index/moon-top-32.svg" alt="">
            </div>
            <div class="footer content">

                <?= $thankYou ?>

                    <form method="post" action="landing2.php">
                        <h2 class='contact-title'>Contact Me</h2>
                        <label for=""><p>Name</p></label>
                        <input type="text" name='sender' placeholder='Jane Doe'>

                        <label for=""><p>Email</p></label>
                        <input type="email" name='senderEmail' placeholder='jane-doe@gmail.com'>

                        <label for=""><p>Message:</p></label>
                        <textarea name="message" id="" rows="" placeholder='I was wondering if you were interested in this position.'></textarea>
                        <input type="submit" name='submit<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 36.1 25.8" enable-background="new 0 0 36.1 25.8" xml:space="preserve"><g><line fill="none" stroke="#FFFFFF" stroke-width="3" stroke-miterlimit="10" x1="0" y1="12.9" x2="34" y2="12.9"></line><polyline fill="none" stroke="#FFFFFF" stroke-width="3" stroke-miterlimit="10" points="22.2,1.1 34,12.9 22.2,24.7   "></polyline></g></svg>'>
                    </form>

                    <ul class='sm-link-container sm'>
                        <li class='sm'>
                            <a href="#" class="transparency sm">
                            <span class='sm'>LinkedIn</span>
                            <i class="sm" data-text='github'>
                                <?php echo file_get_contents("raw/icons/001-linkedin-logo.svg"); ?>

                      </i>
                       </a>
                        </li>


                        <li class='sm'>
                            <a href="#" class="transparency sm"><span class='sm'>Github</span><i class="sm">
     <?php echo file_get_contents("raw/icons/002-github-logo.svg"); ?></i></a>
                        </li>
                        <li class='sm'>
                            <a href="#" class="transparency sm"><span class='sm'>Resume</span><i class="sm">
    <?php echo file_get_contents("raw/icons/003-resume.svg"); ?></i></a>
                        </li>
                        <li class='sm'>
                            <a href="#" class="transparency sm"><span class='sm'>Email</span><i class="sm">
    <?php echo file_get_contents("raw/icons/envelope.svg"); ?></i></a>
                        </li>
                    </ul>

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
