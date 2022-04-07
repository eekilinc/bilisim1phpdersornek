<?php
session_start();
//1. yontem genel yöntem unset
unset($_SESSION['oturum']);
// 2 .yontem
//session_abort();// butun sessionlar yok edili

// 3 yöntem
//session_destroy()

// 4 .yontem
session_unset();


