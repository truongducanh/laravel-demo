<?php

namespace App\Http\Controllers;
use App\Models\Grade ;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GradeController extends Controller
{
    public function index()
    {
        $list::all();
        return view('grade.index', [
            "list" => $list
        ]);
    }
    
    public function create()
    {
        return view ('grade.create'); 
    }

    public function store(Request $req)
    {
        //tránh lỗi 419
        //cách 1
        // $name = $_POST['name1'];
        //echo $name;
        //cách 2: request
        $name = $req->get('name1');
        //query đơn thuần
        // DB::insert('insert into grade(nameGrade) values(?)', [
        //     $name
        // ]);
        //query builder
        DB::table("grade")->insert([
            "nameGrade" => $name 
        ]);
    }
}
