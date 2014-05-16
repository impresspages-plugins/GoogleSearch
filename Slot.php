<?php

namespace Plugin\GoogleSearch;

class Slot
{
    public static function search()
    {
        return '
        <div>
            <gcse:searchbox>
        </div>
        <div>
            <gcse:searchresults>
        </div>
        ';
    }

    public static function searchBox()
    {
        return '
        <div>
            <gcse:searchbox-only>
        </div>
        ';
    }

}
