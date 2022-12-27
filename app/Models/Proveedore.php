<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Proveedore
 * 
 * @property int $idProveedor
 * @property string $proveedor
 * @property string $direccion
 * @property string $telefono
 * 
 * @property Collection|Producto[] $productos
 *
 * @package App\Models
 */
class Proveedore extends Model
{
	protected $table = 'proveedores';
	protected $primaryKey = 'idProveedor';
	public $timestamps = false;

	protected $fillable = [
		'proveedor',
		'direccion',
		'telefono'
	];

	public function productos()
	{
		return $this->hasMany(Producto::class, 'idProveedor');
	}
}
