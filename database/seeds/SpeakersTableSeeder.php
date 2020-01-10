<?php

use Illuminate\Database\Seeder;
use App\Speaker;

class SpeakersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //truncate the table
        Speaker::truncate();
        factory(App\Speaker::class, 30)->create();
    }
}
