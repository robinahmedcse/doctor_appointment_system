<?php

use Illuminate\Database\Seeder;

class EmpDesignation extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    
        factory(App\Models\Tbl_emp_designation::class, 10)->create();
    }
}
