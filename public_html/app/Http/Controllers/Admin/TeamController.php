<?php

namespace App\Http\Controllers\Admin;

use Exception;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;

class TeamController extends Controller
{
    public function index()
    {
        $team = Team::with('roles')->get();
        return view('admin.team.index', ['team' => $team]);
    }

    public function create()
    {
        
        $roles = Role::all();
        return view('admin.team.create', ['roles' => $roles]);
    }

    public function store(Request $request)
    {

        try {
            DB::beginTransaction();

            $team = new Team;
            $team->name = $request->name;
            $team->roll_id = $request->roll_id;

            if (!empty($request['image'])) {

                $imageName = time() . '.' . $request['image']->extension();

                $request['image']->move(public_path('assets/uploads/team-images/'), $imageName);

                $photo  = $imageName;
            } else {
                $photo = '';
            }
            $team->image = $photo;
            $team->status = 1;
            $team->save();
            DB::commit();
            return redirect()->route('admin.team.index');
        } catch (Exception $e) {
            // dd($e);
            DB::rollback();
            return response()->json(['error' => 'Transaction failed: ' . $e->getMessage()]);
        }
    }

    public function edit($id){
        $team = Team::find($id);
        $roles = Role::all();
        return view('admin.team.edit', ['team' => $team, 'roles' => $roles]);
    }

    public function update(Request $request, $id)
    {

        try {
            DB::beginTransaction();

            $team = Team::find($id);
            $team->name = $request->name;
            $team->roll_id = $request->roll_id;

            if (!empty($request['image'])) {

                $imageName = time() . '.' . $request['image']->extension();

                $request['image']->move(public_path('assets/uploads/team-images/'), $imageName);

                $photo  = $imageName;
                $team->image = $photo;
            } 
            $team->save();
            DB::commit();
            return redirect()->route('admin.team.index');
        } catch (Exception $e) {
            // dd($e);
            DB::rollback();
            return response()->json(['error' => 'Transaction failed: ' . $e->getMessage()]);
        }
    }

    public function destroy($id){
        $team = Team::find($id);
        $team->delete();
        return redirect()->back()->with('message', 'Member deleted successfully.');
    }

    public function inactive(Request $request, $id)
    {
        // dd($id,'inact');
        Team::where('id', $id)
        ->update([
            'status' => 0,
        ]);
        return redirect()->back();
    }
    public function active(Request $request, $id)
    {
        // dd($id,'act');
        Team::where('id', $id)
        ->update([
            'status' => 1,
        ]);
        return redirect()->back();
    }
}
