<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TextField extends Component
{
    /**
     * Create a new component instance.
     */

    public $id;
    public $label;
    public $name;
    public $type;
    public $value;
    public $hint;
    public $error;
    public $class;
    public function __construct($id=null,$label=null,$name=null,$type='text',$value=null,$hint=null,$error=null,$class=null)
    {
        $this->id=$id;
        $this->label=$label;
        $this->name=$name;
        $this->type=$type;
        $this->value=$value;
        $this->hint=$hint;
        $this->error=$error;
        $this->class=$class;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.text-field');
    }
}
