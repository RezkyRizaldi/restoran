<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
	protected $table = 'transaksi';
	protected $fill_table = [
		'id-user', 'id_order', 'tanggal', 'total_bayar',
	];
}
