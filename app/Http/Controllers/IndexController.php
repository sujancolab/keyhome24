<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;

class IndexController extends Controller
{
    public function index(){
        $posts = Post::all();
        return view('index')->with(compact('posts'));
        // return Inertia::render('Welcome', [
        //     'posts' => $posts
        // ]);
    }
    //
    public function rentBuy(){
        $posts = Post::all();
        return view('rent-buy')->with(compact('posts'));
        // return Inertia::render('RentBuy', [
        //     'posts' => $posts
        // ]);
    }
    public function shareAccomodation(){
        return view('share-accommodation');
        // return Inertia::render('ShareAccomodation');
    }
    public function detailView(){
        return Inertia::render('ProductDetail');
    }
    public function addPost(){
        return view('add-post');
        // return Inertia::render('AddPost');
    }

    public function savePost(Request $request)
    {
        // Validate the incoming request data
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
            'features' => 'array',
            'description' => 'required|string',
            'photos.*' => 'image|mimes:jpeg,png,jpg,gif|max:10240', // Validate each photo
            'documents.*' => 'mimes:pdf|max:10240', // Validate each document
            'publication_duration' => 'required|string',
            'payment_method' => 'required|string',
        ]);

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
        Post::create($validatedData);

        // Return a response, e.g., redirect or success message
        return redirect()->route('add-post')->with('success', 'Post created successfully!');
    }
    public function dashboard(){
        $posts = Post::all();
        return view('dashboard')->with(compact('posts'));
        // return Inertia::render('Dashboard', [
        //     'posts' => $posts
        // ]);
    }
}
