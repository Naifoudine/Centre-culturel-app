<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attribution extends Model
{
    use HasFactory;

    protected $table = 'attributions';

    protected $fillable = ['user_id', 'pc_id', 'date', 'heureDebut', 'heureFin'];

    public function computer()
    {
        return $this->hasOne(Computer::class, 'id_pc');
    }
}
