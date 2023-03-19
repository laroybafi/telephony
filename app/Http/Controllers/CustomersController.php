<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Http\Request;

class CustomersController extends Controller
{

    public function customer_landing_input_index()
    {
        //dd(Customer::get());
        return view('customers.customers-landing-input');
    }

    public function store(Request $request)
    {
        //dd('sudah ok');
        $prefix = '+62';
        $customer = new Customer();
        $customer->loan_amount = $request->loan_amount;
        $customer->loan_purpose = $request->loan_purpose;
        $customer->tenor = $request->tenor;
        $customer->brand = $request->brand;
        $customer->type = $request->type;
        $customer->year = $request->year;
        $customer->province = $request->province;
        $customer->acc_branch = $request->acc_branch;
        $customer->refferal_code = $request->refferal_code;
        $customer->name = $request->name;
        $customer->phone_number = $prefix.$request->phone_number;
        $customer->email = $request->email;

        $customer->save();

        return redirect()->back();
    }

    public function customer_list_index()
    {
        //dd(Customer::get());
        return view('customers.customers-list', [
            'customers' => Customer::get(),
            'users' => User::get(),
        ]);
    }

    public function customer_detail_index($id)
    {
        //dd($id);
        $customer = Customer::find($id);
        $maskedPhone = substr($customer->phone_number, 0, 3) . str_repeat('*', strlen($customer->phone_number) - 7) . substr($customer->phone_number, -4);
        $customer->phone_number_masked = $maskedPhone;
        //dd(User::get());
        return view('customers.customers-detail', [
            'customer' => $customer,
            'users' => User::get(),
        ]);
    }

    public function update_profile(Request $request, $id)
    {
        //dd('sudah ok');
        $customer = Customer::find($id);
        $customer->name = $request->name;
        $customer->customer_no = $request->customer_no;
        $customer->occupation = $request->occupation;
        $customer->education = $request->education;
        $customer->gender = $request->gender;
        $customer->status = $request->status;
        $customer->province = $request->province;
        $customer->acc_branch = $request->acc_branch;
        $customer->birth_date = $request->birth_date;
        $customer->address = $request->address;
        $customer->contract_no = $request->contract_no;

        $customer->save();

        return redirect()->back();

        //return view('customers.customers-detail', ['id' => $id,
        //'customer' => $customer],
        //'users' => User::get())
        //->with('success','true');
    }

    public function update_call_result(Request $request, $id)
    {
        //dd('sudah ok');
        $customer = Customer::find($id);
        $customer->call_result_1 = $request->call_result_1;
        $customer->call_result_2 = $request->call_result_2;
        $customer->call_result_3 = $request->call_result_3;
        $customer->call_result_4 = $request->call_result_4;
        $customer->product = $request->product;
        $customer->notes = $request->notes;
        $customer->blacklist = $request->blacklist;
        $customer->caller = $request->caller;
       
        $customer->save();

        return redirect()->back();
    }

    public function update_simulasi(Request $request, $id)
    {
        //dd('sudah ok');
        $customer = Customer::find($id);
        $customer->pencairan = $request->pencairan;
        $customer->angsuran = $request->angsuran;
        $customer->paket = $request->paket;
        $customer->otr = $request->otr;
        $customer->dp_percent = $request->dp_percent;
        $customer->ar = $request->ar;
        $customer->cash = $request->cash;
        $customer->tjh_price = $request->tjh_price;
        $customer->acp = $request->acp;
        $customer->efective_interest = $request->efective_interest;
        $customer->tdp = $request->tdp;
        $customer->flat_interest = $request->flat_interest;
        $customer->addm_addb = $request->addm_addb;
        $customer->dp = $request->dp;
        $customer->insurance = $request->insurance;
        $customer->tlo = $request->tlo;
        $customer->credit = $request->credit;
        $customer->atm_acp = $request->atm_acp;
        $customer->acc_branch = $request->acc_branch;
        $customer->brand = $request->brand;
        $customer->type = $request->type;
        $customer->year = $request->year;
        $customer->tenor = $request->tenor;
        $customer->model = $request->model;

        $customer->save();

        return redirect()->back();
    }

}
