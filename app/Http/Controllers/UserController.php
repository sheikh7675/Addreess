<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;
use Illuminate\View\View;
  
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request): View
    {
        /* $ip = $request->ip(); Dynamic IP address */
        $ip = '162.159.24.227'; /* Static IP address */
        $currentUserInfo = Location::get($ip);
          
        return view('user', compact('currentUserInfo'));
    }
}