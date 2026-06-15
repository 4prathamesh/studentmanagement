<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use Illuminate\Http\JsonResponse;


class EmployeeDocumentController extends Controller
{
    public function storeData(Request $request): JsonResponse
    {
        // 1. Validate the incoming input formats strictly
        $validated = $request->validate([
            'name'        => ['required', 'string', 'max:255'], // Ensures employee exists
            'pan_no'      => ['required', 'regex:/^[A-Z]{5}[0-9]{4}[A-Z]{1}$/i'], // 'i' flag ignores case
            'aadhaar_no'  => ['required', 'regex:/^[2-9]{1}[0-9]{3}\s?[0-9]{4}\s?[0-9]{4}$/'],
        ]);

        // 2. Clean and format the data
        $cleanPan = strtoupper($validated['pan_no']);
        $cleanAadhaar = str_replace(' ', '', $validated['aadhaar_no']);

        $employee = Employee::create([
            'name' => $validated['name']
        ]);

        $employee->detail()->create([
            'pan_no'     => $cleanPan,
            'aadhaar_no' => $cleanAadhaar,
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Employee and documents saved successfully.',
            'data' => [
                'employee_id' => $employee->id,
                'name' => $employee->name,
                'pan_no' => $cleanPan,
                'aadhaar_no' => $cleanAadhaar
            ]
        ], 201);
    }

    public function fetchPanNo($id): JsonResponse
    {
        $employee = Employee::with('detail')->find($id);

        if(!$employee){
            return response()->json(['status' => 'error', 'message' => 'employe not found'],404);
        }

        return response()->json([
            'status' => 'success',
            'employee_id' => $employee->id,
            'employee_name' => $employee->name,
            'pan_no' => $employee->detail->pan_no 
        ], 200);
    }
}
