<?php

namespace DimasPndw\WonogiriArea\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WilayahSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('kecamatans')->insert([
            ['nama' => 'Baturetno', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
