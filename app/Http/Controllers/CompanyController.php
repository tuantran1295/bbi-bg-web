<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use App\Category;

class CompanyController extends Controller
{
    public function index() {
        $companies = Company::all();
        return view('diadiem', ['companies' => $companies]);
    }

    public function getCompaniesByCategory(Category $category) {
        $companies = $category->companies();
        return view('category', ['companies' => $companies]);
    }

    public function show(Company $company) {
        return view('company', compact($company));
    }
}
