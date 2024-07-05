<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run(): void
    {
        $createAdmin = User::where('user_type', User::ADMIN_TYPE)->first();
        if (empty($createAdmin)) {
            $createAdmin = new User();
        }
        $createAdmin->name = 'Admin';
        $createAdmin->email = 'admin@gmail.com';
        $createAdmin->phone_number = '1234567890';
        $createAdmin->password = Hash::make('admin@123');
        $createAdmin->user_type = '1';
        $createAdmin->status = '1';
        $createAdmin->save();
    }
}
