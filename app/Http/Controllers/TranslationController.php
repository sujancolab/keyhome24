<?php

namespace App\Http\Controllers;

use App\Models\Translation;
use Illuminate\Http\Request;

class TranslationController extends Controller
{
    //
    public function index()
    {
        $translations = Translation::all();
        return view('admin.translations.index', compact('translations'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'key' => 'required|string',
            'locale' => 'required|string',
            'value' => 'required|string',
        ]);

        Translation::updateOrCreate(
            ['key' => $request->key, 'locale' => $request->locale],
            ['value' => $request->value]
        );

        return redirect()->back()->with('success', 'Translation saved successfully.');
    }

    public function edit($id)
    {
        $translation = Translation::findOrFail($id);
        return response()->json($translation);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'key' => 'required|string',
            'locale' => 'required|string',
            'value' => 'required|string',
        ]);

        $translation = Translation::findOrFail($id);
        $translation->update($request->all());

        return redirect()->back()->with('success', 'Translation updated successfully.');
    }

    public function destroy($id)
    {
        Translation::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Translation deleted successfully.');
    }
}
