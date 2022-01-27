<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\InvestmentCategory;

class InvestmentCategoriesSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(InvestmentCategory::count() > 0){
            return $this->command->info('Investment Category already seeded');
        }

        $investment = [
            'property',
            'Food and Beverage',
            'Perternakan',
            'Perkebunan',
            'Teknologi',
            'Start Up',
            'Project Financing',
            'Service/jasa',
            'Manufaktur',
            'Retail/Logistik',
        ];

        foreach($investment as $investment){
            InvestmentCategory::create(['name' => $investment]);
        }
    }
}
