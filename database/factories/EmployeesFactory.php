<?php

namespace Database\Factories;
use App\Models\Employees;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employees>
 */
class EmployeesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'cuil_employee'=>$this->faker->uniqueId,
            'dateOfEntry_employee',
            'name1_employee'=>$this->faker->firstName,
            'name2_employee',
            'lastname1_employee',
            'lastname2_employee',
            'nationality_employee',
            'phone_employee',
            'country_employee',
            'state_employee',
            'city_employee',
            'address_employee',
            'position_employee',
            'salary_employee'
        ];
    }
}
