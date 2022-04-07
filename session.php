<?php

session_start();// session kullanılması için gerekeli metot
$_SESSION['oturum']="ekrem";// session oluşturulması



// oluşturulduktan sonra bütün sayfalarda 
// kullanabiliriz
// sessionun geçerliliği 
// 2 türlü sonlanır
// 1 . si tarayıcı kapatıldığı anda session sonlanır
// 2. side manuel olarak sonlandırana kadar çalışır.

//session