<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Illuminate\Http\Request;
//テゴリを取り扱うCategoryモデルをshopController.php内で使用することができます。
use App\Models\Category;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //indexアクションでは作成されたすべてのレストランを表示さる
        //$shops = Shop::all();は、Shopモデルを使ってすべての商品データをデータベースから取得しています。そして、取得したデータを変数$shopsに代入.compact('shop')で商品のデータが保存されている変数を、ビューへ渡します。

        $shops = Shop::all();
 
        return view('shops.index', compact('shops'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$categoriesにすべてのカテゴリを保存し、ビューへと渡す
        $categories = Category::all();
  
        return view('shops.create', compact('categories'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //データを受け取り、レストランデータを保存
        $shop = new Shop();
        $shop->name = $request->input('name');
        $shop->description = $request->input('description');
        $shop->price = $request->input('price');
        //category_idをデータベースに保存
        $shop->category_id = $request->input('category_id');
        $shop->save();

        //データが保存された後、リダイレクト（別のページに移動すること）を行っています。
        //storeアクションはビューを持たないので、この処理を書き忘れると真っ白な画面のまま
        return to_route('shops.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function show(Shop $shop)
    {
        //showアクションでは指定されたレストランの情報
        //view関数を使ってresources\views\shopsディレクトリ内のshow.blade.phpをビューとして使用します。またcompact('shop')で商品のデータが保存されている変数を、ビューへ渡します。

        //showアクションに対応したURLは/shops/:idというURLになります。この:idの部分の値を元に、Laravel側が自動的にデータベースから該当するIDのデータを$shopに渡しています。
        return view('shops.show', compact('shop'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function edit(Shop $shop)
    {
        //editアクションのURLは/shops/:id/editとなっており、showアクションと同じくLaravel側で自動的に該当するデータを取得しています。
        $categories = Category::all();
        //カテゴリの全データが入っている$categories変数をビューに渡す
        return view('shops.edit', compact('shop', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Shop $shop)
    {
        //更新前の商品のデータは$shop変数に渡されています。それを元に、$request内に格納されているフォームに入力した更新後のデータをそれぞれのカラムに渡して上書き

        $shop->name = $request->input('name');
        $shop->description = $request->input('description');
        $shop->price = $request->input('price');
        $shop->category_id = $request->input('category_id');

        //$shop->update();で更新
        $shop->update();

        //shopsというURLへとリダイレクト
        return to_route('shops.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function destroy(Shop $shop)
    {
        //データベースから指定の商品のデータを削除しています。updateやshowアクションと同様に、$shopはLaravel側で自動的に該当する商品のデータを保存しています。
        $shop->delete();

        //shopsというURLへとリダイレクト
        return to_route('shops.index');
    }
}
