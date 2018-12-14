<?php 
class connection{
    private $username,$password,$conn ;
    public function _construct($username, $password,$conn, $host,$webcrackgame ){

        $this -> username = $username;
        $this -> password = $password;
        $this -> conn = $conn;
        $this -> db = $webcrackgame;
        $this -> host = $host;

    }
    public function getConnection(){
        $conn=mysqli_connect($this-> username,$this->password,$this->conn,$this->db,$this->host);
        if(!$conn){
            die('Không thể kết nối, '.mysqli_connect_error());
        }
        return $conn;
    }
    public function getQuery($sql){
        $conn= $this->getConnection();
        if(!$conn){
            die('Không thể kết nối, '.mysqli_connect_error());
        }
        mysqli_set_charset($conn,'utf8');
   $result = mysqli_query($conn,$sql);
   return $result;

    }
    public function showResult($result){
        if(mysqli_num_rows($result)>0){
            while($row=mysqli_fetch_assoc($result)){
                echo $row['username'];
            }
        
        }
        else{
            echo "khong ton tai ban ghi nao";
        }
    }
    
}
    
?>
<?php
$link=new connection();
$sql="SELECT * from users";
$link -> getQuery($sql);
$link->showResult($sql);
?>