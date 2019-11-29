<?php

use Illuminate\Database\Seeder;

class AssortmentTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        if (!$this->assortmentExists()) {
            $assortments = ['Filigran', 'Balkon', 'Bieg', 'Ściana', 'Belki', 'Płyty', 'Słupy', 'Stopnice', 'Czapy', 'Progi', 'Spocznik', 'Blok', 'Ławki'];

            foreach ($assortments as $assortment) {
                \App\Assortment::create([
                    'name' => $assortment,
                ]);
            }
        }
    }

    protected function assortmentExists(): bool {
        $assortments = \App\Assortment::all();

        return (sizeof($assortments) > 0);
    }
}
