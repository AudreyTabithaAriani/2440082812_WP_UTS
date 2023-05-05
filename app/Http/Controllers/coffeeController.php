<?php

namespace App\Http\Controllers;

use App\Models\userModel;
use App\Models\categories;
use App\Models\coffeeModel;
use Illuminate\Http\Request;

class coffeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function signature($id)
    {
        $user = userModel::find($id);
        $category = categories::orderBy('id')->get();
        $coffee = coffeeModel::where('category_id',1)->get();

        $hour = date('H');
        if ($hour < 12) {
            $greeting = 'Good Morning';
        } elseif ($hour < 18) {
            $greeting = 'Good Afternoon';
        } else {
            $greeting = 'Good Evening';
        }

        return view('coffee.signature', [
            "title" => "Profile",
            "greeting" => $greeting,
            "user" => $user,
            "categories" => $category,
            "coffees" => $coffee,
            "type" => "Signature"
        ]);
    }

    public function brewed($id)
    {
        $user = userModel::find($id);
        $category = categories::orderBy('id')->get();
        $coffee = coffeeModel::where('category_id',2)->get();

        $hour = date('H');
        if ($hour < 12) {
            $greeting = 'Good Morning';
        } elseif ($hour < 18) {
            $greeting = 'Good Afternoon';
        } else {
            $greeting = 'Good Evening';
        }

        return view('coffee.brewed', [
            "title" => "Profile",
            "greeting" => $greeting,
            "user" => $user,
            "categories" => $category,
            "coffees" => $coffee,
            "type" => "Brewed"
        ]);
    }

    public function espresso($id)
    {
        $user = userModel::find($id);
        $category = categories::orderBy('id')->get();
        $coffee = coffeeModel::where('category_id',3)->get();

        $hour = date('H');
        if ($hour < 12) {
            $greeting = 'Good Morning';
        } elseif ($hour < 18) {
            $greeting = 'Good Afternoon';
        } else {
            $greeting = 'Good Evening';
        }

        return view('coffee.espresso', [
            "title" => "Profile",
            "greeting" => $greeting,
            "user" => $user,
            "categories" => $category,
            "coffees" => $coffee,
            "type" => "Espresso"
        ]);
    }

    public function non_coffee($id)
    {
        $user = userModel::find($id);
        $category = categories::orderBy('id')->get();
        $coffee = coffeeModel::where('category_id',4)->get();

        $hour = date('H');
        if ($hour < 12) {
            $greeting = 'Good Morning';
        } elseif ($hour < 18) {
            $greeting = 'Good Afternoon';
        } else {
            $greeting = 'Good Evening';
        }

        return view('coffee.noncoffee', [
            "title" => "Profile",
            "greeting" => $greeting,
            "user" => $user,
            "categories" => $category,
            "coffees" => $coffee,
            "type" => "Non-Coffee"
        ]);
    }
}
