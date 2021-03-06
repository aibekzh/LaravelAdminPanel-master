<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use Auth;

    /**
     * Class HomeController
     * @package App\Http\Controllers
     */
    class HomeController extends Controller
    {

        /**
         * Create a new controller instance.
         *
         *
         */
        public function __construct()
        {
            $this->middleware('auth');
        }

        /**
         * Show the application dashboard.
         *
         * @return \Illuminate\Contracts\Support\Renderable
         */
        public function index()
        {
          return view('welcome');
        }
    }
