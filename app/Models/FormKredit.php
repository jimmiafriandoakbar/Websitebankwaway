<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class FormKredit extends Model
{
    public function formKreditPost($data)
    {
        $stmtFormKreditPost = DB::table('form_kredit')->insert($data);

        return $stmtFormKreditPost;
    }
}
