<?php
/**
* Template Name: Contact
*
* @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0
*/
?>
<?php get_header()?>
<div class="textt">
      <div class="row">
        <div class="col-md-12">
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
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2529.7952408410238!2d30.717354!3d50.649493799999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d529244d45f857%3A0xbc552dd47474f72f!2sShambala%20Wellness%20Club!5e0!3m2!1sru!2sua!4v1627967730162!5m2!1sru!2sua" 
 width="100%" height="800"style="margin-top: 5%;"  allowfullscreen="" loading="lazy"></iframe>
    </div>
  </div></div>
<?php echo do_shortcode( '[contact-form-7 id="27" title="Контактная форма"]' )?>
<div id="result_form"></div>
<?php the_content()?>
<?php get_footer()?>