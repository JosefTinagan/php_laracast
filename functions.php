<?php


function dd($data){
	echo '<pre>';
	die(var_dump($data));
	echo '</pre>';
};

function ageChecker($age){
  if($age >= 21){
  	echo 'You are old enough';
  } else {
  	echo 'You are not old enough';
  }
};