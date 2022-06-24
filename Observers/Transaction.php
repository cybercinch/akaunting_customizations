<?php

namespace Modules\MyCustomizations\Observers;

use App\Abstracts\Observer;
use App\Events\Document\TransactionsCounted;
use App\Jobs\Banking\UpdateTransaction;
use App\Models\Banking\Transaction as Model;
use App\Traits\Jobs;

class Transaction extends Observer
{
    use Jobs;

    /*
     * Listen to Creating Event
     * Ensure that transaction number is set
    */
    public function creating(Model $transaction)
    {
        if ($transaction->number == 'NULL' or $transaction->number == '')
        {
            $transaction->number = $transaction->getNextTransactionNumber();
        }
    }
}
