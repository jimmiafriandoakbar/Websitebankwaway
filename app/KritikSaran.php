<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class KritikSaran extends Model
{
    protected $table = 'kritikdansaran';
    protected $fillable = ['nama', 'email', 'pesan'];
    protected $dates = ['created_at'];

    public function getCreatedAtAtribute()
    {
        return Carbon::parse($this->attributes['created_at'])
            ->translatedFormat('l, d F Y');
    }

    public function kritikPost($kritikPost)
    {
        $stmtInsertKritik = DB::table('kritikdansaran')
                                ->insert($kritikPost);

        return $stmtInsertKritik;
    }
}
