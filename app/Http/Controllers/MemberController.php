<?php

namespace App\Http\Controllers;

use App\Workshop;
use Illuminate\Http\Request;
use App\Member;
use App\Http\Requests\MemberRequest;
use App\CurrentJob;
use App\Education;
use App\EmploymentContribution;
use App\PersonalContribution;
use App\ProfessionalNeed;
use App\Skill;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;

class MemberController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        if (Input::get('grade')) {
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


        $members = Member::whereHas('education', function ($query) use ($grade, $language) {
            $query->where('grade', 'like', '%' . $grade . '%')
                ->where(DB::raw("CONCAT_WS(' ', language_1, language_2)"), 'like', '%'.$language.'%')
            ;

        })
            ->orderBy('lastname', 'asc')
            ->paginate('25');

        return view('members.index', compact('members', 'languages'));
    }

    public function create()
    {
        return view('members.create');
    }

    public function store(Request $data)
    {
        $member = Member::create($data->all());
        $data['member_id'] = $member->id;
        CurrentJob::create($data->all());
        Education::create($data->all());
        EmploymentContribution::create($data->all());
        PersonalContribution::create($data->all());
        ProfessionalNeed::create($data->all());
        Skill::create($data->all());
        Workshop::create($data->all());


        session()->flash('flash_message', 'Record successfully created!');
        return redirect('members');
    }

    public function show($id)
    {
        $member = Member::findOrFail($id);

        return view('members.show', compact('member'));
    }


    public function edit($id)
    {

        $member = Member::findOrFail($id);


        return view('members.edit', compact('member'));
    }

    public function update(MemberRequest $data, $id)
    {

        $member = Member::findOrFail($id);


        $member->update($data->all());

        $data['member_id'] = $member->id;
        $member->jobs->update($data->all());
        $member->education->update($data->all());
        $member->employment->update($data->all());
        $member->personal->update($data->all());
        $member->professional->update($data->all());
        $member->skills->update($data->all());
        $member->workshops->update($data->all());


        session()->flash('flash_message', 'Record successfully updated!');
        return redirect('members/' . $member->id);
    }


    public function destroy($id)
    {
        $member = Member::findOrFail($id);

        /*if  (Gate::denies('delete', $member)) {

            abort(403, 'Sorry, not allowed');
        }*/

        $member->delete();
        session()->flash('flash_message', 'Record successfully deleted!');
        return redirect('members');
    }
}
