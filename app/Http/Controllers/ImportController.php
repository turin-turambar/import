<?php
	
	namespace App\Http\Controllers;

	/**
	* 
	*/

	use Ddeboer\DataImport\Reader\ExcelReader;
	use Ddeboer\DataImport\Workflow;
	use Ddeboer\DataImport\Reader\ArrayReader;
	use Ddeboer\DataImport\Writer\CsvWriter;
	use Ddeboer\DataImport\ValueConverter\CallbackValueConverter;

	class ImportController extends Controller
	{
		
		public function index()
		{
			$excelFile = new \SplFileObject('D:\Work\import\app\Http\Controllers\Katalog - Nemanja.xls');
			$reader = new ExcelReader($excelFile);

			//$workflow = new Workflow($reader);
			//$csvFile = new \SplFileObject('D:\Work\import\app\Http\Controllers\output.csv', 'w');
			//$writer = new CsvWriter($csvFile);
			//$workflow->addWriter($writer);
			print_r($reader);
		}

		/*public function import()
		{
			$excel = new SimpleExcel('xls');
			$excel->parser->loadFile('Katalog - Nemanja.xls');

			echo $excel->parser->getCell('6,2');
		}*/
	}
?>