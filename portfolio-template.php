<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <?php include("includes/head.html");?>
    <link rel="stylesheet" href="css/new-menu.css">
    <link rel="stylesheet" href="css/web.css">
    <script src='js/landing.js'></script>

</head>

<body>

    <div class="web-portfolio-wrapper">

        <nav id='fixed-nav-container'>
           
            <a href='' id='view-all' class='button-container'>
                <h4>view all</h4>
<!--                <img src="raw/web/view-all-squares.svg" alt="">-->
               <?php echo file_get_contents("raw/web/view-all-squares.svg"); ?>
            </a>
            
            <div id="menu" class='button-container'>
                <div id="new-menu">
                    <h4 class='no-marg'>menu</h4>
                    <div class="open">
                       
                        <span class="cls"></span>
                        <span>
                            <ul class="sub-menu ">
                                <li>
                                    <a href="index.php" title="Home">Home & About</a>
                                </li>
                                <li>
                                    <a href="art.php" title="Art">Artwork</a>
                                </li>
                                <li>
                                    <a href="web.php" title="Web">Web Portfolio</a>
                                </li>
                                <li>
                                    <a href="graphicdesign.php" title="Graphics">Graphic Design Portfolio</a>
                                </li>
                            </ul>
                        </span>
                        <span class="cls"></span>
                    </div>

                </div>
            </div>
        </nav>

       <div class="stripes"></div>
                <div class="circle"></div>
       
       
<!--       OPENING         -->
        <section class='opening'>
           <div class="background-images waves">
           </div>
           
           <div class="background-images shapes">
                <!--
                   <img class='shape-stripes' src="raw/web/blue-stripes.svg" alt="">
                    <img class='shape-circle' src="raw/web/pink-circle-outline.svg" alt="">
                    
-->
                
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
            <div class='border'></div>
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
        
        <section class='site-preview'></section>
    </div>
<script>
$("#header-2").hide(); // hide the fixed navbar initially

var topofDiv = $(".waves").offset().top; //gets offset of header
var height = $(".waves").outerHeight(); //gets height of header

$(window).scroll(function(){
    if($(window).scrollTop() > (topofDiv + height)){
        console.log('height recognized');
       $("#fixed-nav-container h4").addClass('dblue');
         $("#fixed-nav-container #new-menu h4").addClass('dblue');
        $('#fixed-nav-container').append('<style>.open:before{color: #3d52a1!important;}</style>');
        $("#fixed-nav-container .open span").addClass('bkg-dblue');
        $('rect').css("fill", "#3d52a1");
        
    }
    else{
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
