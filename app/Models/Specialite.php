<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $filiere_id
 * @property string $nom
 * @property string $created_at
 * @property string $updated_at
 * @property Filiere $filiere
 * @property User[] $users
 */
class Specialite extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['filiere_id', 'nom', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function filiere()
    {
        return $this->belongsTo('App\Models\Filiere');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function users()
    {
        return $this->hasMany('App\Models\User');
    }
}
