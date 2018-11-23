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
        $user = new \App\User();
        $user->name = "jesus";
        $user->nombre = "Jesus";
        $user->apellido = "Huz";
        $user->cedula = 21219078;
        $user->email = 'jesushuz.v@gmail.com';
        $user->password = bcrypt('secret');
        $user->save();

        $user->servicios()->save(factory(App\Servicio::class)->make());
    
        factory(App\User::class,10)->create()->each(function ($u) 
        {
            $u->servicios()->save(factory(App\Servicio::class)->make());
        });

        
    }
}
