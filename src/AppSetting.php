<?php

namespace Soap\AppSettings;

use Illuminate\Database\Eloquent\Model;

/** 
 * @property int $id
 * @property string $name
 * @property string $val
 * @property string $group
 */
class AppSetting extends Model
{
    protected $guarded = ['updated_at', 'id'];

    /**
     * 
     * @param mixed $query 
     * @param mixed $groupName 
     * @return mixed 
     */
    public function scopeGroup($query, $groupName)
    {
        return $query->whereGroup($groupName);
    }

    public function getTable()
    {
        return config('app-settings.table', 'settings');     
    }
}
