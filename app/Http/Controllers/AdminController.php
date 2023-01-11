<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class AdminController extends Controller
{

    public function _construct(){
        $this->middleware('admin');
    }
    public function index()
    {
        $datos_users = DB::table('users')->where('auth', '=', '0')->get();

        $datos_users_auth = DB::table('users')->where('auth', '=', '1')->get();
        // dd ($datos_users_auth);

        //  return view('componentes.catalogos.admin.index',compact($datos_users));

        return view('catalogos.admin',
            [
                'datos_users' => $datos_users,
                'datos_users_auth' => $datos_users_auth
            ]);


    }
    public function update(Request $request)
    {
        if ($request->auth == 0) {

            DB::table('users')
                ->where('users.id', '=', $request->dato_id)
                ->UPDATE(['auth' => 1]);

        }elseif ($request->auth == 1){

            DB::table('users')
                ->where('users.id', '=', $request->dato_id)
                ->UPDATE(['auth' => 0]);
        }
        return redirect()->back();
    }
    public function auth(Request $request)
    {
    }
}
