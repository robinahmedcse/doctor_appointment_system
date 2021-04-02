<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
       //factory(App\User::class, 50)->create();
      // factory(App\Models\Tbl_emp_department::class, 10)->create();
      // factory(App\Models\Tbl_emp_branch::class, 10)->create();
      //  factory(App\Models\Tbl_emp_designation::class, 10)->create();
  

      
     /*
        //$this->call(CompanyDetailsSeeder::class);
*/



      $this->call([
        EmpBranch::class,
        EmpDesignation::class,
        EmpDepartment::class,
        CompanyTitalesSeeder::class,
        AllowancesSeeder::class,
        DeductionsSeeder::class
    ]);


    }
}
