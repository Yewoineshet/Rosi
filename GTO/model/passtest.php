<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
if(isset($_POST['N_id'])){
    session_start();
    $N_id=$_POST['N_id'];
    $_SESSION['N_id']=$N_id;
    header('Location: ../view/tutorPage.php');
}

