<?php


use App\Models\User;
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
        $data = [
            ['name' => 'git', 'email' => 'git@mcclainconcepts.com', 'password' => bcrypt('LaravelTestPW')],
            ['name' => 'your', 'email' => 'your@emailaddress.com', 'password' => bcrypt('LaravelTestPW')],
        ];
        foreach ($data as $u){
            User::create($u);
        }
    }
}