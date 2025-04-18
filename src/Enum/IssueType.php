<?php

namespace App\Enum;

enum IssueType : int
{
    case BUG = 1;

    case FEATURE = 2;

    case STORY = 3;

    case TASK = 4;

    case EPIC = 5;


    public function label(): string
    {
        return match ($this) {
            self::BUG => 'BUG',
            self::FEATURE => 'FEATURE',
            self::STORY => 'STORY',
            self::TASK => 'TASK',
            self::EPIC => 'EPIC',

        };
    }
}