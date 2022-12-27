<?php 

require 'connection_db.php';

$id = $_POST["id"];
$query = " select * from (mezzo m join controllo_meccanico c on m.targa=c.targa) where c.id_mezzo = '".$id."' and c.ora = (select max(c2.ora) from controllo_meccanico c2 where id_mezzo = '".$id."') order by data_controllo DESC LIMIT 1 ";

$result = mysqli_query($conn,$query);
$row = mysqli_fetch_assoc($result);

echo json_encode($row);

mysqli_free_result($result);
mysqli_close($conn);
           
?>