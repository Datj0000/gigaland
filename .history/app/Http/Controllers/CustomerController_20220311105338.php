<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Social;
use Illuminate\Support\Facades\Session;
use Laravel\Socialite\Facades\Socialite;

class CustomerController extends Controller
{
    //User
    public function login(Request $request)
    {
        $data = $request->all();
        $customer_username = $data['username'];
        $customer_pass = md5($data['password']);
        $result = Customer::where('customer_username', $customer_username)->where('customer_pass', $customer_pass)->first();
        if($result){
            Session::put('customer_id', $result->customer_id);
            Session::put('customer_name', $result->customer_name);
            return 1;
        }
        else{
            return md5($data['password']);
        }
    }
    public function login(Request $request)
    {
        $data = $request->all();
        $customer_username = $data['username'];
        $customer_pass = md5($data['password']);
        $result = Customer::where('customer_username', $customer_username)->where('customer_pass', $customer_pass)->first();
        if($result){
            Session::put('customer_id', $result->customer_id);
            Session::put('customer_name', $result->customer_name);
            return 1;
        }
        else{
            return md5($data['password']);
        }
    }
    public function register(Request $request)
    {
        $data = $request->all();
        $register = new Customer();
        $register->customer_name = $data['name'];
        $register->customer_email = $data['email'];
        $register->customer_phone = $data['phone'];
        $register->customer_username = $data['username'];
        $register->customer_pass = md5($data['pass']);
        $check_username = Customer::where('customer_username', $data['username'])->first();
        $check_email = Customer::where('customer_email', $data['email'])->first();
        $check_phone = Customer::where('customer_phone', $data['phone'])->first();
        if ($check_username) {
            echo 0;
        }
        else if ($check_email){
            echo 1;
        }
        else if ($check_phone){
            echo 2;
        }
        else {
            $register->save();
            echo 3;
        }
    }
    public function login_google()
    {
        return Socialite::driver('google')->redirect();
    }
    public function callback_google()
    {
        $users = Socialite::driver('google')->user();
        $authUser = $this->findOrCreateUser($users, 'google');
        if ($authUser) {
            $account_name = Customer::where('customer_id', $authUser->user)->first();
            Session::put('customer_id', $account_name->customer_id);
            Session::put('customer_name', $account_name->customer_name);
        }
        return redirect('/');
    }
    public function login_facebook()
    {
        return Socialite::driver('facebook')->redirect();
    }
    public function callback_facebook()
    {
        $users = Socialite::driver('facebook')->user();
        $authUser = $this->findOrCreateUser($users, 'facebook');
        if ($authUser) {
            $account_name = Customer::where('customer_id', $authUser->user)->first();
            Session::put('customer_id', $account_name->customer_id);
            Session::put('customer_name', $account_name->customer_name);
        }
        return redirect('/');
    }
    public function findOrCreateUser($users, $provider)
    {
        $authUser = Social::where('provider_user_id', $users->getId())->first();
        if ($authUser) {
            return $authUser;
        }
        else{

            $account = new Social([
                'provider_user_id' => $users->getId(),
                'provider_user_email' => $users->getEmail(),
                'provider' => strtoupper($provider)
            ]);

            $orang = Customer::where('customer_email', $users->email)->first();

            if (!$orang) {
                $orang = Customer::create([
                    'customer_name' => $users->getName(),
                    'customer_email' => $users->getEmail(),
                    'customer_pass' => '',
                    'customer_username' => '',
                    'customer_phone' => ''
                ]);
            }
            $account->login()->associate($orang);
            $account->save();
            return $account;
        }

    }
    //Admin
    public function all_Customer()
    {
        return view('admin.manage.customer');
    }
    public function fetchdata()
    {
        $all_customer = Customer::all();
        return response()->json([
            "data" => $all_customer,
        ]);
    }
    public function delete_customer($customer_id)
    {
        $customer = Customer::where('customer_id', $customer_id)->first();
        $destinationPath = 'uploads/logo/' . $customer->customer_image;
        if (file_exists($destinationPath)) {
            unlink($destinationPath);
        }
        $customer->delete();
    }
}
