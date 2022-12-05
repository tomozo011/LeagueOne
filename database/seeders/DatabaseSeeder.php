<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call(CanonSeeder::class);
        $this->call(KintetsuSeeder::class);
        $this->call(SuntorySeeder::class);
        $this->call(KobeSeeder::class);
        $this->call(KubotaSeeder::class);
        $this->call(MitsubishiSeeder::class);
        $this->call(NECSeeder::class);
        $this->call(PanasonicSeeder::class);
        $this->call(RikoSeeder::class);
        $this->call(ShizuokaTableSeeder::class);
        $this->call(ToshibaTableSeeder::class);
    }
}
