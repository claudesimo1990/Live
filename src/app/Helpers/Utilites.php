<?php

use App\Models\Pages\ImageText;
use App\Post;
use Carbon\Carbon;

if(!function_exists('getSectionData')){

    function getSectionData(string $section) : Object
    {
        $data = ImageText::where('section', 'about')->latest()->first();

        return $data;
    }

}

?>
