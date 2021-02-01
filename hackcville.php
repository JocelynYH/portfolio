<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <?php include("includes/head.html");?>
    <link rel="stylesheet" href="css/template.css">
    <link rel="stylesheet" href="css/new-menu.css">
    <script src='js/landing.js'></script>

</head>

<body>

    <div class="web-portfolio-wrapper">
    <?php include("includes/menu-portfolio.html");?>


        <div class="stripes"></div>
        


        <!--       OPENING         -->
        <section class='opening'>
           <div class="circle"></div>
            <div class="background-images waves">
            </div>

            <div class="background-images shapes">

            </div>




            <div class="content">
                <div class="image-container">
                    <img src="raw/site-tiles/hackcville-tile.png" alt="">
                </div>
                <div class="title">
                    <h2>Rebrand UVA's Talent Accelerator</h2>
                </div>
            </div>

        </section>

        <!--       INFO         -->

        <section class='info'>
            <div class='pink-dotted-border'></div>
            <div class="abs three-pink-stripes"></div>
            <div class="abs pink-blob"></div>
            <div class="abs pink-circle"></div>
            <div class="abs blue-striped-circle"></div>
            <div class="abs pink-outline-circle-2"></div>
            <div class='info-card'>
                <div class='company'>
                    <h2>HackCville</h2>
                </div>
                <div class='challenge'>
                    <h3>The Challenge</h3>
                    <p>As part of HackCville's website redesign, I was tasked with designing several new stylesheets for the talent accelerator's upcoming new website.  The color schemes and typographic combinations should reflect past used themes and other divisions of HackCville, such as their news site.</p>
                </div>
                <div class='project'>
                    <h3>The Project</h3>
                    <p>5 stylesheets, built with HTML and CSS and hosted with flexbox on a website so that the entire organization could view potential options and add their input on which was their favorite.</p>
                </div>

                <div class="specs">
                    <div class="role">
                        <p><strong>Role</strong></p>
                        <p>Web Design Program Lead</p>
                    </div>

                    <div class="areas">
                        <p><strong>Areas</strong></p>
                        <p>Brand design, color, typography</p>
                    </div>

                    <div class="tools">
                        <p><strong>Tools</strong></p>
                        <p>HTML and CSS (flexbox), to host the stylesheets.</p>
                    </div>

                </div>
            </div>
        </section>
        

       <!--       SITE PREVIEW       -->

        <section class='site-preview'>
            <img class='abs blue-blob' src="raw/web/links_small%20blue%20blob.svg" alt="">
            <img class='abs blue-ring' src="raw/web/links_small%20blue%20ring.svg" alt="">
            <img class='abs blue-rings-two' 
            src="raw/web/links_two%20circles.svg" alt="">
        
            <div class="content-background">
               <img class='abs large-pink-blob' src="raw/web/links_big%20pink%20blob.svg" alt="">
                <div class="content">
                    <h2>The Recipe:</h2>
                        <ul>
                            <li>
                                <p>a deep dive into HackCville's visual identity</p>
                            </li>
                            <li>
                                <p>a consideration for past used themes</p>
                            </li>
                            <li>
                                <p>an easy way to compare and contrast all 5 stylesheets</p>
                            </li>
                            
                        </ul>
                </div>
            </div>
        </section>

       
