<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

       /* if (Input::get('grade')) {
            $grade = Input::get('grade');
        } else {
            $grade = '';
        }

        if (Input::get('language')) {
            $language = Input::get('language');
        } else {
            $language = '';
        }

        $first_language = Education::select('language_1');

        $languages = Education::select(DB::raw('language_2 as language'))->union($first_language)->pluck('language', 'language');
        $languages->prepend('Todos', '');


        $users = User::whereHas('education', function ($query) use ($grade, $language) {
            $query->where('grade', 'like', '%' . $grade . '%')
                ->where(DB::raw("CONCAT_WS(' ', language_1, language_2)"), 'like', '%'.$language.'%')
            ;

        })*/
       $users = User::orderBy('name', 'asc')
            ->paginate('25');

        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $data)
    {
        $user = User::create($data->all());
        $data['user_id'] = $user->id;
        CurrentJob::create($data->all());
        Education::create($data->all());
        EmploymentContribution::create($data->all());
        PersonalContribution::create($data->all());
        ProfessionalNeed::create($data->all());
        Skill::create($data->all());
        Workshop::create($data->all());


        session()->flash('flash_message', 'Record successfully created!');
        return redirect('users');
    }

    public function show($id)
    {
        $user = User::findOrFail($id);

        return view('users.show', compact('user'));
    }


    public function edit($id)
    {

        $user = User::findOrFail($id);


        return view('users.edit', compact('user'));
    }

    public function update(UserRequest $data, $id)
    {

        $user = User::findOrFail($id);


        $user->update($data->all());

        $data['user_id'] = $user->id;
        $user->jobs->update($data->all());
        $user->education->update($data->all());
        $user->employment->update($data->all());
        $user->personal->update($data->all());
        $user->professional->update($data->all());
        $user->skills->update($data->all());
        $user->workshops->update($data->all());


        session()->flash('flash_message', 'Record successfully updated!');
        return redirect('users/' . $user->id);
    }


    public function destroy($id)
    {
        $user = User::findOrFail($id);

        /*if  (Gate::denies('delete', $user)) {

            abort(403, 'Sorry, not allowed');
        }*/

        $user->delete();
        session()->flash('flash_message', 'Record successfully deleted!');
        return redirect('users');
    }
}
