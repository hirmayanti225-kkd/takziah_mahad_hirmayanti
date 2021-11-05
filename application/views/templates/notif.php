<?php 

$conn=new mysqli($id, $nama, $nohp, $tgllahir, $jurusan);

if($conn->connect_error){
    die("connection failed:".$conn->connect_error);
}
$sql="SELECT*FROM list_nama2";
$result =$conn->query($sql);

echo $result->num_rows;

$conn->close();

?>