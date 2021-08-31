<?php
/**
* Template Name: Kyle Ray
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

<div class="container kaliraycont">
  <div class="row">

    <img src="wp-content/themes/Wordpress/kaliray.jpg">
    <div class="col-md-12 hrkaliray">
    <hr class="kaliraytext">Кали Рэй — мастер йоги, присутствие ее вдохновляет бесчисленное количество практикующих. Ее жизнь являет собой пример для тех, кто хочет прожить жизнь в радости и сострадании. Многие изменились под ее влиянием.
Калиджи с рождения была Рэй. В возрасте 22 лет она ощутила внутреннею необходимость другого имени. Оно появилось, когда она просто открыла нью эйджевскую книгу имен. Открытым было «Кали». Имя «Кали» имеет значения на многих языках. На греческом оно означает «Бог», на тибетском — «река», на санскрите — «энергия», энергия очищения; и на некоторых других языках оно также означает «очищение». Позже, во время медитации пришло еще одно имя — Лакшми, хотя она никому об этом не говорила. Вскоре после этого уважаемый и известный гуру в Индии дал ей имя Лакшми Девиджи. Так комбинированным именем стало Кали Лакшми Девиджи, укороченное со временем до Калиджи.</h2>
    </div>
    </div>
  </div>

<?php the_content()?>
<?php get_footer()?>