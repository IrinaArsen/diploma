<?php


require 'DB.php';

class HomeModel {

    private $email;
    private $login;
    private $pass;


    private $_db = null;

    public function __construct()
    {
        $this->_db = DB::getInstence();
    }

public function setData($email, $login, $pass)
    {

        $this->email = $email;
        $this->login = $login;
        $this->pass = $pass;
    }



    public function validForm() {

        if (strlen($this->email) < 3)
            return "Email слишком короткий";
        else if (strlen($this->login) < 3)
            return "Логин слишком короткий";


       /* else if (PDO::count('home', "login = ?", array(['login'])) > 0)
            return "Пользователь с таким логином уже существует";
        else if (PDO::count('home', "email = ?", array(['email'])) > 0)
            return "Пользователь с таким Email уже существует";*/

       /* else if ($this->login != 'id')
             return "Пользователь с таким логином уже существует";*/

     else if (strlen($this->pass) < 3)
            return "Пароль не менее 3 символов";
        else
            return "Верно";
    }
    public function validForm2() {
        $login = $_COOKIE['login'];
       $result = $this->_db->query("SELECT * FROM `home` WHERE `login` = '$login'");
       $user = $result->fetch_assoc();
       if(count($user) > 0)
           return 'Пользователь с таким логином уже существует';

     }



    public function addHome() {

        $sql = 'INSERT INTO home(email, login, pass) VALUES(:email, :login, :pass)';
        $query = $this->_db->prepare($sql);

        $pass = password_hash($this->pass, PASSWORD_DEFAULT);

        $query->execute(['email' => $this->email, 'login' => $this->login, 'pass' => $pass]);

        $this->setAuth($this->login);
    }


    public function getHome() {
        $login = $_COOKIE['login'];
        $result = $this->_db->query("SELECT * FROM `home` WHERE `login` = '$login'");
        return $result->fetch(PDO::FETCH_ASSOC);

    }

    public function logOut() {
        setcookie('login', $this->login, time() - 3600, '/');
        unset($_COOKIE['login']);

        header('Location: /home/auth');
    }

    public function auth($login, $pass) {
        $result = $this->_db->query("SELECT * FROM `home` WHERE `login` = '$login'");
        $home = $result->fetch(PDO::FETCH_ASSOC);

        if($home['login'] == '')
            return 'Пользователя с таким логином не существует';
        else if(password_verify($pass, $home['pass'])) {
            $this->setAuth($login);

        }

        else
            return 'Пароль введен не верно';
    }

    public function setAuth($login) {
        setcookie('login', $login, time() + 3600, '/');

        header('Location: /home/dashboard');
    }



    public function setLinkls($linkl, $links) {
        $this->linkl = $linkl;
        $this->links = $links;

    }

    /*public function validForm3()
    {
        if (strlen($this->linkl) < 3)
            return "Ссылка слишком короткая";
        else if (strlen($this->links) < 3)
            return "Ссылка слишком короткая";

        else
            return "Верно";
    }*/



    public function addLinkls() {
        $sql = 'INSERT INTO linkls(linkl, links) VALUES(:linkl, :links)';
        $query = $this->_db->prepare($sql);
        $query->execute(['linkl' => $this->linkl, 'links' => $this->links]);


    }

    public function getLinkls($linkl, $links){
        $query = $this->_db->query('SELECT * FROM `Linkls` ORDER BY `id` DESC');
        while($row = $query->fetch(PDO::FETCH_ASSOC)) {

            echo "<h2>Сокращенные ссылки</h2>";
            echo '<div>';
            echo $row['linkl'] . '<br>';
            echo $row['links'] . '<br>' . '<button>Удалить</button>';
            echo '</div>';
        }
        header('Location: /home/index');
    }

}

