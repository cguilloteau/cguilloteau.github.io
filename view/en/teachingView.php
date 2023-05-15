<?php require('config/config.php'); ?>


<!-- Start php recording --> 
<?php ob_start(); ?>

<h1>Teaching </h1>
        <p>Since 2018, I have a teaching job in the electronics and signal processing department of INP-ENSEEIHT (Toulouse). I teach some of the following courses :
        </p>

        <ul>
          <li>Fourier transform and integration.</li>
          <li>Signal processing.</li>
          <li>Signal processing projects.</li>
          <li>Statistics and probability.</li>
        </ul>

<h1>Outreach</h1>

<p> Since 2018, I am an active member and the treasurer (in 2020) of a science outreach association : <a href="http://www.universciel.info">UniverSCiel</a>. I enjoy sharing knowledge and science with a young public.
</p>


<p>Stratospheric balloons</p>
<img
src="<?= $balloon_img ?>"
class="balloon"
width="800"
alt="<?= $author ?>"
srcset="<?php echo $balloon_img ." 1x , " . $balloon_img . "2x"?>"
>

<p>Counting stars</p>
<img
src="<?= $stars_img ?>"
class="stars"
width="800"
alt="<?= $author ?>"
srcset="<?php echo $stars_img ." 1x , " . $stars_img . "2x"?>"
>

<p>Scientilivres Festival</p>
<img
src="<?= $scientilivres_img ?>"
class="scientilivres"
width="800"
alt="<?= $author ?>"
srcset="<?php echo $scientilivres_img ." 1x , " . $scientilivres_img . "2x"?>"
>


<?php $content = ob_get_clean(); ?>
<!-- Stop php recording -->

<?php require('template_en.php'); ?>
