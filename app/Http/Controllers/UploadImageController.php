<?php

namespace App\Http\Controllers\Admin; // 既存の名前空間にサブ名前空間を追加

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
class UploadImageController extends Controller
{
    public function upload(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // 画像のバリデーションルール
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $path = $image->storeAs('uploads', $imageName, 'public'); // publicディスクに画像を保存

            // ここでデータベースに画像のパスなどを保存する処理を追加できます

            return redirect()->back()->with('success', '画像をアップロードしました。');
        }

        return redirect()->back()->with('error', '画像のアップロードに失敗しました。');
    }
}
