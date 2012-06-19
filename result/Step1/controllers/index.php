<?php 
// Normally I'd write a load of action logic here, but its kinda overkill for what we need
// So this entire file is the controller..
// and this is its entirity:
$view['people'] = people::get_instance()->get_people();