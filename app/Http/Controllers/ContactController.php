<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactSubmission;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'company' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'service' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        ContactSubmission::create($validated);

        // Optionally send email notification here

        return redirect()->back()->with('success', 'Terima kasih, Request For Proposal (RFP) Anda telah kami terima. Tim ahli kami akan segera menghubungi Anda.');
    }
}
