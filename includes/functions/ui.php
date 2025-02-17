<?php
function setActive($route) {
    $currentUri = trim($_SERVER['REQUEST_URI'], '/'); 
    return ($currentUri == trim($route, '/')) ? 'active' : '';
}
 