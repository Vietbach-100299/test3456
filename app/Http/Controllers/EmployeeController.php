<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Lấy toàn bộ dữ liệu từ Bảng Employee
        $employees = Employee::orderBy('id', 'desc')->get();
        //Hiển thị ra trang employee/index.blade.php (Sử dụng Bootstrap)
        return view("employee.index", compact("employees"));
//        return response()->json($employees);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //Lấy ra thông tin của Đối tượng Employee có id = giá trị truyền trong liên kết
        $employee  = Employee::find($id);

        //Trả về trang hiển thị Chi tiết
        return view('employee.detail', compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
//        dd($id);
        $emp = Employee::find($id);
//        dd($emp->id);
        $emp->delete();
        return redirect()->route('employees.index')->with('success', 'Employee deleted successfully.');
    }
}
