<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserDetail;
use Illuminate\Http\Request;

class Frontentcontroller extends Controller
{


  public function index()
  {
    $users = User::withTrashed()->latest()->paginate(10);  //select * from  users

    //   $users = User::where('status',2)->first();  //select * from  users where userid =4

    //return $users;
    return view("homePage", compact("users"));
  }
  // public function homePage()
  // {
  //   return view('homePage');
  //}
  public function about()
  {
    return view('about');
  }
  public function Contact()
  {
    return view('contact');
  }
  public function view()
  {


    return view('user_view',);
  }
  public function list()
  {
    return view('user.list');
  }

  public function create()
  {
    return view('createUser');
  }
  public function saveUser(Request $request)
  {
    $name = $request->name;
    $phone = $request->phone;
    $address = $request->address;
    $dob = $request->dob;
    $status = $request->status;
    //echo $name;
    //echo $phone;
    //return view('saveUser');
    $user = User::create(
      [
        'name' => $name,
        'phone' => $phone,
        'address' => $address,
        'dob' => $dob,
        'status' => $status,
      ]
    );

    //return "inserted";
    return redirect()->route('home')->with('message', 'User Created Successfully');


    // $user = new User();

    // $user->name=$name;
    // $user->phone=$phone;
    // $user->address=$address;
    // $user->dob=$dob;
    //$user->status=$status;
    //$user->save();
  }
  public function editUser($i)
  {
    $userId = decrypt($i);
    $user = User::find($userId);
    //return $user;
  return view('editUser', compact('user'));
  }
  public function viewUser($i)
  {
    $userId = decrypt($i);
    // $user = User::find($userId);
    $userDetails= UserDetail::find($userId);
  
  return view('viewUser', compact('userDetails'));
  }
  public function updateUser(Request $request)
  {
    $userId= decrypt($request->userId);
    $user = User::find($userId)->update([
      'name'=> $request->name,
      'phone'=> $request->phone,
      'address'=> $request->address,
      'dob'=> $request->dob,
      'status'=> $request->status,

    ]);
    // $user->update([
    //   'name'=> $request->name,
    //   'phone'=> $request->phone,
    //   'address'=> $request->address,
    //   'dob'=> $request->dob,
    //   'status'=> $request->status,

    // ]);
    return redirect()->route('home')->with('message','User Edited Successfully');
  }

public function deleteUser($i)
{
  $userId=decrypt($i);
  $user = User::find($userId)->delete();
//$user->delete();
  return redirect()->route('home')->with('message','User Deleted Successfully');
}
public function activateUser($i)
{
  $userId=decrypt($i);
  $user = User::withTrashed()->find($userId);
  $user->restore();
  return redirect()->route('home')->with('message','User Restored Successfully');
}
public function forceDelete($i)
{
  $userId=decrypt($i);
  $user = User::withTrashed()->find($userId);
  $user->forceDelete();
  return redirect()->route('home')->with('message','User Fdeleted Successfully');
}
public function register()
{
  session()->put('username','Amal');
  session()->put('userId','21');
  session()->flash('message','message from flash');
  return redirect()->route('login');
  // return view('register');

}
public function login()
{
  session()->forget('userId');
  return view('login');

}
public function dologin()
{
  if(auth()->attempt(['email' => request('email'),'password' => request('password')]))
  {
    return 'login successfull';
  }
  else{
    return 'login failed';
  }
  // $input=[
  //   'email'=>request('email'),
  //   'password'=> request('password')
  // ];
  // $email= request('email');
  // if (auth()->attempt($input)) {
  //   $datastore = [
  //     'email' =>$email,
  //     'isLoggedIn' =>true
  //   ];
  //   session()->put('userDetails',$datastore);
  //   return redirect()->route('home')->with('message','Login Successfull');
  // }
  // else{
  //   return redirect()->route('login')->with('message','Login failed');
  // }
    
  }
}

