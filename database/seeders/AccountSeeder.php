<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('acc_tbl')->insert(
            
        [
            [
            'date' => '2021-01-16',
            'transaction_code' => '2020-21/R1',
            'cash_code' => '2020-21/P1',
            'ledger_code' => '30',
            'subLedger_code' => '30-S4',
            'type' => 'Cr',
            'amount' => '100.00'
            ],
            [
                'date' => '2021-01-16',
                'transaction_code' => '2020-21/P1',
                'cash_code' => '2020-21/R1',
                'ledger_code' => '5',
                'subLedger_code' => '5-S1',
                'type' => 'Dr',
                'amount' => '100.00'
            ],
            [
                'date' => '2021-01-15',
                'transaction_code' => '2020-21/R2',
                'cash_code' => '2020-21/P2',
                'ledger_code' => '30',
                'subLedger_code' => '30-S4',
                'type' => 'Cr',
                'amount' => '200.00'
            ],
            [
                'date' => '2021-01-15',
                'transaction_code' => '2020-21/P2',
                'cash_code' => '2020-21/R2',
                'ledger_code' => '5',
                'subLedger_code' => '5-S1',
                'type' => 'Dr',
                'amount' => '200.00'
            ],
            [
                'date' => '2021-01-16',
                'transaction_code' => '2020-21/P3',
                'cash_code' => '2020-21/R3',
                'ledger_code' => '18',
                'subLedger_code' => '18-S3',
                'type' => 'Dr',
                'amount' => '1000.00'
            ],
            [
                'date' => '2021-01-16',
                'transaction_code' => '2020-21/R3',
                'cash_code' => '2020-21/P3',
                'ledger_code' => '5',
                'subLedger_code' => '5-S1',
                'type' => 'Cr',
                'amount' => '1000.00'
            ],
            [
                'date' => '2021-01-15',
                'transaction_code' => '2020-21/P4',
                'cash_code' => '2020-21/R4',
                'ledger_code' => '18',
                'subLedger_code' => '18-S5',
                'type' => 'Dr',
                'amount' => '500.00'
            ],
            [
                'date' => '2021-01-15',
                'transaction_code' => '2020-21/R4',
                'cash_code' => '2020-21/P4',
                'ledger_code' => '5',
                'subLedger_code' => '5-S1',
                'type' => 'Cr',
                'amount' => '500.00'
            ],
            [
                'date' => '2021-01-14',
                'transaction_code' => '2020-21/P5',
                'cash_code' => '2020-21/R5',
                'ledger_code' => '18',
                'subLedger_code' => '18-S3',
                'type' => 'Dr',
                'amount' => '900.00'
            ],
            [
                'date' => '2021-01-14',
                'transaction_code' => '2020-21/R5',
                'cash_code' => '2020-21/P5',
                'ledger_code' => '5',
                'subLedger_code' => '5-S1',
                'type' => 'Cr',
                'amount' => '900.00'
            ]

        ]);
    }
}
