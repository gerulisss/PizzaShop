<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Group;
use App\Type;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $groups = Group::all();
        $types = Type::all();
        return view('group.index', ['groups' => $groups, 'types' => $types]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $groups = Group::all();
        $types = Type::all();
        return view('group.create', ['groups' => $groups, 'types' => $types]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $group = new Group;
        $group->title = $request->group_title;
        $group->priority = $request->group_priority;
        $group->type_id = $request->type_id;
        $group->save();
        return redirect()->route('group.index')->with('success_message', 'Sėkmingai sukurtas.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Group $group)
    {
        $groups = Group::all();
        $types = Type::all();
        return view('group.edit', ['group' => $group, 'types' => $types]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Group $group)
    {
        $group->title = $request->group_title;
        $group->priority = $request->group_priority;
        $group->type_id = $request->type_id;
        $group->save();
        return redirect()->route('group.index')->with('success_message', 'Sėkmingai atnaujintas.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Group $group)
    {
        $group->delete();
        return redirect()->route('group.index')->with('success_message', 'Sėkmingai ištrintas.');
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}
