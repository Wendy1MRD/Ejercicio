<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Venta
 * 
 * @property int $idVenta
 * @property string $cliente
 * @property string $cantidad
 * @property string $descuento
 * @property string $total
 * @property int $idSucursal
 * @property int $idVendedor
 * @property int $idProducto
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Producto $producto
 * @property Sucursale $sucursale
 * @property Vendedore $vendedore
 *
 * @package App\Models
 */
class Venta extends Model
{
	protected $table = 'ventas';
	protected $primaryKey = 'idVenta';

	protected $casts = [
		'idSucursal' => 'int',
		'idVendedor' => 'int',
		'idProducto' => 'int'
	];

	protected $fillable = [
		'cliente',
		'cantidad',
		'descuento',
		'total',
		'idSucursal',
		'idVendedor',
		'idProducto'
	];

	public function producto()
	{
		return $this->belongsTo(Producto::class, 'idProducto');
	}

	public function sucursale()
	{
		return $this->belongsTo(Sucursale::class, 'idSucursal');
	}

	public function vendedore()
	{
		return $this->belongsTo(Vendedore::class, 'idVendedor');
	}
}
