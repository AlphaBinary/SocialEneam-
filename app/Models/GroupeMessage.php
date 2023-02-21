<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $user_id
 * @property integer $groupe_id
 * @property string $date
 * @property string $created_at
 * @property string $updated_at
 * @property User $user
 * @property Groupe $groupe
 */
class GroupeMessage extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['user_id', 'groupe_id', 'date', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function groupe()
    {
        return $this->belongsTo('App\Models\Groupe');
    }
}
