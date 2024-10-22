<?php
$stringConexao = "host=bd-venda port=5432 dbname=venda user=venda password=123456";
$conexao = pg_connect($stringConexao) or die("Falha na conexao");
echo "Conectado no PostgreSQL<hr>";
$sql="select * from venda";
$query = pg_query($conexao,$sql);
while ($tupla=pg_fetch_assoc($query) ){
    echo "Venda: ".$tupla['nome']." - Data ".$tupla['data'];
    echo "<br>";
}
?>