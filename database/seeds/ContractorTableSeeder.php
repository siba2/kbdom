<?php

use Illuminate\Database\Seeder;

class ContractorTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        if (!$this->contractorExists()) {
            $contractors = ['', '', '', '', '', '', '', '', '', '', '', '', ''];

            foreach ($contractors as $contractor) {
                \App\Contractor::create([
                    'name' => $contractor,
                ]);
            }
        }
    }

    protected function contractorExists(): bool {
        $contractors = \App\Contractor::all();

        return (sizeof($contractors) > 0);
    }
}
