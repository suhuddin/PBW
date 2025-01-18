<?php

namespace App\Observers;

use App\Models\Store;
use App\Enums\StoreStatus;
use Illuminate\Support\Facades\Gate;

class StoreObserver
{
    public function creating(Store $store)
    {
        $store->slug = str()->slug($store->name);
        $store->status = Gate::check('isPartner') ? StoreStatus::ACTIVE : StoreStatus::PENDING;
    }
    public function created() {}
}
