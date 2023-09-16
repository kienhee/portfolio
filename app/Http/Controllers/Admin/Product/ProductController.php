<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $result = Product::query();

        if ($request->has('keywords') && $request->keywords != null) {
            $result->where('name', 'like', '%' . $request->keywords . '%')
                ->orWhere('product_code', 'like', '%' . $request->keywords . '%');
        }
        if ($request->has('category_id') && $request->category_id != null) {
            $result->where('category_id', '=',  $request->category_id);
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
        $products = $result->paginate(10);
        return view('admin.product.index', compact('products'));
    }

    public function add()
    {
        return view('admin.product.add');
    }
    public function store(Request $request)
    {


        $validate = $request->validate([
            "name" => "required|max:255|unique:products,name",
            "slug" => "required|unique:products,slug",
            "description" => "required",
            "content" => "required",
            "technologies" => "required",
            "category_id" => "required|numeric",
            "cover" => "required",
            "link" => "required",
        ], [
            "name.required" => "Vui lòng nhập trường này!",
            "slug.required" => "Vui lòng nhập trường này!",
            "description.required" => "Vui lòng nhập trường này!",
            "content.required" => "Vui lòng nhập trường này!",
            "link.required" => "Vui lòng nhập trường này!",
            "category_id.required" => "Vui lòng chọn danh mục!",
            "technologies.required" => "Vui lòng chọn công nghệ!",
            "cover.required" => "Vui lòng thêm ảnh bìa!",
            "category_id.numeric" => "Giá trị phải là số!",
            "name.max" => "Tối đa :max kí tự!",
            "name.unique" => "Tên này đã được sử dụng!",
            "slug.unique" => "URL này đã tồn tại!",
        ]);
        if ($request->hasFile('cover')) {
            $path_img =  $request->file('cover')->store('public/photos/1');
            // Thay thế public thành storage trong chuỗi path
            $validate['cover'] = str_replace("public", getenv('APP_URL') . "/storage", $path_img);
        }

        $check = Product::insert($validate);
        if ($check) {
            return back()->with('msgSuccess', 'Thêm thành công');
        }
        return back()->with('msgError', 'Thêm thất bại!');
    }
    public function edit(Product $product)
    {
        return view('admin.product.edit', compact('product'));
    }
    public function update(Request $request, $id)
    {

        $validate = $request->validate([
            "name" => "required|max:255|unique:products,name," . $id,
            "slug" => "required|unique:products,slug," . $id,
            "description" => "required",
            "content" => "required",
            "technologies" => "required",
            "category_id" => "required|numeric",
            "cover" => "required",
            "link" => "required",
        ], [
            "name.required" => "Vui lòng nhập trường này!",
            "slug.required" => "Vui lòng nhập trường này!",
            "description.required" => "Vui lòng nhập trường này!",
            "content.required" => "Vui lòng nhập trường này!",
            "link.required" => "Vui lòng nhập trường này!",
            "category_id.required" => "Vui lòng chọn danh mục!",
            "technologies.required" => "Vui lòng chọn công nghệ!",
            "cover.required" => "Vui lòng thêm ảnh bìa!",
            "category_id.numeric" => "Giá trị phải là số!",
            "name.max" => "Tối đa :max kí tự!",
            "name.unique" => "Tên này đã được sử dụng!",
            "slug.unique" => "URL này đã tồn tại!",
        ]);
        if ($request->hasFile('cover')) {
            $path_img =  $request->file('cover')->store('public/photos/1');
            // Thay thế public thành storage trong chuỗi path
            $validate['cover'] = str_replace("public", getenv('APP_URL') . "/storage", $path_img);
        }

        $check = Product::where('id', $id)->update($validate);
        if ($check) {
            return back()->with('msgSuccess', 'Cập nhật thành công');
        }
        return back()->with('msgError', 'Cập nhật thất bại!');
    }
    public function softDelete($id)
    {
        $check =
            Product::destroy($id);
        if ($check) {
            return back()->with('msgSuccess', 'Đổi trạng thái thành công');
        }
        return back()->with('msgError', 'Đổi trạng thái thất bại!');
    }
    public function restore($id)
    {
        $check = Product::onlyTrashed()->where('id', $id)->restore();
        if ($check) {
            return back()->with('msgSuccess', 'Khôi phục dùng thành công');
        }
        return back()->with('msgError', 'Khôi phục dùng thất bại!');
    }
    public function forceDelete($id)
    {
        $check = Product::onlyTrashed()->where('id', $id)->forceDelete();
        if ($check) {
            return back()->with('msgSuccess', 'Xóa thành công');
        }
        return back()->with('msgError', 'Xóa thất bại!');
    }
}
