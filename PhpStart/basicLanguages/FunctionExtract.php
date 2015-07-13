<?php

$arr = array("event" => "SHOW",
             "city" => "Plovdiv",
             "state" => "PL");

         extract($arr);
         
         echo $city."<br>";  //Plovdiv
         echo $state."<br>";  //PL
         echo $event."<br>";  //SHOW

