<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Categoria
 * 
 * @property int $idCategoria
 * @property string $categoria
 * @property string $descripcion
 * 
 * @property Collection|Producto[] $productos
 *
 * @package App\Models
 */
class Categoria extends Model
{
	protected $table = 'categorias';
	protected $primaryKey = 'idCategoria';
	public $timestamps = false;

	protected $fillable = [
		'categoria',
		'descripcion'
	];

	public function productos()
	{
		return $this->hasMany(Producto::class, 'idCategoria');
	}
}
