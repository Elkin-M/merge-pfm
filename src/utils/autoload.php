<?php

$controladores = glob( CONTROLLERS .'/*.php');
$models = glob( MODELS .'/*.php');

foreach($controladores as $c){ require_once( $c ); }
foreach($models as $m){ require_once( $m ); }
