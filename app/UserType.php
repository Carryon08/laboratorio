<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class UserType extends Model
{
    use Notifiable, SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    public $table = 'user_types';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];
}
