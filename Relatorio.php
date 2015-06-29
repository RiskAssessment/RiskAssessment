<?php
include 'conexao.php';



$query = mysql_query("select empresa as Empresa, count(risco) as Pessoas from cliente where risco >30 group by empresa");

 $table = array();
$table['cols'] = array(
	/* define your DataTable columns here
	 * each column gets its own array
	 * syntax of the arrays is:
	 * label => column label
	 * type => data type of column (string, number, date, datetime, boolean)
	 */
	// I assumed your first column is a "string" type
	// and your second column is a "number" type
	// but you can change them if they are not
    array('label' => 'Empresa', 'type' => 'string'),
	array('label' => 'Pessoas', 'type' => 'number')
);

$rows = array();
while($r = mysql_fetch_assoc($query)) {
    $temp = array();
	// each column needs to have data inserted via the $temp array
	$temp[] = array('v' => $r['Empresa']);
	$temp[] = array('v' => (int) $r['Pessoas']); // typecast all numbers to the appropriate type (int or float) as needed - otherwise they are input as strings
	
	// insert the temp array into $rows
    $rows[] = array('c' => $temp);
}

// populate the table with rows of data
$table['rows'] = $rows;

// encode the table as JSON
$jsonTable = json_encode($table);
echo $jsonTable;