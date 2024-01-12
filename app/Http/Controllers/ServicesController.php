<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Services;

class ServicesController extends Controller
{
    public function index(Request $request) {
        //return $request->all();
        $page = $request->page ?? 1; 
        $perPage = 9; 
    
        $offset = ($page - 1) * $perPage;
    
        $services = Services::offset($offset)->limit($perPage);
        if($request->category && $request->category != 'all') {
            $services = $services->where("category", $request->category);
        }

        $services = $services->get();
    
        // Calculate total pages
        $totalPages = new Services();
        if($request->category && $request->category != 'all') {
            $totalPages = $totalPages->where("category", $request->category);
        }
        $totalServices = $totalPages->count();
        $totalPages = ceil($totalServices / $perPage);

        if($request->page) {
            return response()->json([
                'services' => $services,
                'totalPages' => $totalPages,
                'currentPage' => $page,
            ]);
        }
    
        return view('service2', compact('services', 'totalPages', 'page'));
    }    
}
