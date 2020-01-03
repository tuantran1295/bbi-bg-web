<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use App\Category;

class CompanyController extends Controller
{
    public function index() {
        $categories = Category::all();
        $companies = Company::inRandomOrder()->limit(35)->get();
        return view('diadiem', ['categories'=> $categories,'companies' => $companies]);
    }

    public function getCompaniesByCategory(Category $category) {
        $categories = Category::all();
        $companies = $category->companies()->get();
        return view('category', ['categories'=> $categories, 'companies' => $companies]);
    }

    public function show(Company $company) {
        $categories = Category::all();
        $images = $company->images()->get();
        return view('company', ['categories'=> $categories, 'company' => $company, 'images' => $images]);
    }
}
