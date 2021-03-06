<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Project extends Model
{	
	use Sluggable;

	/**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

	//every project belongs to 1 user
    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    //use slug to get project
    public function getRouteKeyName() {
        return 'slug';
    }
}
