<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class TestDataSeeder extends Seeder
{
    public function run()
    {
        // Add Managers
        DB::table('managers')->insert([
            ['name' => 'John Doe', 'email' => 'john.doe@example.com', 'password' => Hash::make('password')],
            ['name' => 'Jane Smith', 'email' => 'jane.smith@example.com', 'password' => Hash::make('password')],
        ]);

        // Add Participants
        DB::table('participants')->insert([
            ['name' => 'Alice Johnson', 'email' => 'alice.johnson@example.com', 'phone' => '1234567890'],
            ['name' => 'Bob Brown', 'email' => 'bob.brown@example.com', 'phone' => '9876543210'],
        ]);

        // Add Organisateurs
        DB::table('organisateurs')->insert([
            ['name' => 'Charlie White', 'email' => 'charlie.white@example.com', 'phone' => '5551234567'],
            ['name' => 'Diana Black', 'email' => 'diana.black@example.com', 'phone' => '5559876543'],
        ]);

        // Add Events
        DB::table('events')->insert([
            ['name' => 'IT Wave 2025', 'description' => 'A technology-focused event.', 'start_date' => '2025-02-01', 'end_date' => '2025-02-03'],
            ['name' => 'Coding Marathon', 'description' => 'A 24-hour coding challenge.', 'start_date' => '2025-03-10', 'end_date' => '2025-03-11'],
        ]);

        // Add Event Participants
        DB::table('event_participants')->insert([
            ['event_id' => 1, 'participant_id' => 1, 'presence_status' => 'present'],
            ['event_id' => 1, 'participant_id' => 2, 'presence_status' => 'absent'],
            ['event_id' => 2, 'participant_id' => 1, 'presence_status' => 'present'],
            ['event_id' => 2, 'participant_id' => 2, 'presence_status' => 'present'],
        ]);
    }
}


