<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $user1_id
 * @property integer $user2_id
 * @property string $date
 * @property string $created_at
 * @property string $updated_at
 * @property User $user
 * @property User $user
 */
class Friend extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['user1_id', 'user2_id', 'date', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user2_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user1_id');
    }
}
