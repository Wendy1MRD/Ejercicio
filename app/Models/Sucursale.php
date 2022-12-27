<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Sucursale
 * 
 * @property int $idSucursal
 * @property string $sucursal
 * @property string $dirección
 * @property string $telefono
 * 
 * @property Collection|Venta[] $ventas
 *
 * @package App\Models
 */
class Sucursale extends Model
{
	protected $table = 'sucursales';
	protected $primaryKey = 'idSucursal';
	public $timestamps = false;

	protected $fillable = [
		'sucursal',
		'dirección',
		'telefono'
	];

	public function ventas()
	{
		return $this->hasMany(Venta::class, 'idSucursal');
	}
}
