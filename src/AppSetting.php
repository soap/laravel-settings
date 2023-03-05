<?php

namespace Soap\AppSettings;

use Illuminate\Database\Eloquent\Model;

class AppSetting extends Model
{
    protected $guarded = ['updated_at', 'id'];

    protected $table = config('app-settings.table', 'settings');

    public function scopeGroup($query, $groupName)
    {
        return $query->whereGroup($groupName);
    }
}
