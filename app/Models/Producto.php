<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Producto
 * 
 * @property int $idProducto
 * @property string $nombre
 * @property string $precio
 * @property string $stock
 * @property int $idCategoria
 * @property int $idProveedor
 * 
 * @property Categoria $categoria
 * @property Proveedore $proveedore
 * @property Collection|Venta[] $ventas
 *
 * @package App\Models
 */
class Producto extends Model
{
	protected $table = 'productos';
	protected $primaryKey = 'idProducto';
	public $timestamps = false;

	protected $casts = [
		'idCategoria' => 'int',
		'idProveedor' => 'int'
	];

	protected $fillable = [
		'nombre',
		'precio',
		'stock',
		'idCategoria',
		'idProveedor'
	];

	public function categoria()
	{
		return $this->belongsTo(Categoria::class, 'idCategoria');
	}

	public function proveedore()
	{
		return $this->belongsTo(Proveedore::class, 'idProveedor');
	}

	public function ventas()
	{
		return $this->hasMany(Venta::class, 'idProducto');
	}
}
