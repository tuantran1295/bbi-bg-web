<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;

class CompanyController extends Controller
{
    public function index() {
        $companies = Company::all();
        return view('diadiem', ['companies' => $companies]);
    }
}
