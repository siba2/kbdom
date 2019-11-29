<?php

use Illuminate\Database\Seeder;

class EmployeeTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        if (!$this->employeeExists()) {
            \App\Employee::create([
                'quantity' => 34,
            ]);
        }
    }

    protected function employeeExists(): bool {
        $employees = \App\Employee::all();

        return (sizeof($employees) > 0);
    }
}
