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
        $posts = Post::with('user')->paginate(6);
        return view('index')->with(compact('posts'));
        // return Inertia::render('Welcome', [
        //     'posts' => $posts
        // ]);
    }
    //
    public function rentBuy()
    {
        $posts = Post::with('user')->get();//paginate(6);
        // dd($posts);
        return view('rent-buy')->with(compact('posts'));
        // return Inertia::render('RentBuy', [
        //     'posts' => $posts
        // ]);
    }
    public function shareAccomodation()
    {
        $requests = RequestModel::paginate(6);
        return view('share-accommodation')->with(compact('requests'));
        // return Inertia::render('ShareAccomodation');
    }
    public function detailView($id)
    {
        $post =Post::where('id',$id)->with('user')->first();
        // return Inertia::render('ProductDetail');
        return view('product-detail')->with(compact('post'));
    }
    public function addPost()
    {
        $posts=Post::where('user_id',Auth::user()->id)->get();
        $requests=RequestModel::where('user_id',Auth::user()->id)->get();
        return view('add-post')->with(compact('posts','requests'));
        // return Inertia::render('AddPost');
    }
    public function addRequest()
    {
        return view('add-request');
    }

    public function savePost(Request $request)
    {
        // Validate the incoming request data
        // dd($request->all());
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

    public function filterRequests(Request $request)
    {
        \Log::info('Filter Requests Parameters:', $request->all());

        $query = RequestModel::query();

        // Filter by type (colocation, location, reprise)
        if ($request->type) {
            $type = strtolower($request->type);
            if ($type === 'colocation') {
                $query->where('search_type', 'shared_accommodation');
            } elseif ($type === 'location') {
                $query->where('search_type', 'rental');
            } elseif ($type === 'reprise') {
                $query->where('search_type', 'recovery');
            }
        }

        // Filter by location (city or postal code)
        if ($request->location) {
            $query->where(function($q) use ($request) {
                $q->where('city', 'LIKE', '%' . $request->location . '%')
                  ->orWhere('npa', 'LIKE', '%' . $request->location . '%');
            });
        }

        // Filter by maximum budget
        if ($request->max_budget) {
            \Log::info('Applying max budget filter:', ['max_budget' => $request->max_budget]);
            $query->where('max_budget', '<=', floatval($request->max_budget));
        }

        // Filter by date
        if ($request->date) {
            $query->whereDate('created_at', '>=', $request->date);
        }

        // Apply sorting
        if ($request->sort) {
            switch ($request->sort) {
                case 'most_recent':
                    $query->orderBy('created_at', 'desc');
                    break;
                case 'price_asc':
                    $query->orderBy('max_budget', 'asc');
                    break;
                case 'price_desc':
                    $query->orderBy('max_budget', 'desc');
                    break;
                default:
                    $query->orderBy('created_at', 'desc');
            }
        } else {
            $query->orderBy('created_at', 'desc');
        }

        // Get paginated results
        $requests = $query->paginate(6);

        // Format the response
        $formattedRequests = $requests->map(function($request) {
            return [
                'id' => $request->id,
                'search_type' => ucfirst($request->search_type),
                'search' => $request->search,
                'location' => $request->npa,
                'city' => $request->city,
                'max_budget' => number_format($request->max_budget, 2),
                'created_at' => $request->created_at->format('d/m/Y'),
                'phone' => $request->phone,
                'email' => $request->email
            ];
        });

        return response()->json([
            'requests' => $formattedRequests,
            'total' => $requests->total(),
            'links' => $requests->links()->toHtml()
        ]);
    }

    public function filterPosts(Request $request)
    {
        $query = Post::query();

        // Filter by type (buy or rent)
        if ($request->type) {
            $type = strtolower($request->type);
            $query->where('ad_type', $type === 'acheter' || $type === 'buy' ? 'sell' : 'rent');
        }

        // Filter by location
        if ($request->location) {
            $query->where(function($q) use ($request) {
                $q->where('city', 'LIKE', '%' . $request->location . '%')
                  ->orWhere('postal_code', 'LIKE', '%' . $request->location . '%')
                  ->orWhere('address', 'LIKE', '%' . $request->location . '%');
            });
        }

        // Filter by property type
        if ($request->property_type) {
            $query->where('property_type','LIKE', '%'.$request->property_type.'%');
        }

        // Filter by maximum budget
        if ($request->max_budget) {
            $query->where('price', '<=', $request->max_budget);
        }

        // Filter by rooms
        if ($request->rooms) {
            $query->where('rooms', '=', $request->rooms);
        }

        // Apply sorting
        if ($request->sort) {
            switch ($request->sort) {
                case 'most_recent':
                    $query->orderBy('created_at', 'desc');
                    break;
                case 'price_asc':
                    $query->orderBy('price', 'asc');
                    break;
                case 'price_desc':
                    $query->orderBy('price', 'desc');
                    break;
                default:
                    $query->orderBy('created_at', 'desc');
            }
        } else {
            $query->orderBy('created_at', 'desc');
        }

        // Get paginated results
        $posts = $query->get();//paginate(6);

        return response()->json([
            'posts' => $posts,
            'total' => count($posts)
            
        ]);
    }
}
