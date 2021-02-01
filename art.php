<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include("includes/head.html");?>
    </head>
<body>
<?php include("includes/header.html");?>
    
    <!-- CONTENT-->
    <section class='content art'>
    
    <div class="post-header-gap"></div>
    
    <h2 class='white bold'>Art Gallery</h2>
<!--    <h3 class='white'>Click to enlarge</h3>-->
  <br>
   
        <div class="flex">
         
          <div class="thumbnail-container">
              <a href="http://jocelynhuang.com/raw/art/avocado.jpg" data-caption='Acrylic on Cardboard' data-fancybox="images" data-width="1125" data-height="1131">
                  <img class='sm-thumbnail' src="http://jocelynhuang.com/raw/art/avocado.jpg" />
              </a>
          </div>
          
           <div class="thumbnail-container">
             <a href="http://jocelynhuang.com/raw/art/beetle.jpg" data-caption='Tinted Graphite' data-fancybox="images" data-width="706" data-height="743">
                  <img class='sm-thumbnail' src="http://jocelynhuang.com/raw/art/beetle.jpg" />
              </a>
          </div>
          
        
          <div class="thumbnail-container">
              <a href="http://jocelynhuang.com/raw/art/fish-senior.jpg" data-caption='Acrlyic Brick Wall Mural' data-fancybox="images" data-width="3390" data-height="1236">
                  <img class='sm-thumbnail' src="http://jocelynhuang.com/raw/art/fish-senior-tile.jpg" />
              </a>
          </div>
        
        
          <div class="thumbnail-container">
               <a href="http://jocelynhuang.com/raw/art/bird.jpg" data-caption='Watercolor' data-fancybox="images" data-width="1497" data-height="1125">
                  <img class='sm-thumbnail' src="http://jocelynhuang.com/raw/art/bird-tile.jpg" />
              </a>
          </div>
          
          <div class="thumbnail-container">
              <a href="http://jocelynhuang.com/raw/art/fishcropped.jpg" data-caption='Melted Crayon and Hot Glue' data-fancybox="images" data-width="826" data-height="1104">
                  <img class='sm-thumbnail' src="http://jocelynhuang.com/raw/art/fish-tile.jpg" />
              </a>
          </div>
         
          <div class="thumbnail-container">
              <a href="http://jocelynhuang.com/raw/art/balloon.jpg" data-caption='Chalk Pastel' data-fancybox="images" data-width="1015" data-height="1125">
                  <img class='sm-thumbnail' src="http://jocelynhuang.com/raw/art/balloon.jpg" />
              </a>
              
          </div>
          
          <div class="thumbnail-container">
              <a href="http://jocelynhuang.com/raw/art/music.jpg" data-caption='Tinted Graphite' data-fancybox="images" data-width="1526" data-height="1125">
                  <img class='sm-thumbnail' src="http://jocelynhuang.com/raw/art/music-tile.jpg" />
              </a>
          </div>        
          
          <div class="thumbnail-container">
              <a href="http://jocelynhuang.com/raw/art/StillLife.jpg" data-caption='Tinted Graphite' data-fancybox="images" data-width="915" data-height="902">
                  <img class='sm-thumbnail' src="http://jocelynhuang.com/raw/art/StillLife.jpg" />
              </a>
          </div>
        
         <div class="thumbnail-container">
                <a href="http://jocelynhuang.com/raw/art/owl.jpg" data-caption='India Ink' data-fancybox="images" data-width="1613" data-height="988">
                  <img class='sm-thumbnail' src="http://jocelynhuang.com/raw/art/owl-tile.jpg" />
               </a>
          </div>
   
         <div class="thumbnail-container">
              <a href="http://jocelynhuang.com/raw/art/frog.jpg" data-caption='Colored Pencil' data-fancybox="images" data-width="1260" data-height="1140">
                  <img class='sm-thumbnail' src="http://jocelynhuang.com/raw/art/frog-tile.jpg" />
              </a>
          </div>
        
          <div class="thumbnail-container">
              <a href="http://jocelynhuang.com/raw/art/teapot.jpg" data-caption='India Ink' data-fancybox="images" data-width="1512" data-height="1138">
                  <img class='sm-thumbnail' src="http://jocelynhuang.com/raw/art/teapot-tile.jpg" />
              </a>
          </div>
        
         <div class="thumbnail-container">
               <a href="http://jocelynhuang.com/raw/art/tulip.jpg" data-caption='Chalk Pastel' data-fancybox="images" data-width="1500" data-height="1141">
                  <img class='sm-thumbnail' src="http://jocelynhuang.com/raw/art/tulip-tile.jpg" />
              </a>
          </div>
        
       
          <div class="thumbnail-container">
              <a href="http://jocelynhuang.com/raw/art/horse.jpg" data-caption='Charcoal' data-fancybox="images" data-width="960" data-height="768">
                  <img class='sm-thumbnail' src="http://jocelynhuang.com/raw/art/horse-tile.jpg" />
              </a>
          </div>
        
          <div class="thumbnail-container">
              <a href="http://jocelynhuang.com/raw/art/mouth.jpg" data-caption='Charcoal' data-fancybox="images" data-width="917" data-height="1220">
                  <img class='sm-thumbnail' src="http://jocelynhuang.com/raw/art/mouth-tile.jpg" />
              </a>
          </div>
        
         <div class="thumbnail-container">
               <a href="http://jocelynhuang.com/raw/art/barnowl.jpg" data-caption='Pencil Sketch' data-fancybox="images" data-width="2592" data-height="1936">
                  <img class='sm-thumbnail' src="http://jocelynhuang.com/raw/art/barnowl-tile.jpg" />
              </a>
          </div>
        
       
    </div>
    

    
    
    </section>
    
 

    <!-- FANCY BOX JS -->
	<script type="text/javascript">
	$("[data-fancybox]").fancybox({
		// Options will go here
        buttons : [
    'zoom',
    'close'
  ]
	});
        
        
//    Highlight active page on navbar
     $(document).ready(function() {
        $('a.art').addClass('active-a');
    });
</script>
	
</body>
</html>