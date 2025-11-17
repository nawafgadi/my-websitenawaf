<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    /**
     * Display the settings page.
     */
    public function index()
    {
        return view('admin.settings');
    }

    /**
     * Update the settings.
     */
    public function update(Request $request)
    {
        // Validate and update settings
        $request->validate([
            'site_name' => 'required|string|max:255',
            'site_description' => 'nullable|string|max:500',
            'admin_email' => 'required|email',
            'timezone' => 'required|string',
        ]);

        // Here you would typically save to database or config
        // For now, we'll just redirect with success message

        return redirect()->route('admin.settings.index')->with('success', 'Settings updated successfully!');
    }
}
