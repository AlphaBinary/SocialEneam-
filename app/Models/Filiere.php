<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $ecole_id
 * @property string $nom
 * @property string $created_at
 * @property string $updated_at
 * @property Ecole $ecole
 * @property Specialite[] $specialites
 */
class Filiere extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['ecole_id', 'nom', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function ecole()
    {
        return $this->belongsTo('App\Models\Ecole');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function specialites()
    {
        return $this->hasMany('App\Models\Specialite');
    }
}
