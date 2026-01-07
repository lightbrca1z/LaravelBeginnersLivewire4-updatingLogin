<?php

namespace App\Livewire;

use Livewire\Component;

class HelloComponent extends Component
{
    
    public $name = '';
    public $pass = '';
    public $check = '';
    
    public function mount(){
        $this->name = 'no name';
        $this->check = 'no check';
    }

    //プロパティ更新時の処理
    public function update($propertyName)
    {
        $this->check = $propertyName;
    }

    //フォーム送信時の処理
    public function updateMessage()
    {
        // not used.
    }

    //レンダリング処理
    public function render()
    {
        return view('livewire.hello-component');
    }
}
