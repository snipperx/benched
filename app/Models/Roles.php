<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Contracts\Role;

class Roles extends Model
{
    use HasFactory ,Notifiable, Uuids;

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'id'
    ];

    protected $fillable = [
        'description','status',
    ];

    public function getRouteKeyName()
    {
        return 'uuid';
    }
}
