<?php 

function koneksi(){
  return mysqli_connect('localhost','root','','pw_budianggara');
}

function query($query){
  $conn = koneksi();
  $result = mysqli_query($conn,$query);

  // Jika data yang diambil dari database hanya 1 data
  if(mysqli_num_rows($result)===1){
    return mysqli_fetch_assoc($result);
  }

  //Jika data yang diambil semua dari database
  $rows = [];
  while($row = mysqli_fetch_assoc($result)){
    $rows[] = $row;
  }

  return $rows;
}
?>