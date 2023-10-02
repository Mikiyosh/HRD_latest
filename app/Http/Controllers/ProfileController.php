<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ImageUploadController extends Controller
{
    public function uploadImg(Request $request)
    {
        $img = $request->file('upload_img');
        // 他のコード
    }
}
