<?php

namespace App\Http\Controllers;

use App\Review;
use Luracast\Restler\RestException;

class Reviews {
    /**
     * Get all reviews
     *
     * return array {@type Review}
     */
    public function index(){
        return Review::all();
    }

    public function get($id){
        if(!$review = Review::find($id)){
            throw new RestException(404, 'review not found');
        }
        return $review;
    }

    public function post(Review $review){
        $review->save();
        return $review;
    }

    public function delete($id){
        if(!$review = Review::find($id)){
            throw new RestException(404, 'review not found');
        }
        $review->delete();
        return ['success'=>true];
    }

}
