<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     $user = App\User::create([
              'name' => 'vishnu',
              'email' => 'vishnu@gmail.com',
              'password' => bcrypt('password'),
              'admin' => 1
       ]);

  App\Profile::create([
       'user_id' => $user->id,
       'avatar' => 'uploads/avatars/1.jpg',
       'about' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione illum repudiandae obcaecati ex doloremque. Repellendus delectus, vitae error eveniet, a velit rem minima blanditiis aut repudiandae sint? A, mollitia officia?
       ',
       'facebook' => 'facebook.com',
       'youtube' => 'youtube.com'
  ]);
    }
}
