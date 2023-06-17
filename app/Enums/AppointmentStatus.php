<?php

namespace App\Enums;

enum AppointmentStatus: int
{
    case SCHEDULED = 1;
    case CONFRIMED = 2;
    case CANCELLED = 3;

    public function color(): string
    {
        return match($this) {
            AppointmentStatus::SCHEDULED => 'primary',
            AppointmentStatus::CONFRIMED => 'success',
            AppointmentStatus::CANCELLED => 'danger'
        };
    }
}
