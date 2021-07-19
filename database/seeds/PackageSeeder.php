<?php

use Faker\Generator as Faker;
use App\Package;
use Illuminate\Database\Seeder;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) { 
            $package = new Package();
            
            $package->cover_image = $faker->imageUrl(640, 480, 'travel', true, null, true);
            $package->title = $faker->sentence(4);
            $package->description = $faker->text(300);
            $package->destination = $faker->city();
            $package->price = $faker->numberBetween(85, 500);
            $package->departure_from = $faker->randomElement(['Torino', 'Milano', 'Roma', 'Venezia', 'Napoli', 'Bologna']);
            $package->departure_date = $faker->date();
            $package->return_date = $faker->date();
            $package->save();
        }
    }
}
