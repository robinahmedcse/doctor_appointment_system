<?php

use Illuminate\Database\Seeder;

class CompanyDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Company_details::class, 10)->create();
    }
}
