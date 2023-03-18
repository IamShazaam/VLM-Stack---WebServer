<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MembInfo extends Model
{
    use HasFactory;

    protected $table = 'MEMB_INFO';
    protected $primaryKey = 'memb___id';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;

    protected $fillable = [
        'memb___id',
        'memb__pwd',
        'memb_guid',
        'sno__numb',
        'mail_addr',
        'bloc_code',
        'ctl1_code'
    ];

    public function characters()
    {
        return $this->hasMany(Character::class, 'AccountID', 'memb___id');
    }
}
