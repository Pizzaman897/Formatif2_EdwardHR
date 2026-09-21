<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class StatusBadge extends Component
{
    public string $badgeClasses;

    /**
     * Create a new component instance.
     */
    public function __construct(public string $status = 'Tidak Aktif')
    {
        $normalizedStatus = trim(strtolower($status));

        $this->badgeClasses = match ($normalizedStatus) {
            'aktif' => 'bg-green-100 text-green-800',
            'tidak aktif', 'nonaktif', 'tidak_aktif' => 'bg-red-100 text-red-800',
            default => 'bg-gray-100 text-gray-800',
        };
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.status-badge');
    }
}
