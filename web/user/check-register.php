<? include '../db/db.php';

session_start();

$sth = $connect->prepare("SELECT user_login FROM users WHERE user_login=:login_ LIMIT 1");
$sth->bindParam('login_', $_POST['login'], PDO::PARAM_STR);
$sth->execute();
$data = $sth->fetch();

$sth=$connect->prepare("INSERT INTO users (user_login, user_password) VALUES (?,?)");
$sth->execute([$_POST['login'], md5(md5($_POST['password']))]);

if (isset($_POST['login']) && isset($_POST['password'])) {

    $login = $_POST['login'];
    $_SESSION['Name'] = $login;

    header("Location: /engine/games.php");
}

?>