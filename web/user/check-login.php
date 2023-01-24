<?
include  '../db/db.php';

session_start();

$sth = $connect->prepare("SELECT user_login, user_password FROM users WHERE user_login=:login_ LIMIT 1");
$sth->bindParam('login_', $_POST['login'], PDO::PARAM_STR);
$sth->execute();
$data = $sth->fetch();

if (isset($_POST['login']) && isset($_POST['password'])) {
    $login = $_POST['login'];
    $password = $_POST['password'];

    if (($login == $data['user_login']) && (md5(md5($password)) == $data['user_password'])) {
        $_SESSION['Name'] = $login;

        header("Location: /engine/games.php");
    }

    else {
        die('No such login');
    }
}

?>