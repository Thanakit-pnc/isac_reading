<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IELTSTopic extends Model
{
    public static function topics() {

        // 1 An environmental disaster | Body piercing | 
        // 2 How animals communicate | The Mysterious Kris 
        // 8 Comic strips | Diamonds | Dubai | Face blindness | A meal to die for
        // 10 Cloning | Coping with change | Hot air balloon | Insects as food - taboo or tradition | The wealth of happiness
        // 14 Let's go fly a kite! | Lijiang | Mulu's Mighty Mountain  | North Suilawesi | What’s on the menu for British diners
        // 21 Shadow Plays | Shield Maker | Sniffer dogs | Stone Fortress of Brunei | Synesthesia

        $topics = [
            '1' => 'An environmental disaster',
            '2' => 'Body piercing',
            '3' => 'How animals communicate',
            '4' => 'The Mysterious Kris',
            '5' => 'Comic strips',
            '6' => 'Diamonds',
            '7' => 'Dubai',
            '8' => 'Face blindness',
            '9' => 'A meal to die for',
            '10' => 'Cloning',
            '11' => 'Coping with change',
            '12' => 'Hot air balloon',
            '13' => "Insects as food",
            '14' => 'The wealth of happiness',
            '15' => "Let's go fly a kite",
            '16' => 'Lijiang',
            '17' => "Mulu's Mighty Mountain",
            '18' => 'North Sulawesi',
            '19' => "What's on the menu for British diners",
            '20' => 'Shadow Plays',
            '21' => 'Shield Maker',
            '22' => 'Sniffer dogs',
            '23' => 'Stone Fortness of Brunei',
            '24' => 'Synesthesia',
        ];

        return $topics;
    }
}
