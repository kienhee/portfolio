<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function update(Request $request, $id)
    {
        if (Auth::user()->id != $id) {
            return abort(401);
        }
        // dd($request->all());
        $validate = $request->validate([
            'avatar' =>  'image',
            'full_name' => 'required|max:50',
            'email' => 'required|max:50',
            'phone_number' => 'required|max:15',
            'fb' => 'required',
            'ins' => 'required',
            'linkedin' => 'required',
            'web' => 'required',
            'address' => 'required',
            'description' => 'required|max:255',
            'content' => 'required',
            'skills' => 'required',
            'cv' => 'required',
        ], [
            'full_name.required' => 'Vui lòng nhập trường này!',
            'email.required' => 'Vui lòng nhập trường này!',
            'phone_number.required' => 'Vui lòng nhập trường này!',
            'fb.required' => 'Vui lòng nhập trường này!',
            'ins.required' => 'Vui lòng nhập trường này!',
            'linkedin.required' => 'Vui lòng nhập trường này!',
            'web.required' => 'Vui lòng nhập trường này!',
            'address.required' => 'Vui lòng nhập trường này!',
            'description.required' => 'Vui lòng nhập trường này!',
            'content.required' => 'Vui lòng nhập trường này!',
            'skills.required' => 'Vui lòng nhập trường này!',
            'cv.required' => 'Vui lòng nhập trường này!',
            // 
            'avatar.image' =>  'Chỉ được phép là ảnh!',
            // 
            'full_name.max' => 'Giới hạn :max kí tự!',
            'email.max' => 'Giới hạn :max kí tự!',
            'phone_number.max' => 'Giới hạn :max kí tự!',
            'description.max' => 'Giới hạn :max kí tự!',
        ]);
        if ($request->hasFile('avatar')) {
            $path_img =  $request->file('avatar')->store('public/photos/1/profile');
            // Thay thế public thành storage trong chuỗi path
            $validate['avatar'] = str_replace("public", getenv('APP_URL') . "/storage", $path_img);
        }
        $check = User::where('id', $id)->update($validate);
        if ($check) {
            return back()->with('msgSuccess', 'Cập nhật thành công');
        }
        return back()->with('msgError', 'Cập nhật thất bại!');
    }

    public function AccountSetting()
    {
        return view('admin.user.Account');
    }
}
