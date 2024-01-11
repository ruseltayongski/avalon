<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Services;

class ServicesController extends Controller
{
    public function index(Request $request) {
        $page = $request->page ?? 1; 
        $perPage = 9; 
    
        $offset = ($page - 1) * $perPage;
    
        $services = Services::offset($offset)->limit($perPage)->get();
    
        // Calculate total pages
        $totalServices = Services::count();
        $totalPages = ceil($totalServices / $perPage);

        // if($request->page) {
        //     return response()->json([
        //         'services' => $services,
        //         'totalPages' => $totalPages,
        //         'currentPage' => $page,
        //     ]);
        // }
    
        return view('service2', compact('services', 'totalPages', 'page'));
    }    
}
