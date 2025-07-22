<section id="banner">
  <div id="main-slider" class="flexslider">
    <ul class="slides">
      <li>
        <img src="<?php echo web_root; ?>plugins/home-plugins/img/slides/1.jpg" alt="" />
        <div class="flex-caption">
          <h3 class="animated fadeInDown">Innovation</h3> 
          <p class="animated fadeInUp">We create the opportunities</p> 
        </div>
      </li>
      <li>
        <img src="<?php echo web_root; ?>plugins/home-plugins/img/slides/2.jpg" alt="" />
        <div class="flex-caption">
          <h3 class="animated fadeInDown">Specialize</h3> 
          <p class="animated fadeInUp">Success depends on work</p> 
        </div>
      </li>
    </ul>
  </div>
</section> 

<section id="call-to-action-2" class="py-5">
  <div class="container">
    <div class="row">
      <div class="col-md-10 col-sm-9">
        <h3 class="section-title mb-4">Partner with Business Leaders</h3>
        <p class="lead text-muted">Development of successful, long term, strategic relationships between customers and suppliers, based on achieving best practice and sustainable competitive advantage. In the business partner model, HR professionals work closely with business leaders and line managers to achieve shared organisational objectives.</p>
      </div>
    </div>
  </div>
</section>

<section id="content" class="py-5">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="text-center section-title mb-5">Featured Companies</h2>
      </div>
    </div>

    <?php 
      $sql = "SELECT * FROM `tblcompany`";
      $mydb->setQuery($sql);
      $comp = $mydb->loadResultList();

      foreach ($comp as $company) {
    ?>
      <div class="col-sm-4 info-blocks mb-4">
        <div class="card h-100 shadow-sm">
          <div class="card-body">
            <i class="icon-info-blocks fa fa-building-o fa-3x mb-3"></i>
            <h4 class="card-title"><?php echo $company->COMPANYNAME;?></h4>
            <p class="card-text">
              <strong>Address:</strong> <?php echo $company->COMPANYADDRESS;?><br>
              <strong>Contact:</strong> <?php echo $company->COMPANYCONTACTNO;?>
            </p>
          </div>
        </div>
      </div>
    <?php } ?> 
  </div>
</section>

<section class="section-padding bg-light py-5">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="text-center section-title mb-5">Popular Job Categories</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="category-grid">
          <?php 
            $sql = "SELECT * FROM `tblcategory`";
            $mydb->setQuery($sql);
            $cur = $mydb->loadResultList();

            foreach ($cur as $result) {
              echo '<div class="category-item"><a href="'.web_root.'index.php?q=category&search='.$result->CATEGORY.'" class="btn btn-outline-primary m-2">'.$result->CATEGORY.'</a></div>';
            }
          ?>
        </div>
      </div>
    </div>
  </div>
</section>    
  <section id="content-3-10" class="content-block data-section nopad content-3-10">
  <div class="image-container col-sm-6 col-xs-12 pull-left">
    <div class="background-image-holder">

    </div>
  </div>

  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6 col-sm-offset-6 col-xs-12 content">
        <div class="editContent">
          <h3>Our Team</h3>
        </div>
        <div class="editContent"  style="height:235px;">
          <p> 
          &nbsp;&nbsp;Our "one team" attitude breaks down silos and helps us engage equally effectively from the C-suite to the front line. Our collaborative working style emphasizes teamwork, trust, and tolerance for diverging opinions. People tell us we are down-to-earth, approachable and fun.<br/><br/>

          &nbsp;&nbsp;We have a passion for our clients' true results and a pragmatic drive for action that starts Monday morning 8am and doesn't let up. We rally clients with our infectious energy, to make change stick.<br/><br/>

          &nbsp;&nbsp;And we never go it alone. We support and are supported to develop our own personal results stories. We balance challenging and co-creating with our clients, building the internal capabilities required for them to create repeatable results. </p>
        </div> 
      </div>
    </div><!-- /.row-->
  </div><!-- /.container -->
