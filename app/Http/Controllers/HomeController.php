<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Mail\RequestCallback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Home';
        return view('index', compact('title'));
    }

    public function contact_us()
    {
        $title = 'contact-us';
        return view('contact-us', compact('title'));
    }

    public function faq()
    {
        $title = 'faq';
        return view('faq', compact('title'));
    }

    public function fees()
    {
        $title = 'fees';
        return view('fees', compact('title'));
    }

    public function get_started()
    {
        $title = 'get-started';
        return view('get-started', compact('title'));
    }

    public function our_clients()
    {
        $title = 'our-clients';
        return view('our-clients', compact('title'));
    }

    public function resources()
    {
        $title = 'resources';
        return view('resources', compact('title'));
    }

    public function terms_and_conditions()
    {
        $title = 'terms-and-conditions';
        return view('terms-and-conditions', compact('title'));
    }

    public function testimonials()
    {
        $title = 'testimonials';
        return view('testimonials', compact('title'));
    }

    public function tracker_loan_compensation()
    {
        $title = 'tracker-loan-compensation';
        return view('tracker-loan-compensation', compact('title'));
    }

    public function request_callback(Request $request)
    {
        $data = $request->all();

        $contact_page = 'contact_page';
        if (isset($request->contact_page) && $request->contact_page == $contact_page ){
            $this->validate($request, [
                'name' => 'required|string|max:100',
                'you_are' => 'required|string|max:100',
                'address' => 'required|string|max:100',
                'status' => 'nullable|string|max:100',
                'telephone' => 'required|string|max:100',
                'email' => 'required|string|max:100',
                'bank' => 'nullable|string|max:100',
                'type_of_loan' => 'required|string|max:100',
                'loan_amount' => 'nullable|integer|min:1',
                'year_taken_out' => 'nullable|string|max:100',
                'message' => 'nullable|string|max:1000',
                'g-recaptcha-response' => 'required|captcha',
            ],
                [
                    'g-recaptcha-response.required' => 'Please verify that you are not a robot.',
                    'g-recaptcha-response.captcha' => 'Captcha error! try again later or contact site admin.',
                ]);
        }else{
            $this->validate($request, [
                'name' => 'required|string|max:100',
                'you_are' => 'required|string|max:100',
                'address' => 'required|string|max:100',
                'status' => 'nullable|string|max:100',
                'telephone' => 'required|string|max:100',
                'email' => 'required|string|max:100',
                'bank' => 'nullable|string|max:100',
                'type_of_loan' => 'required|string|max:100',
                'loan_amount' => 'nullable|integer|min:1',
                'year_taken_out' => 'nullable|string|max:100',
                'message' => 'nullable|string|max:1000',
                'g-recaptcha-response' => 'nullable|captcha',
            ],
                [
                    'g-recaptcha-response.required' => 'Please verify that you are not a robot.',
                    'g-recaptcha-response.captcha' => 'Captcha error! try again later or contact site admin.',
                ]);
        };


        $data = new \stdClass();
        $data->name = $request->name;
        $data->you_are = $request->you_are;;
        $data->address = $request->address;
        $data->status = $request->status;
        $data->telephone = $request->telephone;
        $data->email = $request->email;
        $data->bank = $request->bank;
        $data->type_of_loan = $request->type_of_loan;
        $data->loan_amount = $request->loan_amount;
        $data->year_taken_out = $request->year_taken_out;
        $data->message = $request->message;
        $data->date = Now();

        $to = ['contact@loananalysissolutions.ie', 'loananalysissolutions@gmail.com', 'haque279@gmail.com'];

        Mail::to($to)->send(new RequestCallback($data));
        return back()->with('success', 'message successfully sent.');
    }

    public function blog(){
        $datas = Blog::orderBy('created_at', 'desc')->paginate(10);
        return view('blog', compact('datas'));
    }

    public function blog_details($link){
        $data = Blog::where('link', $link)->first();
        return view('blog-details', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    }
}
