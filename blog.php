<?php
/**
* Template Name: Blog
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

<div class="container mt-5">
    <div class="row">
            
        <h2 class="blogh1">Йога поток для начинающих</h1>
        <div class="col-md-4">
        <img class="blogimg" src="wp-content\themes\Wordpress\yogajpg.jpg">
        </div>
        <div class="col-md-4">
        <img class="blogimg" src="wp-content\themes\Wordpress\yogajpg.jpg">
        </div>
        <div class="col-md-4">
       <img class="blogimg" src="wp-content\themes\Wordpress\yogajpg.jpg">
        </div>
        
</div>
<div class="button_wrapper_blog">
<a class="btn blogbtn" href="<?php the_field('link_for_beginners')?>">Записаться на курс</a>
</div>
<hr class="hrblog"><p class="pblog" style="   text-align: center;
    padding-left: 5%;
    padding-right: 5%;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
   </div>
   <div class="container mt-5">
    <div class="row">
        <h2 class="blogh1">Йога поток уровнь 2</h1>
        <div class="col-md-4">
       <img class="blogimg" src="wp-content\themes\Wordpress\yogajpg.jpg">
        </div>
        <div class="col-md-4">
       <img class="blogimg" src="wp-content\themes\Wordpress\yogajpg.jpg">
        </div>
        <div class="col-md-4">
       <img class="blogimg" src="wp-content\themes\Wordpress\yogajpg.jpg">
        </div>
</div>
<div class="button_wrapper_blog">
<a class="btn blogbtn" href="<?php the_field('link_potok') ?>">Записаться на курс</a>
</div>
<hr class="hrblog"><p class="pblog" style="   text-align: center;
    padding-left: 5%;
    padding-right: 5%;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
    </div>
<div class="container mt-5">
    <div class="row">
        <h2 class="blogh1">Йога поток уровень 3</h1>
        <div class="col-md-4">
       <img class="blogimg" src="wp-content\themes\Wordpress\yogajpg.jpg">
        </div>
        <div class="col-md-4">
       <img class="blogimg" src="wp-content\themes\Wordpress\yogajpg.jpg">
        </div>
        <div class="col-md-4">
       <img class="blogimg" src="wp-content\themes\Wordpress\yogajpg.jpg">
        </div>
</div>
<div class="button_wrapper_blog">
<a class="btn blogbtn" href="<?php the_field('link_potok2') ?>">Записаться на курс</a>
</div>
<hr class="hrblog"><p class="pblog" style="   text-align: center;
    padding-left: 5%;
    padding-right: 5%;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
</div>
</div>
<?php the_content()?>
<?php get_footer()?>
