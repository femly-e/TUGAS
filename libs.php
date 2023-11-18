<?php

if(isset($_GET['page'])){

$page = $_GET['page'];
    switch($page){
    case'data' :
        include 'mahasiswa.php';
        break;

        case'D' :
            include 'dosen.php';
            break;

}


}else{
    include 'mahasiswa.php';
}







?>