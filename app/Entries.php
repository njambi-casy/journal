<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Entries extends Model
{
	public $table='entries';

	public $primaryKey='id';

	public function user(){
		return $this->belongsTo(User::class);
	}

	

    
}
