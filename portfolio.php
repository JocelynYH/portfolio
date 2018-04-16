<!DOCTYPE html>
<html lang="en">
  <head>
        <?php include("includes/head.html");?>
    </head>
<body>
<?php include("includes/header.html");?>
    >
    
    <!-- CONTENT-->
    <section class='content art'>
    <section class="portfolio block dblue">
         <h2>Selected Works</h2>
         <div class="filterbar mb2 mt2">
             <button class="med-type" href="" data-rel="all">All</button>
             <button class="med-type" href="" data-rel="web">Websites</button>
             <button class="med-type" href="" data-rel="art">Artwork</button>
             <button class="med-type" href="" data-rel="graphic">Graphic Design</button>
         </div>
    </section>
    
   
    <div class="flex one" id='portfolio'>
         
          <div class="thumbnail tile scale-anm web all">
              <a href="work.html">
                  <img class='sm-thumbnail' src="http://jocelynhuang.com/raw/art/avocado.png" />
                  
                  <div class="overlay">
                      <div class="vam">
                          <div class="thumbnail-info">
                              <h4>AP Art Collection</h4>
                              <p>Visual Art</p>
                          </div>
                      </div>
                  </div>
              </a>
          </div>
          
           <div class="thumbnail tile scale-anm bcards all">
              <a href="work.html">
                  <img class='sm-thumbnail' src="http://jocelynhuang.com/raw/cvilleweekly.png" />
                  
                  <div class="overlay">
                      <div class="vam">
                          <div class="thumbnail-info">
                              <h4>AP Art Collection</h4>
                              <p>Visual Art</p>
                          </div>
                      </div>
                  </div>
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
</script>
	
</body>
</html>