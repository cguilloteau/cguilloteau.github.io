<?php require('config/config.php'); ?>

<!-- Start php recording --> 
<?php ob_start(); ?>

 <img
    src="<?= $avatar_img ?>"
    class="avatar"
    alt="<?= $author ?>"
    srcset="<?php echo $avatar_img ." 1x , " . $avatar_img . "2x"?>"
  >

<h1 id="aboutme" class="page-title hr">Welcome</h1>
  <p>I am a Ph.D. student since October, 2018 in the city of Toulouse, France. I work under the supervision of <a href="http://userpages.irap.omp.eu/%7Eoberne/Olivier_Berne/Home.html">Olivier Berné</a>, <a href="http://oberlin.perso.enseeiht.fr/">Thomas Oberlin</a> and <a href="http://dobigeon.perso.enseeiht.fr/index.html">Nicolas Dobigeon</a>, within the <a href="http://www.irap.omp.eu/recherche/groupes-thematiques/micmac">MICMAC</a> group of the <a href="https://www.irap.omp.eu/">IRAP</a> laboratory and the <a href="http://sc.enseeiht.fr/">SC</a> group of the <a href="https://www.irit.fr/">IRIT</a> laboratory.
  </p>

  <p>In 2018, I graduated from <a href="http://www.insa-rouen.fr/">Institut des Sciences Appliquées de Rouen</a>, in applied mathematics and computer science.</p>

  <p>My research interests are in high dimensional signal and image processing in space infrared astronomy. In particular, I am interested in hyperspectral and multispectral images fusion for <a href="http://jwst.stsci.edu">James Webb Space Telescope (JWST)</a> observations. </p>

  <p class="message"><strong><font color="black">News/Events</strong>:</font><br>
    <span style="font-size: 0.9em">
    </span>
  <p>


<div style="text-align: center; margin-top: 50px">
<a href="https://www.irit.fr/" class="no-mark-external" style="display: inline-block;margin-right: 30px" target="_blank"><img alt="IRITlogo" src="public/img/Logo_IRIT.png" style="height: 100px;width: auto;" /></a>
<a href="http://www.univ-toulouse.fr/" class="no-mark-external" style="display: inline-block; margin-right: 30px" target="_blank"> <img alt="Toulouselogo" src="public/img/Logo_univToulouse.jpg" style="height: 100px;width: auto;" /></a>
<a href="http://www.irap.omp.eu" class="no-mark-external" style="display: inline-block;" target="_blank"> <img alt="IRAPlogo" src="public/img/logo-irap-couleur.png" style="height: 100px;width: auto; " /></a>

</div>


<?php $content = ob_get_clean(); ?>
<!-- Stop php recording -->

<?php require('template_en.php'); ?>
