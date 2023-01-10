<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Plan extends Model
{
    /**
     * Get all of the comments for the Plan
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function yearlysub(): HasMany
    {
        return $this->hasMany(Yearlysub::class)->latest();
    }
}
