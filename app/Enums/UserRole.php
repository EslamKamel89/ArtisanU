<?php

namespace App\Enums;

enum UserRole: string {
    case instructor = "instructor";
    case student = "student";
    public function label(): string {
        return match ($this) {
            self::instructor => 'Instructor',
            self::student => 'Student',
        };
    }
}
