<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Post;
use App\Models\RequestModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class IndexController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(5);
        return view('index')->with(compact('posts'));
        // return Inertia::render('Welcome', [
        //     'posts' => $posts
        // ]);
    }
    //
    public function rentBuy()
    {
        $posts = Post::paginate(5);
        return view('rent-buy')->with(compact('posts'));
        // return Inertia::render('RentBuy', [
        //     'posts' => $posts
        // ]);
    }
    public function shareAccomodation()
    {
        $requests = RequestModel::paginate(5);
        return view('share-accommodation')->with(compact('requests'));
        // return Inertia::render('ShareAccomodation');
    }
    public function detailView($id)
    {
        $post =Post::where('id',$id)->first();
        // return Inertia::render('ProductDetail');
        return view('product-detail')->with(compact('post'));
    }
    public function addPost()
    {
        return view('add-post');
        // return Inertia::render('AddPost');
    }
    public function addRequest()
    {
        return view('add-request');
    }

    public function savePost(Request $request)
    {
        // Validate the incoming request data
        try {
            $validatedData = $request->validate([
                'agency_name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'phone' => 'required|string|max:20',
                'address' => 'required|string|max:255',
                'location' => 'required|string|max:255',
                'ad_type' => 'required|string',
                'category' => 'required|string',
                'property_type' => 'required|string',
                'price' => 'required|numeric',
                'address_property' => 'required|string|max:255',
                'postal_code' => 'required|string|max:10',
                'city' => 'required|string|max:255',
                'canton' => 'required|string|max:255',
                'surface_area' => 'required|numeric',
                'rooms' => 'required|integer',
                'bathrooms' => 'required|integer',
                'floor' => 'required|integer',
                'features' => 'nullable|array',
                'description' => 'required|string',
                'photos.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:10240',
                'documents.*' => 'nullable|mimes:pdf|max:10240',
                'publication_duration' => 'required|string',
                'payment_method' => 'required|string',
            ]);
        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json(['errors' => $e->errors()], 422);
        }

        // Handle file uploads
        $photoPaths = [];
        if ($request->hasFile('photos')) {
            foreach ($request->file('photos') as $photo) {
                $photoPaths[] = $photo->store('photos', 'public');
            }
        }

        $documentPaths = [];
        if ($request->hasFile('documents')) {
            foreach ($request->file('documents') as $document) {
                $documentPaths[] = $document->store('documents', 'public');
            }
        }

        // Add file paths to validated data
        $validatedData['photos'] = $photoPaths;
        $validatedData['documents'] = $documentPaths;

        // Save the validated data to the database
        $post = new Post($validatedData);
        $post->user_id = Auth::id();
        $post->save();

        // Return a response, e.g., redirect or success message
        return redirect()->route('dashboard')->with('success', 'Post created successfully!');
    }

    public function dashboard()
    {
        $posts = Post::where('user_id', Auth::user()->id)->get();
        $requests = RequestModel::where('user_id', Auth::user()->id)->get();
        return view('dashboard')->with(compact('posts', 'requests'));
        // return Inertia::render('Dashboard', [
        //     'posts' => $posts
        // ]);
    }

    public function saveRequest(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'search_type' => 'required|string',
            'search' => 'required|string|max:255',
            'npa' => 'required|string|max:10',
            'city' => 'required|string|max:255',
            'max_budget' => 'required|numeric',
            'description' => 'required|string',
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
        ]);

        // Save the validated data to the database
        $reqModel = new RequestModel($validatedData);
        $reqModel->user_id = Auth::id();
        $reqModel->save();


        // Return a response, e.g., redirect or success message
        return redirect()->route('dashboard')->with('success', 'Request created successfully!');
    }
    public function postDelete($id)
    {
        $post = Post::where('id', $id)->where('user_id', Auth::user()->id)->first();
        if ($post) {
            $post->delete();
            return redirect()->route('dashboard')->with('success', 'Request deleted successfully!');
        } else {
            return redirect()->back();
        }
    }
    public function requestDelete($id)
    {
        $request = RequestModel::where('id', $id)->where('user_id', Auth::user()->id)->first();
        if ($request) {
            $request->delete();
            return redirect()->route('dashboard')->with('success', 'Request deleted successfully!');
        } else {
            return redirect()->back();
        }
    }
    public function generalConditions(){
        return view('general-conditions');
        // return Inertia::render('GeneralConditions');
    }
    public function privacy(){
        return view('privacy');
    }
    public function legal(){
        return view('legal');
    }
}
