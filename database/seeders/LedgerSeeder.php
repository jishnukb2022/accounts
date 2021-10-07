<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LedgerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ledger_tbl')->insert([
            [
                'ledger_code' => '5',
                'ledger_name' => 'cash'
            ],
            [
                'ledger_code' => '18',
                'ledger_name' => 'Maintenance'
            ],
            [
                'ledger_code' => '30',
                'ledger_name' => 'Annual subscription'
            ]
            ]);
    
}
}