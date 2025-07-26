<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class AppLayout extends Component {
    public function __construct(public string $role) {
    }
    public function render(): View {
        return view('layouts.app', ['role' => $this->role]);
    }
}
