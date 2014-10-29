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

        $this->call('ZapatosTableSeeder');
        
		// $this->call('UserTableSeeder');
	}

}

class ZapatosTableSeeder extends Seeder {

    public function run()
    {
        DB::table('tallas')->delete();
        DB::table('zapatos')->delete();
        
        /*
            Nike Lebron 12 iD
        */
        
        $id = Zapato::create(array(
            'descripcion' => 'Zapato para Basketball',
            'modelo' => 'Lebron 12 iD',
            'precio' => 12250.00,
            'color' => 'Negro',
            'foto' => 'Nike-Lebron12iD.jpg'
        ))->id;
        
        Talla::create(array(
            'talla' => 9,
            'zapato_id' => $id
        ));
        
        Talla::create(array(
            'talla' => 10,
            'zapato_id' => $id
        ));
        
        Talla::create(array(
            'talla' => 11,
            'zapato_id' => $id
        ));
        
        /*
            Adidas Messi F10
        */
        
        $id = Zapato::create(array(
            'descripcion' => 'Zapato para fútbol',
            'modelo' => 'Messi F10',
            'precio' => 3000.00,
            'color' => 'Blanco',
            'foto' => 'Adidas-Messi-F10.jpg'
        ))->id;
        
        Talla::create(array(
            'talla' => 6,
            'zapato_id' => $id
        ));
        
        Talla::create(array(
            'talla' => 7,
            'zapato_id' => $id
        ));
        
        Talla::create(array(
            'talla' => 8,
            'zapato_id' => $id
        ));
    }
    
}