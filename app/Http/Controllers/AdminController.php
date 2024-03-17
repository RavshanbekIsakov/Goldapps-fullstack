<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\News;
use App\Models\Partners;
use App\Models\PosImage;
use App\Models\Successfull_projects;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Testing\Fluent\Concerns\Has;

class AdminController extends Controller
{
    public function auth(Request $request){
        $request->validate([
            'username' => "required|string",
            'password' => "required|string",
        ]);
        $admin = Admin::where('username', $request->username)->first();
//        return Hash::make($request->password);
        if (!empty($admin)){
            if (Hash::check($request->password, $admin->password)){
                session()->put('admin',1);
                session()->put('id',$admin->id);
                session()->put('fullname',$admin->fullname);
                return redirect()->route('admin.profile');
            }
            else{
                return back()->with("login_error",1);
            }
        }
        else{
            return back()->with("login_error",1);
        }
    }

    public function logout(){
        session()->flush();
        return redirect()->route('admin.login');
    }

    public function update_password(Request $request){
        if ($request->password1 != $request->password2){
            return back()->with('logic_error',1);
        }
        else{
            $p = Hash::make($request->password1);
            $admin = Admin::find(session('id'));
            $admin->password = $p;
            $admin->save();
            return back()->with('success',1);
        }
    }

    public function projects(){
        $pr = Successfull_projects::latest()->get();
        return view('admin.projects', ['projects' => $pr]);
    }

    public function add_successfull_project(Request $request){
//        dd($request);
        $request->validate([
            'image' => 'required|image|max:1024',
            'name' => 'required|string',
            'link' => 'required|url'
        ]);
        $org_name = $request->file('image')->getClientOriginalName();
        $microTime = md5(microtime());
        $photo_name = $microTime.$org_name;
        $request->file('image')->move('img/projects/',$photo_name);

        $project = new Successfull_projects;
        $project->project_name = $request->name;
        $project->project_photo = $photo_name;
        $project->project_link = $request->link;
        $project->save();
        if($project->id){
            return redirect()->back()->with('success',1);
        }
        else{
            return redirect()->back()->with('unsuccessful',1);
        }
    }

    public function delete_successfull_project(Request $request){
        $request->validate([
            'id' => 'required|numeric'
        ]);
        $pr = Successfull_projects::find($request->id);
        unlink('img/projects/'.$pr->project_photo);
        Successfull_projects::where('id',$request->id)->delete();
        return redirect()->back()->with('delete',1);
    }

    public function companies(){
        $pr = Partners::latest()->get();
        return view('admin.partner_companies', ['companies' => $pr]);
    }

    public function add_companies(Request $request){
//        dd($request);
        $request->validate([
            'image' => 'required|image|max:1024',
            'name' => 'required|string',
            'link' => 'required|url'
        ]);
        $org_name = $request->file('image')->getClientOriginalName();
        $microTime = md5(microtime());
        $photo_name = $microTime.$org_name;
        $request->file('image')->move('img/companies/',$photo_name);

        $company = new Partners;
        $company->partners_name = $request->name;
        $company->partners_photo = $photo_name;
        $company->partners_link = $request->link;
        $company->save();
        if($company->id){
            return redirect()->back()->with('success',1);
        }
        else{
            return redirect()->back()->with('unsuccessful',1);
        }
    }

    public function delete_companies(Request $request){
        $request->validate([
            'id' => 'required|numeric'
        ]);
        $pr = Partners::find($request->id);
        unlink('img/companies/'.$pr->partners_photo);
        Partners::where('id',$request->id)->delete();
        return redirect()->back()->with('delete',1);
    }

    public function images(){
        $pr = PosImage::latest()->get();
        return view('admin.images', ['news' => $pr]);
    }

    public function add_image(Request $request){
//        dd($request);
        $request->validate([
            'image' => 'required|image|max:1024',
        ]);
        $org_name = $request->file('image')->getClientOriginalName();
        $microTime = md5(microtime());
        $photo_name = $microTime.$org_name;
        $request->file('image')->move('img/news/',$photo_name);

        $admin__id = session('id');
        $news = new PosImage;
        $news->name = $photo_name;
        $news->save();
        if($news->id){
            return redirect()->back()->with('success',1);
        }
        else{
            return redirect()->back()->with('unsuccessful',1);
        }
    }

    public function delete_images(Request $request){
        $request->validate([
            'id' => 'required|numeric'
        ]);
        $pr = PosImage::find($request->id);
        unlink('img/news/'.$pr->name);
        PosImage::where('id',$request->id)->delete();
        return redirect()->back()->with('delete',1);
    }

    public function news(){
        $pr = News::latest()->get();
        return view('admin.news', ['news' => $pr]);
    }

    public function add_news(Request $request){
//        dd($request);
        $request->validate([
            'image' => 'required|image|max:1024',
            'topic' => 'required|string',
            'page' => 'required|string',
        ]);
        $org_name = $request->file('image')->getClientOriginalName();
        $microTime = md5(microtime());
        $photo_name = $microTime.$org_name;
        $request->file('image')->move('img/news/',$photo_name);

        $admin__id = session('id');
        $news = new News;
        $news->news_topic = $request->topic;
        $news->news_photo = $photo_name;
        $news->news_page = $request->page;
        $news->admin_id = $admin__id;
        $news->save();
        if($news->id){
            return redirect()->back()->with('success',1);
        }
        else{
            return redirect()->back()->with('unsuccessful',1);
        }
    }

    public function delete_news(Request $request){
        $request->validate([
            'id' => 'required|numeric'
        ]);
        $pr = news::find($request->id);
        unlink('img/news/'.$pr->news_photo);
        news::where('id',$request->id)->delete();
        return redirect()->back()->with('delete',1);
    }
}
