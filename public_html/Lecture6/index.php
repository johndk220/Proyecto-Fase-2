<?php
$maxSessionTime = 60 * 30; // 30 minutes
session_start();
date_default_timezone_set('EST');
$action = (isset($_GET['a'])) ? $_GET['a'] : '';

$page = (isset($_GET['p'])) ? $_GET['p'] : 1;
include 'db.php';
include './clases/user.php';
if (isset($_SESSION['userID'])) {
    $loggedUser = User::loadFromID($_SESSION['userID']);
    
    if (is_null($loggedUser)) {
        session_destroy();
        session_start();
    } else {
        if ((time() - $_SESSION['loginTime']) >= $maxSessionTime) {
            session_destroy();
            session_start();
            $loggedUser = null;
        } else if ($_SESSION['loginIP'] != $_SERVER['REMOTE_ADDR']) {
            session_destroy();
            session_start();
            $loggedUser = null;
            //showError('Unauthorized access! Session destroyed!');
        }
    }
}
include './Parts/header.php';

if ($action == 'login') {
    include './Parts/login.php';
    }
    else if ($action == 'Tennis') {
     include './Parts/tennis/Page' . $page . '.php';}
    
    
  
    else if ($action == 'baloncesto') {
    include './Parts/Baloncesto/Page' . $page . '.php';}
    
     else if ($action == 'baseball') {
       include './Parts/Baseball/Page' . $page . '.php';
     }
   
     else if ($action == 'volley') {
    include './Parts/Volleyball/Page1.php';}
     else if ($action == 'Page2') {
    include './Parts/Volleyball/Page2.php';}
        else if ($action == 'Page3') {
    include './Parts/Volleyball/Page3.php';}
    
        else if ($action == 'Page4') {
    include './Parts/Volleyball/Page4.php';}
        else if ($action == 'Page5') {
    include './Parts/Volleyball/Page5.php';}
    
        else if ($action == 'Page6') {
    include './Parts/Volleyball/Page6.php';}
    
    
    else if ($action == 'profile') {
    include './Parts/Profile.php';}
    
    
 else if ($action == 'logout') {
    session_destroy();
    header('Location: index.php');
} else if ($action == 'doLogin') {
    $u = User::loadFromUsername($_POST['username']);
    
    if (is_null($u)) {
        showError('The user doesn\'t exist.');
        include './Parts/login.php';
    } else if ($u->validatePassword($_POST['password'])) {
        $_SESSION['userID'] = $u->id;
        $_SESSION['loginTime'] = time();
        $_SESSION['loginIP'] = $_SERVER['REMOTE_ADDR'];
        header('Location: index.php');
    } else {
        showError('The entered password is incorrect!');
        include './Parts/login.php';
    }
} else if ($action == 'register') {
    include './Parts/register.php';
} else if ($action == 'doRegister') {
    $u = User::loadFromUsername($_POST['username']);
    if ($u) {
        showError('The username already exist.');
        include './Parts/register.php';
    } else {
        $u = new User();
        
        $u->username = $_POST['username'];
        $u->password = $_POST['password1'];
        $u->first_name = $_POST['first_name'];
          $u->last_name = $_POST['last_name'];
        $u->email = $_POST['email'];
        
        $u->save();
        
        showSuccess('Welcome to Lecture 6 example!');
    }
} else {
    include './Parts/body.php';
}
include './Parts/footers.php';
echo '<pre>' . print_r($_SESSION, true)  . '</pre>';
if (isset($_SESSION['loginTime'])) {
    echo '<pre>' . date('d-M-Y H:m:s', $_SESSION['loginTime']) . '</pre>';
}
function showError($msg) {
    echo '<div class="alert alert-danger" role="alert">' . $msg . '</div>';
}
function showSuccess($msg) {
    echo '<div class="alert alert-success" role="alert">' . $msg . '</div>';
}
?>