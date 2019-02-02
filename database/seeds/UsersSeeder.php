<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;
use App\Pensiunan;
class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$adminRole = new Role();
    	$adminRole->name ="admin";
    	$adminRole->display_name = "Admin";
    	$adminRole->save();

    	//Membuat role member

    	$memberRole = new Role();
    	$memberRole->name ="member";
    	$memberRole->display_name= "Member";
    	$memberRole->save();

    	//Membuat sample admin

    	$admin = new User();
        $admin->pensiunan_id = 24010314140073;
    	$admin->password = bcrypt('rahasia');
    	$admin->save();
    	$admin->attachRole($adminRole);

    	//Membuat sample member
        $member = new User();
        $admin->pensiunan_id = 24010314120020;
        $member->password = bcrypt('rahasia');
        $member->save();
        $member->attachRole($memberRole);
}
}
