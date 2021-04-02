<?php

use Illuminate\Database\Seeder;

class EmpBranch extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    
      factory(App\Models\Tbl_emp_branch::class, 10)->create();
      
    }
}
