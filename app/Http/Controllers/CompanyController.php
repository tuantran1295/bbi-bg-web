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
        $companies = Company::inRandomOrder()->limit(35)->get();
        return view('diadiem', [
            'categories'=> $categories,
            'companies' => $companies,
            'provinces' => $provinces
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
}
