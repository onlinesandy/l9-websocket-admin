<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Traits\LockableTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Multicaret\Acquaintances\Traits\Friendable;
use Wildside\Userstamps\Userstamps;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Shetabit\Visitor\Traits\Visitor;



class User extends Authenticatable
{
    use LockableTrait, HasApiTokens, HasFactory, Notifiable, HasRoles, Friendable, Userstamps, SoftDeletes,Visitor;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['name', 'email', 'password', 'lockout_time'];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = ['password', 'remember_token'];
    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['created_at','updated_at','deleted_at'];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function receivesBroadcastNotificationsOn()
    {
        return ['App.User.' . $this->id, 'chat-' . $this->id];
    }

    protected function name(): Attribute {
        return new Attribute(
            get: fn ($value) =>  ucfirst($value),
            set: fn ($value) =>  ucfirst($value),
        );
    }

    protected function email(): Attribute {
        return new Attribute(
            get: fn ($value) => Str::mask($value, '*', 2, -3)
        );
    }

    protected function createdAt(): Attribute {
        return new Attribute(
            get: fn ($value) =>  Carbon::parse($value)->format('Y-m-d H:i'),
        );
    }




}
