<?php
class Conexion{
    private $host;
    private $user;
    private $pass;
    private $bd;
    private $con;
    
    public function __construct(){
        /*$this->host = "127.0.0.1";
        $this->user = "root";
        $this->pass = "";
        $this->bd = "cpro";*/
        $this->host = "mysql.hostinger.mx";
        $this->user = "u396335828_admin";
        $this->pass = "carmona11";
        $this->bd = "u396335828_cpro";
        $this->conectar();
    }
    
    public function getHost() {
        return $this->host;
    }

    public function getUser() {
        return $this->user;
    }

    public function getPass() {
        return $this->pass;
    }

    public function getBd() {
        return $this->bd;
    }

    public function getCon() {
        return $this->con;
    }

    public function setHost($host) {
        $this->host = $host;
    }

    public function setUser($user) {
        $this->user = $user;
    }

    public function setPass($pass) {
        $this->pass = $pass;
    }

    public function setBd($bd) {
        $this->bd = $bd;
    }

    public function setCon($con) {
        $this->con = $con;
    }
    
    public function conectar(){
        $this->con = new mysqli($this->host,$this->user,$this->pass,$this->bd);
        mysqli_set_charset( $this->con, 'utf8');
    }
    
    public function comprobar(){
        $val = false;
        if($this->con->connect_errno){
            $val = true;
        }
        return $val;
    }

    public function query($query){
            $res = mysqli_query($this->con,$query);
            if($res){
                return $res;
            }
        }

    public function desconectar(){
        $con->close();
    }
}
?>
