<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\Project;
use App\Models\Skill;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $projects = Project::latest()->get();
        $skills = Skill::all();

        return view('welcome', [
            'projects' => $projects,
            'skills' => $skills,
        ]);
    }

    public function storeMessage(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'message' => ['required', 'string'],
        ]);

        Message::create($data);

        return back()->with(
            'success',
            'تم إرسال رسالتك بنجاح، شكرًا لك!'
        );
    }
}