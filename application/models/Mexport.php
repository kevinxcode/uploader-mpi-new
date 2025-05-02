<?php

require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Cell\Coordinate;

class Mexport extends CI_Model{

	function __construct(){
		date_default_timezone_set('Asia/Jakarta');
        parent::__construct();
    }

    function tes(){
        $spreadsheet = new Spreadsheet();
        $activeWorksheet = $spreadsheet->getActiveSheet();
        $activeWorksheet->setCellValue('A1', 'Hello World !');

        $writer = new Xlsx($spreadsheet);
        $writer->save('hello world.xlsx');
    }

    function spreadsheet($myObj,$file){
        // Create a new spreadsheet object
        $spreadsheet = new Spreadsheet();
        // Create a worksheet object
        $worksheet = $spreadsheet->getActiveSheet();
        $array_database = json_decode(json_encode($myObj), true);
        $column_names2 = array_keys($array_database[0]); // header
        $column_names = array_keys($array_database[0]); // contant
        // print_r($column_names); exit;
        foreach ($column_names2 as $i => $column_name2) {
            $worksheet->setCellValue('A1', 'NO');
            if ($i > 24) {
                $final = $column_names2[$i] = 'A'.chr(65+$i+1-26) . 1;
                $last_cells = $column_names2[$i] = 'A'.chr(65+$i+1-26);
            }else if($i > 48 ) {
                $final = $column_names2[$i] = 'B'.chr(65+$i+1-52) . 1;
                $last_cells = $column_names2[$i] = 'B'.chr(65+$i+1-52);
            }else{
                $final =  $column_names2[$i] = chr(65+$i+1) . 1;
                $last_cells =  $column_names2[$i] = chr(65+$i+1);
            }
            $worksheet->setCellValue($final, strtoupper(str_replace("_", " ", $column_name2)));
            $worksheet->getColumnDimension($last_cells)->setAutoSize(true); // for auto width column 
        }
      
        $no = 1;
        $i = 2;
        foreach ($array_database as $row) {
             $worksheet->setCellValue('A'. $i, $no++);
            foreach ($column_names as $key => $column_name) {
                if($key > 24) {
                    $final_2 = 'A'.chr(65+$key+1-26) . ($i);
                }else if($key > 48) {
                    $final_2 = 'B'.chr(65+$key+1-52) . ($i);
                }else{
                    $final_2  = chr(65+$key+1) . ($i);
                }
                $worksheet->setCellValue($final_2, $row[$column_name]);
            }
            $i++;
        }

        $styleArray = [
			'borders' => [
				'allBorders' => [
					'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
				],
			],
            'font' => [
                'size' => 8.5, // 'bold' => true,
            ],
            'alignment' => [
                'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_LEFT,
            ],
		];
        $i = $i - 1;
        $worksheet->getStyle('A1:'.$last_cells.''.$i)->applyFromArray($styleArray);
        // Save the spreadsheet to a file
        // $writer = new Xlsx($spreadsheet);
        // $fileName = $file.".xlsx";
        // header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        // header('Content-Disposition: attachment; filename="'. urlencode($fileName).'"');
        // $writer->save('php://output');
        $writer = new Xlsx($spreadsheet);
        $writer->save($file.'.xlsx');
    }

    




    
	

}