<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Auth;

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
        foreach ($data as $usr) {
            if (isset($usr['id'])) {
                if (Auth::id() != $usr['id']) {
                    $this->here[$usr['id']] = $usr;
                }
            }
        }
    }

    /**
     * @param $data
     */
    public function leaving($data)
    {
        foreach ($data as $usr) {
            if (isset($usr['id'])) {
                unset($this->here[$usr['id']]);
            }
        }
    }

    /**
     * @param $data
     */
    public function joining($data)
    {
        foreach ($data as $usr) {
            if (isset($usr['id'])) {
                if (Auth::id() != $usr['id']) {
                    $this->here[$usr['id']] = $usr;
                }
            }
        }

        //$this->dispatchBrowserEvent('onlineusers',['success' => 'Your message has been sent successfully!']);
    }
}
