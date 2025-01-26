<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admission;

class AdmissionController extends Controller
{
    public function submitForm(Request $request)
    {
        // Validation
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'dob' => 'required|date',
            'email' => 'required|email|max:255|unique:admissions,email',
            'phone' => 'required|digits_between:10,15',
            'education_level' => 'required|string',
            'portfolio' => 'required|file|mimes:pdf,zip|max:5120',
        ]);

        // เก็บไฟล์ Portfolio
        $portfolioPath = $request->file('portfolio')->store('portfolios', 'public');

        // บันทึกข้อมูลในฐานข้อมูล
        $admission = Admission::create([
            'name' => $validated['name'],
            'dob' => $validated['dob'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'education_level' => $validated['education_level'],
            'portfolio_path' => $portfolioPath,
        ]);

        // ส่งข้อมูลกลับไปยัง View พร้อมลิงก์ดูไฟล์
        return back()->with([
            'success' => 'Your application has been submitted successfully!',
            'portfolio_url' => asset('storage/' . $portfolioPath),
        ]);
    }
}
