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
            
            $package->title = $faker->sentence(4);
            $package->cover_image = $faker->imageUrl(640, 300, 'Travel', true, $package->title);
            $package->description = $faker->text(1000);
            $package->destination = $faker->city();
            $package->price = $faker->numberBetween(85, 500);
            $package->departure_from = $faker->randomElement(['Torino', 'Milano', 'Roma', 'Venezia', 'Napoli', 'Bologna']);
            $package->departure_date = $faker->date();
            $package->return_date = $faker->date();
            $package->save();
        }
    }
}
