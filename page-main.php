<?php
/**
* Template Name: About
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
<div class="container cont">
		<div class="row">
			<div class="col-md-12 mb-5 aboutme">
	<h2 class="texth">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sit amet gravida enim. Phasellus cursus iaculis orci sit amet finibus. Aenean metus enim, ultrices in pretium nec, rutrum ac est. Aenean diam lorem, congue id faucibus at, fringilla consectetur libero. Donec non turpis orci. Ut auctor fermentum convallis. Praesent et suscipit velit. Nam efficitur ipsum in metus euismod feugiat. Suspendisse ut consectetur arcu, eleifend eleifend tellus. Vestibulum hendrerit tincidunt dui vel pulvinar. Mauris nec commodo diam, ac feugiat nibh.
</h2></div></div></div>
<div class="container">
	<div class="row">
		<div class="col-md-4 col-sm-12">	
Nam tincidunt efficitur auctor. In semper risus ac nibh volutpat ultricies. Curabitur vel mauris quis quam sodales convallis. Vestibulum interdum malesuada lacus. Phasellus elementum tellus lobortis, aliquet arcu non, tristique leo. Fusce auctor nulla sed pharetra porttitor. Donec aliquam in elit at blandit. Nulla euismod dolor eros, sed condimentum elit mattis et. Vivamus efficitur tincidunt velit non dictum. Nam nulla eros, porta sit amet rutrum sed, cursus imperdiet quam. Curabitur porttitor ante in velit feugiat, id iaculis orci elementum. Donec nec condimentum augue, a molestie massa. Donec eu eros diam. Donec a sagittis sem, nec mollis purus. Praesent vitae posuere nisi. Vivamus eu quam eu lectus interdum suscipit vel nec urna.
		</div>
		<div class="col-md-4 col-sm-12">	
Nam tincidunt efficitur auctor. In semper risus ac nibh volutpat ultricies. Curabitur vel mauris quis quam sodales convallis. Vestibulum interdum malesuada lacus. Phasellus elementum tellus lobortis, aliquet arcu non, tristique leo. Fusce auctor nulla sed pharetra porttitor. Donec aliquam in elit at blandit. Nulla euismod dolor eros, sed condimentum elit mattis et. Vivamus efficitur tincidunt velit non dictum. Nam nulla eros, porta sit amet rutrum sed, cursus imperdiet quam. Curabitur porttitor ante in velit feugiat, id iaculis orci elementum. Donec nec condimentum augue, a molestie massa. Donec eu eros diam. Donec a sagittis sem, nec mollis purus. Praesent vitae posuere nisi. Vivamus eu quam eu lectus interdum suscipit vel nec urna.
		</div>
		<div class="col-md-4 col-sm-12">	
Nam tincidunt efficitur auctor. In semper risus ac nibh volutpat ultricies. Curabitur vel mauris quis quam sodales convallis. Vestibulum interdum malesuada lacus. Phasellus elementum tellus lobortis, aliquet arcu non, tristique leo. Fusce auctor nulla sed pharetra porttitor. Donec aliquam in elit at blandit. Nulla euismod dolor eros, sed condimentum elit mattis et. Vivamus efficitur tincidunt velit non dictum. Nam nulla eros, porta sit amet rutrum sed, cursus imperdiet quam. Curabitur porttitor ante in velit feugiat, id iaculis orci elementum. Donec nec condimentum augue, a molestie massa. Donec eu eros diam. Donec a sagittis sem, nec mollis purus. Praesent vitae posuere nisi. Vivamus eu quam eu lectus interdum suscipit vel nec urna.
		</div>
	</div>
</div>
<?php the_content()?>
<?php get_footer()?>