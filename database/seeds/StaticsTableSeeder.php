<?php

use App\Models\AppStatic;
use Illuminate\Database\Seeder;

class StaticsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AppStatic::create(['name' => 'martial_status', 'label'=>'الحالة الاجتماعية' , 'parent_id' =>null]);
        AppStatic::create(['name' => 'gender', 'label'=>'الجنس' , 'parent_id' =>null]);
        AppStatic::create(['name' => 'governorates', 'label'=>'المحافظات' , 'parent_id' =>null]);
        AppStatic::create(['name' => 'single', 'label'=>'أعزب' , 'parent_id' =>2]);
        AppStatic::create(['name' => 'married', 'label'=>'متزوج' , 'parent_id' =>2]);
        AppStatic::create(['name' => 'gaza', 'label'=>'غزة' , 'parent_id' => 3]);
        AppStatic::create(['name' => 'alquds', 'label'=>'القدس' , 'parent_id' => 3]);
        AppStatic::create(['name' => 'rafah', 'label'=>'رفح' , 'parent_id' => 3]);
        AppStatic::create(['name' => 'qualification', 'label'=>'المؤهل العلمي' , 'parent_id' =>null]);
        AppStatic::create(['name' => 'tawjihi', 'label'=>'ثانوية عامة' , 'parent_id' => 9]);
        AppStatic::create(['name' => 'bechalorios', 'label'=>'بكالوريوس' , 'parent_id' => 9]);
        AppStatic::create(['name' => 'master', 'label'=>'ماجستير' , 'parent_id' => 9]);
        AppStatic::create(['name' => 'Doctorah', 'label'=>'دكتوراه' , 'parent_id' => 9]);
        AppStatic::create(['name' => 'professor', 'label'=>'بروفيسور' , 'parent_id' => 9]);
        AppStatic::create(['name' => 'work_cat', 'label'=>'تصنيف العمل' , 'parent_id' =>null]);
        AppStatic::create(['name' => 'civil', 'label'=>'مدني' , 'parent_id' => 15]);
        AppStatic::create(['name' => 'military', 'label'=>'عسكري' , 'parent_id' => 15]);
        AppStatic::create(['name' => 'special_work', 'label'=>'قطاع خاص' , 'parent_id' => 15]);
        AppStatic::create(['name' => 'international_work', 'label'=>'منظمات دولية' , 'parent_id' => 15]);
        AppStatic::create(['name' => 'work_goermental', 'label'=>'حكومي' , 'parent_id' => 15]);
        AppStatic::create(['name' => 'ministries', 'label'=>'الوزارات' , 'parent_id' =>20]);
        AppStatic::create(['name' => 'mohealth', 'label'=>'وزارة الصحة' , 'parent_id' => 21]);
        AppStatic::create(['name' => 'mofinancial', 'label'=>'وزارة المالية' , 'parent_id' => 21]);
        AppStatic::create(['name' => 'moeconomy', 'label'=>'وزارة الاقتصاد' , 'parent_id' => 21]);
        AppStatic::create(['name' => 'hokom_mahally', 'label'=>'وزارة الحكم المحلي' , 'parent_id' => 21]);
        AppStatic::create(['name' => 'moculture', 'label'=>'وزارة الثقافة' , 'parent_id' => 21]);
    }
}
