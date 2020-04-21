<?php
/*
  Plugin Name: mes shortcodes
  Description: Plugin fournissant des shortcodes
  Author: Elliott
  Version: 1.0.0
 */
function shortcode_drone_professionnel(){
    return "<ul>
 	<li><a href='http://tagusdrone.com'>Drone pour prise de vue HD</a></li>
 	<li><a href='http://ddd'>Drone de Telecommunications</a></li>
 	<li><a href='http://ddd'>Drone Loisirs</a></li>
 	<li><a href='http://ddd'>Drone pour transport de charge</a></li>
 	<li><a href='http://ddd'>Drone surveillance/
reconnaissance</a></li>
 	<li><a href='http://ddd'>Drone Agricole</a></li>
 	<li><a href='http://ddd'>Drone pour recherhce/travaux scientifique</a></li>
</ul>";
}
add_shortcode('drone_professionnel', 'shortcode_drone_professionnel');


function shortcode_drone_semi_professionnel()
{

return " <ul>
 	<li><a href='http://ddd'>Drone Amateurs</a></li>
 	<li><a href='http://ddd'>Drone Loisirs</a></li>
</ul>";

}
add_shortcode('drone_semi_professionnel', 'shortcode_drone_semi_professionnel');

function shortcode_accessoires_drone()
{

return "<ul>
 	<li><a href='http://ddd'>Moteurs</a></li>
 	<li><a href='http://ddd'>Batteries et chargeurs</a></li>
 	<li><a href='http://ddd'>Hélices</a></li>
 	<li><a href='http://ddd'>ESC</a></li>
 	<li><a href='http://ddd'>Controleurs de vol</a></li>
 	<li><a href='http://ddd'>Caméra</a></li>
 	<li><a href='http://ddd'>Radiocommande</a></li>
 	<li><a href='http://ddd'>Nacelles et Capteurs</a></li>
 	<li><a href='http://ddd'>Gimeball</a></li>
 	<li><a href='http://ddd'>Transmetteur/Emetteur</a></li>
 	<li><a href='http://ddd'>Divers</a></li>
</ul>";

}
add_shortcode('accessoires_drone','shortcode_accessoires_drone');


function shortcode_service()
{

return "<ul>
 	<li><a href='http://ddd'>Prise de vue aérienne</a></li>
 	<li><a href='http://ddd'>Location de drones</a></li>
 	<li><a href='http://ddd'>Design&amp;impression 3D</a></li>
 	<li><a href='http://ddd'>Conception des logiciels d'intelligence artificielles</a></li>
 	<li><a href='http://ddd'>Drone surveillance/
reconnaissance</a></li>
 	<li><a href='http://ddd'>Développement des sites internets et logiciels</a></li>
 	<li><a href='http://ddd'>Formation en pilotage et conception des drones</a></li>
 	<li><a href='http://ddd'>Services personnalisés</a></li>
</ul>";

}
add_shortcode('service','shortcode_service');




