<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(test::class);
        // $this->call(add_qh::class);
        // $this->call(add_link_type::class);
    }
}
