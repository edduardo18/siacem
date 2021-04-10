<?php

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

    factory(App\User::class,5)->create()->each(function ($user){
        $profile = $user->stage1()->save(factory(App\formato1::class)->make());
    });
        // $this->call(UsersTableSeeder::class);
        // factory(App\formato1::class,20000)->create();
        factory(App\formato2::class,5)->create();
        factory(App\formato3::class,5)->create();
        factory(App\formato4::class,5)->create();
        factory(App\formato5::class,5)->create();
        factory(App\formato6::class,5)->create();
    }
}
