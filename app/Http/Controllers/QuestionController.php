<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function show(Question $question){ //consulta

        $question->load('answers','category', 'user'); //carga las relaciones de category y user
        
        return view('questions.show', [
            'question' => $question,
        ]);
    }
}
