<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

        User::create(array('username' => 'watson@gmail.com', 'password' => Hash::make('demo')));
        User::create(array('username' => 'kellyl@gmail.com', 'password' => Hash::make('demo')));


        Cd4::create(array( 'uid' => '1', 'date' => date('Y-m-d H:i:s', strtotime( '3/14/2014' )), 'level' => '400'));
        Cd4::create(array( 'uid' => '1', 'date' => date('Y-m-d H:i:s', strtotime( '3/14/2014' )), 'level' => '450'));
        Cd4::create(array( 'uid' => '1', 'date' => date('Y-m-d H:i:s', strtotime( '3/14/2014' )), 'level' => '500'));
        Cd4::create(array( 'uid' => '1', 'date' => date('Y-m-d H:i:s', strtotime( '3/14/2014' )), 'level' => '450'));
        Cd4::create(array( 'uid' => '1', 'date' => date('Y-m-d H:i:s', strtotime( '3/14/2014' )), 'level' => '350'));
        Cd4::create(array( 'uid' => '1', 'date' => date('Y-m-d H:i:s', strtotime( '3/14/2014' )), 'level' => '425'));

        Cd4::create(array( 'uid' => '2', 'date' => date('Y-m-d H:i:s', strtotime( '2/15/2013' )), 'level' => '700'));
        Cd4::create(array( 'uid' => '2', 'date' => date('Y-m-d H:i:s', strtotime( '8/15/2013' )), 'level' => '600'));
        Cd4::create(array( 'uid' => '2', 'date' => date('Y-m-d H:i:s', strtotime( '2/15/2014' )), 'level' => '450'));
        Cd4::create(array( 'uid' => '2', 'date' => date('Y-m-d H:i:s', strtotime( '5/15/2014' )), 'level' => '550'));
        Cd4::create(array( 'uid' => '2', 'date' => date('Y-m-d H:i:s', strtotime( '11/15/2014' )), 'level' => '700'));
        Cd4::create(array( 'uid' => '2', 'date' => date('Y-m-d H:i:s', strtotime( '5/15/2015' )), 'level' => '700'));

        Medication::create(array('uid' => '1', 'name' => 'Atazanavir', 'dosage_volume' => '150', 'dosage_unit' => 'mg', 'frequency' => '2', 'count' => '10', 'ndc' => ''));
        Medication::create(array('uid' => '1', 'name' => 'Ritonavir', 'dosage_volume' => '100', 'dosage_unit' => 'mg', 'frequency' => '1', 'count' => '30', 'ndc' => ''));

        Medication::create(array('uid' => '2', 'name' => 'Danosone', 'dosage_volume' => '100', 'dosage_unit' => 'mg', 'frequency' => '3', 'count' => '15', 'ndc' => ''));
        Medication::create(array('uid' => '2', 'name' => 'Danosone', 'dosage_volume' => '100', 'dosage_unit' => 'mg', 'frequency' => '3', 'count' => '15', 'ndc' => ''));
        Medication::create(array('uid' => '2', 'name' => 'Ranitidine', 'dosage_volume' => '150', 'dosage_unit' => 'mg', 'frequency' => '2', 'count' => '30', 'ndc' => ''));
	}

}

