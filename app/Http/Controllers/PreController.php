<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\Pre;
use Auth;
use App\Models\User;
use App\Models\Action;


class PreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    $pres = Pre::where('user_id', Auth::user()->id)
        ->orderBy('updated_at', 'desc')
        ->take(1)
        ->get();
  return response()->view('pre.index',compact('pres'));
}
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    return response()->view('pre.create');
    }

    /**
     * Store a newly created resource in storage.
     */
public function store(Request $request)
{
  // バリデーション
  $validator = Validator::make($request->all(), [
    'action1' => 'required | max:191',
    'action2' => 'required | max:191',
    'action3' => 'required | max:191',
    'action4' => 'required | max:191',
    'action5' => 'required | max:191',
    'action6' => 'required | max:191',
    'action7' => 'required | max:191',
    'action8' => 'required | max:191',
    'action9' => 'required | max:191',
    
     ]);
  // バリデーション:エラー
  if ($validator->fails()) {
    return redirect()
      ->route('pre.create')
      ->withInput()
      ->withErrors($validator);
  }
    $data = $request->all();
    $data['user_id'] = Auth::id();

    // create()でデータをデータベースに保存
    $result = Pre::create($data);

  // ルーティング「goal.index」にリクエスト送信（一覧ページに移動）
  return redirect()->route('pre.index');
}

    /**
     * Display the specified resource.
     */
public function show($id)
{
  $pre = Pre::find($id);
  return response()->view('pre.show', compact('pre'));
}


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
  $pre = Pre::find($id);
  return response()->view('pre.edit', compact('pre'));
}
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
{
  //バリデーション
  $validator = Validator::make($request->all(), [
    'action1' => 'required | max:191',
    'action2' => 'required | max:191',
    'action3' => 'required | max:191',
    'action4' => 'required | max:191',
    'action5' => 'required | max:191',
    'action6' => 'required | max:191',
    'action7' => 'required | max:191',
    'action8' => 'required | max:191',
    'action9' => 'required | max:191',
  ]);
  //バリデーション:エラー
  if ($validator->fails()) {
    return redirect()
      ->route('pre.edit', $id)
      ->withInput()
      ->withErrors($validator);
  }
  //データ更新処理
  $result = Pre::find($id)->update($request->all());
  return redirect()->route('pre.index');
}
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    
    


  // 省略


  
  public function mydata()
  {
    // Userモデルに定義したリレーションを使用してデータを取得する．
    $pres = User::query()
      ->find(Auth::user()->id)
      ->userGoals()
      ->orderBy('created_at','desc')
      ->get();
    return response()->view('pre.index', compact('pres'));
  }
    
    
}
