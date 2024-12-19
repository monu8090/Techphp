 <?php
 $res = fopen("demo.txt",'w');
 $data = "fwrite Function Used to craete a file and write some text inside file...";
 echo fwrite($res,$data)."<br>";
 echo fwrite($res,$data);
fclose($res);
 ?>