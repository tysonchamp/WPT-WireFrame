<?php

/*
 * Theme Home Page
 */
GLOBAL $post;
$home_id = $post->ID;
get_header();
?>

    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div id="main-slider-2" data-slider-width="100%" data-slider-height="400" data-slider-arrows="true" data-slider-buttons="false" class="main-slider-3 slider-pro">
            <div class="sp-slides"> 
              <!-- Slide 1-->
              <div class="sp-slide"><img src="images/slider1.jpg" alt="slider" class="sp-image"/>
                <div data-width="100%" data-show-transition="left" data-hide-transition="left" data-show-duration="800" data-show-delay="400" data-hide-delay="400" class="sp-layer">
                  <div class="main-slider__category">Good Vs Evil</div>
                  <h2 class="main-slider__title">It symbolizes the victory of good over evil and truth over falsehood</h2>
                  <a href="post-1.html" class="btn btn-default btn-sm btn-effect">read more</a> </div>
              </div>
              <!-- Slide 2-->
              <div class="sp-slide"><img src="images/slider2.png" alt="slider" class="sp-image"/>
                <div data-width="100%" data-show-transition="left" data-hide-transition="left" data-show-duration="800" data-show-delay="400" data-hide-delay="400" class="sp-layer">
                  <div class="main-slider__category">inspiration</div>
                  <h2 class="main-slider__title">Lorem ipsum dolor sed amet adipisicing elit duia</h2>
                  <a href="post-1.html" class="btn btn-default btn-sm btn-effect">read more</a> </div>
              </div>
            </div>
          </div>
          <!-- end main-slider--> 
          
        </div>
      </div>
    </div>
    <div class="container">
      <section class="about-author wow">
        <div class="row">
          <div class="col-md-3">
            <div class="about-author__inner">
              <h2 class="about-author__title"><span class="about-author__title-inner color-primary">Hello,</span>My name is</h2>
              <img src="images/1.png" alt="signature" class="about-author__signature img-responsive"/>
              <div class="about-author__subtitle">I’m a Book Writer !</div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="about-author__info">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmog tempor incididunt ut labore et dolore magna aliqua uta enim ad minim veniam quis nostrud exercitation ulamco labor nisi ut aliquip exea comd do ipsum sed consequat.</p>
              <p>Duis aute iru re dolor in reprehenderitin voluptate velit ese cilum dolor efusaz fugiat nulla pariatur sint.</p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="about-author__media"><img src="images/chirstopher.jpg" alt="foto" class="img-responsive"/></div>
          </div>
        </div>
      </section>
    </div>
    <!-- end about-author-->
    
    <div class="container">
      <div class="row">
        <div class="col-md-9">
          <div class="main-content">
            <div class="post-group">
              <article class="post post-1 post-1_mob-e wow clearfix">
                <div class="entry-media"><a href="images/post1.jpg" class="zoom-images"><img src="images/post1.jpg" alt="Foto" class="img-responsive"/></a>
                  <div class="entry-meta"><span class="entry-meta__item"><a href="#" class="entry-meta__link">
                    <time datetime="2012-10-27 15:20">ApR 30,2016</time>
                    </a></span><span class="entry-meta__item"><a href="post-1.html" class="entry-meta__link">20 likes</a></span><span class="entry-meta__item"><a href="#" class="entry-meta__link">15 comments</a></span></div>
                </div>
                <div class="entry-category">
                  <div class="entry-category__item">inspiration</div>
                  <div class="entry-category__item">business</div>
                </div>
                <div class="entry-main">
                  <div class="entry-header">
                    <h2 class="entry-title entry-title_spacing ui-title-inner">Neeo Can be a Competitor to WhatsApp</h2>
                  </div>
                  <div class="entry-content">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed dno eiusmod tempor incididunt laboret dolore magna aliqua uta enim ad minim ven iam quis nostr ud exercitation ullamco labor nisi aliquip exea commo do consequat. Duis aute iru re dolor in reprehenderit asda ipsum dolor sit amel consectetur adipisicing elit sed do eiusmod sed ipsum tempor nulla dia ven aliqua.</p>
                  </div>
                  <div class="social_area">
                  
                    <ul class="social-network social-circle">
                        <li><a href="#" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                    </ul>               
                
                  </div>
                  <div class="entry-footer"><a href="#" class="btn btn-primary btn-sm btn-effect">read more</a></div>
                </div>
              </article>
              <!-- end post-->
              
              <article class="post post-1 post-1_mob-e clearfix wow">
                <div class="entry-media">
                  <div data-pagination="false" data-navigation="true" data-single-item="true" data-auto-play="7000" data-transition-style="fade" data-main-text-animation="true" data-after-init-delay="3000" data-after-move-delay="1000" data-stop-on-hover="true" class="owl-carousel owl-theme owl-theme_mod-a enable-owl-carousel zoom-gallery"><a href="images/post3.jpg" class="zoom-gallery__item"><img src="images/post3.jpg" alt="Foto" class="img-responsive"></a><a href="images/post2.jpg" class="zoom-gallery__item"><img src="images/post2.jpg" alt="Foto" class="img-responsive"></a></div>
                  <div class="entry-meta"><span class="entry-meta__item"><a href="post-1.html" class="entry-meta__link">
                    <time datetime="2012-10-27 15:20">ApR 30,2016</time>
                    </a></span><span class="entry-meta__item"><a href="#" class="entry-meta__link"> 201
                    likes</a></span><span class="entry-meta__item"><a href="#" class="entry-meta__link"> 16
                    comments</a></span></div>
                </div>
                <div class="entry-category">
                  <div class="entry-category__item">event pics</div>
                  <div class="entry-category__item">old is gold</div>
                </div>
                <div class="entry-main">
                  <div class="entry-header">
                    <h2 class="entry-title ui-title-inner">Breaking the Golden Rule of Politics</h2>
                  </div>
                  <div class="entry-content">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed dno eiusmod tempor incididunt laboret dolore magna aliqua uta enim ad minim ven iam quis nostr ud exercitation ullamco labor nisi aliquip exea commo do consequat. Duis aute iru re dolor in reprehenderit asda ipsum dolor sit amel consectetur adipisicing elit sed do eiusmod sed ipsum tempor nulla dia ven aliqua.</p>
                  </div>
                  <div class="social_area">
                  
                    <ul class="social-network social-circle">
                        <li><a href="#" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                    </ul>               
                
                  </div>
                  <div class="entry-footer"><a href="#" class="btn btn-default btn-sm btn-effect">read more</a></div>
                </div>
              </article>
              <article class="post post-1 post-1_mob-e clearfix wow">
                <div class="entry-media">
                  <div class="player fixed-controls play-button">
                    <video poster="images/poster-3.jpg">
                      <source src="images/1.mp4" type="video/mp4">
                    </video>
                  </div>
                  <div class="entry-meta"><span class="entry-meta__item"><a href="#" class="entry-meta__link">
                    <time datetime="2012-10-27 15:20">ApR 30,2016</time>
                    </a></span><span class="entry-meta__item"><a href="#" class="entry-meta__link"> 201
                    likes</a></span><span class="entry-meta__item"><a href="#" class="entry-meta__link"> 16
                    comments</a></span></div>
                </div>
                <div class="entry-category">
                  <div class="entry-category__item">trends 2016</div>
                  <div class="entry-category__item">video</div>
                </div>
                <div class="entry-main">
                  <div class="entry-header">
                    <h2 class="entry-title ui-title-inner">BNYMellon restates profit on $598m charge</h2>
                  </div>
                  <div class="entry-content">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed dno eiusmod tempor incididunt laboret dolore magna aliqua uta enim ad minim ven iam quis nostr ud exercitation ullamco labor nisi aliquip exea commo do consequat. Duis aute iru re dolor in reprehenderit asda ipsum dolor sit amel consectetur adipisicing elit sed do eiusmod sed ipsum tempor nulla dia ven aliqua.</p>
                  </div>
                  <div class="social_area">
                  
                    <ul class="social-network social-circle">
                        <li><a href="#" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                    </ul>               
                
                  </div>
                  <div class="entry-footer"><a href="#" class="btn btn-default btn-sm btn-effect">read more</a></div>
                </div>
              </article>
              
              
              <article class="post post-1 post-1_mob-e clearfix wow">
                <div class="entry-media clearfix">
                  <div class="img-background"><img src="images/post4.jpg" alt="background"></div>
                  <!--<blockquote class="entry-blockquote blockquote blockquote-3">
                    <p>The best way to find out if you can trust  somebody is to trust them.</p>
                    <footer> <cite title="Blockquote Title"><span class="blockquote__author">Ernest Hemingway</span></cite> </footer>
                  </blockquote>-->
                  <!--<div class="entry-meta"><span class="entry-meta__item"><a href="#" class="entry-meta__link">
                    <time datetime="2012-10-27 15:20">ApR 30,2016</time>
                    </a></span><span class="entry-meta__item"><a href="#" class="entry-meta__link"> 201
                    likes</a></span><span class="entry-meta__item"><a href="#" class="entry-meta__link"> 14
                    comments</a></span></div>-->
                </div>
                <div class="entry-category">
                  <div class="entry-category__item">quotes</div>
                  <div class="entry-category__item">golden words</div>
                </div>
                <div class="entry-main">
                  <div class="entry-header">
                    <h2 class="entry-title ui-title-inner">Sharing a Quote in 2016</h2>
                  </div>
                  <div class="entry-content">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed dno eiusmod tempor incididunt laboret dolore magna aliqua uta enim ad minim ven iam quis nostr ud exercitation ullamco labor nisi aliquip exea commo do consequat. Duis aute iru re dolor in reprehenderit asda ipsum dolor sit amel consectetur adipisicing elit sed do eiusmod sed ipsum tempor nulla dia ven aliqua.</p>
                  </div>
                  <div class="social_area">
                  
                    <ul class="social-network social-circle">
                        <li><a href="#" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                    </ul>               
                
                  </div>
                  <div class="entry-footer"><a href="#" class="btn btn-default btn-sm btn-effect">read more</a></div>
                </div>
              </article>
            </div>
            <!--<ul class="pager">
              <li><a href="#"><i class="icon fa fa-angle-double-left"></i>older posts</a></li>
              <li><a href="#">newer posts<i class="icon fa fa-angle-double-right"></i></a></li>
            </ul>-->
          </div>
          <!-- end main-content--> 
          
        </div>
        <div class="col-md-3">
          <aside class="sidebar">
            
            <!-- end widget-->
            
            
            <!-- end widget-->
            
            <div class="widget clearfix"><a href="#" class="banner-sidebar"><img src="images/ad.jpg" alt="banner" class="img-responsive"></a></div>
            <!-- end widget-->
            
            <section class="widget widget-form">
              <h3 class="widget-title ui-title-block border-left border-left_primary">subscribe now</h3>
              <div class="widget-content">
                <div class="widget-form__info">Zorem ipsum dolor sit amet elit sed eiusmod tempor.</div>
                <form action="#" method="post" class="ui-form ui-form-2">
                  <input type="email" placeholder="Your email here" class="form-control">
                  <button class="ui-form__btn btn btn-info btn-effect btn-block">submit</button>
                </form>
              </div>
            </section>
            <!-- end widget-->
            
            <section class="widget">
              <h3 class="widget-title ui-title-block border-left border-left_primary">popular posts</h3>
              <div class="widget-content">
                <div class="post-widget post-widget_mod-a clearfix">
                  <div class="post-widget__media"><a href="#"><img src="images/1.jpg" alt="foto" class="img-responsive"></a></div>
                  <a href="#" class="post-widget__title">Lorem ipsum dolor sit amet elit sed eiusmod</a>
                  <time datetime="2012-10-27 15:20" class="post-widget__date">ApR 30,2016</time>
                </div>
                <div class="post-widget post-widget_mod-a clearfix">
                  <div class="post-widget__media"><a href="#"><img src="images/2.jpg" alt="foto" class="img-responsive"></a></div>
                  <a href="#" class="post-widget__title">Magna aliqua enim adun minim veniam quis nostrud</a>
                  <time datetime="2012-10-27 15:20" class="post-widget__date">ApR 30,2016</time>
                </div>
                <div class="post-widget post-widget_mod-a clearfix">
                  <div class="post-widget__media"><a href="#"><img src="images/3.jpg" alt="foto" class="img-responsive"></a></div>
                  <a href="#" class="post-widget__title">Exercitation ullamco laboris nisi aliquip ex ea sed</a>
                  <time datetime="2012-10-27 15:20" class="post-widget__date">ApR 30,2016</time>
                </div>
              </div>
            </section>
            <!-- end widget-->
            
            
            <!-- end widget-->
            
            <div class="widget clearfix"><a href="#"><img src="images/3.jpg" alt="banner" class="img-responsive"></a></div>
            <!-- end widget-->
            
            
            <!-- end widget-->
            
            <section class="widget">
              <h3 class="widget-title ui-title-block border-left border-left_primary">Recent posts</h3>
              <div class="widget-content">
                <div class="post-widget_mod-b clearfix">
                  <div class="post-widget__media"><a href="#"><img src="images/11.jpg" alt="foto" class="img-responsive"></a></div>
                  <div class="post-widget__inner"><a href="#" class="post-widget__title">Tempor incididun labore dolore</a>
                    <time datetime="2012-10-27 15:20" class="post-widget__date">ApR 30,2016</time>
                  </div>
                </div>
                <div class="post-widget_mod-b clearfix">
                  <div class="post-widget__media"><a href="#"><img src="images/22.jpg" alt="foto" class="img-responsive"></a></div>
                  <div class="post-widget__inner"><a href="#" class="post-widget__title">Magna aliqua uta enim minim</a>
                    <time datetime="2012-10-27 15:20" class="post-widget__date">ApR 30,2016</time>
                  </div>
                </div>
                <div class="post-widget_mod-b clearfix">
                  <div class="post-widget__media"><a href="#"><img src="images/33.jpg" alt="foto" class="img-responsive"></a></div>
                  <div class="post-widget__inner"><a href="#" class="post-widget__title">Ven iam quis nost citation ulam</a>
                    <time datetime="2012-10-27 15:20" class="post-widget__date">ApR 30,2016</time>
                  </div>
                </div>
              </div>
            </section>
          </aside>
          <!-- end sidebar--> 
        </div>
      </div>
    </div>

<?php get_footer(); ?>