<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Onlineusers extends Component
{
    public $here = [];

    public function getListeners()
    {
        return [
           // "echo:orders.{$this->orderId},OrderShipped" => 'notifyNewOrder',
            'echo-presence:onlineusers,here' => 'here',
            'echo-presence:onlineusers,joining' => 'joining',
            'echo-presence:onlineusers,leaving' => 'leaving',
        ];
    }


    public function render()
    {
        return view('livewire.onlineusers');
    }

    /**
     * @param $data
     */
    public function here($data)
    {
        $this->here = $data;
    }

    /**
     * @param $data
     */
    public function leaving($data)
    {
        $here = collect($this->here);

        $firstIndex = $here->search(function ($authData) use ($data) {
            return $authData['id'] == $data['id'];
        });

        $here->splice($firstIndex, 1);

        $this->here = $here->toArray();
    }

    /**
     * @param $data
     */
    public function joining($data)
    {
        $this->here[] = $data;

        //$this->dispatchBrowserEvent('onlineusers',['success' => 'Your message has been sent successfully!']);
    }
}
