<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $nom
 * @property string $adresse
 * @property string $created_at
 * @property string $updated_at
 * @property Filiere[] $filieres
 */
class Ecole extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['nom', 'adresse', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function filieres()
    {
        return $this->hasMany('App\Models\Filiere');
    }
}
