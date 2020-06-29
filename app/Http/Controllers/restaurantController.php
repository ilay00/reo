<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\restaurant;
use PHPUnit\Util\Json;


class restaurantController extends Controller
{
    function search(Request $request)
    {
        $name = $request->get('name');
        if ($name) {
            $restaurants = restaurant::where('r_name', 'LIKE', '%' . $name . '%')->get();
            return $restaurants->toJson();
        }
        $restaurants = restaurant::all();
        return $restaurants->toJson();
    }


    function delete(Request $request)
    {
        $r_id = $request->get('r_id');
        $restaurant = restaurant::where('r_id', $r_id)->first();
        if ($restaurant['r_restHolderId'] = Auth::id()) {
            restaurant::destroy($r_id);
            return Json::prettify('{"isDelete" : "delete"}');
        }
        return Json::prettify('{"isDelete" : "not delete"}');
    }

    function view(Request $request)
    {
        $r_id = $request->get('r_id');
        $restaurant = restaurant::where('r_id', $r_id)->first();
        $restaurant->toJson();
        if ($restaurant == "[]") {
            return Json::prettify('{"Error" : "Что то пошло не так"}');
        }
        return $restaurant;

    }

    function mView()
    {
        $r_restHolderId = Auth::id();
        $restaurant = restaurant::where('r_restHolderId', $r_restHolderId)->get();
        $restaurant->toJson();
        if ($restaurant == "[]") {
            return Json::prettify('{"Error" : "Что то пошло не так"}');
        }
        return $restaurant;

    }

    function edit(Request $request)
    {
        dd(Auth::id());
        if ($request->isMethod('post')) {
        }
        $r_id = $request->get('r_id');
        $restaurant = restaurant::where('r_id', $r_id)->get();
        $restaurant->toJson();
        if ($restaurant == "[]") {
            return Json::prettify('{"Error" : "Что то пошло не так"}');
        }
        return $restaurant;
    }

    function add(Request $request)
    {
        if (Auth::id() === null) {
            return Json::prettify('{"massage" : "Not login"}');
        }
        $r_restHolderId = Auth::id();

        if ($request->isMethod('get')) {
            $r_id = $request->get('r_id');
            $restaurant = restaurant::where('r_id', $r_id)->first();
            if ($restaurant === null) {
                return Json::prettify('{"massage" : "Не можем найти ресторан"}');
            }
            $restaurant->toJson();
            if ($restaurant['r_restHolderId'] !== $r_restHolderId) {
                return Json::prettify('{"massage" : "Кажется это не ваш ресторан"}');
            }
            if ($restaurant == "[]") {
                return Json::prettify('{"massage" : "Что то пошло не так"}');
            }
            return $restaurant;
        }

        if ($request->isMethod('post')) {
//            $this->validate($request, restaurant::rules, []);
            $model = new restaurant();
            $model->fill($request->all());
            $model->fill(['r_restHolderId' => $r_restHolderId]);
            $model->save();
            return Json::prettify('{"isSave" : "save"}');
        }

        if ($request->isMethod('update')) {
//            $this->validate($request, restaurant::rules, []);
            $r_id = $request->get('r_id');
            $model = $restaurant = restaurant::where('r_id', $r_id)->first();
            $model->fill($request->all());
            $model->save();
            return Json::prettify('{"isSave" : "save"}');
        }
    }
}
