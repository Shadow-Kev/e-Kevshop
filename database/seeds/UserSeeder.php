<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      
        App\Role::create(
              [
                  'name' => "admin",
                  'description' => "the awesome admin dashboard wich provide you all access",
                  'slug' => 'this-is-the-first-admin-role'
      ]);

        App\Role::create(
            [
                'name' => "client",
                'description' => "the awesome aclient dashboard wich provide you all access",
                'slug' => 'this-is-the-first-client-role'
            ]);


      App\User::create(
              [
                  'nom' => 'Jon',
                  'prenom' => 'Snow',
                  'email' => 'jon@fake.io',
                  'password' => bcrypt('password'),
                  'username' => 'jonsnow',
                  'role' => 1,
                  'statut' => true,
                  'remember_token' => 'adghhdyyyfkj8ds9e8ea8s9rrf6633qeeg',
                  'confirm_token' => 'ad87123yyyfkj8ds9e8ea8s9rrf6633qeeg',
                  'reset_token' => "adghhdyyyfkj8ds9e8ea8s9rrf6633qeeg",
                  'slug' => 'theking-land-man-2018'
              ]
      );


        App\User::create(
            [
                'nom' => 'Ramsey',
                'prenom' => 'Bolton',
                'email' => 'ramsey@fake.io',
                'password' => bcrypt('password'),
                'username' => 'ramsey_snow',
                'role' => 2,
                'statut' => true,
                'remember_token' => 'adghhdyyyfkj8ds9e8ea8s9rrf6633qeeg',
                'confirm_token' => 'ad87123yyyfkj8ds9e8ea8s9rrf6633qeeg',
                'reset_token' => "adghhdyyyfkj8ds9e8ea8s9rrf6633qeeg",
                'slug' => 'theking-land-man-2018'
            ]
        );
    }
}
