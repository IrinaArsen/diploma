<?php

    /*require 'DB.php';

    class LinklsModel {

        private $linkl;
        private $links;

        private $_db = null;

        public function __construct() {
            $this->_db = DB::getInstence();
        }

    public function setData($linkl, $links) {
        $this->linkl = $linkl;
        $this->links = $links;

    }

    public function validForm()
    {
        if (strlen($this->linkl) < 3)
            return "Ссылка слишком короткая";
        else if (strlen($this->links) < 3)
            return "Ссылка слишком короткая";

        else
            return "Верно";
    }

        public function addLinkls() {
            $sql = 'INSERT INTO linkls(linkl, links) VALUES(:linkl, :links) ';
            $query = $this->_db->prepare($sql);
            $query->execute(['linkl' => $this->linkl, 'links' => $this->links]);



            header('Location: /home/linkls');
        }

   }










/*require 'DB.php';


class LinkModel {

    private $id;
    private $long_link;
    private $short;


    private $_db = null;

    public function __construct()
    {
        $this->_db = DB::getInstence();
    }

    /*public function getLink()    {
        $result = $this->db->query("SELECT * FROM `link`");
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }*/

   /* public function getLinkLimited($order, $limit)    {
        $result = $this->db->query("SELECT * FROM `link` ORDER BY $order DESC LIMIT $limit");
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }*/


  /*  public function setData($id, $long_link, $short)
    {

        $this->id = $id;
        $this->long_link = $long_link;
        $this->short = $short;
    }

    public function validForm()
    {

        if (strlen($this->short) < 3)
            return "Такое сокращение уже используется в базе";

        else
            return "Верно";

    }

    public function addLink()
    {
        $sql = 'INSERT INTO link(id, long_link, short) VALUES(:id, :long_link, :short)';
        $query = $this->_db->prepare($sql);


        $query->execute(['id' => $this->id, 'long_link' => $this->long_link, 'short' => $this->short]);

        $this->setReduce($this->long_link);
    }


    public function getLink()
    {
        $id = $_COOKIE['id'];
        $result = $this->_db->query("SELECT * FROM `link` WHERE `id` = '$id'");
        return $result->fetch(PDO::FETCH_ASSOC);

    }

    public function logLink()
    {
        setcookie('long_link', $$this->long_link, time() + 3600, '/');
        unset($_COOKIE['long_link']);

        header('Location:/home/link');
    }

  /*  public function link($long_link, $short)
    {
        $result = $this->_db->query("SELECT * FROM `link` WHERE `short` = '$short' && `long_link` = $long_link");
        $link = $result->fetch(PDO::FETCH_ASSOC);

        if ($link['short'] == '')
            return 'Такое сокращение уже используется в базе';
        else if (password_verify($short, $link['short'])) {
            $this->setLink($short);

        } else
            return 'Такое сокращение уже используется в базе';

    }*/
  /*  public function link2($long_link, $short){
    $query = $this->_db->query('SELECT * FROM `link`');
        while($row = $query->fetch(PDO::FETCH_ASSOC)) {
    echo "<h2>Сокращенные ссылки</h2>";
    echo $row['long_link'] . '<br>';
    echo $row['short'] . '<br>';}

}


}*/

