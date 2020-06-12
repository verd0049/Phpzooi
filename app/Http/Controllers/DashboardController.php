<?php

namespace App\Http\Controllers;

use DB;
use App\Dashboard;

class DashboardController extends Controller {

    public function show($slug){
        return view('dashboard', [
            'dashboard'=> Dashboard::where('slug', $slug)->firstOrFail()
        ]);
    }
}
