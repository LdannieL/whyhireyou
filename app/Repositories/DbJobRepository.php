<?php namespace App\Repositories;

use App\Models\Job;
use App\Models\Category;
use \DB;

 class DbJobRepository {
    //search functionality out of conntroller
    public function SearchKeyword($keyword, $state, $category)
    {
        return $jobs = Job::where('title', 'LIKE', '%'. $keyword .'%')
                ->orWhere('description', 'LIKE', '%'. $keyword .'%')
                ->paginate(3);
    }   

    public function SearchState($keyword, $state, $category)
    {
        return $jobs = Job::where('state',"=", $state)
                ->paginate(3); 
    }

    public function SearchCategory($keyword, $state, $category)
    {
        $category_id = Category::where('name',"=", $category)->first();
        $category_id = $category_id->id;
        return $jobs = Job::where('category_id',"=", $category_id)
                ->paginate(3); 
    }

    public function SearchKeywordState($keyword, $state, $category)
    {
        return $jobs = DB::table('jobs')
            ->where('state',"=", $state)
            ->where( function($query) use ($keyword) 
            {
                $query->where('description', 'LIKE', '%'. $keyword .'%')
                      ->orWhere('title', 'LIKE', '%' . $keyword .'%');
            })
            ->paginate(3);

    }

    public function SearchKeywordCategory($keyword, $state, $category)
    {
        $category_id = Category::where('name',"=", $category)->first();
        $category_id = $category_id->id;
        return $jobs = DB::table('jobs')
            ->where('category_id',"=", $category_id)
            ->where( function($query) use ($keyword) 
            {
                $query->where('description', 'LIKE', '%'. $keyword .'%')
                      ->orWhere('title', 'LIKE', '%' . $keyword .'%');
            })
            ->paginate(3);

    }

    public function SearchStateCategory($keyword, $state, $category)
    {
        $category_id = Category::where('name',"=", $category)->first();
        $category_id = $category_id->id;
        return $jobs = Job::where('state',"=", $state)
                ->where('category_id',"=", $category_id)
                ->paginate(3);

    }

    public function SearchKeywordStateCategory($keyword, $state, $category)
    {
        $category_id = Category::where('name',"=", $category)->first();
        $category_id = $category_id->id;
        return $jobs = DB::table('jobs')
            ->where('state',"=", $state)
            ->where('category_id',"=", $category_id)
            ->where( function($query) use ($keyword) 
            {
                $query->where('description', 'LIKE', '%'. $keyword .'%')
                      ->orWhere('title', 'LIKE', '%' . $keyword .'%');
            })
            ->paginate(3);

    }


 }