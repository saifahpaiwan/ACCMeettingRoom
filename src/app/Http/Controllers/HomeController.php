<?php

namespace App\Http\Controllers;

use App\Models\meeting_rooms;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request, $id = null)
    {
        $pageTitleItmas = [];    
        $pageName = "Front Office System | ระบบบริหารจัดการห้องพัก";

        $users = User::where('status', 1)->get();  
        return view('home', compact('pageTitleItmas', 'pageName', 'users'));
    }


    public function pos(Request $request, $id = null)
    {
        $pageTitleItmas = [];    
        $pageName = "Point Of Sale | ระบบขายหน้าร้าน";

        $users = User::where('status', 1)->get();  
        return view('pos', compact('pageTitleItmas', 'pageName', 'users'));
    }

    public function bos(Request $request, $id = null)
    { 
        $pageName = "ใบสำคัญจ่าย (PV)"; 
        $pageTitleItmas = [
            ['name' => 'บัญชีเจ้าหนี้ (AP)', 'url' => "#"],
            ['name' => $pageName, 'url' => '#']
        ];
        $users = User::where('status', 1)->get();  
        return view('bos', compact('pageTitleItmas', 'pageName', 'users'));
    }
 
}
