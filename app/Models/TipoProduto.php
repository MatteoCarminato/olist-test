<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TipoProduto extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $fillable = ['name'];

    protected $table = 'tipo_produtos';

    public function produtos()
    {
        return $this->hasMany(Produto::class);
    }
}
