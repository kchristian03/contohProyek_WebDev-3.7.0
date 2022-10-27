<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Members>
 */
class MembersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $state = [
            'Jawa Timur', 'Bali', 'Jakarta'
        ];
        return [
            'name'=>$this->faker->name,
            'phone'=>$this->faker->phoneNumber,
            'email'=>Str::random(10)."@mail.com",
            'password'=>$this->faker->password(6, 12),
            'gender'=>$this->faker->randomElement(['Laki', 'Perempuan']),
            'age'=>random_int(1, 99),
            'joinDate'=>$this->faker->date,
            'address'=>$this->faker->streetAddress,
            'city'=>$this->faker->city,
            'state'=>$this->faker->randomElement($state),
            'country'=>$this->faker->country,
            'postcode'=>$this->faker->postcode,
            'photo'=>'pic6.jpg',
            'description'=>$this->faker->paragraph(2)
        ];
    }
}
