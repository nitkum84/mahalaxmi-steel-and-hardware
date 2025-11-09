<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\PropertyCategory;
use App\Models\Log;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function storeBlogCategory(Request $request){
        $validatedData = $request->validate([
            'blog_category_name' => 'required|string|max:255|unique:blog_categories',
        ]);
        // dd($request->all());
        // Create a new BlogCategory instance
        $blogCategory = new BlogCategory();
        $blogCategory->blog_category_name = $validatedData['blog_category_name'];
        $blogCategory->blog_category_slug = $slug = \Illuminate\Support\Str::slug($validatedData['blog_category_name'], '-');
        $blogCategory->save();
        Log::create([
            'action' => 'Admin created blog category',
            'description' => 'Blog category titled "' . $blogCategory->blog_category_name . '" was created by admin',
            // 'user_id' => Auth::id()
            // 'user_id' => '1'
        ]);
        return back()->with('success','Blog Category Created Successfully !');
    }
    public function updateBlogCategories(Request $request, $id){
        $category = BlogCategory::find($id);
        if (!$category) {
            return response()->json(['error' => 'Category not found'], 404);
        }
        $field = $request->input('field');
        $value = $request->input('value');
        $category->$field = $value;
        if ($field === 'blog_category_name') {
            $category->blog_category_slug = Str::slug($value, '-');
        }
        // $category->$field = $value;
        $category->save();
        Log::create([
            'action' => 'Admin updated blog category',
            'description' => 'Blog category titled "' . $category->blog_category_name . '" was updated by admin',
            // 'user_id' => Auth::id()
            // 'user_id' => '1'
        ]);
        return response()->json(['success' => 'Category updated successfully']);
    }
    public function deleteBlogCategories($id){
        $blogCategory = BlogCategory::findOrFail($id);
        $blogCategory->delete();
        Log::create([
            'action' => 'Admin Deleted blog category',
            'description' => 'Blog category titled "' . $blogCategory->blog_category_name . '" was deleted by admin',
            // 'user_id' => Auth::id()
            // 'user_id' => '1'
        ]);
        Session::flash('success', 'Blog category deleted successfully.');
        return response()->json(['message' => 'Blog category deleted successfully.', 200]);
    }
    public function store(Request $request){
        $validatedData = $request->validate([
            'blog_category' => 'required',
            'blog_creator' => 'required|string|max:255',
            'blog_head' => 'required|string|max:255',
            'blog_sub_head' => 'required|string|max:255',
            'blog_img' => 'required|mimes:jpeg,png,jpg,webp|max:2048',
            'blog_desc' => 'required|string',
            'blog_seo_title' => 'required|string|max:255',
            'blog_seo_desc' => 'required|string',
        ]);

        $blog = new Blog();
        $blog->blog_category = $validatedData['blog_category'];
        $blog->blog_creator = $validatedData['blog_creator'];
        $blog->blog_head = $validatedData['blog_head'];
        $blog->blog_sub_head = $validatedData['blog_sub_head'];

        if ($request->hasFile('blog_img')) {
            $imageName = uniqid() . '.' . $request->file('blog_img')->extension();
            $request->file('blog_img')->move(public_path('uploads'), $imageName);
        } else {
            $imageName = 'default.jpg';
        }
        $blog->blog_desc = $validatedData['blog_desc'];
        $blog->blog_seo_title = $validatedData['blog_seo_title'];
        $blog->blog_seo_desc = $validatedData['blog_seo_desc'];
        $blog->blog_slug = $slug = \Illuminate\Support\Str::slug($request->blog_head, '-');
        $blog->blog_img = $imageName;
        $blog->save();
        Log::create([
            'action' => 'Admin Created Blog',
            'description' => 'Blog titled "' . $blog->blog_head . '" was created by admin',
            // 'user_id' => Auth::id()
            // 'user_id' => '1'
        ]);
        return back()->with('success','Blog Created Successfully !');
    }
    public function view(Request $request, $id){
        $blog = Blog::findOrFail($id);
        $title = $blog->blog_head . " Update | Admin - MVCPL";
        $desc = "";
        $categories = BlogCategory::get();
        return view('admin.front.create-blog', ['blog' => $blog,'edit' => TRUE,'title' => $title,'desc' => $desc,'categories' => $categories]);
    }
    public function update(Request $request, $id){

        $validatedData = $request->validate([
            'blog_category' => 'required',
            'blog_creator' => 'required|string|max:255',
            'blog_head' => 'required|string|max:255',
            'blog_sub_head' => 'required|string|max:255',
            'blog_img' => 'nullable|mimes:jpeg,png,jpg,webp|max:2048',
            'blog_desc' => 'required|string',
            'blog_seo_title' => 'required|string|max:255',
            'blog_seo_desc' => 'required|string',
        ]);

        $blog = Blog::findOrFail($id);

        if ($request->hasFile('blog_img')) {
            if ($blog->blog_img) {
                Storage::delete($blog->blog_img);
            }
            $imageName = uniqid().'.'.$request->blog_img->extension();
            $request->blog_img->move(public_path('uploads'), $imageName);
            $blog->blog_img = $imageName;
        }
        $blog->blog_category = $validatedData['blog_category'];
        $blog->blog_creator = $validatedData['blog_creator'];
        $blog->blog_head = $validatedData['blog_head'];
        $blog->blog_sub_head = $validatedData['blog_sub_head'];
        $blog->blog_desc = $validatedData['blog_desc'];
        $blog->blog_seo_title = $validatedData['blog_seo_title'];
        $blog->blog_seo_desc = $validatedData['blog_seo_desc'];
        $blog->blog_slug = $slug = \Illuminate\Support\Str::slug($request->blog_head, '-');
        $blog->save();
        $edit = TRUE;
        Log::create([
            'action' => 'Admin Edited Blog',
            'description' => 'Blog titled "' . $blog->blog_head . '" was edited by admin',
            // 'user_id' => Auth::id()
            // 'user_id' => '1'
        ]);
        return back()->with('success','Blog Edit Successfully !');

    }
    public function delete($id){
        $blog = Blog::findOrFail($id);
        $blog->delete();
        Log::create([
            'action' => 'Admin Deleted Blog',
            'description' => 'Blog titled "' . $blog->blog_head . '" was deleted by admin',
            // 'user_id' => Auth::id()
            // 'user_id' => '1'
        ]);
        Session::flash('success', 'Blog deleted successfully.');
        return response()->json(['message' => 'Blog deleted successfully.', 200]);
    }

}
