<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    use HasFactory;

    protected $table = 'Character';
    protected $primaryKey = 'Name';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;

    protected $fillable = [
        'AccountID',
        'Name',
        // Add other columns you want to be fillable
    ];

    public function membInfo()
    {
        return $this->belongsTo(MembInfo::class, 'AccountID', 'memb___id');
    }
}
