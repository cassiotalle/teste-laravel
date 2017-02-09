<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

class SiteController extends Controller
{
    
    public function __construct(){
        //$this->middleware('auth')->only(['contato']);
        
        $this->middleware('auth')->except([
            'index', 
            'contato'
         ]);
        
    }


    public function index() {
        $variavel = 'fsaffs';
        return view('teste', compact('variavel'));
    }
    
    public function categoria($id) {
        return "categoria pelo controller: {$id}";
    }
    
    public function contato() {
        return 'site de contato';
    }
}
