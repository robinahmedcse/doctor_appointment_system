<?php

use Illuminate\Database\Seeder;

class EmpDepartment extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      
       factory(App\Models\Tbl_emp_department::class, 10)->create();
  
    }
}
