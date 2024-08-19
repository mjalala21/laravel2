<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable,SoftDeletes;
    protected $primaryKey = 'userId';

    //public $incrementing = false;//from internet
    //protected $primaryKey= ['userId'];

    // public function getDateofBirthAttribute($value)
    // {
    //     return date('d-M-Y', strtotime($value));
    // }
    public function getDobFormatedAttribute()
 
    {
        return date('d-M-Y', strtotime($this->dob));
    }
    public function getStatusTextAttribute() 
    {
        if ($this->status == 1) {
            return 'Active';
        } else {
            return 'InActive';
        }
    }
    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }
    protected $appends = ['dob_formated', 'status_text'];

    protected $fillable = ['name', 'phone', 'address', 'dob', 'status'];

protected $hidden = ['userId'];

public function userDetails()

{
    return $this->hasOne(UserDetail::class, 'user_id','userId');
}
 
}