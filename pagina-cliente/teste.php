<?php
 $conexao=mysqli_connect("bd-cliente","cliente","123456","cliente") or die("Falha!");
 echo "Conectado no Mysql <hr>";
 $sql="select * from cliente";
 $query=mysqli_query($conexao,$sql) or die("Falha Query!");
 while($tupla=mysqli_fetch_assoc($query)){
    echo "ID: ".$tupla['idcliente']." - Nome:".$tupla['nome'];
    echo "<br>";
 }
?>