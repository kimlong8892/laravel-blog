<?php

use Illuminate\Database\Seeder;

use App\Category;
use App\Item;
use App\User;

class test extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i < 1000; ++$i)
        {
            $user = new User();
            $user->email = "sdfkjsdjf@".$i.".com".rand(0, 9999);
            $user->first_name = "Lonmg".$i;
            $user->last_name = "asdasd".$i;
            $user->password = "sajhdhjasdhjashjda";
            $user->save();
            $c= new Category();
            $c->name = "category ".$i;
            $c->name_url = "item-".$i;
            $c->user_id = 1;
            $c->save();
            $ia = new Item();
            $ia->name = "item ".$i;
            $ia->content = " Ứng dụng của XAMPP là gì? Phần mềm XAMPP là một loại ứng dụng phần mềm khá phổ biến và thường hay được các lập trình viên sử dụng để xây dựng và phát triển các dựa án website theo ngôn ngữ PHP. XAMPP được sử dụng cho mục đích nghiên cứu, phát triển website qua Localhost của máy tính cá nhân. XAMPP được ứng dụng trong nhiều lĩnh vực từ học tập đến nâng cấp, thử nghiệm Website của các lập trình viên. Để hiểu hơn về Localhost cũng như cách thức hoạt động của nó, mời bạn đọc xem bài";
            $ia->user_id = 1;
            $ia->name_url = "item-".$i;
            $ia->save();
            
        }
    }
}
