<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use Notifiable;

    protected $guard = 'admin';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'type',
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
    ];

    /**
     * fields ordering in filteration
     */
    public const ORDER = ['name', 'email'];

    /**
     * Upload Path
     */
    public const UPLOADPATH = 'images/admins/';

    /**
     * fields that will handle upload document
     */
    public const UPLOADFIELDS = [];


    ##--------------------------------- RELATIONSHIPS


    ##--------------------------------- ATTRIBUTES
    public function getSuperAdminAttribute()
    {
        return $this->type == 'super_admin' ? true : false;
    }

    ##--------------------------------- CUSTOM FUNCTIONS
    public function nameOnHeader()
    {
        if (strlen($this->name) > 10) {
            return \substr($this->name, 0, 10) . '..';
        }
        return $this->name;
    }


    ##--------------------------------- SCOPES
    public function scopeAdmin($query)
    {
        $query->where('type', 'admin');
    }

    ##--------------------------------- ACCESSORS & MUTATORS
    /**
     * Interact with the user's password
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function password(): Attribute
    {
        return Attribute::make(
            set: function ($value) {
                if ($value != null) {
                    return bcrypt($value);
                }
            },
        );
    }
}
