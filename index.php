<?php get_header()?>

        <div class="textt">
      <div class="row">
        <div class="col-md-12">
          <div class="header">
            <h1 class="col-xl-3 col-md-4 headerText">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.
</h1>
            <div class="btnblock">
              <a class="btn headerbtn" href="#">Связяться
                со мной</a>
          </div>
        </div>
      </div>
    </div>
</div>
  </div>
<div class="container colcontainer">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 ">
        <div class="col">
          <div class="card shadow-sm second-card">
            <img src="wp-content\themes\Wordpress\7.jpg" class="secondjpg">

            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            
            </div>
              </div>
            </div>
      


        
        <div class="col column">
          <div class="card shadow-sm">
          <img src="wp-content\themes\Wordpress\5.jpg">

            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm last-card">
          <img src="wp-content\themes\Wordpress\1.jpg">

            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
          </div>
          </div>
        </div>
</div>


      
    
        
      <div class="titletext container">
      <p class>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      </div>
      </div>
      </div>
<div class="container">
  <?php
  $query = new WP_Query( [
    'posts_per_page' => 5,
    'orderby'        => 'comment_count',
    'post_type' => 'raspisanije_zaniatij'
  ] );
  
  // Цикл
  global $post;
  
  if ( $query->have_posts() ) {
    while ( $query->have_posts() ) {
      $query->the_post();
     the_title() ;
    }
  } else {
    ?><pPiosts not found></p><?php
  }
  
  wp_reset_postdata();
  ?>
</div>
<?php the_content()?>
<button id="video-open">Watch video</button>
<div class="modal-window">
  <video width="460" height="281" loop="" controls>
          <source src="https://admin/wordpress/wp-content/uploads/2021/08/videoplayback.mp4">
        </video>
</div>
<script>
  $('#video-open').click(function(){
    $('.modal-window').toggle("slow")
  })
</script>
  <div class="container video">
    <div class="ifame">
      <iframe width="100%" height="685" src="https://www.youtube.com/embed/BHACKCNDMW8" title="YouTube video player"
        frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
        allowfullscreen></iframe>
    </div>
  </div>

<div class="owl-carousel owl-theme">
        
<div class="col columna">
          <div class="card shadow-sm">
          <img src="wp-content\themes\Wordpress\5.jpg">

            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              
            </div>
          </div>
        </div>
                
        <div class="col columna">
          <div class="card shadow-sm">
          <img src="wp-content\themes\Wordpress\5.jpg">

            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              
            </div>
          </div>
        </div>
                
        <div class="col columna">
          <div class="card shadow-sm">
          <img src="wp-content\themes\Wordpress\5.jpg">

            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              
            </div>
          </div>
        </div>
                
        <div class="col columna">
          <div class="card shadow-sm">
          <img src="wp-content\themes\Wordpress\5.jpg">

            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              
            </div>
          </div>
        </div>
                
        <div class="col columna">
          <div class="card shadow-sm">
          <img src="wp-content\themes\Wordpress\5.jpg">

            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              
            </div>
          </div>
        </div>
                
        <div class="col columna">
          <div class="card shadow-sm">
          <img src="wp-content\themes\Wordpress\5.jpg">

            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              
            </div>
          </div>
        </div>          
</div>
<script>
  $(function(){
    $(".owl-carousel").owlCarousel();
  });
</script>
<?php get_footer()?>