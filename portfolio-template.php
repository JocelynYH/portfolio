<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <?php include("includes/head.html");?>
    <link rel="stylesheet" href="css/web.css">
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
                    <img src="raw/Foodio-tile.png" alt="">
                </div>
                <div class="title">
                    <h2>Redesign the websites for 1300 clients</h2>
                </div>
            </div>

        </section>

        <!--       INFO         -->

        <section class='info'>
            <!--            <div class='border'></div>-->
            <div class='pink-dotted-border'></div>
            <div class="abs three-pink-stripes"></div>
            <div class="abs pink-blob"></div>
            <div class="abs pink-circle"></div>
            <div class="abs blue-striped-circle"></div>
            <div class="abs pink-outline-circle-2"></div>
            <div class='info-card'>
                <div class='company'>
                    <h2>Foodio Inc.</h2>
                </div>
                <div class='challenge'>
                    <h3>The Challenge</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita doloribus, enim error veniam, saepe aliquam praesentium accusantium culpa cum ratione quibusdam explicabo optio modi. Expedita repudiandae error dolore neque a.</p>
                </div>
                <div class='project'>
                    <h3>The Project</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque corporis necessitatibus quidem sit consequatur vel! Iste libero possimus quos laboriosam eius sequi voluptate sint, dicta suscipit et, earum est id.</p>
                </div>

                <div class="specs">
                    <div class="role">
                        <p><strong>Role</strong></p>
                        <p>Front End Developer Intern</p>
                    </div>

                    <div class="areas">
                        <p><strong>Areas</strong></p>
                        <p>Web design, Development, Mockups</p>
                    </div>

                    <div class="tools">
                        <p><strong>Tools</strong></p>
                        <p>Ruby on Rails, Sass, jQuery, SQL, Figma</p>
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
                                <p>a re-strategized UI focused on orders</p>
                            </li>
                            <li>
                                <p>more space for content and boosted SEO</p>
                            </li>
                            <li>
                                <p>more space for content and boosted SEO</p>
                            </li>
                            <li>
                                <p>more space for content and boosted SEO</p>
                            </li>
                        </ul>
                    <button class='general btn btn-reverse btn-arrow'><a href="" target = "_blank"><span><h4>See the Result</h4><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 36.1 25.8" enable-background="new 0 0 36.1 25.8" xml:space="preserve"><g><line fill="none" stroke="#FFFFFF" stroke-width="3" stroke-miterlimit="10" x1="0" y1="12.9" x2="34" y2="12.9"></line><polyline fill="none" stroke="#FFFFFF" stroke-width="3" stroke-miterlimit="10" points="22.2,1.1 34,12.9 22.2,24.7   "></polyline></g></svg></span></a></button>
                </div>
            </div>
        </section>

       
<!--       EXPLORE NEXT       -->
       
        <section class="explore-more">
            <h2>Explore Next</h2>
            <div class="tiles">
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

            <button class='general btn btn-reverse btn-arrow'><a href=""><span><h4>View All</h4><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 36.1 25.8" enable-background="new 0 0 36.1 25.8" xml:space="preserve"><g><line fill="none" stroke="#FFFFFF" stroke-width="3" stroke-miterlimit="10" x1="0" y1="12.9" x2="34" y2="12.9"></line><polyline fill="none" stroke="#FFFFFF" stroke-width="3" stroke-miterlimit="10" points="22.2,1.1 34,12.9 22.2,24.7   "></polyline></g></svg></span></a></button>
        </section>

       
       
        <?php include("includes/footer.html");?>
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