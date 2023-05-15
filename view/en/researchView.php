<?php require('config/config.php'); ?>


<!-- Start php recording --> 
<?php ob_start(); ?>

<h2>Research activities</h2>
        <h3>Research interests</h3>
        <p>Signal and image processing.<br/>
           Hyperspectral and multispectral imaging.<br/>
           Large scale linear inverse problems solving.
        </p>
  
  <h3>PhD</h3>
        <p>2018-...<br/>
        	Factor models for data fusion in infrared astronomy .<br/>
            IRAP / IRIT / INP - ENSEEIHT<br/>
            Supervisors : Olivier BERNÉ, Nicolas DOBIGEON and Thomas OBERLIN.
        </p>



        <h3 id="Collaborations">Collaborations (past and current)</h3>
        <ul> 
         <li> <a href="http://userpages.irap.omp.eu/~oberne/Olivier_Berne/Home.html">Olivier Berné</a> (University of Toulouse, IRAP, France).
         <li>  <a href="http://dobigeon.perso.enseeiht.fr" >Nicolas Dobigeon</a> (University of Toulouse, IRIT, France).</li>
         <li>  <a href="http://oberlin.perso.enseeiht.fr/" >Thomas Oberlin</a> (University of Toulouse, ISAE-SUPAERO, France).</li>
         </ul>



<?php $content = ob_get_clean(); ?>
<!-- Stop php recording -->

<?php require('template_en.php'); ?>
