<?php

use Illuminate\Database\Seeder;

class add_qh extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($j = 2; $j < 40; ++$j)
        {
            for($i = 1; $i < 15; ++$i)
            {
                DB::table('item_category')->insert(
                    ['category_id' => $i, 'item_id' => $j]
                );
            }
        }
    }
}
