<?php

use Illuminate\Database\Seeder;

class AllowancesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Tbl_allowances::class, 10)->create();
    }
}
