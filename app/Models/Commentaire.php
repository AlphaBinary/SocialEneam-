<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $user_id
 * @property integer $publication_id
 * @property string $contenu
 * @property string $created_at
 * @property string $updated_at
 * @property User $user
 * @property Publication $publication
 */
class Commentaire extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['user_id', 'publication_id', 'contenu', 'created_at', 'updated_at'];

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
    public function publication()
    {
        return $this->belongsTo('App\Models\Publication');
    }
}
