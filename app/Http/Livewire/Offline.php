<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Offline extends Component
{
    public function render()
    {
        return <<<'blade'
            <div wire:offline class="fixed top-4 left-1/2">
                <div class="relative -left-1/2 text-red-600 bg-yellow-500 px-4 py-2 font-bold">
                    You are currently offline!
                </div>
            </div>
        blade;
    }
}
