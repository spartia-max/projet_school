<?php
require '../app/Autoloader.php';

\app\autoloader::register();



if(isset($_GET['p'])){
    $p=$_GET['p'];

}else{
    $p='login';
}



ob_start();
if($p==='login'){
    require '../views/login_vw.php';
}elseif($p==='article'){
    require '../views/student_vw.php';
}elseif($p==='categorie'){
    require '../views/teacher_vw.php';
}elseif($p==='director'){
    require '../views/director_vw.php';
}
$content=ob_get_clean();
require '../views/template/default.php';