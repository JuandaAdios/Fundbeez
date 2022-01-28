<?php

namespace App\Models\Enums;

class InvestmentStatus extends Enum
{
    const PENDING = 0;
    const ACCEPT = 1;
    const DECLINE = 2;

    public $name = [
        0 => 'Pending',
        1 => 'Accept',
        2 => 'Decline',
    ];
}
