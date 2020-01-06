<?php
 include('conn.php');
 header('Content-Type: application/json');

 class Register {

    private $db;
    private $connection;
        function __construct(){
            $this->db = new Connection();
             $this->connection=$this->db->get_connection();
        }
 public function does_user_exist($username,$password){
    $query = "SELECT * FROM user WHERE username='$username'";
    $result=mysqli_query($this->connection,$query);
        if(mysqli_num_rows($result)>0){
            $json['status']=400;
            $json['message']=' Sorry '.$username.' is already exist.';
            echo json_encode($json);
            mysqli_close($this->connection);
        }else {
            $query="insert into user(username,password) values('$username','$password')";
            $is_inserted=mysqli_query($this->connection,$query);
            if($is_inserted == 1){
            $json['status']=200;
            $json['message']='Account created, Welcome '.$username;
            echo json_encode($json);
        
        }else {
            $json['status']=401;
            $json['message']='Something wrong';
            echo json_encode($json);
            mysqli_close($this->connection);
            }
        }
    } 
 }

 $register=new Register();
 
    if(isset($_POST['username'],$_POST['password'])){
        //echo 'helloworldwar';
        $username=$_POST['username'];
        $password=$_POST['password'];
    if (!empty($username) && !empty($password)) {
        //echo 'helloworld';
        $encrypted_password=md5($password);
        $register-> does_user_exist($username,$password,$encrypted_password);
    }else {
        $json['status']=100;
        $json['message']='You must fill all the fields';
        echo json_encode($json);
    }
 }

;


//echo json_encode($_POST['username']);
?>