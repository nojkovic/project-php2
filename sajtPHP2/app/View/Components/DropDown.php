<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DropDown extends Component
{
    /**
     * Create a new component instance.
     */
    public $options;
    public $name;
    public $text;
    public $id;
    public $value;
    public $selected;
    public $label;
    public $errors;
    public $class;
    public $class1;
    public function __construct($options,$name,$text='text',$id=null,$value='value',$selected=null,$label=null,$errors=null,$class=null,$class1=null)
    {
        $this->options=$options;
        $this->name=$name;
        $this->text=$text;
        $this->id=$id;
        $this->value=$value;
        $this->selected =$selected;
        $this->label =$label;
        $this->errors =$errors;
        $this->class =$class;
        $this->class1 =$class1;

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.drop-down');
    }
}
