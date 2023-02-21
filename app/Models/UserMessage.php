<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $user1_id
 * @property integer $user2_id
 * @property string $date
 * @property string $message
 * @property string $created_at
 * @property string $updated_at
 * @property User $user
 * @property User $user
 */
class UserMessage extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['user1_id', 'user2_id', 'date', 'message', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user1()
    {
        return $this->belongsTo('App\Models\User', 'user1_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user2()
    {
        return $this->belongsTo('App\Models\User', 'user2_id');
    }
}
