<?php
/**
* Template Name: Home
*
* @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0
*/
?>

<?php get_header()?>

        <div class="text">
      <div class="row">
        <div class="col-md-12">
        <?php echo do_shortcode('[smartslider3 slider="2"]')?>

      </div>
    </div>
</div>
  </div>
  <div class="container text-center">
    <h2>Начните свой путь в йоге вместе со мной</h2>
    <p>Выберите программу из списка ниже</p>
  </div>
<div class="container colcontainer">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 ">
        <div class="rowcol">
          <div class="card shadow-sm second-card">
            <img src="wp-content\themes\Wordpress\7.jpg" class="secondjpg owl_carimg">

            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            
            </div>
              </div>
            </div>
     <div class="col column">
      <div class="card shadow-sm">
        <img src="wp-content\themes\Wordpress\5.jpg" class="owl_carimg">
           <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm last-card">
          <img src="wp-content\themes\Wordpress\1.jpg" class="owl_carimg">

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
    ?><?php
  }
  
  wp_reset_postdata();
  ?>
</div>
<div class="container-fluid itemblock">
  <div class="row">
    <div class="col-md-7 yoga-image-container">
      <img class="yogaimage" src="https://admin/wordpress/wp-content/uploads/2021/08/изображение_viber_2021-07-14_10-07-43-534.jpg">
    </div>
    
    <div class="col-md-5 ulblock">
    <h2 class="yogacards">Lorem ipsum dolor sit amet.</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
       Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut.</p>
      <ul class="ul">
        <li class="li1">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
       Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut.</li>
        <li class="li2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
       Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut.</li>
        <li class="li3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
       Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut.</li>
      </ul>
    </div>
  </div>
</div>


<?php the_content()?>

  <div class="container-fluid no-gutters video">
    <div class="ifame">
     <div class="container">
       <h2>Lporem Ipsum</h2>
       <button id="video-open">Смотреть видео</button>
       <a href="https://admin/wordpress/wp-content/uploads/2021/08/alina2.mp4" target="_blank" id="video-open2">Смотреть видео</a>
     </div>
    </div>
  </div>
<div id="overlay"></div>
  <div class="modal-window">
    <span id="close-button">X</span>
  <video width="580" height="358" loop="" controls>
          <source src="https://admin/wordpress/wp-content/uploads/2021/08/alina2.mp4">
        </video>
</div>
<script>
  $('#video-open').click(function(){
    $('.modal-window').toggle("slow")
    $('#overlay').toggle("slow");
  });
  $('#close-button').click(function(){
    $('.modal-window').slideUp("slow");
    $('#overlay').slideUp("slow");
  });
</script>


<?php echo do_shortcode( '[contact-form-7 id="27" title="Контактная форма"]' )?>
<div id="result_form"></div>


 
<?php get_footer()?>
