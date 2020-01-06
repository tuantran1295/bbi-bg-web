<?php

namespace App\Http\Controllers;

use App\Province;
use Illuminate\Http\Request;
use App\Company;
use App\Category;

class CompanyController extends Controller
{
    public function index() {
        $categories = Category::all();
        $provinces = Province::all();
        $featured = Company::findMany([5, 7, 14, 22, 30, 40 ,48 ,42 ,47 ,56])->sortBy('name');
        $newConnected = Company::orderBy('created_at', 'desc')->take(10)->get();
        $random = Company::inRandomOrder()->limit(36)->get();
        return view('diadiem', [
            'categories'=> $categories,
            'provinces' => $provinces,
            'featured' => $featured,
            'newConnected' => $newConnected,
            'random' => $random
        ]);
    }

    public function getCompaniesByCategory(Category $category) {
        $categories = Category::all();
        $companies = $category->companies()->get();
        return view('category', [
            'currentCat' => $category,
            'categories'=> $categories,
            'companies' => $companies
        ]);
    }

    public function getCompaniesByProvince(Province $province) {
        $categories = Category::all();
        $companies = $province->companies()->get();
        return view('province', [
            'currentProvince' => $province,
            'categories' => $categories,
            'companies' => $companies
        ]);
    }

    public function show(Company $company) {
        $categories = Category::all();
        $images = $company->images()->get();
        return view('company', [
            'categories'=> $categories,
            'company' => $company,
            'images' => $images
        ]);
    }

    public function search(Request $request) {
        $categories = Category::all();
        $keyword = $request->input('search-keyword');
        $result = Company::where('name', 'LIKE', '%'.$keyword.'%')->get();
        return view('search-result', [
            'categories'=> $categories,
            'result' => $result,
            'keyword' => $keyword
        ]);
    }

    public function all() {
        $categories = Category::all();
        $companies = Company::all();
        return view('all', [
            'categories'=> $categories,
            'companies' => $companies
        ]);
    }

    public function getFeatured() {
        $categories = Category::all();
        $featured = Company::findMany([5, 7, 14, 22, 30, 40 ,48 ,42 ,47 ,56])->sortBy('name');
        return view('featured', [
            'categories' => $categories,
            'companies' => $featured
        ]);
    }

    public function getNewConnected() {
        $categories = Category::all();
        $newConnected = Company::orderBy('created_at', 'desc')->take(10)->get();
        return view('new-connected', [
           'categories' => $categories,
           'companies' => $newConnected
        ]);
    }
 }
