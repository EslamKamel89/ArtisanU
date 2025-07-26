<?php

namespace App\Enums;

enum UserRole: string {
    case user = "user";
    case student = "student";
    public function label(): string {
        return match ($this) {
            self::user => 'User',
            self::student => 'Student',
        };
    }
}
