<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// use App\Models\Category;


class Job extends Model {

    protected $table = 'jobs';

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function category(){
        return $this->belongsTo('App\Models\Category');
    }

    public function type(){
        return $this->belongsTo('App\Models\Type');
    }

    // public function scopeSearchKeyword($query, $keyword)
    // {
    //    return $query->where('title', 'LIKE', '%'.$keyword.'%')
    //                 ->orWhere('description', 'LIKE', '%'.$keyword.'%');
    // }

    // // public function scopeSearchDescription($query, $keyword)
    // // {
    // //    return $query->where('description', 'LIKE', '%'.$keyword.'%');
    // // }

    // public function scopeSearchState($query, $state)
    // {
    //    return $query->where('state',"=", $state);
    // }

    // public function scopeSearchCategory($query, $category)
    // {
    //     $category_id = Category::where('name',"=", $category)->first();
    //     $category_id = $category_id->id;       
    //     // return $query->hobby()->where('state',"=", $state);
    //     return $query->where('category_id',"=", $category_id);
    // }

    // public function scopeSearchKeywordAndState($query, $keyword, $state)
    // {
    //     return $query->where('state',"=", $state)
    //                 ->where( function($query) use ($keyword) 
    //                         {
    //                             $query->where('description', 'LIKE', '%'. $keyword .'%')
    //                                   ->orWhere('title', 'LIKE', '%' . $keyword .'%');
    //                         })
    // }

    // public function scopeSearchKeywordAndCategory($query, $keyword, $category)
    // {
    //     $category_id = Category::where('name',"=", $category)->first();
    //     $category_id = $category_id->id;       

    //    return $query->where('title', 'LIKE', '%'.$keyword.'%')
    //                 ->orWhere('description', 'LIKE', '%'.$keyword.'%')
    //                 ->where('category_id',"=", $category_id);
    // }

    // public function scopeSearchKeywordStateAndCategory($query, $keyword, $state, $category)
    // {
    //     $category_id = Category::where('name',"=", $category)->first();
    //     $category_id = $category_id->id;       
        
    //    return $query->where('title', 'LIKE', '%'.$keyword.'%')
    //                 ->orWhere('description', 'LIKE', '%'.$keyword.'%')
    //                 ->where('state',"=", $state)
    //                 ->where('category_id',"=", $category_id);
    // }

     // public function scopeSearchKeyword($query, $keyword)
    // {
    //    return $query->where('title', 'LIKE', '%'.$keyword.'%')
    //                 ->orWhere('description', 'LIKE', '%'.$keyword.'%');
    // }

    // // public function scopeSearchDescription($query, $keyword)
    // // {
    // //    return $query->where('description', 'LIKE', '%'.$keyword.'%');
    // // }

    // public function scopeSearchState($query, $state)
    // {
    //    return $query->where('state',"=", $state);
    // }

    // public function scopeSearchCategory($query, $category)
    // {
    //     $category_id = Category::where('name',"=", $category)->first();
    //     $category_id = $category_id->id;       
    //     // return $query->hobby()->where('state',"=", $state);
    //     return $query->where('category_id',"=", $category_id);
    // }

    // public function scopeSearchKeywordAndState($query, $keyword, $state)
    // {
    //     return $query->where('state',"=", $state)
    //                 ->where( function($query) use ($keyword) 
    //                         {
    //                             $query->where('description', 'LIKE', '%'. $keyword .'%')
    //                                   ->orWhere('title', 'LIKE', '%' . $keyword .'%');
    //                         })
    // }

    // public function scopeSearchKeywordAndCategory($query, $keyword, $category)
    // {
    //     $category_id = Category::where('name',"=", $category)->first();
    //     $category_id = $category_id->id;       

    //    return $query->where('title', 'LIKE', '%'.$keyword.'%')
    //                 ->orWhere('description', 'LIKE', '%'.$keyword.'%')
    //                 ->where('category_id',"=", $category_id);
    // }

//     public function scopeSearchKeywordStateCategory($query, $keyword, $state, $category)
//     {
// // $state = Input::get('states');
//         // $category_id = Category::where('name',"=", $category)->first();
//         // $category_id = $category_id->id;
//         return $query->where('state',"=", $state)
//             ->where('category_id',"=", $category_id)
//             ->where( function($q) use ($keyword) 
//             {
//                 $q->where('description', 'LIKE', '%'. $keyword .'%')
//                       ->orWhere('title', 'LIKE', '%' . $keyword .'%');
//             });

//     }

}