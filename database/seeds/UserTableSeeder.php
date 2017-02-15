<?php
// php artisan make:seeder UserTableSeeder
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
          'name' => 'Cássio Talle',
          'email' => 'cassiolandia@gmail.com',
          'password' => bcrypt('123456')
        ]);
    }
}
