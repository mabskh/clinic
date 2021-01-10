<?php

use App\Models\Account;
use Illuminate\Database\Seeder;

class AccountTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Account::create([
            'id' => 1 ,
            'user_id' => 1 ,
            'link' => 'حساب تجريبي',
            'email' => 'account@d3m.ps',
            'mobile' => '05669888547',
            'job_title' => 'باحث اجتماعي',
            'description' => 'مدير مركز سابقا',
            'full_name' => 'اسامة منصور عبدالهادي',
            'national_id' => '82547638',
            'birth_place' => 'القدس المحتلة',
            'mother_name' => 'خضرة',
            'work_place' => 'مركز دعم للارشاد النفسي',
            'current_place' => 'رام الله',
        ]);
    }
}
