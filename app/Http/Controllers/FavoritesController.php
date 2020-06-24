<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoritesController extends Controller
{
    //micropostsをお気に入りにするアクション。
    public function store($id)
    {
        // 認証済みユーザ（閲覧者）が、 id 投稿をお気に入りにする。
        \Auth::user()->favorite($id);
        // 前のURLへリダイレクトさせる
        return back();
    }
    
    //お気に入りを外すアクション。
    
    public function destroy($id)
    {
        // 認証済みユーザ（閲覧者）が、 id 投稿をお気に入り解除
        \Auth::user()->unfavorite($id);
        // 前のURLへリダイレクトさせる
        return back();
    }
    
}
