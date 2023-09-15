<?php

namespace App\Http\Controllers\Admin\Team;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index(Request $request)
    {

        $result = Team::query();

        if ($request->has('keywords') && $request->keywords != null) {
            $result->where('name', 'like', '%' . $request->keywords . '%');
        }

        if ($request->has('sort') && $request->sort != null) {
            $result->orderBy('created_at', $request->sort);
        } else {
            $result->orderBy('created_at', 'desc');
        }
        if ($request->has('status') && $request->status != null && $request->status == 'active') {
            $result->where('deleted_at', "=", null);
        } elseif ($request->has('status') && $request->status != null && $request->status == 'inactive') {
            $result->onlyTrashed();
        } else {
            $result->withTrashed();
        }
        $teams = $result->paginate(20);
        return view('admin.team.index', compact('teams'));
    }
    public function add()
    {
        return view('admin.team.add');
    }
    public function store(Request $request)
    {
        // dd($request->all());
        $validate = $request->validate([
            'name' => 'required|max:50',
            'description' => 'required|max:225',
            'avatar' => 'required|image',
        ], [
            "name.required" => "Vui lòng nhập trường này",
            "avatar.required" => "Vui lòng thêm ảnh!",
            "name.max" => "Tối đa :max kí tự",
            "description.required" => "Vui lòng nhập trường này",
            "description.max" => "Tối đa :max kí tự",
            'avatar.image' =>  'Chỉ được phép là ảnh!',
        ]);
        if ($request->hasFile('avatar')) {
            $path_img =  $request->file('avatar')->store('public/photos/1/profile');
            // Thay thế public thành storage trong chuỗi path
            $validate['avatar'] = str_replace("public", getenv('APP_URL') . "/storage", $path_img);
        }
        $check = Team::insert($validate);
        if ($check) {
            return back()->with('msgSuccess', 'Thêm thành công');
        }
        return back()->with('msgError', 'Thêm thất bại!');
    }
    public function edit(Team $member)
    {
        return view('admin.team.edit', compact('member'));
    }
    public function update(Request $request, $id)
    {
        // dd($request->all());
        $validate = $request->validate([
            'name' => 'required|max:50',
            'description' => 'required|max:225',
            'avatar' => 'required',
        ], [
            "name.required" => "Vui lòng nhập trường này",
            "avatar.required" => "Vui lòng thêm ảnh!",
            "name.max" => "Tối đa :max kí tự",
            "description.required" => "Vui lòng nhập trường này",
            "description.max" => "Tối đa :max kí tự",
        ]);
        if ($request->hasFile('avatar')) {
            $path_img =  $request->file('avatar')->store('public/photos/1/profile');
            // Thay thế public thành storage trong chuỗi path
            $validate['avatar'] = str_replace("public", getenv('APP_URL') . "/storage", $path_img);
        }
        $check = Team::where('id', $id)->update($validate);
        if ($check) {
            return back()->with('msgSuccess', 'Thêm thành công');
        }
        return back()->with('msgError', 'Thêm thất bại!');
    }
    public function softDelete($id)
    {
        $check =
            Team::destroy($id);
        if ($check) {
            return back()->with('msgSuccess', 'Đổi trạng thái thành công');
        }
        return back()->with('msgError', 'Đổi trạng thái thất bại!');
    }
    public function restore($id)
    {
        $check = Team::onlyTrashed()->where('id', $id)->restore();
        if ($check) {
            return back()->with('msgSuccess', 'Khôi phục dùng thành công');
        }
        return back()->with('msgError', 'Khôi phục dùng thất bại!');
    }
    public function forceDelete($id)
    {

        $check = Team::onlyTrashed()->where('id', $id)->forceDelete();
        if ($check) {
            return back()->with('msgSuccess', 'Xóa thành công');
        }
        return back()->with('msgError', 'Xóa thất bại!');
    }
}