<!--       EXPLORE NEXT       -->
       
        <section class="explore-more">
            <h2>Screenshots</h2>
            <div class="tiles">
            <div class="thumbnail-container">
             <a href="http://jocelynhuang.com/raw/art/beetle.png" data-caption='Tinted Graphite' data-fancybox="images" data-width="706" data-height="743">
                  <img class='sm-thumbnail' src="http://jocelynhuang.com/raw/screenshots/hc-home.png" />
              </a>
          </div>
                <div class="image-container">
                   <a class="overlay-link" href="/art.php"><div class="overlay">
                           <h3>African Electronic Music</h3>
                       </div></a>
                    <img src="raw/AEM.png" alt="">
                </div>
                <div class="image-container">
                   <a class="overlay-link" href="/art.php"><div class="overlay">
                           <h3>Cavalier Symphony Orchestra</h3>
                       </div></a>
                    <img src="raw/CSO.png" alt="">
                </div>
                <div class="image-container">
                   <a class="overlay-link" href="/art.php"><div class="overlay">
                           <h3>Cville Weekly</h3>
                       </div></a>
                    <img src="raw/cvilleweekly.png" alt="">
                </div>
            </div>

            <button class='general btn btn-reverse btn-arrow'><a href="http://www.jocelynhuang.com"><span><h4>View All</h4><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 36.1 25.8" enable-background="new 0 0 36.1 25.8" xml:space="preserve"><g><line fill="none" stroke="#FFFFFF" stroke-width="3" stroke-miterlimit="10" x1="0" y1="12.9" x2="34" y2="12.9"></line><polyline fill="none" stroke="#FFFFFF" stroke-width="3" stroke-miterlimit="10" points="22.2,1.1 34,12.9 22.2,24.7   "></polyline></g></svg></span></a></button>
        </section>

       
       
   <!--       FOOTER       -->

        <footer>
            <div class="waves-container">
<!--                <img src="raw/web/footer_footer_footer%20waves%202.png" alt="">-->
            </div>
            <div class="content">
                <div class="sm-links">
                    <h2 class='contact-title'>Find Me On:</h2>
                    <ul class='sm-link-container sm'>

                        <li class='sm'>
                            <a href="https://www.linkedin.com/in/jocelyn-yuan-huang/" class="transparency sm" target="_blank">
                                        <span class='sm'>LinkedIn</span>
                                        <i class="sm" data-text='github'>
                                            <?php echo file_get_contents("raw/icons/001-linkedin-logo.svg"); ?>
                               
                                  </i>
                                   </a>
                        </li>


                        <li class='sm'>
                            <a href="https://github.com/jocelynyh" class="transparency sm" target="_blank"><span class='sm'>Github</span><i class="sm">
                                    <?php echo file_get_contents("raw/icons/002-github-logo.svg"); ?></i></a>
                        </li>

                        <li class='sm'>
                            <a href="https://drive.google.com/file/d/195V9JnurYC8zP1tEK8VUzIcOz5994o9z/view?usp=sharing" class="transparency sm" target='_blank'><span class='sm'>Resume</span><i class="sm">
                                   <?php echo file_get_contents("raw/icons/003-resume.svg"); ?></i></a>
                        </li>
                        <li class='sm'>
                            <a href="mailto:jocelynyh4@gmail.com" class="transparency sm" target='_blank'><span class='sm'>Email</span><i class="sm">
                                   <?php echo file_get_contents("raw/icons/envelope.svg"); ?></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </footer>
                    <div class="extra-blue"></div>

    </div>
    <script>
        $("#header-2").hide(); // hide the fixed navbar initially

        var topofDiv = $(".waves").offset().top; //gets offset of header
        var height = $(".waves").outerHeight(); //gets height of header

        $(window).scroll(function() {
            if ($(window).scrollTop() > (topofDiv + height)) {
                console.log('height recognized');
                $("#fixed-nav-container h4").addClass('dblue');
                $("#fixed-nav-container #new-menu h4").addClass('dblue');
                $('#fixed-nav-container').append('<style>.open:before{color: #3d52a1!important;}</style>');
                $("#fixed-nav-container .open span").addClass('bkg-dblue');
                $('rect').css("fill", "#3d52a1");

            } else {
                $("#fixed-nav-container h4").removeClass('dblue');
                $("#fixed-nav-container #new-menu h4").removeClass('dblue');
                $('#fixed-nav-container').append('<style>.open:before{color: white!important;}</style>');
                $("#fixed-nav-container .open span").removeClass('bkg-dblue');
                $('rect').css("fill", "white");
            }
        });
    </script>
</body>

</html>