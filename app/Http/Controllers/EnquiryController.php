<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Log;
use App\Models\Enquiry;
use App\Models\Callback;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class EnquiryController extends Controller
{
    public function store(Request $request, $slug = null)
    {
        // Validate request data
        $validatedData = $request->validate([
            'product_name' => 'nullable|string|max:255',
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'mobile_no' => 'required|numeric|digits:10',
            'address' => 'nullable|string|max:500',
            'pin_code' => 'nullable|digits:6',
            'message' => 'nullable|string',
            'page_url' => 'required|url',
        ]);

        // Create a new enquiry record
        $enquiry = new Enquiry();
        $enquiry->name = $validatedData['name'];
        $enquiry->email = $validatedData['email'];
        $enquiry->mobile_number = $validatedData['mobile_no'];
        $enquiry->requirement = $validatedData['product_name'] ?? 'ONLY_ENQUIRY'; // Default to 'N/A' if product_name is not provided
        $enquiry->message = $validatedData['message'] ?? 'N/A';
        $enquiry->page_url = $validatedData['page_url'];
        $enquiry->address = $validatedData['address'] ?? 'N/A';
        $enquiry->pin_code = $validatedData['pin_code'] ?? 'N/A';
        $enquiry->save();

        // Log the action
        Log::create([
            'action' => '"' . $enquiry->name . '" made an enquiry on the website',
            'description' => 'User with Name "' . $enquiry->name . '", Email: "' . $enquiry->email . '", Mobile: "' . $enquiry->mobile_number . '" submitted an enquiry.',
            // 'user_id' => Auth::id() // Uncomment if user tracking is needed
            // 'user_id' => '1' // Default user ID if needed
        ]);

        return redirect()->route('front.thank-you');
    }

    public function delete($id)
    {
        $enquiry = Enquiry::findOrFail($id);
        $enquiry->delete();
        Log::create([
            'action' => 'Admin Deleted enquiry',
            'description' => 'Enquiry with mail "' . $enquiry->email . '" was deleted by admin',
            // 'user_id' => Auth::id()
            // 'user_id' => '1'
        ]);
        Session::flash('success', 'Enquiry deleted successfully.');
        return response()->json(['message' => 'Enquiry deleted successfully.', 200]);
    }
    public function callbackStore(Request $request)
    {
        $validatedData = $request->validate([
            'mobile_number' => 'required|numeric|digits:10',
        ]);
        $callback = new Callback();
        $callback->mobile_number = $validatedData['mobile_number'];
        $callback->save();
        Log::create([
            'action' => '"' . $callback->mobile_number . '" Callback Requested',
            'description' => 'Call Request With Number "' . $callback->mobile_number . '" submitted by user.',
            // 'user_id' => Auth::id()
            // 'user_id' => '1'
        ]);
        return redirect()->back()->with('success', 'Callback information submitted successfully.');
    }
    public function callbackDelete($id)
    {
        $callback = Callback::findOrFail($id);
        $callback->delete();
        Log::create([
            'action' => 'Admin Deleted callback',
            'description' => 'callback with mobile number "' . $callback->mobile_number . '" was deleted by admin',
            // 'user_id' => Auth::id()
            // 'user_id' => '1'
        ]);
        Session::flash('success', 'callback deleted successfully.');
        return response()->json(['message' => 'callback deleted successfully.', 200]);
    }
}
