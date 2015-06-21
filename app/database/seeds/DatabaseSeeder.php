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

        User::create(array(
            array('username' => 'watson@gmail.com', 'password' => Hash::make('demo')),
            array('username' => 'kellyl@gmail.com', 'password' => Hash::make('demo'))
        ));
        

        Cd4::create(array(
            array( 'uid' => '1', 'date' => date('Y-m-d H:i:s', strtotime( '3/14/2014' )), 'level' => '400'),
            array( 'uid' => '1', 'date' => date('Y-m-d H:i:s', strtotime( '3/14/2014' )), 'level' => '450'),
            array( 'uid' => '1', 'date' => date('Y-m-d H:i:s', strtotime( '3/14/2014' )), 'level' => '500'),
            array( 'uid' => '1', 'date' => date('Y-m-d H:i:s', strtotime( '3/14/2014' )), 'level' => '450'),
            array( 'uid' => '1', 'date' => date('Y-m-d H:i:s', strtotime( '3/14/2014' )), 'level' => '350'),
            array( 'uid' => '1', 'date' => date('Y-m-d H:i:s', strtotime( '3/14/2014' )), 'level' => '425'),


            array( 'uid' => '2', 'date' => date('Y-m-d H:i:s', strtotime( '2/15/2013' )), 'level' => '700'),
            array( 'uid' => '2', 'date' => date('Y-m-d H:i:s', strtotime( '8/15/2013' )), 'level' => '600'),
            array( 'uid' => '2', 'date' => date('Y-m-d H:i:s', strtotime( '2/15/2014' )), 'level' => '450'),
            array( 'uid' => '2', 'date' => date('Y-m-d H:i:s', strtotime( '5/15/2014' )), 'level' => '550'),
            array( 'uid' => '2', 'date' => date('Y-m-d H:i:s', strtotime( '11/15/2014' )), 'level' => '700'),
            array( 'uid' => '2', 'date' => date('Y-m-d H:i:s', strtotime( '5/15/2015' )), 'level' => '700'),
        ));

        Medication::create(array(
            array('uid' => '1', 'name' => 'Atazanavir', 'dosage_volume' => '150', 'dosage_unit' => 'mg', 'frequency' => '2', 'count' => '10', 'ndc' => ''),
            array('uid' => '1', 'name' => 'Ritonavir', 'dosage_volume' => '100', 'dosage_unit' => 'mg', 'frequency' => '1', 'count' => '30', 'ndc' => ''),

            array('uid' => '2', 'name' => 'Danosone', 'dosage_volume' => '100', 'dosage_unit' => 'mg', 'frequency' => '3', 'count' => '15', 'ndc' => ''),
            array('uid' => '2', 'name' => 'Zidovudine', 'dosage_volume' => '250', 'dosage_unit' => 'mg', 'frequency' => '2', 'count' => '10', 'ndc' => ''),
            array('uid' => '2', 'name' => 'Ranitidine', 'dosage_volume' => '150', 'dosage_unit' => 'mg', 'frequency' => '2', 'count' => '30', 'ndc' => ''),
        ));
	}

}

/*
 *
 CD4

2/15/2013: 700

8/15/2013:  600

2/15/2014: 450

5/15/2014: 550

11/15/2014:  700

5/15/2015: 700



 * Username: rwatson

Email: rwatson@gmail.com

Password: isurvive2015

UserID: rwatson1969

Gender: Male

First Name:  Robert

Last Name: Watson

DOB:  June 27, 1969

Address1: 7656 Brandywine Boulevard

City: Dallas

State: Texas

Zip: 77301


gender": "female",

        "firstName": "kelly",

        "lastName": "lawrence",

        "billingAddress1": "mockingbird ln",

        "billingCity": "grants pass",

        "billingState": "Pennsylvania",

        "billingZip": "69530",

        "phone": "5912596863",

        "dm_email": "fred.flintstone+kellylawrence9829@example.com",

        "CardNumber": "4012000033330026",

        "cardCVV2": "851",

        "expirationMonth": "January",

        "expirationYear": "2023",

        "employer": "Roofer",

        "occupation": "Major Account Manager",

        "password": "CCwokTdYYD4m3Iou"

DOB: April 15, 1989

Medications

danosone   100 mg 3x a day

zidovudine 250 mg 2x a day

ranitidine 150 mg 2x a day



 */