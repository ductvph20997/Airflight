<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            TicketSeeder::class,
            CategorySeeder::class,
            ProductSeeder::class,
            ]);

//        $ticket = [];
//        //đây là nơi để tạo dữ liệu mẫu
//        for($i = 0;$i < 50;$i++){
//            $data = [
//                "name" => "Tran Viet Duc".$i,
//                "email" => "ductv".$i."@gmal.com",
//                "address" => "Ha Noi".$i,
//                "date_of_birth" => "2003-04-08",
//                "created_at" => date('Y-m-d H:i:s'),
//                "updated_at" => date('Y-m-d H:i:s'),
//            ];
//        }
//
//        array_push($ticket,$data);
//        DB::table('ticket')->insert($ticket);
    }
}
