<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $user_id
 * @property string $contenu
 * @property string $created_at
 * @property string $updated_at
 * @property Commentaire[] $commentaires
 * @property User $user
 */
class Publication extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['user_id', 'contenu', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function commentaires()
    {
        return $this->hasMany('App\Models\Commentaire');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
