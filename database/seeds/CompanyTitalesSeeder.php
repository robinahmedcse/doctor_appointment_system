<?php

use Illuminate\Database\Seeder;

class CompanyTitalesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Company_title::class, 10)->create();
    }
}
