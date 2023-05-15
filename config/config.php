<?php

/* -------------------
-- Site description ------------
--

title: 			The title of the site
author: 		your name
description: 	a quick sentence describing your job
keywords: 		some keywords
url: 			your site url

*/

$title = 'Claire GUILLOTEAU | Univ. Toulouse';

$author='Claire Guilloteau';

$description="Ph.D. Student in astronomical image processing in Toulouse, France.";

$keywords="Ph. D., astronomy image processing";

$url="http://guilloteau.perso.enseeiht.fr";


/* -------------------
-- Icons ------------
--

site_icon: 		The icon that is displayed in the navigation tab
lab_logo: 		The logo of your lab
sidebar_bg: 	The background image of the sidebar
avatar_img: 	Your photo that is displayed in the welcome page
not_found_img:	The image that is displayed when the page is not found (changes not recomended)

*/

$site_icon="public/img/site_ico.ico";

$lab_logo="public/img/logo.png";

$sidebar_bg="public/img/cleres.jpg";

$avatar_img="public/img/claire_square.png"; 

$not_found_img="public/img/404_desk.png";

$balloon_img="public/img/balloon.png";
    
$scientilivres_img="public/img/scientilivres.png";
    
$stars_img="public/img/etoiles.png";


/* -------------------
-- Socials ------------
--

Enables and configure social links that appear at the bottom of the sidebar and inside the findMe page

A multi-dimensional array is defined. Each sub-array should contain 3 to 4 elements which are:
- a description of the social media
- the link where the visitor should be directed to
- the name of the class (cf above)
- (optional) boolean. True if the page should be opened in a new tab. False if the page should open in the current tab. Default is True

The class that should be given defines the icon. To define a new social media, please go to the following files:
- public/icomoon/style.css
- public/academicons/css/academicons.css (add 'ai ' to the class name for classes comming from this file)
and try to find the right media class. As an example, to add the overleaf media, use the 'ai ai-overleaf' class.

*/

$social_array=array(
	array("Email","mailto:claire.guilloteau@irit.fr","icon-mail",False),
	array("LinkedIn","https://www.linkedin.com/in/claire-guilloteau-0b0baa14a/","icon-linkedin2"),
	array("Github","https://github.com/cguilloteau","icon-github"),
	array("Google Scholar","https://scholar.google.com/citations?user=NM9mwiQAAAAJ&hl=fr&oi=ao","ai ai-google-scholar-square"),
);

require('view/social.php'); 

