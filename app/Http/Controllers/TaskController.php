<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\Http\Requests;

class TaskController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');//проверка авторизации
    }
    public function index()
    {
        $tasks=Task::all();
        return view('tasks', ['tasks'=>$tasks]);
    }
    public function store(Request $request)
    {
        
    }
    public function destroy(Task $task)
    {
        
    }
}
