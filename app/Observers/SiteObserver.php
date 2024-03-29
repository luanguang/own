<?php

namespace App\Observers;

use Cache;
use App\Events\SiteAudit;
use Baijunyao\LaravelModel\Models\BaseModel as Model;

class SiteObserver extends BaseObserver
{
    public function updated(Model $site)
    {
        // restore() triggering both restored() and updated()
        if (!$site->isDirty('deleted_at')) {
            if ($site->isDirty('audit') && $site->audit === 1) {
                event(new SiteAudit($site->id));
            }
            flash_success('修改成功');
        }

        $this->clearCache();
    }

    protected function clearCache()
    {
        Cache::forget('home:site');
    }
}
