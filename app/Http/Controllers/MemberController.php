<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MemberController extends Controller
{
    public function index()
    {
        $members = DB::select('select * from members');
        $data = ['title' => 'メンバーリスト', 'members' => $members];
        return view('members.index', $data);
    }
}
