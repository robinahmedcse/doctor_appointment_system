<?php

use Illuminate\Database\Seeder;

class DeductionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Tbl_deductions::class, 10)->create();
    }
}
