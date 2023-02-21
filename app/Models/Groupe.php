<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $nom
 * @property string $created_at
 * @property string $updated_at
 * @property Groupemessage[] $groupemessages
 * @property Membre[] $membres
 */
class Groupe extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['nom', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function groupemessages()
    {
        return $this->hasMany('App\Models\Groupemessage');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function membres()
    {
        return $this->hasMany('App\Models\Membre');
    }
}
