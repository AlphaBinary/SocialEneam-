<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $specialite_id
 * @property string $nom
 * @property string $prenom
 * @property string $date_nais
 * @property integer $tel
 * @property string $profession
 * @property string $email
 * @property string $email_verified_at
 * @property string $password
 * @property string $avatar
 * @property boolean $statut
 * @property string $remember_token
 * @property string $created_at
 * @property string $updated_at
 * @property Commentaire[] $commentaires
 * @property Friend[] $friends
 * @property Friend[] $friends
 * @property Groupemessage[] $groupemessages
 * @property Membre[] $membres
 * @property Publication[] $publications
 * @property Specialite $specialite
 * @property Usersmessage[] $usersmessages
 * @property Usersmessage[] $usersmessages
 */
class User extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['specialite_id', 'nom', 'prenom', 'date_nais', 'tel', 'profession', 'email', 'email_verified_at', 'password', 'avatar', 'statut', 'remember_token', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function commentaires()
    {
        return $this->hasMany('App\Models\Commentaire');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function friends1()
    {
        return $this->hasMany('App\Models\Friend', 'user1_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function friends2()
    {
        return $this->hasMany('App\Models\Friend', 'user2_id');
    }

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

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function publications()
    {
        return $this->hasMany('App\Models\Publication');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function specialite()
    {
        return $this->belongsTo('App\Models\Specialite');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function usersmessages1()
    {
        return $this->hasMany('App\Models\Usersmessage', 'user1_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function usersmessages2()
    {
        return $this->hasMany('App\Models\Usersmessage', 'user2_id');
    }
}