</section>
  
  <div class="about home-about">
        <div class="container">
            
            <div class="row">
              <div class="col-md-4">
                <!-- Heading and para -->
                <div class="block-heading-two">
                  <h3><span>Programes</span></h3>
                </div>
                <p>Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur. <br><br>Sed ut perspiciaatis iste natus error sit voluptatem probably haven't heard of them accusamus.</p>
              </div>
              <div class="col-md-4">
                <div class="block-heading-two">
                  <h3><span>Latest News</span></h3>
                </div>    
                <!-- Accordion starts -->
                <div class="panel-group" id="accordion-alt3">
                 <!-- Panel. Use "panel-XXX" class for different colors. Replace "XXX" with color. -->
                  <div class="panel"> 
                  <!-- Panel heading -->
                   <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseOne-alt3">
                      <i class="fa fa-angle-right"></i> Accordion Heading Text Item # 1
                      </a>
                    </h4>
                   </div>
                   <div id="collapseOne-alt3" class="panel-collapse collapse">
                    <!-- Panel body -->
                    <div class="panel-body">
                      Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas
                    </div>
                   </div>
                  </div>
                  <div class="panel">
                   <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseTwo-alt3">
                      <i class="fa fa-angle-right"></i> Accordion Heading Text Item # 2
                      </a>
                    </h4>
                   </div>
                   <div id="collapseTwo-alt3" class="panel-collapse collapse">
                    <div class="panel-body">
                      Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas
                    </div>
                   </div>
                  </div>
                  <div class="panel">
                   <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseThree-alt3">
                      <i class="fa fa-angle-right"></i> Accordion Heading Text Item # 3
                      </a>
                    </h4>
                   </div>
                   <div id="collapseThree-alt3" class="panel-collapse collapse">
                    <div class="panel-body">
                      Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas
                    </div>
                   </div>
                  </div>
                  <div class="panel">
                   <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseFour-alt3">
                      <i class="fa fa-angle-right"></i> Accordion Heading Text Item # 4
                      </a>
                    </h4>
                   </div>
                   <div id="collapseFour-alt3" class="panel-collapse collapse">
                    <div class="panel-body">
                      Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas
                    </div>
                   </div>
                  </div>
                </div>
                <!-- Accordion ends -->
                
              </div>
              
              <div class="col-md-4">
                <div class="block-heading-two">
                  <h3><span>Testimonials</span></h3>
                </div>  
                     <div class="testimonials">
                    <div class="active item">
                      <blockquote><p>Lorem ipsum dolor met consectetur adipisicing. Aorem psum dolor met consectetur adipisicing sit amet, consectetur adipisicing elit, of them jean shorts sed magna aliqua. Lorem ipsum dolor met.</p></blockquote>
                      <div class="carousel-info">
                      <img alt="" src="img/team4.jpg" class="pull-left">
                      <div class="pull-left">
                        <span class="testimonials-name">Marc Cooper</span>
                        <span class="testimonials-post">Technical Director</span>
                      </div>
                      </div>
                    </div>
                  </div>
              </div>
              
            </div>
            
                        
             
            <br>
           
            </div>
            
          </div>

<style>
.section-title {
  font-weight: 600;
  color: #333;
  position: relative;
  margin-bottom: 30px;
}

.section-title:after {
  content: '';
  display: block;
  width: 60px;
  height: 3px;
  background: #007bff;
  margin: 15px auto;
}

.flex-caption {
  background: rgba(0,0,0,0.7);
  padding: 20px;
  border-radius: 5px;
}

.flex-caption h3 {
  font-size: 2.5rem;
  margin-bottom: 15px;
}

.category-grid {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
  gap: 15px;
  padding: 20px 0;
}

.info-blocks .card {
  transition: transform 0.2s;
}

.info-blocks .card:hover {
  transform: translateY(-5px);
}

.animated {
  animation-duration: 1s;
}

@keyframes fadeInDown {
  from { opacity: 0; transform: translateY(-20px); }
  to { opacity: 1; transform: translateY(0); }
}

@keyframes fadeInUp {
  from { opacity: 0; transform: translateY(20px); }
  to { opacity: 1; transform: translateY(0); }
}

.fadeInDown { animation-name: fadeInDown; }
.fadeInUp { animation-name: fadeInUp; }
</style>