<?php 
//include '../view/header.html';
//include '../view/footer.html';
//include '../admin/connect.php';
//include '../admin/config.php';

//include header
echo join('', file('header.html'));

//connect database
include "../admin/connect.php";

//include footer
echo join('', file('footer.html'));
