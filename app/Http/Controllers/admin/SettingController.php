<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function edit($id) {
        $category = FoodCategory::find($id);

        return view('admin/food-categories/edit', [
            'category' => $category
        ]);
    }

    public function update($id) {
        request()->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'image_url' => ['string']
            ]);

        $category = FoodCategory::find($id);
        $category->title = request('title');
        $category->description = request('description');
        $category->image_url = request('image_url');
        $category->save();

        return redirect('/admin/food-categories');
    }
}
