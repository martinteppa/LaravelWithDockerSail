<?php

namespace Database\Seeders;

use App\Models\Iva;
use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $iva1=new Iva();
        $iva1->id=1;
        $iva1->alicuota=10;
        $iva1->save();
        $iva2=new Iva();
        $iva2->id=2;
        $iva2->alicuota=21;
        $iva2->save();
        $role1=new Role();
        $role1->id=1;
        $role1->nombreRol='cliente';
        $role1->save();
        $role2=new Role();
        $role2->id=2;
        $role2->nombreRol='admin';
        $role2->save();
        $role3=new Role();
        $role3->id=3;
        $role3->nombreRol='vendedor';
        $role3->save();
        
        $vendedor=new User();
        $vendedor->name="vendedor1";
        $vendedor->id=1;
        $vendedor->password=Hash::make('vendedor1');
        $vendedor->email="vendedor1@gmail.com";
        $vendedor->role_id="3";
        $vendedor->save();
        
        $vendedor=new User();
        $vendedor->name="vendedor2";
        $vendedor->id=2;
        $vendedor->password=Hash::make('vendedor2');
        $vendedor->email="vendedor2@gmail.com";
        $vendedor->role_id="3";
        $vendedor->save();

        $vendedor=new User();
        $vendedor->name="martin";
        $vendedor->id=3;
        $vendedor->password=Hash::make('prueba');
        $vendedor->email="martinteppa@gmail.com";
        $vendedor->role_id="2";
        $vendedor->save();



        \App\Models\Articulo::factory(100)->create();
        \App\Models\Cliente::factory(20)->create();
        \App\Models\Lista::factory(20)->create();
        \App\Models\Precio::factory(400)->create();
        
    }
}
