<?php

namespace Database\Seeders;

use App\Models\TeaType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeaTypeSeeder extends Seeder
{
    public function run(): void
    {
        $teaTypes = [
            'Black Tea',
            'Green Tea',
            'White Tea',
            'Oolong Tea',
            'Shou Pu-erh Tea',
            'Sheng Pu-erh Tea',
            'Purple Tea',
            'Matcha',
            'Herbal Tea',
            'Rooibos Tea',
            'Mate Tea'
        ];

        foreach ($teaTypes as $type) {
            TeaType::firstOrCreate(['name' => $type]);
        }
    }
}
