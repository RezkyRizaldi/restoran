<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
	protected $table = 'order';
	protected $fillable = [
	    'no_meja', 'tanggal', 'id_user', 'keterangan', 'status_order',
	]; 
}
