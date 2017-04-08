<?php

namespace App\Http\Controllers;

use App\Accounts;
use App\Http\Requests\Post;
use App\Posts;
use App\Users;
use DB;
use Dotenv\Validator;
use Illuminate\Http\Request;

class PostsController extends Controller
{

    protected $users;

    public function __construct(Users $users)
    {
        $this->users = $users;
    }

    //
    public function create(Request $request){

        $data = $request->all();
        $post = Posts::create($data);
        dd($post);
    }

    public function getPost($id){
        DB::enableQueryLog();
        $user = DB::getQueryLog();
//        $account = Accounts::find(1)->with('user')->get();
        $user = Users::select('id','name')->where(['id'=>3])->with('posts')->get();
        $user = Users::where(['id'=>3])->with(['posts'=>function($query){
            $query->select('users_id','title');
        }])->get();
        dd($user->toArray());
        dd(DB::getQueryLog());
    }

    public function getUser(Request $request){

        $validator = Validator::make($request->all(), [
            'title' => 'required|unique:posts|max:255',
            'body' => 'required',
        ],[
            'title' => 'title is required',
            'body' => 'title is required'
        ]);

        if ($validator->fails()) {
          dd($validator->errors());
        }



    }
}
