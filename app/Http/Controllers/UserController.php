<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

use function PHPSTORM_META\map;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //  $user = User::orderBy('meta_data->name')->get();
        $user = User::get();
        // $user=User::find(1);
        //  $user=User::where('meta_data->name','LIKE', 'Ba%')->get();
        //    $user=User::whereJsonContainer('meta_data->name','Basharat Ali')->get();
        //    $user=User::whereJsonLength('meta_data->name',1)->get();
        // return $user-> meta_data;
        //   return $user->meta_data['name']['email'];
        return $user;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        // $user = new User;
        // $user->meta_data = [
        //     'name' => 'Basharat Ali',
        //     'email' => 'king@gmail.com',
        //     'phone_number' => '03211339413',

        // ];
        // $user->save();
        // $user = User::create([
        //     'meta_data' => [
        //         'name' => 'Atif',
        //         'email' => 'sardar@gmail.com',
        //         'phone_number' => '03093423876',
        //     ]
        // ]);

        // for update json data

        // $user = User::find(2);
        // $user->meta_data['name'] = 'Foji saab';
        // $user->save();

        // $user=User::where('id',2)->update([
        //     'meta_data' =>[
        //         'name' => "Sharafat Ali",
        //         'email' =>'foji@gmail.com',
        //         'phone_number' => '03023498433',
        //     ]
        // ]);

        // for delete

        // $user=User::find(2);
        // $user->meta_data=collect($user->meta_data)->forget('email');
        // $user->save();

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
