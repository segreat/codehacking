<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
    }
}

class UsersTableSeeder extends Seeder{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->delete();
        $users = array(
            array(
                'name'=>'eniade',
                'role_id'=>'1',
                'email'=>'eni@gmail.com',
                'is_active'=>'1',
                'created_at'=>'2016-11-09 00:00:00',
                'updated_at'=>'2016-11-17 13:45:36',
                'password'=>Hash::make('aaaaaa'),


            )
        );
        DB::table('users')->insert($users);
        DB::table('roles')->delete();
        $role = array(
            array(
                'id'=>'1',
                'name'=>'administrator'
            ),array(
                'id'=>'2',
                'name'=>'author'
            ),array(
                'id'=>'3',
                'name'=>'subscriber'
            )
        );
        DB::table('roles')->insert($role);
    }

}

