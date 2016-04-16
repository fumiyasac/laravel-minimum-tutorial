<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

//モデルの宣言
use App\Topic;

class TopicsController extends Controller
{
  //一覧
  public function index() {
    
    //Topicsテーブルのデータをすべて取得する
    $topics = Topic::all();
    return view('topics.index', compact('topics'));
  }

  //表示
  public function show($id) {
    $topic = Topic::findOrFail($id);
    return view('topics.show', compact('topic'));
  }

  //追加
  public function add() {
    return view('topics.add');
  }

  public function create(Request $request) {

    //バリデーションを行う（正常：新規データ1件登録して一覧画面へ, 異常：メッセージを表示して入力画面へ）
    //バリデーションメッセージは resources/lang/ja/validation.phpを参照
    $this->validate($request, [
      'title' => 'required|min:3', //最低3文字以上
      'body' => 'required',
      'eyecatch' => 'image|max:2000',
      'published' => 'required|date',
    ]);
    
    //新規データ1件登録
    Topic::create($request->all());
    
    //一覧画面へリダイレクト
    \Session::flash('flash_message', 'Topic successfully added!');
    return redirect('/');
  }

  //編集
  public function edit($id) {
    
    //$idに該当するデータを1件取得する
    $topic = Topic::findOrFail($id);
    return view('topics.edit', compact('topic'));
  }
  
  public function update($id, Request $request) {
    
    //$idに該当するデータを1件取得する
    $topic = Topic::findOrFail($id);

    //バリデーションを行う（正常：新規1件登録して一覧画面へ, 異常：メッセージを表示して入力画面へ）
    //バリデーションメッセージは resources/lang/ja/validation.phpを参照
    $this->validate($request, [
      'title' => 'required|min:3', //最低3文字以上
      'body' => 'required',
      'eyecatch' => 'image|max:2000',
      'published' => 'required|date',
    ]);

    //既存データ1件更新
    $topic->fill($request->all())->save();
    
    //一覧画面へリダイレクト
    \Session::flash('flash_message', 'Topic successfully edited!');
    return redirect('/');
  }

  //削除
  public function delete(Request $request) {
    
    //削除対象の$idを取得する
    $target_id = $request->id;
    
    //$idの形式が正しいかのチェック（注意：この部分は実際に使う場合はより厳密なチェックが必要）
    if ($target_id && is_numeric($target_id)) {
      
      //既存データ1件削除
      $topic = Topic::findOrFail($target_id);
      $topic->delete();
      
      //削除成功時のメッセージを表示
      \Session::flash('flash_message', 'Topic successfully deleted!');
            
    } else {
    
      //削除失敗時のメッセージを表示
      \Session::flash('flash_message', 'Topic delete failed! Because something went wrong.');
    }
    
    //一覧画面へリダイレクト
    return redirect('/');
  }

}
