<?php

namespace App\Http\Controllers\admin;

use App\Http\Requests\UserRequest;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'))->with(['panel_title' => 'لیست کاربران ']);
    }

    public function create()
    {
        return view('admin.users.create')->with(['panel_title' => 'ثبت کاربر جدید   ']);
    }

    public function store(UserRequest $userRequest)
    {

//        $this->validate(request(), [
//            'name' => 'required',
//            'email' => 'required|email',
//            'password' => 'required|min:6|max:12',
//        ], [
//            'name.required' => 'لطفا نام کامل خود را وارد نمایید.',
//            'email.required' => 'لطفا ایمیل خود را وارد نمایید. ',
//            'email.email' => 'ایمیل وارد شده معتبر نمیباشد',
//            'password.required' => 'رمز عبور خود را وارد نمایید.',
//            'password.min' => 'رمز عبور باید بیشتر از 6 کاراکتر باشد',
//            'password.max' => ' رمز عبور باید کمتر از 12کاراکتر باشد',
//        ]);
        $user_data = [
            'name' => request()->input('name'),
            'email' => request()->input('email'),
            'password' => request()->input('password'),
            'role' => request()->input('role'),
            'wallet' => request()->input('wallet'),
        ];
        $new_user_object = User::create($user_data);
        if ($new_user_object instanceof User) {
            return redirect()->route('admin.users.list')->with('success', 'کاربر جدید با موفقیت ثبت شد ');
        }
    }

    public function delete($id)
    {
        if ($id && ctype_digit($id)) {
            $userIten = User::find($id);
            if ($userIten && $userIten instanceof User) {
                $userIten->delete();
                return redirect()->route('admin.users.list')->with('success', 'کاربر مورد نظر با موفقیت حذف گردید.');
            }
        }
    }

    public function edit($id)
    {
        if ($id && ctype_digit($id)) {
            $userItem = User::find($id);
            if ($userItem && $userItem instanceof User) {
                return view('admin.users.edit',compact('userItem'))->with(['panel_title' => 'ویرایش کاربر']);
            }
        }
    }

    public function update()
    {

    }
}
