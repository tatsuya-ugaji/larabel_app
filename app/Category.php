<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Category extends Model
{
    protected $guarded = array('id');

    public static $rules = [
        'person_id' => 'required',
        'category_name' => 'required',
        'use_id' => 'boolean',
    ];

    public static function categorySave($user_id)
    {
        $params = array('給料','家賃','水道光熱費','通信費','食費',
                        '日用品','交際費','趣味','衣服','美容',
                        '医療費','その他');

        foreach ($params as $param) {
            $category = new Category;
            $category->user_id = $user_id;
            $category->name = $param;
            $category->use_flg = 1;
            if($param === '給料'){
                $category->bp_flg = 0;
            }else{
                $category->bp_flg = 1;
            }
            $category->save();
        }
    }

    public static function getCategory($user_id)
    {
        return Category::where('user_id', $user_id)->where('use_flg', 1)->get();
    }

    public static function getCategoryEdit($user_id,$category_name)
    {
        $category = Category::where('user_id', $user_id)->where('use_flg', 1)->get();
        $select_c = Category::where('user_id', $user_id)->where('name',$category_name)->first();
        foreach ($category as $item) {
            if ($item->name == $select_c->name) {
                return $category;
            }
        }
        $category[] = $select_c;
        return $category;
    }

    public static function getCategoryFlg0($user_id)
    {
        return Category::where('user_id', $user_id)->where('use_flg', 0)->get();
    }

    public static function getCategoryFlg1($user_id)
    {
        return Category::where('user_id', $user_id)->where('use_flg', 1)->get();
    }
}
