<?php
//		Rusty DeGarmo
//		Professor Payne
//		Server-Side Scripting
//		14 May 2022
	
	require 'RustyConnection.php';
	require 'RustyBuildTable.php';
		
	$sql = "SELECT * FROM books";
	$result = $con->query($sql);
	$con->close();

	if($result->num_rows > 0){
		while($row = $result->fetch_assoc()){
			$data[] = array($row['id'], $row['title'], $row['author'], $row['publisher'], 
			$row['datePublished'], $row['isbn'], $row['numberInSeries']);
		}
	}else{
		echo "Query failed: " . $con->error;
	}
		
	//start and build pdf
	ob_start();
	$pdf = new TablePDF();
		
	//column titles
	$header = array("ID", "Title", "Author", "Publisher",  
	"ISBN");
		
	$pdf->setFont("Arial", '', 14);
		
	$pdf->addPage();
	$pdf->buildTable($header, $data);
	$pdf->output();
	
	ob_end_flush();
?>