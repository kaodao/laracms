<?php

use Illuminate\Database\Seeder;
use App\Models\Admin@admin.test;

class Admin@admin.testsTableSeeder extends Seeder
{
    public function run()
    {
        $admin@admin.tests = factory(Admin@admin.test::class)->times(50)->make()->each(function ($admin@admin.test, $index) {
            if ($index == 0) {
                // $admin@admin.test->field = 'value';
            }
        });

        // Admin@admin.test::insert($admin@admin.tests->toArray());
    }

}

