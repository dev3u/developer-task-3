<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Study;

class StudySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Study::create([
            'name' => 'Research Study 1',
            'completes' => 25,
        ]);
        Study::create([
            'name' => 'Research Study 2',
            'completes' => 100,
        ]);
        Study::create([
            'name' => 'Research Study 3',
            'completes' => 75,
        ]);
    }
}
