<! DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.01//EN'
	'http://www.w3.org/TR/1999/REC-html401-19991224/strict.dtd'>
	
<!--
Rusty DeGarmo
Professor Payne
Server-Side Scripting
14 May 2022
-->

		<?php
		
		require("fpdf/fpdf.php");
		
		class TablePDF extends FPDF {
			function buildTable($header, $data){
				$this->setFillColor(255, 0, 0);
				$this->setTextColor(255);
				$this->setDrawColor(128, 0, 0);
				$this->setLineWidth(0.3);
				$this->setFont('', 'B');
				
				//header
				//array of column widths
				$widths = array(10, 50, 50, 40, 45);
				
				//send headers to document
				for($i = 0; $i < count($header); $i++){
				$this->cell($widths[$i], 7, $header[$i], 1, 0, 'C', 1);
				}
				
				$this->ln();
				
				//color and font restoration
				$this->setFillColor(175);
				$this->setTextColor(0);
				$this->setFont('');
				
				//spool out the data from $data
				$fill = 0; //row backgrounds
				
				foreach($data as $row){
					$this->cell($widths[0], 6, $row[0], 'LR', 0, 'L', $fill);
					
					$this->cell($widths[1], 6, $row[1], 'LR', 0, 'L', $fill);
					
					$this->cell($widths[2], 6, $row[2], 'LR', 0, 'L', $fill);
					
					$this->cell($widths[3], 6, $row[3], 'LR', 0, 'L', $fill);
					
					$this->cell($widths[4], 6, $row[5], 'LR', 0, 'L', $fill);
					
					$fill = ($fill) ? 0 : 1;
					
					$this->ln();
				}
				
				$this->cell(array_sum($widths), 0, '', 'T');
			}
		}
		?>

	
	</body>
	
</html>
		
		