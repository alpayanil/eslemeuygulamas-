

<?php
echo "<table border='1' >";
echo "<tr>";
echo "<th>Item</th>";
echo "<th>Ürün Adı</th>";
echo "<th>Ekleme Tarihi</th>";
echo "<th>Gönderilen</th>";
echo "<th>Gönderen</th>";
echo "<th>Durum</th>";



echo "</tr>";

 

  $someJSON = '[{"name":"William Philbin","gender":"male"},{"name":"Allison McKinnery","gender":"female"}]';
  
  
  
  $someArray = json_decode($someJSON, true);





$kume = array("elma", "armut");
array_push($kume, "muz", "portakal","deneme1","deneme3");
for ($i=0;$i<=sizeof($someArray)-1;$i++){
  
  
   echo "<tr>";
   echo "<td>
 
   $kume[$i]
   
   </td>";
  
   
   
   echo "<td>",$someArray[$i]["name"], "</td>";
   echo "<td>",$i*$i*$i,"</td>";
   echo "</tr>";
}
echo "</table>";
?>