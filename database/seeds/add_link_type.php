<?php

use Illuminate\Database\Seeder;
use App\LinkType;
use App\LinkDown;

class add_link_type extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $l1 = new LinkType();
        $l1->name = "Google Drive";
        $l1->image = "images/googledrive.png";
        $l1->save();
        $l2 = new LinkType();
        $l2->name = "Git Hub";
        $l2->image = "images/github.png";
        $l2->save();
        $l3 = new LinkType();
        $l3->name = "One Drive";
        $l3->image = "images/onedrive.png";
        $l3->save();
        $l4 = new LinkType();
        $l4->name = "Fshare";
        $l4->image = "images/fshare.png";
        $l4->save();


        for($i = 2; $i < 40; ++$i)
        {
            $l = new LinkDown();
            $l->src = "https://toidicode.com/cac-moi-quan-he-relationships-trong-eloquent-14.html";
            $l->item_id = $i;
            $l->title = "Title ".$i;
            $l->type_id = rand(1, 4);
            $l->save();
        }
    }
}
