<?php
/**
* Template Name: Shop
*
* @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0
*/
?>
<?php get_header()?>
<div class="textt">
      <div class="row">
        <div class="col-md-12" style="margin-top: 5%;">
          <div class="header">
            <h1 class="col-xl-3 col-md-4 headerText"><?php the_field('text_on_header')?>
</h1>
            <div class="btnblock">
           
         <?php $linkname=get_field('knopka_na_hedere')?>
              <a class="btn headerbtn" href="<?php echo $linkname['url']?>"><?php echo $linkname['title']?></a>
          </div>
        </div>
      </div>
    </div>
</div>
</div>
<div class="container">
  <div class="row">
    <div class="col-md-12">
    <?php the_content()?>
      <?php echo do_shortcode('[products]');?>
    </div>
  </div>
</div>
<?php echo do_shortcode( '[contact-form-7 id="27" title="Контактная форма"]' )?>
<div id="result_form"></div>
<?php get_footer()?>


