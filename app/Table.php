<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

/**
* 
*/
class Table extends Model
{
	protected $table = 'temp_import';
	/*public function tempImport()
	{
		// $results = DB::select('select * from temp_import');
		return $this->belongs_to('temp_import');
	}*/
}
?>