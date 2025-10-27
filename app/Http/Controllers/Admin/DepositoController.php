<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Deposito;
use Illuminate\Http\Request;

class DepositoController extends Controller
{
    public function __construct()
    {
        $this->modelDeposito = new Deposito();
    }

    public function deposito()
    {
        $stmtDataDeposito = $this->modelDeposito->dataDeposito();
        // return $stmtDataDeposito;

        return view('admin.content.deposito.dataDeposito', compact('stmtDataDeposito'));
    }
}
