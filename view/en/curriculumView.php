<?php require('config/config.php'); ?>


<!-- Start php recording --> 
<?php ob_start(); ?>


<h2>Curriculum vitae</h2>
        <h3>Education</h3>

        <table width="90%">
    <tr>
            <td><span class="tab_entry">2018-...</span><br/></td>
            <td><span class="tab_entry">PhD in applied mathematics and astrophysics.</span><br/>
                <span class="h7">INP-ENSEEIHT and IRAP Toulouse (France)</span></td>

          </tr>
          <tr>
            <td><span class="tab_entry">2013-2018</span><br/></td>
            <td><span class="tab_entry">Master's degree in applied mathematics ans computer science.</span><br/>
                <span class="h7">INSA Rouen (France)</span></td>

          </tr>
        </table>

        <h3>Professional experience</h3>
        <table width="90%">
        <tr>
        <td><span class="tab_entry">2019</span><br/></td>
        <td><span class="tab_entry"> <b>Kavli Summer Program in Astrophysics.</b></span><br/>
        <span class="h7"> Emulating astronomical images using Deep Generative models <br/>
        conditioned with Gaussian Processes or Autoregressive flows.<br/>
        University of California Santa Cruz (UCSC, USA).</span></td>
        </tr>
          <tr>
            <td><span class="tab_entry">2018</span><br/></td>
            <td><span class="tab_entry"><b>Research internship in astronomical image processing.</b></span><br/>
                <span class="h7">Deep analysis and simple implementation of the technical design of <br/>
                 James Webb Space Telescope (JWST) instruments.<br/>
                 Hyperspectral and multispectral data fusion from JWST simulated data.<br/>
                 INP-ENSEEIHT and IRAP (Toulouse, France).</span></td>
          </tr>
          <tr>

            <td><span class="tab_entry">2016</span><br/></td>
            <td><span class="tab_entry"><b>Research internship in biological image processing.</b></span><br/>
                <span class="h7">Automatic detection of stripes from fish scales.<br/>
                Université du Québec à Trois-Rivières (UQTR, Canada).</span></td>

          </tr>
        </table>

        <h3>Other skills</h3>
        <table width="90%">
          <tr>
            <td  rowspan="5"><span class="tab_entry">Language </span></td>
            <td> French : native language.</td>
          </tr>
          <tr >

            <td>English : professional level.</td>
          </tr>
          
          <tr >

            <td>German : basic.</td>
          </tr>
          
          <tr >

            <td>Spanish : beginner.</td>
          </tr>

          <tr>

            <td  rowspan="4"><span class="tab_entry">Programmation</span></td>
          </tr>
          <tr >
            <td>Python, Matlab, C, C++, Java, Fortran.</td>
          </tr>
          <tr >

            <td>Word processing: LaTeX, MS Office.</td>
          </tr>
    <tr >

            <td>OS : MacOS, Linux, Windows.</td>
          </tr>
        </table>


  <h3>Voluntary commitments</h3>
        <table width="90%">
          <tr>
            <td><span class="tab_entry">2018-...</span><br/></td>
            <td><span class="tab_entry"> Member of <a href="http://www.universciel.info">UniverSCiel</a> (treasurer), a science outreach association. <br/>
            Organization of science outreach workshops and activities :<br/>
            stratospheric balloons building and launching, science games. .</span><br/></td>
          </tr>
          <tr>
            <td><span class="tab_entry">2020</span><br/></td>
            <td><span class="tab_entry"> IRAP PhD Day organizing team <br/>
            </tr>
        </table>

  <h3>Sports and hobbies</h3>
        <table width="90%">
          <tr>
            <td><span class="tab_entry">Music</span><br/></td>
            <td><span class="h7">Clarinet, Guitar</span><br/>
                </td>
          </tr>
    <tr>
            <td><span class="tab_entry">Culture</span><br/></td>

            <td><span class="h7">Films, Novels, Music.</span><br/>
          </tr>
          <tr>

            <td><span class="tab_entry">Sports</span><br/></td>
            <td><span class="h7">Gymnatics (Practicing, Coach and Judge), Yoga, Crossfit and Fitness.</span><br/>
          </tr>
        </table>


<?php $content = ob_get_clean(); ?>
<!-- Stop php recording -->

<?php require('template_en.php'); ?>
