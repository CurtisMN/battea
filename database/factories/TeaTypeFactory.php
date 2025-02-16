<?php
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\TeaType;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TeaType>
 */
class TeaTypeFactory extends Factory
{
    use HasFactory;

    public function definition(): array
    {
        return [
            'name' => $this->faker->unique()->randomElement([
                'Black Tea',
                'Green Tea',
                'White Tea',
                'Oolong Tea',
                'Sheng Pu-erh Tea',
                'Shou Pu-erh Tea',
                'Herbal Tea',
                'Yellow Tea',
                'Purple Tea'
            ]),
        ];
    }
}
