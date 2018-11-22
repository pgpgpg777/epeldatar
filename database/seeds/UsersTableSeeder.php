<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new User();
        $admin->user_firstname = "Tódor"; 
        $admin->user_lastname = "Teszt";
        $admin->user_email = "test@test.com";
        $admin->password = bcrypt("password");

        $admin->save();

        factory(App\User::class, 30)->create();//->each(function($user){
        		//$user->posts()->save(factory(App\Post::class)->make());
        //});
    }
}
