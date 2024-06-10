<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faq;

class FaqController extends Controller
{
    public function index()
    {
        $faqs=Faq::orderBy('id', 'desc')->get();
        $total = Faq::count();
        return view('admin.faq.home', compact(['faqs', 'total']));
    }

    public function create()
    {
        return view('admin.faq.create');
    }
    
    public function save(Request $request)
    {
        $validation = $request-> validate([
            'question' => 'required',
            'category' => 'required',
            'answer' => 'required'
        ]);
       
        $data = Faq::create($validation);
        if($data){
            session()->flash('success', 'FAQ created successfully');
            return redirect(route('admin/faqs'));
        }else{
            session()->flash('error', 'FAQ creation failed');
            return redirect(route('admin.product/create'));
        }
      
    }
    public function edit($id)
    {
        $faqs= Faq::findOrFail($id);
        return view('admin.faq.update', compact('faqs'));
    }
    public function delete($id)
    {
      $faqs= Faq::findOrFail($id)->delete();
      if($faqs){
          session()->flash('success', 'FAQ deleted successfully');
          return redirect(route('admin/faqs'));
        }else{
            session()->flash('error', 'FAQ deletion failed');
            return redirect(route('admin/faqs'));
        }

    }


    public function update(Request $request , $id)
    {
        $faqs= Faq::findOrFail($id);
        $question = $request->question;
        $category = $request->category;
        $answer = $request->answer;

        $faqs->question = $question;
        $faqs->category = $category;
        $faqs->answer = $answer;
        $data= $faqs->save();
        if($data){
            session()->flash('success', 'FAQ updated successfully');
            return redirect(route('admin/faqs'));
        }else{
            session()->flash('error', 'FAQ update failed');
            return redirect(route('admin/faqs/update'));
        }
    }

    public function indexForUsers()
    {
        $faqs = Faq::all(); // Haal alle FAQ's op
        return view('faqs.index', compact('faqs'));
    }


}
