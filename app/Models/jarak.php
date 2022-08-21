<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Traits\Timestamp;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class jarak extends Model
{
    use HasFactory;
    use Timestamp;
    use SoftDeletes;

    protected $table = 'tb_jarak';
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'id_kecamatan_a', 'id_kecamatan_b', 'jarak'
    ];

    public function AllData()
    {
        return DB::table($this->table)
                    ->select(
                        'tb_jarak.*',
                        'a.kecamatan as kecamatan_a',
                        'b.kecamatan as kecamatan_b',
                        )
                    ->join('tb_kecamatan as a', 'tb_jarak.id_kecamatan_a', '=', 'a.id')
                    ->join('tb_kecamatan as b', 'tb_jarak.id_kecamatan_b', '=', 'b.id')
                    ->where('tb_jarak.deleted_At',null)
                    ->get();
    }
    
}


