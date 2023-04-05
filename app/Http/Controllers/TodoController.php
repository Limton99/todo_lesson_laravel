<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function create(Request $request) {
        Todo::create([
            "name" => $request->name,
            "done" => $request->done
        ]);

        return 'success';
    }

    public function getTodos() {
        $todos = Todo::all();

        return $todos;
    }

    public function updateTodo(Request $request, $id) {
        $todo = Todo::find($id);

        $todo->done = $request->done;

        $todo->save();

        return 'success';
    }

    public function delete($id) {
        $todo = Todo::find($id);

        $todo->delete();

        return 'success';
    }
}
