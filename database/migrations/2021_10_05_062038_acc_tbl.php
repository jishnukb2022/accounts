<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AccTbl extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acc_tbl', function (Blueprint $table) {
            $table->id('accounts_id');
            $table->timestamp('date');
            $table->char('transaction_code');
            $table->char('cash_code');
            $table->char('ledger_code');
            $table->char('subLedger_code');
            $table->string('type');
            $table->float('amount');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
