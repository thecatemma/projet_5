<?php		
	include 'header.php';

?>

      <div id="Infos">
  		<div>
            <img src="images/emma.jpg" alt="profile_photo">
            
             <h3><b>HE</b>MASN</h3>
            
              <p>Welcome ! <br> I'm Emmanuelle, <br> A countryside's cat <br> Find here informations about me</p>
  		</div>
          
         <a><i class="fa fa-cat" alt="cat"></i></a>  
	  </div>
		
    <section id="contenu-accueil">
        <article>
            <h1>HELLOWORLD</h1>
        </article>
    </section>
		
</header>

<br>

   <div id="slide-accueil">
	<div id="cbp-fwslider" class="cbp-fwslider">
        <ul>
            <li><a href="#"><img src="images/slider_11.png" alt="dashboard"/></a></li>
            <li><a href="#"><img src="images/slider_1.png" alt="webdesign"/></a></li>
            <li><a href="#"><img src="images/slide3.jpg" alt="webdesign"/></a></li>
            <li><a href="#"><img src="images/slider_12.png" alt="dashboard"/></a></li>
            <li><a href="#"><img src="images/slide2.jpg" alt="poster"/></a></li>
            <li><a href="#"><img src="images/slide1.jpg" alt="webdesign"/></a></li>
            <li><a href="#"><img src="images/slider-7.png" alt="webdesign"/></a></li>
            <li><a href="#"><img src="images/slider_3.png" alt="webdesign"/></a></li>
            <li><a href="#"><img src="images/slider_5.png" alt="dashboard"/></a></li>
        </ul>
    </div>
   </div>

<script src="js/jquery.cbpFWSlider.min.js"></script>

    <script>
        $( function() {
        $( '#cbp-fwslider' ).cbpFWSlider();
            $( '#cbp-fwslider' ).cbpFWSlider('interval');
            } );
    </script>


<h1>Project example</h1>

<br>

    <div id="contener">
        <div class="yt">
            <video controls preload="metadata" height="270px">
            <source src="images/HomePage.mp4">
            </video>
        </div>
    </div>

<br>
		
	<section id="articles">
		<h1>Number</h1>
		<div class="clearboth"></div>
	</section>

		<main>
			<div class="frame">
			</div>
			 <div class="content">
				<div class="content__img-wrap">
					<div class="content__img"></div>
					<div class="content__img"></div>
					<div class="content__img"></div>
				</div>
				<div class="content__text">
					<span class="content__text-inner">.011</span>
				</div>
			 </div>
		</main>

		<script src="js2/blotter.min.js"></script>
        <script src="js2/materials/liquidDistortMaterial.js"></script>
		<script src="js2/imagesloaded.pkgd.min.js"></script>
		<script src="js2/demo2.js"></script>
</div> 

<?php		
	include 'footer.php';
?>