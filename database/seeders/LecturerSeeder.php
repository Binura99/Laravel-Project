<?php

namespace Database\Seeders;

use App\Models\Lecturer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LecturerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Lecturer::insert([
            [
                'name' => 'John Doe',
                'email' => 'johndoe@example.com',
                'department' => 'Physics',
                'phone_number' => '1234567890'
            ],
            [
                'name' => 'Jane Smith',
                'email' => 'janesmith@example.com',
                'department' => 'Chemistry',
                'phone_number' => '0987654321'
            ],
            [
                'name' => 'Albert White',
                'email' => 'albertwhite@example.com',
                'department' => 'Biology',
                'phone_number' => '1122334455'
            ],
            [
                'name' => 'Emily Green',
                'email' => 'emilygreen@example.com',
                'department' => 'Mathematics',
                'phone_number' => '6677889900'
            ],
            [
                'name' => 'Michael Brown',
                'email' => 'michaelbrown@example.com',
                'department' => 'Computer Science',
                'phone_number' => '5544332211'
            ],
        ]);
    }
}
