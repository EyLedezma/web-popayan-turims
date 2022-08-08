<?php

namespace App\Http\Controllers;
use App\Models\UserAjustes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserAjustesController extends Controller
{
     public function nuevacontraseña(){
return view('ConfigurarPerfil');
    }


public function changePassword(Request $request){
$user = Auth::user();
$userId= $user->id;
$userEmail= $user->email;
$userPassword=$user->password;


if($request->password_actual !=""){
    $NewPass       = $request->password;
    $confirmPass   = $request->confirm_password;
    $name          = $request->name;

    if (Hash::chek($request->password_actual, $userPassword)) {
        
   if ($NewPass == $confirmPass) {

    if (strlen($NewPass)>= 8) {
        $user->password = Hash::make($request->password);
        $sqlBD= DB::table('users')
        ->where('id',$user->id)
        ->update(['password'=>$user->password], ['name'=>$user->name]);
 return redirect()->back()->with('updateClave','contraseña cambiada correctamente.');

// }else{
//     return redirect()->back()->with('clavemenor','la contraseña debe ser mayor a 8 digitos.');
// }
// }else {
//     return redirect()->back()->with('claveincorrecta','verifica si las claves son iguales.');

// }


//     }else{
//         return back()->withErrors(['password_actual'=>'La Clave no coincide']);
//     }

}else {
    $name = $request->name;
    $sqlBDUpdateName = DB::table('users')
    ->where('id', $user->id)
    ->update(['name'=>$name]);
 return redirect()->back()->with('name','El nombre fue cambiado correctamente.');;

}

return $request;

}
return $request;
    }
}
}
}
