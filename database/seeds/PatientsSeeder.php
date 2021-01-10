<?php

use App\Models\Patient;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class PatientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Patient::create([
            'id' => 1 ,
            'user_id' => 1 ,
            'account_id' => 1 ,
            'email' => 'account@d3m.ps',
            'mobile' => '05669888547',
            'job_title' => 'باحث اجتماعي',
            'description' => 'مدير مركز سابقا',
            'name' => 'اسامة منصور عبدالهادي',
            'national_id' => '82547638',
            'birth_place' => 'القدس المحتلة',
            'birth_day' => Carbon::now(),
            'work_place' => 'مركز دعم للارشاد النفسي',
            'current_place' => 'رام الله',
        ]);
    }
}
