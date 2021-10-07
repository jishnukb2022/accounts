<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class SubledgerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subledger_tbl')->insert([
            [
                'subledger_code' => '5-S1',
                'ledger_code' => '5',
                'subledger_name' => 'central',
                'category' => 'Current Asset'
            ],
            [
                'subledger_code' => '6-S1',
                'ledger_code' => '6',
                'subledger_name' => 'SIB',
                'category' => 'Current Asset'
            ],
            [
                'subledger_code' => '18-S3',
                'ledger_code' => '18',
                'subledger_name' => 'Systems',
                'category' => 'Expense'
            ],
            [
                'subledger_code' => '30-S4',
                'ledger_code' => '30',
                'subledger_name' => 'Server',
                'category' => 'Income'
            ],
            [
                'subledger_code' => '18-S5',
                'ledger_code' => '18',
                'subledger_name' => 'Building',
                'category' => 'Expense'
            ]
            ]);
    }
}
