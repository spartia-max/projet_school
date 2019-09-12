<?php
require '../app/Autoloader.php';
    

if(!empty($_POST['identification']))
{
    //protection du champ d'identification
    $ident=htmlspecialchars($_POST['identification']);
    //création du cookie
    setcookie('utilisateur',$ident,time()+3600);
}

\App\autoloader::register();

ob_start();
//si on récupère des cookies ou s'il y a une session
if(!empty($_COOKIE['utilisateur'])||(!empty($_SESSION['utilisateur'])))
{
    //on redirige
    if(($_COOKIE['utilisateur']==='student')||($_SESSION['utilisateur']==='student')){
        require '../views/student_vw.php';
    }
    if(($_COOKIE['utilisateur']==='teacher')||($_SESSION['utilisateur']==='teacher')){
        require '../views/teacher_vw.php';
    }
    if(($_COOKIE['utilisateur']==='director')||($_SESSION['utilisateur']==='director')){
        require '../views/director_vw.php';
    }
}else   //sinon on redirige vers login
{
    require '../views/login_vw.php';
}

$content=ob_get_clean();
require '../views/template/default.php';