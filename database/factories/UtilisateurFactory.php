<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Utilisateur>
 */
class UtilisateurFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'c_nom' => $this->faker->company,
            'c_adresse' => $this->faker->streetAddress,
            'c_tel' => $this->faker->phoneNumber,
            'c_email' => $this->faker->companyEmail,
            'c_p_nom' => $this->faker->lastName,
            'c_p_pnom' => $this->faker->firstName,
            'c_p_image' => $this->faker->imageUrl
        ];
    }
}
