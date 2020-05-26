<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Component extends Model
{
    protected $guarded = [];

    public function getRouteKeyName() {
        return 'slug';
    }

    public function ratingAverage() {
        $records = Rating::where('component_id', $this->id)->get();
        $count = $records->sum('points') / $records->count();
        return $count;
    }

    public function user() {
        return $this->belongsTo('App\User');    
    }

    public function UserRating() {
        $rating = Rating::select('points')->where([
            'component_id' => $this->id, 
            'user_id' => auth()->id()
        ])->first();
    
        return $rating->points;
    }

    public function path() {
        return '/component/' . $this->slug;
    }
}
