<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\Goal;
use Auth;
use App\Models\User;
use App\Models\Action;


class GoalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    $goals = Goal::where('user_id', Auth::user()->id)
        ->orderBy('updated_at', 'desc')
        ->take(1)
        ->get();
        
    $action = Action::where('user_id', Auth::user()->id)->first();

    return view('goal.index', compact('goals', 'action'));
}
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    return response()->view('goal.create');
    }

    /**
     * Store a newly created resource in storage.
     */
public function store(Request $request)
{
  // バリデーション
  $validator = Validator::make($request->all(), [
    'leadership1' => 'required | max:191',
    'leadership2' => 'required | max:191',
    'communication1' => 'required | max:191',
    'communication2' => 'required | max:191',
    'issue1' => 'required | max:191',
    'issue2' => 'required | max:191',
   
     ]);
  // バリデーション:エラー
  if ($validator->fails()) {
    return redirect()
      ->route('goal.create')
      ->withInput()
      ->withErrors($validator);
  }
    $data = $request->all();
    $data['user_id'] = Auth::id();

    // create()でデータをデータベースに保存
    $result = Goal::create($data);

  // ルーティング「goal.index」にリクエスト送信（一覧ページに移動）
  return redirect()->route('goal.index');
}

    /**
     * Display the specified resource.
     */
public function show()
{
    $latestGoals = Goal::select('user_id', \DB::raw('MAX(created_at) as latest_created_at'))
        ->groupBy('user_id');

    $goals = Goal::joinSub($latestGoals, 'latest_goals', function ($join) {
        $join->on('goals.user_id', '=', 'latest_goals.user_id');
        $join->on('goals.created_at', '=', 'latest_goals.latest_created_at');
    })->select('goals.*')
      ->orderBy('goals.user_id')
      ->get();

    return response()->view('goal.show', compact('goals'));
}


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
  $goal = Goal::find($id);
  return response()->view('goal.edit', compact('goal'));
}
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
{
  //バリデーション
  $validator = Validator::make($request->all(), [
    'leadership1' => 'required | max:191',
    'leadership2' => 'required | max:191',
    'communication1' => 'required | max:191',
    'communication2' => 'required | max:191',
    'issue1' => 'required | max:191',
    'issue2' => 'required | max:191',
  ]);
  //バリデーション:エラー
  if ($validator->fails()) {
    return redirect()
      ->route('goal.edit', $id)
      ->withInput()
      ->withErrors($validator);
  }
  //データ更新処理
  $result = Goal::find($id)->update($request->all());
  return redirect()->route('goal.index');
}
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    
  
public function mydata()
{
    // 自分以外のユーザーの最新の目標を各ユーザーごとに1つずつ取得
    $goals = Goal::where('user_id', '<>', Auth::user()->id) // 自分以外のユーザーの目標のみ取得
        ->selectRaw('DISTINCT ON(user_id) *')
        ->orderBy('user_id')
        ->orderBy('created_at', 'desc')
        ->get();

    return response()->view('goal.index', compact('goals'));
}
    
    
    
    
}
