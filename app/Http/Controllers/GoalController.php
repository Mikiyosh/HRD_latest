<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;
use App\Models\Goal;

class GoalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
  $goals = Goal::getAllOrderByUpdated_at();
  return response()->view('goal.index',compact('goals'));
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
  // create()は最初から用意されている関数
  // 戻り値は挿入されたレコードの情報
  $result = Goal::create($request->all());
  // ルーティング「goal.index」にリクエスト送信（一覧ページに移動）
  return redirect()->route('goal.index');
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
