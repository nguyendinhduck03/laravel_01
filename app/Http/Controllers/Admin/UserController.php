<?php

namespace App\Http\Controllers\Admin;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    protected $role;
    protected $user;
    public function __construct(Role $role, User $user) {
        $this->role = $role;
        $this->user = $user;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = $this->user->with('role')->get();
        return view('admins.users.list', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roles = $this->role->pluck('name', 'id');
        return view('admins.users.add', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->only([
            'name',
            'email',
            'password',
            'role_id',
        ]);
        $this->user->create($data);

        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = $this->user->findOrFail($id);
        return view('admins.users.detail', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = $this->user->findOrFail($id);
        $roles = $this->role->pluck('name', 'id');
        return view('admins.users.edit', compact('user','roles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = $this->user->findOrFail($id);
        $data = $request->all([
            'name',
            'number',
            'gender',
            'address',
            'date',
            'role_id',
        ]);
        if($request->hasFile('avatar')){
            if($user->avatar) {
                Storage::disk('public')->delete($user->avatar);
            }
            $data['avatar'] = $request->file('avatar')->store('uploads/users', 'public');
        }
        $user->update($data);

        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = $this->user->findOrFail($id);
        $user->delete();
        $user->status = false;
        $user->save();

        return redirect()->route('users.index');
    }

    public function trash() {
        $user_trashs = $this->user->with('role')->onlyTrashed()->get();
        return view('admins.users.trash', compact('user_trashs'));
    }

    public function restore($id) {
        $user = $this->user->onlyTrashed()->findOrFail($id);
        $user->status = true;
        $user->save();
        $user->restore();
        return redirect()->route('users.index');
    }

    public function forceDelete($id) {
        $this->user->onlyTrashed()->findOrFail($id)->forceDelete();
        return redirect()->route('users.trash');
    }
}
