<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Admin;
use Illuminate\Http\Request;
use App\Http\Requests\AdminRequest;
use App\Http\Requests\BlogRequest;


class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $loggedin = $request->session()->get('loggedinFlag');
        $blogs = Blog::all();
        return view('home', compact('blogs', 'loggedin'));
    }

    public function login(AdminRequest $request) 
    {   
        $loggedin;
        $admins = Admin::all();

        $request->session()->put('adminEmail', $request->input('email'));
        $request->session()->put('adminPass', $request->input('password'));
        $email= $request->session()->get('adminEmail');
        $password = $request->session()->get('adminPass');
       
        foreach($admins as $admin) {
            $adminEmail= $admin->email;
            $adminPass = $admin->password;
        }

        $request->session()->put('adminEmail', $request->input('email'));
        $request->session()->put('adminPass', $request->input('password'));
        $email= $request->session()->get('adminEmail');
        $password = $request->session()->get('adminPass');
        if (isset($email) && isset($password)) {
          if($adminEmail === $email && $adminPass === $password) 
          {
             $request->session()->put('loggedinFlag', true);
             $loggedin = $request->session()->get('loggedinFlag');
             return redirect('home');
          }else 
          {
            return redirect()->back()->with('messageError', 'Your credentials are not correct');
          }
    }

       
    }
    public function logout(Request $request) 
    {
        $blogs = Blog::all();
        $request->session()->flush();
        return redirect('home');
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
    public function store(BlogRequest $request)
    {
        $loggedin = $request->session()->get('loggedinFlag');
        $blog = new Blog;

        $blog->name = $request->name;
        $blog->subHeading = $request->subHeading;
        $blog->link = $request->link;
        $blog->photo = $request->photo;
        $blog->description = $request->description;

        $blog->save();

        return redirect()->back()->with('message', 'A new blog post has been successfuly added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $loggedin = $request->session()->get('loggedinFlag');
        return view('create',compact('loggedin'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {
        $loggedin = $request->session()->get('loggedinFlag');
        $blogs = Blog::all();
        
        $blog = Blog::findOrFail($id);

        

        return view('edit', compact('blog','blogs','loggedin'));
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
        $loggedin = $request->session()->get('loggedinFlag');
        $blog = Blog::findOrFail($id);

        $blog->name = $request->name;
        $blog->subHeading = $request->subHeading;
        $blog->link = $request->link;
        $blog->photo = $request->photo;
        $blog->description = $request->description;

        $blog->save();

        return redirect('home');

    }

    public function cancel() 
    {
        return redirect('/home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::findOrfail($id);
        $blog->delete();
        return redirect('home');
    }
}
