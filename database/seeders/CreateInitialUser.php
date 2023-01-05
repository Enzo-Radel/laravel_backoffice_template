<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CreateInitialUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user_id = 1;

        $attributes = [
            "id"        => $user_id,
            "name"      => "Initial User",
            "email"     => "initial-user@email.com",
            "password"  => "12345678"
        ];

        $user = User::query()->find($user_id);

        if ($user == null) {
            $user = User::create($attributes);
        }
    }
}
