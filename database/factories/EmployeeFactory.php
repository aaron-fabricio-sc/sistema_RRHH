<?php

namespace Database\Factories;

use App\Models\Departament;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Contract;
use App\Models\Job;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $type_contract = $this->faker->unique()->sentence();
        $departmentIds = Departament::pluck('id')->toArray();
        $contractIds = Contract::pluck('id')->toArray();
        $jobIds = Job::pluck('id')->toArray();
        $gender = $this->faker->randomElement(['Masculino', 'Femenino']);
        return [
            //
            "name" => $this->faker->firstName,
            "firts_last_name" => $this->faker->lastName,
            'second_last_name' => $this->faker->lastName,
            'birthdate' => $this->faker->date(),
            "gender" => $gender,
            "phone" => $this->faker->phoneNumber,
            "email" => $this->faker->unique()->safeEmail,
            "type_document" => $this->faker->randomElement(['Documento Nacional', 'Documento Extranjero']),
            "document_number" => $this->faker->unique()->randomNumber(8),
            "ci_extension_id" => $this->faker->randomElement([1, 2, 3, 4, 5, 6, 7, 8, 9]),
            "address_1" => $this->faker->address,
            "address_2" => $this->faker->address,
            "previous_work_details" => $this->faker->paragraph(30),
            "start_date" => $this->faker->dateTimeBetween('2000-01-01', 'now')->format('Y-m-d'),
            /*  "final_date" => $this->faker->dateTimeBetween('now', '2023-12-31')->format('Y-m-d'), */
            "additional_employee_details" => $this->faker->paragraph(30),
            /*  "working_time" => $this->faker->randomElement(['Tiempo Completo', 'Medio Tiempo']),
            "days_vacations" => $this->faker->randomElement([0, 1, 2, 3, 4, 5, 6, 7, 8, 9]),
            "vacation_start_date" => $this->faker->dateTimeBetween('2000-01-01', 'now')->format('Y-m-d'),
            "vacation_final_date" => $this->faker->dateTimeBetween('now', '2023-12-31')->format('Y-m-d'),
            "take_vacation" => $this->faker->randomElement([0, 1, 2, 3, 4, 5, 6, 7, 8, 9]), */
            'department_id' => $this->faker->randomElement($departmentIds),
            'contract_id' => $this->faker->randomElement($contractIds),
            'job_id' => $this->faker->randomElement($jobIds),


        ];
    }
}
