<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function addCategory(Request $request)
    {
        try {

            if (!$request->has("name") || $request->name == null) {
                return response()->json([
                    "status" => "failed",
                    "msg" => "Name is required."
                ]);
            }
            $name = $request->name;
            $description = $request->description;

            $logo = $request->file("logo");
            $fileName = "";
            if ($logo) {
                $fileName = date('h-m-y-h-i-s') . '-' . $logo->getClientOriginalName();
                $logo->move("image_upload",$fileName);
            }

            $category = new Category();
            $category->name = $name;
            $category->description = $description;
            $category->logo = $fileName;
            $category->save();

            return response()->json([
                "status" => "success",
                "msg" => "Category save success."
            ]);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
