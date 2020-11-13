<?php
use App\Models\Post;
use App\Models\Comment;
use App\Models\Vote;
use App\Models\Example;
use App\Models\ExampleFacade;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', function () {

    

    // return view('welcome');
});

Route::get('/query', function(){

    // $post = Post::find(12);

    // $post->comments;


    // $comment = Comment::find(1);

    // return $comment->post;


    // simple withcount() : 
    // this will display 1 for each post record that has comments and 0 for those that does not have comment. o/p- 00000000001111111111 

    // $posts =  Post::withCount('comments')->get();

    // foreach($posts as $post)
    // {
    //     echo $post->comments_count;
    // }


    // withCount() with additional constraints: 

    //This will display 1 as the record meets the query.

    // $comment = Comment::withCount(['vote','post' => function(Builder $query){
    //     $query->where('created_at', null);
    // }])->get();

    // echo $comment[0]->post_count;

    // $posts = Post::select(['name'])->withCount('comments')->get();

    // echo $posts[0]->comments_count;

    // $posts = Post::withCount('vote')->get();

    // foreach($posts as $post)
    // {
    //     echo $post->vote_count;
    // }


            // withCount with multiple relations:

    // $posts = Post::withCount(['vote','comments'=> function($query){
    //     $query->where('created_at', '=', null);
    // }])->get();

    // echo $posts[0]->comments_count;
    // echo $posts[0]->vote_count;



    // select with withCount() query : 

    // $post = Post::select('name', 'description')->withCount('comments')->get();

    // echo $post[0]->name;
    // echo $post[0]->comments_count;



    //count() with eager load query : 

    // $post = Post::all();
    
    // return $post->loadCount('comments');
    

    // additional constraints in eager loading : 

    // $post = Post::first();

    // return $post->loadCount(['vote'=> function($query){
    //     $query->where('post_id', 11);
    // }])->get();


    // eager load practice : 

    // $comments = Comment::first();

    // return $comments->loadCount('post');


    // $vote = Vote::first();

    // return $vote->loadCount('comment');


    //withSum query : 

    // $posts = Post::withSum('comments','vote')->get();

    // echo $posts->comments_sum_vote;
    

    // $post = Post::withSum('comments','desc')->get();

    // $posts = Post::first();

    // return $posts->loadSum('vote','comments');


    // return $post = Post::has('comments')
    //         // ->popular()
    //         // ->active()
    //         ->get();
});