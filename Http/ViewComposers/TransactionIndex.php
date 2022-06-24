<?php

namespace Modules\MyCustomizations\Http\ViewComposers;

use Illuminate\View\View;

class TransactionIndex
{
    /**
     * Bind Data to the view.
     *
     * @param View $view
     * @return void
     */
    public function compose(View $view): void
    {
        $view->setPath(view('my-customizations::banking.transactions.index')->getPath());
    }
}