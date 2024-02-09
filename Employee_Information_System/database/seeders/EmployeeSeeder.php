<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 200; $i++) {
            DB::table('employees')->insert([
                'name' => 'Employee ' . $i,
                'job_title' => 'Job Title ' . $i,
                'joining_date' => now()->subDays($i),
                'salary' => rand(40000, 80000),
                'email' => 'employee' . $i . '@example.com',
                'mobile_no' => '123456789' . $i,
                'address' => 'Address ' . $i,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
