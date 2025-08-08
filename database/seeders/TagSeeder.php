<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tag;
class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = array(
            array('id' => '1','name' => 'محضر اجتماع','created_at' => '2024-11-25 01:34:18','updated_at' => '2024-11-25 01:34:18'),
            array('id' => '2','name' => 'B4','created_at' => '2024-11-25 01:50:32','updated_at' => '2024-11-25 01:50:32'),
            array('id' => '3','name' => 'B1','created_at' => '2024-11-29 01:13:25','updated_at' => '2024-11-29 01:13:25'),
            array('id' => '4','name' => 'B2','created_at' => '2024-11-29 01:13:33','updated_at' => '2024-11-29 01:13:33'),
            array('id' => '5','name' => 'B3','created_at' => '2024-11-29 01:13:42','updated_at' => '2024-11-29 01:13:42'),
            array('id' => '6','name' => 'B5','created_at' => '2024-11-29 01:13:49','updated_at' => '2024-11-29 01:13:49'),
            array('id' => '7','name' => 'Concept Design','created_at' => '2024-11-29 01:14:07','updated_at' => '2024-11-29 01:14:07'),
            array('id' => '8','name' => 'Data Collection','created_at' => '2024-11-29 01:25:41','updated_at' => '2024-11-29 01:25:41'),
            array('id' => '9','name' => 'RFC','created_at' => '2024-11-29 02:35:13','updated_at' => '2024-11-29 02:35:13'),
            array('id' => '10','name' => 'Training','created_at' => '2024-11-29 16:45:59','updated_at' => '2024-11-29 16:45:59'),
            array('id' => '11','name' => 'Preliminary Design Report','created_at' => '2024-11-29 17:48:03','updated_at' => '2024-11-29 17:48:03'),
            array('id' => '12','name' => 'ملحق تعديلى','created_at' => '2024-12-08 14:05:54','updated_at' => '2024-12-08 14:05:54'),
            array('id' => '13','name' => 'فاتورة','created_at' => '2024-12-11 11:27:04','updated_at' => '2024-12-11 11:27:04'),
            array('id' => '14','name' => 'Monthly Progress Report','created_at' => '2024-12-15 10:23:04','updated_at' => '2024-12-15 10:23:04'),
            array('id' => '15','name' => 'PCW','created_at' => '2024-12-29 09:16:28','updated_at' => '2024-12-29 09:16:28'),
            array('id' => '16','name' => 'دعوة لحضور اجتماع','created_at' => '2024-12-30 13:40:49','updated_at' => '2024-12-30 13:40:49'),
            array('id' => '17','name' => 'Workshop','created_at' => '2025-01-13 07:40:20','updated_at' => '2025-01-13 07:40:20'),
            array('id' => '18','name' => 'B6','created_at' => '2025-02-16 12:37:21','updated_at' => '2025-02-16 12:37:21'),
            array('id' => '19','name' => 'C1','created_at' => '2025-07-09 11:16:27','updated_at' => '2025-07-09 11:16:27'),
            array('id' => '20','name' => 'مشروع 2','created_at' => '2025-07-21 08:40:38','updated_at' => '2025-07-21 08:40:38'),
            array('id' => '21','name' => 'مشروع 5','created_at' => '2025-07-21 08:40:45','updated_at' => '2025-07-21 08:40:45'),
            array('id' => '22','name' => 'مشروع 6','created_at' => '2025-07-21 08:40:50','updated_at' => '2025-07-21 08:40:50'),
            array('id' => '23','name' => 'مشروع 8','created_at' => '2025-07-21 08:40:56','updated_at' => '2025-07-21 08:40:56'),
            array('id' => '24','name' => 'مشروع 7','created_at' => '2025-07-21 08:41:01','updated_at' => '2025-07-21 08:41:01'),
            array('id' => '25','name' => 'مناقصة 45','created_at' => '2025-07-21 08:41:36','updated_at' => '2025-07-21 08:41:36'),
            array('id' => '26','name' => 'مناقصة 71','created_at' => '2025-07-21 08:41:45','updated_at' => '2025-07-21 08:41:45'),
            array('id' => '27','name' => 'مناقصة 76','created_at' => '2025-07-21 08:41:50','updated_at' => '2025-07-21 08:41:50'),
            array('id' => '28','name' => 'ممارسة 2','created_at' => '2025-07-21 08:41:59','updated_at' => '2025-07-21 08:41:59')
          );

        Tag::insert($tags);
    }
}
