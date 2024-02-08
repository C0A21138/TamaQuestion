<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        if (app()->isLocal()) {
            // 開発環境のみレコードを追加
            Admin::factory()
                ->count(1)
                ->sequence(function ($sequence) {
                    return [
                        'name' => 'tamaQ',
                        'password' => Hash::make('tama_idea2023'),
                        'created_at' => '2024-01-25 17:19:33',
                        'updated_at' => '2024-01-25 17:19:33',
                    ];
                })
                ->create();
        }
    }
}