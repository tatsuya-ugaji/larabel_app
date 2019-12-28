<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class CategoryController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('spRedirect');
    }

    public function show(Request $request) {
        $user = Auth::user();
        $date = Carbon::now();
        $category = Category::getCategory($user->id);
        $params = [
            'user' => $user,
            'date' => $date,
            'category' => $category,
        ];
        return view('category.show', $params);
    }

    public function updateCategory(Request $request) {
        $user = Auth::user();
        $form = $request->all();
        unset($form['_token']);
        foreach ($form as $key => $value) {
            $category = Category::where('user_id',$user->id)->where('name',$key)->first();
            $category->use_flg = $value;
            $category->save();
        }

        return redirect('home');
    }

    public function getCategoryFlg0Json()
    {
        $user = Auth::user();
        $category = Category::getCategoryFlg0($user->id);
        return $category->toJson();
    }

    public function getCategoryFlg1Json()
    {
        $user = Auth::user();
        $category = Category::getCategoryFlg1($user->id);
        return $category->toJson();
    }
}
