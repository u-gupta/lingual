<div class="container">


    <div class="col-md-12">
         <h3>Cafes</h3>

         <div class="well">
          <div id="myCarousel" class="carousel slide">

            <!-- Carousel items -->
            <div class="carousel-inner">

              <?php 
              $len = count($cafe); 
              $counter=0;                                                   

              $q = $len / 4;
              $rem = $len % 4;
              for ($i = 1; $i <= $q ;$i++) { 
                if($i==1) {?>
                <div class="item active">
                    <div class="row">
                    <?php for ($j = 1; $j <= 4 ;$j++) { ?>
                    <div class="col-sm-3"><a href="#x"><img src="<?=base_url('$cafe[$counter++]["thumbnai"]')?>" alt="Image" class="img-responsive"></a>
                    </div>
                    <?php   }  ?>
                  </div>
                  <!--/row-->
                </div>
                <!--/item-->

                <?php }
                else{ ?>
                <div class="item">
                  }?>
                  <div class="row">
                    <?php for ($j = 1; $j <= 4 ;$j++) { ?>
                    <div class="col-sm-3"><a href="#x"><img src="<?=base_url('$cafe[$counter++]["thumbnai"]')?>" alt="Image" class="img-responsive"></a>
                    </div>
                    <?php   }  ?>
                  </div>
                  <!--/row-->
                </div>
                <!--/item-->

                <?php } ?>

                <div class="item">
                  <div class="row">
                    <?php for ($j = 1; $j <= rem ;$j++) { ?>
                    <div class="col-sm-3"><a href="#x"><img src="http://placehold.it/500x500" alt="Image" class="img-responsive"></a>
                    </div>
                    <?php }  ?>
                  </div>
                  <!--/row-->
                </div>
                <!--/item-->

              </div>
              <!--/carousel-inner--> <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>

              <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
            </div>
           
          </div> <!--/myCarousel-->
        
    </div>  <!--/well-->

  
</div>
</div>