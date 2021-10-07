<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Models\Accounts;
use App\Models\Ledger;
use App\Models\Subledger;
use App\Models\User;
use DB;

class LedgerController extends Controller
{

    public function accounts(Request $req)
    {
  
        $account = DB::table('acc_tbl')
                ->Join('ledger_tbl','acc_tbl.ledger_code','=','ledger_tbl.ledger_code')
                ->select(DB::raw('SUM(acc_tbl.amount) AS amount'),'acc_tbl.ledger_code','ledger_tbl.ledger_name','acc_tbl.type')
                ->orderBy('acc_tbl.ledger_code','desc')
                ->groupBy('acc_tbl.ledger_code','ledger_tbl.ledger_name','acc_tbl.type')
                ->get();


        
        // $acc = "select SUM(ac.amount) as amount,ac.ledger_code,l.ledger_name,ac.type from acc_tbl ac
        //     join ledger_tbl as l on l.ledger_code = ac.ledger_code Group By ac.ledger_code,l.ledger_name,ac.type order by ac.ledger_code desc";
        // $account = \DB::select($acc);
        //dd($account);

        return view('accounts', compact('account'));
    }

    public function subledger(Request $req)
    {
        $subledger = DB::table('acc_tbl')
                ->Join('ledger_tbl','acc_tbl.ledger_code','=','ledger_tbl.ledger_code')
                ->Join('subledger_tbl as subledger','acc_tbl.subLedger_code','=','subledger.subledger_code')
                ->orWhere('category','Expense')
                ->select('acc_tbl.amount','ledger_tbl.ledger_name','subledger.subledger_name as subledger',DB::raw('date(acc_tbl.date) as date'))
                ->orderBy('acc_tbl.amount','desc')
                ->get();

        // $sub = "select ac.amount,l.ledger_name,s.subledger_name as subledger,date(ac.date) as date from acc_tbl ac
        //         join ledger_tbl as l on l.ledger_code = ac.ledger_code
        //         join subledger_tbl as s on s.subledger_code = ac.subLedger_code
        //         where category = 'Expense' group by s.subledger_code,l.ledger_name,s.subledger_name,ac.date,ac.amount order by ac.amount desc";
        // $subledger = \DB::select($sub);

        return view('subledger', compact('subledger'));
    }
}
