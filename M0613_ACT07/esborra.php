<?php
setcookie('ultimaVisita', '', time() - 3600);
 
echo 'Cookie esborrada. <a href="cookie.php">Torna al comptador</a>';
