<?php

namespace Topic\Result\Http\Controllers;

use Illuminate\Http\Request;
use Topic\Result\Model\Account;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class MembersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $members = Account::all();
        return view('result::members', array());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Receive info from create site to create
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$member = $request->all();
        $member = collect([
            'account_username' => '17211TT5556',
            'account_pass' => 'admin12345',
            'account_role' => '2',
            'account_name' => 'Le Duc Dung',
            'account_email' => 'leducdung2@gmail.com'
        ])->all();

        //validate
        $rules = array(
            'account_username' => 'required|unique:account,account_username',
            'account_pass' => 'required',
            'account_role' => 'required|numeric',
            'account_name' => 'required',
            'account_email' => 'required|email|unique:account,account_email',
        );
        $validator = Validator::make($member, $rules);

        if($validator->fails()){
            $errors = $validator->errors();
            return $errors;
            // return redirect('some/url')
            //         ->withErrors($validator)
            //         ->withRequest($request->except(''));
        } else {
            /*$member = new Account;
            $member->account_username = $request->input('account_username');
            $member->account_pass = $request->input('account_pass');
            $member->account_role = $request->input('account_role');
            $member->account_name = $request->input('account_name');
            $member->account_email = $request->input('account_email');
            $member->save(); */
            Account::create($member);
            //
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $member = Account::find($id);
        // Send info of $member to site to show
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $member = Account::find($id);
        // Send info of $member to site to edit
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $member = collect([
            'account_username' => '17211TT5556',
            'account_pass' => 'admin123456789',
            'account_role' => '2',
            'account_name' => 'Le Duc Dung',
            'account_email' => 'leducdung2@gmail.com'
        ])->all();

        $rules = array(
            'account_username' => 'required|unique:account,account_username',
            'account_pass' => 'required',
            'account_role' => 'required|numeric',
            'account_name' => 'required',
            'account_email' => 'required|email|unique:account,account_email',
        );
        $validator = Validator::make($member->all(), $rules);
        
        if($validator->fails()){
            $errors = $validator->errors();
            return $errors;
            // return redirect('some/'.$id.'/url')
            //         ->withErrors($validator)
            //         ->withRequest($request->except(''));
        } else {
            // $member = new Account;
            // $member->account_username = $request->input('account_username');
            // $member->account_pass = $request->input('account_pass');
            // $member->account_role = $request->input('account_role');
            // $member->account_name = $request->input('account_name');
            // $member->account_email = $request->input('account_email');
            // $member->save();

            //
            // $request->session()->flash('message', 'Success update!');
            // return redirect('members');
        }
        Account::update($member->account_username);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $member = Account::find($id);
        $member->delete();
        // redirect
        
    }
}
