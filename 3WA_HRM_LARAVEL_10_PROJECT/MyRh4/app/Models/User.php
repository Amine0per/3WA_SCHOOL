<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'user_type',
        'is_deleted',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    static public function getEmailSingle($email)
    {

        return User::where('email' , '=', $email)->first();
     
    }
    static public function getTokenSingle($remember_token)
    {

        return User::where('remember_token' , '=', $remember_token)->first();
     
    }

    static public function getSingle($id)
    {

        return User::find($id);
     
    }

    static public function getUsers()
    {

        return User::select('users.*')->where('is_deleted','=' ,0)->with('employe')->orderBy('id','asc')->get();
     
    }


    public function employe()
    {
        return $this->hasOne(Employe::class);
    }
}


