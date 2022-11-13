<?php

namespace Database\Seeders;

use App\Models\AppSettings;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AppSettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AppSettings::Create([
            'en_peronal_name' => 'Maher Shehadie',
            'ar_peronal_name' => 'ماهر شحادة',
            'en_peronal_desc' => 'My name is Muhammad Maher Shehadeh, a young man from Syria, I have three years of experience in the field of e-marketing, specialized in marketing for e-stores and developing Instagram accounts, Many online stores have helped develop their online stores and increase their sales by developing effective store strategies, It has also helped them grow their Instagram accounts by creating a strategy that helps attract potential customers and convert them into permanent customers',
            'ar_peronal_desc' => 'اسمي محمد ماهر شحادة شاب من سوريا , لدي خبرة ثلاث سنوات في مجال التسويق الإلكتروني , مختص في التسويق للمتاجر الإلكترونية و تنمية حسابات الانستقرام ساعدت العديد من المتاجر الالكترونية على تنمية متاجرهم الإلكترونية وزيادة مبيعاتهم من خلال وضع استراتيجيات فعالة للمتجر , كما ساعدتهم على تنمية حسابهاتهم على الانستقرام من خلال عمل استراتيجية تساعد على جذب العملاء المحتملين وتحويلهم إلى زبائن دائمين',
            'en_job_title' => 'Digital Markting',
            'ar_job_title' => 'مسوق ألكتروني',
            'en_skills' => 'Digital Markting',
            'ar_skills' => 'مسوق ألكتروني',
            'en_contactWithUs_message' => 'If you need more information, you can contact me',
            'ar_contactWithUs_message' => 'اذا كنت تحتاج المزيد من المعلومات تستطيع التواصل معي',
            'email' => 'maher@mahermarketing99.com',
            'phone' => '+20 102 768 2840',
            'small_personal_pic' => '273041464_465070025025772_6271733742849578996_n.jpg',
            'big_personal_pic' => 'counters-bg.jpg',
            'facebook' => 'https://www.facebook.com/Mahershehadie',
            'twitter' => 'Write Your Twitter',
            'instagram' => 'https://www.instagram.com/maher_shehadie/',
            'linkedIn' => 'https://wa.me/message/QJKFMT2DFCA5B1',
            'location' => 'Egypt - Cairo',
        ]);
    }
}
