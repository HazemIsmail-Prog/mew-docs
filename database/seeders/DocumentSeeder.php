<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Document;

class DocumentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
$documents = array(
    array('id' => '12','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'عدد 2 نسخة أصلية من محضر الاجتماع المنعقد بتاريخ 27-05-2024 الساعة 9:00 صباحا مع قطاع الخدمات الفنية','content' => '','notes' => 'K23165-0106D/24/0489
  08-07-2024
  ','created_at' => '2024-07-08 11:48:06','updated_at' => '2024-07-08 13:52:50'),
    array('id' => '13','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'عدد 2 نسخة أصلية من محضر الاجتماع المنعقد بتاريخ 02-05-2024 مع إدارة مشاريع المنشآت المائية','content' => NULL,'notes' => 'K23165-0108D/24/0492
  08-07-2024','created_at' => '2024-07-08 12:18:21','updated_at' => '2024-07-09 10:03:02'),
    array('id' => '14','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'عدد 2 نسخة أصلية من محضر الاجتماع المنعقد بتاريخ 07-02-2024 و 20-02-2024 ','content' => NULL,'notes' => 'K23165-0108D/24/0504','created_at' => '2024-07-08 13:03:17','updated_at' => '2024-07-09 10:05:20'),
    array('id' => '15','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'عدد 2 نسخة أصلية من محضر الاجتماع المنعقد بتاريخ 27-05-2024 الساعة 10:15 ','content' => NULL,'notes' => 'K23165-0106D-24-0490
  08-07-2024','created_at' => '2024-07-08 13:07:27','updated_at' => '2024-07-09 10:06:44'),
    array('id' => '16','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'Interim Submission B1 (I.S.B1) Submission','content' => 'مرفق 2 نسخة ورقية 
  5 نسخة الكترونية CD','notes' => 'K23165-0108D-24-0505
  07-07-2024','created_at' => '2024-07-08 13:11:28','updated_at' => '2024-07-09 10:04:00'),
    array('id' => '17','created_by' => '1','from_id' => '20','to_id' => '1','title' => 'Telecommunication Specification 2024','content' => 'قرص مدمج CD بنظام الورد','notes' => 'وارد برقم 20240535000336 بتاريخ04-07-2024
  ردا علي كتابنا رقم 20240650000052 بتاريخ 27-06-2024','created_at' => '2024-07-08 13:18:58','updated_at' => '2024-07-09 10:12:25'),
    array('id' => '18','created_by' => '1','from_id' => '1','to_id' => '8','title' => 'دفعة الاعمال عن شهر يونيو 2024','content' => NULL,'notes' => NULL,'created_at' => '2024-07-09 08:56:36','updated_at' => '2024-07-31 11:09:31'),
    array('id' => '19','created_by' => '2','from_id' => '1','to_id' => '21','title' => 'طلب تجديد زيارة متعددة - احمد كمال احمد سعد','content' => NULL,'notes' => NULL,'created_at' => '2024-07-09 09:00:15','updated_at' => '2024-07-11 10:28:17'),
    array('id' => '20','created_by' => '2','from_id' => '1','to_id' => '21','title' => 'طلب تجديد زيارة متعددة - صموئيل سمعان ويصا حسب الله','content' => NULL,'notes' => NULL,'created_at' => '2024-07-09 10:11:31','updated_at' => '2024-07-11 10:27:04'),
    array('id' => '21','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'مسودة محضر الاجتماع المنعقد بتاريخ 03-07-2024 الساعة 9:00','content' => 'مسودة تقرير الدراسة الهيدروليكية','notes' => 'K23165-0102D/24/0507
  08-07-2024
  رقم المحضر
  K23165-0102D-MOM-24-006','created_at' => '2024-07-09 10:12:06','updated_at' => '2024-07-09 13:18:06'),
    array('id' => '22','created_by' => '1','from_id' => '1','to_id' => '22','title' => 'المخططات التنفيذية لشبكة المياه','content' => NULL,'notes' => NULL,'created_at' => '2024-07-09 10:14:28','updated_at' => '2024-08-13 09:40:34'),
    array('id' => '23','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'Workshop','content' => NULL,'notes' => 'K23165-0105D/24/0508','created_at' => '2024-07-09 10:14:54','updated_at' => '2024-07-09 13:17:54'),
    array('id' => '24','created_by' => '2','from_id' => '1','to_id' => '19','title' => 'الطاقة الكهربائية وكمية المياه المطلوبة لمشاريع المؤسسة العامة للرعاية السكنية للسنوات  2024-2040','content' => NULL,'notes' => NULL,'created_at' => '2024-07-09 10:16:01','updated_at' => '2024-07-17 14:37:55'),
    array('id' => '25','created_by' => '2','from_id' => '1','to_id' => '19','title' => 'جمع بيانات','content' => NULL,'notes' => 'مرفق رد الأمانة العامة للمجلس الأعلى للتخطيط والتنمية والوارد برقم 20240269000012 بتاريخ 01-07-2024','created_at' => '2024-07-09 10:20:40','updated_at' => '2024-07-17 14:33:25'),
    array('id' => '26','created_by' => '1','from_id' => '1','to_id' => '23','title' => 'Addendum 2','content' => NULL,'notes' => 'ردا علي كتاب SMEC
  رقم 5071033-C01-408  بتاريخ 30/06/2024','created_at' => '2024-07-09 10:35:12','updated_at' => '2024-07-24 09:07:35'),
    array('id' => '27','created_by' => '2','from_id' => '1','to_id' => '24','title' => 'عدادات المياه على مداخل المناطق 
  (رد على الكتاب رقم 202459510000029)','content' => NULL,'notes' => NULL,'created_at' => '2024-07-09 10:43:33','updated_at' => '2024-07-18 13:14:58'),
    array('id' => '28','created_by' => '1','from_id' => '1','to_id' => '19','title' => 'طلب مخططات As Built-C-0152Z-C-019Z-G-5  لشبكة الصرف الصحي بموقع المشروع','content' => NULL,'notes' => NULL,'created_at' => '2024-07-09 10:45:04','updated_at' => '2024-07-30 07:36:46'),
    array('id' => '29','created_by' => '1','from_id' => '1','to_id' => '25','title' => 'مشاريع المدن السكانية المدرجة ضمن خطة التنمية - متطلبات المياه','content' => NULL,'notes' => NULL,'created_at' => '2024-07-09 10:58:30','updated_at' => '2024-07-31 10:53:54'),
    array('id' => '30','created_by' => '2','from_id' => '1','to_id' => '26','title' => 'مشاريع المدن السكانية المدرجة ضمن خطة التنمية - متطلبات المياه','content' => NULL,'notes' => NULL,'created_at' => '2024-07-09 11:00:18','updated_at' => '2024-07-10 12:27:50'),
    array('id' => '31','created_by' => '1','from_id' => '1','to_id' => '27','title' => 'بخصوص كتاب شركة عربي','content' => NULL,'notes' => NULL,'created_at' => '2024-07-09 11:10:12','updated_at' => '2024-07-22 15:48:09'),
    array('id' => '32','created_by' => '1','from_id' => '1','to_id' => '28','title' => 'طلب وزارة الكهرباء تنفيذ خط مياه عذبة قطر 1200 مم ضمن اعمال العقد','content' => NULL,'notes' => NULL,'created_at' => '2024-07-09 11:14:06','updated_at' => '2024-11-13 08:05:35'),
    array('id' => '33','created_by' => '2','from_id' => '1','to_id' => '7','title' => 'الخطة التشغيلية 2025/2024 لوزارة الكهرباء والماء والطاقة المتجددة','content' => NULL,'notes' => NULL,'created_at' => '2024-07-09 11:15:32','updated_at' => '2024-07-18 13:23:45'),
    array('id' => '34','created_by' => '2','from_id' => '1','to_id' => '29','title' => 'استعجال الرد علي الاستفسارات','content' => NULL,'notes' => 'تم رفع الكتاب WORKFLOW  يوم 04-07-2024 في انتظار م. زينب للاعتماد
  2024153636000011','created_at' => '2024-07-09 11:17:38','updated_at' => '2024-07-21 07:32:04'),
    array('id' => '35','created_by' => '2','from_id' => '1','to_id' => '30','title' => 'Concept Design Report Phase 1','content' => 'مرفق CD','notes' => NULL,'created_at' => '2024-07-09 11:21:24','updated_at' => '2024-07-18 08:38:02'),
    array('id' => '36','created_by' => '1','from_id' => '1','to_id' => '31','title' => 'جمع المعلومات','content' => NULL,'notes' => NULL,'created_at' => '2024-07-09 11:23:35','updated_at' => '2024-07-09 13:25:02'),
    array('id' => '37','created_by' => '2','from_id' => '1','to_id' => '32','title' => 'الموافقة على انشاء مبنى اداري جديد للموظفين','content' => NULL,'notes' => NULL,'created_at' => '2024-07-09 11:25:56','updated_at' => '2024-07-16 14:14:35'),
    array('id' => '38','created_by' => '1','from_id' => '1','to_id' => '19','title' => 'Master Plan Interim Report','content' => NULL,'notes' => NULL,'created_at' => '2024-07-09 11:28:31','updated_at' => '2024-07-10 11:03:23'),
    array('id' => '39','created_by' => '1','from_id' => '1','to_id' => '23','title' => 'المناقصة 71 - الشويخ - حولي - بخصوص الملحق التعديلي رقم 2','content' => NULL,'notes' => NULL,'created_at' => '2024-07-09 11:30:08','updated_at' => '2024-07-31 11:37:17'),
    array('id' => '40','created_by' => '1','from_id' => '1','to_id' => '7','title' => 'التحديات الإدارية للخطة الإنمائية','content' => NULL,'notes' => NULL,'created_at' => '2024-07-09 11:34:31','updated_at' => '2024-07-10 12:18:31'),
    array('id' => '41','created_by' => '1','from_id' => '1','to_id' => '19','title' => 'طلب مخططات As Built لشبكة الصرف الصحي بموقع المشروع','content' => NULL,'notes' => NULL,'created_at' => '2024-07-09 11:36:18','updated_at' => '2024-07-22 11:17:57'),
    array('id' => '42','created_by' => '2','from_id' => '1','to_id' => '8','title' => 'نشر الملحق التعديلي رقم 2 و نشر محضر الاجتماع التمهيدي','content' => NULL,'notes' => 'تم اصدار الكتاب بتاريخ 27-06-2024
  بتاريخ 20240650000053','created_at' => '2024-07-09 12:38:40','updated_at' => '2024-07-09 12:39:00'),
    array('id' => '43','created_by' => '2','from_id' => '1','to_id' => '19','title' => 'المواصفات الخاصة بمباني الاعمال الكيماوية','content' => 'مرفق CD','notes' => NULL,'created_at' => '2024-07-09 12:42:22','updated_at' => '2024-07-09 12:44:33'),
    array('id' => '44','created_by' => '2','from_id' => '1','to_id' => '33','title' => 'الحاق للكتاب رقم ات 2024-649','content' => NULL,'notes' => NULL,'created_at' => '2024-07-09 12:46:26','updated_at' => '2024-07-09 12:47:44'),
    array('id' => '45','created_by' => '1','from_id' => '1','to_id' => '31','title' => 'جمع المعلومات','content' => NULL,'notes' => '2024153636000010
  04-07-2024','created_at' => '2024-07-09 12:48:39','updated_at' => '2024-07-09 13:24:25'),
    array('id' => '46','created_by' => '2','from_id' => '1','to_id' => '20','title' => 'اعتماد محضر الاجتماع المنعقد بتاريخ 05-06-2024','content' => NULL,'notes' => '20240650000052','created_at' => '2024-07-09 12:52:08','updated_at' => '2024-07-09 12:54:55'),
    array('id' => '47','created_by' => '2','from_id' => '1','to_id' => '51','title' => 'PCW - List of users','content' => NULL,'notes' => 'بالطريق الرسمي
  20240650000040','created_at' => '2024-07-09 12:58:04','updated_at' => '2024-12-10 09:12:53'),
    array('id' => '48','created_by' => '2','from_id' => '1','to_id' => '35','title' => 'PCW - List of users','content' => NULL,'notes' => 'بالطريق الرسمي
  20240650000047','created_at' => '2024-07-09 13:01:47','updated_at' => '2024-07-09 13:02:50'),
    array('id' => '49','created_by' => '2','from_id' => '1','to_id' => '24','title' => 'PCW - List of users','content' => NULL,'notes' => 'بالطريق الرسمي
  20240650000043','created_at' => '2024-07-09 13:03:37','updated_at' => '2024-07-09 13:04:27'),
    array('id' => '50','created_by' => '2','from_id' => '1','to_id' => '14','title' => 'عدادات المياه','content' => NULL,'notes' => 'عناية مدير إدارة تشغيل وصيانة الشبكات المائية 
  202459510000029','created_at' => '2024-07-09 13:06:02','updated_at' => '2024-07-09 13:06:40'),
    array('id' => '51','created_by' => '2','from_id' => '1','to_id' => '36','title' => 'PCW - List of users','content' => NULL,'notes' => 'بالطريق الرسمي
  20240650000039','created_at' => '2024-07-09 13:08:02','updated_at' => '2024-07-09 13:08:47'),
    array('id' => '52','created_by' => '2','from_id' => '1','to_id' => '3','title' => 'PCW - List of users','content' => NULL,'notes' => '20240650000046
  تم استلام ملاحظة من إدارة دراسات وبحوث المياه الجوفية علي نفس الصحيفة علي الكتاب نفسة 30-06-2024
  (ليس بالإمكان تذويدكم بأسماء مهندسين معنيين من الإدارة لمراجعة المستندات والمتابعة في الوقت الحالي وسوف نوافيكم لاحقا بأي مستجدات بهذا الخصوص )','created_at' => '2024-07-09 13:14:40','updated_at' => '2024-07-09 13:15:12'),
    array('id' => '53','created_by' => '2','from_id' => '1','to_id' => '37','title' => 'PCW - List of users','content' => NULL,'notes' => 'بالطريق الرسمي
  20240650000041
  تم استلام الرد من لإدارة الاعمال الكيماوية
  بتاريخ 30-06-2024
  20240650000041','created_at' => '2024-07-09 13:18:16','updated_at' => '2024-07-16 07:33:43'),
    array('id' => '54','created_by' => '2','from_id' => '1','to_id' => '33','title' => 'PCW - List of users','content' => NULL,'notes' => 'بالطريق الرسمي
  20240650000044
  
  تم استلام رد إدارة تشغيل وصيانة المنشآت
  بتاريخ 30-06-2024
  20240650000044','created_at' => '2024-07-09 13:19:27','updated_at' => '2024-07-16 07:32:25'),
    array('id' => '55','created_by' => '2','from_id' => '1','to_id' => '33','title' => 'عقد ورش عمل','content' => NULL,'notes' => '202459510000028
  26-06-2024
  
  وار رد إدارة تشغيل وصيانة المنشآت المائية يوم 27-06-2024
  ملاحظة الجهة : يرجى العلم تعذر الترشيح نظرا ً لضيق الوقت لذا يرجى إبلاغنا بوقت كافي حتى يتسنى لنا القيام بالازم','created_at' => '2024-07-09 13:28:11','updated_at' => '2024-07-09 13:29:58'),
    array('id' => '56','created_by' => '2','from_id' => '1','to_id' => '30','title' => 'PCW - List of users','content' => NULL,'notes' => 'بالطريق الرسمي
  20240650000037','created_at' => '2024-07-09 13:32:51','updated_at' => '2024-07-10 10:33:52'),
    array('id' => '57','created_by' => '2','from_id' => '1','to_id' => '19','title' => 'طلب بيانات بخصوص مشروع 2 و 5','content' => 'مرفق جدول يوضح بيانات محطات تحلية المياه بدولة الكويت القائمة والمستقبلية بالإضافة الي بيانات تفصيلية للمحطات القائمة كل على حدا','notes' => 'الحاق بالكتب أرقام 
  أ ت - 2024-706 بتاريخ  16-04-2024 ورقم 20240642000248 بتاريخ 16-04-2024
  ------------------------
  صادر برقم: 20240642000499
  بتاريخ: 26-06-2024','created_at' => '2024-07-09 13:57:49','updated_at' => '2024-11-29 02:13:59'),
    array('id' => '58','created_by' => '2','from_id' => '1','to_id' => '38','title' => 'PCW - List of users','content' => NULL,'notes' => 'بالطريق الرسمي
  20240650000038','created_at' => '2024-07-09 14:00:34','updated_at' => '2024-07-09 14:01:23'),
    array('id' => '59','created_by' => '2','from_id' => '1','to_id' => '39','title' => 'PCW - List of users','content' => NULL,'notes' => '20240650000042','created_at' => '2024-07-09 14:02:35','updated_at' => '2024-07-09 14:03:16'),
    array('id' => '60','created_by' => '2','from_id' => '1','to_id' => '24','title' => 'عقد ورش عمل','content' => NULL,'notes' => '202459510000027
  26-06-2024','created_at' => '2024-07-09 14:04:21','updated_at' => '2024-07-09 14:05:21'),
    array('id' => '61','created_by' => '2','from_id' => '1','to_id' => '40','title' => 'PCW - List of users','content' => NULL,'notes' => 'بالطريق الرسمي
  
  20240650000045','created_at' => '2024-07-10 07:36:14','updated_at' => '2024-07-10 07:36:50'),
    array('id' => '62','created_by' => '2','from_id' => '1','to_id' => '8','title' => 'الملحق التعديلي 1 للممارسه رقم 2 2021 2022','content' => NULL,'notes' => '20240643000483
  25-06-2024','created_at' => '2024-07-10 07:38:01','updated_at' => '2024-07-10 07:39:06'),
    array('id' => '63','created_by' => '2','from_id' => '1','to_id' => '41','title' => 'PCW - List of users','content' => NULL,'notes' => '20240650000048','created_at' => '2024-07-10 07:41:21','updated_at' => '2024-07-10 07:42:03'),
    array('id' => '64','created_by' => '2','from_id' => '1','to_id' => '5','title' => 'PCW - List of users','content' => NULL,'notes' => '20240650000049','created_at' => '2024-07-10 07:43:34','updated_at' => '2024-07-10 07:44:29'),
    array('id' => '65','created_by' => '2','from_id' => '1','to_id' => '2','title' => 'PCW - List of users','content' => NULL,'notes' => '20240650000050','created_at' => '2024-07-10 07:46:38','updated_at' => '2024-07-10 07:47:13'),
    array('id' => '66','created_by' => '2','from_id' => '1','to_id' => '4','title' => 'PCW - List of users','content' => NULL,'notes' => '20240650000051','created_at' => '2024-07-10 07:48:13','updated_at' => '2024-07-10 07:48:47'),
    array('id' => '67','created_by' => '2','from_id' => '1','to_id' => '21','title' => 'تمديد زيارة متعدد 6 أشهر - وائل مجدي عابدين سعدالدين','content' => NULL,'notes' => 'صادر برقم 20240642000480
  بتاريخ 24-06-2024
  
  صادر أيضا كتاب آخر برقم 20240650000054
  بتاريخ  01-07-2024','created_at' => '2024-07-10 07:49:54','updated_at' => '2024-07-10 07:50:58'),
    array('id' => '68','created_by' => '2','from_id' => '1','to_id' => '21','title' => 'طلب زيارة متعدد 6 أشهر - محمد صلاح ياسين سيد عناية','content' => NULL,'notes' => 'صادر برقم 20240642000479
  بتاريخ 24-06-2024
  
  صادر أيضا كتاب آخر برقم 20240650000055
  بتاريخ  01-07-2024','created_at' => '2024-07-10 07:51:42','updated_at' => '2024-07-10 08:08:42'),
    array('id' => '69','created_by' => '2','from_id' => '1','to_id' => '7','title' => 'مشروع ميزانية وزارة الكهرباء للسنتين الماليتين 2026/2027 - 2027/2028','content' => NULL,'notes' => 'و م م م - 2024-826
  بتاريخ 12-06-2024','created_at' => '2024-07-10 08:10:23','updated_at' => '2024-07-10 08:11:20'),
    array('id' => '70','created_by' => '2','from_id' => '1','to_id' => '19','title' => 'ملاحظات على Draft Inception Report Submission','content' => NULL,'notes' => NULL,'created_at' => '2024-07-10 08:12:04','updated_at' => '2024-07-10 08:12:55'),
    array('id' => '71','created_by' => '2','from_id' => '1','to_id' => '9','title' => 'إعداد الخطة التشغيلية السنوية 2024-2025','content' => NULL,'notes' => NULL,'created_at' => '2024-07-10 08:13:41','updated_at' => '2024-07-10 08:14:22'),
    array('id' => '72','created_by' => '2','from_id' => '1','to_id' => '8','title' => 'الملحق التعديلي رقم 2 للمناقصة رقم 45-2018/2019 - الدوحة','content' => NULL,'notes' => NULL,'created_at' => '2024-07-10 08:15:07','updated_at' => '2024-07-10 08:16:09'),
    array('id' => '73','created_by' => '2','from_id' => '1','to_id' => '8','title' => 'تمديد موعد الاغلاق للمناقصة وك م 45-20219/20218 الى 11-08-2024 بدلا من 30-06-2024','content' => NULL,'notes' => NULL,'created_at' => '2024-07-10 08:17:40','updated_at' => '2024-07-10 08:18:35'),
    array('id' => '74','created_by' => '2','from_id' => '1','to_id' => '7','title' => 'التقرير الشهري للمشاريع التابعة للادارة لشهر مايو 2024','content' => NULL,'notes' => NULL,'created_at' => '2024-07-10 08:20:08','updated_at' => '2024-07-10 08:26:05'),
    array('id' => '75','created_by' => '2','from_id' => '1','to_id' => '5','title' => 'الحاق بالكتاب رقم 20240643000354','content' => NULL,'notes' => NULL,'created_at' => '2024-07-10 08:27:14','updated_at' => '2024-07-10 08:49:44'),
    array('id' => '76','created_by' => '2','from_id' => '1','to_id' => '8','title' => 'دفعة الاعمال عن شهر مايو 2024','content' => NULL,'notes' => NULL,'created_at' => '2024-07-10 08:50:25','updated_at' => '2024-07-10 08:51:16'),
    array('id' => '77','created_by' => '2','from_id' => '1','to_id' => '18','title' => 'مشروع مدينة جنوب سعد العبدالله','content' => NULL,'notes' => '20240642000421','created_at' => '2024-07-10 08:52:07','updated_at' => '2024-07-10 08:53:30'),
    array('id' => '78','created_by' => '2','from_id' => '1','to_id' => '23','title' => 'Submittal of final response regarding bidders queries for Hawally','content' => NULL,'notes' => 'رقم الكتاب
  ات
  2024-955
  تاريخ
  21-05-2024','created_at' => '2024-07-10 09:20:46','updated_at' => '2024-07-10 09:21:34'),
    array('id' => '79','created_by' => '2','from_id' => '1','to_id' => '23','title' => 'Submittal of final response regarding bidders queries for Shuwaikh','content' => NULL,'notes' => NULL,'created_at' => '2024-07-10 09:22:08','updated_at' => '2024-07-10 09:23:27'),
    array('id' => '80','created_by' => '2','from_id' => '1','to_id' => '42','title' => 'جمع معلومات - MEW population data projection models for each 5 years periods up to 2040','content' => NULL,'notes' => '20240642000422','created_at' => '2024-07-10 09:24:53','updated_at' => '2024-07-10 09:26:10'),
    array('id' => '81','created_by' => '2','from_id' => '1','to_id' => '17','title' => 'Training Course No. 7 GIS Course','content' => NULL,'notes' => NULL,'created_at' => '2024-07-10 09:28:50','updated_at' => '2024-07-10 09:33:33'),
    array('id' => '82','created_by' => '2','from_id' => '1','to_id' => '19','title' => 'Project Initiation','content' => NULL,'notes' => NULL,'created_at' => '2024-07-10 09:33:25','updated_at' => '2024-07-10 09:34:15'),
    array('id' => '83','created_by' => '2','from_id' => '1','to_id' => '19','title' => 'إعداد التقرير البيئي والاجتماعي','content' => NULL,'notes' => NULL,'created_at' => '2024-07-10 09:35:01','updated_at' => '2024-07-10 09:36:39'),
    array('id' => '84','created_by' => '2','from_id' => '1','to_id' => '43','title' => 'إعفاء مرافق مريض - ليلى عبد الجليل راشد القلاف','content' => NULL,'notes' => NULL,'created_at' => '2024-07-10 09:37:56','updated_at' => '2024-07-10 09:38:27'),
    array('id' => '85','created_by' => '2','from_id' => '1','to_id' => '43','title' => 'دخول مستشفى - لجين يوسف محمد رئيس','content' => NULL,'notes' => NULL,'created_at' => '2024-07-10 09:39:08','updated_at' => '2024-07-10 09:39:51'),
    array('id' => '86','created_by' => '2','from_id' => '1','to_id' => '7','title' => 'توجيهات سمو رئيس مجلس الوزراء لمعالي الوزراء في الاجتماع الأول لمجلس الوزراء','content' => NULL,'notes' => 'ات
  2024-1026','created_at' => '2024-07-10 09:40:51','updated_at' => '2024-07-10 09:41:37'),
    array('id' => '87','created_by' => '2','from_id' => '1','to_id' => '33','title' => 'تقرير الزيارة الموقعية بصالة ضخ مجمع مياه الدوحة','content' => NULL,'notes' => 'ات
  2024-1010','created_at' => '2024-07-10 09:42:30','updated_at' => '2024-07-10 09:44:47'),
    array('id' => '88','created_by' => '2','from_id' => '1','to_id' => '19','title' => 'معدل استهلاك المياه','content' => NULL,'notes' => 'ات
  2024-1007','created_at' => '2024-07-10 09:45:29','updated_at' => '2024-07-10 09:47:38'),
    array('id' => '89','created_by' => '2','from_id' => '1','to_id' => '8','title' => 'مدة تنفيذ أعمال المشروع','content' => NULL,'notes' => 'ا ت
  2024-1001
  
  20240642000387','created_at' => '2024-07-10 09:50:11','updated_at' => '2024-07-10 09:52:05'),
    array('id' => '90','created_by' => '2','from_id' => '1','to_id' => '13','title' => 'بخصوص مشروع 5 و 2 - اجتماع يوم 07/05/2024 - طلب بيانات','content' => 'مرفق CD','notes' => 'رقم الكتاب أ ت- 2024-976
  بتاريخ 22-05-2024','created_at' => '2024-07-10 09:58:18','updated_at' => '2024-07-10 10:02:54'),
    array('id' => '91','created_by' => '2','from_id' => '1','to_id' => '33','title' => 'اعتماد محضري اجتماع 15-01-2024 و 24-01-2024','content' => NULL,'notes' => NULL,'created_at' => '2024-07-10 10:16:40','updated_at' => '2024-07-10 10:17:04'),
    array('id' => '92','created_by' => '2','from_id' => '1','to_id' => '37','title' => 'المواصفات الخاصة بمباني الأعمال الكيماوية','content' => NULL,'notes' => 'ا ت 2024-979
  تاريخ
  22-05-2024
  
  تم استلام الرد من الاعمال الكيماوية برقم
  20240059000314','created_at' => '2024-07-10 10:18:01','updated_at' => '2024-07-10 10:19:38'),
    array('id' => '93','created_by' => '2','from_id' => '1','to_id' => '24','title' => 'طلب نسخة عن دراسة التحديات التي تواجه الإدارة بقصد تحسين كفاءة الشبكة','content' => NULL,'notes' => 'رقم الكتاب
  20240643000388
  تاريخ
  26-05-2024','created_at' => '2024-07-10 10:22:57','updated_at' => '2024-07-10 10:24:02'),
    array('id' => '94','created_by' => '2','from_id' => '1','to_id' => '23','title' => 'Submittal of Final Responses Regarding Bidders Queries for Hawally','content' => NULL,'notes' => NULL,'created_at' => '2024-07-10 10:24:39','updated_at' => '2024-07-10 10:25:14'),
    array('id' => '95','created_by' => '2','from_id' => '1','to_id' => '33','title' => 'طلب زيارة ميدانية الي مجمع الدوحة يوم الخميس 23-05-2024 الساعة 9 صباحا','content' => NULL,'notes' => 'ردا علي الكتاب رقم: 20240060000186 الوارد بتاريخ:12/05/2024','created_at' => '2024-07-10 10:26:28','updated_at' => '2024-07-10 10:27:03'),
    array('id' => '96','created_by' => '2','from_id' => '1','to_id' => '51','title' => 'اسم المستخدم للمسؤول Admin','content' => NULL,'notes' => NULL,'created_at' => '2024-07-10 10:28:16','updated_at' => '2024-12-10 09:12:46'),
    array('id' => '97','created_by' => '2','from_id' => '1','to_id' => '13','title' => 'بخصوص مشروع 5 و 2 - اجتماع يوم 07/05/2024','content' => NULL,'notes' => 'رقم الكتاب: 20240643000364','created_at' => '2024-07-10 10:35:49','updated_at' => '2024-07-10 10:39:18'),
    array('id' => '98','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'طلب تجديد زيارة متعددة - صموئيل سمعان ويصا حسب الله','content' => NULL,'notes' => 'K23165-0100D/24/0499
  04-07-2024','created_at' => '2024-07-10 10:55:18','updated_at' => '2024-07-10 13:51:12'),
    array('id' => '99','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'طلب تجديد زيارة متعددة - صموئيل سمعان ويصا حسب الله','content' => NULL,'notes' => 'K23165-0100D/24/0500
  04-07-2024','created_at' => '2024-07-10 10:58:54','updated_at' => '2024-07-10 13:50:56'),
    array('id' => '100','created_by' => '2','from_id' => '1','to_id' => '24','title' => 'عدادات المياه','content' => NULL,'notes' => NULL,'created_at' => '2024-07-10 11:08:04','updated_at' => '2024-07-10 11:09:27'),
    array('id' => '101','created_by' => '2','from_id' => '1','to_id' => '24','title' => 'عقد اجتماع بتاريخ 13-05-2024 - بخصوص RFC-003','content' => NULL,'notes' => 'رقم الكتاب
  20240643000345
  
  
  تاريخ الكتاب
  12-05-2024','created_at' => '2024-07-10 11:11:19','updated_at' => '2024-07-10 11:13:02'),
    array('id' => '102','created_by' => '2','from_id' => '1','to_id' => '24','title' => 'Draft Inception Report Submission','content' => 'مرفق CD','notes' => 'رقم الكتاب
  20240643000334
  ا ت 2024-876','created_at' => '2024-07-10 11:16:58','updated_at' => '2024-07-10 11:20:50'),
    array('id' => '103','created_by' => '2','from_id' => '1','to_id' => '5','title' => 'الاجتماع المنعقد بتاريخ 02/05/2024','content' => NULL,'notes' => 'رقم الكتاب
  20240643000354','created_at' => '2024-07-10 11:22:27','updated_at' => '2024-07-10 11:23:26'),
    array('id' => '104','created_by' => '2','from_id' => '1','to_id' => '19','title' => 'بخصوص اجتماع 29/04/2024','content' => NULL,'notes' => '2','created_at' => '2024-07-10 11:26:01','updated_at' => '2024-07-10 11:32:46'),
    array('id' => '105','created_by' => '2','from_id' => '1','to_id' => '8','title' => 'دفعة الاعمال عن شهر ابريل 2024','content' => NULL,'notes' => 'ا ت 2024-895','created_at' => '2024-07-10 11:33:43','updated_at' => '2024-07-10 11:38:52'),
    array('id' => '106','created_by' => '2','from_id' => '1','to_id' => '19','title' => 'مشكلة في ملفات مخططات Hydraulic Models','content' => NULL,'notes' => NULL,'created_at' => '2024-07-10 11:40:25','updated_at' => '2024-11-29 02:02:26'),
    array('id' => '107','created_by' => '2','from_id' => '1','to_id' => '19','title' => 'البرنامج الزمني للمشروع','content' => NULL,'notes' => 'و ك م 15-1594','created_at' => '2024-07-10 11:42:07','updated_at' => '2024-07-10 11:43:38'),
    array('id' => '108','created_by' => '2','from_id' => '1','to_id' => '7','title' => 'التقرير الشهري للمشاريع التابعة للإادارة لشهر ابريل 2024','content' => NULL,'notes' => 'رقم تلكتاب
  20240643000315','created_at' => '2024-07-10 11:44:18','updated_at' => '2024-09-03 05:09:43'),
    array('id' => '109','created_by' => '2','from_id' => '1','to_id' => '19','title' => 'Project Collaboration Website PCW','content' => 'مرفق نسخة من سياسة تنظيم حماية خصوصية البيانات CITRA','notes' => 'رقم الكتاب
  و ك م 15-1609','created_at' => '2024-07-10 11:47:01','updated_at' => '2024-07-10 11:48:40'),
    array('id' => '110','created_by' => '2','from_id' => '1','to_id' => '19','title' => 'مسؤولية الاستشاري مراجعة الجهات المعنية والحصول على المعلومات والموافقات والتراخيص اللازمة','content' => NULL,'notes' => '881-2024
  20240648000384','created_at' => '2024-07-10 11:49:38','updated_at' => '2024-07-10 11:51:36'),
    array('id' => '111','created_by' => '2','from_id' => '1','to_id' => '37','title' => 'Draft Inception Report Submission','content' => 'مرفق CD','notes' => 'رقم الكتاب
  20240643000337
  
  ا ت 2024-877','created_at' => '2024-07-10 11:52:42','updated_at' => '2024-07-10 11:54:22'),
    array('id' => '112','created_by' => '2','from_id' => '1','to_id' => '33','title' => 'Draft Inception Report Submission','content' => 'مرفق CD','notes' => 'رقم الكتاب
  20240643000333
  ا ت 2024-882','created_at' => '2024-07-10 11:56:04','updated_at' => '2024-07-10 11:57:26'),
    array('id' => '113','created_by' => '2','from_id' => '1','to_id' => '44','title' => 'طلب المؤسسة العامة للرعاية السكنية توفير الخدمات الرئيسية لمشروع الخدمات الرئيسية لمشروع شرق مدينة صباح الأحمد السكنية','content' => NULL,'notes' => NULL,'created_at' => '2024-07-10 12:03:37','updated_at' => '2024-07-10 12:04:38'),
    array('id' => '114','created_by' => '2','from_id' => '1','to_id' => '14','title' => 'طلب بيانات','content' => NULL,'notes' => 'عناية مدير إدارة تشغيل وصيانة الشبكات المائية 
  
  تم اصدار الكتاب برقم
  20240643000305
  بتاريخ
  06-05-2024','created_at' => '2024-07-10 12:07:47','updated_at' => '2024-07-10 12:10:17'),
    array('id' => '115','created_by' => '2','from_id' => '1','to_id' => '37','title' => 'محضر الاجتماع المنعقد بتاريخ 29/04/2024','content' => NULL,'notes' => 'ردا على الكتاب رقم
  20240650000029
  تم اصدار الكتاب برقم 
  20240643000308
  بتاريخ
  06-05-2024','created_at' => '2024-07-10 12:13:52','updated_at' => '2024-07-10 12:15:15'),
    array('id' => '116','created_by' => '2','from_id' => '1','to_id' => '8','title' => 'تمديد المناقصة 76-2018/2019
  ','content' => NULL,'notes' => 'بخصوص طلب تمديد موعد إغلاق المناقصة المذكورة ليصبح 14/07/2024 بدلا من 12/05/2024. فإننا نود الإفادة بأن طلب تمديد المناقصة آنفة الذكر يرجع الى إعداد الملحق التعديلي رقم (2).
  
  تم اصدار الكتاب برقم 
  20240643000304
  بتاريخ
  06-05-2024','created_at' => '2024-07-10 12:16:51','updated_at' => '2024-07-10 12:18:22'),
    array('id' => '117','created_by' => '2','from_id' => '1','to_id' => '18','title' => 'طلب عقد اجتماع بخصوص مشاريع أرقام 5 و 2','content' => NULL,'notes' => 'رقم الكتاب
  20240643000290
  تاريخ الكتاب
  02-05-2024','created_at' => '2024-07-10 12:20:46','updated_at' => '2024-07-10 12:23:45'),
    array('id' => '118','created_by' => '2','from_id' => '1','to_id' => '5','title' => 'Request for Clarification RFC-004','content' => NULL,'notes' => 'رقم الكتاب
  2024-774
  تاريخ الكتاب
  25-04-2024','created_at' => '2024-07-10 12:51:33','updated_at' => '2024-07-10 12:53:19'),
    array('id' => '119','created_by' => '2','from_id' => '1','to_id' => '45','title' => 'نموذج طلب غربلة للمشروع','content' => 'مرفق CD مع الكتاب','notes' => 'مرفق CD مع الكتاب
  
  رقم الكتاب
  و ك م
  1476-15','created_at' => '2024-07-10 13:02:30','updated_at' => '2024-11-29 02:00:16'),
    array('id' => '120','created_by' => '2','from_id' => '1','to_id' => '37','title' => 'الاطلاع علي محضر الاجتماع المنعقد بتاريخ 29-04-2024 بعد التعديل','content' => NULL,'notes' => NULL,'created_at' => '2024-07-10 13:16:32','updated_at' => '2024-07-15 09:56:11'),
    array('id' => '121','created_by' => '2','from_id' => '1','to_id' => '51','title' => 'استفسارات حول التراسل الالكتروني','content' => NULL,'notes' => NULL,'created_at' => '2024-07-10 13:20:00','updated_at' => '2024-12-10 09:12:38'),
    array('id' => '122','created_by' => '2','from_id' => '1','to_id' => '51','title' => 'تمديد نقاط انترنت','content' => NULL,'notes' => NULL,'created_at' => '2024-07-10 13:21:46','updated_at' => '2024-12-10 09:12:29'),
    array('id' => '123','created_by' => '2','from_id' => '1','to_id' => '19','title' => 'الرد على الاستفسارات المقدمة من قبل المستشار - مشروع رقم 5 و مشروع رقم 8','content' => NULL,'notes' => NULL,'created_at' => '2024-07-10 13:36:42','updated_at' => '2024-07-10 13:38:15'),
    array('id' => '124','created_by' => '2','from_id' => '1','to_id' => '19','title' => 'المرشحين لحضور الدورات التدريبية رقم 5 و 7','content' => NULL,'notes' => 'رقم الكتاب
  2024-790
  تاريخ الكتاب
  01-05-2024','created_at' => '2024-07-10 13:39:00','updated_at' => '2024-07-10 13:41:47'),
    array('id' => '125','created_by' => '2','from_id' => '1','to_id' => '19','title' => 'انهاء خدمات Jacob','content' => NULL,'notes' => 'رقم الكتاب
  2024-794
  تاريخ
  29-04-2024','created_at' => '2024-07-10 13:44:11','updated_at' => '2024-07-10 13:45:24'),
    array('id' => '126','created_by' => '2','from_id' => '1','to_id' => '7','title' => 'عقد اجتماع مع شركة انسيابي بالتعاون مع شركة هواوي','content' => NULL,'notes' => '2024063000282
  01-05-2024
  2024-789','created_at' => '2024-07-10 13:46:26','updated_at' => '2024-07-10 13:47:29'),
    array('id' => '127','created_by' => '2','from_id' => '1','to_id' => '37','title' => 'مسودة التقرير الأولي للمشروع Master Plan Interim Report','content' => 'مرفق CD','notes' => '20240650000033
  01-05-2024
  2024-784','created_at' => '2024-07-10 13:48:10','updated_at' => '2024-07-10 13:51:21'),
    array('id' => '128','created_by' => '2','from_id' => '1','to_id' => '24','title' => 'مسودة التقرير الأولي للمشروع Master Plan Interim Report','content' => 'مرفق CD','notes' => '20240650000032
  01-05-2024
  2024-786','created_at' => '2024-07-10 13:51:05','updated_at' => '2024-07-10 13:53:08'),
    array('id' => '129','created_by' => '2','from_id' => '1','to_id' => '33','title' => 'مسودة التقرير الأولي للمشروع Master Plan Interim Report','content' => 'مرفق CD','notes' => '20240650000036
  01-05-2024
  2024-785','created_at' => '2024-07-11 07:36:07','updated_at' => '2024-07-11 07:38:01'),
    array('id' => '130','created_by' => '2','from_id' => '1','to_id' => '2','title' => 'مسودة التقرير الأولي للمشروع Master Plan Interim Report','content' => 'مرفق CD','notes' => 'ا ت - 2024-783
  20240650000034
  01-05-2024','created_at' => '2024-07-11 07:39:20','updated_at' => '2024-11-29 02:02:47'),
    array('id' => '131','created_by' => '2','from_id' => '1','to_id' => '9','title' => 'المرشحين بحضور ورشة تعريفية بخطة التنمية السنوية (2025/2026)','content' => NULL,'notes' => 'DC-24-0070
  
  20240643000281
  01-05-2024','created_at' => '2024-07-11 07:44:44','updated_at' => '2024-07-11 07:45:58'),
    array('id' => '132','created_by' => '2','from_id' => '1','to_id' => '19','title' => 'بداية مشروع 2 NEW WAFRA WDC 
  Project Initiation On 01/05/2024','content' => NULL,'notes' => NULL,'created_at' => '2024-07-11 07:59:50','updated_at' => '2024-07-11 08:00:33'),
    array('id' => '133','created_by' => '2','from_id' => '1','to_id' => '37','title' => 'حضور الاجتماع المزمع عقدة يوم الاثنين الموافق 29-04-2024 الساعة 9 صباحا','content' => NULL,'notes' => 'الاجتماع بخصوص 
  Request for Clarification
  
  رقم الكتاب
  20240650000031
  تاريخ الكتاب
  25-04-2024','created_at' => '2024-07-11 08:02:14','updated_at' => '2024-07-11 08:03:30'),
    array('id' => '134','created_by' => '2','from_id' => '1','to_id' => '46','title' => 'طلب كتاب المؤسسة العامة للرعاية السكنية رقم (1/9-203018) المؤرخ 16-11-2023 حتى نتمكن من الرد على تفسير بعض المواد القانونية في قوانين الرعاية السكنية بخصوص النية التحتية والبنية الأساسية والخدمات الرئيسية','content' => NULL,'notes' => NULL,'created_at' => '2024-07-11 08:05:53','updated_at' => '2024-07-11 08:08:42'),
    array('id' => '135','created_by' => '2','from_id' => '1','to_id' => '5','title' => 'الدورة التدريبية رقم 5 و 7','content' => NULL,'notes' => 'تم اصدار الكتاب
  رقم الكتاب
  20240650000030
  تاريخ
  18-04-2024','created_at' => '2024-07-11 08:10:21','updated_at' => '2024-07-11 08:11:26'),
    array('id' => '136','created_by' => '2','from_id' => '1','to_id' => '19','title' => 'Project Collaboration Website PCW','content' => NULL,'notes' => 'https://workflow.mew.gov.kw/Show.aspx?ID=%2bvgxUPAV9Z0%3d&DepID=G8LIsOmaKi8%3d&Cur=d%2bAxcdGg7vE%3d&Pageindex=z86FdVhj8Dg%3d
  رقم داخلي
  2024-449-و م م م','created_at' => '2024-07-11 08:12:50','updated_at' => '2024-07-11 08:14:55'),
    array('id' => '137','created_by' => '2','from_id' => '1','to_id' => '37','title' => 'الاجتماع المنعقد بتاريخ 28-03-2024','content' => NULL,'notes' => 'تم اصدار الكتاب
  رقم الكتاب
  20240650000029
  تاريخ
  18-04-2024','created_at' => '2024-07-11 08:33:05','updated_at' => '2024-07-11 08:34:21'),
    array('id' => '138','created_by' => '2','from_id' => '1','to_id' => '41','title' => 'الدورة التدريبية رقم 5 و 7','content' => NULL,'notes' => 'تم اصدار الكتاب
  رقم الكتاب
  20240650000028
  تاريخ
  18-04-2024','created_at' => '2024-07-11 08:39:13','updated_at' => '2024-07-11 08:40:05'),
    array('id' => '139','created_by' => '2','from_id' => '1','to_id' => '8','title' => 'دفعة الاعمال عن شهر مارس 2024','content' => NULL,'notes' => 'رقم الكتاب
  و.م.م.م. 439-2024
  تاريخ الكتاب
  21-04-2024','created_at' => '2024-07-11 08:40:45','updated_at' => '2024-07-11 08:42:06'),
    array('id' => '140','created_by' => '2','from_id' => '1','to_id' => '19','title' => 'الاجتماع المنعقد بتاريخ 28-03-2024 و مصفوفة المراسلات','content' => NULL,'notes' => 'اعتماد محضر الاجتماع المنعقد بتاريخ 28-03-2024 
  و اعتماد مصفوفة المراسلات
  Correspondence Matrix','created_at' => '2024-07-11 08:43:00','updated_at' => '2024-07-11 08:43:56'),
    array('id' => '141','created_by' => '2','from_id' => '1','to_id' => '33','title' => 'الاجتماع المنعقد بتاريخ 26-03-2024 للمراجعة وابداء الرأي - مشروع رقم 5','content' => NULL,'notes' => '20240650000027','created_at' => '2024-07-11 08:44:55','updated_at' => '2024-07-11 08:46:00'),
    array('id' => '142','created_by' => '2','from_id' => '1','to_id' => '8','title' => 'كتاب اقفال السنة المالية 2023/2024','content' => NULL,'notes' => NULL,'created_at' => '2024-07-11 08:46:50','updated_at' => '2024-07-11 08:47:45'),
    array('id' => '143','created_by' => '2','from_id' => '1','to_id' => '19','title' => 'اعتماد البرنامج الزمني','content' => NULL,'notes' => NULL,'created_at' => '2024-07-11 08:48:28','updated_at' => '2024-07-11 08:49:06'),
    array('id' => '144','created_by' => '2','from_id' => '1','to_id' => '19','title' => 'نسخة من كتاب قطاع محطات القوى الكهربائية وتقطير المياه والذي تضمن البيانات المطلوبة لمحطات تحلية المياه من حيث مواصفات المياه المنتجة ومعدل التدفق والضغط','content' => NULL,'notes' => 'رقم الكتاب
  20240642000248
  تاريخ الكتاب
  16-04-2024','created_at' => '2024-07-11 08:50:38','updated_at' => '2024-07-11 08:51:23'),
    array('id' => '145','created_by' => '2','from_id' => '1','to_id' => '7','title' => 'الرد على كتاب الية الحوكمة لوزراة الكهرباء والماء والطاقة المتجددة - تابع لمراقبة تصميم شبكات المياه واعداد المناقصات','content' => NULL,'notes' => NULL,'created_at' => '2024-07-11 08:52:38','updated_at' => '2024-07-11 08:52:53'),
    array('id' => '146','created_by' => '2','from_id' => '1','to_id' => '7','title' => 'مناقصة رقم 5975 بخصوص مخطط الموقع العام ومكاتب الوزارة بالموقع - تابع لمراقبة تصميم شبكات المياه واعداد المناقصات','content' => NULL,'notes' => NULL,'created_at' => '2024-07-11 08:54:21','updated_at' => '2024-07-11 08:54:35'),
    array('id' => '147','created_by' => '2','from_id' => '1','to_id' => '27','title' => 'بخصوص كتاب شركة المقاولون العرب','content' => NULL,'notes' => NULL,'created_at' => '2024-07-11 09:36:11','updated_at' => '2024-07-18 13:08:55'),
    array('id' => '148','created_by' => '2','from_id' => '1','to_id' => '27','title' => 'بخصوص كتاب شركة المجموعة المشتركة للمقاولات','content' => NULL,'notes' => NULL,'created_at' => '2024-07-11 09:39:12','updated_at' => '2024-07-18 13:16:07'),
    array('id' => '149','created_by' => '2','from_id' => '1','to_id' => '24','title' => 'بخصوص ورش العمل المنعقدة بالتواريخ التالية 30/06/2024 , 01/07/2024 , 02/07/2024 , 03/07/2024 ,04/07/2024','content' => NULL,'notes' => NULL,'created_at' => '2024-07-11 09:49:59','updated_at' => '2024-11-29 02:03:03'),
    array('id' => '150','created_by' => '2','from_id' => '1','to_id' => '2','title' => 'Interim Submission B1 (I.S.B1) Submission','content' => NULL,'notes' => NULL,'created_at' => '2024-07-11 09:56:17','updated_at' => '2024-11-29 01:20:58'),
    array('id' => '151','created_by' => '2','from_id' => '1','to_id' => '39','title' => 'Interim Submission B1 (I.S.B1) Submission','content' => NULL,'notes' => NULL,'created_at' => '2024-07-11 09:57:07','updated_at' => '2024-11-29 01:20:55'),
    array('id' => '152','created_by' => '1','from_id' => '1','to_id' => '24','title' => 'Interim Submission B1 (I.S.B1) Submission','content' => NULL,'notes' => NULL,'created_at' => '2024-07-11 09:57:34','updated_at' => '2024-07-30 11:12:41'),
    array('id' => '153','created_by' => '1','from_id' => '1','to_id' => '33','title' => 'Interim Submission B1 (I.S.B1) Submission','content' => NULL,'notes' => NULL,'created_at' => '2024-07-11 09:58:02','updated_at' => '2024-07-30 11:12:27'),
    array('id' => '154','created_by' => '2','from_id' => '1','to_id' => '37','title' => 'Interim Submission B1 (I.S.B1) Submission','content' => NULL,'notes' => NULL,'created_at' => '2024-07-11 09:58:32','updated_at' => '2024-07-15 10:00:01'),
    array('id' => '155','created_by' => '2','from_id' => '1','to_id' => '7','title' => 'كتاب الرد على الاستفسارات المقدمة من قبل المستشار ','content' => NULL,'notes' => 'تم اصدار الكتاب عن طريق هشام برقم Workflow
  20240643000241
  بتاريخ
  07-04-2024','created_at' => '2024-07-11 10:03:55','updated_at' => '2024-07-11 10:11:13'),
    array('id' => '156','created_by' => '2','from_id' => '1','to_id' => '7','title' => 'مشروع الاحتياجات الفنية في مجال نظم وتقنية المعلومات','content' => NULL,'notes' => 'تم اصدار الكتاب عن طريق هشام برقم Workflow
  20240643000240
  تاريخ
  07-04-2024','created_at' => '2024-07-11 10:11:37','updated_at' => '2024-07-11 10:13:02'),
    array('id' => '157','created_by' => '2','from_id' => '1','to_id' => '19','title' => 'اعتماد البرنامج الزمني المحدث','content' => NULL,'notes' => NULL,'created_at' => '2024-07-11 12:01:53','updated_at' => '2024-07-28 14:06:31'),
    array('id' => '158','created_by' => '2','from_id' => '1','to_id' => '21','title' => 'طلب تمديد زيارة تجارية لمدة 6 أشهر - لمهندس محمد علي محمود الكردي','content' => NULL,'notes' => NULL,'created_at' => '2024-07-15 08:06:32','updated_at' => '2024-07-17 11:50:24'),
    array('id' => '159','created_by' => '2','from_id' => '1','to_id' => '19','title' => 'اعتماد البرنامج الزمنى المحدث','content' => NULL,'notes' => NULL,'created_at' => '2024-07-15 12:48:47','updated_at' => '2024-07-28 14:04:50'),
    array('id' => '160','created_by' => '2','from_id' => '1','to_id' => '19','title' => 'ملاحظات على Monthly Progress Report No. 5','content' => NULL,'notes' => NULL,'created_at' => '2024-07-15 12:52:09','updated_at' => '2024-07-29 12:11:44'),
    array('id' => '161','created_by' => '2','from_id' => '47','to_id' => '1','title' => 'طلب ايصال المياه العذبة للقسيمة رقم 127','content' => NULL,'notes' => 'م خ 07-2024/10937/02','created_at' => '2024-07-16 09:59:11','updated_at' => '2024-07-18 10:06:04'),
    array('id' => '162','created_by' => '2','from_id' => '47','to_id' => '1','title' => 'طلب ايصال المياه العذبة للقسيمة رقم 126','content' => NULL,'notes' => '07-2024/10937/01/ م خ','created_at' => '2024-07-16 10:05:24','updated_at' => '2024-07-18 10:05:44'),
    array('id' => '163','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'عدد 2 نسخة أصلية من محضر الاجتماع المنعقد بتاريخ 29-01-2024 مع إدارة الأعمال الكيماوية','content' => NULL,'notes' => 'K23165-0108D/24/0511
  11-07-2024
  
  لم يتم استلام الأصل','created_at' => '2024-07-16 10:07:54','updated_at' => '2024-11-29 02:03:43'),
    array('id' => '164','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'طلب تجديد زيارة متعددة - محمد علي محمود الكردي','content' => NULL,'notes' => 'K23165-0100D/24/0517
  11-07-2024','created_at' => '2024-07-16 10:31:57','updated_at' => '2024-07-21 08:31:39'),
    array('id' => '165','created_by' => '2','from_id' => '1','to_id' => '38','title' => 'الحاق PCW - List of users','content' => NULL,'notes' => '20240650000038','created_at' => '2024-07-16 11:09:17','updated_at' => '2024-07-17 14:25:37'),
    array('id' => '166','created_by' => '2','from_id' => '1','to_id' => '36','title' => 'الحاق PCW - List of users','content' => NULL,'notes' => '20240650000039','created_at' => '2024-07-16 11:10:10','updated_at' => '2024-11-15 10:54:10'),
    array('id' => '167','created_by' => '2','from_id' => '1','to_id' => '39','title' => 'الحاق PCW - List of users','content' => NULL,'notes' => '20240650000042','created_at' => '2024-07-16 11:10:52','updated_at' => '2024-07-29 11:43:18'),
    array('id' => '168','created_by' => '2','from_id' => '1','to_id' => '40','title' => 'الحاق PCW - List of users','content' => NULL,'notes' => '20240650000045','created_at' => '2024-07-16 11:11:34','updated_at' => '2024-07-29 10:38:33'),
    array('id' => '169','created_by' => '2','from_id' => '1','to_id' => '30','title' => 'الحاق PCW - List of users','content' => NULL,'notes' => 'الحاقا بالكتاب رقم:
  20240650000037','created_at' => '2024-07-16 11:12:13','updated_at' => '2024-07-22 07:15:58'),
    array('id' => '170','created_by' => '2','from_id' => '1','to_id' => '4','title' => 'الحاق PCW - List of users','content' => NULL,'notes' => '20240650000051','created_at' => '2024-07-16 11:12:48','updated_at' => '2024-07-17 14:18:15'),
    array('id' => '171','created_by' => '2','from_id' => '1','to_id' => '5','title' => 'الحاق PCW - List of users','content' => NULL,'notes' => '20240650000049','created_at' => '2024-07-16 11:13:26','updated_at' => '2024-07-28 13:58:41'),
    array('id' => '173','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'عدد 2 نسخة أصلية من محضر الاجتماع المنعقد بتارخ 10-01-2024 مع إدارة تشغيل وصيانة مشاريع الشبكات المائية','content' => NULL,'notes' => 'K23165-0108D/24/0509
  11-07-2024','created_at' => '2024-07-16 11:36:08','updated_at' => '2024-07-21 08:31:33'),
    array('id' => '174','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'عدد 2 نسخة أصلية من محضر الاجتماع المنعقد في تمام الساعة 9:00 صباحا  بتاريخ 04-06-2024 بخصوص (PCW Presentation Workshop)','content' => NULL,'notes' => 'K23165-0100D/24/0513
  11-07-2024','created_at' => '2024-07-16 11:40:01','updated_at' => '2024-07-21 08:31:27'),
    array('id' => '175','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'عدد 2 نسخة أصلية من محضر الاجتماع المنعقد بتاريخ 31-01-2024 مع إدارة انتاج المياه الجوفية','content' => NULL,'notes' => 'K23165-0108D/24/0510
  11-07-2024','created_at' => '2024-07-16 11:42:09','updated_at' => '2024-07-21 08:31:19'),
    array('id' => '176','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'البرنامج الزمنى للمشروع (للاعتماد)','content' => NULL,'notes' => 'K23165-0100D/24/0515
  11-07-2024','created_at' => '2024-07-16 11:45:34','updated_at' => '2024-07-21 08:31:13'),
    array('id' => '177','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'Concept Design Report Presentation (3 Alternatives) to MEWRE -- Phase 1','content' => 'مجلد + مخطط','notes' => 'K23165-0106D/24/0525
  15-07-2024','created_at' => '2024-07-18 08:21:48','updated_at' => '2024-07-21 08:31:08'),
    array('id' => '178','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'عدد 2 نسخة أصلية من محضر الاجتماع المنعقد بتاريخ 09-06-2024 الساعة 9:00 صباحا','content' => NULL,'notes' => 'K23165-0100D/24/0518
  14-07-2024','created_at' => '2024-07-18 08:25:04','updated_at' => '2024-07-21 08:31:02'),
    array('id' => '179','created_by' => '1','from_id' => '1','to_id' => '19','title' => 'جمع بيانات','content' => NULL,'notes' => 'مرفق رد الهيئة العامة لشئون الزراعة والثروة السمكية','created_at' => '2024-07-21 12:49:51','updated_at' => '2024-11-29 02:04:34'),
    array('id' => '180','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'Concept Design Cost Estimate Report (3 Alternatives)','content' => NULL,'notes' => 'K23165-0106D/24/0502','created_at' => '2024-07-22 07:27:28','updated_at' => '2024-07-22 07:27:59'),
    array('id' => '181','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'Projects - Training Course No.1 (Structural Design)','content' => NULL,'notes' => 'K23165-0100D/24/0501','created_at' => '2024-07-22 07:28:58','updated_at' => '2024-07-22 07:29:24'),
    array('id' => '182','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'Course 8: New Construction Technology (BIM)','content' => NULL,'notes' => 'K23165-0100D/24/0494','created_at' => '2024-07-22 07:35:16','updated_at' => '2024-07-22 07:35:45'),
    array('id' => '183','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'Reimbursable Package Invoice No. 7 - June 2024 - فاتورة يونيو 2024 - فاتورة رقم 7','content' => NULL,'notes' => 'K23165-0200D/24/0493
  02-07-2024','created_at' => '2024-07-22 07:42:34','updated_at' => '2024-07-22 07:43:20'),
    array('id' => '184','created_by' => '2','from_id' => '23','to_id' => '1','title' => ' إعادة  تسليم الردود النهائية بخصوص استفسارات المناقصين','content' => 'مرفق عدد 2 CD
  cd حولي لايعمل','notes' => NULL,'created_at' => '2024-07-22 07:44:21','updated_at' => '2024-07-22 07:44:48'),
    array('id' => '185','created_by' => '2','from_id' => '8','to_id' => '1','title' => 'بخصوص الممارسة رقم: و ك م/2-2021-2022','content' => 'مرفق CD','notes' => 'و.م.ش.م/366
  ','created_at' => '2024-07-22 07:45:43','updated_at' => '2024-07-22 07:46:20'),
    array('id' => '186','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'Final Inception Report Submission','content' => 'مرفق 2 نسخة ورقية و 5 نسخ الكترونية','notes' => 'K23165-0108d/24/0487
  ','created_at' => '2024-07-22 07:47:04','updated_at' => '2024-08-01 09:36:13'),
    array('id' => '187','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'Revised Schedule','content' => NULL,'notes' => NULL,'created_at' => '2024-07-22 07:48:08','updated_at' => '2024-07-22 07:49:22'),
    array('id' => '188','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'تمديد زيارة متعددة - وائل مجدي عابدين سعد الدين','content' => NULL,'notes' => 'K23165-0100D/24/0452
  20-06-2024','created_at' => '2024-07-22 07:50:26','updated_at' => '2024-07-22 07:51:00'),
    array('id' => '189','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'طلب زيارة متعددة - محمد صلاح ياسين سيد عناية','content' => NULL,'notes' => 'K23165-0100D/24/0454
  20-06-2024','created_at' => '2024-07-22 07:51:48','updated_at' => '2024-07-22 07:52:16'),
    array('id' => '190','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'Tie-in Points - Irrigation Network','content' => NULL,'notes' => 'K23165-0100D/24/0482
  26-06-2024','created_at' => '2024-07-22 07:53:23','updated_at' => '2024-07-22 07:53:58'),
    array('id' => '191','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'Revised Schedule','content' => NULL,'notes' => 'K23165-0100D/24/0483
  26-06-2024','created_at' => '2024-07-22 07:54:52','updated_at' => '2024-07-22 07:55:18'),
    array('id' => '192','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'Submission of Concept Design (3 Alternatives) Report Phase 1','content' => NULL,'notes' => 'K23165/0106D/24/0484','created_at' => '2024-07-22 07:56:05','updated_at' => '2024-07-22 07:56:49'),
    array('id' => '193','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'عدد 2 نسخة اصلية من محضر اجتماع 27-03-2024','content' => NULL,'notes' => 'K23165-0105D-0105D/24/0480
  27-06-2024','created_at' => '2024-07-22 07:57:43','updated_at' => '2024-07-22 07:58:33'),
    array('id' => '194','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'عدد 2 نسخة اصلية من محضر اجتماع 30-01-2024','content' => NULL,'notes' => 'K23165-0105D-0105D/24/0481
  27-06-2024','created_at' => '2024-07-22 07:59:42','updated_at' => '2024-07-22 08:01:41'),
    array('id' => '195','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'عدد 2 نسخة اصلية من محضر اجتماع 13-05-2024','content' => NULL,'notes' => 'K23165-0105D-0105D/24/0479
  27-06-2024','created_at' => '2024-07-22 08:02:36','updated_at' => '2024-07-22 08:03:10'),
    array('id' => '196','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'عدد 2 نسخة اصلية من محضر اجتماع 04-03-2024','content' => NULL,'notes' => NULL,'created_at' => '2024-07-22 08:03:52','updated_at' => '2024-07-22 08:04:25'),
    array('id' => '197','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'عدم توفر شبكة صرف صحي بالقرب من موقع المشروع','content' => NULL,'notes' => 'K23165/106D/24/0460
  23/06/2024','created_at' => '2024-07-22 08:09:43','updated_at' => '2024-07-22 08:15:20'),
    array('id' => '198','created_by' => '2','from_id' => '23','to_id' => '1','title' => 'تسليم العرض الفني والمالي','content' => NULL,'notes' => NULL,'created_at' => '2024-07-22 08:43:18','updated_at' => '2024-07-22 08:43:47'),
    array('id' => '199','created_by' => '2','from_id' => '19','to_id' => '1','title' => ' 2 نسخة اصلية من محضر اجتماع 07-05-2024','content' => NULL,'notes' => 'رقم الكتاب
  K23165-0102D/24/0447
  19-06-2024
  
  رقم المحضر
  K23165-0102D-24-004','created_at' => '2024-07-22 08:48:13','updated_at' => '2024-07-22 08:51:21'),
    array('id' => '200','created_by' => '2','from_id' => '1','to_id' => '27','title' => 'تمدبد تاريخ اغلاق الممارسة ليصبح 13-08-2024 بدلا من 30-07-2024','content' => NULL,'notes' => NULL,'created_at' => '2024-07-22 10:30:15','updated_at' => '2024-08-06 09:11:26'),
    array('id' => '201','created_by' => '1','from_id' => '1','to_id' => '51','title' => 'استفسارات حول التراسل الالكتروني','content' => NULL,'notes' => NULL,'created_at' => '2024-07-22 11:16:30','updated_at' => '2024-12-10 09:12:22'),
    array('id' => '202','created_by' => '1','from_id' => '1','to_id' => '51','title' => 'المناقصات التي تتضمن نظام المعلومات الجغرافية GIS','content' => NULL,'notes' => NULL,'created_at' => '2024-07-22 11:18:58','updated_at' => '2024-12-10 09:12:15'),
    array('id' => '204','created_by' => '2','from_id' => '1','to_id' => '49','title' => 'نظام شؤون الموظفين HR','content' => NULL,'notes' => NULL,'created_at' => '2024-07-23 07:47:55','updated_at' => '2024-07-24 11:19:02'),
    array('id' => '205','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'عدد 2 نسخة أصلية من محضر الاجتماع المنعقد يوم 05-06-2024 الساعة 9:30','content' => NULL,'notes' => 'وارد برقم K23165-0106D/24/0526
  بتاريخ 16-07-2024
  
  الحاقا بالكتاب رقم K23165-0106D/24/0432
  بتاريخ 10-06-2024','created_at' => '2024-07-23 08:50:34','updated_at' => '2024-07-24 09:21:13'),
    array('id' => '206','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'Monthly Progress Report No. 6','content' => NULL,'notes' => 'K23165-0100D/24/0527
  18-07-2024','created_at' => '2024-07-23 08:54:15','updated_at' => '2024-07-24 09:19:48'),
    array('id' => '207','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'عدد 2 نسخة أصلية من محضر الاجتماع المنعقد بتاريخ 03-07-2024 الساعة 9:00','content' => NULL,'notes' => 'K23165-0102D/24/0523
  15-07-2024','created_at' => '2024-07-23 09:08:17','updated_at' => '2024-07-24 09:21:55'),
    array('id' => '208','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'نسخة من محضر الاجتماع المنعقد بتاريخ 17-07-2024 الساعة 11:00بخصوص 
  Storm Water and  Sewage Tie-in','content' => NULL,'notes' => 'K23165-0106D/24/0532
  18-07-2024','created_at' => '2024-07-23 09:17:12','updated_at' => '2024-07-24 09:22:22'),
    array('id' => '209','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'PACI Population Data','content' => NULL,'notes' => 'K23165-0105D/24/0524
  15-07-2024','created_at' => '2024-07-23 09:27:03','updated_at' => '2024-07-24 09:22:51'),
    array('id' => '210','created_by' => '2','from_id' => '19','to_id' => '19','title' => 'Concept Design Cost Estimate Report for the 3 Design Alternative','content' => NULL,'notes' => NULL,'created_at' => '2024-07-23 09:47:44','updated_at' => '2024-12-16 13:42:05'),
    array('id' => '211','created_by' => '1','from_id' => '1','to_id' => '19','title' => 'Concept Design Alternative 3 Approval','content' => 'اختيار البديل الثالث','notes' => NULL,'created_at' => '2024-07-23 10:37:36','updated_at' => '2024-07-31 10:50:46'),
    array('id' => '212','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'Monthly Progress Report No. 5','content' => NULL,'notes' => 'رقم الكتاب
  K23165-0100D/24/0450
  19-06-2024','created_at' => '2024-07-24 09:09:30','updated_at' => '2024-07-24 09:10:04'),
    array('id' => '213','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'طلب مخططات As-Built Drawings','content' => NULL,'notes' => 'رقم الكتاب
  K23165-0105D/24/0445
  19-06-2024','created_at' => '2024-07-24 09:10:49','updated_at' => '2024-07-24 09:11:58'),
    array('id' => '214','created_by' => '2','from_id' => '1','to_id' => '24','title' => 'الحاق - بخصوص عدادات المياه على مداخل المناطق السكنية','content' => NULL,'notes' => 'الحاق بالكتاب رقم 20240643000497 بتاريخ 09-07-2024','created_at' => '2024-07-24 09:14:33','updated_at' => '2024-07-29 07:30:11'),
    array('id' => '215','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'ربط صرف فائض مياه الخزانات الرئيسية العلوية وصرف مياه الامطار للمبنى بخط صرف المطر القائم','content' => NULL,'notes' => 'K23165-0106D-24-0535
  21-07-2024','created_at' => '2024-07-24 09:41:57','updated_at' => '2024-07-24 10:32:55'),
    array('id' => '216','created_by' => '1','from_id' => '23','to_id' => '1','title' => 'اعادة تسليم الردود النهائية بخصوص استفسارات المناقصين','content' => NULL,'notes' => '5071033-C01-409
  21-07-2024
  
  مرفق عدد 2 CD
  cd حولي فارغ','created_at' => '2024-07-24 09:47:47','updated_at' => '2024-07-24 10:32:44'),
    array('id' => '217','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'مسودة محضر اجتماع 09-06-2024','content' => NULL,'notes' => 'رقم الكتاب
  K23165-0100D/24/0441
  19-06-2024
  
  رقم المحضر
  K23165-0100D-MOM-24-008','created_at' => '2024-07-24 10:21:01','updated_at' => '2024-07-24 10:22:11'),
    array('id' => '218','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'العرض المرئي Presentation مع كتاب محضر الاجتماع 05-06-2024','content' => NULL,'notes' => 'K23165-0106D/24/0436
  12-06-2024','created_at' => '2024-07-24 10:25:02','updated_at' => '2024-07-24 10:25:33'),
    array('id' => '219','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'مسودة محضر اجتماع 05-06-2024 - من الساعة 9:30 الى 11:00','content' => NULL,'notes' => 'رقم الكتاب
  K23165-0106D/24/0432
  10-06-2024
  
  رقم المحضر
  K23165-0106D-24-016','created_at' => '2024-07-24 10:40:26','updated_at' => '2024-07-24 10:41:05'),
    array('id' => '220','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'مسودة محضر اجتماع 05-06-2024 - من الساعة 9:00 الى 09:30','content' => NULL,'notes' => 'رقم الكتاب
  K23165-0106D/24/0431
  10-06-2024
  
  رقم المحضر
  K23165-0106D-24-015','created_at' => '2024-07-24 10:41:56','updated_at' => '2024-07-24 10:42:27'),
    array('id' => '221','created_by' => '2','from_id' => '5','to_id' => '1','title' => 'رد على الكتاب رقم 2024-1091','content' => NULL,'notes' => 'رقم الكتاب 612-WPD-24
  بتاريخ 10-06-2024','created_at' => '2024-07-24 10:43:51','updated_at' => '2024-07-24 10:44:41'),
    array('id' => '222','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'مسودة محضر اجتماع 27-05-2024 - الساعة 10:15 صباحا','content' => NULL,'notes' => NULL,'created_at' => '2024-07-24 10:45:59','updated_at' => '2024-07-24 10:47:28'),
    array('id' => '223','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'عدد 2 نسخة اصلية من محضر اجتماع 16-01-2024','content' => NULL,'notes' => 'رقم الكتاب
  K23165-0108D/24/0419
  06-06-2024
  
  رقم المحضر
  K23165-0108D-2023-0004','created_at' => '2024-07-24 10:49:08','updated_at' => '2024-07-24 10:53:06'),
    array('id' => '224','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'مسودة محضر اجتماع 04-06-2024','content' => NULL,'notes' => 'رقم الكتاب
  K23165-0100D/24/0428
  06-06-2024
  
  رقم المحضر
  K23165-0100D-MOM-24-007','created_at' => '2024-07-24 10:54:40','updated_at' => '2024-07-24 10:55:20'),
    array('id' => '225','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'دفعة شهر مايو 2024 - Reimbursable Package - Invoice No. 6 - May 2024','content' => NULL,'notes' => 'رقم الكتاب
  K23165-0200D/24/0416
  04-06-2024','created_at' => '2024-07-24 10:57:05','updated_at' => '2024-07-24 10:57:33'),
    array('id' => '226','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'Training Course No.7 GIS Course','content' => NULL,'notes' => NULL,'created_at' => '2024-07-24 10:58:18','updated_at' => '2025-01-28 12:05:41'),
    array('id' => '227','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'اشعار الهيئة العامة للبيئة بوجود خطأ مطبعي في رقم العقد للمشروع','content' => NULL,'notes' => NULL,'created_at' => '2024-07-24 11:02:20','updated_at' => '2024-07-24 11:03:20'),
    array('id' => '228','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'طلب مخططات As Built - لشبكة الصرف الصحي بموقع المشروع','content' => NULL,'notes' => NULL,'created_at' => '2024-07-24 11:32:47','updated_at' => '2024-07-24 11:39:58'),
    array('id' => '229','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'جمع معلومات - MEW population data projection models for each 5 years period up to 2040','content' => NULL,'notes' => 'رقم الكتاب
  K23165-0105D/24/0395
  تاريخ
  28-05-2024','created_at' => '2024-07-24 11:48:49','updated_at' => '2024-07-24 11:49:42'),
    array('id' => '230','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'طلب مخططات ال As Built  لشبكة صرف مياه الامطار','content' => NULL,'notes' => 'رقم الكتاب
  K23165-0106D/24/0396
  تاريخ
  28-05-2024','created_at' => '2024-07-24 11:55:21','updated_at' => '2024-07-24 11:55:52'),
    array('id' => '231','created_by' => '2','from_id' => '1','to_id' => '7','title' => 'الأمن السيبرانى للتكنولوجيا التشغيلية OT','content' => NULL,'notes' => NULL,'created_at' => '2024-07-24 12:26:11','updated_at' => '2024-07-24 12:37:26'),
    array('id' => '232','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'مسودة محضر اجتماع 27-05-2024 - الساعة 9 صباحا','content' => NULL,'notes' => 'K23165-0106D/24/0406
  29-05-2024','created_at' => '2024-07-24 12:53:55','updated_at' => '2024-07-24 12:55:03'),
    array('id' => '233','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'List of Users PCW','content' => NULL,'notes' => 'K23165-0100D/24/0405
  29-05-2024','created_at' => '2024-07-24 12:55:33','updated_at' => '2024-07-24 12:56:09'),
    array('id' => '234','created_by' => '2','from_id' => '8','to_id' => '1','title' => 'اقفال السنة المالية 2023/2024','content' => NULL,'notes' => NULL,'created_at' => '2024-07-24 12:56:57','updated_at' => '2024-07-24 12:57:21'),
    array('id' => '235','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'عدد 2 نسخة اصلية من محضر اجتماع 22-01-2024','content' => NULL,'notes' => 'K23165-0100D/24/0401
  29-05-2024','created_at' => '2024-07-24 13:01:06','updated_at' => '2024-07-24 13:02:01'),
    array('id' => '236','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'عدد 2 نسخة اصلية من محضر اجتماع 06-03-2024','content' => NULL,'notes' => 'k23165-0106D/24/0402
  29-05-2024','created_at' => '2024-07-24 13:04:38','updated_at' => '2024-07-24 13:07:02'),
    array('id' => '237','created_by' => '2','from_id' => '50','to_id' => '1','title' => 'التصميم النهائي واعداد مستندات المناقصة لاعمال شبكات التغذية بالمياه العذبة للطريق الدائري الرابع - تذكير 2','content' => NULL,'notes' => NULL,'created_at' => '2024-07-24 13:08:37','updated_at' => '2024-07-24 13:09:00'),
    array('id' => '238','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'Training Course No. 5 (Electrical Works Design)','content' => NULL,'notes' => 'K23165-0100D/24/0394
  26-05-2024','created_at' => '2024-07-24 13:11:24','updated_at' => '2024-07-24 13:12:09'),
    array('id' => '239','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'Phase 1 Interim Report Submission - Rev 1','content' => 'مرفق 5 CD
  3 مجلدات
  ورق - A3','notes' => 'K23165-0105D-24-0541
  22-07-2024
  مرفق عدد 5 CD','created_at' => '2024-07-24 13:15:48','updated_at' => '2024-07-28 09:37:06'),
    array('id' => '240','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'مشروع 5 و 2 - عدد 2 نسخة اصلية من محضر اجتماع 07-05-2024','content' => NULL,'notes' => 'رقم الكتاب 
  K23165-0105D-0102D/24/0385
  
  تاريخ الكتاب
  23-05-2024','created_at' => '2024-07-24 13:16:01','updated_at' => '2024-07-24 13:17:22'),
    array('id' => '241','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'الاجتماع المنعقد بتاريخ 13-05-2024','content' => NULL,'notes' => 'رقم الكتاب
  K23165-0105D/24/0388
  
  تاريخ الكتاب
  22-05-2024','created_at' => '2024-07-24 13:48:54','updated_at' => '2024-07-24 13:49:51'),
    array('id' => '242','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'طلب مخططات As Built لشبكة الصرف الصحي بموقع المشروع','content' => NULL,'notes' => 'K23165-0106D/24/0389
  22-05-2024','created_at' => '2024-07-24 13:50:56','updated_at' => '2024-07-24 13:53:54'),
    array('id' => '243','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'نسخة اصلية من محضر اجتماع 25-03-2024','content' => NULL,'notes' => 'رقم الكتاب
  K23165-0106D/24/0378
  
  تاريخ الكتاب
  22-05-2024','created_at' => '2024-07-25 07:52:04','updated_at' => '2024-07-25 07:52:38'),
    array('id' => '244','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'MOM of Document Distribution Matrix DDM Projects Nos 2,3,6,8','content' => NULL,'notes' => 'رقم الكتاب
  K23165-0100D/24/0380
  
  تاريخ الكتاب
  22-05-2024','created_at' => '2024-07-25 07:53:54','updated_at' => '2024-07-25 07:54:19'),
    array('id' => '245','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'البرنامج التدريبي','content' => NULL,'notes' => 'رقم الكتاب
  K23165-0100D/24/0381
  تاريخ الكتاب
  22-05-2024','created_at' => '2024-07-25 07:57:38','updated_at' => '2024-07-25 07:58:29'),
    array('id' => '246','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'PCW Compliance with CITRA requirements','content' => NULL,'notes' => 'رقم الكتاب
  K23165-0100D/24/0386
  
  تاريخ الكتاب
  22-05-2024','created_at' => '2024-07-25 07:59:22','updated_at' => '2024-07-25 08:02:09'),
    array('id' => '247','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'نسخة من محضر اجتماع 13-05-2024 و 15-05-2024','content' => NULL,'notes' => 'رقم الكتاب
  K23165-0106D/24/0369
  
  رقم المحضر
  
  K23165-0106D- 24 - 
  10 & 11','created_at' => '2024-07-25 08:04:34','updated_at' => '2024-07-25 08:05:40'),
    array('id' => '248','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'عدد 2 نسخة اصلية من محضر اجتماع 28-03-2024','content' => NULL,'notes' => NULL,'created_at' => '2024-07-25 08:06:38','updated_at' => '2024-07-25 08:07:14'),
    array('id' => '249','created_by' => '1','from_id' => '7','to_id' => '14','title' => 'طلب بيانات عن أقرب خط تخديمي لكل من المياه العذبة وقليلة الملوحة','content' => 'مرفق نسخة من المخططين رقمي 
  W.P.D-Project-06/(01-02)','notes' => NULL,'created_at' => '2024-07-25 08:20:16','updated_at' => '2024-07-31 11:14:46'),
    array('id' => '250','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'نسخة من محضر اجتماع 27-03-2024','content' => NULL,'notes' => 'رقم الكتاب
  K23165-0105D/24/0271
  
  تاريخ الكتاب
  31-03-2024
  
  رقم المحضر
  K23165-0105D-2024-0004','created_at' => '2024-07-25 08:27:45','updated_at' => '2024-07-25 08:28:17'),
    array('id' => '251','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'نسخة من محضر اجتماع 25-03-2024','content' => NULL,'notes' => 'رقم الكتاب
  K23165-0106D/24/0270
  
  تاريخ الكتاب
  31-03-2024
  
  رقم المحضر
  K23165-0106D-24-008','created_at' => '2024-07-25 08:28:56','updated_at' => '2024-07-25 08:29:39'),
    array('id' => '252','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'نسخة اصلية من محضر اجتماع  26-03-2024','content' => NULL,'notes' => 'K23165-0106D/24/0359','created_at' => '2024-07-25 08:30:42','updated_at' => '2024-07-25 08:31:29'),
    array('id' => '253','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'نسخة اصلية من محضر اجتماع  28-01-2024','content' => NULL,'notes' => 'K23165-0106D/24/0360','created_at' => '2024-07-25 08:32:09','updated_at' => '2024-07-25 08:33:07'),
    array('id' => '254','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'مشروع رقم 5 - مشروع رقم 2','content' => NULL,'notes' => 'رقم الكتاب
  K23165-D0105D-0102D/24/0351','created_at' => '2024-07-25 08:34:20','updated_at' => '2024-07-25 08:34:44'),
    array('id' => '255','created_by' => '2','from_id' => '23','to_id' => '1','title' => 'تسليم الردود النهائية بخصوص استفسارات المناقصين','content' => NULL,'notes' => 'رقم الكتاب
  5071033-C01-402
  تاريخ 05-05-2024','created_at' => '2024-07-25 08:36:39','updated_at' => '2024-07-25 08:37:05'),
    array('id' => '256','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'متوسط استهلاك المياه العذبة على أساس سنوي','content' => NULL,'notes' => 'رقم الكتاب
  K23165-0105D/24/0353','created_at' => '2024-07-25 08:37:40','updated_at' => '2024-07-25 08:38:01'),
    array('id' => '257','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'نسخة من محضر اجتماع 07-05-2024','content' => NULL,'notes' => 'رقم الكتاب 
  K23165-0102D/24/0354','created_at' => '2024-07-25 08:38:38','updated_at' => '2024-07-25 08:39:00'),
    array('id' => '258','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'محضر اجتماع 02-05-2024','content' => NULL,'notes' => 'رقم الكتاب
  K23165-0108D/24/0345','created_at' => '2024-07-25 08:39:51','updated_at' => '2024-07-25 08:46:11'),
    array('id' => '259','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'نسخة اصلية من محضر اجتماع 11-01-2024','content' => NULL,'notes' => 'رقم الكتاب
  K23165-0108D/24/0356','created_at' => '2024-07-25 09:01:37','updated_at' => '2024-07-25 09:02:08'),
    array('id' => '260','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'نسخة اصلية من محضر اجتماع 21-01-2024','content' => NULL,'notes' => 'رقم الكتاب
  K23165-0106D/24/0344','created_at' => '2024-07-25 09:02:54','updated_at' => '2024-07-25 09:03:32'),
    array('id' => '261','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'التقرير الشهري رقم 4 - Monthly Progress Report No. 4','content' => NULL,'notes' => 'رقم الكتاب
  K23165-0100D/24/0335','created_at' => '2024-07-25 09:04:19','updated_at' => '2024-07-25 09:05:20'),
    array('id' => '262','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'محضر اجتماع المنعقد بتاريخ 29-04-2024','content' => NULL,'notes' => 'رقم الكتاب
  K23165-0108D/24/0334
  تاريخ الكتاب
  02-05-2024
  
  رقم المحضر
  K23165-0108D-2024-0013','created_at' => '2024-07-25 09:05:58','updated_at' => '2024-07-25 09:06:37'),
    array('id' => '263','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'فاتورة شهر ابريل 2024 - Invoice No. 5 April 2024','content' => NULL,'notes' => NULL,'created_at' => '2024-07-25 09:07:11','updated_at' => '2024-07-25 09:07:37'),
    array('id' => '264','created_by' => '2','from_id' => '37','to_id' => '1','title' => 'طلب نسخة من محضر الاجتماع المنعقد يوم 29/04/2024','content' => NULL,'notes' => 'وارد برقم: 20240650000029
  أ ع ك/489
  بتاريخ: 05/05/2024','created_at' => '2024-07-25 09:08:28','updated_at' => '2024-07-25 09:08:39'),
    array('id' => '265','created_by' => '2','from_id' => '37','to_id' => '1','title' => 'المباني التي سيتم ازالتها داخل مجمعات توزيع المياه (الشويخ - حولي - الدوحة)','content' => NULL,'notes' => 'بخصوص المباني التي سيتم ازالتها داخل مجمعات توزيع المياه (الشويخ - حولي - الدوحة)
  
  وارد بتاريخ 17-04-2024
  برقم 20240059000219','created_at' => '2024-07-25 09:11:36','updated_at' => '2024-07-25 09:11:53'),
    array('id' => '266','created_by' => '2','from_id' => '24','to_id' => '1','title' => 'بخصوص مناقصة  رقم و ك م 76-2018/2019','content' => 'مرفق كشف يوضح احداثيات أجهزة قياس التدفق القائمة علي الشبكة العامة','notes' => 'وارد برقم 20240543000201 
  بتاريخ 04/05/2024
  
  ردا علي كتابنا رقم  أ ت/534 بتاريخ  14/03/2024','created_at' => '2024-07-25 09:13:01','updated_at' => '2024-07-25 09:19:00'),
    array('id' => '267','created_by' => '2','from_id' => '9','to_id' => '1','title' => 'ترشيح ضابط اتصال عن إدارات كل إدارة من إدارات القطاعات','content' => NULL,'notes' => 'وارد - من الوكيل المساعد للتخطيط والتدريب ونظم المعلومات - بخصوص ترشيح ضابط اتصال عن إدارات كل إدارة من إدارات القطاعات
  للتنسيق مع إدارة الإحصاء عند تعبئة بطاقات الأهداف الاستراتيجية و مؤشرات الأداء الخاصة بإدارة قطاعكم
  
  وارد بتاريخ 18-04-2024
  برقم 20240702000019','created_at' => '2024-07-25 09:19:52','updated_at' => '2024-07-25 09:20:20'),
    array('id' => '268','created_by' => '2','from_id' => '8','to_id' => '1','title' => 'طلب تمديد موعد إغلاق المناقصة 2019/2018-76','content' => NULL,'notes' => 'وارد برقم 20242949000041
  بتاريخ 02/05/2024
  
  ردا علي كتابنا رقم 20240643000285
  بتاريخ 01/05/2024
  
  بخصوص تمديد موعد الاغلاق ليصبح 14/07/2024 بدلا من 12/05/2024
  
  الرجاء ذكر أسباب ومبررات تمديد موعد الاغلاق لمخاطبة الجهاز المركزي للموافقة علي التمديد','created_at' => '2024-07-25 09:21:25','updated_at' => '2024-07-25 09:21:48'),
    array('id' => '269','created_by' => '2','from_id' => '5','to_id' => '1','title' => 'الإجتماع المنعقد بتاريخ 16/01/2024','content' => NULL,'notes' => 'وارد برقم 2024066000019 
  بتاريخ 29/04/2024
  
  بخصوص مشروع 8 - الخاص بالاجتماع المنعقد بتاريخ 16/01/2024  بخصوص RFC-004
  غير واضحة لذا يردي تحديد موعد اجتماع لمناقشة تلك الاستفسارات','created_at' => '2024-07-25 09:22:47','updated_at' => '2024-11-29 02:36:40'),
    array('id' => '270','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'طلب زيارة متعددة - للمهندس محمد صلاح ياسين سيد عناية','content' => NULL,'notes' => NULL,'created_at' => '2024-07-25 09:23:47','updated_at' => '2024-07-25 09:24:12'),
    array('id' => '271','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'Data Collection Report & Interim Concept Design Report','content' => 'مرفق عدد 5 CD','notes' => 'رقم الكتاب
  K23165-0106D/24/0331
  تاريخ الكتاب
  29-04-2024','created_at' => '2024-07-25 09:25:06','updated_at' => '2024-11-29 01:16:09'),
    array('id' => '272','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'محضر اجتماع تاريخ 26-03-2024','content' => NULL,'notes' => 'رقم الكتاب
  K23165-0105D/24/0323
  تاريخ الكتاب
  28-04-2024','created_at' => '2024-07-25 09:31:40','updated_at' => '2024-07-25 09:32:03'),
    array('id' => '273','created_by' => '2','from_id' => '37','to_id' => '1','title' => 'إنشاء مكاتب في مبنى إدارة الأعمال الكيماوية بالشويخ','content' => NULL,'notes' => 'وارد برقم 20240059000219
  بتاريخ 29/04/2024','created_at' => '2024-07-25 09:32:50','updated_at' => '2024-07-25 09:34:28'),
    array('id' => '274','created_by' => '2','from_id' => '51','to_id' => '1','title' => 'اسم المستخدم للمسؤول Admin','content' => NULL,'notes' => 'رقم الكتاب
  20230643000537
  تاريخ الكتاب
  29-04-2024','created_at' => '2024-07-25 09:35:49','updated_at' => '2024-07-25 09:41:07'),
    array('id' => '275','created_by' => '2','from_id' => '9','to_id' => '1','title' => 'بخصوص Project Collaboration Website (PCW)','content' => NULL,'notes' => 'رد على كتابنا الصادر رقم و م م م - 449 - 2024 
  
  رقم الكتاب
  20240642000267
  تاريخ الكتاب
  29-04-2024
  
  ','created_at' => '2024-07-25 09:47:17','updated_at' => '2024-07-25 09:47:35'),
    array('id' => '276','created_by' => '2','from_id' => '23','to_id' => '1','title' => ' رد على كتاب الوزارة المؤرخ 04-03-2024','content' => NULL,'notes' => 'رقم الكتاب
  5071033-C01-401
  تاريخ الكتاب
  22-04-2024','created_at' => '2024-07-25 09:48:17','updated_at' => '2024-07-25 09:48:41'),
    array('id' => '277','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'General Layout for Site Coordinates - Subhan WDC = Water Project Sector Building','content' => NULL,'notes' => 'رقم الكتاب
  K23165-0106D/24/0309
  تاريخ الكتاب
  22-04-2024','created_at' => '2024-07-25 09:49:18','updated_at' => '2024-07-25 09:49:40'),
    array('id' => '278','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'Project Schedule & Upcoming Submissions','content' => NULL,'notes' => 'رقم الكتاب
  K23165-0106D/24/0310
  تاريخ الكتاب
  22-04-2024','created_at' => '2024-07-25 09:50:12','updated_at' => '2024-07-25 09:50:36'),
    array('id' => '279','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'التقرير الابتدائي للمخطط العام - المخطط العام القائم لشبكة المياه العذبة وقليلة الملوحة
  Master Plan Interim Report','content' => 'مرفق مع الكتاب عدد 5 CD من التقرير','notes' => 'رقم الكتاب
  K23165-0105D/24/0312
  تاريخ الكتاب
  22-04-2024','created_at' => '2024-07-25 09:51:17','updated_at' => '2024-08-25 06:06:21'),
    array('id' => '280','created_by' => '2','from_id' => '13','to_id' => '1','title' => 'طلب بيانات','content' => NULL,'notes' => 'وارد بخصوص طلب بيانات من قطاع محطات القوي وتقطير المياه بخصوص طلب بيانات عن المشاكل التي أدت الي تجنب استخدام أنابيب المصنعة من مادة البولي إيثيلين عالي الكثافة HDPE
  
  وارد برقم:  20240643000103
  بتاريخ:  24/04/2024
  
  
  ردا علي الكتاب رقم 20240643000103
  المؤرخ 25/01/2024','created_at' => '2024-07-25 09:54:38','updated_at' => '2024-07-25 09:55:54'),
    array('id' => '281','created_by' => '2','from_id' => '8','to_id' => '1','title' => 'تعميم وزارة المالية رقم 10 لسنة 2016','content' => NULL,'notes' => 'بخصوص عدم استلام أي مواد الا بمراجعة المخزن المختص 
  
  وارد برقم 202409480000666
  بتاريخ  23-04-2024','created_at' => '2024-07-25 09:56:47','updated_at' => '2024-07-25 09:57:08'),
    array('id' => '282','created_by' => '2','from_id' => '44','to_id' => '1','title' => 'طلب المؤسسة العامة للرعاية السكنية توفير الخدمات الرئيسية لمشروع شرق مدينة صباح الاحمد السكنية','content' => NULL,'notes' => 'رقم الكتاب: 20240272000010
  بتاريخ: 24/04/2024','created_at' => '2024-07-25 10:10:34','updated_at' => '2024-07-25 10:10:53'),
    array('id' => '283','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'Reimbursable Package','content' => NULL,'notes' => 'رقم الكتاب
  K23165-0200D/24/0330
  
  بتاريخ
  29/04/2024','created_at' => '2024-07-25 10:11:37','updated_at' => '2024-07-25 10:12:22'),
    array('id' => '284','created_by' => '2','from_id' => '19','to_id' => '19','title' => 'مسودة التقرير الابتدائي','content' => NULL,'notes' => 'رقم الكتاب
  K23165-0108D/24/0315
  تاريخ الكتاب
  22-04-2024','created_at' => '2024-07-25 10:13:12','updated_at' => '2024-07-25 10:13:42'),
    array('id' => '285','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'Level 3 Schedule - الجدول الزمني المعدل','content' => NULL,'notes' => 'رقم الكتاب 
  K23165-010D/24/0322
  التاريخ
  28/04/2024','created_at' => '2024-07-25 10:14:30','updated_at' => '2024-07-25 10:14:45'),
    array('id' => '286','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'Topographic / Utility Survey Site Works and Report Submittal','content' => NULL,'notes' => 'رقم الكتاب
  K23165-0106D/24/0328
  تاريخ الكتاب
  28-04-2024','created_at' => '2024-07-25 10:15:24','updated_at' => '2024-07-25 10:15:43'),
    array('id' => '287','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'Topographic / Utility Survey Site Works and Report Submittal','content' => 'مرفق CD نسخة واحدة','notes' => 'رقم الكتاب
  K23165-0106D/24/0328
  تاريخ
  28-04-2024','created_at' => '2024-07-25 10:18:33','updated_at' => '2024-07-25 10:18:54'),
    array('id' => '288','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'نسخة اصلية من محضر اجتماع تاريخ 27-03-2024','content' => NULL,'notes' => 'رقم الكتاب
  K23165-0106D/24/0324
  تاريخ الكتاب
  28-04-2024','created_at' => '2024-07-25 10:20:29','updated_at' => '2024-07-25 10:21:02'),
    array('id' => '289','created_by' => '2','from_id' => '52','to_id' => '1','title' => 'تقدير احتياج الحكومة من المركبات وأنواع بنود المصروفات المتعلقة بها لتقدير اعتماد الميزانية للسنة المالية 2025/2026','content' => NULL,'notes' => NULL,'created_at' => '2024-07-25 10:22:17','updated_at' => '2024-07-25 10:22:35'),
    array('id' => '290','created_by' => '2','from_id' => '10','to_id' => '1','title' => 'طلب المؤسسة العامة للرعاية السكنية توفير الخدمات الرئيسية لمشروع الخدمات الرئيسية لمشروع شرق مدينة صباح الأحمد السكنية','content' => NULL,'notes' => 'وارد برقم: 20240272000010
  بتاريخ: 30/04/2024','created_at' => '2024-07-25 10:23:21','updated_at' => '2024-07-25 10:23:38'),
    array('id' => '291','created_by' => '2','from_id' => '53','to_id' => '1','title' => 'دعوة الي مؤتمر سيمنس للتكنولوجيا والتطور الرقمي - يوم 21-05-2024 بفندق راديسون بلو','content' => NULL,'notes' => 'بشأن ترشيح 30 ضيف من وزارة الكهرباء والماء
  
  20240643000283
  01-05-2024
  
  2024-787','created_at' => '2024-07-25 10:25:56','updated_at' => '2024-07-25 10:28:15'),
    array('id' => '292','created_by' => '2','from_id' => '7','to_id' => '1','title' => 'اعتماد نظام الاقتراحات والشكاوى لجميع المعاملات الالكترونية بالبوابة الالكترونية لكافة البرامج الخاصة بالتواصل مع العملاء','content' => NULL,'notes' => NULL,'created_at' => '2024-07-25 10:32:13','updated_at' => '2024-07-25 10:33:14'),
    array('id' => '293','created_by' => '2','from_id' => '9','to_id' => '1','title' => 'عقد اجتماع مع شركة انسيابي بالتعاون مع شركة هواوي - مطلوب مرشحين لحضور الاجتماع بتاريخ 02-05-2024 الساعة 10 صباحا بقاعة جميلة الشطي بمبنى الوزارة','content' => NULL,'notes' => 'رقم الكتاب
  20240203000058
  تاريخ الكتاب
  29-04-2024','created_at' => '2024-07-25 10:33:56','updated_at' => '2024-07-25 10:34:22'),
    array('id' => '294','created_by' => '2','from_id' => '18','to_id' => '1','title' => 'قرار انهاء خدمة رقم 466/2024 زينب مهدي عبدالله القلاف علي ان يكون في يوم 31-08-2024','content' => NULL,'notes' => NULL,'created_at' => '2024-07-25 10:36:47','updated_at' => '2024-07-25 10:36:58'),
    array('id' => '295','created_by' => '2','from_id' => '5','to_id' => '1','title' => 'Training Courses No. 5 and No.7','content' => NULL,'notes' => 'ترشيح المهندس/ عبدالرحمن وليد الساعي
  
  وارد برقم: 20242073000025
  بتاريخ 23/04/2024','created_at' => '2024-07-25 10:39:09','updated_at' => '2024-07-25 10:39:30'),
    array('id' => '296','created_by' => '2','from_id' => '9','to_id' => '1','title' => 'ترشيح المختصين للحضور يوم الاثنين 06-05-2024 الساعة 9 صباحا','content' => NULL,'notes' => 'وارد - من الوكيل المساعد للتخطيط والتدريب ونظم المعلومات - بخصوص ترشيح المختصين للحضور يوم الاثنين 06-05-2024 الساعة 9 صباحا بقاعة أحمد الدعيج بمقر الأمانة العامة للمجلس الأعلى للتخطيط والتنمية
  وارد برقم: 20240319000010
  بتاريخ: 22-04-2024','created_at' => '2024-07-25 10:40:24','updated_at' => '2024-07-25 10:41:14'),
    array('id' => '297','created_by' => '2','from_id' => '1','to_id' => '1','title' => 'نسخة للحفظ - بخصوص نموذج الغربلة الخاص بمشروع 2 العقد رقم  5942','content' => NULL,'notes' => 'وارد من مدير إدارة تصميم مشاريع الشبكات والمنشآت المائية للحفظ 
  
  كتاب صادر لدار الهندسة للتصميم والاستشارات الفنية
  بخصوص مشروع رقم 2 - العقد 5942 - نموذج الغربلة
  مرفق كتاب الهيئة العامة للبيئة رقم ه ع ب / م ع / 2467 بخصوص متطلباتها للدارسة البيئية
  
  الكتاب صادر برقم 20240642000268
  بتاريخ 22-04-2024','created_at' => '2024-07-25 10:48:52','updated_at' => '2024-07-25 10:49:15'),
    array('id' => '298','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'نموذج الغربلة','content' => NULL,'notes' => 'رقم الكتاب
  K23165-0106D/24/0305
  تاريخ الكتاب
  18-04-2024','created_at' => '2024-07-25 10:50:01','updated_at' => '2024-07-25 10:50:22'),
    array('id' => '299','created_by' => '2','from_id' => '9','to_id' => '1','title' => 'اعداد خطة التنمية السنوية 2025/2026','content' => NULL,'notes' => 'وارد - من الوكيل المساعد للتخطيط والتدريب ونظم المعلومات - بخصوص اعداد خطة التنمية السنوية 2025/2026
  بخصوص موافاتهم بالمشروعات الجديدة المقترحة المراد ادراجها في خطة التنمية السنوية 2025/2024
  
  وارد برقم 20243019000012
  وارد بتاريخ 22-04-2024','created_at' => '2024-07-25 10:51:01','updated_at' => '2024-07-25 10:51:24'),
    array('id' => '300','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'نسخة اصلية من محضر اجتماع المنعقد بتاريخ 04-03-2024','content' => NULL,'notes' => 'رقم الكتاب
  K23165-0100D/24/0302
  تاريخ الكتاب
  18-04-2024','created_at' => '2024-07-25 10:54:15','updated_at' => '2024-07-25 10:54:46'),
    array('id' => '301','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'محضر الاجتماع المنعقد بتاريخ 27-03-2024','content' => NULL,'notes' => 'رقم الكتاب 
  K23165-0106D/24/0274
  تاريخ الكتاب
  31-03-2024','created_at' => '2024-07-25 10:55:18','updated_at' => '2024-07-25 10:55:57'),
    array('id' => '302','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'Monthly Progress Report No. 3','content' => NULL,'notes' => 'رقم الكتاب
  K23165-0100D/24/0307
  
  تاريخ الكتاب
  16-04-2024','created_at' => '2024-07-25 10:56:34','updated_at' => '2024-07-25 10:58:02'),
    array('id' => '303','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'محضر اجتماع  بتاريخ 24-03-2024','content' => NULL,'notes' => 'وارد بتاريخ 17-04-2024 بالسجل
  وارد من الوكيل 18-04-2024
  برقم
  K23165-0105D-/24/0303
  المؤرخ 16-04-2024','created_at' => '2024-07-25 10:59:41','updated_at' => '2024-07-25 11:00:07'),
    array('id' => '304','created_by' => '2','from_id' => '33','to_id' => '1','title' => 'الاجتماع المنعقد بتاريخ 26-03-2024','content' => NULL,'notes' => 'وارد: بتاريخ 16-04-2024
  برقم: 20240650000027','created_at' => '2024-07-25 11:01:17','updated_at' => '2024-07-25 11:01:32'),
    array('id' => '305','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'Training Courses No. 5 and No.7','content' => NULL,'notes' => 'Training Courses No. 5 and No.7 من دار الهندسة للتصميم والاستشارات الفنية (شاعر ومشاركوه) الي إدارة تصميم مشاريع الشبكات والمنشآت المائية
  
  K23165-0100D/24/0277','created_at' => '2024-07-25 11:02:16','updated_at' => '2024-07-25 11:02:36'),
    array('id' => '306','created_by' => '2','from_id' => '8','to_id' => '1','title' => 'بخصوص موافاة الشؤون المالية في حال وجود أي مطالبات تجاه السادة شركة مجموعة مرام الهندسية للتجارة العامة والمقاولات','content' => NULL,'notes' => 'وارد من الوكيل المساعد للشؤون المالية بخصوص موافاه الشؤون المالية في حال وجود أي مطالبات تجاه السادة شركة مجموعة مرام الهندسية للتجارة العامة والمقاولات العقد رقم ب ك / أ.أ / 10-2014/2015  انشاء وإنجاز وصيانة مبني موظفي ردم النفايات جنوب الدائري السابع
  وارد بتاريخ 
  08-04-2024
  2024231000074
  
  تم تصدير الكتاب برقم
  أ ت / 2024/691','created_at' => '2024-07-25 11:03:18','updated_at' => '2024-07-31 09:19:35'),
    array('id' => '307','created_by' => '2','from_id' => '8','to_id' => '1','title' => 'بخصوص موافاة الشؤون المالية  في حال وجود أي مطالبات تجاه السادة شركة الفايد لبناء المعامل والمقاولات','content' => NULL,'notes' => 'وارد من الوكيل المساعد للشؤون المالية بخصوص موافاه الوزارة في حال وجود أي مطالبات تجاه السادة شركة الفايد لبناء المعامل والمقاولات
  بتاريخ
  08-04-2024
  202457561000111
  
  تم تصدير الكتاب برقم
  أ ت / 2024/692','created_at' => '2024-07-25 11:04:55','updated_at' => '2024-07-31 09:17:04'),
    array('id' => '308','created_by' => '2','from_id' => '15','to_id' => '1','title' => 'كروت البنزين المستلمة للمركبات المستأجرة','content' => NULL,'notes' => 'وارد من الوكيل المساعد للخدمات الفنية والمشاغل الرئيسية بشأن كروت البنزين المستلمة للمركبات المستأجرة ضمن أعمال العقد 2023/2022-5885 (استئجار عدد 940 سيارة بدون سائق)
  
  وارد بتاريخ 16-04-2024
  رقم
  20240701000041','created_at' => '2024-07-25 11:06:13','updated_at' => '2024-07-25 11:06:31'),
    array('id' => '309','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'محضر اجتماع رقم K23165-0100D-MOM-24-006 المنعقد بتاريخ 28-03-2024 ','content' => NULL,'notes' => 'محضر اجتماع رقم
  K23165-0100D-MOM-24-006
  المنعقد بتاريخ
  28-03-2024
  
  K23165-0100D/24/0292','created_at' => '2024-07-25 11:07:12','updated_at' => '2024-07-25 11:07:36'),
    array('id' => '310','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'محضر اجتماع رقم K23165-0108D-2024-0012 المنعقد بتاريخ 28-03-2024','content' => NULL,'notes' => 'محضر اجتماع رقم
  K23165-0108D-2024-0012
  المنعقد بتاريخ
  28-03-2024
  
  لمناقشة ردود قسم الاعمال الكيماوية على RFC007','created_at' => '2024-07-25 11:08:09','updated_at' => '2024-11-29 02:36:36'),
    array('id' => '311','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'البرنامج الزمني للمشروع','content' => NULL,'notes' => 'رقم الكتاب
  K23165-0100D/24/0280
  تاريخ الكتاب
  07-04-2024','created_at' => '2024-07-25 11:08:58','updated_at' => '2024-07-25 11:09:29'),
    array('id' => '312','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'فاتورة رقم 4 شهر مارس','content' => NULL,'notes' => 'فاتورة رقم 4 - شهر مارس من دار الهندسة للتصميم والاستشارات الفنية (شاعر ومشاركوه) الي إدارة تصميم مشاريع الشبكات والمنشآت المائية
  
  
  K23165-0200D/24/0285','created_at' => '2024-07-25 11:10:06','updated_at' => '2024-07-25 11:10:31'),
    array('id' => '313','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'محضر اجتماع رقم K23165-0108D-2023-006 المنعقد بتاريخ 07-01-2024 ','content' => NULL,'notes' => 'محضر اجتماع رقم
  K23165-0108D-2023-006
  المنعقد بتاريخ
  07-01-2024
  
  k23165-0108d/24/0283','created_at' => '2024-07-25 11:11:15','updated_at' => '2024-07-25 11:11:35'),
    array('id' => '314','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'محضر اجتماع رقم K23165-0102D-MOM-24-003 المنعقد بتاريخ 22-01-2024  ','content' => NULL,'notes' => 'محضر اجتماع رقم
  K23165-0102D-MOM-24-003
  المنعقد بتاريخ
  
  تسليم نسخة اصلية من المحضر
  22-01-2024
  K231650100D/24/0282','created_at' => '2024-07-25 11:13:07','updated_at' => '2024-07-25 11:13:26'),
    array('id' => '315','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'محضر اجتماع رقم K23165-0100D-MOM-24-003 المنعقد بتاريخ 05-02-2024  ','content' => NULL,'notes' => 'محضر اجتماع رقم
  K23165-0100D-MOM-24-003
  المنعقد بتاريخ
  05-02-2024
  
  K23165-0100D/24/0284','created_at' => '2024-07-25 11:14:14','updated_at' => '2024-07-25 11:14:41'),
    array('id' => '316','created_by' => '2','from_id' => '45','to_id' => '1','title' => 'للرد علي كتاب طلب الدراسة والإفادة بخصوص مشروع رقم 2 مجمع توزيع مياه الوفرة','content' => NULL,'notes' => 'وارد من الهيئة العامة للبيئة للرد علي الكتاب رقم
  و ك م / 2 / 732
  بتاريخ
  22/2/2024
  طلب الدراسة والإفادة بخصوص مشروع رقم 2 مجمع توزيع مياه الوفرة
  
  وارد بتاريخ 
  08-04-2024
  رقم
  20240293000019','created_at' => '2024-07-25 11:15:23','updated_at' => '2024-07-25 11:15:44'),
    array('id' => '317','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'محضر اجتماع المنعقد بتاريخ 26/3/2024','content' => NULL,'notes' => NULL,'created_at' => '2024-07-25 11:16:40','updated_at' => '2024-07-25 11:16:56'),
    array('id' => '318','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'محضر اجتماع بتاريخ 27/3/2024','content' => NULL,'notes' => NULL,'created_at' => '2024-07-25 11:17:36','updated_at' => '2024-07-25 11:17:58'),
    array('id' => '319','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'عدد 2 نسخة أصلية من محضر الاجتماع المنعقد بتاريخه 29-04-2024 الساعة 9:00 ص','content' => NULL,'notes' => 'K23165-0108D/24/0538
  22-07-2024','created_at' => '2024-07-28 08:34:16','updated_at' => '2024-07-28 10:16:46'),
    array('id' => '320','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'عدد 2 نسخة أصلية من محضر الاجتماع المنعقد بتاريخه 24-01-2024 ','content' => NULL,'notes' => 'K23165-108D/24/0539
  22-07-2024','created_at' => '2024-07-28 08:36:34','updated_at' => '2024-07-28 10:17:36'),
    array('id' => '321','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'عدد 2 نسخة أصلية من محضر الاجتماع المنعقد بتاريخه 15-01-2024','content' => NULL,'notes' => 'K23165-108D/24/0540
  22-07-2024','created_at' => '2024-07-28 08:37:22','updated_at' => '2024-07-28 10:17:08'),
    array('id' => '322','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'تعديات علي موقع المشروع','content' => NULL,'notes' => 'K23165-102D/24/0545
  24-07-2024','created_at' => '2024-07-28 08:59:20','updated_at' => '2024-07-28 10:18:28'),
    array('id' => '323','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'Overall Projects Letters
  كتاب اعتماد تسليم الكتب المرسلة يدويا','content' => NULL,'notes' => 'K23165-0100D/24/0544
  24-07-2024','created_at' => '2024-07-28 09:01:51','updated_at' => '2024-07-28 10:19:09'),
    array('id' => '324','created_by' => '2','from_id' => '1','to_id' => '4','title' => 'إعداد تقديرات ميزانية الوزارة للسنة المالية 2025/2026','content' => NULL,'notes' => 'بالطريق الرسمي','created_at' => '2024-07-29 09:53:11','updated_at' => '2024-07-30 09:15:52'),
    array('id' => '325','created_by' => '2','from_id' => '1','to_id' => '2','title' => 'إعداد تقديرات ميزانية الوزارة للسنة المالية 2025/2026','content' => NULL,'notes' => 'بالطريق الرسمي','created_at' => '2024-07-29 09:55:10','updated_at' => '2024-11-29 02:15:07'),
    array('id' => '326','created_by' => '1','from_id' => '1','to_id' => '5','title' => 'إعداد تقديرات ميزانية الوزارة للسنة المالية 2025/2026','content' => NULL,'notes' => 'بالطريق الرسمي','created_at' => '2024-07-29 09:57:02','updated_at' => '2024-11-29 02:15:03'),
    array('id' => '327','created_by' => '2','from_id' => '1','to_id' => '41','title' => 'إعداد تقديرات ميزانية الوزارة للسنة المالية 2025/2026','content' => NULL,'notes' => 'بالطريق الرسمي','created_at' => '2024-07-29 09:58:27','updated_at' => '2024-11-29 02:15:00'),
    array('id' => '328','created_by' => '2','from_id' => '1','to_id' => '15','title' => 'مخاطبات البلدية بشأن المباني الإدارية','content' => NULL,'notes' => NULL,'created_at' => '2024-07-29 10:54:19','updated_at' => '2024-11-05 09:35:15'),
    array('id' => '329','created_by' => '2','from_id' => '1','to_id' => '19','title' => 'Training Course No. 1 (Structural Design)','content' => NULL,'notes' => NULL,'created_at' => '2024-07-29 10:57:04','updated_at' => '2024-07-29 12:45:13'),
    array('id' => '330','created_by' => '2','from_id' => '1','to_id' => '14','title' => 'Phase 1 Interim Report - Rev 1','content' => 'مرفق CD','notes' => NULL,'created_at' => '2024-07-29 13:49:07','updated_at' => '2024-08-20 09:03:39'),
    array('id' => '331','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'Submission of Concept Design (Best Alternative)','content' => '1 نسخه ورقيه
  5 CD','notes' => 'K23165-0106D/24/0560
  29-07-2024','created_at' => '2024-07-30 08:52:56','updated_at' => '2024-07-30 12:55:18'),
    array('id' => '332','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'Revised Data Collection Report - Rev.1','content' => NULL,'notes' => 'K23165-0106D-24-0561
  29-07-2024
  مرفق نسختين CD تم ارسالهم مع المندوب قبل استلام الكتاب رسمي','created_at' => '2024-07-30 09:15:04','updated_at' => '2024-11-29 01:26:31'),
    array('id' => '333','created_by' => '2','from_id' => '1','to_id' => '19','title' => 'ربط صرف فائض مياه الخزانات الرئيسية العلوية وصرف مياه الامطار للمبنى بخط صرف المطر القائم','content' => NULL,'notes' => NULL,'created_at' => '2024-07-30 11:29:25','updated_at' => '2024-07-31 07:26:01'),
    array('id' => '334','created_by' => '1','from_id' => '1','to_id' => '32','title' => 'إزالة التعديات والمعوقات في موقع مجمع توزيع مياه الوفرة (2)','content' => NULL,'notes' => NULL,'created_at' => '2024-07-31 09:36:15','updated_at' => '2024-07-31 11:31:01'),
    array('id' => '335','created_by' => '2','from_id' => '1','to_id' => '7','title' => 'فريق العمل الخاص لإبراز الجهود والإنجازات وعرض الخدمات والتعريف بها من قبل وزارات الدولة','content' => NULL,'notes' => NULL,'created_at' => '2024-07-31 10:08:16','updated_at' => '2024-08-20 07:25:34'),
    array('id' => '336','created_by' => '2','from_id' => '1','to_id' => '7','title' => 'تقديم الاحتياجات التدريبية (داخلية / خارجية) للوزارة للعام التدريبي 2024/2025 عن طريق الموقع الالكتروني','content' => NULL,'notes' => NULL,'created_at' => '2024-07-31 10:12:11','updated_at' => '2024-08-05 07:58:18'),
    array('id' => '337','created_by' => '2','from_id' => '1','to_id' => '8','title' => 'و ك م 71 - تمديد موقع اغلاق المناقصة ليصبح 10-10-2024 بدلا من 11-08-2024','content' => NULL,'notes' => NULL,'created_at' => '2024-07-31 10:17:08','updated_at' => '2024-07-31 13:32:06'),
    array('id' => '338','created_by' => '2','from_id' => '1','to_id' => '8','title' => 'و ك م 76 - تمديد موقع اغلاق المناقصة ليصبح 10-10-2024 بدلا من 11-08-2024','content' => NULL,'notes' => NULL,'created_at' => '2024-07-31 10:21:18','updated_at' => '2024-11-29 02:26:38'),
    array('id' => '339','created_by' => '2','from_id' => '1','to_id' => '41','title' => 'إعداد تقديرات ميزانية الوزارة للسنة المالية 2025/2026','content' => NULL,'notes' => 'بالطريق الرسمي','created_at' => '2024-07-31 10:47:05','updated_at' => '2024-07-31 11:34:12'),
    array('id' => '340','created_by' => '2','from_id' => '1','to_id' => '55','title' => 'طلب شراء رقم 21428','content' => 'مخاطبة الشركات المقدمة للطلب لتقديم اسعار رخص البرامج لمدة 3 سنوات','notes' => NULL,'created_at' => '2024-07-31 11:08:54','updated_at' => '2024-08-04 08:29:57'),
    array('id' => '341','created_by' => '2','from_id' => '1','to_id' => '19','title' => 'البرنامج التدريبي - Course 8 - New Construction Technology (BIM)','content' => NULL,'notes' => NULL,'created_at' => '2024-07-31 12:38:27','updated_at' => '2024-08-04 07:39:05'),
    array('id' => '342','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'عدد 2 نسخة اصلية من محضر الاجتماع المنعقد بتاريخ 13-05-2024','content' => NULL,'notes' => 'K23165-0106D/24/0557
  28-07-2024','created_at' => '2024-07-31 12:47:37','updated_at' => '2024-08-27 06:40:02'),
    array('id' => '343','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'Submission of Geotechnical Investigation Report','content' => 'K23165-0106D-24-0559
  28-07-2024
  مرفق مجلد','notes' => NULL,'created_at' => '2024-07-31 13:03:01','updated_at' => '2024-09-16 06:31:10'),
    array('id' => '344','created_by' => '2','from_id' => '1','to_id' => '19','title' => 'عدادات المياه على مداخل المناطق','content' => NULL,'notes' => 'قراءات أجهزة التدفق المتوفرة للعدادات المغذية للمناطق ومحطات تعبئة المياه لعام 2010 قبل توقفها','created_at' => '2024-07-31 13:11:29','updated_at' => '2024-08-04 07:33:47'),
    array('id' => '345','created_by' => '2','from_id' => '1','to_id' => '19','title' => 'ملاحظات على Interim Submission B1 Report (I.S.B1)','content' => NULL,'notes' => NULL,'created_at' => '2024-08-01 09:43:15','updated_at' => '2024-08-28 10:17:09'),
    array('id' => '346','created_by' => '2','from_id' => '1','to_id' => '55','title' => 'طلب رقم 21276 (ترسية على شركة وايت أوفيس للأثاث والمفروشات)','content' => NULL,'notes' => NULL,'created_at' => '2024-08-01 10:20:11','updated_at' => '2024-08-04 09:16:00'),
    array('id' => '347','created_by' => '2','from_id' => '1','to_id' => '20','title' => 'الحاق بالكتاب رقم 20240650000052  بخصوص اعتماد محضر الاجتماع المنعقد بتاريخ 05-06-2024','content' => NULL,'notes' => NULL,'created_at' => '2024-08-01 10:48:12','updated_at' => '2024-08-04 07:37:07'),
    array('id' => '348','created_by' => '2','from_id' => '1','to_id' => '2','title' => 'إعداد تقديرات ميزانية الوزارة للسنة المالية 2025/2026 - الحاقا بالكتاب رقم 20240650000063','content' => NULL,'notes' => NULL,'created_at' => '2024-08-01 11:02:19','updated_at' => '2024-08-08 08:27:36'),
    array('id' => '349','created_by' => '2','from_id' => '1','to_id' => '5','title' => 'إعداد تقديرات ميزانية الوزارة للسنة المالية 2025/2026	- الحاقا بالكتاب رقم 20240650000064','content' => NULL,'notes' => NULL,'created_at' => '2024-08-01 11:03:05','updated_at' => '2024-11-29 02:23:34'),
    array('id' => '350','created_by' => '2','from_id' => '1','to_id' => '4','title' => 'إعداد تقديرات ميزانية الوزارة للسنة المالية 2025/2026	- الحاقا بالكتاب رقم 20240650000062','content' => NULL,'notes' => NULL,'created_at' => '2024-08-01 11:03:32','updated_at' => '2024-08-04 07:30:48'),
    array('id' => '351','created_by' => '2','from_id' => '1','to_id' => '41','title' => 'إعداد تقديرات ميزانية الوزارة للسنة المالية 2025/2026 - الحاقا بالكتاب رقم 20240650000065','content' => NULL,'notes' => NULL,'created_at' => '2024-08-01 11:04:27','updated_at' => '2024-08-04 07:29:55'),
    array('id' => '352','created_by' => '2','from_id' => '1','to_id' => '8','title' => 'الملحق التعديلي رقم 1 وتمديد موعد الاغلاق الي 13-09-2024','content' => 'تعديل خطأ الملحق التعديلي رقم 1 بدلا من 2 في الكتاب المرسل من قبل','notes' => NULL,'created_at' => '2024-08-01 12:12:18','updated_at' => '2024-08-11 12:37:31'),
    array('id' => '353','created_by' => '2','from_id' => '1','to_id' => '54','title' => 'طلب بيانات - اسعار الكيلووات لانتاج الكهرباء الحالية والمستقبلية','content' => NULL,'notes' => NULL,'created_at' => '2024-08-01 13:46:36','updated_at' => '2024-08-12 07:27:06'),
    array('id' => '354','created_by' => '2','from_id' => '1','to_id' => '38','title' => 'Revised Data Collection Report - Rev.1','content' => 'مرفق ورقية من Revised Data Collection Report متضمنة Codes and Standards','notes' => 'الرد خلال 3 أيام عمل','created_at' => '2024-08-04 08:15:38','updated_at' => '2024-08-20 08:58:58'),
    array('id' => '355','created_by' => '2','from_id' => '1','to_id' => '40','title' => 'Revised Data Collection Report - Rev.1','content' => 'مرفق ورقية من Revised Data Collection Report متضمنة Codes and Standards','notes' => 'الرد خلال 3 أيام عمل','created_at' => '2024-08-04 08:20:01','updated_at' => '2024-09-02 04:34:46'),
    array('id' => '356','created_by' => '2','from_id' => '1','to_id' => '55','title' => 'طلب شراء رقم 21428','content' => NULL,'notes' => 'تم الترسية علي شركة العالمية الكبري للتجارة والمقاولات (16080 د.ك)
  الكتاب الاساسي برقم طلب شراء 21428
  وتم تعديل الكتاب واضافة المرفقات بتاريخ 14-08-2024 بالكتاب رقم 20240650000113','created_at' => '2024-08-04 08:54:47','updated_at' => '2024-08-15 08:12:49'),
    array('id' => '357','created_by' => '2','from_id' => '1','to_id' => '40','title' => 'Concept Design Report Best Alternative - Volume 2 -July 2024','content' => 'مرفق نسخة من ال Concept Design Report Best Alternative - Volume 2 -July 2024','notes' => NULL,'created_at' => '2024-08-04 09:54:15','updated_at' => '2024-09-08 04:54:22'),
    array('id' => '358','created_by' => '2','from_id' => '1','to_id' => '38','title' => 'Concept Design Report Best Alternative - Volume 2 -July 2024','content' => 'مرفق نسخة من Concept Design Report Best Alternative - Volume 2 -July 2024','notes' => NULL,'created_at' => '2024-08-04 09:56:26','updated_at' => '2024-11-29 01:16:24'),
    array('id' => '359','created_by' => '2','from_id' => '1','to_id' => '30','title' => 'Concept Design Report Best Alternative - Volume 2 -July 2024','content' => 'مرفق نسخة من Concept Design Report Best Alternative - Volume 2 -July 2024','notes' => NULL,'created_at' => '2024-08-04 09:58:16','updated_at' => '2024-09-16 06:33:52'),
    array('id' => '360','created_by' => '2','from_id' => '1','to_id' => '30','title' => 'Revised Data Collection Report - Rev.1','content' => 'مرفق ورقية من Revised Data Collection Report متضمنة Codes and Standards','notes' => NULL,'created_at' => '2024-08-04 10:37:34','updated_at' => '2024-08-27 04:26:41'),
    array('id' => '361','created_by' => '2','from_id' => '1','to_id' => '38','title' => 'Submission of Geotechnical Investigation Report','content' => NULL,'notes' => NULL,'created_at' => '2024-08-04 12:29:37','updated_at' => '2024-08-20 08:58:05'),
    array('id' => '362','created_by' => '2','from_id' => '1','to_id' => '40','title' => 'Submission of Geotechnical Investigation Report','content' => NULL,'notes' => NULL,'created_at' => '2024-08-04 12:31:42','updated_at' => '2024-09-08 04:55:46'),
    array('id' => '363','created_by' => '2','from_id' => '1','to_id' => '30','title' => 'Submission of Geotechnical Investigation Report','content' => NULL,'notes' => NULL,'created_at' => '2024-08-04 12:34:59','updated_at' => '2024-09-16 06:33:09'),
    array('id' => '364','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'محضر اجتماع المنعقد بتاريخ 29-07-2024 الساعة 10:00','content' => NULL,'notes' => 'K23165-0102D-24-0569
  31-07-2024','created_at' => '2024-08-04 12:49:30','updated_at' => '2024-08-04 13:52:39'),
    array('id' => '365','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'Initiation of Lump-Sum Project 1 (Sabhan Pump Station) and Project 3 (Naayem WDC)','content' => NULL,'notes' => 'K23165-0100D-24-0570
  31-07-2024','created_at' => '2024-08-04 12:54:04','updated_at' => '2024-08-04 13:51:28'),
    array('id' => '366','created_by' => '1','from_id' => '1','to_id' => '19','title' => 'اعتماد Final Inception Report','content' => 'مرفق نسخة من الملاحظات التي تمت مناقشتها في الاجتماع Online Meeting  المنعقد بتاريخ 30-07-2024','notes' => NULL,'created_at' => '2024-08-04 13:11:40','updated_at' => '2024-11-29 02:28:20'),
    array('id' => '368','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'Reimbursable Package Invoice No. 8 - July 2024 - فاتورة يوليو 2024 - فاتورة رقم 8','content' => NULL,'notes' => NULL,'created_at' => '2024-08-05 13:52:31','updated_at' => '2024-08-11 10:48:22'),
    array('id' => '369','created_by' => '2','from_id' => '1','to_id' => '8','title' => 'دفعة الأعمال لشهر يوليو 2024','content' => NULL,'notes' => NULL,'created_at' => '2024-08-06 08:37:34','updated_at' => '2024-08-11 10:10:26'),
    array('id' => '370','created_by' => '1','from_id' => '5','to_id' => '1','title' => 'اعداد تقديرات ميزانية الوزارة للسنة المالية 2025/2026','content' => NULL,'notes' => 'رقم الكتاب
  780/WPO/24
  تاريخ
  05-08-2024','created_at' => '2024-08-07 08:58:41','updated_at' => '2024-08-19 06:24:46'),
    array('id' => '371','created_by' => '2','from_id' => '1','to_id' => '39','title' => 'اعتماد محضر الاجتماع المنعقد بتاريخ 31-01-2024 للاعتماد','content' => NULL,'notes' => 'تم اعتماد المحضر وارسال نسخة علي الواتساب 02-06-2024 لمهندسة أنوار','created_at' => '2024-08-07 11:33:32','updated_at' => '2024-08-07 12:26:56'),
    array('id' => '372','created_by' => '2','from_id' => '1','to_id' => '24','title' => 'عقد ورش عمل يوم 18-08-2024 لمدة 5 أيام','content' => NULL,'notes' => 'دعوة لحضور  كلا من م. فتحي ذياب و م. عبدالوهاب عبدالفتاح الي ورشة العمل المقرر عقدها يوم 18-08-2024 لمدة 5 أيام','created_at' => '2024-08-07 13:22:10','updated_at' => '2024-11-29 01:48:10'),
    array('id' => '373','created_by' => '2','from_id' => '1','to_id' => '33','title' => 'عقد ورش عمل يوم 18-08-2024 لمدة 5 أيام','content' => NULL,'notes' => 'ترشيح 2 مهندسين لحضور ورشة العمل المقرر عقدها يوم 18-08-2024 لمدة 5 أيام','created_at' => '2024-08-07 13:23:55','updated_at' => '2024-08-27 10:28:57'),
    array('id' => '374','created_by' => '2','from_id' => '1','to_id' => '57','title' => 'المواصفات الفنية والمخططات النموذجية لشبكة المياه العذبة','content' => NULL,'notes' => NULL,'created_at' => '2024-08-08 10:01:12','updated_at' => '2024-08-15 06:17:55'),
    array('id' => '375','created_by' => '2','from_id' => '2','to_id' => '1','title' => 'التحاليل الكيميائية بحقل الروضتين وام العيش','content' => NULL,'notes' => 'AI-MEW/45/EPC/L-00515
  رقم الكتاب 20240644000172 بتاريخ 06-08-2024
  04-08-2024','created_at' => '2024-08-08 11:22:48','updated_at' => '2024-08-14 12:16:04'),
    array('id' => '376','created_by' => '2','from_id' => '58','to_id' => '1','title' => 'طلب استفسار عن مرفق مفقود في الرد علي الاستفسارات الخاصة بالمناقصة','content' => NULL,'notes' => 'AI-MEW/45/EPC/L-00515
  04-08-2024','created_at' => '2024-08-08 13:44:29','updated_at' => '2024-11-29 02:21:47'),
    array('id' => '377','created_by' => '2','from_id' => '1','to_id' => '14','title' => 'الحاق بخصوص (الخط التخديمي لكل من المياه العذبة وقليلة الملوحة)','content' => NULL,'notes' => 'الحاق بالكتاب رقم و.م.م.م-2024-1032 المؤرخ 28-07-2024','created_at' => '2024-08-11 12:55:23','updated_at' => '2024-09-08 10:01:38'),
    array('id' => '378','created_by' => '2','from_id' => '1','to_id' => '22','title' => 'الحاق بخصوص (المخططات التنفيذية لشبكة المياه)','content' => NULL,'notes' => 'الحاق بالكتاب رقم 20240642000572 المؤرخ 10-07-2024','created_at' => '2024-08-11 13:02:44','updated_at' => '2024-08-14 08:07:06'),
    array('id' => '379','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'عدد 2 نسخة اصلية من محضر الاجتماع المنعقد بتاريخ 05-06-2024 الساعة 9:00','content' => NULL,'notes' => 'K23165-0106D-24-0592
  06-08-2024','created_at' => '2024-08-13 08:46:17','updated_at' => '2024-08-13 10:07:40'),
    array('id' => '380','created_by' => '1','from_id' => '41','to_id' => '1','title' => 'الميزانية المعتمدة للسنة المالية توجيه (327) المشاريع الانشائية والصيانة الجذرية 2024/2025','content' => NULL,'notes' => 'بخصوص استسمارات العقود المستمرة  لبند اللدفع رقم 441 لمشروع ه ط8236 
  الافادة بأن قيمة أعمال المياه التعاقدية هي 1,63,077/320 د.ك
  
  وارد برقم 430/أ.م.ش.م بتاريخ 08-08-2024','created_at' => '2024-08-13 08:56:10','updated_at' => '2024-08-13 10:10:04'),
    array('id' => '381','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'نسخة من محضر الاجتماع المنعقد بتاريخ 06-08-2024 للمراجعة والاعتماد','content' => NULL,'notes' => 'K23165-0105D/24/0598
  08/08/2024','created_at' => '2024-08-13 09:00:57','updated_at' => '2024-08-13 10:08:42'),
    array('id' => '382','created_by' => '1','from_id' => '41','to_id' => '1','title' => 'تعميم إداري رقم (16) لسنة 2024 بخصوص(إعداد تقديرات ميزانية الوزارة للسنة المالية 2024/2025)','content' => NULL,'notes' => 'وارد برقم أ.م.ش.م/440 بتاريخ 12-08-2024
  الحاق بالكتاب رقم أ.م.ش.م/410','created_at' => '2024-08-13 09:05:01','updated_at' => '2024-08-13 10:11:19'),
    array('id' => '383','created_by' => '1','from_id' => '1','to_id' => '26','title' => 'المواصفات الفنية والمخططات النموذجية لشبكة المياه العذبة','content' => NULL,'notes' => NULL,'created_at' => '2024-08-13 09:06:07','updated_at' => '2024-08-15 09:25:40'),
    array('id' => '384','created_by' => '1','from_id' => '41','to_id' => '1','title' => 'مشروع ميزانية الوزارة للسنة المالية 2025/2026','content' => NULL,'notes' => 'وارد برقم أ.م.ش.م/441  بتاريخ 12-08-2024
  الحاق بالكتاب رقم أ.م.ش.م/410 بتاريخ 29-07-2024','created_at' => '2024-08-13 09:09:11','updated_at' => '2024-08-13 10:07:48'),
    array('id' => '385','created_by' => '2','from_id' => '1','to_id' => '19','title' => 'المخططات التنفيذية لشبكات المياه','content' => 'مرفق CD','notes' => NULL,'created_at' => '2024-08-13 09:14:34','updated_at' => '2024-09-26 07:34:47'),
    array('id' => '386','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'اعتماد موعد الدورة رقم (8) بخصوص BIM
   Training Course NO. 8 (BIM)','content' => NULL,'notes' => 'مواعيد الدورة الجديدة من 03-11-2024 الي 07-11-2024
  
  وارد برقم 
  K23165-0100D/24/0593
  06-08-2024','created_at' => '2024-08-13 09:16:23','updated_at' => '2024-08-13 10:14:04'),
    array('id' => '387','created_by' => '2','from_id' => '1','to_id' => '9','title' => 'طلب صرف المخصصات المالية للمرشحين لحضور الدورة التدريبية New Construction Technology BIM المزمع عقدها بجمهورية مصر العربية','content' => NULL,'notes' => NULL,'created_at' => '2024-08-13 11:17:14','updated_at' => '2024-10-06 05:30:49'),
    array('id' => '388','created_by' => '2','from_id' => '1','to_id' => '24','title' => 'نسخة من محضر الاجتماع المنعقد بتاريخ 06/08/2024 للاطلاع وابداء الرأي','content' => NULL,'notes' => NULL,'created_at' => '2024-08-14 09:21:34','updated_at' => '2024-11-24 05:39:30'),
    array('id' => '389','created_by' => '1','from_id' => '1','to_id' => '8','title' => 'تاجيل موعد الاغلاق','content' => NULL,'notes' => NULL,'created_at' => '2024-08-14 10:56:04','updated_at' => '2024-08-20 06:16:03'),
    array('id' => '390','created_by' => '1','from_id' => '1','to_id' => '8','title' => 'الرد على استفسار شركة الغانم','content' => NULL,'notes' => NULL,'created_at' => '2024-08-14 10:58:03','updated_at' => '2024-08-20 07:18:50'),
    array('id' => '391','created_by' => '2','from_id' => '1','to_id' => '55','title' => 'طلب شراء رقم 11970 (ترسية علي شركة العالمية الكبري للتجارة والمقاولات)','content' => NULL,'notes' => NULL,'created_at' => '2024-08-14 11:34:50','updated_at' => '2024-08-18 09:33:01'),
    array('id' => '392','created_by' => '2','from_id' => '1','to_id' => '19','title' => 'التحاليل الكيميائية بحقل الروضتين وأم العيش','content' => 'مرفق CD','notes' => NULL,'created_at' => '2024-08-14 12:07:44','updated_at' => '2024-09-26 08:04:44'),
    array('id' => '396','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'Concept Design Cost Estimate Report (3 Alternative)','content' => NULL,'notes' => 'K23165-0106D/24/0577
  11-08-2024','created_at' => '2024-08-18 08:11:46','updated_at' => '2024-08-18 07:19:26'),
    array('id' => '397','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'Interim Submission B2 (I.S.B2) Submission','content' => 'نسخة ورقية
  5 نسخ الكترونية','notes' => 'K23165-0108D/24/0603
  11-08-2024','created_at' => '2024-08-18 08:14:22','updated_at' => '2024-08-18 07:16:46'),
    array('id' => '398','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'Revised Schedule -Level 3
  الجدول الزمنى المعدل للمشروع Level 3','content' => NULL,'notes' => 'K23165-0105D/24/0599
  11-08-2024','created_at' => '2024-08-18 08:16:43','updated_at' => '2024-10-02 05:51:01'),
    array('id' => '399','created_by' => '2','from_id' => '28','to_id' => '1','title' => 'المخططات التنفيذية النوعية لشبكات المياه','content' => 'مرفق 2 نسخة CD','notes' => 'عقد رقم هـ ط/245 - إنشاء وإنجاز وتطوير وصيانة طرق وتقاطعات لخدمة مدينة المطلاع المستقبلية
  
  رد علي الكتاب رقم: 20240642000572
  والالحاق رفم: 20240650000109','created_at' => '2024-08-18 08:35:58','updated_at' => '2024-08-18 07:11:09'),
    array('id' => '400','created_by' => '2','from_id' => '1','to_id' => '39','title' => 'دعوة لحضور ورش عمل من تاريخ 08/09/2024 ولمدة 5 أيام
  بمقر إدارة انتاج المياه الجوفية بالصليبية','content' => NULL,'notes' => 'ترشيح مهندسين ملمين بشبكة المياه العذبة وقليلة الملوحة لحضور ورش العمل لمناقشة Phase 1 Master Plan Interim Report - Rev.1','created_at' => '2024-08-18 10:13:43','updated_at' => '2024-09-17 07:37:33'),
    array('id' => '401','created_by' => '2','from_id' => '1','to_id' => '24','title' => 'نسخة من محضر الاجتماع المنعقد بتاريخ 06-08-2024 للاطلاع وإبداء الرأي','content' => NULL,'notes' => NULL,'created_at' => '2024-08-20 05:16:34','updated_at' => '2024-08-20 05:19:28'),
    array('id' => '402','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'Invoice No. 01 - Completion of Stage 1 Phase 1 & Presentation & Acceptance of Deliverable','content' => NULL,'notes' => 'K23165-0108D/24/0595
  15-08-2024','created_at' => '2024-08-20 05:22:11','updated_at' => '2024-08-22 09:12:22'),
    array('id' => '403','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'طلب اجتماع بخصوص
  Interim Submission B1 Report (I.S.B1) Submission','content' => NULL,'notes' => 'K23165-0108D/24/0605
  15-08-2024','created_at' => '2024-08-20 05:25:53','updated_at' => '2024-10-24 08:42:13'),
    array('id' => '404','created_by' => '2','from_id' => '1','to_id' => '24','title' => 'اعتماد محاضر ورش العمل المنعقدة في التواريخ 
  30-06-2024 / 01-07-2024 / 02-07-2024 / 03-07-2024 / 04-07-2024 / واجتماع يوم 06-08-2024','content' => NULL,'notes' => NULL,'created_at' => '2024-08-20 08:32:39','updated_at' => '2024-11-24 05:39:03'),
    array('id' => '407','created_by' => '1','from_id' => '1','to_id' => '39','title' => 'Interim Submission B2 (I.S.B2) Submission','content' => NULL,'notes' => 'للدراسة وابداء الملاحظات','created_at' => '2024-08-20 09:24:33','updated_at' => '2024-08-29 04:35:54'),
    array('id' => '408','created_by' => '1','from_id' => '1','to_id' => '37','title' => 'Interim Submission B2 (I.S.B2) Submission','content' => NULL,'notes' => 'للدراسة وابداء الملاحظات','created_at' => '2024-08-20 09:26:47','updated_at' => '2024-08-27 09:07:03'),
    array('id' => '409','created_by' => '1','from_id' => '1','to_id' => '33','title' => 'Interim Submission B2 (I.S.B2) Submission','content' => NULL,'notes' => 'للدراسة وابداء الملاحظات','created_at' => '2024-08-20 09:27:38','updated_at' => '2024-08-28 09:45:19'),
    array('id' => '410','created_by' => '1','from_id' => '1','to_id' => '2','title' => 'Interim Submission B2 (I.S.B2) Submission','content' => NULL,'notes' => 'للدراسة وابداء الملاحظات','created_at' => '2024-08-20 09:28:13','updated_at' => '2024-08-27 04:32:29'),
    array('id' => '411','created_by' => '1','from_id' => '1','to_id' => '5','title' => 'Interim Submission B2 (I.S.B2) Submission','content' => NULL,'notes' => 'للدراسة وابداء الملاحظات','created_at' => '2024-08-20 09:28:42','updated_at' => '2024-11-12 12:07:47'),
    array('id' => '412','created_by' => '1','from_id' => '1','to_id' => '41','title' => 'Interim Submission B2 (I.S.B2) Submission','content' => NULL,'notes' => 'للدراسة وابداء الملاحظات','created_at' => '2024-08-20 09:30:38','updated_at' => '2024-09-09 10:16:58'),
    array('id' => '413','created_by' => '1','from_id' => '1','to_id' => '24','title' => 'Interim Submission B2 (I.S.B2) Submission','content' => NULL,'notes' => 'للدراسة وابداء الملاحظات','created_at' => '2024-08-20 09:31:42','updated_at' => '2024-10-03 04:49:18'),
    array('id' => '414','created_by' => '1','from_id' => '1','to_id' => '23','title' => 'Resubmission of Final responses Regarding Bidders Queries','content' => 'مرفق CD','notes' => NULL,'created_at' => '2024-08-20 09:45:40','updated_at' => '2024-09-05 09:47:54'),
    array('id' => '415','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'طلب ربط الصرف الصحي للمبني الاداري بشبكة الصرف الصحي القائمة','content' => NULL,'notes' => 'K23165-0106D/24/0625
  19-08-2024','created_at' => '2024-08-21 10:00:10','updated_at' => '2024-08-22 09:09:19'),
    array('id' => '416','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'Minutes of Meeting held on 13-08-2024','content' => 'مرفق CD','notes' => 'K23165-0102D/24/0614
  19-08-2024','created_at' => '2024-08-21 10:04:15','updated_at' => '2024-08-22 09:09:07'),
    array('id' => '417','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'Overall Projects - Training Course No.6
  SCADA and Instrumentation Design (5 Days)','content' => NULL,'notes' => 'K23165-0100D/24/0624
  19-08-2024','created_at' => '2024-08-21 10:04:43','updated_at' => '2024-08-22 09:09:29'),
    array('id' => '418','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'عدد 2 نسخة أصلية من محضر الاجتماع المنعقد بتاريخ 09-06-2024 الساعة 9:00 صباحا','content' => NULL,'notes' => 'K23165-0100D/24/0628
  19-08-2024','created_at' => '2024-08-21 10:07:12','updated_at' => '2024-08-22 09:09:58'),
    array('id' => '419','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'Concept Design Cost Estimate Report (3 Alternative)','content' => 'مرفق CD','notes' => 'K23165-0106D/24/0618
  18-08-2024','created_at' => '2024-08-21 10:11:21','updated_at' => '2024-08-22 09:09:05'),
    array('id' => '420','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'Revised Monthly Progress Report No. 5','content' => 'مرفق التقرير','notes' => 'K23165-0100D/24/0617
  18-08-2024','created_at' => '2024-08-21 10:12:07','updated_at' => '2024-08-22 10:25:45'),
    array('id' => '421','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'Monthly Progress Report No. 7','content' => NULL,'notes' => 'K23165-0100D/24/0626','created_at' => '2024-08-21 10:14:17','updated_at' => '2024-08-22 10:25:54'),
    array('id' => '422','created_by' => '1','from_id' => '1','to_id' => '8','title' => 'صرف الدفعة الخاصة بالمرحلة الأولى الجزء (1)','content' => NULL,'notes' => NULL,'created_at' => '2024-08-22 06:38:44','updated_at' => '2024-09-01 05:56:55'),
    array('id' => '423','created_by' => '2','from_id' => '1','to_id' => '37','title' => 'التعديلات علي محضر اجتماع يوم 29-04-2024 للاطلاع والاعتماد','content' => NULL,'notes' => NULL,'created_at' => '2024-08-22 07:40:51','updated_at' => '2024-08-27 08:57:44'),
    array('id' => '424','created_by' => '1','from_id' => '1','to_id' => '8','title' => 'الرد علي استفسار الغانم رقم 99 - وتمديد موعد اغلاق المناقصة ليصبح 08-10-2024 بدلا من 08-09-2024','content' => NULL,'notes' => NULL,'created_at' => '2024-08-22 09:09:47','updated_at' => '2024-08-25 05:31:51'),
    array('id' => '425','created_by' => '1','from_id' => '1','to_id' => '19','title' => 'رد على استفسارات RFC-006','content' => 'مرفق CD عليه جداول كميات مسعره للعقدين
  5980 و 5975','notes' => NULL,'created_at' => '2024-08-25 06:52:29','updated_at' => '2024-09-18 08:21:18'),
    array('id' => '426','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'تعديل الخطأ الوارد في RFC-006 بالمرفق بالكتاب رقم 
  K23165-0102D/24/0569','content' => NULL,'notes' => 'K23165-0102D/24/0316
  18-08-2024','created_at' => '2024-08-25 07:15:23','updated_at' => '2024-09-03 05:24:13'),
    array('id' => '427','created_by' => '1','from_id' => '1','to_id' => '19','title' => 'صرف الدفعة الخاصة بالمرحلة الاولى للمشروع','content' => NULL,'notes' => NULL,'created_at' => '2024-08-25 07:35:24','updated_at' => '2024-10-06 09:08:16'),
    array('id' => '428','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'Request for clarification RFC-007','content' => 'تزويدنا بالبيانات المذكورة في المرفق','notes' => 'K23165-0102D/24/0630
  21-08-2024','created_at' => '2024-08-25 09:48:41','updated_at' => '2024-08-26 09:08:36'),
    array('id' => '429','created_by' => '1','from_id' => '1','to_id' => '19','title' => 'Interim Submission B1 Report (I.S.B1) Submission
  تحديد موعد الاجتماع المطلوب الثلاثاء 03-09-2024','content' => NULL,'notes' => NULL,'created_at' => '2024-08-26 09:01:58','updated_at' => '2024-08-29 05:52:27'),
    array('id' => '430','created_by' => '1','from_id' => '1','to_id' => '19','title' => 'Training Course No. 6
  SCADA and Instrumentation Design (5 Days)','content' => NULL,'notes' => NULL,'created_at' => '2024-08-26 09:20:07','updated_at' => '2024-09-10 06:20:19'),
    array('id' => '431','created_by' => '2','from_id' => '1','to_id' => '8','title' => 'مخرجات المرحلة الأولي الطور الأول','content' => NULL,'notes' => 'اعتماد التقرير كمرحلة أولي (الطور الأول) علي ان يتم إعداد ورش عمل للمضي قدما لأعمال المرحلة الاولي (الطور الثاني)','created_at' => '2024-08-26 11:13:08','updated_at' => '2024-09-01 04:51:04'),
    array('id' => '432','created_by' => '2','from_id' => '1','to_id' => '3','title' => 'ملاحظات على مشروع ميزانية وزارة الكهرباء والماء والطاقة المتجددة المعتمدة من وزارة المالية (المشاريع الانشائية والصيانة الجزرية) للسنة المالية 2024/2025','content' => NULL,'notes' => NULL,'created_at' => '2024-08-27 06:21:24','updated_at' => '2024-09-26 08:08:43'),
    array('id' => '435','created_by' => '1','from_id' => '1','to_id' => '41','title' => 'ملاحظات على مشروع ميزانية وزارة الكهرباء والماء والطاقة المتجددة المعتمدة من وزارة المالية (المشاريع الانشائية والصيانة الجزرية) للسنة المالية 2024/2025','content' => NULL,'notes' => NULL,'created_at' => '2024-08-27 06:25:49','updated_at' => '2024-11-16 03:30:30'),
    array('id' => '436','created_by' => '1','from_id' => '1','to_id' => '2','title' => 'ملاحظات على مشروع ميزانية وزارة الكهرباء والماء والطاقة المتجددة المعتمدة من وزارة المالية (المشاريع الانشائية والصيانة الجزرية) للسنة المالية 2024/2025','content' => NULL,'notes' => NULL,'created_at' => '2024-08-27 06:26:04','updated_at' => '2024-09-26 08:08:13'),
    array('id' => '437','created_by' => '2','from_id' => '1','to_id' => '5','title' => 'ملاحظات على مشروع ميزانية وزارة الكهرباء والماء والطاقة المتجددة المعتمدة من وزارة المالية (المشاريع الانشائية والصيانة الجزرية) للسنة المالية 2024/2025','content' => NULL,'notes' => NULL,'created_at' => '2024-08-27 06:26:20','updated_at' => '2024-09-26 08:07:58'),
    array('id' => '438','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'Training Program: Course 8: New Construction Technology (BIM)','content' => NULL,'notes' => 'K23165-0100D/24/0633
  22-08-2024','created_at' => '2024-08-28 05:50:50','updated_at' => '2024-09-03 05:34:10'),
    array('id' => '439','created_by' => '2','from_id' => '1','to_id' => '30','title' => 'Comments on concept design report volume (2)','content' => 'عدد 1 CD','notes' => NULL,'created_at' => '2024-08-28 07:19:39','updated_at' => '2024-09-11 06:17:59'),
    array('id' => '440','created_by' => '2','from_id' => '1','to_id' => '19','title' => 'Initiation of Lump-Sum Project 1 (Subhan Pump Station) & Project 3 (Naayem WDC)','content' => NULL,'notes' => 'Project 1 (Subhan Pump Station)- start on 23-10-2025
  Project 3 Project 3 (Naayem WDC) - Start on 24-08-2025','created_at' => '2024-08-28 07:24:25','updated_at' => '2024-08-28 07:27:21'),
    array('id' => '441','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'طلب مخططات
  Fresh & Brackish Water (Design Drawings)','content' => NULL,'notes' => 'K23165-0105D/24/0640
  27-08-2024','created_at' => '2024-08-29 05:43:18','updated_at' => '2024-09-03 05:33:29'),
    array('id' => '442','created_by' => '1','from_id' => '1','to_id' => '30','title' => 'استفسارات المناقصين','content' => NULL,'notes' => 'الحاق بالكتاب رقم 20240643000134 بتاريخ 12-02-2024','created_at' => '2024-08-29 06:39:17','updated_at' => '2024-11-07 05:48:40'),
    array('id' => '443','created_by' => '1','from_id' => '1','to_id' => '30','title' => 'استفسارات المناقصين','content' => NULL,'notes' => 'الحاق بالكتاب رقم 20240643000137 
  بخصوص استعجال الرد علي استفسارات المناقصين','created_at' => '2024-08-29 06:40:15','updated_at' => '2024-09-04 10:03:35'),
    array('id' => '444','created_by' => '2','from_id' => '1','to_id' => '8','title' => 'الحاق (صرف الدفعة الخاصة بالمرحلة الأولي الطور الأول)','content' => NULL,'notes' => 'الحاق بالكتاب رقم 20240650000130','created_at' => '2024-09-01 07:32:04','updated_at' => '2024-10-06 10:07:24'),
    array('id' => '445','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'عدد 2 نسخة أصلية من محضر الاجتماع المنعقد 24-01-2024 الساعة 10:00 صباحا','content' => NULL,'notes' => 'K23165-0108D/24/0649
  29-08-2024','created_at' => '2024-09-02 05:02:29','updated_at' => '2024-09-03 05:28:36'),
    array('id' => '446','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'عدد 2 نسخة أصلية من محضر الاجتماع المنعقد 29-04-2024 الساعة 09:00 صباحا (بمبني ادارة الاعمال الكيماوية)','content' => NULL,'notes' => 'K23165-0108D/24/0644
  28-08-2024','created_at' => '2024-09-02 05:05:29','updated_at' => '2024-09-03 05:28:26'),
    array('id' => '447','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'عدد 2 نسخة أصلية من محضر الاجتماع المنعقد 16-01-2024 الساعة 09:00 صباحا','content' => NULL,'notes' => 'K23165-0108D/24/0648
  29-08-2024','created_at' => '2024-09-02 05:08:46','updated_at' => '2024-09-03 05:28:08'),
    array('id' => '448','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'Invoice No.1 - Completion of Stage 1 Phase 1 & Presentation & Acceptance of Deliverables','content' => NULL,'notes' => 'K23165-0105D/24/0647
  29-08-2024','created_at' => '2024-09-02 05:12:18','updated_at' => '2024-09-03 05:27:54'),
    array('id' => '449','created_by' => '2','from_id' => '1','to_id' => '11','title' => 'طلب إدراج شركة M/S. TBEA CO. LTD  الي قائمة المصنعين المعتمدين لمحولات الطاقة
  Manufacture Request to include M/s. TBEA Co. LTD Company in the list of Approved Manufacturer of Transformer','content' => NULL,'notes' => 'بناءا علي طلب شركة باور جريد للتجارة العامة والمقاولات (الوكيل المحلي لشركة TBEA Co. LTD.) من الجهاز المركزي للمناقصات العامة','created_at' => '2024-09-02 06:30:02','updated_at' => '2024-09-18 08:39:16'),
    array('id' => '450','created_by' => '2','from_id' => '1','to_id' => '19','title' => 'طلب مخططات Design Drawings','content' => NULL,'notes' => NULL,'created_at' => '2024-09-02 08:01:31','updated_at' => '2024-09-02 08:01:31'),
    array('id' => '451','created_by' => '2','from_id' => '1','to_id' => '7','title' => 'التقرير الشهري للمشاريع التابعة للإادارة لشهر أغسطس 2024','content' => NULL,'notes' => NULL,'created_at' => '2024-09-03 05:10:23','updated_at' => '2024-09-03 06:01:35'),
    array('id' => '452','created_by' => '1','from_id' => '1','to_id' => '11','title' => 'طلب إدراج شركة M/S. TBEA CO. LTD  الي قائمة المصنعين المعتمدين لمحولات الطاقة
  Manufacture Request to include M/s. TBEA Co. LTD Company in the list of Approved Manufacturer of Transformer','content' => NULL,'notes' => NULL,'created_at' => '2024-09-03 05:39:12','updated_at' => '2024-09-16 05:47:36'),
    array('id' => '454','created_by' => '2','from_id' => '1','to_id' => '30','title' => 'الحاق بخصوص
   Submission of Geotechnical Investigation Report
  لتوضيح أنه تم ارسال الكتاب السابق بالخطا','content' => NULL,'notes' => 'الالحاق لتوضيح ان الكتاب السابق رقم 20240650000095 بتاريخ 04-08-2024 تم ارسالة بالخطأ الي الادارة','created_at' => '2024-09-03 06:40:43','updated_at' => '2024-09-05 09:03:02'),
    array('id' => '455','created_by' => '2','from_id' => '1','to_id' => '11','title' => 'Layout for connecting route between substation HAWL "K" , HAWL "F" , and SIDQ "AW" and General Arrangement layout between HAWL "F" and SIDQ "AW"','content' => NULL,'notes' => NULL,'created_at' => '2024-09-04 06:15:42','updated_at' => '2024-09-17 05:07:24'),
    array('id' => '456','created_by' => '1','from_id' => '1','to_id' => '8','title' => 'صرف الدفعة الخاصة بالمرحلة الاولى الطور الاول','content' => NULL,'notes' => NULL,'created_at' => '2024-09-04 07:53:26','updated_at' => '2024-09-10 06:04:45'),
    array('id' => '457','created_by' => '1','from_id' => '1','to_id' => '19','title' => 'المواصفة القياسية الاوروبية رقم EN 1092-2:1997','content' => NULL,'notes' => NULL,'created_at' => '2024-09-05 06:15:03','updated_at' => '2024-09-10 06:13:39'),
    array('id' => '458','created_by' => '1','from_id' => '1','to_id' => '19','title' => 'ملاحظات علي
  Concept Design (Best Alternative)','content' => NULL,'notes' => NULL,'created_at' => '2024-09-08 09:31:51','updated_at' => '2024-09-16 04:44:01'),
    array('id' => '459','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'Workshops MOM (18-08-2024 to 21-08-2024)','content' => NULL,'notes' => 'K23165-0105D/24/0659
  02-09-2024','created_at' => '2024-09-08 10:02:51','updated_at' => '2024-10-29 08:16:29'),
    array('id' => '460','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'Reimbursable Package Invoice No. 9 - August 2024
  فاتورة أغسطس 2024 - فاتورة رقم 9','content' => NULL,'notes' => 'K23165-0200D/24/0656
  02-09-2024','created_at' => '2024-09-08 10:05:25','updated_at' => '2024-09-09 07:08:38'),
    array('id' => '461','created_by' => '2','from_id' => '1','to_id' => '8','title' => 'Reimbursable Package Invoice No. 9 - August 2024
  فاتورة أغسطس 2024 - فاتورة رقم 9','content' => NULL,'notes' => NULL,'created_at' => '2024-09-09 04:49:31','updated_at' => '2024-09-16 08:53:23'),
    array('id' => '463','created_by' => '2','from_id' => '1','to_id' => '19','title' => 'ملاحظات على 
  Submission of Geotechnical Investigation Report','content' => NULL,'notes' => NULL,'created_at' => '2024-09-09 07:19:00','updated_at' => '2024-09-16 06:30:27'),
    array('id' => '464','created_by' => '2','from_id' => '1','to_id' => '19','title' => 'ملاحظات على
  Revised Data Collection Report - Rev.1','content' => NULL,'notes' => 'ملاحظات إدارة إنارة الشوارع و إدارة تصميم مشاريع الشبكات والمنشآت المائية على Revised Data Collection Report - Rev.1','created_at' => '2024-09-09 07:22:26','updated_at' => '2024-09-10 04:54:37'),
    array('id' => '465','created_by' => '2','from_id' => '1','to_id' => '14','title' => 'الحاق رقم 2 - بخصوص الخط التخديمي لكل من المياه العذبة وقليلة الملوحة','content' => NULL,'notes' => 'الحاق بالكتاب رقم و.م.م.م-1156-2024
  والكتاب رقم و.م.م.م-1032-2024','created_at' => '2024-09-09 10:02:53','updated_at' => '2024-09-11 09:28:59'),
    array('id' => '466','created_by' => '2','from_id' => '1','to_id' => '24','title' => 'workshop
  نسخة من محاضر الاجتماعات لورش العمل المنعقدة بتاريخ 18-08-2024 الي 21-08-2024 للاطلاع وابداء الملاحظات','content' => NULL,'notes' => NULL,'created_at' => '2024-09-11 08:25:34','updated_at' => '2024-10-29 08:18:05'),
    array('id' => '467','created_by' => '2','from_id' => '1','to_id' => '33','title' => 'workshop
  نسخة من محاضر الاجتماعات لورش العمل المنعقدة بتاريخ 18-08-2024 الي 21-08-2024 للاطلاع وابداء الملاحظات','content' => NULL,'notes' => NULL,'created_at' => '2024-09-11 08:27:08','updated_at' => '2024-10-29 08:15:40'),
    array('id' => '468','created_by' => '2','from_id' => '1','to_id' => '27','title' => 'تمديد فترة الدراسة لمدة (30) يوماً أخرى تبدأ من تاريخ 19/9/2024 ليصبح موعد إنتهاء فترة الدراسة الجديد بتاريخ 20/10/2024','content' => NULL,'notes' => NULL,'created_at' => '2024-09-11 09:20:08','updated_at' => '2024-09-17 07:36:03'),
    array('id' => '469','created_by' => '1','from_id' => '1','to_id' => '59','title' => 'امر مباشر للاشراف على انشاء وانجاز وصيانة وتطوير مجمع توزيع مياه الدوحة القئم والجديد وخط مياه من المجمع حتى دوار الأمم المتحدة مع الاعمال الملحقة','content' => NULL,'notes' => NULL,'created_at' => '2024-09-12 08:21:09','updated_at' => '2024-09-16 04:36:40'),
    array('id' => '470','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'Overall Projects - Training Course No.6
  SCADA and Instrumentation Design (5 Days)','content' => NULL,'notes' => 'K23165-0100D/24/0683
  10-09-2024','created_at' => '2024-09-16 07:33:38','updated_at' => '2024-09-16 08:33:39'),
    array('id' => '471','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'Monthly Progress Report No. 8','content' => NULL,'notes' => 'K23165-0100D/24/0695
  11-09-2024','created_at' => '2024-09-16 11:10:01','updated_at' => '2024-09-17 07:44:09'),
    array('id' => '472','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'نسخة من محضر الاجتماع المنعقد بتاريخ 10-09-2024 (للمراجعة والاعتماد)','content' => 'Comments Reply Sheet','notes' => 'K23165-0105D/24/0699
  11-09-2024','created_at' => '2024-09-17 05:35:30','updated_at' => '2024-09-17 07:45:06'),
    array('id' => '473','created_by' => '2','from_id' => '1','to_id' => '27','title' => 'الملحق التعديلي رقم 3','content' => NULL,'notes' => NULL,'created_at' => '2024-09-17 08:12:35','updated_at' => '2024-09-23 07:13:04'),
    array('id' => '474','created_by' => '2','from_id' => '1','to_id' => '33','title' => 'Request for Clarification (RFC)','content' => 'RFC 2
  RFC 3','notes' => NULL,'created_at' => '2024-09-17 08:29:48','updated_at' => '2024-09-22 09:19:41'),
    array('id' => '475','created_by' => '2','from_id' => '1','to_id' => '37','title' => 'Request for Clarification (RFC)','content' => NULL,'notes' => NULL,'created_at' => '2024-09-17 08:31:04','updated_at' => '2024-12-02 22:20:04'),
    array('id' => '476','created_by' => '2','from_id' => '1','to_id' => '27','title' => 'الاعتذار عن تلبية طلب شركة باور جريد للتجارة العامة والمقاولات بشأن اضافة شركة
  M/s. TBEA Zonfa Shanghai High Voltage Switchgear Co 
  الي قائمة الشركات المصنعين للمفاتيح الكهربائية المعزولة بالغاز (GIS)','content' => NULL,'notes' => NULL,'created_at' => '2024-09-17 10:10:59','updated_at' => '2024-09-23 05:42:06'),
    array('id' => '477','created_by' => '2','from_id' => '1','to_id' => '27','title' => 'الاعتذار عن تلبية طلب شركة باور جريد للتجارة العامة والمقاولات بشأن اضافة شركة
  M/s. TBEA Zonfa Shanghai High Voltage Switchgear Co 
  الي قائمة الشركات المصنعين للمفاتيح الكهربائية المعزولة بالغاز (GIS)','content' => NULL,'notes' => NULL,'created_at' => '2024-09-17 11:30:57','updated_at' => '2024-09-22 05:56:35'),
    array('id' => '478','created_by' => '2','from_id' => '1','to_id' => '11','title' => 'المناقصة رقم: و ك م/45-2018/2019
  و المناقصة رقم: و ك م/76-2018/2019
  الحاق بخصوص (طلب شركة باور جريد إضافة M/s. TBEA CO. LTD) الي قائمة الشركات المصنعين المعتمدين لمحولات الطاقة','content' => NULL,'notes' => NULL,'created_at' => '2024-09-18 05:24:29','updated_at' => '2024-09-18 05:24:29'),
    array('id' => '479','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'Dar Response to MEWRE comments on the Concept Design Report (3 Alternatives)','content' => NULL,'notes' => 'K23165-0106D/24/0687
  11-09-2024','created_at' => '2024-09-18 06:01:11','updated_at' => '2024-09-18 07:06:17'),
    array('id' => '480','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'Draft Environmental Impact Assessment Scoping Report','content' => NULL,'notes' => 'K23165-0102D/24/0688
  12-09-2024','created_at' => '2024-09-18 06:04:04','updated_at' => '2024-09-18 07:00:07'),
    array('id' => '481','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'نسخة من محاضر الاجتماعات لورش العمل المنعقدة بتاريخ 08-09-2024 و 09-09-2024
  Workshop MOM\'s (08-09-2024 and 09-09-2024)','content' => NULL,'notes' => 'K23165-0105D/24/0698
  2024-09-11','created_at' => '2024-09-18 06:19:44','updated_at' => '2024-09-18 07:01:28'),
    array('id' => '482','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'Interim Submission B3 (I.S.B3) Submission','content' => '5 CD
   و 5 مجلدات','notes' => 'K23165-0108D/24/0709
  2024-09-12','created_at' => '2024-09-18 06:26:24','updated_at' => '2024-09-18 08:47:29'),
    array('id' => '483','created_by' => '1','from_id' => '1','to_id' => '19','title' => 'RFC-K23165-0102D-RFC-007
  موضحا عليها ردود الوزارة','content' => NULL,'notes' => NULL,'created_at' => '2024-09-18 08:00:04','updated_at' => '2024-09-18 08:46:16'),
    array('id' => '484','created_by' => '1','from_id' => '1','to_id' => '37','title' => 'Request for Clarification RFC-5','content' => NULL,'notes' => NULL,'created_at' => '2024-09-18 08:32:19','updated_at' => '2024-11-12 03:50:20'),
    array('id' => '485','created_by' => '2','from_id' => '1','to_id' => '19','title' => 'Tie-in Points - irrigation Network
  أقرب خط تخديمي لكل من المياه العذبة وقليلة الملوحة','content' => NULL,'notes' => NULL,'created_at' => '2024-09-19 05:00:08','updated_at' => '2024-09-19 08:41:40'),
    array('id' => '486','created_by' => '2','from_id' => '1','to_id' => '19','title' => 'Workshop MOM (18-08-2024 to 21-08-2024)
  ملاحظات علي محاضر الاجتماعات المنعقدة من تاريخ 18-08-2024 الي 21-08-2024','content' => NULL,'notes' => NULL,'created_at' => '2024-09-19 07:05:33','updated_at' => '2024-10-29 08:14:39'),
    array('id' => '487','created_by' => '1','from_id' => '1','to_id' => '2','title' => 'Workshops MOM (08/09/2024 to 09/09/2024)','content' => NULL,'notes' => NULL,'created_at' => '2024-09-19 08:52:50','updated_at' => '2024-09-29 10:57:17'),
    array('id' => '488','created_by' => '1','from_id' => '1','to_id' => '39','title' => 'Workshops MOM (08/09/2024 to 09/09/2024)','content' => NULL,'notes' => NULL,'created_at' => '2024-09-19 08:57:30','updated_at' => '2024-10-06 04:41:31'),
    array('id' => '489','created_by' => '2','from_id' => '59','to_id' => '1','title' => 'عدم الاختصاص (بخصوص طلب تمديد فترة دراسة العطاءات 30 يوما أخري)
  ورد الموضوع للجهة الطالبة لمخاطبة وحدة الشراء باتخاذ اللازم مع الجهاز المركزي للمناقصات العامة','content' => NULL,'notes' => NULL,'created_at' => '2024-09-19 10:23:37','updated_at' => '2024-09-23 07:05:45'),
    array('id' => '490','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'MOM held on 27/08/2024: Coordination Meeting
  نسخة من محضر الاجتماع المنعقد بتاريخ 27-08-2024
  (للمراجعة والاعتماد)','content' => 'K23165-0102D/24/0707
  16-09-2024','notes' => 'مرفق CD','created_at' => '2024-09-22 05:28:39','updated_at' => '2024-09-23 07:04:06'),
    array('id' => '491','created_by' => '2','from_id' => '1','to_id' => '19','title' => 'إزالة التعديات والموعقات في موقع مجمع توزيع الوفرة 2','content' => NULL,'notes' => NULL,'created_at' => '2024-09-22 09:29:32','updated_at' => '2024-09-23 11:00:09'),
    array('id' => '492','created_by' => '2','from_id' => '23','to_id' => '1','title' => 'تسليم الردود النهائية بخصوص استفسارات المناقصين للعقد 
  و ك م / ع / 4901 / 2014/2015','content' => 'مرفق CD','notes' => NULL,'created_at' => '2024-09-22 10:30:05','updated_at' => '2024-09-23 07:02:51'),
    array('id' => '493','created_by' => '1','from_id' => '1','to_id' => '8','title' => 'الملحق التعديلي رقم 3 - رد على كتاب المالية بارفاق عدد 4 CD','content' => 'عدد 4 CD','notes' => NULL,'created_at' => '2024-09-23 07:13:28','updated_at' => '2024-10-01 10:46:02'),
    array('id' => '494','created_by' => '1','from_id' => '1','to_id' => '27','title' => 'الملحق التعديلي رقم 2','content' => 'عدد 1 CD','notes' => NULL,'created_at' => '2024-09-23 07:21:35','updated_at' => '2024-10-02 08:03:12'),
    array('id' => '495','created_by' => '1','from_id' => '1','to_id' => '24','title' => 'Interim Submission B3 (I.S.B3) Submission','content' => NULL,'notes' => NULL,'created_at' => '2024-09-23 08:47:54','updated_at' => '2024-09-23 08:47:54'),
    array('id' => '496','created_by' => '1','from_id' => '1','to_id' => '39','title' => 'Interim Submission B3 (I.S.B3) Submission','content' => NULL,'notes' => NULL,'created_at' => '2024-09-23 08:48:11','updated_at' => '2024-10-01 09:52:23'),
    array('id' => '497','created_by' => '1','from_id' => '1','to_id' => '37','title' => 'Interim Submission B3 (I.S.B3) Submission','content' => NULL,'notes' => NULL,'created_at' => '2024-09-23 08:48:26','updated_at' => '2024-12-02 22:07:46'),
    array('id' => '498','created_by' => '1','from_id' => '1','to_id' => '41','title' => 'Interim Submission B3 (I.S.B3) Submission','content' => NULL,'notes' => NULL,'created_at' => '2024-09-23 08:48:41','updated_at' => '2024-10-08 10:15:10'),
    array('id' => '499','created_by' => '1','from_id' => '1','to_id' => '5','title' => 'Interim Submission B3 (I.S.B3) Submission','content' => NULL,'notes' => NULL,'created_at' => '2024-09-23 08:48:58','updated_at' => '2024-11-12 12:08:36'),
    array('id' => '500','created_by' => '1','from_id' => '1','to_id' => '2','title' => 'Interim Submission B3 (I.S.B3) Submission','content' => NULL,'notes' => NULL,'created_at' => '2024-09-23 08:49:11','updated_at' => '2024-10-20 04:43:25'),
    array('id' => '501','created_by' => '1','from_id' => '1','to_id' => '33','title' => 'Interim Submission B3 (I.S.B3) Submission','content' => NULL,'notes' => NULL,'created_at' => '2024-09-23 08:49:28','updated_at' => '2024-11-06 05:26:14'),
    array('id' => '502','created_by' => '2','from_id' => '1','to_id' => '7','title' => 'متابعة الخطة التشغيلية 2024/2025 لوزارة الكهرباء والماء والطاقة المتجددة','content' => NULL,'notes' => NULL,'created_at' => '2024-09-23 08:49:42','updated_at' => '2024-09-23 11:08:18'),
    array('id' => '503','created_by' => '1','from_id' => '1','to_id' => '33','title' => 'تسهيل زيارة ميدانية الي موقع مجمع توزيع مياه صبحان لمدة 4 أيام من يوم الثلاثاء الموافق 24/09/2024 وحتى يوم السبت الموافق 28/09/2024','content' => NULL,'notes' => NULL,'created_at' => '2024-09-23 10:52:03','updated_at' => '2024-09-23 11:11:19'),
    array('id' => '504','created_by' => '2','from_id' => '1','to_id' => '23','title' => 'Final Responses Regarding Bidders Queries','content' => NULL,'notes' => NULL,'created_at' => '2024-09-24 04:54:10','updated_at' => '2024-10-09 08:41:26'),
    array('id' => '505','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'اتمام الدورة التدريبية 
  Training Course No.1: Structural Design','content' => NULL,'notes' => 'K23165-0100D/24/0708
  16-09-2024','created_at' => '2024-09-24 04:58:27','updated_at' => '2024-09-25 08:36:36'),
    array('id' => '506','created_by' => '1','from_id' => '1','to_id' => '17','title' => 'اتمام الدورة التدريبية 
  Training Course No.1: Structural Design','content' => NULL,'notes' => NULL,'created_at' => '2024-09-24 05:41:24','updated_at' => '2024-09-29 09:56:29'),
    array('id' => '507','created_by' => '1','from_id' => '1','to_id' => '11','title' => 'اضافة شركة Tbea الى قائمة شركات المصنعين المعتمدين لمحولاات الطاقة','content' => NULL,'notes' => NULL,'created_at' => '2024-09-24 08:55:37','updated_at' => '2024-09-24 08:57:58'),
    array('id' => '508','created_by' => '1','from_id' => '1','to_id' => '11','title' => 'اضافة شركة Tbea الى قائمة شركات المصنعين المعتمدين لمحولاات الطاقة','content' => NULL,'notes' => NULL,'created_at' => '2024-09-24 08:58:30','updated_at' => '2024-10-03 05:14:37'),
    array('id' => '509','created_by' => '2','from_id' => '1','to_id' => '19','title' => 'ردود الوزارة علي
  K23165-0102D-RFC001
  K23165-0102D-RFC003
  K23165-0102D-RFC004','content' => NULL,'notes' => NULL,'created_at' => '2024-09-25 04:46:38','updated_at' => '2024-10-01 09:46:50'),
    array('id' => '510','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'Workshops MOM (18-08-2024 to 21-08-2024)
  بعد التعديل','content' => NULL,'notes' => 'K23165-0105D/24/0719
  22-09-20204','created_at' => '2024-09-29 05:33:12','updated_at' => '2024-10-29 08:14:55'),
    array('id' => '511','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'عدد 2 نسخة اصلية من
  Final MOM - MEW Visit Cairo From 11-02-2024 to 14-02-2024 - Coordination Meeting at Dar Cairo','content' => NULL,'notes' => 'K23165-0100D/24/0512
  25-09-2024','created_at' => '2024-09-29 09:05:21','updated_at' => '2024-09-30 08:56:32'),
    array('id' => '512','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'عدد 2 نسخة اصلية من
  Final MOM Held on 29-07-2024 : Coordination Meeting','content' => NULL,'notes' => 'K23165-0102D/24/0717
  25-09-2024','created_at' => '2024-09-29 09:10:08','updated_at' => '2024-09-30 09:39:31'),
    array('id' => '513','created_by' => '1','from_id' => '1','to_id' => '13','title' => 'محطة تقطير الخيران','content' => NULL,'notes' => NULL,'created_at' => '2024-09-29 09:46:41','updated_at' => '2024-10-29 05:43:06'),
    array('id' => '514','created_by' => '2','from_id' => '1','to_id' => '33','title' => 'مجمع توزيع المياه (ابرق خيطان) الواقع في منطقة صبحان
  تسهيل زيارة ميدانية الي موقع المجمع لانجاز أعمال المساحة لمدة 10 أيام من يوم 30-09-2024 الي 09-10-2024','content' => NULL,'notes' => NULL,'created_at' => '2024-09-29 09:50:27','updated_at' => '2024-09-29 09:52:10'),
    array('id' => '515','created_by' => '2','from_id' => '1','to_id' => '7','title' => 'التقرير الشهري للمشاريع التابعة للإادارة لشهر سبتمبر 2024','content' => NULL,'notes' => NULL,'created_at' => '2024-09-30 07:37:20','updated_at' => '2024-10-01 10:59:21'),
    array('id' => '516','created_by' => '2','from_id' => '1','to_id' => '8','title' => 'تشكيل لجنة الجرد السنوي للأصول غير المتداولة غير المالية للسنة 2024/2025','content' => NULL,'notes' => NULL,'created_at' => '2024-09-30 07:39:53','updated_at' => '2024-09-30 10:18:27'),
    array('id' => '517','created_by' => '1','from_id' => '1','to_id' => '19','title' => 'معلومات من الهيئة العامة لشؤون الزراعة والثروة السمكية','content' => NULL,'notes' => NULL,'created_at' => '2024-10-01 06:12:49','updated_at' => '2024-10-02 07:52:21'),
    array('id' => '518','created_by' => '2','from_id' => '1','to_id' => '7','title' => 'المشاريع التنموية الكبري','content' => NULL,'notes' => NULL,'created_at' => '2024-10-01 06:46:57','updated_at' => '2024-10-06 07:15:17'),
    array('id' => '519','created_by' => '1','from_id' => '1','to_id' => '19','title' => 'اعتماد محاضر اجتماع ورش العمل المنعقدة بتواريخ
  30-06-2024
  01-07-2024
  02-07-2024
  03-07-2024
  04-07-2024','content' => NULL,'notes' => NULL,'created_at' => '2024-10-01 06:56:57','updated_at' => '2024-10-06 10:18:09'),
    array('id' => '520','created_by' => '2','from_id' => '1','to_id' => '27','title' => 'طلب تمديد موعد اغلاق المناقصة ليصبح 07-11-2024 بدلا من 08-10-2024','content' => NULL,'notes' => NULL,'created_at' => '2024-10-01 08:57:07','updated_at' => '2024-10-02 05:07:06'),
    array('id' => '521','created_by' => '1','from_id' => '1','to_id' => '19','title' => 'Dar Response to MEWRE Comments on the concept design report (3 Alternatives)','content' => NULL,'notes' => NULL,'created_at' => '2024-10-01 09:52:25','updated_at' => '2024-10-02 07:48:08'),
    array('id' => '522','created_by' => '1','from_id' => '1','to_id' => '19','title' => 'Concept Design Report - Volume 2','content' => NULL,'notes' => NULL,'created_at' => '2024-10-01 10:11:39','updated_at' => '2024-10-02 07:43:57'),
    array('id' => '523','created_by' => '2','from_id' => '1','to_id' => '41','title' => 'Interim Submission B2 (I.S.B2) Submission','content' => NULL,'notes' => 'الرد علي الكتاب أ م ش م / 507 بتاريخ 22-09-2024','created_at' => '2024-10-02 10:39:47','updated_at' => '2024-10-02 10:46:33'),
    array('id' => '524','created_by' => '2','from_id' => '1','to_id' => '27','title' => 'الاعتذار عن تلبية طلب شركة باور جريد للتجارة العامة والمقاولات بشأن اضافة شركة
  TBEA  Co. LTD 
  الي قائمة الشركات المصنعين للمحولات الطاقة','content' => NULL,'notes' => NULL,'created_at' => '2024-10-02 10:59:53','updated_at' => '2024-10-07 07:11:48'),
    array('id' => '525','created_by' => '2','from_id' => '1','to_id' => '27','title' => 'الاعتذار عن تلبية طلب شركة باور جريد للتجارة العامة والمقاولات بشأن اضافة شركة
  TBEA  Co. LTD 
  الي قائمة الشركات المصنعين للمحولات الطاقة','content' => NULL,'notes' => NULL,'created_at' => '2024-10-02 11:00:24','updated_at' => '2024-10-07 07:10:01'),
    array('id' => '526','created_by' => '1','from_id' => '1','to_id' => '9','title' => 'Training Program: Course 8: New Construction Technology (BIM)
  الحاق بكتاب صرف المخصصات المالية لحضور الدورة التدريبية لتعديل عدد المرشحين من 8 الى 10','content' => 'استمارات الالتحاق بالدورات التدريبية الخارجية والاقرار والتعهد الخاص بحضور الدورات','notes' => NULL,'created_at' => '2024-10-03 09:21:46','updated_at' => '2024-11-12 12:13:06'),
    array('id' => '527','created_by' => '2','from_id' => '1','to_id' => '8','title' => 'تجديد الاعتماد المالي','content' => NULL,'notes' => NULL,'created_at' => '2024-10-06 06:38:59','updated_at' => '2024-10-06 06:38:59'),
    array('id' => '528','created_by' => '1','from_id' => '1','to_id' => '18','title' => 'طلب أمر شراء للإشراف على إنشاء وإنـجاز وصيانة وتطوير مجمع توزيع مياه الدوحة القائم والجديد وخط مياه من المجمع وحتى دوار الأمم المتحدة مع الأعمال الملحقة','content' => 'مرفق نسخة من الكتاب المراد توجيهه للجهاز المركزي للمناقصات العامة
  الكتاب مطبوع برقم DC-24-0160','notes' => NULL,'created_at' => '2024-10-07 06:43:22','updated_at' => '2024-10-22 07:19:18'),
    array('id' => '529','created_by' => '1','from_id' => '1','to_id' => '18','title' => 'حجز قاعة جميلة الشطي ليوم الاثنين 14/10/2024','content' => NULL,'notes' => NULL,'created_at' => '2024-10-07 08:43:29','updated_at' => '2024-10-08 07:49:21'),
    array('id' => '530','created_by' => '2','from_id' => '1','to_id' => '18','title' => 'توفير الخدمات في مشاريع المؤسسة العامة للرعاية السكنية','content' => NULL,'notes' => 'توحيد رد','created_at' => '2024-10-08 04:45:18','updated_at' => '2024-10-08 04:49:41'),
    array('id' => '531','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'Phase 1 Interim Report Submission - Rev 2','content' => NULL,'notes' => 'K23165-0105D/24/0744
  01-10-2024','created_at' => '2024-10-08 04:58:01','updated_at' => '2024-11-10 10:32:01'),
    array('id' => '532','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'Topographical Survey Report for New Wafra WDC || Plot Area','content' => NULL,'notes' => 'K23165-0102D/24/0750
  02-10-2024','created_at' => '2024-10-08 05:06:35','updated_at' => '2024-10-08 07:20:55'),
    array('id' => '533','created_by' => '2','from_id' => '1','to_id' => '27','title' => 'تمديد إغلاق المناقصة ليصبح 17-11-2024 بدلا من 13-10-2024 لاعداد الملحق التعديلي رقم 2','content' => NULL,'notes' => NULL,'created_at' => '2024-10-08 06:13:10','updated_at' => '2024-10-09 08:03:01'),
    array('id' => '535','created_by' => '1','from_id' => '1','to_id' => '59','title' => 'التعديلات المطلوبة على الكتاب الموجه الى الجهاز المركزي للمناقصات العامة بشان استكمال الدراسة حسب ما نص عليه قانون المناقصات العامة وتعديلاته ولائحته التنفيذية للممارسة','content' => NULL,'notes' => NULL,'created_at' => '2024-10-09 05:21:42','updated_at' => '2024-11-10 09:07:52'),
    array('id' => '536','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'Reimbursable Package Invoice No. 10 - September2024
  فاتورة سبتمبر 2024 - فاتورة رقم 10','content' => NULL,'notes' => 'K23165-0200D/24/0747
  02-10-2024','created_at' => '2024-10-09 10:36:50','updated_at' => '2024-10-13 07:31:41'),
    array('id' => '537','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'MOM held on 29-09-2024: Request For clarification RFC-008','content' => NULL,'notes' => 'K23165-0102D-/24/0757
  07-10-2024','created_at' => '2024-10-09 10:41:34','updated_at' => '2024-10-13 07:29:25'),
    array('id' => '538','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'MEWRE comments on Concept Design Report (Best Alternative)','content' => NULL,'notes' => 'K23165-0106D/24/0749
  07-10-2024','created_at' => '2024-10-09 10:49:30','updated_at' => '2024-10-13 07:30:16'),
    array('id' => '539','created_by' => '2','from_id' => '1','to_id' => '55','title' => 'طلب اعادة ترسية طلب رقم 11970','content' => NULL,'notes' => NULL,'created_at' => '2024-10-09 10:58:28','updated_at' => '2024-10-13 10:16:47'),
    array('id' => '540','created_by' => '2','from_id' => '1','to_id' => '18','title' => 'توفير الخدمات في مشاريع المؤسسة العامة للرعاية السكنية','content' => NULL,'notes' => NULL,'created_at' => '2024-10-10 06:03:41','updated_at' => '2024-11-10 07:31:23'),
    array('id' => '541','created_by' => '2','from_id' => '1','to_id' => '8','title' => 'Reimbursable Package Invoice No. 10 - September2024
  فاتورة سبتمبر 2024 - فاتورة رقم 10','content' => NULL,'notes' => NULL,'created_at' => '2024-10-10 07:32:17','updated_at' => '2024-10-14 06:30:02'),
    array('id' => '543','created_by' => '2','from_id' => '1','to_id' => '8','title' => 'تمديد التأمين الأولي','content' => NULL,'notes' => NULL,'created_at' => '2024-10-10 07:50:55','updated_at' => '2024-10-13 04:46:34'),
    array('id' => '544','created_by' => '1','from_id' => '1','to_id' => '24','title' => 'Phase 1 Interim Report Submission - Rev 2','content' => 'مرفق CD بالتقرير','notes' => NULL,'created_at' => '2024-10-10 09:47:09','updated_at' => '2024-11-12 06:45:02'),
    array('id' => '545','created_by' => '1','from_id' => '1','to_id' => '33','title' => 'Phase 1 Interim Report Submission - Rev 2','content' => 'مرفق CD بالتقرير','notes' => NULL,'created_at' => '2024-10-10 09:49:13','updated_at' => '2024-11-11 09:54:03'),
    array('id' => '546','created_by' => '1','from_id' => '1','to_id' => '39','title' => 'Phase 1 Interim Report Submission - Rev 2','content' => 'مرفق CD بالتقرير','notes' => NULL,'created_at' => '2024-10-10 09:49:38','updated_at' => '2024-11-11 09:50:06'),
    array('id' => '547','created_by' => '2','from_id' => '1','to_id' => '19','title' => 'Workshop MOM (08-09-2024 to 09-09-2024)
  ردود الادارات علي محضر الاجتماع الخاص بورش العمل المنعقدة بتاريخ 08-09-2024 و 09-09-2024','content' => NULL,'notes' => NULL,'created_at' => '2024-10-13 04:51:15','updated_at' => '2024-10-14 09:12:18'),
    array('id' => '548','created_by' => '2','from_id' => '1','to_id' => '19','title' => 'Workshop MOM (18-08-2024 to 21-08-2024)
  ردود الادارات علي محضر الاجتماع الخاصة بورش العمل المنعقدة بتاريخ 18-08-2024 الي 21-08-2024','content' => NULL,'notes' => NULL,'created_at' => '2024-10-13 04:54:50','updated_at' => '2024-10-14 09:40:43'),
    array('id' => '549','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'Final MOM held on 13-08-2024 Coordination Meeting','content' => NULL,'notes' => 'K23165-0102D/24/0758
  07-10-2024','created_at' => '2024-10-13 07:16:54','updated_at' => '2024-10-13 07:31:09'),
    array('id' => '550','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'Training Course No. 04
  Mechanical Pump Stations Design (4 days)','content' => NULL,'notes' => 'K23165-0100D/24/0768
  09-10-2024','created_at' => '2024-10-13 07:19:41','updated_at' => '2024-10-13 08:20:56'),
    array('id' => '551','created_by' => '1','from_id' => '1','to_id' => '19','title' => 'Mechanical Pump Stations Design (Course No. 4)','content' => NULL,'notes' => NULL,'created_at' => '2024-10-13 09:18:09','updated_at' => '2024-10-14 10:19:30'),
    array('id' => '552','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'Proposal for Main Water Distribution Complex (WDC) & Elevated Water Tank Complex in South Sabah Al Ahmad City','content' => '1 مجلد','notes' => NULL,'created_at' => '2024-10-13 10:12:15','updated_at' => '2024-10-13 10:18:33'),
    array('id' => '553','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'Proposal for Main Water Distribution Complex (WDC) & Elevated Water Tank Complex in South Sad Alabdullah','content' => NULL,'notes' => '1  مجلد','created_at' => '2024-10-13 10:19:11','updated_at' => '2024-10-13 10:20:24'),
    array('id' => '554','created_by' => '1','from_id' => '1','to_id' => '19','title' => 'Interim Submission B1 Report (I.S.B1) Submission','content' => NULL,'notes' => NULL,'created_at' => '2024-10-14 07:50:26','updated_at' => '2024-12-02 22:10:58'),
    array('id' => '555','created_by' => '1','from_id' => '1','to_id' => '19','title' => 'Interim Submission B2 (I.S.B2) Submission','content' => NULL,'notes' => NULL,'created_at' => '2024-10-14 07:52:04','updated_at' => '2024-10-22 09:37:12'),
    array('id' => '556','created_by' => '1','from_id' => '1','to_id' => '19','title' => 'Interim Submission B3 (I.S.B3) Submission','content' => NULL,'notes' => NULL,'created_at' => '2024-10-14 07:52:51','updated_at' => '2024-12-02 22:10:46'),
    array('id' => '557','created_by' => '2','from_id' => '5','to_id' => '1','title' => 'Interim Submission B3 (I.S.B3) Submission
  (طلب تمديد فترة دراسة المرفقات مدة 20 يوم عمل)','content' => NULL,'notes' => '1074-WPD-24
  14-10-2024','created_at' => '2024-10-15 05:33:33','updated_at' => '2024-10-16 05:48:57'),
    array('id' => '558','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'The Comments in Geotechnical Investigation Report (Rev.0)','content' => NULL,'notes' => 'K23165-0106D/24/0734
  10-10-2024','created_at' => '2024-10-15 05:37:26','updated_at' => '2024-10-16 05:44:26'),
    array('id' => '559','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'MEWRE comments on the concept Design (Best Alternative) - Volume 2','content' => 'مرفق CD','notes' => 'K23165-0106D/24/0769
  10-10-2024','created_at' => '2024-10-15 05:38:25','updated_at' => '2024-10-16 05:42:47'),
    array('id' => '560','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'طلب مخططات Autocad ومخططات مناسيب الطرق','content' => NULL,'notes' => 'K23165-0102D/24/0771
  10-10-2024','created_at' => '2024-10-15 05:40:51','updated_at' => '2024-10-16 05:46:42'),
    array('id' => '561','created_by' => '2','from_id' => '1','to_id' => '33','title' => 'تسهيل زيارة ميدانية الي مجمع توزيع المياه بالشويخ','content' => NULL,'notes' => NULL,'created_at' => '2024-10-16 06:24:50','updated_at' => '2024-10-17 06:58:19'),
    array('id' => '562','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'Monthly Progress Report No. 9','content' => NULL,'notes' => 'K23165-0100D/24/0772
  13-10-2024','created_at' => '2024-10-16 07:30:56','updated_at' => '2024-10-17 06:19:00'),
    array('id' => '563','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'Dar Response to MEWRE comments on the Concept Design (Best Alternative) - Volume 1','content' => 'مرفق CD','notes' => 'K23165-0106D/24/0767
  10-10-2024','created_at' => '2024-10-16 07:34:01','updated_at' => '2024-11-10 05:57:14'),
    array('id' => '564','created_by' => '1','from_id' => '1','to_id' => '19','title' => 'Draft Environmental Impact Assessment Scoping Report','content' => NULL,'notes' => NULL,'created_at' => '2024-10-17 05:55:28','updated_at' => '2024-10-20 04:53:53'),
    array('id' => '565','created_by' => '2','from_id' => '1','to_id' => '26','title' => 'المواصفات الفنية والمخططات النموذجية لشبكة المياه العذبة
  (طلب المخططات المذكورة في اجندة الاجتماع)','content' => NULL,'notes' => NULL,'created_at' => '2024-10-17 07:30:07','updated_at' => '2024-10-30 08:18:54'),
    array('id' => '568','created_by' => '2','from_id' => '1','to_id' => '38','title' => 'Concept Design Report - Volume (2)','content' => 'مرفق CD','notes' => NULL,'created_at' => '2024-10-20 07:39:08','updated_at' => '2024-11-04 05:49:52'),
    array('id' => '569','created_by' => '1','from_id' => '1','to_id' => '28','title' => 'طلب مخططات AutoCad ومخططات مناسب الطرق','content' => NULL,'notes' => NULL,'created_at' => '2024-10-20 08:13:53','updated_at' => '2024-10-20 08:13:53'),
    array('id' => '570','created_by' => '2','from_id' => '1','to_id' => '7','title' => 'التحديات الإدارية للخطة الإنمائية','content' => NULL,'notes' => NULL,'created_at' => '2024-10-21 08:04:52','updated_at' => '2024-10-21 08:41:14'),
    array('id' => '571','created_by' => '2','from_id' => '1','to_id' => '59','title' => 'طلب التعاقد بالأمر المباشر للاشراف علي انشاء وانجاز وصيانة وتطوير مجمع توزيع مياه الدوحة القائم والجديد وخط مياه من المجمع وحتى دوار الأمم المتحدة مع الأعمال الملحقة','content' => NULL,'notes' => 'تاشيرة السيد وكيل الوزارة
  لمخاطبة لجنة الشراء لاعادة النظر وفق النظم واللوائح مع استدعاء القطاع الفنى','created_at' => '2024-10-21 09:00:49','updated_at' => '2024-11-20 05:03:21'),
    array('id' => '572','created_by' => '2','from_id' => '1','to_id' => '33','title' => 'تسهيل زيارة ميدانية متعددة الى مجمع توزيع مياه صبحان وذلك يوم الثلاثاء الموافق 22/10/2024 الساعة 09:00 صباحا لمدة 10 أيام عمل','content' => NULL,'notes' => NULL,'created_at' => '2024-10-21 09:36:15','updated_at' => '2024-10-21 09:52:13'),
    array('id' => '573','created_by' => '2','from_id' => '1','to_id' => '37','title' => 'نسخة من محضر اجتماع 16-10-2024 للاطلاع وابداء الرأي
  و طلب بيانات بخصوص محطة تقطير الزور الشمالية','content' => NULL,'notes' => 'طلب بيانات للحد الادني والحد الاعلي للمياه العذبة التي يتم توزيعها من المياه المنتجه من محطة الزور الشمالية بعد الخلط','created_at' => '2024-10-22 08:35:56','updated_at' => '2024-10-28 04:55:47'),
    array('id' => '576','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'Consultant Responses to MEWRE Official Correspondence','content' => NULL,'notes' => 'K23165-0105D/24/0807
  21-10-2024','created_at' => '2024-10-23 10:17:44','updated_at' => '2024-10-27 06:24:06'),
    array('id' => '577','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'Request for Data on Future Water Projects','content' => NULL,'notes' => 'K23165-0105D/24/0806
  21-10-2024','created_at' => '2024-10-23 10:17:45','updated_at' => '2024-10-27 06:22:10'),
    array('id' => '578','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'MOM held on 16-10-2024
  Discussion on replies from the chemical Works Department','content' => NULL,'notes' => 'RFC-009
  K23165-0102D/24/0794
  21-10-2024','created_at' => '2024-10-23 10:20:00','updated_at' => '2024-10-27 06:20:43'),
    array('id' => '579','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'Training Course No.6 : SCADA and Instrumentation Design','content' => NULL,'notes' => 'K23165-0100D/24/0793
  21-10-2024','created_at' => '2024-10-23 10:20:41','updated_at' => '2024-10-27 06:19:09'),
    array('id' => '580','created_by' => '2','from_id' => '1','to_id' => '19','title' => 'K23165-0102D-RFC-002','content' => 'مرفق CD
  يحتوي علي 
  AS-Built Drawing AND Building Chemical LAB','notes' => NULL,'created_at' => '2024-10-23 10:50:17','updated_at' => '2024-10-23 10:50:17'),
    array('id' => '581','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'Dar Response to MEWRE comments on Dar Concept Design Report - Volume 2','content' => 'مرفق عدد 1 CD','notes' => 'K23165-0106D/24/0791
  23-10-2024','created_at' => '2024-10-27 08:08:14','updated_at' => '2024-10-28 07:13:11'),
    array('id' => '582','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'Interim Submission B4 (I.S.B4) Submission','content' => 'مرفق عدد 5 CD','notes' => 'K23165-0108D/24/0809
  20-10-2024','created_at' => '2024-10-27 08:10:28','updated_at' => '2024-11-12 05:26:44'),
    array('id' => '583','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'عدد 2 نسخة اصلية من 
  Final MOM held on 02-05-2024 Stakeholder Meeting','content' => NULL,'notes' => 'K23165-0108D/24/0804
  22-10-2024','created_at' => '2024-10-27 08:14:01','updated_at' => '2024-10-28 07:22:24'),
    array('id' => '584','created_by' => '2','from_id' => '1','to_id' => '19','title' => 'Dar Responses to MEWRE comments on the Concept Design
   (Best Alternative) - Volume 1','content' => NULL,'notes' => 'اعتماد الفكرة التصميمية المختارة مع  مراعاه ملاحظات اجتماع يوم 21-10-2024','created_at' => '2024-10-28 05:25:49','updated_at' => '2024-11-04 09:30:09'),
    array('id' => '585','created_by' => '1','from_id' => '1','to_id' => '15','title' => 'عناية ادارة الانتاج
  طلب اجراء عمل','content' => NULL,'notes' => NULL,'created_at' => '2024-10-28 05:57:33','updated_at' => '2024-10-31 05:03:40'),
    array('id' => '586','created_by' => '1','from_id' => '1','to_id' => '15','title' => 'عناية ادارة التصميم والاشراف
  طلب ازالة حوائط ومكاتب وتركيب أرضية ومسارات للكهرباء','content' => NULL,'notes' => NULL,'created_at' => '2024-10-28 05:59:38','updated_at' => '2024-10-28 11:16:13'),
    array('id' => '587','created_by' => '2','from_id' => '1','to_id' => '46','title' => 'طلب تفسير بعض المواد القانونية الواردة في قوانين الرعاية السكنية والخاصة بالبنية الأساسية والخدمات الرئيسية وذلك بالمدن والمشاريع الاسكانية الحالية والمستقبلية','content' => NULL,'notes' => NULL,'created_at' => '2024-10-28 06:45:37','updated_at' => '2024-10-31 06:48:59'),
    array('id' => '588','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'MOM held on 21-10-2024 at 11:30 AM
  Progress Coordination Meeting','content' => NULL,'notes' => 'K23165-0106D/24/0822
  23/10/2024','created_at' => '2024-10-28 07:37:43','updated_at' => '2024-10-28 08:51:20'),
    array('id' => '589','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'MOM held on 21-10-2024 at 12:30 PM
  Progress Coordination Meeting with Technical Services Department - "Mechanical Work Division"','content' => NULL,'notes' => 'K23165-0106D/24/0819
  23-10-2024','created_at' => '2024-10-28 07:41:50','updated_at' => '2024-10-28 08:50:20'),
    array('id' => '590','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'Final MOM held on 30-09-2024','content' => NULL,'notes' => 'K23165-0106D/24/0817
  23-10-2024','created_at' => '2024-10-28 07:43:27','updated_at' => '2024-10-28 08:51:55'),
    array('id' => '591','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'Draft Hydraulic Study Report','content' => '2 cd
  2 نسخة ورقية','notes' => 'K23165-0102D/24/0824
  24-10-2024','created_at' => '2024-10-28 10:03:24','updated_at' => '2024-10-29 07:03:09'),
    array('id' => '592','created_by' => '2','from_id' => '1','to_id' => '19','title' => 'ملاحظات على
  Monthly Progress Report No. 9','content' => NULL,'notes' => NULL,'created_at' => '2024-10-28 10:09:14','updated_at' => '2024-10-31 04:51:59'),
    array('id' => '593','created_by' => '1','from_id' => '60','to_id' => '1','title' => 'طلب اصدار هويات دخول','content' => NULL,'notes' => NULL,'created_at' => '2024-10-28 10:27:18','updated_at' => '2024-11-04 06:00:16'),
    array('id' => '594','created_by' => '2','from_id' => '1','to_id' => '18','title' => 'طلب ضيافة','content' => NULL,'notes' => NULL,'created_at' => '2024-10-28 10:29:40','updated_at' => '2024-10-29 04:45:28'),
    array('id' => '595','created_by' => '2','from_id' => '1','to_id' => '28','title' => 'طلب مخططات Fresh & Brackish Water (Design Drawings)','content' => NULL,'notes' => NULL,'created_at' => '2024-10-29 07:25:33','updated_at' => '2024-10-31 04:59:57'),
    array('id' => '596','created_by' => '2','from_id' => '1','to_id' => '30','title' => 'MOM held on 21-10-2024 at 12:30 PM
  Progress Coordination Meeting with Technical Services Department - "Mechanical Work Division"','content' => 'نسخة من محضر الاجتماع 21-10-2024 الساعة 12:30 للاطلاع 
  نسخة من القرار الوزاري رقم 126/2018 بشان اعتماد مدونة حفظ الطاقة في المبني','notes' => NULL,'created_at' => '2024-10-29 08:07:26','updated_at' => '2024-11-10 04:44:03'),
    array('id' => '598','created_by' => '1','from_id' => '1','to_id' => '19','title' => 'MOM held on 16-10-2024
  Discussion on Replies from the Chemical Works Department','content' => 'RFC 8
  RFC 9','notes' => NULL,'created_at' => '2024-10-29 10:10:07','updated_at' => '2024-10-31 04:54:18'),
    array('id' => '599','created_by' => '1','from_id' => '1','to_id' => '37','title' => 'Interim Submission B4 (I.S.B4) Submission','content' => NULL,'notes' => NULL,'created_at' => '2024-10-30 06:00:23','updated_at' => '2024-11-12 08:05:17'),
    array('id' => '600','created_by' => '1','from_id' => '1','to_id' => '39','title' => 'Interim Submission B4 (I.S.B4) Submission','content' => NULL,'notes' => NULL,'created_at' => '2024-10-30 06:01:00','updated_at' => '2024-12-09 10:13:30'),
    array('id' => '601','created_by' => '1','from_id' => '1','to_id' => '24','title' => 'Interim Submission B4 (I.S.B4) Submission','content' => NULL,'notes' => NULL,'created_at' => '2024-10-30 06:01:26','updated_at' => '2024-10-30 06:01:26'),
    array('id' => '602','created_by' => '1','from_id' => '1','to_id' => '33','title' => 'Interim Submission B4 (I.S.B4) Submission','content' => NULL,'notes' => NULL,'created_at' => '2024-10-30 06:01:58','updated_at' => '2024-11-06 05:02:53'),
    array('id' => '603','created_by' => '1','from_id' => '1','to_id' => '41','title' => 'Interim Submission B4 (I.S.B4) Submission','content' => NULL,'notes' => NULL,'created_at' => '2024-10-30 06:02:19','updated_at' => '2024-10-30 06:02:19'),
    array('id' => '604','created_by' => '1','from_id' => '1','to_id' => '5','title' => 'Interim Submission B4 (I.S.B4) Submission','content' => NULL,'notes' => NULL,'created_at' => '2024-10-30 06:02:35','updated_at' => '2024-10-30 06:02:35'),
    array('id' => '605','created_by' => '1','from_id' => '1','to_id' => '2','title' => 'Interim Submission B4 (I.S.B4) Submission','content' => NULL,'notes' => NULL,'created_at' => '2024-10-30 06:02:51','updated_at' => '2024-12-04 08:12:39'),
    array('id' => '606','created_by' => '2','from_id' => '1','to_id' => '30','title' => 'Concept Design Report - Volume (2)','content' => NULL,'notes' => NULL,'created_at' => '2024-10-30 06:51:38','updated_at' => '2024-11-10 04:52:15'),
    array('id' => '607','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'Final MOM held on 10-07-2024','content' => NULL,'notes' => 'K23165-0106D/24/0712
  19-09-2024','created_at' => '2024-10-30 08:54:13','updated_at' => '2024-10-30 09:47:31'),
    array('id' => '608','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'Final MOM held on 13-08-2024','content' => NULL,'notes' => 'K23165-0102D/24/0758
  07-10-2024','created_at' => '2024-10-30 08:58:51','updated_at' => '2024-10-30 09:03:00'),
    array('id' => '609','created_by' => '1','from_id' => '1','to_id' => '19','title' => 'Final MOM Held on 30-09-2024','content' => NULL,'notes' => NULL,'created_at' => '2024-11-03 09:00:21','updated_at' => '2024-11-04 06:29:58'),
    array('id' => '610','created_by' => '2','from_id' => '1','to_id' => '19','title' => 'اعتذار
  Course 8: New Construction Technology (BIM)','content' => NULL,'notes' => NULL,'created_at' => '2024-11-04 08:01:35','updated_at' => '2024-11-04 09:39:42'),
    array('id' => '611','created_by' => '1','from_id' => '1','to_id' => '15','title' => 'الحاق للكتاب الموجه لادارة التصميم والاشراف
  استفسارات المناقصين','content' => NULL,'notes' => NULL,'created_at' => '2024-11-04 08:29:55','updated_at' => '2024-11-07 05:48:30'),
    array('id' => '612','created_by' => '2','from_id' => '1','to_id' => '19','title' => 'Concept Design Report - Volume (2)','content' => NULL,'notes' => NULL,'created_at' => '2024-11-04 10:17:26','updated_at' => '2024-11-06 04:52:30'),
    array('id' => '613','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'Overall Projects: Training Courses
  Training Course No. 04: Mechanical Pump Stations Design (5 Days)','content' => NULL,'notes' => 'K23165-0100D/24/0846
  30-10-2024','created_at' => '2024-11-05 05:44:21','updated_at' => '2024-11-05 09:17:45'),
    array('id' => '614','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'تعديل خطأ مطبعي لكتاب سابق
  MEWRE Comments on Concept Report (Best
   Alternative)','content' => NULL,'notes' => 'K23165-0106D/24/0840
  30-10-2024','created_at' => '2024-11-05 05:50:12','updated_at' => '2024-11-05 09:11:20'),
    array('id' => '615','created_by' => '2','from_id' => '1','to_id' => '19','title' => 'Draft Hydraulic Study Report','content' => 'مرفق CD','notes' => NULL,'created_at' => '2024-11-05 06:40:13','updated_at' => '2024-11-05 06:40:13'),
    array('id' => '617','created_by' => '1','from_id' => '1','to_id' => '27','title' => 'تمديد إغلاق المناقصة ليصبح 19-12-2024 بدلا من 17-11-2024 لإعداد الملحق التعديلي رقم 2','content' => NULL,'notes' => NULL,'created_at' => '2024-11-05 09:59:12','updated_at' => '2024-11-10 06:19:28'),
    array('id' => '618','created_by' => '2','from_id' => '1','to_id' => '9','title' => 'امتثال برنامج 
  PCW (Project Collaboration Website)
  لمتطلبات CITRA','content' => NULL,'notes' => NULL,'created_at' => '2024-11-05 11:01:40','updated_at' => '2024-11-06 04:49:02'),
    array('id' => '619','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'محضر اجتماع
  MOM held on 29-10-2024 
  Progress Coordination','content' => NULL,'notes' => 'K23165-0106D/24/0859
  31-10-2024','created_at' => '2024-11-06 06:09:40','updated_at' => '2024-11-06 07:34:18'),
    array('id' => '620','created_by' => '1','from_id' => '1','to_id' => '33','title' => 'كشف بأسماء الوفد لعمل زيارة ميدانية الى مجمع توزيع مياه الدوحة يوم السبت الموافق 09-11-2024','content' => NULL,'notes' => NULL,'created_at' => '2024-11-06 07:56:49','updated_at' => '2024-11-06 08:00:13'),
    array('id' => '621','created_by' => '1','from_id' => '1','to_id' => '19','title' => 'ملاحظات الادارات على 
  Interim Submission B3 (I.S.B3) Submission','content' => NULL,'notes' => NULL,'created_at' => '2024-11-07 06:31:24','updated_at' => '2024-11-10 07:33:03'),
    array('id' => '622','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'Reimbursable Package Invoice No. 11- September2024
  فاتورة اكتوبر 2024 - فاتورة رقم 11','content' => 'K23165-0200D/24/0862
  03-11-2024','notes' => NULL,'created_at' => '2024-11-07 09:15:11','updated_at' => '2024-11-10 09:54:12'),
    array('id' => '623','created_by' => '2','from_id' => '1','to_id' => '8','title' => 'Reimbursable Package Invoice No. 11- September2024
  فاتورة اكتوبر 2024 - فاتورة رقم 11','content' => NULL,'notes' => 'K23165-0200D/24/0862
  03-11-2024','created_at' => '2024-11-07 09:33:34','updated_at' => '2024-11-10 05:27:09'),
    array('id' => '624','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'نسخة من محضر اجتماع
  Project Collaboration Website (PCW) Demonstration','content' => NULL,'notes' => 'K23165-0100D/24/0860
  03-11-2024','created_at' => '2024-11-07 09:49:15','updated_at' => '2024-11-11 12:44:14'),
    array('id' => '625','created_by' => '1','from_id' => '1','to_id' => '33','title' => 'محضر اجتماع
  MOM held on 24-10-2024: Stakeholder Meeting','content' => NULL,'notes' => NULL,'created_at' => '2024-11-10 08:12:53','updated_at' => '2024-12-08 09:45:22'),
    array('id' => '626','created_by' => '2','from_id' => '1','to_id' => '2','title' => 'Phase 1 Interim Report Submission - Rev 2','content' => NULL,'notes' => NULL,'created_at' => '2024-11-10 10:32:27','updated_at' => '2024-11-12 07:23:29'),
    array('id' => '627','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'Invoice No. 01 - Completion of Stage 1 Phase 1 & Presentation & Acceptance of Deliverables','content' => NULL,'notes' => 'K23165-0106D/24/0876
  05-11-2024','created_at' => '2024-11-10 10:59:39','updated_at' => '2024-11-20 04:59:36'),
    array('id' => '628','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'عدد 2 نسخة اصلية من محضر اجتماع
  Final MOM held on 27-08-2024','content' => NULL,'notes' => 'K23165-0102D/24/0903
  10-11-2024','created_at' => '2024-11-11 06:52:59','updated_at' => '2024-11-13 09:41:13'),
    array('id' => '629','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'Training Course No. 9 Preparation of Tender Documents (3 days)','content' => NULL,'notes' => 'K23165-0100D/24/0882
  06-11-2024','created_at' => '2024-11-11 06:56:03','updated_at' => '2024-11-24 05:31:03'),
    array('id' => '630','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'Monthly Progress Report No. 10','content' => NULL,'notes' => 'K23165-0100D/24/0885
  07-11-2024','created_at' => '2024-11-11 07:06:27','updated_at' => '2024-11-13 08:11:14'),
    array('id' => '631','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'نسخة من محضر اجتماع
  MOM held on 04-11-2024 - Discussion Regarding Current Progress','content' => 'مرفق RFC004
  RFC4
  RFC-4
  RFC 4','notes' => 'K23165-0105D/24/0880
  06-11-2024','created_at' => '2024-11-11 10:04:37','updated_at' => '2024-11-13 08:09:43'),
    array('id' => '632','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'نسخة من محضر اجتماع 
  MOM held on 24-10-2024 - Stakeholder Meeting','content' => NULL,'notes' => 'K23165-0108D/24/0877
  05-11-2024','created_at' => '2024-11-11 10:17:15','updated_at' => '2024-11-13 08:02:54'),
    array('id' => '633','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'Request for Data on Future Water Projects under PAHW Jurisdiction','content' => NULL,'notes' => 'K23165-0105D/24/0895
  07-11-2024','created_at' => '2024-11-11 10:25:04','updated_at' => '2024-11-11 10:25:04'),
    array('id' => '634','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'Interim Submission B4 (I.S.B4) Submission - REV 1','content' => NULL,'notes' => 'K23165-0108D/24/0873
  04-11-2024','created_at' => '2024-11-11 10:40:57','updated_at' => '2024-11-20 04:54:04'),
    array('id' => '635','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'Concept Design Report - Volume 2','content' => NULL,'notes' => 'K23165-0106D/24/0897
  07-11-2024','created_at' => '2024-11-11 12:03:10','updated_at' => '2024-11-21 05:57:28'),
    array('id' => '636','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'نسخة  من محضر اجتماع
  MOM held on 05-11-2024 Collaboration Website (PCW) Demonstration','content' => NULL,'notes' => 'K23165-0100D/24/0899
  07-11-2024','created_at' => '2024-11-11 12:07:49','updated_at' => '2024-11-14 07:38:18'),
    array('id' => '637','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'Revised Schedule','content' => NULL,'notes' => 'K23165-0102D/24/0901
  07-11-2024','created_at' => '2024-11-11 12:09:56','updated_at' => '2024-11-21 05:56:02'),
    array('id' => '638','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'عدد 2 نسخة اصلية من محضر اجتماع
  Final MOM held on 29-09-2024','content' => NULL,'notes' => 'K23165-0102D/24/0902
  10-11-2024','created_at' => '2024-11-11 12:13:09','updated_at' => '2024-11-13 09:43:52'),
    array('id' => '639','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'عدد 2 نسخة اصلية من محضر اجتماع
  MOM held on 10-09-2024 - Coordination Meeting','content' => NULL,'notes' => 'K23165-0105D/24/0904
  10-11-2024','created_at' => '2024-11-11 12:16:15','updated_at' => '2024-11-13 09:42:40'),
    array('id' => '640','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'نسخة من محضر اجتماع
  MOM held on 03-09-2024 - Coordination Meeting','content' => NULL,'notes' => 'K23165-0108D/24/0889
  11-11-2024','created_at' => '2024-11-11 12:18:46','updated_at' => '2024-11-20 08:40:24'),
    array('id' => '641','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'نسخة من محضر الاجتماع
  MOM held on 16-10-2024 - Coordination Meeting - Chemical Works Department','content' => NULL,'notes' => 'K23165-0108D/24/0890
  11-11-2024','created_at' => '2024-11-11 12:21:04','updated_at' => '2024-11-20 12:38:28'),
    array('id' => '642','created_by' => '1','from_id' => '1','to_id' => '19','title' => 'مخرجات المرحلة الاولى الطور الثاني','content' => NULL,'notes' => NULL,'created_at' => '2024-11-12 09:28:07','updated_at' => '2024-11-13 09:00:35'),
    array('id' => '643','created_by' => '1','from_id' => '1','to_id' => '37','title' => 'رد على كتاب الاعمال الكيماوية رقم 20240650000203 المؤرخ 04-11-2024 بخصوص طلب محضر الاجتماع','content' => NULL,'notes' => NULL,'created_at' => '2024-11-12 09:31:30','updated_at' => '2024-11-14 09:31:51'),
    array('id' => '644','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'Final Environmental Impact Assessment Scoping Report','content' => NULL,'notes' => 'K23165-0102D/24/0912
  13-11-2024','created_at' => '2024-11-13 13:34:06','updated_at' => '2024-11-20 08:35:18'),
    array('id' => '645','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'نسخة من محضر اجتماع
  MOM held on 15-10-2024','content' => NULL,'notes' => 'K23165-0108D/24/0886
  13-11-2024','created_at' => '2024-11-13 13:36:30','updated_at' => '2024-11-24 07:06:53'),
    array('id' => '646','created_by' => '1','from_id' => '1','to_id' => '19','title' => 'Concept Design Report - Volume 2
  مرفق ملاحظات ادارة التصميم والاشراف على محضر اجتماع 21-10-2024','content' => 'ملاحظات ادارة التصميم والاشراف على محضر اجتماع 21-10-2024','notes' => NULL,'created_at' => '2024-11-14 06:00:20','updated_at' => '2024-11-17 10:30:47'),
    array('id' => '647','created_by' => '1','from_id' => '1','to_id' => '33','title' => 'طلب اصدار تصاريح دخول لمجمع توزيع ميناء عبد الله 2 يوم الاربعاء الموافق 20-11-2024 الساعة 9 صباحا','content' => 'كشف السيارات','notes' => NULL,'created_at' => '2024-11-14 06:05:43','updated_at' => '2024-11-19 08:19:07'),
    array('id' => '648','created_by' => '1','from_id' => '1','to_id' => '19','title' => 'Interim Submission B2 (I.S.B2) Submission
  Interim Submission B3 (I.S.B3) Submission','content' => 'ملاحظات ادارة مشاريع المنشآت المائية 
  ملاحظات ادارة مشاريع الشبكات المائية','notes' => NULL,'created_at' => '2024-11-14 06:09:25','updated_at' => '2024-11-17 04:12:56'),
    array('id' => '649','created_by' => '1','from_id' => '1','to_id' => '59','title' => 'طلب التعاقد بالأمر المباشر للإشراف علي انشاء وانجاز وصيانة وتطوير مجمع توزيع مياه الدوحة القائم والجديد وخط مياه من المجمع وحتى دوار الأمم المتحدة مع الأعمال الملحقة','content' => NULL,'notes' => NULL,'created_at' => '2024-11-14 06:31:13','updated_at' => '2024-11-27 05:09:35'),
    array('id' => '650','created_by' => '1','from_id' => '1','to_id' => '19','title' => 'رد على استفسارات RFC5','content' => NULL,'notes' => 'RFC5
  RFC 5
  RFC-5','created_at' => '2024-11-14 07:02:20','updated_at' => '2024-11-17 05:56:56'),
    array('id' => '651','created_by' => '1','from_id' => '1','to_id' => '2','title' => 'Interim Submission B4 (I.S.B4) Submission - Rev 1','content' => NULL,'notes' => NULL,'created_at' => '2024-11-14 09:45:40','updated_at' => '2024-12-04 08:09:17'),
    array('id' => '652','created_by' => '1','from_id' => '1','to_id' => '39','title' => 'Interim Submission B4 (I.S.B4) Submission - Rev 1','content' => NULL,'notes' => NULL,'created_at' => '2024-11-14 09:46:48','updated_at' => '2024-12-09 10:16:18'),
    array('id' => '653','created_by' => '1','from_id' => '1','to_id' => '24','title' => 'Interim Submission B4 (I.S.B4) Submission - Rev 1','content' => NULL,'notes' => NULL,'created_at' => '2024-11-14 09:48:43','updated_at' => '2024-11-21 04:33:18'),
    array('id' => '654','created_by' => '1','from_id' => '1','to_id' => '33','title' => 'Interim Submission B4 (I.S.B4) Submission - Rev 1','content' => NULL,'notes' => NULL,'created_at' => '2024-11-14 09:48:58','updated_at' => '2024-11-14 09:48:58'),
    array('id' => '655','created_by' => '1','from_id' => '1','to_id' => '41','title' => 'Interim Submission B4 (I.S.B4) Submission - Rev 1','content' => NULL,'notes' => NULL,'created_at' => '2024-11-14 09:49:44','updated_at' => '2024-11-16 03:29:48'),
    array('id' => '656','created_by' => '1','from_id' => '1','to_id' => '5','title' => 'Interim Submission B4 (I.S.B4) Submission - Rev 1','content' => NULL,'notes' => NULL,'created_at' => '2024-11-14 09:50:00','updated_at' => '2024-11-14 09:50:00'),
    array('id' => '657','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'Data Collection Report','content' => '1 hard copy
  6 CD','notes' => 'K23165-0102D/24/0920
  14-11-2024','created_at' => '2024-11-15 10:40:31','updated_at' => '2024-11-20 08:37:13'),
    array('id' => '658','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'Submission of Concept Design (3 Alternatives) Report - Phase 1','content' => '1 hard copy
  5 CD','notes' => 'K23165-0102D/24/0921
  14-11-2024','created_at' => '2024-11-15 10:43:22','updated_at' => '2024-12-02 22:01:10'),
    array('id' => '659','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'نسخة من محضر اجتماع
  MOM held on 07-11-2024 at 08:30
  Progress Coordination Meeting with MEWRE
  
  عنوان الكتاب خطأ المحضر بتاريخ 10-11-2024','content' => NULL,'notes' => 'K23165-0106D/24/0910
  13-11-2024','created_at' => '2024-11-15 10:45:52','updated_at' => '2024-11-25 10:24:54'),
    array('id' => '660','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'البرنامج التدريبي
  مرفق جدول زمني معدل للبرنامج التدريبي','content' => NULL,'notes' => 'K23165-0100D/24/0887
  14-11-2024','created_at' => '2024-11-15 10:47:47','updated_at' => '2024-11-20 08:41:46'),
    array('id' => '661','created_by' => '1','from_id' => '1','to_id' => '8','title' => 'صرف الدفعة الخاصة بالمرحلة الأولى الطور الأول','content' => NULL,'notes' => NULL,'created_at' => '2024-11-17 08:05:02','updated_at' => '2024-11-17 08:05:02'),
    array('id' => '662','created_by' => '1','from_id' => '27','to_id' => '1','title' => 'فتح واحالة مظاريف العطاءات','content' => NULL,'notes' => '9769/23/13
  12-11-2024','created_at' => '2024-11-17 09:22:31','updated_at' => '2024-11-17 09:37:23'),
    array('id' => '663','created_by' => '1','from_id' => '1','to_id' => '7','title' => 'سكربة الات التصوير
  رد على كتاب السيد الوكيل المساعد للخدمات الفنية والمشاغل الرئيسية رقم 2024152061000024 المؤرخ 29-10-2024','content' => NULL,'notes' => NULL,'created_at' => '2024-11-17 09:30:19','updated_at' => '2024-11-18 04:24:45'),
    array('id' => '664','created_by' => '1','from_id' => '1','to_id' => '51','title' => 'محضري اجتماع 30-10-2024 و 05-11-2024
  Collaboration Website (PCW) Demonstration','content' => NULL,'notes' => NULL,'created_at' => '2024-11-17 10:26:41','updated_at' => '2024-11-17 10:26:41'),
    array('id' => '665','created_by' => '1','from_id' => '1','to_id' => '8','title' => 'الملحق التعديلي رقم 2','content' => 'عدد 4 CD','notes' => NULL,'created_at' => '2024-11-18 08:25:48','updated_at' => '2024-11-25 08:52:50'),
    array('id' => '666','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'نسخة من محضر اجتماع
  MOM held on 14-10-2024 : Progress Meeting and Presentation','content' => NULL,'notes' => 'K23165-0100D/24/0925
  18-11-2024','created_at' => '2024-11-18 13:05:48','updated_at' => '2024-11-24 05:24:53'),
    array('id' => '667','created_by' => '1','from_id' => '1','to_id' => '26','title' => 'Request for Data on Future Water Projects under PAHW Jurisdiction','content' => NULL,'notes' => 'بالاشارة للكتاب رقم
  K23165-0105D/24/0895
  07-11-2024','created_at' => '2024-11-19 07:58:15','updated_at' => '2024-11-19 07:58:15'),
    array('id' => '668','created_by' => '1','from_id' => '18','to_id' => '1','title' => 'قرار اداري رقم 2244 لسنة 2024
  بشأن تشكيل لجنة دراسة عطاءات المناقصة','content' => NULL,'notes' => NULL,'created_at' => '2024-11-19 08:12:16','updated_at' => '2024-11-19 08:14:47'),
    array('id' => '669','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'نسخة من محضر اجتماع
  MOM held on 13-11-2024 
  Stakeholder meeting with the water facilities operation and maintenance operation and maintenance department to discuss comments of B4 Submission','content' => NULL,'notes' => 'K23165-0108D/24/0940
  19-11-2024','created_at' => '2024-11-19 12:47:39','updated_at' => '2024-12-02 07:39:05'),
    array('id' => '670','created_by' => '1','from_id' => '23','to_id' => '1','title' => 'تسليم ملفات الاوتوكاد للتصميم النهائي / المخططات التنفيذية لمحطتي الضخ في الشويخ وحولي','content' => 'مرفق CD','notes' => '5071033-C01-411
  18-11-2024','created_at' => '2024-11-20 09:27:02','updated_at' => '2024-11-20 09:27:02'),
    array('id' => '671','created_by' => '1','from_id' => '26','to_id' => '1','title' => 'حصر الاراضي لغرض الرعاية السكنية
  دعوة لحضور اجتماع 21-11-2024','content' => NULL,'notes' => NULL,'created_at' => '2024-11-21 04:39:26','updated_at' => '2024-12-02 07:37:55'),
    array('id' => '673','created_by' => '1','from_id' => '1','to_id' => '19','title' => 'Training Course No. 9 Preparation of Tender Documents (3 days)','content' => NULL,'notes' => NULL,'created_at' => '2024-11-21 08:21:42','updated_at' => '2024-11-24 05:37:01'),
    array('id' => '674','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'Invoice No. 02 - Completion of Stage 1 Phase 2 & Presentation & Acceptance of Deliverables','content' => NULL,'notes' => 'K23165-0105/24/0917
  14-11-2024','created_at' => '2024-11-21 08:29:24','updated_at' => '2024-11-25 12:44:21'),
    array('id' => '675','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'Interim Submission B5 (I.S.B5) Submission','content' => NULL,'notes' => 'K23165-0108D/24/0945
  21-11-2024','created_at' => '2024-11-23 16:41:23','updated_at' => '2024-12-02 21:59:28'),
    array('id' => '676','created_by' => '1','from_id' => '1','to_id' => '8','title' => 'صرف الدفعة الخاصة بالمرحلة الأولى الطور الثاني','content' => 'اصل الفاتورة رقم 2 بالكتاب رقم 
  K23165-0105/24/0917 المؤرخ 14-11-2024','notes' => NULL,'created_at' => '2024-11-24 08:06:05','updated_at' => '2024-11-28 20:35:04'),
    array('id' => '677','created_by' => '1','from_id' => '1','to_id' => '18','title' => 'حجز قاعة جميلة الشطي
  يوم الاثنين الموافق 09-12-2024','content' => NULL,'notes' => NULL,'created_at' => '2024-11-24 10:04:05','updated_at' => '2024-11-25 12:25:04'),
    array('id' => '678','created_by' => '1','from_id' => '1','to_id' => '45','title' => 'الدراسة البيئية','content' => 'عدد 2 نسخة ورقية (لغة عربية + لغة انجليزية) للدراسة البيئية المعدة من قبل الاستشاري','notes' => NULL,'created_at' => '2024-11-24 10:11:14','updated_at' => '2024-11-24 10:11:14'),
    array('id' => '679','created_by' => '1','from_id' => '1','to_id' => '30','title' => 'Concept Design Report - Volume 2','content' => NULL,'notes' => 'رد على كتابهم رقم 20240643000575 المؤرخ 29-10-2024','created_at' => '2024-11-24 10:18:30','updated_at' => '2024-11-29 17:21:13'),
    array('id' => '680','created_by' => '1','from_id' => '1','to_id' => '37','title' => 'بخصوص: MOM held on 15-10-2024
  MOM held on 16-10-2024 - Coordination Meeting - Chemical Works Department','content' => NULL,'notes' => 'رد على الكتاب رقم 20240650000203','created_at' => '2024-11-25 07:19:18','updated_at' => '2024-11-27 09:57:22'),
    array('id' => '681','created_by' => '1','from_id' => '1','to_id' => '33','title' => 'بخصوص: MOM held on 15-10-2024','content' => NULL,'notes' => NULL,'created_at' => '2024-11-25 07:23:43','updated_at' => '2024-11-29 17:31:24'),
    array('id' => '682','created_by' => '1','from_id' => '1','to_id' => '33','title' => 'الحاق بالكتاب رقم 20240650000221  المؤرخ 11-11-2024
  MOM held on 24-10-2024: Stakeholder Meeting','content' => NULL,'notes' => NULL,'created_at' => '2024-11-25 07:30:44','updated_at' => '2024-12-08 09:45:10'),
    array('id' => '683','created_by' => '1','from_id' => '41','to_id' => '1','title' => 'Interim Submission B4 (I.S.B4) Submission - Rev 1','content' => NULL,'notes' => 'رد على كتابنا 20240650000207 المؤرخ 17-11-2024','created_at' => '2024-11-25 12:31:12','updated_at' => '2024-12-18 13:20:45'),
    array('id' => '684','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'Training Course No.4 : Mechanical Pump Stations Design','content' => NULL,'notes' => 'K23165-0100D/24/0950
  25-11-2024','created_at' => '2024-11-25 20:34:41','updated_at' => '2024-12-02 09:59:51'),
    array('id' => '685','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'نسخة من محضر اجتماع
  MOM held on 29-10-2024 : Surge analysis','content' => 'مرفق عدد 5 CD','notes' => 'K23165-0105D/24/0961
  25-11-2024','created_at' => '2024-11-25 20:37:41','updated_at' => '2024-12-02 21:58:02'),
    array('id' => '686','created_by' => '1','from_id' => '1','to_id' => '2','title' => 'Data Collection Report - Phase 1','content' => NULL,'notes' => '0920','created_at' => '2024-11-27 06:05:40','updated_at' => '2024-12-04 08:07:31'),
    array('id' => '687','created_by' => '1','from_id' => '1','to_id' => '33','title' => 'Concept Design Report - Phase 1','content' => NULL,'notes' => '0921','created_at' => '2024-11-27 06:12:20','updated_at' => '2024-11-27 06:12:20'),
    array('id' => '688','created_by' => '1','from_id' => '1','to_id' => '30','title' => 'Concept Design Report - Phase 1','content' => NULL,'notes' => '0921','created_at' => '2024-11-27 06:14:30','updated_at' => '2024-11-27 06:14:30'),
    array('id' => '689','created_by' => '1','from_id' => '1','to_id' => '56','title' => 'Concept Design Report - Phase 1','content' => NULL,'notes' => '0921','created_at' => '2024-11-27 06:15:02','updated_at' => '2024-11-27 06:15:02'),
    array('id' => '690','created_by' => '1','from_id' => '1','to_id' => '37','title' => 'Concept Design Report - Phase 1','content' => NULL,'notes' => '0921','created_at' => '2024-11-27 06:15:18','updated_at' => '2024-12-05 04:07:07'),
    array('id' => '691','created_by' => '1','from_id' => '1','to_id' => '61','title' => 'Concept Design Report - Phase 1','content' => NULL,'notes' => '0921','created_at' => '2024-11-27 06:16:30','updated_at' => '2024-11-27 06:55:30'),
    array('id' => '692','created_by' => '1','from_id' => '1','to_id' => '35','title' => 'Concept Design Report - Phase 1','content' => NULL,'notes' => '0921','created_at' => '2024-11-27 06:16:45','updated_at' => '2024-11-27 06:16:45'),
    array('id' => '693','created_by' => '1','from_id' => '1','to_id' => '36','title' => 'Concept Design Report - Phase 1','content' => NULL,'notes' => '0921','created_at' => '2024-11-27 06:17:11','updated_at' => '2024-11-27 06:17:11'),
    array('id' => '694','created_by' => '1','from_id' => '1','to_id' => '38','title' => 'Concept Design Report - Phase 1','content' => NULL,'notes' => '0921','created_at' => '2024-11-27 06:17:34','updated_at' => '2024-12-09 12:04:05'),
    array('id' => '695','created_by' => '1','from_id' => '1','to_id' => '33','title' => 'طلب تصاريح لمجمع توزيع مياه صبحان لمدة 10 ايام من 30-11-2024 الى 09-12-2024','content' => NULL,'notes' => NULL,'created_at' => '2024-11-28 05:34:08','updated_at' => '2024-12-02 21:35:38'),
    array('id' => '696','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'عدد 2 نسخة اصلية من محضر اجتماع
  Final MOM held on 29-10-2024  : Progress Coordination','content' => NULL,'notes' => 'K23165-0106D/24/0973
  27-11-2024','created_at' => '2024-11-28 05:45:38','updated_at' => '2024-12-05 08:22:19'),
    array('id' => '697','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'عدد 2 نسخة اصلية من محضر اجتماع
  Final MOM held on 21-10-2024 : Progress Cordination Meeting','content' => NULL,'notes' => 'K23165-0106D/24/0965
  27-11-2024','created_at' => '2024-11-28 05:48:36','updated_at' => '2024-12-08 11:56:51'),
    array('id' => '698','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'Preliminary Design Report Submission (Intermediate Submission)','content' => NULL,'notes' => 'K23165-0106D/24/0978
  28-11-2024','created_at' => '2024-11-28 19:48:42','updated_at' => '2024-12-05 08:28:09'),
    array('id' => '699','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'MEWRE Comments on MOM of 21-10-2024 with The Technical Services Department','content' => NULL,'notes' => 'K23165-0106D/24/0946
  28-11-2024','created_at' => '2024-11-28 19:52:34','updated_at' => '2024-12-05 08:24:57'),
    array('id' => '701','created_by' => '1','from_id' => '58','to_id' => '1','title' => 'استفسارات','content' => NULL,'notes' => 'AIG/TD/193/24
  21-11-2024','created_at' => '2024-12-02 09:13:30','updated_at' => '2024-12-02 11:33:03'),
    array('id' => '702','created_by' => '1','from_id' => '1','to_id' => '41','title' => 'Interim Submission B5 (I.S.B5) Submission','content' => 'مرفق CD يحتوي على التقارير من B1 الى B5','notes' => NULL,'created_at' => '2024-12-02 12:01:32','updated_at' => '2024-12-02 12:01:32'),
    array('id' => '703','created_by' => '1','from_id' => '1','to_id' => '33','title' => 'Final Inception Report','content' => 'CD','notes' => NULL,'created_at' => '2024-12-02 12:44:01','updated_at' => '2024-12-02 12:44:01'),
    array('id' => '704','created_by' => '1','from_id' => '1','to_id' => '33','title' => 'Interim Submission B5 (I.S.B5) Submission','content' => NULL,'notes' => NULL,'created_at' => '2024-12-02 13:01:36','updated_at' => '2024-12-02 13:01:36'),
    array('id' => '705','created_by' => '1','from_id' => '1','to_id' => '24','title' => 'Interim Submission B5 (I.S.B5) Submission','content' => NULL,'notes' => NULL,'created_at' => '2024-12-02 13:02:06','updated_at' => '2024-12-02 13:02:06'),
    array('id' => '706','created_by' => '1','from_id' => '1','to_id' => '37','title' => 'Interim Submission B5 (I.S.B5) Submission','content' => NULL,'notes' => NULL,'created_at' => '2024-12-02 13:02:27','updated_at' => '2024-12-10 08:51:57'),
    array('id' => '707','created_by' => '1','from_id' => '1','to_id' => '39','title' => 'Interim Submission B5 (I.S.B5) Submission','content' => NULL,'notes' => NULL,'created_at' => '2024-12-02 13:02:47','updated_at' => '2024-12-10 08:45:09'),
    array('id' => '708','created_by' => '1','from_id' => '1','to_id' => '5','title' => 'Interim Submission B5 (I.S.B5) Submission','content' => NULL,'notes' => NULL,'created_at' => '2024-12-02 13:03:10','updated_at' => '2024-12-02 13:03:10'),
    array('id' => '709','created_by' => '1','from_id' => '1','to_id' => '2','title' => 'Interim Submission B5 (I.S.B5) Submission','content' => NULL,'notes' => NULL,'created_at' => '2024-12-02 13:03:35','updated_at' => '2024-12-02 13:03:35'),
    array('id' => '710','created_by' => '1','from_id' => '1','to_id' => '33','title' => 'MOM held on 13-11-2024 : Stakeholder Meeting with the Water Facilities Operation and Maintenance Department to Discuss Comments on B4 Submission','content' => NULL,'notes' => NULL,'created_at' => '2024-12-03 09:40:44','updated_at' => '2024-12-03 09:40:44'),
    array('id' => '711','created_by' => '1','from_id' => '1','to_id' => '19','title' => 'MOM held on 15-10-2024 & MOM held on 16-10-2024 Coordination Meetings - Chemical Works Department','content' => 'ملاحظات ادارة الاعمال الكيماوية','notes' => NULL,'created_at' => '2024-12-03 09:52:02','updated_at' => '2024-12-05 03:55:08'),
    array('id' => '712','created_by' => '1','from_id' => '1','to_id' => '8','title' => 'شركة سميك انترناشيونال بي تي واي ليمتد','content' => 'ردا على كتابهم رقم 20242620001189 المؤرخ 28-11-2024','notes' => NULL,'created_at' => '2024-12-03 11:30:19','updated_at' => '2024-12-09 12:17:19'),
    array('id' => '713','created_by' => '1','from_id' => '1','to_id' => '19','title' => 'Request for Data on Future Water Projects','content' => 'مرفق Flash Memory','notes' => 'ردا على كتابهم رقم 0806
  ردا على كتابهم رقم 0880','created_at' => '2024-12-03 12:51:15','updated_at' => '2024-12-12 10:01:03'),
    array('id' => '714','created_by' => '1','from_id' => '1','to_id' => '5','title' => 'Interim Submission B4 Report (I.S.B4)','content' => NULL,'notes' => 'الحاقا بكتابنا رقم 20240650000208 المؤرخ 30-10-2024','created_at' => '2024-12-03 13:02:23','updated_at' => '2024-12-03 13:02:23'),
    array('id' => '716','created_by' => '1','from_id' => '1','to_id' => '39','title' => 'Interim Submission B4 Report (I.S.B4)','content' => NULL,'notes' => 'الحاقا لكتابنا رقم 20240650000204 المؤرخ 30-10-2024','created_at' => '2024-12-03 13:05:43','updated_at' => '2024-12-09 10:20:16'),
    array('id' => '717','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'Comments on B4 Submission: Request for Clarifications RFC-009','content' => NULL,'notes' => 'K23165-0108D/24/0993
  03-12-2024','created_at' => '2024-12-04 00:32:43','updated_at' => '2024-12-05 06:11:30'),
    array('id' => '718','created_by' => '2','from_id' => '1','to_id' => '19','title' => 'MOM held on 24-10-2024 - Stakeholder Meeting','content' => 'تم تسليم الملاحظات على محضر 24-10-2024 فى اجتماع يوم 27-11-2024','notes' => 'رد على الكتاب رقم K23165-0108D/24/0877 بتاريخ 05-11-2024','created_at' => '2024-12-05 07:41:41','updated_at' => '2024-12-05 07:41:41'),
    array('id' => '719','created_by' => '2','from_id' => '1','to_id' => '37','title' => 'المواصفات الفنية والمستندات التى تم تقديمها من قبل المناقصين وكذلك جداول الكميات والأسعار بعد تجميع الشركات المشاركة فى العطاء للدراسة وابداء الرأي','content' => 'مرفق عدد 2 CD','notes' => 'الرد خلال يومين عمل
  بحد أقصي يوم الاثنين 09-12-2024','created_at' => '2024-12-05 09:41:41','updated_at' => '2024-12-10 09:01:50'),
    array('id' => '720','created_by' => '2','from_id' => '1','to_id' => '56','title' => 'المواصفات الفنية والمستندات التى تم تقديمها من قبل المناقصين وكذلك جداول الكميات والأسعار بعد تجميع الشركات المشاركة فى العطاء للدراسة وابداء الرأي','content' => 'مرفق عدد 2 CD','notes' => 'الرد خلال يومين عمل
  بحد أقصي يوم الاثنين 09-12-2024','created_at' => '2024-12-05 09:43:53','updated_at' => '2024-12-05 09:44:02'),
    array('id' => '721','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'MOM held on 03-12-2024 : Progress Coordination Meeting with Technical Services Department Mechanical Work Division','content' => NULL,'notes' => 'K23165-0106D/24/1008
  05-12-2024','created_at' => '2024-12-05 18:09:20','updated_at' => '2024-12-12 07:37:19'),
    array('id' => '722','created_by' => '1','from_id' => '1','to_id' => '24','title' => 'Phase 1 Interim Report Submission - Rev 2','content' => NULL,'notes' => 'الحاق لكتابنا رقم 20240650000224 بتاريخ 11-11-2024','created_at' => '2024-12-08 12:51:18','updated_at' => '2024-12-08 12:51:18'),
    array('id' => '723','created_by' => '2','from_id' => '1','to_id' => '27','title' => 'الملحق التعديلي رقم 2
  و تمديد موعد الاغلاق ليصبح 22-01-2024 بدلا من 22-12-2024','content' => 'مرفق CD','notes' => NULL,'created_at' => '2024-12-08 14:05:35','updated_at' => '2024-12-10 11:06:07'),
    array('id' => '724','created_by' => '2','from_id' => '1','to_id' => '18','title' => 'توفير الخدمات في مشاريع المؤسسة العامة للرعاية السكنية','content' => NULL,'notes' => NULL,'created_at' => '2024-12-09 09:12:35','updated_at' => '2024-12-09 09:12:35'),
    array('id' => '725','created_by' => '2','from_id' => '39','to_id' => '1','title' => 'Interim Submission B4 (I.S.B4) Submission - Rev 1','content' => NULL,'notes' => 'رد علي كتابنا رقم 20240650000204','created_at' => '2024-12-09 10:22:35','updated_at' => '2024-12-09 10:24:04'),
    array('id' => '726','created_by' => '2','from_id' => '33','to_id' => '1','title' => 'Concept Design Report - Phase 1','content' => NULL,'notes' => NULL,'created_at' => '2024-12-09 10:28:17','updated_at' => '2024-12-09 10:31:20'),
    array('id' => '727','created_by' => '1','from_id' => '1','to_id' => '24','title' => 'تعديات خطوط نقل المنتجات البترولية والكيماوية على خدمات المياه في منطقة الشعيبة الصناعية ومصفاة ميناء الأحمدي','content' => NULL,'notes' => 'رد علي الكتاب رقم 20240058000429 بتاريخ 07-12-2024','created_at' => '2024-12-09 10:40:25','updated_at' => '2024-12-11 09:37:27'),
    array('id' => '728','created_by' => '1','from_id' => '1','to_id' => '39','title' => 'Phase 1 Interim Report Submission - Rev 2','content' => NULL,'notes' => 'الحاق بكتابنا رقم 20240650000222 المؤرخ 11-11-2024','created_at' => '2024-12-09 11:03:37','updated_at' => '2024-12-09 11:04:27'),
    array('id' => '729','created_by' => '1','from_id' => '38','to_id' => '1','title' => 'Concept Design Report - Phase 1','content' => 'مرفق CD','notes' => 'ا.ن.ش 191
  09-12-2024
  
  ردا على كتابنا رقم ات/1640/2024 المؤرخ 02-12-2024','created_at' => '2024-12-09 11:43:46','updated_at' => '2024-12-09 11:45:19'),
    array('id' => '730','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'Final MOM held on 10-11-2024
  Progress Coordination Meeting with MEWRE','content' => '2 نسخة أصليه من محضر الاجتماع المنعقد الساعه 8:30 ص يوم 10-11-2024','notes' => 'K23165-0106D/24/0966
  08-12-2024','created_at' => '2024-12-09 11:54:43','updated_at' => '2024-12-09 11:54:43'),
    array('id' => '731','created_by' => '1','from_id' => '1','to_id' => '33','title' => 'Concept Design Report - Phase 1','content' => NULL,'notes' => 'ردا على كتابهم رقم 20240650000243 المؤرخ 08-12-2024','created_at' => '2024-12-09 13:20:12','updated_at' => '2024-12-09 13:24:04'),
    array('id' => '732','created_by' => '2','from_id' => '1','to_id' => '51','title' => 'محضري اجتماع 30-10-2024 و 05-11-2024
  Collaboration Website (PCW) Demonstration','content' => NULL,'notes' => 'الحاق بكتابنا رقم 20240650000230 بتاريخ 20-11-2024','created_at' => '2024-12-09 13:28:52','updated_at' => '2024-12-09 13:28:52'),
    array('id' => '733','created_by' => '2','from_id' => '39','to_id' => '1','title' => 'Interim Submission B5 (I.S.B5) Submission','content' => NULL,'notes' => NULL,'created_at' => '2024-12-10 08:41:41','updated_at' => '2024-12-10 08:41:41'),
    array('id' => '734','created_by' => '2','from_id' => '37','to_id' => '1','title' => 'Interim Submission B5 (I.S.B5) Submission','content' => NULL,'notes' => NULL,'created_at' => '2024-12-10 08:48:36','updated_at' => '2024-12-10 08:48:36'),
    array('id' => '735','created_by' => '2','from_id' => '37','to_id' => '1','title' => 'المواصفات الفنية والمستندات التى تم تقديمها من قبل المناقصين وكذلك جداول الكميات والأسعار بعد تجميع الشركات المشاركة فى العطاء للدراسة وابداء الرأي','content' => NULL,'notes' => NULL,'created_at' => '2024-12-10 08:56:26','updated_at' => '2024-12-10 08:56:26'),
    array('id' => '736','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'Final MOM held on 14-10-2024: Progress Meeting','content' => NULL,'notes' => 'K23165-0100D/24/1016
  10-12-2024','created_at' => '2024-12-10 11:55:41','updated_at' => '2024-12-19 09:51:41'),
    array('id' => '737','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'Final MOM held on 03-09-2024: Coordination Meeting','content' => NULL,'notes' => 'K23165-0108D/24/1017
  10-12-2024','created_at' => '2024-12-10 11:58:42','updated_at' => '2024-12-10 11:58:42'),
    array('id' => '738','created_by' => '2','from_id' => '33','to_id' => '1','title' => 'Final Inception Report','content' => NULL,'notes' => NULL,'created_at' => '2024-12-11 08:32:44','updated_at' => '2024-12-11 08:32:44'),
    array('id' => '739','created_by' => '2','from_id' => '33','to_id' => '1','title' => 'Interim Submission B5 (I.S.B5) Submission','content' => NULL,'notes' => NULL,'created_at' => '2024-12-11 08:39:11','updated_at' => '2024-12-11 08:39:11'),
    array('id' => '740','created_by' => '2','from_id' => '23','to_id' => '1','title' => 'إعادة تسليم الردود النهائية بخصوص استفسارات المناقصين لمحطة الشويخ
  Submission of Final Responses Regarding Bidders Queries for Shuwaikh Pump Station','content' => NULL,'notes' => 'مرفق CD','created_at' => '2024-12-11 10:42:22','updated_at' => '2024-12-11 10:43:25'),
    array('id' => '741','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'Reimbursable Package Invoice No. 12- November 2024
  فاتورة نوفمبر 2024 - فاتورة رقم 12','content' => NULL,'notes' => 'K23165-0200D/24/0995
  03-12-2024','created_at' => '2024-12-11 11:10:53','updated_at' => '2024-12-11 11:11:28'),
    array('id' => '742','created_by' => '2','from_id' => '1','to_id' => '8','title' => 'Reimbursable Package Invoice No. 12- November 2024
  فاتورة نوفمبر 2024 - فاتورة رقم 12','content' => NULL,'notes' => NULL,'created_at' => '2024-12-11 12:04:39','updated_at' => '2024-12-11 12:04:39'),
    array('id' => '744','created_by' => '1','from_id' => '1','to_id' => '30','title' => 'المواصفات الفنية والمستندات التى تم تقديمها من قبل المناقصين وكذلك جداول الكميات والأسعار بعد تجميع الشركات المشاركة فى العطاء للدراسة وابداء الرأي','content' => 'مرفق 2 CD','notes' => NULL,'created_at' => '2024-12-12 09:16:59','updated_at' => '2024-12-12 13:43:17'),
    array('id' => '745','created_by' => '1','from_id' => '1','to_id' => '41','title' => 'طلب الموافقة على المخططات التنفيذية لمجارير الحماية الخرسانية لخط المياه المقترح قطر 1200مم','content' => 'مخططات','notes' => NULL,'created_at' => '2024-12-12 09:58:02','updated_at' => '2024-12-15 13:03:24'),
    array('id' => '746','created_by' => '1','from_id' => '1','to_id' => '19','title' => 'Interim Submission B4 (I.S.B4) Submission','content' => 'ملاحظات الادارات','notes' => 'ردا على كتابهم رقم 0809
  ردا على كتابهم رقم 0873','created_at' => '2024-12-12 10:04:25','updated_at' => '2024-12-15 13:21:13'),
    array('id' => '747','created_by' => '2','from_id' => '35','to_id' => '1','title' => 'Concept Design Report - Phase 1','content' => NULL,'notes' => NULL,'created_at' => '2024-12-12 10:54:04','updated_at' => '2024-12-12 10:54:04'),
    array('id' => '748','created_by' => '2','from_id' => '1','to_id' => '9','title' => 'Course 8: New Construction Technology (BIM)','content' => NULL,'notes' => 'الحاق بالكتاب رقم 202415050500056 المؤرخ 19-11-2024
  لتبديل المرشحين:
  1- ابراهيم محمد ابراهيم ضاحي
  2- نواف محمد فايز العلى
  
  بكلا من:
  1- ناصر بدر سليمان الديحانى
  2- ابراهيم بدر حسين الكندرى','created_at' => '2024-12-12 11:35:20','updated_at' => '2024-12-12 11:41:00'),
    array('id' => '749','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'Training Program: Course 8: New Construction Technology (BIM)','content' => NULL,'notes' => 'K23165-0100D/24/1032
  12-12-2024','created_at' => '2024-12-12 12:25:06','updated_at' => '2024-12-12 12:25:06'),
    array('id' => '750','created_by' => '2','from_id' => '39','to_id' => '1','title' => 'Phase 1 Interim Report Submission - Rev 2','content' => NULL,'notes' => NULL,'created_at' => '2024-12-15 08:11:48','updated_at' => '2024-12-15 08:11:48'),
    array('id' => '751','created_by' => '1','from_id' => '1','to_id' => '33','title' => 'طلب تصاريح لمجمع توزيع مياه صبحان من يوم الاثنين الموافق 2024/12/16 وحتى يوم الأحد الموافق 2024/12/22','content' => NULL,'notes' => NULL,'created_at' => '2024-12-15 08:54:40','updated_at' => '2024-12-15 08:54:40'),
    array('id' => '752','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'Monthly Progress Report No. 11','content' => NULL,'notes' => 'K23165-0100D/24/1009
  11-12-2024','created_at' => '2024-12-15 09:48:05','updated_at' => '2024-12-15 09:55:06'),
    array('id' => '753','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'Draft Hydraulic Design Report (Rev. B)','content' => 'عدد 2 نسخة ورقية
  عدد 2 نسخة الكترونيه CD
  تم استلام CD  واحد فقط يوم 19-12-2024 مع اصل المرفقات
  تم استلام CD  آخر يوم 23-12-2024 مع مرفقات لكتب أخري','notes' => 'K23165-0102D/24/1029
  11-12-2024','created_at' => '2024-12-15 09:51:08','updated_at' => '2024-12-23 11:24:12'),
    array('id' => '754','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'MOM held on 09-12-2024
  Discussion on the Draft Hydraulic Study Report & Concept Design Report','content' => 'CD','notes' => 'K23165-0102D-24-1019
  11-12-2024','created_at' => '2024-12-15 10:00:38','updated_at' => '2024-12-15 10:00:38'),
    array('id' => '755','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'MOM Held on 10-12-2024
  Discussion on the Concept Design Report Volume 2 - Architecture','content' => NULL,'notes' => 'K23165-0102D-24-1031
  12-12-2024','created_at' => '2024-12-15 10:09:01','updated_at' => '2024-12-15 10:09:01'),
    array('id' => '756','created_by' => '2','from_id' => '1','to_id' => '56','title' => 'المواصفات الفنية والمستندات التى تم تقديمها من قبل المناقصين وكذلك جداول الكميات والأسعار بعد تجميع الشركات المشاركة فى العطاء للدراسة وابداء الرأي','content' => NULL,'notes' => NULL,'created_at' => '2024-12-15 10:52:46','updated_at' => '2024-12-15 10:52:46'),
    array('id' => '757','created_by' => '2','from_id' => '1','to_id' => '19','title' => '=============ملغي============
  Preliminary Design Report Submission (Intermediate Submission)','content' => NULL,'notes' => '0978','created_at' => '2024-12-15 11:20:05','updated_at' => '2024-12-25 08:52:57'),
    array('id' => '758','created_by' => '2','from_id' => '41','to_id' => '1','title' => 'Interim Submission B5 (I.S.B5) Submission','content' => NULL,'notes' => NULL,'created_at' => '2024-12-15 12:19:58','updated_at' => '2024-12-15 12:19:58'),
    array('id' => '759','created_by' => '1','from_id' => '1','to_id' => '30','title' => 'Concept Design Report - Volume 2','content' => NULL,'notes' => 'K23165-0106D/24/1008','created_at' => '2024-12-15 12:33:01','updated_at' => '2024-12-30 09:09:20'),
    array('id' => '760','created_by' => '2','from_id' => '1','to_id' => '35','title' => 'Concept Design Report - Phase 1','content' => NULL,'notes' => 'اخ ط / 71','created_at' => '2024-12-15 12:33:12','updated_at' => '2024-12-15 12:37:55'),
    array('id' => '761','created_by' => '1','from_id' => '1','to_id' => '33','title' => 'Concept Design Report - Phase 1
  دعوة لحضور الاجتماع المزمع عقده الثلاثاء الموافق الثلاثاء 17-12-2024 الساعة 11','content' => NULL,'notes' => NULL,'created_at' => '2024-12-15 13:22:27','updated_at' => '2024-12-15 13:22:27'),
    array('id' => '762','created_by' => '1','from_id' => '1','to_id' => '61','title' => 'Concept Design Report - Phase 1
  طلب اجتماع لمناقشة اعمال الطاقة المتجددة الخاصة بالمشروع','content' => NULL,'notes' => NULL,'created_at' => '2024-12-15 13:33:47','updated_at' => '2024-12-15 13:33:47'),
    array('id' => '763','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'Preparation of Design Manuals and standards tender/contract documents
  Updated Level 2 Schedule','content' => NULL,'notes' => 'K23165-0108D-24-0231
  24-03-2024','created_at' => '2024-12-16 09:27:24','updated_at' => '2024-12-16 09:27:24'),
    array('id' => '764','created_by' => '2','from_id' => '33','to_id' => '1','title' => 'MOM held on 13-11-2024 : Stakeholder Meeting with the Water Facilities Operation and Maintenance Department to Discuss Comments on B4 Submission','content' => NULL,'notes' => NULL,'created_at' => '2024-12-16 11:38:12','updated_at' => '2024-12-16 11:38:12'),
    array('id' => '765','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'Monthly Progress Report No. 3','content' => NULL,'notes' => 'K23165-0100D-24-0307
  16-04-2024','created_at' => '2024-12-16 12:45:00','updated_at' => '2024-12-16 12:46:09'),
    array('id' => '766','created_by' => '2','from_id' => '56','to_id' => '1','title' => 'Concept Design Report - Phase 1','content' => NULL,'notes' => 'رد علي الكتاب رقم ات-2024-1688 بتاريخ 08-12-2024','created_at' => '2024-12-16 12:58:26','updated_at' => '2024-12-16 13:00:21'),
    array('id' => '767','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'Monthly Progress Report No. 2','content' => NULL,'notes' => '20240312-IN-K23165-0100D-24-0212','created_at' => '2024-12-17 07:39:37','updated_at' => '2024-12-17 07:39:37'),
    array('id' => '768','created_by' => '2','from_id' => '1','to_id' => '2','title' => 'Data Collection Report - Phase 1','content' => NULL,'notes' => 'الحاق بالكتاب رقم 20240650000237 بتاريخ 27-11-2024','created_at' => '2024-12-17 10:28:03','updated_at' => '2024-12-17 10:28:03'),
    array('id' => '769','created_by' => '2','from_id' => '1','to_id' => '33','title' => 'طلب تصاريح لمجمع توزيع مياه صبحان من يوم الاحد الموافق 2024/12/22 وحتى يوم الأحد الموافق 2024/12/29','content' => NULL,'notes' => NULL,'created_at' => '2024-12-17 10:30:38','updated_at' => '2024-12-17 10:30:38'),
    array('id' => '770','created_by' => '2','from_id' => '1','to_id' => '19','title' => 'Project Initiation','content' => NULL,'notes' => NULL,'created_at' => '2024-12-17 10:39:22','updated_at' => '2024-12-17 10:39:22'),
    array('id' => '771','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'سحب التقرير القديم
  تقرير التصميم الأولى (مسودة التقييم)
  Preliminary Design Report Submission ( Intermediate Submission)','content' => NULL,'notes' => 'K23165-0106D-24-1045
  16-12-2024
  
  Reference to letter no 0978 dated 28-11-2024
  
  Preliminary Design Report Submission ( Intermediate Submission)
  
  لإلغاء الكتاب السابق رقم 
  K23165-0106D-24-0978
  بتاريخ 28-11-2024','created_at' => '2024-12-17 10:47:24','updated_at' => '2024-12-25 08:51:32'),
    array('id' => '772','created_by' => '1','from_id' => '1','to_id' => '30','title' => 'Interim Submission B5 (I.S.B5) Submission','content' => NULL,'notes' => '0945','created_at' => '2024-12-17 10:51:23','updated_at' => '2024-12-17 10:51:23'),
    array('id' => '773','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'Fresh & Brackish Water (Design Drawings)','content' => NULL,'notes' => 'K2316-0102D-0105D-24-1044
  16-12-2024','created_at' => '2024-12-17 10:53:04','updated_at' => '2024-12-17 10:53:04'),
    array('id' => '774','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'Fresh & Brackish Water (Design Drawings)','content' => NULL,'notes' => 'K2316-0102D-0105D-24-1044
  16-12-2024','created_at' => '2024-12-17 10:55:45','updated_at' => '2024-12-17 10:55:52'),
    array('id' => '775','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'Final MOM held on 16-10-2024
  Discussion on replies from the Chemical Works Department','content' => NULL,'notes' => 'K23165-0102D-24-1041
  16-12-2024','created_at' => '2024-12-17 11:03:23','updated_at' => '2024-12-17 11:03:23'),
    array('id' => '776','created_by' => '1','from_id' => '1','to_id' => '33','title' => 'Comments on B4 Submission (Request for Clarifications RFC-009)','content' => 'نسخة من محضر اجتماع 13-11-2024','notes' => '0993','created_at' => '2024-12-17 11:16:42','updated_at' => '2024-12-17 11:16:42'),
    array('id' => '777','created_by' => '1','from_id' => '1','to_id' => '19','title' => 'MOM held on 13-11-2024 Stakeholder Meeting with the Water Facilities Operation and Maintenance Department to Discuss Comments on B4 Submission','content' => 'ملاحظات ادارة تشغيل وصيانة المنشآت المائية على محضر الاجتماع المذكور','notes' => NULL,'created_at' => '2024-12-17 11:21:16','updated_at' => '2024-12-17 11:21:16'),
    array('id' => '778','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'MOM held on 10-12-2024 Discussion on the Concept Design of the Pump Station','content' => NULL,'notes' => 'K23165-0102D-24-1042
  17-12-2024','created_at' => '2024-12-17 12:22:28','updated_at' => '2024-12-17 12:25:08'),
    array('id' => '779','created_by' => '2','from_id' => '1','to_id' => '26','title' => 'Request for Data on Future Water Projects under PAHW Jurisdiction','content' => NULL,'notes' => 'الحاق بالكتاب رقم 20240650000231 بتاريخ 21-11-2024','created_at' => '2024-12-18 11:47:51','updated_at' => '2024-12-18 11:48:43'),
    array('id' => '780','created_by' => '2','from_id' => '1','to_id' => '26','title' => 'Request for Data on Future Water Projects under PAHW Jurisdiction','content' => NULL,'notes' => 'الحاق بالكتاب رقم 20240650000231 بتاريخ 21-11-2024
  والكتاب رقم 20240642001142 بتاريخ 11-12-2024','created_at' => '2024-12-18 12:04:07','updated_at' => '2024-12-18 13:01:33'),
    array('id' => '781','created_by' => '2','from_id' => '1','to_id' => '14','title' => 'Phase 1 Interim Report Submission - Rev 2','content' => NULL,'notes' => 'الحاق بالكتاب رقم 20240650000224 بتاريخ 11-11-2024 و الكتاب رقم 20240650000224 بتاريخ 08-12-2024','created_at' => '2024-12-18 12:08:17','updated_at' => '2024-12-18 12:09:17'),
    array('id' => '782','created_by' => '2','from_id' => '61','to_id' => '1','title' => 'Concept Design Report - Phase 1','content' => NULL,'notes' => 'رد علي الكتاب رقم 20240650000248 بتاريخ 28-11-2024','created_at' => '2024-12-18 12:20:21','updated_at' => '2024-12-18 12:20:21'),
    array('id' => '783','created_by' => '2','from_id' => '1','to_id' => '41','title' => 'Interim Submission B5 (I.S.B5) Submission','content' => NULL,'notes' => 'رد علي الكتاب رقم أ م ش م -655 بتاريخ 15-12-2024','created_at' => '2024-12-18 13:11:33','updated_at' => '2024-12-18 13:12:11'),
    array('id' => '784','created_by' => '2','from_id' => '33','to_id' => '1','title' => 'Concept Design Report - Phase 1','content' => NULL,'notes' => 'رد علي الكتاب رقم 20240650000243بتاريخ 28-11-2024','created_at' => '2024-12-19 08:26:44','updated_at' => '2024-12-19 08:27:33'),
    array('id' => '785','created_by' => '2','from_id' => '33','to_id' => '1','title' => 'Comments on B4 Submission (Request for Clarifications RFC-009)','content' => NULL,'notes' => NULL,'created_at' => '2024-12-19 08:53:28','updated_at' => '2024-12-19 08:53:28'),
    array('id' => '786','created_by' => '2','from_id' => '28','to_id' => '1','title' => 'طلب مخططات AutoCad ومخططات مناسب الطرق','content' => NULL,'notes' => 'رد علي الكتاب رقم 2024106393000093 بتاريخ 21-10-2024
  والكتاب رقم 20240650000201 بتاريخ 30-10-2024','created_at' => '2024-12-19 09:34:57','updated_at' => '2024-12-19 09:34:57'),
    array('id' => '787','created_by' => '1','from_id' => '35','to_id' => '1','title' => 'Concept Design Report - Phase 1','content' => NULL,'notes' => 'اخ ط - 75
  18-12-2024','created_at' => '2024-12-19 11:32:22','updated_at' => '2024-12-19 11:34:00'),
    array('id' => '788','created_by' => '1','from_id' => '39','to_id' => '1','title' => 'Phase 1 Interim Report Submission - Rev 2','content' => NULL,'notes' => NULL,'created_at' => '2024-12-19 12:35:14','updated_at' => '2024-12-19 12:35:14'),
    array('id' => '789','created_by' => '1','from_id' => '1','to_id' => '24','title' => 'Hydraulic Study Report','content' => NULL,'notes' => '1019','created_at' => '2024-12-19 12:54:06','updated_at' => '2024-12-19 12:54:06'),
    array('id' => '790','created_by' => '1','from_id' => '1','to_id' => '33','title' => 'Hydraulic Study Report','content' => NULL,'notes' => '1019','created_at' => '2024-12-19 12:55:29','updated_at' => '2024-12-19 12:55:29'),
    array('id' => '791','created_by' => '1','from_id' => '30','to_id' => '1','title' => 'تحويل مشروع إنشاء وإنجاز وصيانة وتطوير مجمع توزيع مياه الدوحة القائم والجديد وخط مياه المجمع حتى دوار الأمم المتحدة مع الأعمال الملحقة لمناقصة رقم: المناقصة رقم(و ك و / 45-2018/2019)','content' => NULL,'notes' => '1713','created_at' => '2024-12-19 13:22:50','updated_at' => '2024-12-19 13:25:44'),
    array('id' => '792','created_by' => '1','from_id' => '26','to_id' => '1','title' => 'الحزام الاخضر لمدينه جنوب سعد العبدالله','content' => NULL,'notes' => NULL,'created_at' => '2024-12-19 13:34:06','updated_at' => '2024-12-19 13:34:06'),
    array('id' => '793','created_by' => '1','from_id' => '1','to_id' => '61','title' => 'المواصفات الفنية والمستندات التي تم تقديمها من قبل المناقصين والخاصة ب (Solar System) للدراسة وابداء الرأي','content' => 'مرفق CD','notes' => NULL,'created_at' => '2024-12-22 08:39:35','updated_at' => '2024-12-22 08:39:35'),
    array('id' => '794','created_by' => '1','from_id' => '1','to_id' => '30','title' => 'Concept Design Report - Volume 2','content' => NULL,'notes' => 'الحاق بكتابنا رقم 20240650000264 المؤرخ 15-12-2024','created_at' => '2024-12-22 11:14:11','updated_at' => '2024-12-22 11:17:26'),
    array('id' => '795','created_by' => '2','from_id' => '1','to_id' => '19','title' => 'Concept Design Report - Volume 1
  ردود الادارات التالية (إدارة تصميم شبكات النقل الكهربائية- إدارة الاعمال الكيماوية- قطاع محطات القوي الكهربائية وتقطير المياه- إدارة تشغيل وصيانة المنشآت المائية- إنارة الشوارع)','content' => 'CD','notes' => 'في انتظار رد 
  إدارة تصميم مشاريع الشبكات والمنشآت المائية
  إدارة طوارئ الديزل','created_at' => '2024-12-22 12:22:22','updated_at' => '2024-12-23 10:09:49'),
    array('id' => '796','created_by' => '2','from_id' => '2','to_id' => '1','title' => 'Interim Submission B5 (I.S.B5) Submission','content' => NULL,'notes' => NULL,'created_at' => '2024-12-23 07:39:59','updated_at' => '2024-12-23 07:39:59'),
    array('id' => '797','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'Updated Level 3 Schedule','content' => NULL,'notes' => 'K23165-0105D/24/1047
  22-12-2024','created_at' => '2024-12-23 07:40:42','updated_at' => '2024-12-23 07:40:42'),
    array('id' => '798','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'MOM held on 12-12-2024: Discussion on the Concept Design Report with MEWRE O&M Facilities Department','content' => NULL,'notes' => 'K23165-0102D/24/1046
  22-12-2024','created_at' => '2024-12-23 07:44:18','updated_at' => '2024-12-23 07:44:18'),
    array('id' => '799','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'RFC-005','content' => NULL,'notes' => 'K23165-0102D/24/0969
  22-12-2024','created_at' => '2024-12-23 07:45:45','updated_at' => '2024-12-23 07:45:45'),
    array('id' => '800','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'Training Course No.09: Preparation of Tender Documents (3 days)
  طلب تأجيل الدورة','content' => NULL,'notes' => 'K23165-0100D/24/1057
  22-12-2024','created_at' => '2024-12-23 07:50:04','updated_at' => '2024-12-23 07:50:04'),
    array('id' => '801','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'طلب مخططات','content' => NULL,'notes' => 'K23165-0102D/0105D/24/1049
  22-12-2024','created_at' => '2024-12-23 07:52:13','updated_at' => '2024-12-23 07:52:13'),
    array('id' => '802','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'طلب مخططات','content' => NULL,'notes' => 'K23165-0102D/0105D/24/1049
  22-12-2024','created_at' => '2024-12-23 07:53:13','updated_at' => '2024-12-23 09:09:52'),
    array('id' => '804','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'Reply to the comments of Chemical Works Department on Interim Submission B4','content' => NULL,'notes' => 'K23165-0108D-24-1028
  11-12-2024','created_at' => '2024-12-23 09:28:11','updated_at' => '2024-12-23 09:28:11'),
    array('id' => '805','created_by' => '2','from_id' => '1','to_id' => '7','title' => 'النفقات الرأسمالية','content' => NULL,'notes' => NULL,'created_at' => '2024-12-23 11:10:43','updated_at' => '2024-12-23 11:10:43'),
    array('id' => '806','created_by' => '1','from_id' => '1','to_id' => '5','title' => 'Interim Submission B4 Report (I.S.B4)','content' => NULL,'notes' => 'الحاق لكتابنا 20240650000208 بتاريخ 30-10-2024
  وكتابنا 20240650000208 المؤرخ 17-11-2024
  وكتابنا 20240650000208 المؤرخ 05-12-2024','created_at' => '2024-12-23 11:11:40','updated_at' => '2024-12-23 11:11:40'),
    array('id' => '807','created_by' => '2','from_id' => '41','to_id' => '1','title' => 'Interim Submission B5 (I.S.B5) Submission','content' => NULL,'notes' => 'رد علي الكتاب رقم  20240650000275 بتاريخ 19-12-2024
  و الكتاب رقم 2024-1685-أت بتاريخ 08-12-2024','created_at' => '2024-12-23 11:28:50','updated_at' => '2024-12-23 11:31:07'),
    array('id' => '808','created_by' => '2','from_id' => '33','to_id' => '1','title' => 'Final Inception Report','content' => NULL,'notes' => NULL,'created_at' => '2024-12-24 08:32:17','updated_at' => '2024-12-24 08:32:17'),
    array('id' => '809','created_by' => '2','from_id' => '46','to_id' => '1','title' => 'طلب تفسير بعض المواد القانونية الواردة في قوانين الرعاية السكنية والخاصة بالبنية الأساسية والخدمات الرئيسية وذلك بالمدن والمشاريع الاسكانية الحالية والمستقبلية','content' => NULL,'notes' => 'رد علي الكتاب رقم 20240650000195 المؤرخ 30-10-2024','created_at' => '2024-12-25 08:35:41','updated_at' => '2024-12-25 08:36:30'),
    array('id' => '810','created_by' => '2','from_id' => '5','to_id' => '1','title' => 'Interim Submission B4 Report (I.S.B4)','content' => NULL,'notes' => 'رد علي الكتاب رقم 20240650000208 بتاريخ 30-10-2024
  ووالكتاب رقم رقم 20240650000208 بتاريخ 17-11-2024','created_at' => '2024-12-25 11:50:48','updated_at' => '2024-12-25 11:51:59'),
    array('id' => '811','created_by' => '2','from_id' => '30','to_id' => '1','title' => 'Concept Design Report - Volume 2','content' => NULL,'notes' => 'رد علي الكتاب  رقم 20240650000264 بتاريخ 25-12-2024','created_at' => '2024-12-25 12:04:54','updated_at' => '2024-12-25 12:05:45'),
    array('id' => '812','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'MOM held on 17-12-2024
  Electrical and Instrumentation Control Comments Revised from the Q&M Facilities Department on the concept Design','content' => NULL,'notes' => 'K23165-0102D-24-1050
  19-12-2024
  RFC-010','created_at' => '2024-12-26 08:21:08','updated_at' => '2025-01-06 09:24:05'),
    array('id' => '813','created_by' => '2','from_id' => '62','to_id' => '1','title' => 'تقديم التقرير الفنى لدراسة العطاءات التابعة للمرحلة الرابعة لعقد الدراسة والتصميم','content' => 'مرفق 3 مجلد ورقي
  عدد 1 DVD','notes' => 'AEC-1224006
  23-12-2024','created_at' => '2024-12-26 09:10:09','updated_at' => '2024-12-26 09:10:14'),
    array('id' => '814','created_by' => '1','from_id' => '1','to_id' => '37','title' => 'RFC-005','content' => NULL,'notes' => NULL,'created_at' => '2024-12-26 09:59:42','updated_at' => '2024-12-26 09:59:42'),
    array('id' => '815','created_by' => '2','from_id' => '1','to_id' => '33','title' => 'MOM held on 12-12-2024: Discussion on the Concept Design Report with MEWRE O&M Facilities Department','content' => NULL,'notes' => 'تم اصدار الكتاب مباشرة دون الرجوع الي السكرتارية للتسجيل','created_at' => '2024-12-26 11:07:44','updated_at' => '2024-12-26 11:11:45'),
    array('id' => '816','created_by' => '2','from_id' => '14','to_id' => '1','title' => 'Phase 1 Interim Report Submission - Rev 2','content' => '4 مخطط A3
  1 مخطط A0','notes' => NULL,'created_at' => '2024-12-29 08:42:00','updated_at' => '2024-12-30 09:35:34'),
    array('id' => '817','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'MOM held on 24-12-2024 - Project Collaboration Website (PCW) Presentation','content' => NULL,'notes' => 'K23165-0100D-24-1083
  26-12-2024','created_at' => '2024-12-29 09:15:58','updated_at' => '2024-12-29 09:15:58'),
    array('id' => '818','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'الجدول الزمنى المعدل
  البرنامج التدريبي','content' => NULL,'notes' => 'K23165-0100D-24-1082
  26-12-2024
  
  اشارة الي الكتاب رقم
  K23165-0100D-24-0887
  بتاريخ 14-11-2024','created_at' => '2024-12-29 09:21:38','updated_at' => '2024-12-29 09:21:38'),
    array('id' => '819','created_by' => '2','from_id' => '33','to_id' => '1','title' => 'MOM held on 12-12-2024: Discussion on the Concept Design Report with MEWRE O&M Facilities Department','content' => NULL,'notes' => NULL,'created_at' => '2024-12-30 07:58:57','updated_at' => '2024-12-30 07:58:57'),
    array('id' => '820','created_by' => '2','from_id' => '1','to_id' => '19','title' => 'Concept Design Report - Volume 2
  ملاحظات ادارة التصميم والاشراف علي محضر 03-12-2024 الساعة 12:30','content' => NULL,'notes' => 'رد علي محضر الاجتماع الوارد بالكتاب رقم
  K23165-0106D/24/1008','created_at' => '2024-12-30 09:10:29','updated_at' => '2025-01-07 08:51:59'),
    array('id' => '821','created_by' => '2','from_id' => '1','to_id' => '9','title' => 'اعتذار 
  م. بدور الضاعن عن الدورة التدريبية التى ستقام بجمهورية مصر العربية من تاريخ 05-01-2024 الى تاريخ 09-12-2024','content' => NULL,'notes' => NULL,'created_at' => '2024-12-30 11:26:59','updated_at' => '2024-12-30 11:26:59'),
    array('id' => '822','created_by' => '2','from_id' => '27','to_id' => '1','title' => 'الموافقة على تمديد فترة دراسة العطاءات','content' => NULL,'notes' => '20241226-IN-11644-23-13','created_at' => '2024-12-30 11:57:05','updated_at' => '2024-12-30 11:59:19'),
    array('id' => '823','created_by' => '2','from_id' => '37','to_id' => '1','title' => 'دعوة لحضور اجتماع يوم الثلاثاء 31-12-2024 الساعة 11:00صباح بمبنى إدارة الاعمال الكيماوية','content' => NULL,'notes' => 'لمعاينة الموقع والاطلاع على الخدمات القائمة مع المساحة المخصصة لتنفيذ المقر الدائم للهيئة وكذلك التاكد من عدم التعارض مع المساحات المخصصة للمشاريع القادمة','created_at' => '2024-12-30 12:21:17','updated_at' => '2024-12-30 12:21:17'),
    array('id' => '824','created_by' => '2','from_id' => '1','to_id' => '19','title' => 'Interim Submission B4 Report (I.S.B4)
  ملاحظات ادارة مشاريع المنشآت المائية','content' => NULL,'notes' => 'ملاحظات ادارة مشاريع المنشآت المائية','created_at' => '2024-12-30 12:29:22','updated_at' => '2024-12-30 12:30:23'),
    array('id' => '825','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'نسخة ورقية (3 مجلدات) من
  Interim Submission B5 (I.S.B5) Submission','content' => '3 مجلدات ورقية','notes' => NULL,'created_at' => '2024-12-30 12:39:17','updated_at' => '2024-12-30 12:39:51'),
    array('id' => '826','created_by' => '2','from_id' => '1','to_id' => '8','title' => 'تجديد الاعتماد المالى','content' => NULL,'notes' => NULL,'created_at' => '2024-12-30 13:53:20','updated_at' => '2024-12-30 13:53:20'),
    array('id' => '827','created_by' => '2','from_id' => '30','to_id' => '1','title' => 'Concept Design Report - Phase 1','content' => NULL,'notes' => NULL,'created_at' => '2024-12-31 07:57:46','updated_at' => '2024-12-31 07:57:46'),
    array('id' => '828','created_by' => '2','from_id' => '1','to_id' => '41','title' => 'Interim Submission B5 (I.S.B5) Submission','content' => '3 مجلدات ورقية','notes' => NULL,'created_at' => '2024-12-31 13:03:49','updated_at' => '2024-12-31 13:03:49'),
    array('id' => '829','created_by' => '2','from_id' => '37','to_id' => '1','title' => 'نسخة من محضر الاجتماع المنعقد بتاريخ 31-12-2024 الساعة 11:00 صباحا بمبنى إدار الاعمال الكيماوية','content' => NULL,'notes' => NULL,'created_at' => '2024-12-31 14:01:22','updated_at' => '2024-12-31 14:01:22'),
    array('id' => '830','created_by' => '2','from_id' => '1','to_id' => '19','title' => 'MOM held on 12-12-2024: Discussion on the Concept Design Report with MEWRE O&M Facilities Department','content' => NULL,'notes' => 'رد على الكتاب رقم 
  K23165-0102D-24-01046
  المؤرخ
  22-12-2024','created_at' => '2025-01-05 12:04:17','updated_at' => '2025-01-05 12:06:42'),
    array('id' => '831','created_by' => '2','from_id' => '1','to_id' => '37','title' => 'Reply to the comments of Chemical Works Department on Interim Submission B4','content' => NULL,'notes' => 'بخصوص كتاب الدار رقم 1028','created_at' => '2025-01-06 07:42:42','updated_at' => '2025-01-06 07:42:42'),
    array('id' => '832','created_by' => '1','from_id' => '1','to_id' => '33','title' => 'MOM held on 17-12-2024
  Electrical and Instrumentation Control Comments Revised from the Q&M Facilities Department on the concept Design','content' => NULL,'notes' => 'RFC-010','created_at' => '2025-01-06 09:21:18','updated_at' => '2025-01-06 09:23:23'),
    array('id' => '833','created_by' => '1','from_id' => '1','to_id' => '19','title' => 'Concept Design Report - Volume 1
  رد إدارة
  التصميم والاشراف - طوارئ الديزل - تصميم مشاريع الشبكات والمنشآت المائية','content' => NULL,'notes' => 'الحاق بالكتاب رقم 7309-15-و ك م','created_at' => '2025-01-06 11:39:14','updated_at' => '2025-01-06 11:40:46'),
    array('id' => '834','created_by' => '2','from_id' => '37','to_id' => '1','title' => 'RFC-005','content' => NULL,'notes' => NULL,'created_at' => '2025-01-07 08:59:55','updated_at' => '2025-01-07 08:59:55'),
    array('id' => '835','created_by' => '1','from_id' => '1','to_id' => '37','title' => 'Chlorine Dioxide Package
  ثاني اكسيد الكلور CLO2','content' => 'مرفق CD','notes' => NULL,'created_at' => '2025-01-07 11:14:21','updated_at' => '2025-01-07 11:15:17'),
    array('id' => '836','created_by' => '1','from_id' => '1','to_id' => '18','title' => 'توفير الخدمات في مشاريع المؤسسة العامة للرعاية السكنية','content' => NULL,'notes' => NULL,'created_at' => '2025-01-07 12:47:34','updated_at' => '2025-01-07 12:47:34'),
    array('id' => '837','created_by' => '1','from_id' => '33','to_id' => '1','title' => 'MOM held on 17-12-2024
  Electrical and Instrumentation Control Comments Revised from the Q&M Facilities Department on the concept Design','content' => NULL,'notes' => NULL,'created_at' => '2025-01-08 08:09:35','updated_at' => '2025-01-08 08:09:35'),
    array('id' => '838','created_by' => '1','from_id' => '61','to_id' => '1','title' => 'المواصفات الفنية والمستندات التي تم تقديمها من قبل المناقصين والخاصة ب (Solar System) للدراسة وابداء الرأي','content' => NULL,'notes' => NULL,'created_at' => '2025-01-08 08:20:44','updated_at' => '2025-01-08 08:20:44'),
    array('id' => '839','created_by' => '2','from_id' => '2','to_id' => '1','title' => 'Data Collection Report - Phase 1','content' => NULL,'notes' => NULL,'created_at' => '2025-01-09 08:04:51','updated_at' => '2025-01-09 08:04:51'),
    array('id' => '840','created_by' => '1','from_id' => '1','to_id' => '19','title' => 'Surge analysis','content' => NULL,'notes' => NULL,'created_at' => '2025-01-09 11:11:32','updated_at' => '2025-01-09 11:11:32'),
    array('id' => '841','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'Training Course No.12: Time And Cost Control (5 Days)','content' => NULL,'notes' => 'K23165-0100D/24/1102
  30-12-2024','created_at' => '2025-01-09 11:26:38','updated_at' => '2025-01-09 11:26:38'),
    array('id' => '842','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'MOM for Workshops held between 15th to 19th Dec. 2024','content' => NULL,'notes' => 'K23165-0108D-24-1101
  30-12-2024','created_at' => '2025-01-12 07:42:58','updated_at' => '2025-01-12 07:42:58'),
    array('id' => '843','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'طلب مخططات
  Fresh & Brackish Water & Utility Reservation & Spot Levels (AutoCad Drawings)','content' => NULL,'notes' => 'K23165-0102D-0105D-24-1103
  31-12-2024','created_at' => '2025-01-12 07:48:35','updated_at' => '2025-01-12 07:48:35'),
    array('id' => '844','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'طلب مخططات
  Fresh & Brackish Water & Utility Reservation & Spot Levels (AutoCad Drawings)','content' => NULL,'notes' => 'K23165-0102D-0105D-24-1103
  31-12-2024','created_at' => '2025-01-12 07:50:26','updated_at' => '2025-01-12 07:50:40'),
    array('id' => '845','created_by' => '1','from_id' => '1','to_id' => '30','title' => 'Comments on B4 Submission: Request for Clarifications RFC-009','content' => 'مرفق CD','notes' => NULL,'created_at' => '2025-01-12 09:25:02','updated_at' => '2025-01-12 10:33:26'),
    array('id' => '846','created_by' => '1','from_id' => '1','to_id' => '24','title' => 'Interim Submission B5 (I.S.B5) Submission','content' => NULL,'notes' => 'الحاق بخصوص الكتاب رقم 20240650000252 بتاريخ 04-12-2024','created_at' => '2025-01-12 10:43:48','updated_at' => '2025-01-12 10:44:53'),
    array('id' => '847','created_by' => '1','from_id' => '1','to_id' => '19','title' => 'Data Collection Report - Phase 1','content' => NULL,'notes' => 'رد علي الكتاب رقم K23165-0102D-24-0920 المؤرخ 14-11-2024','created_at' => '2025-01-12 12:06:48','updated_at' => '2025-01-12 12:06:48'),
    array('id' => '849','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'Workshop MOM\'s (08-09-2024 and 09-09-2024) MEWRE Groundwater Production Department','content' => '2 نسخة أصليه من محاضر اجتماعات ورش العمل','notes' => 'K23165-0105D-24-1088
  31-12-2024','created_at' => '2025-01-13 07:39:50','updated_at' => '2025-01-13 07:46:08'),
    array('id' => '850','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'Training Course No. 8 - New Construction Technology (BIM)','content' => NULL,'notes' => 'K23165-0100D-25-0022
  13-01-2025','created_at' => '2025-01-13 13:13:28','updated_at' => '2025-01-13 13:13:28'),
    array('id' => '851','created_by' => '1','from_id' => '26','to_id' => '1','title' => 'Request for Data on Future Water Projects under PAHW Jurisdiction','content' => 'CD  تم استلامه عن طريق م. منيره الحجي من مكتب الوكيل يوم 13-01-2025','notes' => NULL,'created_at' => '2025-01-14 09:51:39','updated_at' => '2025-01-14 09:51:39'),
    array('id' => '852','created_by' => '1','from_id' => '1','to_id' => '7','title' => 'متابعة الخطة التشغيلية 2025/2024 لوزارة الكهرباء و الماء و الطاقة المتجددة','content' => NULL,'notes' => 'الربع الثالث للسنة المالية 2024/2025','created_at' => '2025-01-14 13:21:14','updated_at' => '2025-01-15 12:56:39'),
    array('id' => '853','created_by' => '1','from_id' => '1','to_id' => '19','title' => 'Request for Data on Future Water Projects under PAHW Jurisdiction','content' => 'مرفق عدد 2 
  CD','notes' => NULL,'created_at' => '2025-01-14 13:25:19','updated_at' => '2025-01-14 13:25:19'),
    array('id' => '854','created_by' => '1','from_id' => '41','to_id' => '1','title' => 'Interim Submission B5 (I.S.B5) Submission','content' => NULL,'notes' => NULL,'created_at' => '2025-01-14 14:18:27','updated_at' => '2025-01-14 14:18:27'),
    array('id' => '855','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'Final MOM held on 21-10-2024: Progress Coordination','content' => NULL,'notes' => 'K23165-0106D-25-0037
  14-01-2025','created_at' => '2025-01-15 07:50:14','updated_at' => '2025-01-15 07:50:14'),
    array('id' => '857','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'Revised MOM 03-12-2024 - Progress Coordination Meeting','content' => NULL,'notes' => 'K23165-0106D-25-0040
  14-01-2025','created_at' => '2025-01-15 07:52:34','updated_at' => '2025-01-15 07:52:34'),
    array('id' => '858','created_by' => '2','from_id' => '1','to_id' => '19','title' => 'Workshop from 26-01-2025 to 29-01-2025','content' => NULL,'notes' => 'رد علي كتاب الدار رقم K23165-0108D-24-1101 بتاريخ 30-12-2024','created_at' => '2025-01-15 08:54:56','updated_at' => '2025-01-15 08:54:56'),
    array('id' => '859','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'Reimbursable Package Invoice No. 13- December 2024
  فاتورة ديسمبر 2024 - فاتورة رقم 13','content' => NULL,'notes' => 'K23165-0200D-25-0012
  06-01-20256','created_at' => '2025-01-16 07:53:33','updated_at' => '2025-01-16 07:53:33'),
    array('id' => '860','created_by' => '2','from_id' => '1','to_id' => '8','title' => 'Reimbursable Package Invoice No. 13- December 2024
  فاتورة ديسمبر 2024 - فاتورة رقم 13','content' => 'أصل الفاتورة
  أصل الكتاب
  تقرير المهندس','notes' => NULL,'created_at' => '2025-01-16 08:20:25','updated_at' => '2025-01-16 08:20:25'),
    array('id' => '861','created_by' => '2','from_id' => '1','to_id' => '27','title' => 'خدمات استشارية لدراسة وتصميم واعداد مستندات مناقصات مجمع توزيع
  مياه الدوحة الجديد والقائم والخطوط الرئيسية الملحقة في دولة الكويت','content' => NULL,'notes' => 'بخصوص: الاجتماع الذي عقد في 2024/01/14 بمقر جهازكم الموقر وما تم مناقشته بخصوص تفعيل بند الإشراف بالعقد المذكور للمكتب المحلى المستشارون العرب','created_at' => '2025-01-16 09:22:15','updated_at' => '2025-01-16 09:23:46'),
    array('id' => '862','created_by' => '2','from_id' => '37','to_id' => '1','title' => 'Chlorine Dioxide Package
  ثاني اكسيد الكلور CLO2','content' => NULL,'notes' => 'رد علي الكتاب رقم أ ت-152-2025 بتارخ 12-01-2025','created_at' => '2025-01-16 13:37:31','updated_at' => '2025-01-16 13:39:04'),
    array('id' => '863','created_by' => '2','from_id' => '8','to_id' => '1','title' => 'تجديد الاعتماد المالى','content' => NULL,'notes' => 'رد على الكتاب رقم 20240650000276 بتاريخ 30-12-2024','created_at' => '2025-01-16 13:41:21','updated_at' => '2025-01-16 13:42:09'),
    array('id' => '864','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'MOM held on 09-01-2025: Meeting with Technical Department on Renewable Energy','content' => NULL,'notes' => 'K23165-0102D-25-0028
  2025-01-13','created_at' => '2025-01-16 13:51:34','updated_at' => '2025-01-16 13:51:34'),
    array('id' => '865','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'Request for Data on Future Water Projects','content' => NULL,'notes' => 'K23165-0105D-25-0047
  16-01-2025
  
  رد علي الكتاب رقم و ك م -4211-15 بتناريخ 16-12-2024','created_at' => '2025-01-16 14:01:05','updated_at' => '2025-01-16 14:01:05'),
    array('id' => '866','created_by' => '2','from_id' => '1','to_id' => '24','title' => 'Interim Submission B5 (I.S.B5) Submission','content' => NULL,'notes' => 'بالطريق الرسمي
  الحاق بالكتب رقم 
  20240650000252 
  المؤرخين 04-12-2024
  13-01-2025','created_at' => '2025-01-19 14:06:04','updated_at' => '2025-01-19 14:26:37'),
    array('id' => '867','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'Training Course No.12: Time And Cost Control','content' => NULL,'notes' => 'الاسبوع الاول: من 2فبراير 2025 الي 06-فبراير 2025 (10 متدربين)
  الاسبوع الثاني: من 09 فبراير 2025 - الي - 13فبراير 2025 (10 متدربين)
  K23165-0100D-25-0056
  19-01-2025','created_at' => '2025-01-20 08:28:08','updated_at' => '2025-01-20 08:28:08'),
    array('id' => '868','created_by' => '2','from_id' => '1','to_id' => '5','title' => 'Interim Submission B5 (I.S.B5) Submission','content' => NULL,'notes' => 'الحاق بخصوص الكتاب رقم 20240650000255 بتاريخ 04-12-2024','created_at' => '2025-01-20 11:37:08','updated_at' => '2025-01-20 11:37:08'),
    array('id' => '869','created_by' => '2','from_id' => '1','to_id' => '18','title' => 'تقرير عن إيصال المياه العذبة الى المشاريع الإسكانية','content' => NULL,'notes' => NULL,'created_at' => '2025-01-20 12:32:13','updated_at' => '2025-01-20 12:32:13'),
    array('id' => '870','created_by' => '2','from_id' => '1','to_id' => '19','title' => 'Phase 1 Interim Report Submission - Rev 2','content' => NULL,'notes' => NULL,'created_at' => '2025-01-20 12:35:27','updated_at' => '2025-01-20 12:35:27'),
    array('id' => '871','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'Monthly Progress Report No. 12','content' => 'مرفق نسخة ورقيه من التقرير','notes' => 'K23165-0100D-25-0067
  20-01-2025','created_at' => '2025-01-20 12:56:49','updated_at' => '2025-01-23 11:48:02'),
    array('id' => '872','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'Submission of Environmental & Social Assessment Report "ESIA"','content' => 'مرفق 2 نسخة ورقية
  من
  تقرير تقييم الأثر البيئي والاجتماعى
  Environmental & Social Assessment Report','notes' => 'K23165-0106D-25-0071
  20-01-2025','created_at' => '2025-01-20 13:00:00','updated_at' => '2025-02-02 12:50:14'),
    array('id' => '873','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'Water Project Sector Office Building Revised Schedule','content' => NULL,'notes' => 'K23165-0106D-25-0072
  20-01-2025','created_at' => '2025-01-20 13:03:18','updated_at' => '2025-01-20 13:03:18'),
    array('id' => '874','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'Final MOM held on 29-10-2024: Surge analysis','content' => NULL,'notes' => 'K23165-0105D-25-0021
  12-01-2025','created_at' => '2025-01-21 07:41:26','updated_at' => '2025-01-21 08:54:55'),
    array('id' => '875','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'Final MOM held on 17-12-2024: Electrical and Instrumentation Control Comments from the O&M Facilities Department on Concept Design','content' => NULL,'notes' => 'K23165-0102D-25-0058
  20-01-2025','created_at' => '2025-01-21 08:17:42','updated_at' => '2025-01-21 08:17:42'),
    array('id' => '876','created_by' => '2','from_id' => '1','to_id' => '24','title' => 'Hydraulic Study Report','content' => NULL,'notes' => 'الحاق بالكتاب رقم أت-1783-2024 بتاريخ 24-12-2024','created_at' => '2025-01-21 11:32:42','updated_at' => '2025-01-21 11:32:42'),
    array('id' => '877','created_by' => '2','from_id' => '1','to_id' => '33','title' => 'RFC-010','content' => NULL,'notes' => 'بخصوص ال RFC-010 المرفق بكتاب الاستشاري رقم K23165-0102D-24-1050 بتاريخ 19-12-2024','created_at' => '2025-01-21 14:05:09','updated_at' => '2025-01-21 14:05:09'),
    array('id' => '878','created_by' => '2','from_id' => '1','to_id' => '19','title' => 'Request for Data on Future Water Projects','content' => NULL,'notes' => 'رد على الكتاب رقم K23165-0105D-25-0047 بتاريخ 16-01-2025','created_at' => '2025-01-21 14:42:01','updated_at' => '2025-01-27 14:10:00'),
    array('id' => '879','created_by' => '2','from_id' => '1','to_id' => '17','title' => 'Training Course No. 8 - New Construction Technology (BIM)','content' => NULL,'notes' => 'بخصوص الكتاب رقم
  K23165-0100D-25-0022
  بتاريخ 
  13-01-2025','created_at' => '2025-01-21 15:49:45','updated_at' => '2025-01-21 15:49:45'),
    array('id' => '880','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'Interim Submission B4 (I.S.B4) Submission','content' => NULL,'notes' => 'K23165-0108D-25-0074
  21-01-2025','created_at' => '2025-01-21 15:53:50','updated_at' => '2025-01-21 15:55:42'),
    array('id' => '881','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'MOM held on 11-12-2024: Stockholder Meeting with Water Facilities Operation and Maintenance Department to Discuss Comment on B4','content' => NULL,'notes' => 'K23165-0108D-25-0075
  21-01-2025','created_at' => '2025-01-21 15:57:48','updated_at' => '2025-01-21 15:57:48'),
    array('id' => '882','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'Interim Submission B3 (I.S.B3)','content' => NULL,'notes' => 'K23165-0108D-25-0077
  21-01-2025','created_at' => '2025-01-21 16:00:05','updated_at' => '2025-01-21 16:00:05'),
    array('id' => '883','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'MOM held on 13-01-2025: Meeting with Technical Department on Renewable Energy','content' => NULL,'notes' => 'K23165-0102D-25-0078
  21-01-2025','created_at' => '2025-01-21 16:02:51','updated_at' => '2025-01-21 16:02:51'),
    array('id' => '884','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'Final MOM held on 12-12-2024: Discussion of the Concept Design Report with MEWRE O&M Facilities Department','content' => NULL,'notes' => 'K23165-0102D-25-0079
  21-01-2025','created_at' => '2025-01-21 16:06:35','updated_at' => '2025-01-21 16:06:35'),
    array('id' => '885','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'Data Collection - Drawing Received Officially from MEWRE','content' => 'RFC-005','notes' => 'K23165-0105D-25-0080
  21-01-2025','created_at' => '2025-01-21 16:10:37','updated_at' => '2025-01-21 16:10:37'),
    array('id' => '886','created_by' => '2','from_id' => '1','to_id' => '63','title' => 'أعمال إنشاء وإنـجاز وصيانة وتطوير مجمع توزيع مياه الدوحة القائم والجديد وخط مياه من المجمع حتى دوار الأمم المتحدة من الاعمال الملحقة-28','content' => NULL,'notes' => NULL,'created_at' => '2025-01-22 10:05:26','updated_at' => '2025-01-22 10:05:26'),
    array('id' => '887','created_by' => '2','from_id' => '23','to_id' => '1','title' => 'فاتورة الطور الرابع المرحلة الأولى
  Phase 4 Stage 1 Invoice','content' => NULL,'notes' => '5071033-C01-413
  22-01-2025','created_at' => '2025-01-22 13:36:22','updated_at' => '2025-01-22 13:36:22'),
    array('id' => '888','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'MOM held on 27-11-2024: Stockholder Meeting with the Water Facilities Projects Department','content' => 'مرفق ملاحظات اجندة الاجتماع','notes' => 'K23165-0108D-25-0076
  22-01-2025','created_at' => '2025-01-22 13:42:46','updated_at' => '2025-01-22 13:42:46'),
    array('id' => '889','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'Final MOM held on 13-11-2024: Stakeholder Meeting with the Water Facilities Operation and Maintenance Department to discuss Comment on B4 Submission','content' => NULL,'notes' => 'K23165-0108D-25-0082
  22-01-2025','created_at' => '2025-01-22 13:46:44','updated_at' => '2025-01-22 13:46:44'),
    array('id' => '890','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'MOM held on 13-01-2025: Discussing New Wafra WDC 2 Design Alternatives with respect to infrastructure, ME, and AR considerations','content' => NULL,'notes' => 'K23165-0102D-25-0086
  22-01-2025','created_at' => '2025-01-22 13:50:57','updated_at' => '2025-01-22 13:50:57'),
    array('id' => '891','created_by' => '2','from_id' => '5','to_id' => '1','title' => 'Interim Submission B5 (I.S.B5) Submission','content' => NULL,'notes' => NULL,'created_at' => '2025-01-23 07:45:12','updated_at' => '2025-01-23 07:45:12'),
    array('id' => '892','created_by' => '2','from_id' => '1','to_id' => '19','title' => 'المرشحين لحضور الدورة
  Training Course No.12: Time And Cost Control','content' => NULL,'notes' => 'رد علي الكتاب K23165-0100D-25-0056
  الاسبوع الاول: من 02-02-2025 حتي 06-02-2025
  الاسبوع الثاني: من 09-02-2025 حتي 13-02-2025','created_at' => '2025-01-23 08:27:53','updated_at' => '2025-01-23 11:13:10'),
    array('id' => '893','created_by' => '2','from_id' => '1','to_id' => '27','title' => 'أعمال إنشاء وإنـجاز وصيانة وتطوير مجمع توزيع مياه الدوحة القائم والجديد وخط مياه من المجمع حتى دوار الأمم المتحدة من الاعمال الملحقة','content' => 'مرفق التقرير الفني','notes' => 'الاستكمال مع جميع العطاءات','created_at' => '2025-01-23 09:17:56','updated_at' => '2025-07-01 09:59:06'),
    array('id' => '895','created_by' => '2','from_id' => '37','to_id' => '1','title' => 'Reply to the comments of Chemical Works Department on Interim Submission B4','content' => NULL,'notes' => NULL,'created_at' => '2025-01-26 07:54:53','updated_at' => '2025-01-26 07:54:53'),
    array('id' => '896','created_by' => '2','from_id' => '1','to_id' => '30','title' => 'Comments on B4 Submission: Request for Clarifications RFC-009','content' => NULL,'notes' => 'الحاق بالكتاب رقم 151/أت بتاريخ 12/01/2025','created_at' => '2025-01-26 13:12:26','updated_at' => '2025-01-26 13:12:58'),
    array('id' => '897','created_by' => '2','from_id' => '1','to_id' => '62','title' => 'العقد رقم (وك م / ع / 5021 -2016/2015) 
  خدمات استشارية لدراسة وتصميم واعداد مستندات مناقصات مجمع توزيع مياه الدوحة الجديد والقائم والخطوط الرئيسية الملحقة في دولة الكويت
  (تقديم عرض فني ومالي جديد)','content' => NULL,'notes' => NULL,'created_at' => '2025-01-26 13:18:28','updated_at' => '2025-01-26 13:18:28'),
    array('id' => '898','created_by' => '2','from_id' => '1','to_id' => '13','title' => 'زيارة لمحطة تقطير الزور الجنوبية','content' => NULL,'notes' => NULL,'created_at' => '2025-01-27 09:58:49','updated_at' => '2025-01-27 09:58:49'),
    array('id' => '899','created_by' => '2','from_id' => '1','to_id' => '18','title' => 'حجز قاعة جميلة الشطى لحضور اجتماع
  Overall Progress Meeting
  يوم الاثنين 10-02-2025 من الساعة 9 ص الي الساعة 12 ظهرا','content' => NULL,'notes' => NULL,'created_at' => '2025-01-27 13:37:51','updated_at' => '2025-01-27 13:37:51'),
    array('id' => '900','created_by' => '2','from_id' => '1','to_id' => '27','title' => 'الممارسة رقم وك م/ 2/ 2022/2021
  دعوة استشارية للدعم الفني والمهني الهندسي لبعض المشاريع النوعية في قطاع مشاريع المياه','content' => NULL,'notes' => NULL,'created_at' => '2025-01-27 15:06:07','updated_at' => '2025-01-27 15:06:07'),
    array('id' => '901','created_by' => '2','from_id' => '1','to_id' => '59','title' => 'الممارسة رقم وك م/ 2/ 2022/2021
  دعوة استشارية للدعم الفني والمهني الهندسي لبعض المشاريع النوعية في قطاع مشاريع المياه','content' => NULL,'notes' => NULL,'created_at' => '2025-01-27 15:08:17','updated_at' => '2025-01-27 15:08:17'),
    array('id' => '902','created_by' => '2','from_id' => '8','to_id' => '1','title' => 'ملاحظة السادة المراقبيين الماليين بخصوص تدريب الكوادر الوطنية','content' => NULL,'notes' => NULL,'created_at' => '2025-01-28 08:08:32','updated_at' => '2025-01-28 11:55:53'),
    array('id' => '903','created_by' => '2','from_id' => '1','to_id' => '8','title' => 'ملاحظة السادة المراقبيين الماليين بخصوص تدريب الكوادر الوطنية','content' => NULL,'notes' => 'رد علي الكتاب رقم 20252335000008 بتاريخ 27-01-2025','created_at' => '2025-01-28 13:59:47','updated_at' => '2025-01-28 14:00:11'),
    array('id' => '904','created_by' => '2','from_id' => '33','to_id' => '1','title' => 'RFC-010','content' => NULL,'notes' => NULL,'created_at' => '2025-01-29 07:27:25','updated_at' => '2025-01-29 07:27:25'),
    array('id' => '905','created_by' => '2','from_id' => '41','to_id' => '1','title' => 'طلب تنفيذ خط مياه عذبة قطر 1200مم ضمن أعمال العقد هـ ط/257','content' => 'مرفق ورقي','notes' => NULL,'created_at' => '2025-01-29 12:50:29','updated_at' => '2025-02-12 08:15:41'),
    array('id' => '906','created_by' => '1','from_id' => '1','to_id' => '45','title' => 'الدراسة البيئية
  Environmental & Social Assessment Report (ESIA)','content' => NULL,'notes' => 'K23165-0106D/25/0071','created_at' => '2025-02-02 08:40:44','updated_at' => '2025-02-02 08:40:44'),
    array('id' => '907','created_by' => '2','from_id' => '61','to_id' => '1','title' => 'المواصفات الفنية والمستندات التي تم تقديمها من قبل المناقصين والخاصة ب (Solar System) للدراسة وابداء الرأي','content' => NULL,'notes' => NULL,'created_at' => '2025-02-02 08:43:22','updated_at' => '2025-02-02 08:43:22'),
    array('id' => '909','created_by' => '2','from_id' => '1','to_id' => '5','title' => 'Interim Submission B2 - B3 - B4','content' => NULL,'notes' => 'رد استشاري العقد علي التقرير المرحلي الثاني والثالث 
  الواردة بالكتاب  رقم 
  K23165-0108D-25-0077
  K23165-0108D-25-0074
  بتاريخ 21-01-2025','created_at' => '2025-02-02 11:35:31','updated_at' => '2025-02-02 12:11:24'),
    array('id' => '910','created_by' => '2','from_id' => '1','to_id' => '19','title' => 'ملاحظات الادارات علي
  Interim Submission B5 (I.S.B5) Submission','content' => NULL,'notes' => 'رد على الكتاب 00945','created_at' => '2025-02-02 12:58:33','updated_at' => '2025-02-02 12:58:33'),
    array('id' => '911','created_by' => '2','from_id' => '1','to_id' => '19','title' => 'Reply to the comments of Chemical Works Department on Interim Submission B4','content' => NULL,'notes' => 'رد علي الكتاب رقم 1028','created_at' => '2025-02-02 13:05:23','updated_at' => '2025-02-02 13:05:23'),
    array('id' => '912','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'Request for Clarification (RFC-10) for HVAC Equipment Design','content' => NULL,'notes' => 'K23165-0108D-25-0073
  29-01-2025','created_at' => '2025-02-02 14:27:02','updated_at' => '2025-02-02 14:27:02'),
    array('id' => '913','created_by' => '2','from_id' => '24','to_id' => '1','title' => 'Hydraulic Study Report','content' => NULL,'notes' => '20250650000008','created_at' => '2025-02-03 08:15:19','updated_at' => '2025-02-03 08:15:19'),
    array('id' => '914','created_by' => '2','from_id' => '24','to_id' => '1','title' => 'Interim Submission B5 (I.S.B5) Submission','content' => NULL,'notes' => NULL,'created_at' => '2025-02-03 08:35:32','updated_at' => '2025-02-03 08:35:32'),
    array('id' => '915','created_by' => '2','from_id' => '1','to_id' => '30','title' => 'Interim Submission B5 (I.S.B5) Submission','content' => NULL,'notes' => 'الحاق بالكتاب رقم 20240650000274 بتاريخ 19-12-2024','created_at' => '2025-02-03 08:59:51','updated_at' => '2025-02-03 09:01:00'),
    array('id' => '916','created_by' => '2','from_id' => '1','to_id' => '23','title' => 'فاتورة الطور الرابع المرحلة الأولى
  Phase 4 Stage 1 Invoice','content' => NULL,'notes' => 'رد على الكتاب 
  5071033-C01-413
  بتاريخ 22-01-2025','created_at' => '2025-02-03 12:53:46','updated_at' => '2025-02-03 12:54:27'),
    array('id' => '917','created_by' => '1','from_id' => '1','to_id' => '15','title' => 'مخاطبات البلدية بشأن المبنى الاداري','content' => NULL,'notes' => '20240650000068
  202428882000042','created_at' => '2025-02-04 10:48:42','updated_at' => '2025-02-04 10:48:42'),
    array('id' => '918','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'Interim Submission B6 (I.S.B6) Submission','content' => 'مرفق 5 CD
  3 مجلدات ورقية','notes' => 'K23165-0108D/25/0110
  04-02-2025','created_at' => '2025-02-04 11:49:19','updated_at' => '2025-02-11 13:04:07'),
    array('id' => '919','created_by' => '2','from_id' => '26','to_id' => '1','title' => 'توفير الخدمات الرئيسية فى مشروع مدينة المطلاع','content' => NULL,'notes' => NULL,'created_at' => '2025-02-04 13:29:18','updated_at' => '2025-02-05 08:40:17'),
    array('id' => '920','created_by' => '2','from_id' => '1','to_id' => '19','title' => 'Data Collection - Drawing Received Officially from MEWRE','content' => 'CD
  مخططات A3','notes' => 'رد علي الكتاب 0080','created_at' => '2025-02-05 08:52:24','updated_at' => '2025-02-05 08:54:28'),
    array('id' => '921','created_by' => '1','from_id' => '1','to_id' => '33','title' => 'MOM held on 27-11-2024 & MOM held on 11-12-2024','content' => NULL,'notes' => '25/0076
  25/0075','created_at' => '2025-02-05 11:50:16','updated_at' => '2025-02-05 11:50:16'),
    array('id' => '922','created_by' => '1','from_id' => '1','to_id' => '61','title' => 'MOM held on 09-01-2025','content' => NULL,'notes' => '25/0028','created_at' => '2025-02-05 11:53:52','updated_at' => '2025-02-05 11:53:52'),
    array('id' => '923','created_by' => '2','from_id' => '1','to_id' => '27','title' => 'تمديد الضمانات الاولية للممارسين','content' => NULL,'notes' => NULL,'created_at' => '2025-02-05 12:49:56','updated_at' => '2025-02-05 12:49:56'),
    array('id' => '924','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'Reimbursable Package Invoice No. 14- January 2025
  فاتورة يناير 2025- فاتورة رقم 14','content' => NULL,'notes' => NULL,'created_at' => '2025-02-09 07:59:16','updated_at' => '2025-02-09 07:59:16'),
    array('id' => '925','created_by' => '2','from_id' => '30','to_id' => '1','title' => 'Comments on B4 Submission: Request for Clarifications RFC-009','content' => NULL,'notes' => 'الاشارة المطبوعة على الكتاب الورقي خطا
  الاشارة الصحيحة 16 وليست 1','created_at' => '2025-02-09 14:14:23','updated_at' => '2025-02-10 09:34:35'),
    array('id' => '926','created_by' => '2','from_id' => '8','to_id' => '1','title' => 'اعتماد التكلفة التقديرية للمناقصة
  المناقصة رقم: و ك م / 2019/2018/45
  انشاء وإنـجاز وصيانة وتطوير مجمع توزيع مياه الدوحة القائم والجديد وخط
  مياه من المجمع حتى دوار الأمم المتحدة من الاعمال الملحقة','content' => 'مرفق كتاب وزارة المالية الموافقة علي اعتماد التكلفة التقديرية','notes' => NULL,'created_at' => '2025-02-10 07:49:23','updated_at' => '2025-02-10 07:49:23'),
    array('id' => '927','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'Final MOM held on 10-12-2024 : Discission on the Concept Design Report Volume 2 - Architecture','content' => NULL,'notes' => 'K23165-0102D/25/0189
  09-02-2025','created_at' => '2025-02-10 08:26:29','updated_at' => '2025-02-10 08:26:29'),
    array('id' => '928','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'Final MOM 03-12-2024 - Progress Coordination Meeting','content' => NULL,'notes' => 'K23165-0106D/25/0188
  09-02-2025','created_at' => '2025-02-10 08:29:17','updated_at' => '2025-02-10 08:29:17'),
    array('id' => '929','created_by' => '2','from_id' => '1','to_id' => '15','title' => 'مخاطبات البلدية بشأن المبنى الاداري
  (التنسيق لعقد اجتماع عاجل لمناقشة الاجراءات التي تمت بهذا الخصوص)','content' => NULL,'notes' => 'الحاق بالكتاب رقم 20240650000068 بتاريخ 04-02-2025','created_at' => '2025-02-10 11:57:48','updated_at' => '2025-02-10 11:57:48'),
    array('id' => '930','created_by' => '1','from_id' => '1','to_id' => '18','title' => 'توفير الخدمات في مشاريع المؤسسة العامة للرعاية السكنية','content' => NULL,'notes' => 'رد على كتاب الموششة رقم 9-2980 المؤرخ 02-02-2025
  والحاق لكتابنا رقم 20250650000003 المؤرخ 15-01-2025','created_at' => '2025-02-10 12:40:32','updated_at' => '2025-02-10 12:40:32'),
    array('id' => '931','created_by' => '2','from_id' => '1','to_id' => '7','title' => 'كتاب الإحصاء السنوي لعام 2024 (الطاقة الكهربائية - المياه) - إصدار 2025','content' => NULL,'notes' => 'رد علي كتاب الوكيل المساعد للتخطيط والتدريب ونظم المعلومات رقم 20250703000010 المؤرخ 20/01/2025
  ((( توحيد رد )))','created_at' => '2025-02-10 15:13:02','updated_at' => '2025-02-11 08:16:02'),
    array('id' => '932','created_by' => '2','from_id' => '5','to_id' => '1','title' => 'توفير الخدمات الرئيسية فى مشروع مدينة المطلاع السكنية','content' => 'مرفق كتاب المؤسسة العامة للرعاية السكنية بتاريخ 2025-02-02 برقم 2980-9','notes' => NULL,'created_at' => '2025-02-11 07:54:49','updated_at' => '2025-02-11 07:58:51'),
    array('id' => '933','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'Revised Schedule','content' => NULL,'notes' => 'K23165-0102D-25-0200
  10-02-2025','created_at' => '2025-02-11 08:10:19','updated_at' => '2025-02-11 08:10:19'),
    array('id' => '934','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'MOM held on 04-02-2025: Discussion on updated Alternatives Report with Water Projects Design Department','content' => 'مرفق مجلد A3
  RFC-011','notes' => 'K23165-0102D-25-0196
  11-02-2025','created_at' => '2025-02-11 10:50:58','updated_at' => '2025-02-11 11:21:16'),
    array('id' => '935','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'Concept Design Alternatives of The Main Components','content' => 'مجلد ورقي A3','notes' => 'K23165-0102D-25-0201
  11-02-2025','created_at' => '2025-02-11 10:55:37','updated_at' => '2025-02-11 10:55:37'),
    array('id' => '936','created_by' => '2','from_id' => '1','to_id' => '28','title' => 'طلب تنفيذ خط مياه عذبة قطر 1200مم ضمن أعمال العقد هـ ط/257','content' => 'مرفق ورقي','notes' => NULL,'created_at' => '2025-02-12 08:16:17','updated_at' => '2025-02-12 08:16:30'),
    array('id' => '937','created_by' => '1','from_id' => '1','to_id' => '8','title' => 'Reimbursable Package Invoice No. 14- January 2025
  فاتورة يناير 2025- فاتورة رقم 14','content' => 'اصل الفاتورة + تقرير المهندس','notes' => NULL,'created_at' => '2025-02-12 10:24:42','updated_at' => '2025-02-12 10:24:58'),
    array('id' => '938','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'Monthly Progress Report No. 13','content' => NULL,'notes' => 'K23165-0100D-25-0204
  12-02-2025','created_at' => '2025-02-13 10:34:19','updated_at' => '2025-02-13 10:35:14'),
    array('id' => '939','created_by' => '2','from_id' => '15','to_id' => '1','title' => 'مخاطبات البلدية بشأن المبنى الاداري
  (التنسيق لعقد اجتماع عاجل لمناقشة الاجراءات التي تمت بهذا الخصوص)','content' => NULL,'notes' => NULL,'created_at' => '2025-02-13 13:57:08','updated_at' => '2025-02-13 13:57:08'),
    array('id' => '940','created_by' => '2','from_id' => '66','to_id' => '1','title' => 'نسخة التقرير الدوري المقدم من المؤسسة العامة للرعاية السكنية بشأن الموقف التنفيذي الخاص بأعمال الجهات الحكومية المعنية بتوفير خدمات المشاريع الإسكانية','content' => NULL,'notes' => NULL,'created_at' => '2025-02-16 07:43:57','updated_at' => '2025-02-16 07:43:57'),
    array('id' => '941','created_by' => '2','from_id' => '33','to_id' => '1','title' => 'الموضوع مناقصة توريد وتركيب مضخات بسعات مختلفة لمحطات الضخ المختلفة بدولة الكويت','content' => NULL,'notes' => NULL,'created_at' => '2025-02-16 07:50:39','updated_at' => '2025-02-16 07:50:39'),
    array('id' => '942','created_by' => '1','from_id' => '1','to_id' => '33','title' => 'Final MOM held on 17-12-2024: Electrical and Instrumentation Control Comments from the O&M Facilities Department on Concept Design','content' => NULL,'notes' => NULL,'created_at' => '2025-02-16 10:24:09','updated_at' => '2025-02-16 10:24:09'),
    array('id' => '943','created_by' => '1','from_id' => '1','to_id' => '30','title' => 'Request for clarification RFC_009','content' => NULL,'notes' => 'رد على كتابهم رقم 2025149863000016 المؤرخ 04-02-2025','created_at' => '2025-02-16 11:01:35','updated_at' => '2025-02-16 11:01:35'),
    array('id' => '944','created_by' => '2','from_id' => '1','to_id' => '33','title' => 'الموضوع مناقصة توريد وتركيب مضخات بسعات مختلفة لمحطات الضخ المختلفة بدولة الكويت','content' => NULL,'notes' => NULL,'created_at' => '2025-02-16 12:05:00','updated_at' => '2025-02-16 12:05:00'),
    array('id' => '945','created_by' => '1','from_id' => '1','to_id' => '19','title' => 'Interim Submission B4 Report (I.S.B4)
  ملاحظات ادارة التصميم والاشراف','content' => NULL,'notes' => NULL,'created_at' => '2025-02-16 12:22:47','updated_at' => '2025-02-16 12:22:47'),
    array('id' => '946','created_by' => '1','from_id' => '1','to_id' => '19','title' => 'Draft Hydraulic Design Report REV. B','content' => 'ملاحظات ادارة تصميم مشاريع الشبكات و المنشات المائية مححدة باللون البرتقالي على بعض صفحات التقرير بالاضافة الى كتاب ادارة تشغيل و صيانة الشبكات المائية  رقم  20250650000008 مؤرخ 02/02/2025','notes' => 'رد على كتاب الدار رقم 
  K23165-0102D/24/1029
  المؤرخ 11-12-2024','created_at' => '2025-02-16 12:27:24','updated_at' => '2025-02-20 09:47:45'),
    array('id' => '947','created_by' => '2','from_id' => '1','to_id' => '5','title' => 'Final MOM held on 02-05-2024 Stakeholder Meeting','content' => NULL,'notes' => '0804','created_at' => '2025-02-17 07:54:32','updated_at' => '2025-02-17 07:54:32'),
    array('id' => '948','created_by' => '2','from_id' => '1','to_id' => '33','title' => 'Final MOM held on 13-11-2024: Stakeholder Meeting with the Water Facilities Operation and Maintenance Department to discuss Comment on B4 Submission','content' => NULL,'notes' => '0082','created_at' => '2025-02-17 07:55:42','updated_at' => '2025-02-17 07:55:42'),
    array('id' => '949','created_by' => '2','from_id' => '1','to_id' => '30','title' => 'Final MOM held on 21-10-2024: Progress Coordination','content' => NULL,'notes' => '0037','created_at' => '2025-02-17 07:57:01','updated_at' => '2025-02-17 07:57:01'),
    array('id' => '950','created_by' => '2','from_id' => '1','to_id' => '33','title' => 'Final MOM held on 12-12-2024: Discussion of the Concept Design Report with MEWRE O&M Facilities Department','content' => NULL,'notes' => '0079','created_at' => '2025-02-17 07:59:44','updated_at' => '2025-02-17 07:59:44'),
    array('id' => '951','created_by' => '2','from_id' => '1','to_id' => '37','title' => 'Final MOM held on 16-10-2024
  Discussion on replies from the Chemical Works Department','content' => NULL,'notes' => '1041','created_at' => '2025-02-17 08:01:13','updated_at' => '2025-02-17 08:01:13'),
    array('id' => '952','created_by' => '2','from_id' => '1','to_id' => '39','title' => 'Workshop MOM\'s (08-09-2024 and 09-09-2024) MEWRE Groundwater Production Department','content' => NULL,'notes' => '1088','created_at' => '2025-02-17 08:02:45','updated_at' => '2025-02-17 08:02:45'),
    array('id' => '953','created_by' => '2','from_id' => '1','to_id' => '2','title' => 'اعداد تقديرات ميزانية الوزارة للسنة المالية 2025/2026','content' => NULL,'notes' => NULL,'created_at' => '2025-02-17 08:19:52','updated_at' => '2025-02-17 08:19:52'),
    array('id' => '954','created_by' => '2','from_id' => '1','to_id' => '30','title' => 'Interim Submission B6 (I.S.B6) Submission','content' => NULL,'notes' => '0110','created_at' => '2025-02-17 10:43:13','updated_at' => '2025-02-17 10:44:38'),
    array('id' => '955','created_by' => '2','from_id' => '1','to_id' => '37','title' => 'Interim Submission B6 (I.S.B6) Submission','content' => NULL,'notes' => '0110','created_at' => '2025-02-17 10:43:30','updated_at' => '2025-02-17 10:44:33'),
    array('id' => '956','created_by' => '2','from_id' => '1','to_id' => '2','title' => 'Interim Submission B6 (I.S.B6) Submission','content' => NULL,'notes' => '0110','created_at' => '2025-02-17 10:44:25','updated_at' => '2025-02-17 10:44:25'),
    array('id' => '957','created_by' => '2','from_id' => '1','to_id' => '39','title' => 'Interim Submission B6 (I.S.B6) Submission','content' => NULL,'notes' => '0110','created_at' => '2025-02-17 10:45:18','updated_at' => '2025-02-17 10:45:18'),
    array('id' => '958','created_by' => '2','from_id' => '1','to_id' => '41','title' => 'Interim Submission B6 (I.S.B6) Submission','content' => NULL,'notes' => '0110','created_at' => '2025-02-17 10:45:44','updated_at' => '2025-02-17 10:45:44'),
    array('id' => '959','created_by' => '2','from_id' => '1','to_id' => '5','title' => 'Interim Submission B6 (I.S.B6) Submission','content' => NULL,'notes' => '0110','created_at' => '2025-02-17 10:46:13','updated_at' => '2025-02-17 10:46:13'),
    array('id' => '960','created_by' => '2','from_id' => '1','to_id' => '33','title' => 'Interim Submission B6 (I.S.B6) Submission','content' => NULL,'notes' => '0110','created_at' => '2025-02-17 10:48:27','updated_at' => '2025-02-17 10:48:27'),
    array('id' => '961','created_by' => '2','from_id' => '1','to_id' => '24','title' => 'Interim Submission B6 (I.S.B6) Submission','content' => NULL,'notes' => '0110','created_at' => '2025-02-17 10:49:08','updated_at' => '2025-02-17 10:49:08'),
    array('id' => '962','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'Preliminary Design Report & Drawings Submission','content' => '6 CD
  2 USB','notes' => 'K23165-0106D-25-0217
  17-02-2025','created_at' => '2025-02-17 11:49:21','updated_at' => '2025-02-17 13:40:11'),
    array('id' => '964','created_by' => '2','from_id' => '1','to_id' => '33','title' => 'زيارة مجمع توزيع مياه ميناء عبدالله 2','content' => NULL,'notes' => NULL,'created_at' => '2025-02-17 13:00:47','updated_at' => '2025-02-17 13:00:47'),
    array('id' => '965','created_by' => '2','from_id' => '33','to_id' => '1','title' => 'Final MOM held on 17-12-2024: Electrical and Instrumentation Control Comments from the O&M Facilities Department on Concept Design','content' => NULL,'notes' => NULL,'created_at' => '2025-02-18 08:10:32','updated_at' => '2025-02-18 08:10:32'),
    array('id' => '966','created_by' => '2','from_id' => '1','to_id' => '30','title' => 'Request for Clarification (RFC-10) for HVAC Equipment Design','content' => NULL,'notes' => '0073','created_at' => '2025-02-18 08:42:43','updated_at' => '2025-02-18 08:42:43'),
    array('id' => '967','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'Training Course No. 12 - Time and Cost Control','content' => 'مرفق عدد 4 مجلدات','notes' => 'K23165-0100D-25-0209
  17-02-2025','created_at' => '2025-02-18 08:54:08','updated_at' => '2025-03-04 20:58:30'),
    array('id' => '968','created_by' => '1','from_id' => '1','to_id' => '37','title' => 'Concept Design Alternatives of The Main Components','content' => NULL,'notes' => '0201','created_at' => '2025-02-18 09:12:04','updated_at' => '2025-02-18 09:12:04'),
    array('id' => '969','created_by' => '1','from_id' => '1','to_id' => '33','title' => 'Concept Design Alternatives of The Main Components','content' => NULL,'notes' => '0201','created_at' => '2025-02-18 09:12:49','updated_at' => '2025-02-18 09:12:49'),
    array('id' => '970','created_by' => '1','from_id' => '1','to_id' => '24','title' => 'Concept Design Alternatives of The Main Components','content' => NULL,'notes' => '0201','created_at' => '2025-02-18 10:18:00','updated_at' => '2025-02-18 10:18:00'),
    array('id' => '971','created_by' => '1','from_id' => '1','to_id' => '2','title' => 'متطلبات الادارة بخصوص المبنى الاداري','content' => NULL,'notes' => 'ردا على 202410568600002 المؤرخ 06-02-2024','created_at' => '2025-02-18 11:31:03','updated_at' => '2025-02-18 11:31:03'),
    array('id' => '972','created_by' => '1','from_id' => '1','to_id' => '4','title' => 'متطلبات الادارة بخصوص المبنى الاداري','content' => NULL,'notes' => 'ردا على 202410568600002 المؤرخ 06-02-2024','created_at' => '2025-02-18 11:32:48','updated_at' => '2025-02-18 11:32:48'),
    array('id' => '973','created_by' => '2','from_id' => '27','to_id' => '1','title' => 'إنشاء وإنجاز وصيانة وتطوير مجمع توزيع مياه الدوحة القائم والجديد وخط مياه من المجمع حتى دوار الأمم المتحدة من الأعمال الملحقة','content' => NULL,'notes' => 'طلب تمديد التأمين الاولي
  واستكمال النواقص','created_at' => '2025-02-18 11:49:57','updated_at' => '2025-02-18 11:51:41'),
    array('id' => '974','created_by' => '2','from_id' => '1','to_id' => '3','title' => 'متطلبات الادارة بخصوص المبنى الاداري','content' => NULL,'notes' => 'رد علي الكتاب رقم 20240650000020 بتاريخ 01-04-2024','created_at' => '2025-02-18 14:19:09','updated_at' => '2025-02-18 14:19:53'),
    array('id' => '975','created_by' => '2','from_id' => '1','to_id' => '5','title' => 'متطلبات الادارة بخصوص المبنى الاداري','content' => NULL,'notes' => 'رد علي الكتاب 363-WPD-24
  بتاريخ 19-03-2024','created_at' => '2025-02-18 14:27:48','updated_at' => '2025-02-18 14:27:48'),
    array('id' => '976','created_by' => '2','from_id' => '1','to_id' => '41','title' => 'متطلبات الادارة بخصوص المبنى الاداري','content' => NULL,'notes' => 'رد علي الكتاب رقم أ م ش م/170
  بتاريخ 17-03-2024','created_at' => '2025-02-18 14:33:49','updated_at' => '2025-02-18 14:33:49'),
    array('id' => '977','created_by' => '1','from_id' => '19','to_id' => '1','title' => '====== نفس الكتاب لمشروعين =======
  طلب مخططات للمشروعين رقمي 2 و 5','content' => 'مرفق عدد 1 CD','notes' => 'K23165-0102D/0105D/25/0221
  18-02-2025','created_at' => '2025-02-19 10:46:01','updated_at' => '2025-03-04 20:56:51'),
    array('id' => '978','created_by' => '1','from_id' => '19','to_id' => '1','title' => '====== نفس الكتاب لمشروعين =======
  طلب مخططات للمشروعين رقمي 2 و 5','content' => 'مرفق عدد 1 CD','notes' => 'K23165-0102D/0105D/25/0221
  18-02-2025','created_at' => '2025-02-19 10:47:21','updated_at' => '2025-03-04 20:56:47'),
    array('id' => '979','created_by' => '1','from_id' => '1','to_id' => '26','title' => 'توفير خدمات المياه لكافة مشاريع المؤسسة العامة للرعاية السكنية','content' => NULL,'notes' => NULL,'created_at' => '2025-02-19 12:45:05','updated_at' => '2025-02-19 12:45:05'),
    array('id' => '980','created_by' => '1','from_id' => '33','to_id' => '1','title' => 'اعتماد
  Final MOM held on 13-11-2024: Stakeholder Meeting with the Water Facilities Operation and Maintenance Department to discuss Comment on B4 Submission','content' => NULL,'notes' => '20250650000036
  19-02-2025','created_at' => '2025-02-20 09:04:11','updated_at' => '2025-02-20 09:04:34'),
    array('id' => '981','created_by' => '1','from_id' => '37','to_id' => '1','title' => 'Interim Submission B6 (I.S.B6) Submission','content' => NULL,'notes' => '20250650000038
  19-02-2025','created_at' => '2025-02-20 09:11:13','updated_at' => '2025-02-20 09:11:13'),
    array('id' => '982','created_by' => '1','from_id' => '19','to_id' => '1','title' => '====== نفس الكتاب لمشروعين =======
  MOM held on 05-02-2025 with PART at 9:30','content' => 'عدد 2 ملف 7z','notes' => 'K23165-0102D/0105D/25/0195
  19-02-2025','created_at' => '2025-02-20 10:14:01','updated_at' => '2025-02-20 10:27:07'),
    array('id' => '983','created_by' => '1','from_id' => '19','to_id' => '1','title' => '====== نفس الكتاب لمشروعين =======
  MOM held on 05-02-2025 with PART at 9:30','content' => 'عدد 2 ملف 7z
  عدد 4 CD','notes' => 'K23165-0102D/0105D/25/0195
  19-02-2025','created_at' => '2025-02-20 10:27:42','updated_at' => '2025-03-04 20:49:26'),
    array('id' => '984','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'Submission of Concept Design Report - Rev B','content' => 'عدد 1 نسخة ورقية
  عدد 5 CD','notes' => 'K23165-0102D/25/0240
  20-02-2025','created_at' => '2025-02-20 12:17:57','updated_at' => '2025-02-20 12:17:57'),
    array('id' => '985','created_by' => '1','from_id' => '33','to_id' => '1','title' => 'Concept Design Alternatives of The Main Components','content' => NULL,'notes' => '20250650000047
  20-02-2025','created_at' => '2025-02-23 07:41:28','updated_at' => '2025-02-23 07:41:28'),
    array('id' => '986','created_by' => '1','from_id' => '61','to_id' => '1','title' => 'MOM held on 09-01-2025','content' => NULL,'notes' => '20250650000022
  13-02-2025','created_at' => '2025-02-23 07:47:06','updated_at' => '2025-02-23 07:47:06'),
    array('id' => '987','created_by' => '1','from_id' => '30','to_id' => '1','title' => 'Request for Clarification (RFC-10) for HVAC Equipment Design','content' => NULL,'notes' => '20250650000045
  20-02-2025','created_at' => '2025-02-23 07:52:04','updated_at' => '2025-02-23 07:52:04'),
    array('id' => '988','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'Final MOM held on 15-12-2024 , 16-12-2024 , 17-12-2024 , 18-12-20204 , 19-12-2024 
  I/C Workshops Meeting - B4 Submission','content' => NULL,'notes' => 'K23165-0108D/25/0237
  23-02-2025','created_at' => '2025-02-23 09:43:36','updated_at' => '2025-02-23 09:48:45'),
    array('id' => '989','created_by' => '1','from_id' => '1','to_id' => '15','title' => 'محضر اجتماع 16-02-2025 بخصوص مخاطبات البلدية بشأن المباني الادارية','content' => NULL,'notes' => '20250650000055','created_at' => '2025-02-24 10:22:39','updated_at' => '2025-02-24 10:22:39'),
    array('id' => '990','created_by' => '1','from_id' => '2','to_id' => '1','title' => 'متطلبات الادارة بخصوص المبنى الاداري','content' => NULL,'notes' => '20250650000050
  24-02-2025','created_at' => '2025-03-02 09:46:26','updated_at' => '2025-03-02 09:46:26'),
    array('id' => '991','created_by' => '1','from_id' => '1','to_id' => '30','title' => 'Concept Design Alternatives of The Main Component','content' => NULL,'notes' => '0201
  11-02-2025','created_at' => '2025-03-02 12:16:15','updated_at' => '2025-03-02 12:16:15'),
    array('id' => '992','created_by' => '1','from_id' => '1','to_id' => '19','title' => 'Concept Design Alternatives of The Main Component
  رد الاعمال الكيماوية','content' => NULL,'notes' => '0201','created_at' => '2025-03-02 12:44:44','updated_at' => '2025-03-02 12:44:44'),
    array('id' => '993','created_by' => '1','from_id' => '1','to_id' => '33','title' => 'Concept Design Alternatives of The Main Components
  تحديد موعد اجتماع يوم الاربعاء الساعة 10:30 في قاعة الوكيل المساعد لمشاريع المياه','content' => NULL,'notes' => '20250650000047
  20-02-2025','created_at' => '2025-03-02 13:26:08','updated_at' => '2025-03-02 13:26:08'),
    array('id' => '994','created_by' => '1','from_id' => '1','to_id' => '30','title' => 'الحاق
  Interim Submission B5 (I.S.B5) Submission','content' => NULL,'notes' => 'الحاق للكتابنا رقم 20240650000274
  المؤرخ 04-02-2025','created_at' => '2025-03-03 09:56:07','updated_at' => '2025-03-03 09:56:07'),
    array('id' => '995','created_by' => '1','from_id' => '41','to_id' => '1','title' => 'متطلبات الادارة بخصوص المبنى الاداري','content' => NULL,'notes' => '20250650000054','created_at' => '2025-03-03 10:21:52','updated_at' => '2025-03-03 10:21:52'),
    array('id' => '996','created_by' => '1','from_id' => '2','to_id' => '1','title' => 'Interim Submission B6 (I.S.B6) Submission','content' => NULL,'notes' => '20250650000039','created_at' => '2025-03-03 10:27:59','updated_at' => '2025-03-03 10:27:59'),
    array('id' => '997','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'Workshops MOM held on 26-01-2025 to 29-01-2025 : Stakeholder Meeting with the Water Facilities I&C Design Department to Discuss Comments on B1 - B5 Submission','content' => NULL,'notes' => 'K23165-0108D/25/0265
  03-03-2025','created_at' => '2025-03-03 11:34:59','updated_at' => '2025-03-03 11:34:59'),
    array('id' => '998','created_by' => '1','from_id' => '1','to_id' => '19','title' => 'RFC - 10','content' => NULL,'notes' => 'رد على
  K23165-0102D-25-1050
  19-12-2024','created_at' => '2025-03-03 11:57:56','updated_at' => '2025-03-03 13:04:56'),
    array('id' => '999','created_by' => '1','from_id' => '1','to_id' => '27','title' => 'تفعيل بند الاشراف','content' => NULL,'notes' => '20250650000006','created_at' => '2025-03-04 12:10:26','updated_at' => '2025-03-20 02:44:08'),
    array('id' => '1000','created_by' => '1','from_id' => '33','to_id' => '1','title' => 'اعتماد
  MOM held on 27-11-2024 & MOM held on 11-12-2024','content' => NULL,'notes' => '20250650000020','created_at' => '2025-03-04 19:43:29','updated_at' => '2025-03-04 19:43:29'),
    array('id' => '1001','created_by' => '1','from_id' => '1','to_id' => '19','title' => 'ملغي
  Monthly Progress Report No. 13','content' => NULL,'notes' => NULL,'created_at' => '2025-03-04 20:20:27','updated_at' => '2025-03-27 02:19:49'),
    array('id' => '1002','created_by' => '1','from_id' => '1','to_id' => '30','title' => 'Request for Clarification RFC-009','content' => NULL,'notes' => '20250650000031','created_at' => '2025-03-04 20:24:41','updated_at' => '2025-03-04 20:24:41'),
    array('id' => '1003','created_by' => '1','from_id' => '1','to_id' => '5','title' => 'Interim Submission B2 - B3 - B4','content' => NULL,'notes' => '20250650000019','created_at' => '2025-03-04 20:41:42','updated_at' => '2025-03-04 20:41:42'),
    array('id' => '1004','created_by' => '1','from_id' => '1','to_id' => '19','title' => 'نظام التراسل الالكتروني','content' => NULL,'notes' => NULL,'created_at' => '2025-03-04 20:44:21','updated_at' => '2025-03-04 20:44:21'),
    array('id' => '1005','created_by' => '1','from_id' => '1','to_id' => '23','title' => 'نظام التراسل الالكتروني','content' => NULL,'notes' => NULL,'created_at' => '2025-03-04 20:45:26','updated_at' => '2025-03-04 20:45:26'),
    array('id' => '1006','created_by' => '1','from_id' => '1','to_id' => '62','title' => 'نظام التراسل الالكتروني','content' => NULL,'notes' => NULL,'created_at' => '2025-03-04 20:46:29','updated_at' => '2025-03-04 20:46:29'),
    array('id' => '1007','created_by' => '1','from_id' => '34','to_id' => '1','title' => 'الردود على الاستيضاحات المطلوبة','content' => 'مرفق عدد 5 CD','notes' => NULL,'created_at' => '2025-03-04 21:03:37','updated_at' => '2025-03-04 21:03:37'),
    array('id' => '1008','created_by' => '1','from_id' => '67','to_id' => '1','title' => 'الردود على الاستيضاحات المطلوبة','content' => NULL,'notes' => '2025/ku/41
  05-03-2025','created_at' => '2025-03-05 10:15:13','updated_at' => '2025-03-05 10:15:44'),
    array('id' => '1009','created_by' => '1','from_id' => '1','to_id' => '19','title' => 'Interim Submission B6 (I.S.B6) Submission','content' => NULL,'notes' => '25/0110','created_at' => '2025-03-05 11:37:41','updated_at' => '2025-03-05 11:37:41'),
    array('id' => '1010','created_by' => '1','from_id' => '33','to_id' => '1','title' => 'Interim Submission B6 (I.S.B6) Submission','content' => NULL,'notes' => '20250650000043','created_at' => '2025-03-06 10:03:31','updated_at' => '2025-03-06 10:03:31'),
    array('id' => '1011','created_by' => '1','from_id' => '33','to_id' => '1','title' => 'Interim Submission B6 (I.S.B6) Submission','content' => NULL,'notes' => '20250650000043','created_at' => '2025-03-06 10:05:53','updated_at' => '2025-03-06 10:05:53'),
    array('id' => '1012','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'Primavera File (Soft Copy) for Overall Project Schedule','content' => 'عدد 1 فلاش ميموري','notes' => 'K23165-0100D/25/0270
  06-03-2025','created_at' => '2025-03-06 10:50:03','updated_at' => '2025-03-06 10:50:03'),
    array('id' => '1013','created_by' => '1','from_id' => '17','to_id' => '1','title' => 'إلزام الشركات بالتسجيل بنظام التراسل الإلكتروني واستلام جميع الفواتير الأصلية الواردة إلى إدارة السجل العام عن طريق ضباط الاتصال المكلفين من قبل القطاعات المختلفة بالوزارة','content' => NULL,'notes' => '20250348000079
  05-03-2025','created_at' => '2025-03-06 11:14:52','updated_at' => '2025-03-06 11:14:52'),
    array('id' => '1014','created_by' => '1','from_id' => '1','to_id' => '50','title' => 'نظام التراسل الالكتروني','content' => NULL,'notes' => NULL,'created_at' => '2025-03-06 11:54:33','updated_at' => '2025-03-06 11:54:33'),
    array('id' => '1015','created_by' => '1','from_id' => '37','to_id' => '1','title' => 'Final MOM held on 16-10-2024
  Discussion on replies from the Chemical Works Department','content' => NULL,'notes' => NULL,'created_at' => '2025-03-06 12:47:06','updated_at' => '2025-03-06 12:47:06'),
    array('id' => '1016','created_by' => '1','from_id' => '33','to_id' => '1','title' => 'Final MOM held on 12-12-2024: Discussion of the Concept Design Report with MEWRE O&M Facilities Department','content' => NULL,'notes' => '20250650000033','created_at' => '2025-03-06 12:51:37','updated_at' => '2025-03-06 12:51:50'),
    array('id' => '1017','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'Phase 2 Pre - Draft Final Master Plan Report - Rev A','content' => 'عدد 5 CD
  عدد 1 نسخة ورقية A3
  مخططات A1 + A3','notes' => 'K23165-0105D/25/0277
  09-03-2025','created_at' => '2025-03-09 10:06:40','updated_at' => '2025-03-09 10:06:40'),
    array('id' => '1018','created_by' => '1','from_id' => '1','to_id' => '33','title' => 'RFC - 11','content' => NULL,'notes' => '25/0196','created_at' => '2025-03-09 10:09:09','updated_at' => '2025-03-09 10:09:09'),
    array('id' => '1019','created_by' => '1','from_id' => '33','to_id' => '1','title' => 'Interim Submission B6 (I.S.B6) Submission','content' => NULL,'notes' => '20250650000043','created_at' => '2025-03-09 10:36:50','updated_at' => '2025-03-09 10:36:50'),
    array('id' => '1020','created_by' => '1','from_id' => '58','to_id' => '1','title' => 'الردود على الاستيضاحات المطلوبة','content' => 'ععدد 4 صفحات
  عدد 1 CD','notes' => 'AI-MEW/45/EPC/L-00537
  09-03-2025','created_at' => '2025-03-09 11:52:06','updated_at' => '2025-03-09 11:53:08'),
    array('id' => '1021','created_by' => '1','from_id' => '33','to_id' => '1','title' => 'Concept Design Alternatives of The Main Components','content' => NULL,'notes' => '20250650000047','created_at' => '2025-03-10 09:49:53','updated_at' => '2025-03-10 09:50:24'),
    array('id' => '1022','created_by' => '1','from_id' => '4','to_id' => '1','title' => 'متطلبات الادارة بخصوص المبنى الاداري','content' => NULL,'notes' => '20250650000052','created_at' => '2025-03-10 09:58:45','updated_at' => '2025-03-10 09:58:45'),
    array('id' => '1023','created_by' => '1','from_id' => '68','to_id' => '1','title' => 'الردود على الاستيضاحات المطلوبة','content' => 'عدد 1 Flash Memory','notes' => 'MAK/MEW/45-2018/2019/002
  09-03-2025','created_at' => '2025-03-10 10:42:17','updated_at' => '2025-03-10 10:42:57'),
    array('id' => '1024','created_by' => '1','from_id' => '1','to_id' => '56','title' => 'ردود المناقصين (عدد 5 شركات) على ملاحظات الوزارة','content' => NULL,'notes' => NULL,'created_at' => '2025-03-10 11:31:00','updated_at' => '2025-03-10 11:31:00'),
    array('id' => '1025','created_by' => '1','from_id' => '1','to_id' => '61','title' => 'ردود المناقصين (عدد 5 شركات) على ملاحظات الوزارة','content' => NULL,'notes' => NULL,'created_at' => '2025-03-10 12:13:00','updated_at' => '2025-03-10 12:13:00'),
    array('id' => '1026','created_by' => '1','from_id' => '1','to_id' => '30','title' => 'Interim Submission Report (B1, B2, B3)','content' => 'عدد 1 CD يحتوي على B1 + B2 + B3','notes' => NULL,'created_at' => '2025-03-10 12:23:54','updated_at' => '2025-03-17 10:49:02'),
    array('id' => '1027','created_by' => '1','from_id' => '1','to_id' => '33','title' => 'مناقصة توريد وتركيب مضخات بسعات مختلفة لمحطات الضخ المختلفة بدولة الكويت','content' => NULL,'notes' => '2025006000062
  03-03-2025','created_at' => '2025-03-10 12:50:14','updated_at' => '2025-03-10 12:50:14'),
    array('id' => '1028','created_by' => '1','from_id' => '69','to_id' => '1','title' => 'الردود على الاستيضاحات المطلوبة','content' => 'عدد 1 CD
  عدد 1 Flash','notes' => 'ش خ م / 2025 / 278
  10-03-2025','created_at' => '2025-03-10 13:12:47','updated_at' => '2025-03-10 13:13:54'),
    array('id' => '1029','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'Final MOM held on 15-10-2024 - Interim Submission B3 (I.S.B3) Submission','content' => NULL,'notes' => 'K23165-0108D/25/0280
  11-03-2025','created_at' => '2025-03-11 10:41:09','updated_at' => '2025-03-11 10:41:09'),
    array('id' => '1030','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'Reimbursable Package - Invoices No. 15 - February 2025
  فاتورة اعمال شهر فبراير 2025','content' => NULL,'notes' => 'K23165-0200D/25/0268
  04-03-2025','created_at' => '2025-03-11 13:20:58','updated_at' => '2025-03-11 13:20:58'),
    array('id' => '1031','created_by' => '1','from_id' => '39','to_id' => '1','title' => 'اعتماد
  Workshop MOM\'s (08-09-2024 and 09-09-2024)
   MEWRE Groundwater Production Department','content' => NULL,'notes' => NULL,'created_at' => '2025-03-12 09:48:22','updated_at' => '2025-03-12 09:52:09'),
    array('id' => '1032','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'Final MOM held on 16-10-2024 : Coordination Meeting - Chemical Works Department','content' => NULL,'notes' => 'K23165-0108D/25/0279
  12-03-2025','created_at' => '2025-03-12 10:56:40','updated_at' => '2025-03-12 10:56:40'),
    array('id' => '1033','created_by' => '1','from_id' => '1','to_id' => '8','title' => 'Reimbursable Package Invoice No. 15- February 2025
  فاتورة فبراير 2025- فاتورة رقم 15','content' => NULL,'notes' => '0268','created_at' => '2025-03-13 12:42:46','updated_at' => '2025-03-13 12:42:46'),
    array('id' => '1034','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'البرنامج التدريبي','content' => NULL,'notes' => 'K23165-0100D/25/0197
  13/03/2025','created_at' => '2025-03-13 12:49:03','updated_at' => '2025-03-13 12:49:03'),
    array('id' => '1035','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'Monthly Progress Report No. 14','content' => NULL,'notes' => 'K23165-0100D/25/0301
  13-03-2025','created_at' => '2025-03-13 12:50:36','updated_at' => '2025-03-13 12:50:36'),
    array('id' => '1036','created_by' => '1','from_id' => '33','to_id' => '1','title' => 'RFC - 11','content' => NULL,'notes' => '20250650000067','created_at' => '2025-03-16 09:50:49','updated_at' => '2025-03-16 09:50:49'),
    array('id' => '1037','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'MOM held on 18-02-2025 - Progress Update','content' => NULL,'notes' => 'K23165-0105D/25/0285
  16-03-2025','created_at' => '2025-03-16 10:40:38','updated_at' => '2025-03-16 10:40:38'),
    array('id' => '1038','created_by' => '1','from_id' => '1','to_id' => '19','title' => 'Monthly Progress Report No. 13','content' => NULL,'notes' => '25-0204','created_at' => '2025-03-16 12:20:09','updated_at' => '2025-03-16 12:20:09'),
    array('id' => '1039','created_by' => '1','from_id' => '30','to_id' => '1','title' => 'Concept Design Alternatives of The Main Component','content' => NULL,'notes' => '20250650000059','created_at' => '2025-03-17 09:51:12','updated_at' => '2025-03-17 09:51:12'),
    array('id' => '1040','created_by' => '1','from_id' => '1','to_id' => '39','title' => 'Phase 2 Pre - Draft Final Master Plan Report - Rev A','content' => 'عدد 1 CD','notes' => '0277','created_at' => '2025-03-17 12:45:58','updated_at' => '2025-03-20 09:47:14'),
    array('id' => '1041','created_by' => '1','from_id' => '1','to_id' => '19','title' => 'RFC - 11','content' => NULL,'notes' => '0196','created_at' => '2025-03-17 12:56:01','updated_at' => '2025-03-17 12:56:01'),
    array('id' => '1042','created_by' => '1','from_id' => '3','to_id' => '1','title' => 'متطلبات الادارة بخصوص المبنى الاداري','content' => NULL,'notes' => '20250650000060','created_at' => '2025-03-18 11:33:35','updated_at' => '2025-03-18 11:33:35'),
    array('id' => '1043','created_by' => '1','from_id' => '1','to_id' => '30','title' => 'الحاق
  Interim Submission B5 (I.S.B5) Submission','content' => NULL,'notes' => '20240650000274
  20250650000066','created_at' => '2025-03-18 13:19:24','updated_at' => '2025-03-18 13:19:24'),
    array('id' => '1044','created_by' => '1','from_id' => '1','to_id' => '51','title' => 'تمديد نقاط انترنت','content' => NULL,'notes' => NULL,'created_at' => '2025-03-18 13:28:25','updated_at' => '2025-03-18 13:28:25'),
    array('id' => '1045','created_by' => '1','from_id' => '5','to_id' => '1','title' => 'Interim Submission B2 - B3 - B4','content' => NULL,'notes' => '20250650000019','created_at' => '2025-03-19 09:44:07','updated_at' => '2025-03-19 09:44:07'),
    array('id' => '1046','created_by' => '1','from_id' => '37','to_id' => '1','title' => 'Concept Design Alternatives of The Main Components','content' => NULL,'notes' => '20250650000046','created_at' => '2025-03-20 02:55:58','updated_at' => '2025-03-20 02:56:16'),
    array('id' => '1047','created_by' => '1','from_id' => '1','to_id' => '33','title' => 'Phase 2 Pre - Draft Final Master Plan Report - Rev A','content' => 'عدد 1 CD','notes' => '0277','created_at' => '2025-03-20 09:44:07','updated_at' => '2025-03-20 09:47:51'),
    array('id' => '1048','created_by' => '1','from_id' => '1','to_id' => '24','title' => 'Phase 2 Pre - Draft Final Master Plan Report - Rev A','content' => 'عدد 1 CD','notes' => '0277','created_at' => '2025-03-20 09:44:51','updated_at' => '2025-03-20 09:47:22'),
    array('id' => '1049','created_by' => '1','from_id' => '1','to_id' => '2','title' => 'Phase 2 Pre - Draft Final Master Plan Report - Rev A','content' => 'عدد 1 CD','notes' => '0277','created_at' => '2025-03-20 09:45:23','updated_at' => '2025-03-20 09:47:20'),
    array('id' => '1050','created_by' => '1','from_id' => '1','to_id' => '5','title' => 'Interim Submission B4 (I.S.B4) Submission','content' => NULL,'notes' => '0809','created_at' => '2025-03-20 10:17:08','updated_at' => '2025-03-20 10:17:08'),
    array('id' => '1051','created_by' => '1','from_id' => '1','to_id' => '33','title' => 'MOM held on 10-12-2024 Discussion on the Concept Design of the Pump Station','content' => NULL,'notes' => '1042','created_at' => '2025-03-20 10:22:02','updated_at' => '2025-03-20 10:22:02'),
    array('id' => '1052','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'Final MOM held on 05-11-2024 Collaboration Website (PCW) Demonstration','content' => NULL,'notes' => 'K23165-0100D/25/0314
  23-03-2025','created_at' => '2025-03-23 09:58:45','updated_at' => '2025-03-23 09:58:45'),
    array('id' => '1053','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'Final MOM held on 04-06-2024 : Project Collaboration Website - PCW Presentation and Workshop','content' => NULL,'notes' => 'K23165-0100D/25/0309
  23-03-2025','created_at' => '2025-03-23 10:04:15','updated_at' => '2025-03-23 10:04:15'),
    array('id' => '1054','created_by' => '1','from_id' => '1','to_id' => '8','title' => 'اقفال السنة المالية 2024/2025','content' => NULL,'notes' => NULL,'created_at' => '2025-03-23 11:12:20','updated_at' => '2025-03-23 11:12:20'),
    array('id' => '1055','created_by' => '1','from_id' => '1','to_id' => '56','title' => 'استلام العطاءات','content' => NULL,'notes' => NULL,'created_at' => '2025-03-23 11:30:38','updated_at' => '2025-03-23 11:30:38'),
    array('id' => '1056','created_by' => '1','from_id' => '1','to_id' => '61','title' => 'استلام العطاءات','content' => NULL,'notes' => NULL,'created_at' => '2025-03-23 11:32:01','updated_at' => '2025-03-23 11:32:01'),
    array('id' => '1057','created_by' => '1','from_id' => '1','to_id' => '37','title' => 'استلام العطاءات','content' => NULL,'notes' => NULL,'created_at' => '2025-03-23 11:33:10','updated_at' => '2025-03-23 11:33:10'),
    array('id' => '1058','created_by' => '1','from_id' => '1','to_id' => '19','title' => 'Interim Submission (B2/B3/B4) Submission','content' => NULL,'notes' => '0074
  2025065000019','created_at' => '2025-03-23 11:51:45','updated_at' => '2025-03-23 11:51:45'),
    array('id' => '1059','created_by' => '1','from_id' => '39','to_id' => '1','title' => 'Interim Submission B6 (I.S.B6) Submission','content' => NULL,'notes' => '20250650000040','created_at' => '2025-03-23 22:53:51','updated_at' => '2025-03-23 22:53:51'),
    array('id' => '1060','created_by' => '1','from_id' => '24','to_id' => '1','title' => 'Interim Submission B6 (I.S.B6) Submission','content' => NULL,'notes' => '20250650000044','created_at' => '2025-03-23 22:57:07','updated_at' => '2025-03-23 22:57:07'),
    array('id' => '1061','created_by' => '1','from_id' => '14','to_id' => '1','title' => 'طلب ترشيح اعضاء لمسودة القرار الإداري لتشكيل لجنة دراسة عطاءات مناقصة مجمع توزيع المياه بحولي','content' => NULL,'notes' => NULL,'created_at' => '2025-03-23 23:09:06','updated_at' => '2025-03-23 23:09:06'),
    array('id' => '1062','created_by' => '1','from_id' => '33','to_id' => '1','title' => 'Phase 2 Pre - Draft Final Master Plan Report - Rev A','content' => NULL,'notes' => 'ات - 419 - 2025','created_at' => '2025-03-25 11:47:31','updated_at' => '2025-03-25 11:47:31'),
    array('id' => '1063','created_by' => '1','from_id' => '1','to_id' => '30','title' => 'الحاق
  Interim Submission B6 (I.S.B6) Submission','content' => NULL,'notes' => '20250650000037','created_at' => '2025-03-25 12:08:40','updated_at' => '2025-03-25 12:08:40'),
    array('id' => '1064','created_by' => '1','from_id' => '1','to_id' => '5','title' => 'الحاق
  Interim Submission B6 (I.S.B6) Submission','content' => NULL,'notes' => '20250650000042','created_at' => '2025-03-25 12:10:15','updated_at' => '2025-03-25 12:10:33'),
    array('id' => '1065','created_by' => '1','from_id' => '1','to_id' => '14','title' => 'MOM held on 09-12-2024
  Discussion on the Draft Hydraulic Study Report & Concept Design Report','content' => NULL,'notes' => 'K23165-0102D-24-1019','created_at' => '2025-03-25 12:24:06','updated_at' => '2025-03-25 12:33:27'),
    array('id' => '1066','created_by' => '1','from_id' => '62','to_id' => '1','title' => 'تجديد رخصة قوة الاطفاء العام','content' => 'مخطط','notes' => 'AEC-032500010
  25-03-2025','created_at' => '2025-03-26 09:44:11','updated_at' => '2025-03-26 09:44:11'),
    array('id' => '1067','created_by' => '1','from_id' => '1','to_id' => '24','title' => 'Interim Submission B6 (I.S.B6) Submission','content' => NULL,'notes' => '20250650000044','created_at' => '2025-03-26 11:09:30','updated_at' => '2025-03-26 12:25:12'),
    array('id' => '1068','created_by' => '1','from_id' => '1','to_id' => '39','title' => 'Interim Submission B6 (I.S.B6) Submission','content' => NULL,'notes' => '20250650000040','created_at' => '2025-03-26 11:11:03','updated_at' => '2025-03-26 12:25:07'),
    array('id' => '1069','created_by' => '1','from_id' => '41','to_id' => '1','title' => 'Interim Submission B6 (I.S.B6) Submission','content' => NULL,'notes' => '20250648000226
  20250650000041','created_at' => '2025-03-27 03:06:02','updated_at' => '2025-03-27 03:06:35'),
    array('id' => '1070','created_by' => '1','from_id' => '33','to_id' => '1','title' => 'Phase 2 Pre - Draft Final Master Plan Report - Rev A','content' => NULL,'notes' => '20250060000105','created_at' => '2025-03-27 03:13:30','updated_at' => '2025-03-27 03:14:13'),
    array('id' => '1071','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'MOM held on 12-03-2025: Meeting with Water Facilities O&M Maintenance Department to Discuss "Concept Design Alternatives of The Main Components" Report (Rev A)','content' => NULL,'notes' => 'K23165-0102D/25/0307
  27-03-2025','created_at' => '2025-03-27 10:16:12','updated_at' => '2025-03-27 10:17:49'),
    array('id' => '1072','created_by' => '1','from_id' => '1','to_id' => '37','title' => 'Concept Design Report - Rev B','content' => NULL,'notes' => '0240','created_at' => '2025-03-27 11:30:46','updated_at' => '2025-03-27 11:30:46'),
    array('id' => '1073','created_by' => '1','from_id' => '1','to_id' => '33','title' => 'Concept Design Report - Rev B','content' => NULL,'notes' => '0240','created_at' => '2025-03-27 11:32:32','updated_at' => '2025-03-27 11:32:32'),
    array('id' => '1074','created_by' => '1','from_id' => '1','to_id' => '30','title' => 'Concept Design Report - Rev B','content' => NULL,'notes' => '0240','created_at' => '2025-03-27 11:33:13','updated_at' => '2025-03-27 11:33:13'),
    array('id' => '1075','created_by' => '1','from_id' => '1','to_id' => '38','title' => 'Concept Design Report - Rev B','content' => NULL,'notes' => '0240','created_at' => '2025-03-27 11:33:45','updated_at' => '2025-03-27 11:33:45'),
    array('id' => '1076','created_by' => '1','from_id' => '1','to_id' => '19','title' => 'Concept Design Alternatives of The Main Component','content' => NULL,'notes' => '20250650000061','created_at' => '2025-03-27 11:40:35','updated_at' => '2025-03-27 11:40:35'),
    array('id' => '1077','created_by' => '1','from_id' => '33','to_id' => '1','title' => 'MOM held on 10-12-2024 Discussion on the Concept Design of the Pump Station','content' => NULL,'notes' => NULL,'created_at' => '2025-04-02 08:00:35','updated_at' => '2025-04-02 08:00:35'),
    array('id' => '1078','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'Final MOM held on 11-12-2024 : Stakeholder Meeting with Water Facilities Operation and Maintenance Department to Discuss Comments on B4 Submission','content' => NULL,'notes' => 'K23165-0108D/25/0274
  02-04-2025','created_at' => '2025-04-02 10:45:51','updated_at' => '2025-04-02 10:45:51'),
    array('id' => '1079','created_by' => '1','from_id' => '33','to_id' => '1','title' => 'Concept Design Report - Rev B','content' => NULL,'notes' => '20250650000087','created_at' => '2025-04-02 14:55:27','updated_at' => '2025-04-02 14:55:27'),
    array('id' => '1080','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'MOM held on 23-03-2025: Meeting with Water Facilities O&M Maintenance Department to discuss "Concept Design Alternatives of The Main Components" Report (Rev A)','content' => NULL,'notes' => 'K23165-0102D/25/0335
  03-04-2025','created_at' => '2025-04-03 11:54:13','updated_at' => '2025-04-03 11:54:13'),
    array('id' => '1081','created_by' => '1','from_id' => '1','to_id' => '19','title' => 'تسليم نسخ اصلية من محاضر اجتماعات','content' => NULL,'notes' => NULL,'created_at' => '2025-04-06 09:15:15','updated_at' => '2025-04-06 09:15:15'),
    array('id' => '1082','created_by' => '1','from_id' => '1','to_id' => '28','title' => 'MOM held on 05-02-2025 with PART at 09:30','content' => NULL,'notes' => '0195','created_at' => '2025-04-06 09:17:53','updated_at' => '2025-04-06 09:17:53'),
    array('id' => '1083','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'Final MOM held on 30-10-2024 : Project Collaboration Website (PCW) Demonstration','content' => NULL,'notes' => 'K23165-0100D/25/0310
  06-04-2025','created_at' => '2025-04-06 11:46:55','updated_at' => '2025-04-06 11:46:55'),
    array('id' => '1084','created_by' => '1','from_id' => '37','to_id' => '1','title' => 'Concept Design Report - Rev B','content' => NULL,'notes' => '20250650000088','created_at' => '2025-04-07 08:46:47','updated_at' => '2025-04-07 08:46:47'),
    array('id' => '1085','created_by' => '1','from_id' => '19','to_id' => '1','title' => '========== مسحوب ==================
  Phase 2 Draft Final Master Plan Report - Rev A','content' => 'مرفق عدد 5 فلاش ميموري','notes' => 'K23165-0105D/25/0337
  07-04-2025','created_at' => '2025-04-07 09:31:07','updated_at' => '2025-04-09 10:35:37'),
    array('id' => '1086','created_by' => '1','from_id' => '1','to_id' => '33','title' => 'Concept Design Report - Rev B','content' => NULL,'notes' => '20250650000087
  20250650000075','created_at' => '2025-04-07 10:24:26','updated_at' => '2025-04-07 10:24:26'),
    array('id' => '1087','created_by' => '1','from_id' => '1','to_id' => '30','title' => 'Request for Clarification RFC-009','content' => NULL,'notes' => '25/151
  20250650000031','created_at' => '2025-04-07 11:48:19','updated_at' => '2025-04-07 11:48:19'),
    array('id' => '1088','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'Final MOM held on 27-11-2024 : Stakeholder Meeting with the Water Facilities Projects Department','content' => NULL,'notes' => 'K23165-0108D/25/0326
  07-04-2025','created_at' => '2025-04-07 11:54:53','updated_at' => '2025-04-07 11:54:53'),
    array('id' => '1089','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'Final MOM Held on 24-10-2024 : Stakeholder Meeting','content' => NULL,'notes' => 'K23165-0108D/25/0327
  07-04-2025','created_at' => '2025-04-07 11:57:10','updated_at' => '2025-04-07 11:57:10'),
    array('id' => '1090','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'مشروع 2
  مشروع 5
  Final MOM held on 05-02-2025 with PART','content' => NULL,'notes' => 'K23165-0102D/0105D/25/0348
  07-04-2025','created_at' => '2025-04-07 12:13:56','updated_at' => '2025-04-10 11:18:13'),
    array('id' => '1091','created_by' => '1','from_id' => '1','to_id' => '41','title' => 'طلب تنفيذ خط مياه عذبة قطر 1200 مم ضمن اعمال العقد','content' => NULL,'notes' => NULL,'created_at' => '2025-04-08 09:17:20','updated_at' => '2025-04-08 09:17:20'),
    array('id' => '1092','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'MOM held on 24-03-2025 & 25-03-2025
  
  خطأ بموضوع الكتاب مكتوب السنة 3025','content' => NULL,'notes' => 'K23165-0106D/25/0336
  09-04-2025','created_at' => '2025-04-09 09:05:51','updated_at' => '2025-04-09 09:05:51'),
    array('id' => '1093','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'RFC-010','content' => NULL,'notes' => 'K23165-0102D/25/0353
  08-04-2025','created_at' => '2025-04-09 09:09:57','updated_at' => '2025-04-10 12:13:45'),
    array('id' => '1094','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'Final MOM held on 24-12-2024 - Project Collaboration Website (PCW) Presentation','content' => NULL,'notes' => 'K23165-0100D/25/0363
  09-04-2025','created_at' => '2025-04-09 13:30:23','updated_at' => '2025-04-09 13:30:23'),
    array('id' => '1095','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'Reimbursable Package - Invoice No. 16 - March 2025','content' => NULL,'notes' => 'K23165-0200D/25/0351
  08-04-2025','created_at' => '2025-04-09 13:33:10','updated_at' => '2025-04-09 13:33:10'),
    array('id' => '1096','created_by' => '1','from_id' => '1','to_id' => '30','title' => 'Preliminary Design Report - Volume 2','content' => NULL,'notes' => '25/0217','created_at' => '2025-04-10 10:07:53','updated_at' => '2025-04-10 10:07:53'),
    array('id' => '1097','created_by' => '1','from_id' => '1','to_id' => '61','title' => 'استلام العطاءات','content' => NULL,'notes' => '3137/151/13','created_at' => '2025-04-10 10:22:07','updated_at' => '2025-04-10 10:22:07'),
    array('id' => '1098','created_by' => '1','from_id' => '1','to_id' => '56','title' => 'استلام العطاءات','content' => NULL,'notes' => '3137/151/13','created_at' => '2025-04-10 10:26:47','updated_at' => '2025-04-10 10:26:47'),
    array('id' => '1099','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'Training Course No. 12: Time And Cost Control','content' => NULL,'notes' => 'K23165-0100D/25/0364
  10-04-2025','created_at' => '2025-04-10 12:30:43','updated_at' => '2025-04-10 12:30:43'),
    array('id' => '1100','created_by' => '1','from_id' => '1','to_id' => '8','title' => 'Reimbursable Package Invoice No. 16- March 2025
  فاتورة مارس 2025- فاتورة رقم 16','content' => NULL,'notes' => '25/0351','created_at' => '2025-04-10 12:38:22','updated_at' => '2025-04-10 12:38:22'),
    array('id' => '1101','created_by' => '1','from_id' => '37','to_id' => '1','title' => 'استلام العطاءات','content' => NULL,'notes' => NULL,'created_at' => '2025-04-10 16:40:57','updated_at' => '2025-04-10 16:40:57'),
    array('id' => '1102','created_by' => '1','from_id' => '2','to_id' => '1','title' => 'Phase 2 Pre - Draft Final Master Plan Report - Rev A','content' => NULL,'notes' => 'ات 421','created_at' => '2025-04-10 16:48:41','updated_at' => '2025-04-10 16:48:41'),
    array('id' => '1103','created_by' => '1','from_id' => '14','to_id' => '1','title' => 'MOM held on 09-12-2024
  Discussion on the Draft Hydraulic Study Report & Concept Design Report','content' => NULL,'notes' => NULL,'created_at' => '2025-04-10 16:52:39','updated_at' => '2025-04-10 16:52:39'),
    array('id' => '1104','created_by' => '1','from_id' => '24','to_id' => '1','title' => 'Phase 2 Pre - Draft Final Master Plan Report - Rev A','content' => NULL,'notes' => 'ات 420 - 2025','created_at' => '2025-04-13 08:31:33','updated_at' => '2025-04-13 08:31:33'),
    array('id' => '1105','created_by' => '1','from_id' => '1','to_id' => '19','title' => 'MOM held on 09-12-2024 : Discussion on the Draft Hydraulic Study Report & Concept Design Report','content' => NULL,'notes' => '2025065000081
  1019','created_at' => '2025-04-13 12:17:56','updated_at' => '2025-06-15 12:43:34'),
    array('id' => '1106','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'Monthly Progress Report No. 15','content' => NULL,'notes' => 'K23165-0100D/25/0368
  14-04-2025','created_at' => '2025-04-14 09:00:41','updated_at' => '2025-04-14 09:00:41'),
    array('id' => '1107','created_by' => '1','from_id' => '1','to_id' => '37','title' => 'المباني التي سيتم ازالتها داخل مجمع توريع المياه بالشويخ ومجمع توزيع المياه بالدوحة ومجمع توزيع المياه بحولي','content' => NULL,'notes' => 'رد على الكتاب رقم 20240059000277 المؤرخ 17-03-2025','created_at' => '2025-04-14 09:23:18','updated_at' => '2025-04-14 09:23:18'),
    array('id' => '1108','created_by' => '1','from_id' => '45','to_id' => '1','title' => 'الدراسة البيئية','content' => NULL,'notes' => '20240650000234','created_at' => '2025-04-15 07:37:54','updated_at' => '2025-04-15 07:37:54'),
    array('id' => '1109','created_by' => '1','from_id' => '1','to_id' => '30','title' => 'عقد ورشة عمل بخصوص B1, B2, B3 B4(RFC-009), B5, B6','content' => NULL,'notes' => '20250643000090
  20240650000274
  20250650000037
  20250650000031','created_at' => '2025-04-16 08:52:58','updated_at' => '2025-04-16 08:52:58'),
    array('id' => '1110','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'Training Course No. 9 : Preparation of Tender Doc. (3 Days)','content' => NULL,'notes' => 'K23165-0100D/25/0379
  16-04-2025','created_at' => '2025-04-16 10:20:59','updated_at' => '2025-04-21 08:49:31'),
    array('id' => '1111','created_by' => '1','from_id' => '1','to_id' => '7','title' => 'متابعة الخطة التشغيلية 2024/2025 لوزارة الكهرباء والماء والطاقة المتجددة','content' => NULL,'notes' => '202557394000005','created_at' => '2025-04-16 10:27:38','updated_at' => '2025-04-16 10:27:38'),
    array('id' => '1112','created_by' => '1','from_id' => '1','to_id' => '18','title' => 'حجز قاعة جميلة الشطي
  يوم الخميس الموافق 16-04-2025 من الساعة 9','content' => NULL,'notes' => NULL,'created_at' => '2025-04-16 10:52:06','updated_at' => '2025-04-16 10:52:06'),
    array('id' => '1113','created_by' => '1','from_id' => '1','to_id' => '15','title' => 'Preliminary Design Report - Volume 2
  عقد  ورشة عمل بحضور مستشار العقد لمناقشة الاعمال المذكوره في الكتاب سابق الذكر وذلك في يوم الأحد الموافق 27/4/2025 في تمام الساعة 8:30 صباحاً في قاعة اجتماعات قطاع مشاريع المياه','content' => NULL,'notes' => '20240650000090','created_at' => '2025-04-16 12:39:11','updated_at' => '2025-04-16 12:39:11'),
    array('id' => '1114','created_by' => '1','from_id' => '5','to_id' => '1','title' => 'Interim Submission B2 - B3 - B4','content' => NULL,'notes' => '20250650000019','created_at' => '2025-04-17 07:47:41','updated_at' => '2025-04-17 07:47:57'),
    array('id' => '1115','created_by' => '1','from_id' => '30','to_id' => '1','title' => 'Request for Clarification RFC-009','content' => NULL,'notes' => '20250650000031','created_at' => '2025-04-17 07:55:06','updated_at' => '2025-04-17 07:55:06'),
    array('id' => '1116','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'Revised Interior Preliminary  Submission - Phase 2','content' => '1 hard copy
  3 CD','notes' => 'K23165-0106D/25/0385
  17-04-2025','created_at' => '2025-04-17 10:50:28','updated_at' => '2025-04-17 10:50:28'),
    array('id' => '1117','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'Final MOM held on 30-06-2024 to 04-07-2024 : workshop','content' => NULL,'notes' => 'K23165-0105D/25/0383
  17-04-2025','created_at' => '2025-04-17 10:56:45','updated_at' => '2025-04-23 09:07:35'),
    array('id' => '1118','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'MOM held on 10-04-2025 : Updates on the latest revised MEWRE Water Transmission Line Corridor Reservation','content' => NULL,'notes' => 'K23165-0102D/25/0372
  17-04-2025','created_at' => '2025-04-17 10:59:00','updated_at' => '2025-04-17 10:59:00'),
    array('id' => '1119','created_by' => '1','from_id' => '1','to_id' => '19','title' => 'Final Environmental Impact Assessment Scoping Report','content' => NULL,'notes' => '24/0912
  20250293000018','created_at' => '2025-04-17 11:04:16','updated_at' => '2025-04-17 11:04:16'),
    array('id' => '1120','created_by' => '1','from_id' => '1','to_id' => '19','title' => 'Interim Submission B6(I.S.B6) Submission
  ملاحظات الادارات','content' => NULL,'notes' => '25/0110','created_at' => '2025-04-17 11:13:19','updated_at' => '2025-05-15 13:10:15'),
    array('id' => '1121','created_by' => '1','from_id' => '1','to_id' => '33','title' => 'Concept Design Report - Rev B
  بخصوص موعد الاجتماع','content' => NULL,'notes' => '20250650000087','created_at' => '2025-04-20 08:34:30','updated_at' => '2025-04-20 08:35:42'),
    array('id' => '1123','created_by' => '1','from_id' => '1','to_id' => '2','title' => 'Workshop MOM  09/09/2024: MEWRE Groundwater Production Department','content' => NULL,'notes' => '24/1088','created_at' => '2025-04-20 12:04:14','updated_at' => '2025-04-20 12:04:14'),
    array('id' => '1124','created_by' => '1','from_id' => '1','to_id' => '37','title' => 'طلب اعتماد محضر اجتماع 16-10-2024','content' => NULL,'notes' => '25/0279','created_at' => '2025-04-20 12:06:14','updated_at' => '2025-04-20 15:11:54'),
    array('id' => '1125','created_by' => '1','from_id' => '1','to_id' => '5','title' => 'طلب اعتماد محضر اجتماع 02-05-2024','content' => NULL,'notes' => '24/0804','created_at' => '2025-04-20 12:07:50','updated_at' => '2025-04-20 15:13:37'),
    array('id' => '1126','created_by' => '1','from_id' => '1','to_id' => '28','title' => 'Final MOM held on 05/02/2025 with PART
  محضر اجتماع 05-02-2025','content' => NULL,'notes' => '25/0348
  20250650000125','created_at' => '2025-04-20 12:09:27','updated_at' => '2025-05-11 13:17:07'),
    array('id' => '1127','created_by' => '1','from_id' => '1','to_id' => '33','title' => 'اعتماد محاضر الاجتماعات
  محاضر بتواريخ
  11-12-2024
  27-11-2024
  24-10-2024
  15-10-2024','content' => NULL,'notes' => '25/0274
  25/0326
  25/0327
  25/0280','created_at' => '2025-04-20 12:11:02','updated_at' => '2025-04-21 06:43:09'),
    array('id' => '1128','created_by' => '1','from_id' => '39','to_id' => '1','title' => 'Phase 2 Pre - Draft Final Master Plan Report - Rev A','content' => NULL,'notes' => '20251079000627 
  ا م ج - 825','created_at' => '2025-04-20 14:43:43','updated_at' => '2025-04-20 14:43:43'),
    array('id' => '1129','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'Confirmation of Revenue','content' => NULL,'notes' => '20250415-IN-K23165-25-0376
  15-04-2025','created_at' => '2025-04-21 07:07:59','updated_at' => '2025-04-21 07:07:59'),
    array('id' => '1130','created_by' => '1','from_id' => '38','to_id' => '1','title' => 'Concept Design Report - Rev B','content' => NULL,'notes' => NULL,'created_at' => '2025-04-21 08:34:35','updated_at' => '2025-04-21 08:34:35'),
    array('id' => '1131','created_by' => '1','from_id' => '1','to_id' => '27','title' => 'كتاب الترسية
  شركة الخليج المتحدة للانشاء','content' => NULL,'notes' => NULL,'created_at' => '2025-04-21 10:23:02','updated_at' => '2025-04-21 10:24:50'),
    array('id' => '1132','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'MOM held on 14-04-2025 - Pre-Draft Master Plan Comments - Operation & Maintenance Water Facilities Projects','content' => NULL,'notes' => 'رقم الكتاب 0386 مكرر
  K23165-0105D/25/0386
  21-04-2025','created_at' => '2025-04-22 10:35:46','updated_at' => '2025-04-22 10:37:31'),
    array('id' => '1133','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'Request for Workshop Meetings From 27-04-2025 - Water Networks & Facilities Operations & Maintenance Departments','content' => NULL,'notes' => 'K23165-0105D/25/0401
  22-04-2025','created_at' => '2025-04-22 12:42:27','updated_at' => '2025-04-22 12:42:27'),
    array('id' => '1134','created_by' => '1','from_id' => '1','to_id' => '33','title' => 'محاضر اجتماع
  محضري اجتماع 12-03-2025 و 23-03-2025','content' => NULL,'notes' => '25/0307
  25/0335','created_at' => '2025-04-22 12:49:29','updated_at' => '2025-05-13 10:35:35'),
    array('id' => '1135','created_by' => '1','from_id' => '1','to_id' => '51','title' => 'اعتماد محاضر اجتماعات PCW','content' => NULL,'notes' => '20240650000230
  25/0309
  25/0310
  25/0314
  25/0363','created_at' => '2025-04-22 12:51:40','updated_at' => '2025-04-22 12:51:40'),
    array('id' => '1136','created_by' => '1','from_id' => '1','to_id' => '19','title' => 'ملاحظات الادارات على 
   Concept Design Report - Rev B','content' => '1- ردود 3 إدارات A4
  2- رد م. راجو A4
  3- ملاحظات مهندس نبيل علي ال A3','notes' => '25/0204','created_at' => '2025-04-23 10:24:39','updated_at' => '2025-04-28 12:11:22'),
    array('id' => '1137','created_by' => '1','from_id' => '1','to_id' => '19','title' => 'B4: Request for Clarification RFC-009','content' => NULL,'notes' => '24/0993','created_at' => '2025-04-23 11:28:49','updated_at' => '2025-04-23 11:28:49'),
    array('id' => '1138','created_by' => '1','from_id' => '1','to_id' => '33','title' => 'مناقصة توريد و تركيب مضخات بسعات مختلفة لمحطات الضخ المختلفة بدوله الكويت','content' => NULL,'notes' => '20250060000062','created_at' => '2025-04-23 11:33:08','updated_at' => '2025-04-23 11:33:08'),
    array('id' => '1139','created_by' => '1','from_id' => '1','to_id' => '39','title' => 'Interim Submission B6 (I.S.B6) Submission','content' => NULL,'notes' => '20250650000040','created_at' => '2025-04-23 11:35:41','updated_at' => '2025-04-23 11:35:41'),
    array('id' => '1140','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'Request for Workshop Meetings From 27-04-2025 - Water Networks & Facilities Operations & Maintenance Departments','content' => NULL,'notes' => 'K23165-0105D/25/0413
  23-04-2025','created_at' => '2025-04-23 11:53:16','updated_at' => '2025-04-23 11:53:16'),
    array('id' => '1141','created_by' => '1','from_id' => '1','to_id' => '33','title' => 'عقد ورش عمل','content' => NULL,'notes' => '25/0413','created_at' => '2025-04-23 13:16:24','updated_at' => '2025-04-23 13:16:24'),
    array('id' => '1142','created_by' => '1','from_id' => '1','to_id' => '24','title' => 'عقد ورش عمل','content' => NULL,'notes' => '25/0413','created_at' => '2025-04-23 13:19:22','updated_at' => '2025-04-23 13:19:22'),
    array('id' => '1143','created_by' => '1','from_id' => '69','to_id' => '1','title' => 'تعديل سعر المناقصة','content' => NULL,'notes' => 'ش خ م - 2025 - 639
  23-04-2025','created_at' => '2025-04-24 07:34:29','updated_at' => '2025-04-24 07:34:29'),
    array('id' => '1144','created_by' => '1','from_id' => '27','to_id' => '1','title' => 'توصيات','content' => NULL,'notes' => '20250421-IN-3996-80-13','created_at' => '2025-04-24 07:49:10','updated_at' => '2025-04-24 07:49:10'),
    array('id' => '1145','created_by' => '1','from_id' => '1','to_id' => '24','title' => 'Interim submission B6(I.S.B6) Submission','content' => NULL,'notes' => '20250650000044','created_at' => '2025-04-24 09:09:43','updated_at' => '2025-04-24 09:09:43'),
    array('id' => '1146','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'Final MOM held on 09-01-2025 : Meeting With Technical Department on Renewable Energy','content' => NULL,'notes' => 'K23165-0102D/25/0411
  24-04-2025','created_at' => '2025-04-24 09:30:55','updated_at' => '2025-04-30 13:41:03'),
    array('id' => '1147','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'Final MOM held on 13-01-2025 : Project2 - Discussing New Wafra WDC || design Alternatives with respect to infrastructure, ME and AR considerations','content' => NULL,'notes' => 'K23165-0102D-25-0412
  24-04-2025','created_at' => '2025-04-24 09:32:45','updated_at' => '2025-04-24 10:39:36'),
    array('id' => '1148','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'Workshop MOMs for Planning and Project Control Meetings from 13-04-2025 to 16-04-2025','content' => NULL,'notes' => 'K23165-0100D/25/0410
  24-04-2025','created_at' => '2025-04-24 09:33:26','updated_at' => '2025-04-24 10:42:31'),
    array('id' => '1149','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'MOM held on 14-04-2025 : Workshop with Operation and Maintenance Water Facilities Projects to Discuss the Concept Design Report (Rev B)','content' => NULL,'notes' => 'K23165-0102D/25/0384
  24-04-2025','created_at' => '2025-04-24 09:34:09','updated_at' => '2025-04-24 10:43:52'),
    array('id' => '1150','created_by' => '1','from_id' => '1','to_id' => '51','title' => 'اتاحة عقد الاجتماعات المرئية والمسموعة عبر شبكة انترنت الوزارة','content' => NULL,'notes' => NULL,'created_at' => '2025-04-24 09:59:49','updated_at' => '2025-04-24 09:59:49'),
    array('id' => '1151','created_by' => '1','from_id' => '33','to_id' => '1','title' => 'عقد ورش عمل','content' => NULL,'notes' => '20250650000102','created_at' => '2025-04-26 05:49:44','updated_at' => '2025-04-26 05:49:44'),
    array('id' => '1152','created_by' => '1','from_id' => '33','to_id' => '1','title' => 'اعتماد محاضر الاجتماعات
  محاضر بتواريخ
  11-12-2024
  27-11-2024
  24-10-2024
  15-10-2024','content' => NULL,'notes' => '20250650000096','created_at' => '2025-04-26 05:56:53','updated_at' => '2025-04-26 05:57:12'),
    array('id' => '1153','created_by' => '1','from_id' => '33','to_id' => '1','title' => 'Concept Design Report - Rev B','content' => NULL,'notes' => '20250650000087','created_at' => '2025-04-26 06:02:18','updated_at' => '2025-04-26 06:02:18'),
    array('id' => '1154','created_by' => '1','from_id' => '1','to_id' => '19','title' => 'Revised Interior Preliminary  Submission - Phase 2','content' => NULL,'notes' => NULL,'created_at' => '2025-04-27 08:04:33','updated_at' => '2025-04-27 08:04:33'),
    array('id' => '1155','created_by' => '2','from_id' => '37','to_id' => '1','title' => 'طلب اعتماد محضر اجتماع 16-10-2024','content' => NULL,'notes' => 'أ ع ك/ 426
  بتاريخ 24-04-2025','created_at' => '2025-04-27 08:19:00','updated_at' => '2025-04-27 08:20:35'),
    array('id' => '1156','created_by' => '2','from_id' => '27','to_id' => '1','title' => 'تمديد فترة دراسة العطاءات','content' => NULL,'notes' => '3997-55-13
  21-04-2025','created_at' => '2025-04-27 08:28:32','updated_at' => '2025-04-27 08:28:32'),
    array('id' => '1157','created_by' => '1','from_id' => '1','to_id' => '8','title' => 'Confirmation of Revenue','content' => NULL,'notes' => '25/0376','created_at' => '2025-04-27 08:48:37','updated_at' => '2025-04-27 08:48:37'),
    array('id' => '1158','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'MOM held on 22/04/2025: Meeting with Operation and Maintenance Water Facilities 
   Project Department to discuss reply to comments of Concept Design Report (Rev B)
  11:00','content' => NULL,'notes' => 'K23165-0102D/25/0415
  27-04-2025
  
  اجتماع الساعة 11:00','created_at' => '2025-04-27 10:46:35','updated_at' => '2025-05-14 09:46:46'),
    array('id' => '1160','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'MOM held on 22-04-2025: Meeting with Operation and Maintenance Water Facilities 
   Project Department to discuss reply to 
  comments of Concept Design Report (Rev B)
  9:00','content' => NULL,'notes' => 'K23165-0102D/25/0418
  27-04-2025
  
  اجتماع الساعة 9:00','created_at' => '2025-04-27 10:53:49','updated_at' => '2025-05-11 09:03:01'),
    array('id' => '1161','created_by' => '2','from_id' => '1','to_id' => '19','title' => 'Training Course No. 9 : Preparation of Tender Doc. (3 Days)','content' => NULL,'notes' => 'K23165-0100D/25/0379
  K23165-0100D/25/0440
  K23165-0100D/25/0452','created_at' => '2025-04-27 14:14:59','updated_at' => '2025-05-06 11:09:02'),
    array('id' => '1163','created_by' => '2','from_id' => '1','to_id' => '33','title' => 'RFC-10','content' => NULL,'notes' => 'K23165-0102D/25/0353','created_at' => '2025-04-28 11:50:53','updated_at' => '2025-04-28 11:50:53'),
    array('id' => '1164','created_by' => '2','from_id' => '69','to_id' => '1','title' => 'تعديل سعر العطاء','content' => NULL,'notes' => '551/2025/ش خ م
  28-04-2025','created_at' => '2025-04-28 13:25:17','updated_at' => '2025-04-28 13:25:17'),
    array('id' => '1165','created_by' => '2','from_id' => '27','to_id' => '1','title' => 'تمديد فترة دراسة العطاءات','content' => NULL,'notes' => 'عدم الموافقة على التمديد واستعجال الجهة برفع التوصية','created_at' => '2025-04-29 07:34:52','updated_at' => '2025-04-29 07:34:52'),
    array('id' => '1166','created_by' => '2','from_id' => '27','to_id' => '1','title' => 'تمديد التأمين الاولي','content' => NULL,'notes' => '202559043000128','created_at' => '2025-04-29 07:43:55','updated_at' => '2025-04-29 07:43:55'),
    array('id' => '1167','created_by' => '2','from_id' => '33','to_id' => '1','title' => 'محاضر اجتماع
  محضري اجتماع 12-03-2025 و 23-03-2025','content' => NULL,'notes' => '25/0307
  25/0335','created_at' => '2025-04-29 07:47:12','updated_at' => '2025-05-13 10:34:49'),
    array('id' => '1169','created_by' => '2','from_id' => '1','to_id' => '37','title' => 'Final MOM held on 15-10-2024 - Interim Submission B3 (I.S.B3) Submission','content' => NULL,'notes' => 'K23165-0108D/25/0280','created_at' => '2025-04-29 13:27:41','updated_at' => '2025-04-29 13:27:41'),
    array('id' => '1170','created_by' => '2','from_id' => '1','to_id' => '33','title' => 'MOM held on 22-04-2025: Meeting with Operation and Maintenance Water Facilities 
   Project Department to discuss reply to comments of Concept Design Report (Rev B)','content' => NULL,'notes' => 'K23165-0102D/25/0418','created_at' => '2025-04-29 13:31:17','updated_at' => '2025-05-11 09:06:28'),
    array('id' => '1171','created_by' => '2','from_id' => '1','to_id' => '55','title' => 'أمر الشراء رقم (21015)
  برامج كمبيوتر للادارة','content' => NULL,'notes' => '202558297000062','created_at' => '2025-04-30 08:39:30','updated_at' => '2025-04-30 12:00:48'),
    array('id' => '1172','created_by' => '1','from_id' => '1','to_id' => '39','title' => 'عقد ورشة عمل','content' => NULL,'notes' => '25/0413','created_at' => '2025-04-30 10:19:51','updated_at' => '2025-04-30 10:19:51'),
    array('id' => '1173','created_by' => '2','from_id' => '61','to_id' => '1','title' => 'ملاحظات إدارة الطاقة المتجددة على ردود المناقصين','content' => NULL,'notes' => 'لا يوجد رقم للكتاب
  رد على الكتاب رقم أت-384-2025 بتاريخ 17-03-2025','created_at' => '2025-04-30 13:45:49','updated_at' => '2025-04-30 13:52:26'),
    array('id' => '1174','created_by' => '2','from_id' => '30','to_id' => '1','title' => 'عقد ورشة عمل بخصوص B1, B2, B3 B4(RFC-009), B5, B6','content' => NULL,'notes' => '20250650000094','created_at' => '2025-05-01 07:35:41','updated_at' => '2025-05-01 07:35:51'),
    array('id' => '1175','created_by' => '2','from_id' => '1','to_id' => '55','title' => 'الموضوع: أمر الشراء رقم (21759)
  بروجكتر لمكتب مدير الادارة - إدارة تصميم مشاريع الشبكات و المنشآت المائية','content' => NULL,'notes' => NULL,'created_at' => '2025-05-01 09:46:30','updated_at' => '2025-05-01 09:46:30'),
    array('id' => '1176','created_by' => '1','from_id' => '1','to_id' => '19','title' => '(Interim Submission (B1,B2,B3,B5,B6
  ملاحظات ادارة التصميم','content' => NULL,'notes' => '20250650000095','created_at' => '2025-05-01 10:33:32','updated_at' => '2025-05-01 10:33:32'),
    array('id' => '1177','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'Final MOM held on 04-02-2025: Discussion on updated Alternatives Report with Water Projects Design Department','content' => NULL,'notes' => 'K23165-0102D/25/0421
  30-04-2025','created_at' => '2025-05-01 10:54:36','updated_at' => '2025-05-01 10:54:36'),
    array('id' => '1178','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'Final MOM held on 18-02-2025 :  Progress Update','content' => NULL,'notes' => 'K23165-0105D/25/0419
  30-04-2025','created_at' => '2025-05-01 10:57:25','updated_at' => '2025-05-01 10:57:25'),
    array('id' => '1179','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'البرنامج التدريبي','content' => NULL,'notes' => 'K23165-0100D/25/0439
  01-05-2025','created_at' => '2025-05-01 10:58:50','updated_at' => '2025-05-01 10:58:50'),
    array('id' => '1180','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'Overall Projects - Training Course No. 9 Preparation  of Tender Doc. (3 Days)','content' => NULL,'notes' => 'K23165-0100D/25/0440
  01-05-2025','created_at' => '2025-05-01 10:59:16','updated_at' => '2025-05-01 10:59:16'),
    array('id' => '1181','created_by' => '2','from_id' => '11','to_id' => '1','title' => 'انشاء وانجاز وصيانة وتطوير مجمع توزيع مياه الشويخ القائم مع الاعمال الملحقة','content' => NULL,'notes' => 'رد علي كتابنا رقم أت/15/44/2025 المؤرخ 27-03-2025','created_at' => '2025-05-04 07:34:14','updated_at' => '2025-05-04 07:34:14'),
    array('id' => '1182','created_by' => '2','from_id' => '37','to_id' => '1','title' => 'Final MOM held on 15-10-2024 - Interim Submission B3 (I.S.B3) Submission','content' => NULL,'notes' => NULL,'created_at' => '2025-05-04 07:40:28','updated_at' => '2025-05-04 07:40:28'),
    array('id' => '1183','created_by' => '2','from_id' => '62','to_id' => '1','title' => 'تسليم العرض الفني والمالي','content' => '2 نسخة مطبوعة من العرض الفني
  2 نسخة مطبوعة من العرض المالي
  2 نسخة الكترونية (CD) من العرض الفني
  2 نسخة الكترونية (CD) من العرض المالي','notes' => 'AEC-0525001
  01-05-2025','created_at' => '2025-05-04 09:55:11','updated_at' => '2025-05-04 10:55:07'),
    array('id' => '1184','created_by' => '2','from_id' => '1','to_id' => '26','title' => 'توريد و تركيب و تنفيذ و صيانة محطة رئيسية (SSAB 3Z ) جهد 11/132/400 ك ف بمدينة جنوب سعد العبدالله الإسكاني','content' => NULL,'notes' => NULL,'created_at' => '2025-05-04 11:40:31','updated_at' => '2025-05-04 11:40:31'),
    array('id' => '1185','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'MOM held on 22-04-2025: Meeting with Operation and Maintenance Water Facilities 
   Project Department to discuss reply to 
  comments of Concept Design Report (Rev B)
  النسخة المعدلة من المحضر
  9:00','content' => NULL,'notes' => 'K23165-0102D/25/0426
  04-05-2025
  
  الحاق بالكتاب رقم 
  K23165-0102D/25/0418
  27-02-2025','created_at' => '2025-05-04 12:41:16','updated_at' => '2025-05-11 09:05:03'),
    array('id' => '1186','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'Final MOM 03-12-2024 - Progress Coordination Meeting','content' => NULL,'notes' => 'K23165-0106D/25/0438
  04-05-2025
  
  الحاق بالكتاب رقم
  K23165-0106D/25/0188
  09-02-2025','created_at' => '2025-05-04 12:45:45','updated_at' => '2025-05-05 10:15:39'),
    array('id' => '1187','created_by' => '2','from_id' => '1','to_id' => '27','title' => 'الرد على التوصية','content' => 'مرفق نسخة ورقية من العرض المالي
  مرفق نسخة ورقية من العرض الفني','notes' => 'بالاشارة الي كتاب الجهاز رقم 3996/80/13 بتاريخ 21-04-2025
  والحاقا لكتبنا ارقام 20250650000006 المؤرخ 16/01/2025 و 20250650000065 المؤرخ 05/03/2025','created_at' => '2025-05-04 13:11:29','updated_at' => '2025-05-04 13:23:35'),
    array('id' => '1188','created_by' => '2','from_id' => '33','to_id' => '1','title' => 'RFC-10','content' => NULL,'notes' => NULL,'created_at' => '2025-05-05 07:49:21','updated_at' => '2025-05-05 07:49:21'),
    array('id' => '1189','created_by' => '2','from_id' => '1','to_id' => '19','title' => 'RFC-10','content' => NULL,'notes' => 'K23165-0102D/25/0353','created_at' => '2025-05-05 09:46:05','updated_at' => '2025-05-05 09:46:05'),
    array('id' => '1190','created_by' => '2','from_id' => '1','to_id' => '70','title' => 'الموضوع: أمر الشراء رقم (21759)
  بروجكتر لمكتب مدير الادارة - إدارة تصميم مشاريع الشبكات و المنشآت المائية','content' => NULL,'notes' => NULL,'created_at' => '2025-05-05 09:49:14','updated_at' => '2025-05-05 09:49:14'),
    array('id' => '1191','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'MOM Held on 27-04-2025 - Phase 1 - Electro-Mechanical Meeting','content' => NULL,'notes' => 'K23165-0106D/25/0424
  05-05-2025','created_at' => '2025-05-05 11:20:05','updated_at' => '2025-05-05 11:20:05'),
    array('id' => '1192','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'MOM held on 28-04-2025 Workshop with Water Facilities O&M Maintenance Department at KEG','content' => NULL,'notes' => 'K23165-0102D/25/0437
  05-05-2025','created_at' => '2025-05-05 11:28:55','updated_at' => '2025-05-05 11:28:55'),
    array('id' => '1193','created_by' => '2','from_id' => '1','to_id' => '61','title' => 'طلب نسخه معتمده من
  The conditions and guidelines for connecting solar
   power to the 415 V grid and 11 KV grid of MEW','content' => NULL,'notes' => NULL,'created_at' => '2025-05-05 11:31:46','updated_at' => '2025-05-05 11:31:46'),
    array('id' => '1194','created_by' => '2','from_id' => '1','to_id' => '11','title' => 'طلب نسخه معتمده من
   Request for Latest Specifications for Capacitor Bank the 415V  grid and 11kV grid of  MEW','content' => NULL,'notes' => NULL,'created_at' => '2025-05-05 12:27:00','updated_at' => '2025-05-06 09:04:32'),
    array('id' => '1195','created_by' => '2','from_id' => '39','to_id' => '1','title' => 'Interim Submission B6 (I.S.B6) Submission','content' => NULL,'notes' => '20250650000040','created_at' => '2025-05-06 07:54:21','updated_at' => '2025-05-06 07:54:21'),
    array('id' => '1196','created_by' => '2','from_id' => '11','to_id' => '1','title' => 'طلب المستندات والشروط الفنية وجداول الكميات الخاصة بمحطة التحويل الرئيسية من مستندات عطاءات المناقصين','content' => NULL,'notes' => 'رد على كتابنا رقم أ ت/15/231/2025
  بتاريخ 13-04-2025','created_at' => '2025-05-06 08:02:51','updated_at' => '2025-05-06 08:02:51'),
    array('id' => '1198','created_by' => '2','from_id' => '62','to_id' => '1','title' => 'صرف الدفعة النهائية من أعمال العقد','content' => NULL,'notes' => 'AEC-05250004
  04-05-2025','created_at' => '2025-05-06 08:10:41','updated_at' => '2025-05-06 08:10:41'),
    array('id' => '1199','created_by' => '2','from_id' => '30','to_id' => '1','title' => 'Concept Design Report - Rev B','content' => NULL,'notes' => '20250650000086
  بعد اجتماع 30-04-2025','created_at' => '2025-05-06 08:16:51','updated_at' => '2025-05-06 08:18:02'),
    array('id' => '1200','created_by' => '2','from_id' => '30','to_id' => '1','title' => 'Preliminary Design Report - Volume 2','content' => NULL,'notes' => '20250650000090
  بعد اجتماع 27-04-2025','created_at' => '2025-05-06 08:26:09','updated_at' => '2025-05-06 08:28:35'),
    array('id' => '1201','created_by' => '2','from_id' => '26','to_id' => '1','title' => 'المنشات المائيه داخل حدود المشاريع الاسكانيه المستقبليه','content' => 'الاعتذار عن تضمين المنشآت المائية ضمن المشاريع الاسكانية','notes' => '20250284000755
  رد علي كتابنا رقم 20250642000445 بتاريخ 20-04-2025 
  الحاق بكتاب المؤسسة رقم 4718-10 بتاريخ 16-02-2025','created_at' => '2025-05-06 08:40:33','updated_at' => '2025-05-06 08:51:10'),
    array('id' => '1202','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'Overall Projects - Training Course No. 9 Preparation  of Tender Doc. (3 Days)','content' => NULL,'notes' => 'K23165-0100D/25/0452
  06-05-2025
  
  الحاق بالكتاب رقم K23165-0100D/25/0440 المؤرخ 01/05/2025','created_at' => '2025-05-06 09:40:32','updated_at' => '2025-05-06 09:43:15'),
    array('id' => '1203','created_by' => '2','from_id' => '1','to_id' => '11','title' => 'المستندات والشروط الفنية وجداول الكميات الخاصة بمحطة التحويل الرئيسية من مستندات عطاءات المناقصين','content' => 'اقراص CD','notes' => '20252030000010','created_at' => '2025-05-06 10:33:57','updated_at' => '2025-05-07 12:09:24'),
    array('id' => '1204','created_by' => '2','from_id' => '1','to_id' => '11','title' => 'المستندات والشروط الفنية وجداول الكميات الخاصة بمحطة التحويل الرئيسية من مستندات عطاءات المناقصين','content' => 'اقراص CD','notes' => '20252030000011','created_at' => '2025-05-06 10:36:15','updated_at' => '2025-05-07 12:09:33'),
    array('id' => '1205','created_by' => '2','from_id' => '1','to_id' => '33','title' => 'MOM held on 10-12-2024 Discussion on the Concept Design of the Pump Station','content' => NULL,'notes' => NULL,'created_at' => '2025-05-06 11:27:57','updated_at' => '2025-05-06 11:27:57'),
    array('id' => '1206','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'Final MOM held on 04-11-2024 : Discussion Regarding Current Progress','content' => NULL,'notes' => 'K23165-0105D/25/0451
  06-05-2025','created_at' => '2025-05-06 11:33:17','updated_at' => '2025-05-06 11:33:17'),
    array('id' => '1207','created_by' => '1','from_id' => '1','to_id' => '56','title' => 'الحاق
  ردود المناقصين (عدد 5 شركات) على ملاحظات الوزارة','content' => NULL,'notes' => 'ات - 385 - 2025
  13 - 23 - 4209','created_at' => '2025-05-06 11:40:22','updated_at' => '2025-05-06 11:41:29'),
    array('id' => '1208','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'العقد رقم م.ع.ر.س/ع/161-2024/2025 لأعمال الخدمات الاستشارية لتطوير (3) مواقع سكنية فى دولة الكويت وفقا للقانون 118 لسنة 2023
  طلب بيانات','content' => NULL,'notes' => 'K25062-0100D-25-0396
  29-04-2025','created_at' => '2025-05-07 08:50:17','updated_at' => '2025-05-07 08:53:54'),
    array('id' => '1209','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'Annual Examination (Correctness of Dar Balance 27,117.034)','content' => NULL,'notes' => 'B.5.1/25/0434
  29-04-2025','created_at' => '2025-05-07 09:04:18','updated_at' => '2025-05-07 09:07:58'),
    array('id' => '1210','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'Annual Examination (Correctness of Dar Balance 184,286)','content' => NULL,'notes' => 'B.5.1/25/0427
  29-04-2025','created_at' => '2025-05-07 09:09:02','updated_at' => '2025-05-07 09:09:02'),
    array('id' => '1211','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'MOM held on 30-04-2025: Meeting with Design and Supervision Department (Technical Services and Main Workshop Sector) and Design of Water Network & Facilities Project\'s Department to Discuss reply to Comments of Concept Design Report (Rev B)','content' => NULL,'notes' => 'K23165-0102D/25/0464
  07-05-2025','created_at' => '2025-05-07 09:11:47','updated_at' => '2025-05-07 09:11:47'),
    array('id' => '1212','created_by' => '1','from_id' => '1','to_id' => '9','title' => 'تقديم الاحتياجات التدريبية (داخلية / خارجية) للوزارة للعام التدريبي 2025 / 2026 عن طريق الموقع الالكتروني','content' => NULL,'notes' => '202573500000003','created_at' => '2025-05-07 12:19:46','updated_at' => '2025-05-07 12:19:46'),
    array('id' => '1213','created_by' => '2','from_id' => '2','to_id' => '1','title' => 'Workshop MOM  09/09/2024: MEWRE Groundwater Production Department','content' => NULL,'notes' => '20250650000099','created_at' => '2025-05-08 08:23:40','updated_at' => '2025-05-08 08:23:40'),
    array('id' => '1214','created_by' => '1','from_id' => '1','to_id' => '19','title' => 'Draft Preliminary Design Report - Volume (2)','content' => NULL,'notes' => '25/0217
  20250650000090','created_at' => '2025-05-08 12:04:22','updated_at' => '2025-05-08 12:04:22'),
    array('id' => '1215','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'Final MOM held on 06-08-2024 - Coordination Meeting','content' => NULL,'notes' => 'K23165-0105D/25/0466
  08-05-2025','created_at' => '2025-05-08 12:10:38','updated_at' => '2025-05-08 12:10:38'),
    array('id' => '1216','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'Final MOM Workshops from (18-08-2024 to 21-08-2024)','content' => NULL,'notes' => 'K23165-0105D/25/0467
  08-05-2025','created_at' => '2025-05-08 12:13:00','updated_at' => '2025-05-08 12:13:00'),
    array('id' => '1217','created_by' => '1','from_id' => '1','to_id' => '33','title' => 'MOM held on 28-04-2025 Workshop with Water Facilities O&M Maintenance Department at KEG','content' => NULL,'notes' => '25/0437','created_at' => '2025-05-08 12:19:10','updated_at' => '2025-05-08 12:19:10'),
    array('id' => '1218','created_by' => '2','from_id' => '1','to_id' => '33','title' => 'MOM held on 14-04-2025 - Pre-Draft Master Plan Comments - Operation & Maintenance Water Facilities Projects','content' => NULL,'notes' => 'K23165-0105D/25/0386','created_at' => '2025-05-08 12:19:56','updated_at' => '2025-05-08 12:19:56'),
    array('id' => '1219','created_by' => '1','from_id' => '1','to_id' => '33','title' => 'MOM held on 14-04-2025 : Workshop with Operation and Maintenance Water Facilities Projects to Discuss the Concept Design Report (Rev B)','content' => NULL,'notes' => '25/0384','created_at' => '2025-05-08 12:20:55','updated_at' => '2025-05-08 12:20:55'),
    array('id' => '1220','created_by' => '2','from_id' => '1','to_id' => '7','title' => 'دعوة للمشاركة فى فعاليات مؤتمر الكويت للطاقة المستدامة','content' => NULL,'notes' => '202526549000022','created_at' => '2025-05-08 12:26:03','updated_at' => '2025-05-08 12:26:03'),
    array('id' => '1221','created_by' => '2','from_id' => '1','to_id' => '30','title' => 'MOM Held on 27-04-2025 - Phase 1 - Electro-Mechanical Meeting','content' => NULL,'notes' => 'K23165-0106D/25/0424','created_at' => '2025-05-08 13:08:14','updated_at' => '2025-05-08 13:08:14'),
    array('id' => '1223','created_by' => '2','from_id' => '1','to_id' => '24','title' => 'Final MOM held on 30-06-2024 to 04-07-2024 : workshop','content' => NULL,'notes' => '20240650000118
  K23165-0105D/25/0383','created_at' => '2025-05-11 10:54:01','updated_at' => '2025-05-11 10:54:01'),
    array('id' => '1224','created_by' => '2','from_id' => '1','to_id' => '28','title' => 'Final MOM held on 05/02/2025 with PART
  محضر اجتماع 05-02-2025','content' => NULL,'notes' => '20250650000100
  20250650000125','created_at' => '2025-05-11 10:55:50','updated_at' => '2025-05-11 13:16:59'),
    array('id' => '1225','created_by' => '2','from_id' => '1','to_id' => '33','title' => 'MOM held on 22-04-2025: Meeting with Operation and Maintenance Water Facilities
  Project Department to discuss reply to
  comments of Concept Design Report (Rev B)
  النسخة المعدلة من المحضر','content' => NULL,'notes' => '9:00
  20250650000109
  K23165-0102D/25/0426
  K23165-0102D/25/0418','created_at' => '2025-05-11 10:59:49','updated_at' => '2025-05-11 10:59:49'),
    array('id' => '1226','created_by' => '1','from_id' => '1','to_id' => '3','title' => 'Preliminary Design Report','content' => NULL,'notes' => '20250650000060','created_at' => '2025-05-11 11:18:59','updated_at' => '2025-05-11 11:19:25'),
    array('id' => '1227','created_by' => '2','from_id' => '1','to_id' => '19','title' => 'Concept Design Report - Rev B','content' => NULL,'notes' => 'و ك م/ 922/15','created_at' => '2025-05-11 12:09:26','updated_at' => '2025-05-11 12:09:26'),
    array('id' => '1228','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'Final MOM held on 12-03-2025: Meeting with Water Facilities O&M Maintenance Department to discuss "Concept Design Alternatives of The Main Components" Report (Rev A)','content' => NULL,'notes' => 'K23165-0102D/25/0473
  11-05-2025','created_at' => '2025-05-11 13:52:21','updated_at' => '2025-05-11 13:52:21'),
    array('id' => '1229','created_by' => '2','from_id' => '11','to_id' => '1','title' => 'طلب نسخه معتمده من
   Request for Latest Specifications for Capacitor Bank the 415V  grid and 11kV grid of  MEW','content' => NULL,'notes' => NULL,'created_at' => '2025-05-12 07:47:37','updated_at' => '2025-05-12 07:50:25'),
    array('id' => '1230','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'Reimbursable Package Invoice No. 17- April 2025
  فاتورة أبريل 2025- فاتورة رقم 17','content' => NULL,'notes' => 'K23165-0200D/25/0449
  06-11-2025','created_at' => '2025-05-12 10:14:05','updated_at' => '2025-05-12 10:14:05'),
    array('id' => '1231','created_by' => '2','from_id' => '1','to_id' => '8','title' => 'Reimbursable Package Invoice No. 17- April 2025
  فاتورة أبريل 2025- فاتورة رقم 17','content' => NULL,'notes' => 'K23165-0200D/25/0449','created_at' => '2025-05-12 10:18:14','updated_at' => '2025-05-12 10:18:14'),
    array('id' => '1232','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'Re-routing the planned saltwater transmission lines that pass through the South Saad Al Abdullah residential city','content' => NULL,'notes' => 'K23165-0105D/25/0476
  12-05-2025','created_at' => '2025-05-12 11:10:06','updated_at' => '2025-05-12 11:10:06'),
    array('id' => '1233','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'Final MOM held on 22-04-2025: Meeting with Operation and Maintenance Water Facilities Projects Department to discuss reply to 
  comments of Concept Design Report (Rev B)
  11:00','content' => NULL,'notes' => 'K23165-0102D/25/0478
  12-05-2025','created_at' => '2025-05-12 11:16:41','updated_at' => '2025-05-14 09:45:51'),
    array('id' => '1234','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'MOM workshop held from 27-04-2025 to 01-05-2025','content' => NULL,'notes' => 'K23165-0105D/25/0472
  11-05-2025','created_at' => '2025-05-12 11:22:08','updated_at' => '2025-06-17 08:04:25'),
    array('id' => '1235','created_by' => '2','from_id' => '1','to_id' => '39','title' => 'Re-routing the planned saltwater transmission lines that pass through the South Saad Al Abdullah residential city','content' => NULL,'notes' => 'K23165-0105D/25/0476','created_at' => '2025-05-12 11:25:28','updated_at' => '2025-05-12 11:25:28'),
    array('id' => '1236','created_by' => '2','from_id' => '1','to_id' => '24','title' => 'Interim Submission B6 (I.S.B6) Submission','content' => NULL,'notes' => '20250650000044','created_at' => '2025-05-12 13:05:19','updated_at' => '2025-05-12 13:05:19'),
    array('id' => '1238','created_by' => '2','from_id' => '1','to_id' => '30','title' => 'MOM held on 30-04-2025: Meeting with Design and Supervision Department (Technical Services and Main Workshop Sector) and Design of Water Network & Facilities Project\'s Department to Discuss reply to Comments of Concept Design Report (Rev B)','content' => NULL,'notes' => 'K23165-0102D/25/0464','created_at' => '2025-05-13 12:38:16','updated_at' => '2025-05-13 12:38:16'),
    array('id' => '1239','created_by' => '2','from_id' => '1','to_id' => '33','title' => 'MOM workshop held from 27-04-2025 to 01-05-2025','content' => NULL,'notes' => 'K23165-0105D/25/0472','created_at' => '2025-05-13 12:40:54','updated_at' => '2025-06-17 08:04:22'),
    array('id' => '1240','created_by' => '2','from_id' => '1','to_id' => '9','title' => 'تقديم الاحتياجات التدريبية (داخلية/خارجية) للوزارة للعام التدريبي 2026/2025 عن طريق الموقع الالكتروني','content' => NULL,'notes' => NULL,'created_at' => '2025-05-13 12:43:12','updated_at' => '2025-05-13 12:43:12'),
    array('id' => '1241','created_by' => '2','from_id' => '1','to_id' => '51','title' => 'اعتماد محاضر اجتماعات PCW','content' => NULL,'notes' => '20240650000230','created_at' => '2025-05-13 13:21:53','updated_at' => '2025-05-14 10:44:57'),
    array('id' => '1242','created_by' => '2','from_id' => '1','to_id' => '19','title' => 'مشروع خط تغذية المياه الجديد الواصل الى قاعدة أحمد الجابر الجوية','content' => NULL,'notes' => NULL,'created_at' => '2025-05-13 13:38:52','updated_at' => '2025-05-13 13:38:52'),
    array('id' => '1243','created_by' => '2','from_id' => '1','to_id' => '18','title' => 'تمديد فترة عمل لجنة دراسة العطاءات','content' => NULL,'notes' => NULL,'created_at' => '2025-05-14 08:35:19','updated_at' => '2025-05-14 08:35:19'),
    array('id' => '1244','created_by' => '2','from_id' => '1','to_id' => '18','title' => 'تمديد فترة عمل لجنة دراسة العطاءات','content' => NULL,'notes' => NULL,'created_at' => '2025-05-14 08:45:28','updated_at' => '2025-05-14 08:45:28'),
    array('id' => '1245','created_by' => '2','from_id' => '1','to_id' => '18','title' => 'تمديد فترة عمل لجنة دراسة العطاءات','content' => NULL,'notes' => NULL,'created_at' => '2025-05-14 08:49:30','updated_at' => '2025-05-14 08:49:30'),
    array('id' => '1246','created_by' => '2','from_id' => '3','to_id' => '1','title' => 'Preliminary Design Report','content' => NULL,'notes' => '20250650000060','created_at' => '2025-05-14 09:11:50','updated_at' => '2025-05-14 09:12:07'),
    array('id' => '1247','created_by' => '2','from_id' => '33','to_id' => '1','title' => 'MOM held on 14-04-2025 - Pre-Draft Master Plan Comments - Operation & Maintenance Water Facilities Projects','content' => NULL,'notes' => NULL,'created_at' => '2025-05-14 09:17:05','updated_at' => '2025-05-14 09:17:05'),
    array('id' => '1248','created_by' => '2','from_id' => '33','to_id' => '1','title' => 'MOM held on 22-04-2025: Meeting with Operation and Maintenance Water Facilities
  Project Department to discuss reply to
  comments of Concept Design Report (Rev B)
  النسخة المعدلة من المحضر','content' => NULL,'notes' => NULL,'created_at' => '2025-05-14 09:27:53','updated_at' => '2025-05-14 09:27:53'),
    array('id' => '1249','created_by' => '2','from_id' => '11','to_id' => '1','title' => 'ردود المناقصين (عدد 5 شركات) على ملاحظات الوزارة','content' => NULL,'notes' => 'ات - 385 - 2025','created_at' => '2025-05-14 10:21:54','updated_at' => '2025-05-14 10:22:40'),
    array('id' => '1250','created_by' => '1','from_id' => '1','to_id' => '7','title' => 'الخطة السنوية لعقود التوريد و المقاولات و الخدمات و كافة المناقصات و التأهيلات لسنة 2026/2025','content' => 'مرفق CD','notes' => '202557857000011','created_at' => '2025-05-14 11:28:38','updated_at' => '2025-05-14 11:29:27'),
    array('id' => '1251','created_by' => '1','from_id' => '1','to_id' => '71','title' => 'طلب معلومات','content' => NULL,'notes' => '25/0162','created_at' => '2025-05-14 11:34:03','updated_at' => '2025-05-14 11:34:03'),
    array('id' => '1253','created_by' => '2','from_id' => '33','to_id' => '1','title' => 'MOM held on 14-04-2025 : Workshop with Operation and Maintenance Water Facilities Projects to Discuss the Concept Design Report (Rev B)','content' => NULL,'notes' => '20250650000123
  25/0384','created_at' => '2025-05-15 07:49:49','updated_at' => '2025-05-15 07:50:06'),
    array('id' => '1254','created_by' => '2','from_id' => '39','to_id' => '1','title' => 'Re-routing the planned saltwater transmission lines that pass through the South Saad Al Abdullah residential city','content' => NULL,'notes' => '20250650000128
  K23165-0105D/25/0476
  أ م ج / 1041','created_at' => '2025-05-15 07:55:30','updated_at' => '2025-05-15 07:56:21'),
    array('id' => '1255','created_by' => '2','from_id' => '27','to_id' => '1','title' => 'تمديد التأمين الأولى','content' => NULL,'notes' => '20250512-IN-4906-55-13','created_at' => '2025-05-15 08:07:25','updated_at' => '2025-05-15 08:07:25'),
    array('id' => '1256','created_by' => '2','from_id' => '24','to_id' => '1','title' => 'Interim Submission B6 (I.S.B6) Submission','content' => NULL,'notes' => NULL,'created_at' => '2025-05-15 09:34:06','updated_at' => '2025-05-15 09:34:06'),
    array('id' => '1257','created_by' => '2','from_id' => '1','to_id' => '8','title' => 'مراجعة الرصيد المستحق كما فى 31 ديسمبر 2024 بعد خصم الضريبة المحتجزة','content' => NULL,'notes' => 'B.5.1/25/0434','created_at' => '2025-05-15 11:10:02','updated_at' => '2025-05-15 11:10:02'),
    array('id' => '1258','created_by' => '2','from_id' => '1','to_id' => '8','title' => 'مراجعة الرصيد المستحق كما فى 31 ديسمبر 2024','content' => NULL,'notes' => 'B.5.1/25/0427','created_at' => '2025-05-15 11:12:09','updated_at' => '2025-05-15 11:12:09'),
    array('id' => '1259','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'MOM held on 07-05-2025 Discuss the Progress And Action Plan for The Running Projects','content' => NULL,'notes' => 'K23165-0100D/25/0487
  14-05-2025','created_at' => '2025-05-15 12:44:07','updated_at' => '2025-05-15 12:44:07'),
    array('id' => '1260','created_by' => '2','from_id' => '1','to_id' => '19','title' => 'Interim Submission B6(I.S.B6) Submission
  ملاحظات ادارة
  تشغيل وصيانة الشبكات المائية
  انتاج المياه الجوفية','content' => NULL,'notes' => '25/0110','created_at' => '2025-05-15 13:11:09','updated_at' => '2025-05-15 13:11:09'),
    array('id' => '1261','created_by' => '2','from_id' => '30','to_id' => '1','title' => 'MOM Held on 27-04-2025 - Phase 1 - Electro-Mechanical Meeting','content' => NULL,'notes' => '20250650000090','created_at' => '2025-05-18 09:20:40','updated_at' => '2025-05-18 09:21:02'),
    array('id' => '1262','created_by' => '2','from_id' => '1','to_id' => '7','title' => 'مشروع الاحتياجات الفنية فى مجال نظم وتقنية المعلومات','content' => NULL,'notes' => '2025149325000014
  2025149147000055','created_at' => '2025-05-18 12:17:33','updated_at' => '2025-05-18 12:18:32'),
    array('id' => '1263','created_by' => '2','from_id' => '1','to_id' => '19','title' => 'متطلبات وشروط تأهيل الشركات/ المصانع العالمية لتوريد أنابيب وقطع وصل من حديد الدكتايل وملحقاتها لمشاريع المياه فى دولة الكويت','content' => NULL,'notes' => NULL,'created_at' => '2025-05-18 13:51:55','updated_at' => '2025-05-18 13:51:55'),
    array('id' => '1264','created_by' => '2','from_id' => '1','to_id' => '7','title' => 'الاحتياج السنوي للقطاعات الفنية للسنة المالية (2025/2026)','content' => NULL,'notes' => 'أت/860/2025','created_at' => '2025-05-18 13:57:18','updated_at' => '2025-05-18 13:57:18'),
    array('id' => '1265','created_by' => '2','from_id' => '1','to_id' => '5','title' => 'إعداد تقديرات ميزانية الوزارة للسنة المالية 2027/2026','content' => 'CD','notes' => NULL,'created_at' => '2025-05-18 13:59:20','updated_at' => '2025-05-18 14:05:29'),
    array('id' => '1266','created_by' => '2','from_id' => '1','to_id' => '41','title' => 'إعداد تقديرات ميزانية الوزارة للسنة المالية 2027/2026','content' => 'CD','notes' => NULL,'created_at' => '2025-05-18 14:00:27','updated_at' => '2025-05-18 14:06:18'),
    array('id' => '1267','created_by' => '2','from_id' => '1','to_id' => '4','title' => 'إعداد تقديرات ميزانية الوزارة للسنة المالية 2027/2026','content' => 'CD','notes' => NULL,'created_at' => '2025-05-18 14:07:06','updated_at' => '2025-05-18 14:07:06'),
    array('id' => '1268','created_by' => '2','from_id' => '1','to_id' => '2','title' => 'إعداد تقديرات ميزانية الوزارة للسنة المالية 2027/2026','content' => 'CD','notes' => NULL,'created_at' => '2025-05-18 14:08:55','updated_at' => '2025-05-18 14:08:55'),
    array('id' => '1269','created_by' => '2','from_id' => '1','to_id' => '26','title' => 'المنشآت المائية داخل حدود المشاريع الاسكانية المستقبلية','content' => NULL,'notes' => NULL,'created_at' => '2025-05-19 09:14:24','updated_at' => '2025-05-20 08:15:52'),
    array('id' => '1270','created_by' => '2','from_id' => '73','to_id' => '1','title' => 'التقرير الفتي لسكربة آلات التصوير وأجهزة الفاكس','content' => NULL,'notes' => '202513670000031
  2025107098000004','created_at' => '2025-05-20 08:12:12','updated_at' => '2025-05-20 08:13:16'),
    array('id' => '1271','created_by' => '2','from_id' => '1','to_id' => '24','title' => 'Final MOM held on 06-08-2024 - Coordination Meeting','content' => NULL,'notes' => '20240650000118
  K23165-0105D/25/0466','created_at' => '2025-05-20 08:37:34','updated_at' => '2025-05-20 08:37:34'),
    array('id' => '1272','created_by' => '2','from_id' => '1','to_id' => '33','title' => 'Final MOM held on 12-03-2025: Meeting with Water Facilities O&M Maintenance Department to discuss "Concept Design Alternatives of The Main Components" Report (Rev A)','content' => NULL,'notes' => '20250650000101
  K23165-0102D/25/0473','created_at' => '2025-05-20 08:40:45','updated_at' => '2025-05-20 08:40:45'),
    array('id' => '1273','created_by' => '2','from_id' => '1','to_id' => '24','title' => 'Final MOM Workshops from (18-08-2024 to 21-08-2024)','content' => NULL,'notes' => '20240650000133
  K23165-0105D/25/0467','created_at' => '2025-05-20 08:44:38','updated_at' => '2025-05-20 08:44:38'),
    array('id' => '1274','created_by' => '2','from_id' => '1','to_id' => '39','title' => 'MOM workshop held from 27-04-2025 to 01-05-2025','content' => NULL,'notes' => 'K23165-0105D/25/0472','created_at' => '2025-05-20 08:46:59','updated_at' => '2025-06-17 08:04:17'),
    array('id' => '1275','created_by' => '2','from_id' => '1','to_id' => '24','title' => 'MOM workshop held from 27-04-2025 to 01-05-2025','content' => NULL,'notes' => 'K23165-0105D/25/0472','created_at' => '2025-05-20 08:48:41','updated_at' => '2025-06-17 08:04:13'),
    array('id' => '1276','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'Project 5 - Agenda of the Meeting 25-05-2025','content' => NULL,'notes' => 'K23165-0105D/25/0497
  20-05-2025','created_at' => '2025-05-20 09:12:58','updated_at' => '2025-05-20 09:12:58'),
    array('id' => '1277','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'Final MOM held on 23-03-2025: Meeting with Water Facilities O&M Maintenance Department to discuss "Concept Design Alternatives of The Main Components" Report (Rev A)','content' => NULL,'notes' => 'K23165-0102D/25/0498
  20-05-2025','created_at' => '2025-05-20 09:27:35','updated_at' => '2025-05-20 09:27:35'),
    array('id' => '1278','created_by' => '2','from_id' => '1','to_id' => '24','title' => 'زيارة أرض بجانب مجمع توزيع المياه (ابرق خيطان) الواقع في منطقة صبحان','content' => NULL,'notes' => 'يوم الخميس الموافق 22-05-2025 الساعة 10 صباحا','created_at' => '2025-05-20 09:44:48','updated_at' => '2025-05-20 09:44:48'),
    array('id' => '1279','created_by' => '2','from_id' => '1','to_id' => '3','title' => 'إعداد تقديرات ميزانية الوزارة للسنة المالية 2027/2026','content' => NULL,'notes' => NULL,'created_at' => '2025-05-20 10:52:13','updated_at' => '2025-05-20 10:52:32'),
    array('id' => '1280','created_by' => '2','from_id' => '1','to_id' => '33','title' => 'دعوة لحضور ورشة عمل','content' => NULL,'notes' => 'K23165-0105D/25/0497','created_at' => '2025-05-20 11:18:15','updated_at' => '2025-05-20 13:01:41'),
    array('id' => '1281','created_by' => '2','from_id' => '1','to_id' => '24','title' => 'دعوة لحضور ورشة عمل','content' => NULL,'notes' => 'K23165-0105D/25/0497','created_at' => '2025-05-20 11:19:38','updated_at' => '2025-05-20 13:01:37'),
    array('id' => '1282','created_by' => '1','from_id' => '33','to_id' => '1','title' => 'MOM workshop held from 27-04-2025 to 01-05-2025','content' => NULL,'notes' => '20250650000130','created_at' => '2025-05-21 08:48:15','updated_at' => '2025-06-17 08:04:09'),
    array('id' => '1283','created_by' => '2','from_id' => '1','to_id' => '19','title' => 'MOM Held on 27-04-2025 - Phase 1 - Electro-Mechanical Meeting','content' => NULL,'notes' => 'K23165-0106D/25/0424
  20250650000090','created_at' => '2025-05-21 09:15:48','updated_at' => '2025-05-21 10:09:42'),
    array('id' => '1284','created_by' => '2','from_id' => '37','to_id' => '1','title' => 'Concept Design Report - Rev B','content' => NULL,'notes' => 'CWA/539','created_at' => '2025-05-21 13:41:04','updated_at' => '2025-05-22 07:47:54'),
    array('id' => '1285','created_by' => '2','from_id' => '11','to_id' => '1','title' => 'المستندات والشروط الفنية وجداول الكميات الخاصة بمحطة التحويل الرئيسية من مستندات عطاءات المناقصين','content' => NULL,'notes' => NULL,'created_at' => '2025-05-22 07:51:56','updated_at' => '2025-05-22 07:51:56'),
    array('id' => '1286','created_by' => '2','from_id' => '8','to_id' => '1','title' => 'طلب سداد مستحقات مالية لوزارة المالية نظير صيانة برامج حاسب لآلي','content' => NULL,'notes' => 'كتاب وزارة المالية رقم REG-2025-10841  بتاريخ 17-04-2025','created_at' => '2025-05-22 07:57:29','updated_at' => '2025-05-22 07:58:47'),
    array('id' => '1287','created_by' => '2','from_id' => '33','to_id' => '1','title' => 'دعوة لحضور ورشة عمل','content' => NULL,'notes' => 'تم الرد بترشيح 3 مهندسين','created_at' => '2025-05-22 08:02:35','updated_at' => '2025-05-22 08:02:35'),
    array('id' => '1288','created_by' => '2','from_id' => '27','to_id' => '1','title' => 'نتائج التقييم
  الموافقة على نتيجة التقييم الفني وتفتح العروض الفنية المستوفية لنسبة التقييم الفني للشركات المستوفية
  دار الخليج للاستشارات الهندسية بنسبة 92.28%
  دار الشاهين للاستشارات الهندسية بنسبة 93.766%','content' => NULL,'notes' => NULL,'created_at' => '2025-05-22 08:07:21','updated_at' => '2025-05-22 08:10:10'),
    array('id' => '1289','created_by' => '1','from_id' => '33','to_id' => '1','title' => 'MOM held on 28-04-2025 Workshop with Water Facilities O&M Maintenance Department at KEG','content' => NULL,'notes' => '20250650000122','created_at' => '2025-05-22 11:36:24','updated_at' => '2025-05-22 11:36:24'),
    array('id' => '1290','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'Workshop Meeting on 30-04-2025 with Design & Supervision Department
  Technical Services & Main Workshop Sector - RFC 12','content' => NULL,'notes' => 'K23165-0102D/25/0513
  22-05-2025','created_at' => '2025-05-22 11:58:57','updated_at' => '2025-05-22 11:58:57'),
    array('id' => '1291','created_by' => '1','from_id' => '1','to_id' => '41','title' => 'اعداد تقديرات ميزانية الوزارة للسنة المالية 2026/2027','content' => 'CD','notes' => 'ا م ش م / 206
  ات / 897 / 2025','created_at' => '2025-05-25 11:57:11','updated_at' => '2025-05-25 11:57:11'),
    array('id' => '1292','created_by' => '1','from_id' => '41','to_id' => '1','title' => 'اعداد تقديرات ميزانية الوزارة للسنة المالية 2026/2027','content' => NULL,'notes' => 'ات / 897 / 2025','created_at' => '2025-05-25 12:00:41','updated_at' => '2025-05-25 12:00:41'),
    array('id' => '1293','created_by' => '1','from_id' => '1','to_id' => '7','title' => 'إعداد الخطة التشغيلية 2026/2025 لوزارة الكهرباء و الماء و الطاقة المتجددة','content' => NULL,'notes' => '202557394000009','created_at' => '2025-05-25 13:19:05','updated_at' => '2025-05-25 13:19:05'),
    array('id' => '1294','created_by' => '2','from_id' => '33','to_id' => '1','title' => 'Final MOM held on 12-03-2025: Meeting with Water Facilities O&M Maintenance Department to discuss "Concept Design Alternatives of The Main Components" Report (Rev A)','content' => NULL,'notes' => NULL,'created_at' => '2025-05-26 08:09:54','updated_at' => '2025-05-26 08:09:54'),
    array('id' => '1295','created_by' => '2','from_id' => '28','to_id' => '1','title' => 'Final MOM held on 05/02/2025 with PART
  محضر اجتماع 05-02-2025','content' => NULL,'notes' => '20250650000100
  20250650000125','created_at' => '2025-05-26 08:49:53','updated_at' => '2025-05-26 08:50:12'),
    array('id' => '1296','created_by' => '2','from_id' => '3','to_id' => '1','title' => 'إعداد تقديرات ميزانية الوزارة للسنة المالية 2027/2026','content' => NULL,'notes' => '2025-900-أت','created_at' => '2025-05-27 07:52:47','updated_at' => '2025-05-27 07:54:31'),
    array('id' => '1297','created_by' => '2','from_id' => '1','to_id' => '74','title' => 'المنشآت المائية داخل حدود المشاريع الإسكانية المستقبلية','content' => NULL,'notes' => NULL,'created_at' => '2025-05-27 08:15:14','updated_at' => '2025-05-27 08:15:14'),
    array('id' => '1298','created_by' => '2','from_id' => '27','to_id' => '1','title' => 'تمديد التأمين الأولي','content' => NULL,'notes' => '5542-151-13
  25-05-2025','created_at' => '2025-05-27 13:45:05','updated_at' => '2025-05-27 13:45:45'),
    array('id' => '1299','created_by' => '2','from_id' => '24','to_id' => '1','title' => 'Final MOM held on 06-08-2024 - Coordination Meeting','content' => NULL,'notes' => '20250650000146','created_at' => '2025-05-27 13:50:20','updated_at' => '2025-05-27 13:51:00'),
    array('id' => '1300','created_by' => '2','from_id' => '24','to_id' => '1','title' => 'Final MOM held on 30-06-2024 to 04-07-2024 : workshop','content' => NULL,'notes' => NULL,'created_at' => '2025-05-29 08:11:03','updated_at' => '2025-05-29 08:11:03'),
    array('id' => '1301','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'Overall Projects - Training Course No. 9 Preparation  of Tender Doc. (3 Days)','content' => NULL,'notes' => 'K23165-0100D/25/0503
  01-06-2025
  
  25/0452
  20250650000116','created_at' => '2025-06-01 11:50:31','updated_at' => '2025-06-01 11:51:00'),
    array('id' => '1302','created_by' => '2','from_id' => '2','to_id' => '1','title' => 'إعداد تقديرات ميزانية الوزارة للسنة المالية 2027/2026','content' => NULL,'notes' => 'رقم 2025-901-أت بتاريخ 21-05-2025
  رقم 20250643000199 بتاريخ 21-05-2025','created_at' => '2025-06-02 08:01:53','updated_at' => '2025-06-02 08:02:44'),
    array('id' => '1303','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'Project Schedules - Overall, Project 2, Project 5, Project 6, Project 8','content' => NULL,'notes' => 'K23165-0100D/25/0546
  02-06-2025','created_at' => '2025-06-02 09:57:15','updated_at' => '2025-06-03 10:57:08'),
    array('id' => '1304','created_by' => '2','from_id' => '8','to_id' => '1','title' => 'تدني نسبة صرف المشاريع الانشائية للسنة المالية 2024/2025 - مشاريع المياه','content' => NULL,'notes' => '20250944000012','created_at' => '2025-06-03 07:56:17','updated_at' => '2025-06-03 07:56:17'),
    array('id' => '1305','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'Preliminary Design Submission - Phase 2','content' => 'A3 Volume 1
  A3 Volume 2
  A1 book -Part 1
  A1 book -Part 2
  6 flash memory','notes' => 'K23165-0106D/25/0528
  03-06-2025','created_at' => '2025-06-04 11:41:27','updated_at' => '2025-06-04 11:43:03'),
    array('id' => '1306','created_by' => '2','from_id' => '26','to_id' => '1','title' => 'المنشآت المائية داخل حدود المشاريع الاسكانية المستقبلية','content' => NULL,'notes' => '20250650000149','created_at' => '2025-06-10 07:31:56','updated_at' => '2025-06-10 07:32:17'),
    array('id' => '1307','created_by' => '2','from_id' => '51','to_id' => '1','title' => 'اتاحة عقد الاجتماعات المرئية والمسموعة عبر شبكة انترنت الوزارة','content' => NULL,'notes' => '20250650000105','created_at' => '2025-06-10 08:25:23','updated_at' => '2025-06-10 08:25:34'),
    array('id' => '1308','created_by' => '2','from_id' => '27','to_id' => '1','title' => 'إحالة وثائق العطاءات المالية المقدمة للدراسة وتقديم التوصيات اللازمة بشأنها خلال 30 يوم من تاريخة','content' => '3 cd دار الخليج
  3 cd دار الشاهين','notes' => '5794/19/13
  02-06-2025','created_at' => '2025-06-10 10:17:38','updated_at' => '2025-06-15 12:33:40'),
    array('id' => '1309','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'Monthly Progress Report No. 16','content' => '2 مجلد ورقي
  1 فلاشه','notes' => 'K23165-0100D/25/0570
  10-06-2025','created_at' => '2025-06-10 11:22:33','updated_at' => '2025-06-10 11:23:46'),
    array('id' => '1310','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'Reimbursable Package Invoice No. 18- May 2025
  فاتورة مايو 2025- فاتورة رقم 18','content' => NULL,'notes' => 'K23165-0200D/25/0545
  02-06-2025','created_at' => '2025-06-10 11:46:45','updated_at' => '2025-06-10 11:49:24'),
    array('id' => '1311','created_by' => '2','from_id' => '1','to_id' => '8','title' => 'Reimbursable Package Invoice No. 18- May 2025
  فاتورة مايو 2025- فاتورة رقم 18','content' => NULL,'notes' => '0545','created_at' => '2025-06-10 12:09:51','updated_at' => '2025-06-10 12:09:51'),
    array('id' => '1312','created_by' => '2','from_id' => '1','to_id' => '18','title' => 'تمديد فترة عمل لجنة دراسة العطاءات المشكلة بالقرار الاداري رقم 1456 لسنة 2024','content' => NULL,'notes' => '202525136000045','created_at' => '2025-06-12 07:56:27','updated_at' => '2025-06-15 11:14:14'),
    array('id' => '1313','created_by' => '2','from_id' => '18','to_id' => '1','title' => 'تمديد فترة عمل لجنة دراسة العطاءات المشكلة بالقرار الاداري رقم 1456 لسنة 2024','content' => NULL,'notes' => '202525136000045','created_at' => '2025-06-12 07:57:55','updated_at' => '2025-06-16 09:19:12'),
    array('id' => '1314','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'البرنامج التدريبي
  Course 10 & 11','content' => 'Course 11: Quality Control
  Course 10: Contract Administration and Management','notes' => 'K23165-0100D/25/0583
  12-06-2025','created_at' => '2025-06-12 10:29:14','updated_at' => '2025-06-16 08:03:47'),
    array('id' => '1315','created_by' => '2','from_id' => '8','to_id' => '1','title' => 'عدم موافقة الجهاز المركزي للمناقصات العامة علي طلب تقديم عرض فني ومالي جديد من السادة المكتب العالمي NOD بالاشتراك مع المكتب المحلي المستشارون العرب','content' => NULL,'notes' => '5940/80/13
  10-06-2025','created_at' => '2025-06-15 07:41:43','updated_at' => '2025-06-15 07:44:53'),
    array('id' => '1316','created_by' => '2','from_id' => '2','to_id' => '1','title' => 'إعداد تقديرات ميزانية الوزارة للسنة المالية 2027/2026','content' => NULL,'notes' => '20250643000195','created_at' => '2025-06-15 07:47:55','updated_at' => '2025-06-15 07:48:14'),
    array('id' => '1317','created_by' => '2','from_id' => '1','to_id' => '8','title' => 'تدني نسبة صرف المشاريع الانشائية للسنة المالية 2024/2025 - مشاريع المياه','content' => NULL,'notes' => '20250944000012','created_at' => '2025-06-15 13:29:24','updated_at' => '2025-06-15 13:29:24'),
    array('id' => '1318','created_by' => '2','from_id' => '45','to_id' => '1','title' => 'نموذج طلب غربلة للمشروع','content' => NULL,'notes' => 'و ك م برقم 1476-15 بتاريخ 29-04-2024','created_at' => '2025-06-16 08:11:29','updated_at' => '2025-06-16 08:11:50'),
    array('id' => '1319','created_by' => '1','from_id' => '1','to_id' => '19','title' => 'MOM held on 14-04-2025 : Workshop with Operation 
  and Maintenance Water Facilities Projects to Discuss the
  Concept Design Report (Rev B)
  ملاحظات ادارة تشغيل وصيانة المنشآت المائية','content' => NULL,'notes' => '25/0384
  20250650000123','created_at' => '2025-06-16 10:09:06','updated_at' => '2025-06-29 08:44:45'),
    array('id' => '1320','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'Interim Submission C1 (I.S.C1) Submission','content' => '40 مخطط + 5 Flash Memory','notes' => 'K23165-0108D/25/0631
  15-06-2025','created_at' => '2025-06-16 11:25:06','updated_at' => '2025-06-16 11:25:06'),
    array('id' => '1321','created_by' => '1','from_id' => '1','to_id' => '37','title' => 'Concept Design Report - Rev B','content' => NULL,'notes' => '2025065000008','created_at' => '2025-06-16 12:41:10','updated_at' => '2025-06-16 12:41:10'),
    array('id' => '1322','created_by' => '2','from_id' => '39','to_id' => '1','title' => 'MOM workshop held from 27-04-2025 to 01-05-2025','content' => NULL,'notes' => NULL,'created_at' => '2025-06-16 12:47:42','updated_at' => '2025-06-17 08:04:03'),
    array('id' => '1323','created_by' => '2','from_id' => '1','to_id' => '61','title' => 'دراسة العطاءات','content' => NULL,'notes' => 'ات/441/2025','created_at' => '2025-06-16 13:31:28','updated_at' => '2025-06-16 13:53:06'),
    array('id' => '1324','created_by' => '2','from_id' => '1','to_id' => '61','title' => 'دراسة العطاءات','content' => NULL,'notes' => 'ات/230/2025','created_at' => '2025-06-16 13:35:08','updated_at' => '2025-06-16 13:53:23'),
    array('id' => '1325','created_by' => '2','from_id' => '1','to_id' => '61','title' => 'دراسة العطاءات','content' => NULL,'notes' => 'ات/384/2025','created_at' => '2025-06-16 13:38:13','updated_at' => '2025-06-16 13:53:40'),
    array('id' => '1326','created_by' => '2','from_id' => '1','to_id' => '19','title' => 'MOM held on 28-04-2025 Workshop with Water Facilities O&M Maintenance Department at KEG','content' => NULL,'notes' => '20250650000122','created_at' => '2025-06-16 13:49:58','updated_at' => '2025-06-16 13:50:26'),
    array('id' => '1327','created_by' => '1','from_id' => '1','to_id' => '30','title' => 'مواصفات انظمة الطاقة الشمسية الخاصة بالمناقصات أرقام (45 - 71 - 76)','content' => NULL,'notes' => NULL,'created_at' => '2025-06-17 09:07:22','updated_at' => '2025-06-17 09:51:03'),
    array('id' => '1328','created_by' => '1','from_id' => '1','to_id' => '62','title' => 'Workshop Meeting on 30-04-2025 with Design & Supervision Department, Technical Service & Main Workshop Sector - RFC 12','content' => NULL,'notes' => '25/0513','created_at' => '2025-06-17 12:21:00','updated_at' => '2025-06-22 13:01:49'),
    array('id' => '1329','created_by' => '1','from_id' => '1','to_id' => '23','title' => 'خدمات استشارية لدراسة تصميم واعداد مناقصات محطتي ضخ المياه بالشويخ وحولي والخطوط الرئيسية الملحقة بدولة الكويت','content' => NULL,'notes' => 'C01-407','created_at' => '2025-06-17 12:37:50','updated_at' => '2025-06-17 12:37:50'),
    array('id' => '1330','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'MOM held on 22-04-2025 - Meeting with Operation and Maintenance Water Facilities Projects Department to discuss reply to comments of Concept Design Report (Rev B)','content' => NULL,'notes' => 'K23165-0102D/25/0656
  17-06-2025','created_at' => '2025-06-17 13:08:38','updated_at' => '2025-06-17 13:08:38'),
    array('id' => '1331','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'Package A4 Final Hydraulic Study Report Submission','content' => 'عدد 1 مجلد A3
  عدد 5 فلاش ميموري','notes' => 'K23165-0102D/25/0697
  18-06-2025','created_at' => '2025-06-18 11:37:48','updated_at' => '2025-06-18 11:39:21'),
    array('id' => '1332','created_by' => '2','from_id' => '13','to_id' => '1','title' => 'دراسة عروض المناقصين الخاصة بمناقصات قطاع مشاريع المياه - الأعمال الخاصة بالطاقة الشمسية الكهروضوئية','content' => NULL,'notes' => '202574016000034','created_at' => '2025-06-19 10:38:00','updated_at' => '2025-06-19 10:38:00'),
    array('id' => '1333','created_by' => '2','from_id' => '1','to_id' => '27','title' => 'دعوة استشارية للدعم الفني والمهني الهندسي لبعض المشاريع النوعية في قطاع مشاريع المياه - رفع التوصية - التقرير الفني رقم (3)','content' => NULL,'notes' => NULL,'created_at' => '2025-06-19 10:57:05','updated_at' => '2025-06-19 10:57:05'),
    array('id' => '1334','created_by' => '2','from_id' => '1','to_id' => '59','title' => 'دعوة استشارية للدعم الفني والمهني الهندسي لبعض المشاريع النوعية في قطاع مشاريع المياه - التقرير الفني رقم (3)','content' => NULL,'notes' => NULL,'created_at' => '2025-06-19 10:59:09','updated_at' => '2025-06-19 10:59:09'),
    array('id' => '1335','created_by' => '2','from_id' => '1','to_id' => '30','title' => 'إشتراطات قبول عطاءات المناقصين الخاصة بأعمال السولار في المناقصات الثلاث الخاصة بمجمعات المياه في الدوحة والشويخ وحولي','content' => NULL,'notes' => '45
  76
  71','created_at' => '2025-06-19 12:42:01','updated_at' => '2025-06-19 12:42:01'),
    array('id' => '1336','created_by' => '2','from_id' => '37','to_id' => '1','title' => 'Concept Design Report - Rev B','content' => NULL,'notes' => '20250650000155','created_at' => '2025-06-22 08:07:20','updated_at' => '2025-06-22 08:07:39'),
    array('id' => '1337','created_by' => '2','from_id' => '5','to_id' => '1','title' => 'إعداد تقديرات ميزانية الوزارة للسنة المالية 2027/2026','content' => NULL,'notes' => 'أت/898/2025
  21-05-2025','created_at' => '2025-06-22 11:42:07','updated_at' => '2025-06-22 11:42:07'),
    array('id' => '1338','created_by' => '2','from_id' => '1','to_id' => '9','title' => 'الجدول الزمني للمشاريع التنموية الكبرى
  (مشروع حصر المواقع والأراضي السكنية الجديدة لتوفير الرعاية السكنية للمواطنين)','content' => 'مرفق CD','notes' => '202514903000095','created_at' => '2025-06-22 13:05:27','updated_at' => '2025-06-29 07:48:29'),
    array('id' => '1339','created_by' => '1','from_id' => '1','to_id' => '8','title' => 'الموضوع: العقد رقم (وك م / ع / 5021 -2015/2016) بشأن
  خدمات استشارية لدراسة وتصميم واعداد مستندات مناقصات مجمع توزيع
  مياه الدوحة الجديد والقائم والخطوط الرئيسية الملحقة في دولة الكويت
  (تفعيل بند الاشراف)','content' => NULL,'notes' => NULL,'created_at' => '2025-06-22 13:39:55','updated_at' => '2025-07-09 08:15:38'),
    array('id' => '1340','created_by' => '2','from_id' => '66','to_id' => '1','title' => 'تضمين مشاريع المنشآت المائية ضمن عقود المؤسسة العامة للرعاية السكنية لكافة المشاريع(تعديل قرار مجلس الوزراء)','content' => NULL,'notes' => '20252436000086','created_at' => '2025-06-23 07:46:32','updated_at' => '2025-06-23 07:54:31'),
    array('id' => '1342','created_by' => '2','from_id' => '1','to_id' => '8','title' => 'طلب مخاطبه وزارة المالية لتعديل المبلغ التقديري الى 2,000,000.000 د.ك بدلا من 1,400,000.000 د.ك','content' => NULL,'notes' => NULL,'created_at' => '2025-06-23 12:37:47','updated_at' => '2025-06-23 12:37:47'),
    array('id' => '1343','created_by' => '2','from_id' => '1','to_id' => '7','title' => 'متابعة الخطة التشغيلية 2026/2025 لوزارة الكهرباء والماء والطاقة المتجددة','content' => NULL,'notes' => NULL,'created_at' => '2025-06-23 13:12:04','updated_at' => '2025-06-23 13:12:04'),
    array('id' => '1344','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'Phase 2 Final Master Plan Report - Rev 0','content' => 'عدد 6 Flash Memory
  ملف مضغوط في فولدر الكتاب','notes' => 'K23165-0105D/25/0725
  23-06-2025','created_at' => '2025-06-23 13:41:51','updated_at' => '2025-06-29 10:34:14'),
    array('id' => '1345','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'Final Concept Design + Final Concept Design Alternatives of the Main Components + Updated Data Collection Report','content' => 'عدد 5 Flash Memory
  ملف مضغوط في فولدر الكتاب','notes' => 'K23165-0102D/25/0724
  23-06-2025','created_at' => '2025-06-23 13:45:07','updated_at' => '2025-06-29 10:34:30'),
    array('id' => '1346','created_by' => '1','from_id' => '1','to_id' => '7','title' => 'تقديم الاحتياجات التدريبية (داخلية/خارجية) للوزارة للعام التدريبي 2026/2025 عن طريق الموقع الالكتروني','content' => NULL,'notes' => '20257350000003','created_at' => '2025-06-24 11:28:52','updated_at' => '2025-06-24 11:28:52'),
    array('id' => '1347','created_by' => '1','from_id' => '1','to_id' => '7','title' => 'الاحتياج السنوي للقطاعات الفنية للسنة المالية (2025/2026)','content' => NULL,'notes' => '202557905000240
  20250650000140','created_at' => '2025-06-25 08:49:35','updated_at' => '2025-06-25 08:49:35'),
    array('id' => '1348','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'Final Concept Design + Final Concept Design Alternative of the Main Components + Updated Data Collection Report','content' => '5 CD
  4 Drawings
  ملف مضغوط في فولدر الكتاب','notes' => 'K23165-0102D/25/0739
  25-06-2025','created_at' => '2025-06-25 11:30:41','updated_at' => '2025-06-29 10:34:48'),
    array('id' => '1349','created_by' => '2','from_id' => '1','to_id' => '19','title' => 'Preliminary Design Submission - Phase 2','content' => 'Part 01 - 58 Page
  Part 02 - 180 Page','notes' => 'K23165-0106D/25/0528','created_at' => '2025-06-25 12:35:16','updated_at' => '2025-06-29 11:25:36'),
    array('id' => '1350','created_by' => '1','from_id' => '1','to_id' => '19','title' => 'الدراسة البيئية','content' => NULL,'notes' => 'K23165-0106D/25/0071','created_at' => '2025-06-25 12:53:48','updated_at' => '2025-06-25 12:53:48'),
    array('id' => '1352','created_by' => '2','from_id' => '26','to_id' => '1','title' => 'تضمن مشاريع المنشآت المائية ضمن عقود المؤسسه العامة للرعاية السكنية','content' => NULL,'notes' => '9-16661
  24-06-2025','created_at' => '2025-06-29 07:53:34','updated_at' => '2025-06-29 07:54:03'),
    array('id' => '1353','created_by' => '2','from_id' => '1','to_id' => '8','title' => 'المناقصة رقم :(و ك م /76 - 2018/2019) انشاء وانـجاز وصيانة و تطوير مجمع توزيع مياه الشويخ القائم مع الأعمال الملحقة.
  المناقصة رقم :(و ك م /71- 2018/2019) انشاء وانـجاز وصيانة و تطوير مجمع توزيع مياه بحولي القائم مع الأعمال الملحقة.
  بخصوص: التكلفة المالية','content' => NULL,'notes' => NULL,'created_at' => '2025-06-29 09:50:30','updated_at' => '2025-06-29 09:50:30'),
    array('id' => '1354','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'البرنامج التدريبي','content' => NULL,'notes' => 'K23165-0100D/25/0756
  01/07/2025','created_at' => '2025-07-01 11:51:23','updated_at' => '2025-07-01 11:51:23'),
    array('id' => '1355','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'Final Standard Tender Document - Final Step 2 Submission','content' => 'مرفق 5 cd
  مجلدات','notes' => 'K23165-0108D/25/0757
  01-07-2025','created_at' => '2025-07-01 11:57:14','updated_at' => '2025-07-01 12:09:40'),
    array('id' => '1356','created_by' => '2','from_id' => '27','to_id' => '1','title' => 'تمديد التأمين الاولي','content' => NULL,'notes' => '202559043000223
  6723/23/13
  30-06-2025','created_at' => '2025-07-02 08:24:27','updated_at' => '2025-07-02 08:26:29'),
    array('id' => '1357','created_by' => '2','from_id' => '30','to_id' => '1','title' => 'مواصفات انظمة الطاقة الشمسية الخاصة بالمناقصات أرقام (45 - 71 - 76)','content' => NULL,'notes' => NULL,'created_at' => '2025-07-02 08:28:12','updated_at' => '2025-07-02 08:28:12'),
    array('id' => '1358','created_by' => '2','from_id' => '1','to_id' => '7','title' => 'مشروع الاحتياجات الفنية فى مجال نظم وتقنية المعلومات','content' => NULL,'notes' => NULL,'created_at' => '2025-07-02 09:08:55','updated_at' => '2025-07-02 09:08:55'),
    array('id' => '1359','created_by' => '2','from_id' => '1','to_id' => '11','title' => 'المستندات والشروط الفنية وجداول الكميات الخاصة بمحطة التحويل الرئيسية من مستندات عطاءات المناقصين','content' => NULL,'notes' => 'الحاق بالكتاب رقم 20250650000119 بتاريخ 07-05-2025','created_at' => '2025-07-02 11:29:16','updated_at' => '2025-07-02 11:32:17'),
    array('id' => '1360','created_by' => '1','from_id' => '1','to_id' => '39','title' => 'MOM workshop held from 27-04-2025 to 01-05-2025','content' => NULL,'notes' => '20250650000143','created_at' => '2025-07-02 11:59:27','updated_at' => '2025-07-02 11:59:41'),
    array('id' => '1361','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'Monthly Progress Report No. 17','content' => 'مرفق عدد 2 مجلد
  عدد 1 فلاش','notes' => 'K23165-0100D/25/0764
  02/07/2025','created_at' => '2025-07-02 12:20:26','updated_at' => '2025-07-02 12:23:56'),
    array('id' => '1362','created_by' => '1','from_id' => '1','to_id' => '19','title' => 'Project Initiation','content' => NULL,'notes' => NULL,'created_at' => '2025-07-02 12:28:20','updated_at' => '2025-07-02 12:28:20'),
    array('id' => '1363','created_by' => '2','from_id' => '1','to_id' => '24','title' => 'Final MOM Workshops from (18-08-2024 to 21-08-2024)','content' => NULL,'notes' => '20250650000147','created_at' => '2025-07-03 10:01:12','updated_at' => '2025-07-03 10:01:12'),
    array('id' => '1364','created_by' => '2','from_id' => '1','to_id' => '30','title' => 'MOM held on 30-04-2025: Meeting with Design and Supervision Department (Technical Services and Main Workshop Sector) and Design of Water Network & Facilities Project\'s Department to Discuss reply to Comments of Concept Design Report (Rev B)','content' => NULL,'notes' => '20250650000129','created_at' => '2025-07-03 10:04:26','updated_at' => '2025-07-03 10:04:26'),
    array('id' => '1365','created_by' => '2','from_id' => '1','to_id' => '33','title' => 'Final MOM held on 23-03-2025: Meeting with Water Facilities O&M Maintenance Department to discuss "Concept Design Alternatives of The Main Components" Report (Rev A)','content' => NULL,'notes' => 'K23165-0102D/25/0498
  20250650000101','created_at' => '2025-07-03 10:39:07','updated_at' => '2025-07-03 10:39:07'),
    array('id' => '1366','created_by' => '2','from_id' => '1','to_id' => '33','title' => 'MOM held on 22-04-2025 - Meeting with Operation and Maintenance Water Facilities Projects Department to discuss reply to comments of Concept Design Report (Rev B)','content' => NULL,'notes' => 'K23165-0102D/25/0656
  RFC-13','created_at' => '2025-07-03 10:44:00','updated_at' => '2025-07-03 10:44:00'),
    array('id' => '1367','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'Training Course No.10: Contract Administration (5 Days)
  From 30-11-2025 To 04-12-2025','content' => NULL,'notes' => 'K23165-0100D/25/0768
  03-07-2025','created_at' => '2025-07-03 12:24:20','updated_at' => '2025-07-03 12:28:10'),
    array('id' => '1368','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'Training Course No.11: Quality management and HSE  (5 Days)
  From 12-10-2025 To 16-10-2025','content' => NULL,'notes' => 'K23165-0100D/25/0760
  03-07-2025','created_at' => '2025-07-03 12:26:42','updated_at' => '2025-07-03 12:28:46'),
    array('id' => '1369','created_by' => '2','from_id' => '24','to_id' => '1','title' => 'Final MOM Workshops from (18-08-2024 to 21-08-2024)','content' => NULL,'notes' => '20250650000147','created_at' => '2025-07-06 08:06:30','updated_at' => '2025-07-06 08:06:30'),
    array('id' => '1370','created_by' => '2','from_id' => '1','to_id' => '30','title' => 'مواصفات انظمة الطاقة الشمسية الخاصة بالمناقصات أرقام (45 - 71 - 76)','content' => 'فلاش ميموري','notes' => '20250650000152','created_at' => '2025-07-07 08:49:35','updated_at' => '2025-07-07 08:52:13'),
    array('id' => '1371','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'Invoice No. 02 - Completion of Stage 1 Phase 2 - Preliminary Design Submission','content' => NULL,'notes' => 'K23165-0106D/25/0754
  01-07-2025','created_at' => '2025-07-07 09:13:37','updated_at' => '2025-07-07 09:13:37'),
    array('id' => '1372','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'Project 2 
  Project 5
  MOM held on 30-06-2025 - Discussion the new strategic planning','content' => NULL,'notes' => 'K23165-0102D/0105D/0786
  08-07-2025','created_at' => '2025-07-08 10:11:37','updated_at' => '2025-07-09 08:49:11'),
    array('id' => '1373','created_by' => '2','from_id' => '1','to_id' => '8','title' => 'Invoice No. 02 - Completion of Stage 1 Phase 2 - Preliminary Design Submission
  صرف الدفعة الخاصة بالمرحلة الأولى الطور الثاني','content' => NULL,'notes' => 'K23165-0106D/25/0754','created_at' => '2025-07-08 10:39:31','updated_at' => '2025-07-08 10:39:31'),
    array('id' => '1374','created_by' => '1','from_id' => '1','to_id' => '14','title' => 'Kick off Meeting','content' => NULL,'notes' => '2023/1368','created_at' => '2025-07-08 11:28:35','updated_at' => '2025-07-08 11:28:35'),
    array('id' => '1375','created_by' => '1','from_id' => '1','to_id' => '12','title' => 'Kick off Meeting','content' => NULL,'notes' => NULL,'created_at' => '2025-07-08 11:30:29','updated_at' => '2025-07-08 11:30:37'),
    array('id' => '1376','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'Reimbursable Package Invoice No. 19- June 2025
  فاتورة يونيو 2025- فاتورة رقم 19','content' => NULL,'notes' => 'K23165-0200D/25/0767
  03-07-2025','created_at' => '2025-07-08 11:58:22','updated_at' => '2025-07-08 11:58:22'),
    array('id' => '1377','created_by' => '2','from_id' => '1','to_id' => '8','title' => 'Reimbursable Package Invoice No. 19- June 2025
  فاتورة يونيو 2025- فاتورة رقم 19','content' => NULL,'notes' => '0767','created_at' => '2025-07-08 12:00:11','updated_at' => '2025-07-08 12:00:11'),
    array('id' => '1378','created_by' => '2','from_id' => '33','to_id' => '1','title' => 'MOM held on 22-04-2025 - Meeting with Operation and Maintenance Water Facilities Projects Department to discuss reply to comments of Concept Design Report (Rev B)','content' => NULL,'notes' => NULL,'created_at' => '2025-07-08 13:31:22','updated_at' => '2025-07-08 13:31:22'),
    array('id' => '1379','created_by' => '2','from_id' => '33','to_id' => '1','title' => 'Final MOM held on 23-03-2025: Meeting with Water Facilities O&M Maintenance Department to discuss "Concept Design Alternatives of The Main Components" Report (Rev A)','content' => NULL,'notes' => NULL,'created_at' => '2025-07-09 08:04:57','updated_at' => '2025-07-09 08:04:57'),
    array('id' => '1380','created_by' => '2','from_id' => '8','to_id' => '1','title' => 'الموضوع: العقد رقم (وك م / ع / 5021 -2015/2016) بشأن
  خدمات استشارية لدراسة وتصميم واعداد مستندات مناقصات مجمع توزيع
  مياه الدوحة الجديد والقائم والخطوط الرئيسية الملحقة في دولة الكويت
  (تفعيل بند الاشراف)','content' => NULL,'notes' => NULL,'created_at' => '2025-07-09 08:10:40','updated_at' => '2025-07-09 08:15:46'),
    array('id' => '1381','created_by' => '2','from_id' => '76','to_id' => '1','title' => 'تقرير ديوان المحاسبة عن الملاحظات التي أسفرت عنها عمليات التدقيـق والفحص والمراجعـة لوزارة الكهرباء والماء والطاقة المتجددة للسنة الماليــة 2024/2025','content' => NULL,'notes' => NULL,'created_at' => '2025-07-09 08:19:44','updated_at' => '2025-07-09 08:19:44'),
    array('id' => '1382','created_by' => '2','from_id' => '1','to_id' => '61','title' => 'مواصفات انظمة الطاقة الشمسية الخاصة بالمناقصات أرقام (45 - 71 - 76)
  بخصوص: طلب اعتماد محضر الاجتماع المنعقد بتاريخ 20-05-2025 (الملاحظات علي العروض المقدمة من المناقصين)','content' => NULL,'notes' => NULL,'created_at' => '2025-07-09 09:54:25','updated_at' => '2025-07-09 13:39:42'),
    array('id' => '1383','created_by' => '2','from_id' => '1','to_id' => '30','title' => 'Interim Submission C1 (I.S.C1) Submission','content' => 'المخططات أرقام
  38
  39
  40','notes' => '0631','created_at' => '2025-07-09 11:17:09','updated_at' => '2025-07-09 11:18:00'),
    array('id' => '1384','created_by' => '2','from_id' => '1','to_id' => '5','title' => 'Training Course No.11: Quality management and HSE  (5 Days)
  ترشيح عدد 2 من ذوي الاختصاص','content' => NULL,'notes' => NULL,'created_at' => '2025-07-09 12:35:07','updated_at' => '2025-07-09 12:35:57'),
    array('id' => '1385','created_by' => '2','from_id' => '1','to_id' => '33','title' => 'Final Standard Tender Document - Final Step 2 Submission','content' => NULL,'notes' => '0757','created_at' => '2025-07-09 13:16:13','updated_at' => '2025-07-09 13:16:13'),
    array('id' => '1386','created_by' => '2','from_id' => '1','to_id' => '24','title' => 'Final Standard Tender Document - Final Step 2 Submission','content' => NULL,'notes' => '0757','created_at' => '2025-07-09 13:16:35','updated_at' => '2025-07-09 13:16:35'),
    array('id' => '1387','created_by' => '2','from_id' => '1','to_id' => '30','title' => 'Final Standard Tender Document - Final Step 2 Submission','content' => NULL,'notes' => '0757','created_at' => '2025-07-09 13:17:03','updated_at' => '2025-07-09 13:17:03'),
    array('id' => '1388','created_by' => '2','from_id' => '1','to_id' => '39','title' => 'Final Standard Tender Document - Final Step 2 Submission','content' => NULL,'notes' => '0757','created_at' => '2025-07-09 13:17:24','updated_at' => '2025-07-09 13:17:38'),
    array('id' => '1389','created_by' => '2','from_id' => '1','to_id' => '2','title' => 'Final Standard Tender Document - Final Step 2 Submission','content' => NULL,'notes' => '0757','created_at' => '2025-07-09 13:18:04','updated_at' => '2025-07-09 13:18:04'),
    array('id' => '1390','created_by' => '2','from_id' => '1','to_id' => '61','title' => 'Final Standard Tender Document - Final Step 2 Submission','content' => NULL,'notes' => '0757','created_at' => '2025-07-09 13:18:26','updated_at' => '2025-07-09 13:18:26'),
    array('id' => '1391','created_by' => '2','from_id' => '1','to_id' => '37','title' => 'Final Standard Tender Document - Final Step 2 Submission','content' => NULL,'notes' => '0757','created_at' => '2025-07-09 13:19:50','updated_at' => '2025-07-09 13:19:50'),
    array('id' => '1392','created_by' => '2','from_id' => '1','to_id' => '41','title' => 'Final Standard Tender Document - Final Step 2 Submission','content' => NULL,'notes' => '0757','created_at' => '2025-07-09 13:20:19','updated_at' => '2025-07-09 13:20:19'),
    array('id' => '1393','created_by' => '2','from_id' => '1','to_id' => '5','title' => 'Final Standard Tender Document - Final Step 2 Submission','content' => NULL,'notes' => '0757','created_at' => '2025-07-09 13:20:46','updated_at' => '2025-07-09 13:20:46'),
    array('id' => '1394','created_by' => '2','from_id' => '1','to_id' => '33','title' => 'MOM held on 22-04-2025 -and on 23-03-2025 
  Meeting with Operation and Maintenance Water Facilities Projects Department','content' => NULL,'notes' => '20250650000163
  20250650000101
  20250650000087
  رفض دعوة الاجتماع ومطالبة بالرد علي RFC13','created_at' => '2025-07-09 13:33:29','updated_at' => '2025-07-09 13:34:05'),
    array('id' => '1395','created_by' => '1','from_id' => '1','to_id' => '37','title' => 'Final Concept Design','content' => NULL,'notes' => '25/0724','created_at' => '2025-07-09 13:33:57','updated_at' => '2025-07-09 13:33:57'),
    array('id' => '1396','created_by' => '1','from_id' => '1','to_id' => '33','title' => 'Final Concept Design','content' => NULL,'notes' => '25/0724','created_at' => '2025-07-09 13:36:01','updated_at' => '2025-07-09 13:36:01'),
    array('id' => '1398','created_by' => '1','from_id' => '1','to_id' => '27','title' => 'طلب اعادة النظر في الموافقة على بند الاشراف','content' => NULL,'notes' => '13/80/5940','created_at' => '2025-07-09 13:39:51','updated_at' => '2025-07-09 13:39:51'),
    array('id' => '1399','created_by' => '1','from_id' => '4','to_id' => '1','title' => 'إعداد تقديرات ميزانية الوزارة للسنة المالية 2027/2026','content' => 'عدد 1 CD','notes' => '2025/899
  اشارة الكتاب 137 مؤرخ 10-07-2025','created_at' => '2025-07-10 09:16:14','updated_at' => '2025-07-10 09:32:38'),
    array('id' => '1400','created_by' => '1','from_id' => '33','to_id' => '1','title' => 'workshop
  نسخة من محاضر الاجتماعات لورش العمل المنعقدة بتاريخ 18-08-2024 الي 21-08-2024 للاطلاع وابداء الملاحظات','content' => NULL,'notes' => '20240650000134','created_at' => '2025-07-10 10:32:37','updated_at' => '2025-07-10 10:32:37'),
    array('id' => '1401','created_by' => '1','from_id' => '1','to_id' => '33','title' => 'Final MOM Workshops from 18-08-2024 to 21-08-2024','content' => NULL,'notes' => '20240650000134','created_at' => '2025-07-10 10:40:42','updated_at' => '2025-07-10 10:40:42'),
    array('id' => '1402','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'Hydraulic Study Presentation MOM held on 09-07-2025','content' => '1 hard copy
  1 flash drive','notes' => 'K23165-0102D/25/0812
  10-07-2025','created_at' => '2025-07-10 12:23:41','updated_at' => '2025-07-10 12:23:41'),
    array('id' => '1403','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'Revised Project Schedule - Overall, Project 2, Project 6 & Project 8','content' => NULL,'notes' => 'K23165-0100D/25/0811
  09-07-2025','created_at' => '2025-07-10 12:26:59','updated_at' => '2025-07-10 12:26:59'),
    array('id' => '1404','created_by' => '2','from_id' => '12','to_id' => '1','title' => 'Kick off Meeting','content' => NULL,'notes' => NULL,'created_at' => '2025-07-13 07:53:08','updated_at' => '2025-07-13 07:53:08'),
    array('id' => '1405','created_by' => '2','from_id' => '14','to_id' => '1','title' => 'Kick off Meeting','content' => NULL,'notes' => NULL,'created_at' => '2025-07-13 07:56:12','updated_at' => '2025-07-13 07:56:12'),
    array('id' => '1406','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'Final MOMs Overall Projects - workshop from 13-04-2025 to 16-04-2025 and Final MOM 07-05-2025','content' => NULL,'notes' => 'K23165-0100D-25-0814
  13-07-2025','created_at' => '2025-07-13 10:30:08','updated_at' => '2025-07-13 10:30:08'),
    array('id' => '1407','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'Final MOM Held on 27-04-2025 - Phase 1 - Electro-Mechanical Meeting','content' => NULL,'notes' => 'K23165-0106D/25/0815
  13-07-2025','created_at' => '2025-07-13 10:33:52','updated_at' => '2025-07-13 10:33:52'),
    array('id' => '1408','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'Final MOM held on 14-04-2025 - Pre-Draft Master Plan Comments - Operation & Maintenance Water Facilities Projects','content' => NULL,'notes' => 'K23165-0105D/25/0816
  13-07-2025','created_at' => '2025-07-13 10:37:07','updated_at' => '2025-07-13 10:37:07'),
    array('id' => '1409','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'Final MOMs Project 2 - held on 28-04-2025 at 10:30 and 8:45 and Final MOM 14-04-2025 - and Final MOM 09-12-2024 - and Final MOM 10-12-2024','content' => NULL,'notes' => 'K23165-0102D/25/0813
  13-07-2025','created_at' => '2025-07-13 10:41:01','updated_at' => '2025-07-13 10:41:01'),
    array('id' => '1410','created_by' => '1','from_id' => '1','to_id' => '14','title' => 'عقد ورش عمل
  من 10-08-2025 الى 14-08-2025 الساعة 9 
  Fresh and Brackish Water Hydraulic Model Run','content' => NULL,'notes' => '25/0725','created_at' => '2025-07-13 11:18:31','updated_at' => '2025-07-13 11:18:31'),
    array('id' => '1411','created_by' => '1','from_id' => '1','to_id' => '11','title' => 'الحاق
  المستندات والشروط الفنية وجداول الكميات','content' => NULL,'notes' => '20250650000119','created_at' => '2025-07-14 10:13:30','updated_at' => '2025-07-14 10:14:20'),
    array('id' => '1412','created_by' => '2','from_id' => '33','to_id' => '1','title' => 'MOM held on 22-04-2025 - Meeting with Operation and Maintenance Water Facilities Projects Department to discuss reply to comments of Concept Design Report (Rev B)','content' => NULL,'notes' => '20250650000163','created_at' => '2025-07-15 07:53:26','updated_at' => '2025-07-15 07:53:26'),
    array('id' => '1413','created_by' => '2','from_id' => '37','to_id' => '1','title' => 'Final Concept Design','content' => NULL,'notes' => NULL,'created_at' => '2025-07-15 08:01:58','updated_at' => '2025-07-15 08:01:58'),
    array('id' => '1414','created_by' => '2','from_id' => '33','to_id' => '1','title' => 'Final MOM Workshops from 18-08-2024 to 21-08-2024','content' => NULL,'notes' => '20240650000134','created_at' => '2025-07-15 13:49:20','updated_at' => '2025-07-15 13:49:20'),
    array('id' => '1415','created_by' => '2','from_id' => '8','to_id' => '1','title' => 'المناقصة رقم :(و ك م /76 - 2018/2019) انشاء وانـجاز وصيانة و تطوير مجمع توزيع مياه الشويخ القائم مع الأعمال الملحقة.
  بخصوص: التكلفة المالية','content' => 'مرفق كتاب وزارة المالية','notes' => '20250650000161','created_at' => '2025-07-16 08:06:35','updated_at' => '2025-07-17 10:43:20'),
    array('id' => '1416','created_by' => '2','from_id' => '8','to_id' => '1','title' => 'المناقصة رقم :(و ك م /71- 2018/2019) انشاء وانـجاز وصيانة و تطوير مجمع توزيع مياه بحولي القائم مع الأعمال الملحقة.
  بخصوص: التكلفة المالية','content' => NULL,'notes' => NULL,'created_at' => '2025-07-16 08:14:36','updated_at' => '2025-07-16 08:14:36'),
    array('id' => '1417','created_by' => '2','from_id' => '37','to_id' => '1','title' => 'Final Standard Tender Document - Final Step 2 Submission','content' => NULL,'notes' => NULL,'created_at' => '2025-07-16 08:19:52','updated_at' => '2025-07-16 08:19:52'),
    array('id' => '1418','created_by' => '2','from_id' => '30','to_id' => '1','title' => 'مواصفات انظمة الطاقة الشمسية الخاصة بالمناقصات أرقام (45 - 71 - 76)','content' => NULL,'notes' => NULL,'created_at' => '2025-07-16 08:24:08','updated_at' => '2025-07-16 08:24:08'),
    array('id' => '1419','created_by' => '2','from_id' => '1','to_id' => '15','title' => 'مخاطبات البلدية بشأن المباني الإدارية
  دعوة لحضور اجتماع يوم الاثنين الموافق 21-07-2025 الساعة 9:00 صباحا','content' => NULL,'notes' => NULL,'created_at' => '2025-07-16 10:20:30','updated_at' => '2025-07-16 10:20:30'),
    array('id' => '1420','created_by' => '2','from_id' => '18','to_id' => '1','title' => 'مشروع ميزانية الوزارة للسنة المالية 2026/2027','content' => NULL,'notes' => '2025149794000373','created_at' => '2025-07-17 07:56:59','updated_at' => '2025-07-17 07:56:59'),
    array('id' => '1421','created_by' => '2','from_id' => '9','to_id' => '1','title' => 'اعداد خطة التنمية السنوية (2026/2025)','content' => NULL,'notes' => '20253019000013','created_at' => '2025-07-17 08:13:48','updated_at' => '2025-07-17 08:13:48'),
    array('id' => '1422','created_by' => '2','from_id' => '1','to_id' => '19','title' => 'MOM held on 22-04-2025 - Meeting with Operation and Maintenance Water Facilities Projects Department to discuss reply to comments of Concept Design Report (Rev B)','content' => NULL,'notes' => '0656
  20250650000163','created_at' => '2025-07-17 09:47:52','updated_at' => '2025-07-17 09:47:52'),
    array('id' => '1423','created_by' => '2','from_id' => '1','to_id' => '8','title' => 'المناقصة رقم :(و ك م /76 - 2018/2019) انشاء وانـجاز وصيانة و تطوير مجمع توزيع مياه الشويخ القائم مع الأعمال الملحقة.
  بخصوص: التكلفة المالية','content' => NULL,'notes' => '20251335000015','created_at' => '2025-07-17 10:42:40','updated_at' => '2025-07-17 10:45:13'),
    array('id' => '1424','created_by' => '2','from_id' => '1','to_id' => '8','title' => 'المناقصة رقم :(و ك م /71- 2018/2019) انشاء وانـجاز وصيانة و تطوير مجمع توزيع مياه بحولي القائم مع الأعمال الملحقة.
  بخصوص: التكلفة المالية','content' => NULL,'notes' => '20251335000015','created_at' => '2025-07-17 10:44:21','updated_at' => '2025-07-17 10:44:52'),
    array('id' => '1425','created_by' => '2','from_id' => '30','to_id' => '1','title' => 'MOM held on 30-04-2025: Meeting with Design and Supervision Department (Technical Services and Main Workshop Sector) and Design of Water Network & Facilities Project\'s Department to Discuss reply to Comments of Concept Design Report (Rev B)','content' => NULL,'notes' => NULL,'created_at' => '2025-07-20 08:02:20','updated_at' => '2025-07-20 08:02:20'),
    array('id' => '1426','created_by' => '2','from_id' => '33','to_id' => '1','title' => 'Final Concept Design','content' => NULL,'notes' => NULL,'created_at' => '2025-07-20 08:13:18','updated_at' => '2025-07-20 08:13:18'),
    array('id' => '1427','created_by' => '2','from_id' => '39','to_id' => '1','title' => 'Final Standard Tender Document - Final Step 2 Submission','content' => NULL,'notes' => NULL,'created_at' => '2025-07-20 08:22:25','updated_at' => '2025-07-20 08:22:25'),
    array('id' => '1428','created_by' => '2','from_id' => '62','to_id' => '1','title' => 'Workshop Meeting on 30-04-2025 with Design & Supervision Department, Technical Service & Main Workshop Sector - RFC 12','content' => NULL,'notes' => '20250650000156','created_at' => '2025-07-20 08:30:20','updated_at' => '2025-07-20 08:32:18'),
    array('id' => '1429','created_by' => '1','from_id' => '1','to_id' => '61','title' => 'المناقصات أرقام (45 - 71 - 76)
  بخصوص: محضر اجتماع 20/05/2025','content' => 'مرفق اصل المحضر','notes' => NULL,'created_at' => '2025-07-20 10:03:30','updated_at' => '2025-07-20 10:03:30'),
    array('id' => '1430','created_by' => '2','from_id' => '1','to_id' => '7','title' => 'اعداد خطة التنمية السنوية (2026/2025)','content' => NULL,'notes' => '20253019000013','created_at' => '2025-07-20 13:24:55','updated_at' => '2025-07-20 13:25:21'),
    array('id' => '1431','created_by' => '2','from_id' => '1','to_id' => '14','title' => 'دعوة لحضور ورش عمل
  من تاريخ 10-08-2025 الي 14-08-2025','content' => NULL,'notes' => '20250650000180
  0725','created_at' => '2025-07-21 09:05:14','updated_at' => '2025-07-21 09:05:14'),
    array('id' => '1432','created_by' => '1','from_id' => '1','to_id' => '19','title' => 'التصميم النهائي للفكرة التصميمية وبدائل الفكرة التصميمية','content' => NULL,'notes' => '25/0724','created_at' => '2025-07-21 11:01:35','updated_at' => '2025-07-21 11:01:35'),
    array('id' => '1433','created_by' => '2','from_id' => '1','to_id' => '19','title' => 'RFC-12','content' => NULL,'notes' => '0513
  2025216789000002
  AEC-07250007','created_at' => '2025-07-22 13:17:55','updated_at' => '2025-07-22 13:18:40'),
    array('id' => '1434','created_by' => '2','from_id' => '1','to_id' => '19','title' => 'Workshop Meeting on 30-04-2025 with Design & Supervision Department
  Technical Services & Main Workshop Sector','content' => NULL,'notes' => '0513
  20250650000129','created_at' => '2025-07-22 13:21:05','updated_at' => '2025-07-22 13:21:05'),
    array('id' => '1435','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'جمع المعلومات','content' => NULL,'notes' => 'K23165-0107D/25/0848
  22-07-2025','created_at' => '2025-07-22 13:25:45','updated_at' => '2025-07-22 13:25:45'),
    array('id' => '1436','created_by' => '2','from_id' => '26','to_id' => '1','title' => 'توفير الخدمات فى مشاريع المؤسسه العامه للرعايه السكنيه','content' => NULL,'notes' => '20250284001230
  20250016000204','created_at' => '2025-07-23 08:01:03','updated_at' => '2025-07-23 08:01:15'),
    array('id' => '1437','created_by' => '1','from_id' => '1','to_id' => '11','title' => 'الحاق
  المستندات والشروط الفنية وجداول الكميات','content' => NULL,'notes' => '20250650000119','created_at' => '2025-07-23 09:36:26','updated_at' => '2025-07-23 09:36:26'),
    array('id' => '1438','created_by' => '2','from_id' => '27','to_id' => '1','title' => 'طلب تمديد التأمين الأولي من المناقصين','content' => NULL,'notes' => '20250722-IN-7795-69-13','created_at' => '2025-07-24 09:47:07','updated_at' => '2025-07-24 09:47:07'),
    array('id' => '1439','created_by' => '2','from_id' => '14','to_id' => '1','title' => 'دعوة لحضور ورش عمل
  من تاريخ 10-08-2025 الي 14-08-2025','content' => NULL,'notes' => NULL,'created_at' => '2025-07-24 09:50:50','updated_at' => '2025-07-24 09:50:50'),
    array('id' => '1440','created_by' => '2','from_id' => '18','to_id' => '1','title' => 'تعميم إداري رقم 20 لسنة 2025 - إعداد تقديرات ميزانية الزارة للسنة المالية 2026 / 2027','content' => NULL,'notes' => '20250025002548','created_at' => '2025-07-24 09:55:50','updated_at' => '2025-07-24 09:55:50'),
    array('id' => '1441','created_by' => '2','from_id' => '24','to_id' => '1','title' => 'MOM workshop held from 27-04-2025 to 01-05-2025','content' => NULL,'notes' => NULL,'created_at' => '2025-07-24 09:58:34','updated_at' => '2025-07-24 09:58:34'),
    array('id' => '1442','created_by' => '1','from_id' => '19','to_id' => '1','title' => 'Invoice No. 01 - Completion of Stage 1 Phase 1 & presentation & Acceptance of Deliverables','content' => NULL,'notes' => 'K23165-0102D/25/0855
  23-07-2025','created_at' => '2025-07-24 11:50:35','updated_at' => '2025-07-24 11:50:35'),
    array('id' => '1443','created_by' => '2','from_id' => '19','to_id' => '1','title' => 'التراخيص  والموافقات الحكومية','content' => '2 نسخة ورقية من المخططات
  1 نسخة الكترونية (CD)','notes' => 'K23165-0106D/25/0874
  24-07-2025','created_at' => '2025-07-24 12:18:33','updated_at' => '2025-07-24 12:19:01')
  );

        Document::insert($documents);

    }
}
