<?php

use App\Models\Contact;
use Illuminate\Database\Seeder;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contact::create([
            'id' => 1 ,
            'value' => 'info@app.ps',
            'type' => 'email',
            'is_primary' =>true,
            'patient_id' => 1,
        ]);
    }
}
