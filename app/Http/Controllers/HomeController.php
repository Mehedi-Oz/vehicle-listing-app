<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Maker;
use App\Models\Model;
use App\Models\User;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;


class HomeController extends Controller
{
    public function index(): Factory|View
    {

        User::factory()
            ->has(Car::factory()->count(5), 'favouriteCars')
            ->create();

        return view("home.index");
    }
}
