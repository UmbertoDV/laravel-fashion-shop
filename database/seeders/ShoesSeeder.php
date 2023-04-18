<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Shoes;
use Faker\Generator as Faker;

class ShoesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 20; $i++) {
            $shoe = new Shoes;
            $shoe -> name = $faker->firstNameMale();
            $shoe -> brand = $faker->state();
            $shoe -> size = $faker->numberBetween(0, 55);
            $shoe -> price = $faker->randomFloat(2, 20, 2000);
            $shoe -> type = $faker->randomElement(['elegant', 'sportive', 'casual']);
            $shoe -> img = "https://picsum.photos/300/200";
            $shoe ->save();
        } 
    }
}
