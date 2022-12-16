<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
//use Str;

class DatabaseSeeder extends Seeder
{
  /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       // \App\Models\User::factory(2)->create();

       //\DB::collection('users')->insert([
        $data['name'] ="rigved";
        $data['email'] =  "rigved2@gmail.com";
        $data['email_verified_at']= date('Y-m-d H:i:s');

        $data['password']=  bcrypt('123457');
        //$data['remember_token']= Str::random(10);
        $data['created_at']= date('Y-m-d H:i:s');
        $data['updated_at']= date('Y-m-d H:i:s');
        \App\Models\User::create($data);


  

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]); 
    }


}
    
       
