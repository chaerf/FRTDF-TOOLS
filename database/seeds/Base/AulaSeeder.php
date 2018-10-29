<?php

use Illuminate\Database\Seeder;
use App\Models\Base\Aula;

class AulaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::get();
        factory(Aula::class, random_int(5, 10))->create([]);
    }
}
