<?php
include('conn.php');
header('Content-Type: application/json');

class User
{
private $db;
private $connection;
function __construct()
{
$this->db = new Connection();
$this->connection=$this->db->get_connection();
}
public function does_user_exist($username,$password){
$query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
$result=mysqli_query($this->connection,$query);
if(mysqli_num_rows($result)>0){
$row= mysqli_fetch_array($result);
$data = array(); 
array_push($data,array( "id"=>$row['id'],
"username"=>$row['username'],
"password"=>$row['password'] ) );

$json['status']=200;
$json['message']='Login Successful';
$json['detail']=$data;

echo json_encode($json);

mysqli_close($this->connection);
}else { 
$json['status']=400;
$json['message']='Wrong email or password';
echo json_encode($json);
mysqli_close($this->connection);
}
}
}

$user = new User();
if(isset($_POST['username'],$_POST['password']))
{
$username=$_POST['username'];
$password=$_POST['password'];
if (!empty($username) && !empty($password)) {
$user-> does_user_exist($username,$password);
}else {
$json['status']=100;
$json['message']='You must fill both fields';
echo json_encode($json);
}
}

header("location: home.php");

?>