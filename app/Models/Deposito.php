<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Deposito extends Model
{
    public function depositoPost($stmtDepositoPost)
    {
        $stmtDataDeposito = DB::table('buka_deposito')->insert($stmtDepositoPost);
        return $stmtDataDeposito;
    }

    public function dataDeposito()
    {
        $stmtDataNasabahDeposito = DB::table('buka_deposito')->orderBy('created_at', 'asc')->get();
        return $stmtDataNasabahDeposito;
    }
}
