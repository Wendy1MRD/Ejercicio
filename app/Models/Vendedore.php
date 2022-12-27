<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Vendedore
 * 
 * @property int $idVendedor
 * @property string $nombre
 * @property string $apellidoP
 * @property string $apellidoM
 * @property string $ciudad
 * @property string $dirección
 * @property string $telefono
 * 
 * @property Collection|Venta[] $ventas
 *
 * @package App\Models
 */
class Vendedore extends Model
{
	protected $table = 'vendedores';
	protected $primaryKey = 'idVendedor';
	public $timestamps = false;

	protected $fillable = [
		'nombre',
		'apellidoP',
		'apellidoM',
		'ciudad',
		'dirección',
		'telefono'
	];

	public function ventas()
	{
		return $this->hasMany(Venta::class, 'idVendedor');
	}
}
