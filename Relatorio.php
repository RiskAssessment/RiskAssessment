<?php
include 'conexao.php';



$query = mysql_query("select empresa as empresa, count(risco) as pessoas from cliente where risco >30 group by empresa");


$clientes = array();
        while ($row = mysql_fetch_assoc($query)) {
            $clientes[] = $row;
        }

$funcionario=json_encode((array)$clientes);
 



echo $funcionario;

