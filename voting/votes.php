<?php
if($_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest') {

include("config.php");
define('quantityDayBlock',31);  //31 день блокировка по IP
class IP
{
    private $ip;
    private $day;
    private $dataBlock;

    function __construct() {
        $this->ip = $this->setIP();
        $this->day = date("Y-m-d H:i:s");
        $this->dataBlock = date("Y-m-d",time() + (quantityDayBlock * 86400));
    }
    function setIP(){
        if(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
           $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        return $ip;
    }

    public function setIPinMySQL($id,$mysqli)
    {

        $mysqli->query("DELETE FROM vote_ip WHERE date_resp < '$this->day'");                               //удалить IP если прошло время

        $result = $mysqli->query("SELECT * FROM vote_ip WHERE id_resp = '$id' AND ip = '$this->ip'");
        if($result->num_rows == 1)                                                                          //число рядов в выборке
        {
            echo '0';   //возвращает в ajax 0
            exit();
        }
        else {          //записываем в БД id голосования и его ID
            $mysqli->query("INSERT INTO vote_ip (id_resp, ip, date_resp) VALUES ('$id','$this->ip','$this->dataBlock')");
        }

    }

}
class Votes
{
    private $votes;
    public function getVotes($id,$mysqli)
    {
        $result= $mysqli->query("SELECT votes FROM entries WHERE id = '$id'");    //выбор нужного id
        if($result->num_rows == 1)                                                            //число рядов в выборке
        {
            $row = $result->fetch_assoc();                                                    //получаем строку
            $this->votes = $row['votes'];                                                     //получаем количество голосов
            //$result->close();
        }
    }
    public function upVotes($id,$mysqli)
    {
        $this->votes++;
        $mysqli->query("UPDATE entries SET votes ='$this->votes' WHERE id = '$id'");
    }
    public function downVotes($id,$mysqli)
    {
        $this->votes--;
        $mysqli->query("UPDATE entries SET votes ='$this->votes' WHERE id = '$id'");
    }

}
    global $mysqli;                    // доступ к глобальной переменнной

    $id = $_POST['id'];
    $action = $_POST['action'];
    $vote = new Votes();
    $IP = new IP();

    $vote->getVotes($id, $mysqli);
    $IP ->setIPinNySQL($id,$mysqli);

    if ($action == 'vote_up')
    {
        $vote->upVotes($id, $mysqli);
    }
    else if($action == 'vote_down')
    {
        $vote->downVotes($id,$mysqli);
    }
    else
    {
        exit();
    }
}
?>