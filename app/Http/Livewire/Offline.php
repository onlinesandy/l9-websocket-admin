<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Offline extends Component
{
    public function render()
    {
        return <<<'blade'
            <div wire:offline id="offlinediv" class="col-md-12">
                <div class="alert alert-danger">
                    <button class="close" data-dismiss="alert"><i class="pci-cross pci-circle"></i></button>
                    <strong>Ooopssss !!! </strong> You are offline.
                </div>
            </div>
        blade;
    }
}
