<?php
/*=========================================================================================
    App Name: Inventory Management System
    File Name: Footer
    --------------------------------------------------------------------------------------
    Author: R. Idham Aziz Marlin, S.Kom
    Email: idhamaziz390@gmail.com
==========================================================================================*/

namespace App\View\Components;

use Illuminate\View\Component;

class Footer extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.footer');
    }
}
