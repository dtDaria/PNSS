<?php

namespace Controller;

use Illuminate\Database\Capsule\Manager as DB;
use Model\Post;
use Model\strStuds;
use Src\View;
use Src\Request;
use Model\User;
use Model\Student;
use Model\dist;
use Model\groups;
use Model\strStudent;
use Model\usp_ocen;
use Model\kontr;
use Model\izm;
use Src\Auth\Auth;
use Src\Validator\Validator;

class Site
{
    public function index(Request $request): string
    {
        $posts = Post::where('id', $request->id)->get();
        return (new View())->render('site.post', ['posts' => $posts]);
    }

    public function hello(Request $request): string
    {
        $groups = groups::all();
        $usp_ocen = usp_ocen::all();
        $dist = dist::all();
        $students = DB::table('students')
            ->join('groups', 'students.GroupID', '=', 'groups.GroupID')
            ->join('usp_ocen', 'students.StudentsID', '=', 'usp_ocen.StudentsID')
            ->join('dist', 'usp_ocen.Distid', '=', 'dist.Distid')
            ->select('students.*', 'groups.*', 'usp_ocen.*', 'dist.*')
            ->get();

        return new View('site.hello', [
            'groups' => $groups,
            'students' => $students,
            'usp_ocen' => $usp_ocen,
            'dist' => $dist
        ]);
    }

    public function search(Request $request)
    {
        $name = $request->name;
        $groups = groups::all();
        $dist = dist::all();
        $usp_ocen = usp_ocen::all();
        $students = DB::table('students')
            ->join('groups', 'students.GroupID', '=', 'groups.GroupID')
            ->join('usp_ocen', 'students.StudentsID', '=', 'usp_ocen.StudentsID')
            ->join('dist', 'usp_ocen.Distid', '=', 'dist.Distid')
            ->select('students.*', 'groups.*', 'dist.*')
            ->where('students.GroupID', 'LIKE', "%" . $name . "%")
            ->get();


        return (new View())->render('site.search', [
            'students' => $students,
            'dist' => $dist,
            'groups' => $groups,
            'usp_ocen' => $usp_ocen,]);
    }



    public function search_usp(Request $request)
    {
        $search_usp = $request->search_usp;
        $groups = groups::all();
        $dist = dist::all();
        $usp_ocen = usp_ocen::all();
        $students = DB::table('students')
            ->join('groups', 'students.GroupID', '=', 'groups.GroupID')
            ->join('usp_ocen', 'students.StudentsID', '=', 'usp_ocen.StudentsID')
            ->join('dist', 'usp_ocen.Distid', '=', 'dist.Distid')
            ->select('students.*', 'groups.*', 'dist.*', 'usp_ocen.*')
            ->where('students.GroupID', 'LIKE', "%" . $search_usp . "%")
            ->get();


        return (new View())->render('site.search_usp', [
            'students' => $students,
            'dist' => $dist,
            'groups' => $groups,
            'usp_ocen' => $usp_ocen,]);
    }


    public function strStud(Request $request): string
    {
        return (new View())->render('site.strStud', []);
    }

    public function signup(Request $request): string
    {

        if ($request->method === 'POST') {

            $validator = new Validator($request->all(), [
                'name' => ['required'],
                'login' => ['required'],
                'password' => ['required']
            ], [
                'required' => 'Поле :field пусто',
            ]);

            if($validator->fails()){
                return new View('site.signup', ['message' => $validator->errors()]);
            }   else{

                $project = User::create($request->all());
                $project->save();
                app()->route->redirect('/login');
            }
        }

        return new View('site.signup');
    }


    public function login(Request $request): string
    {
        //Если просто обращение к странице, то отобразить форму
        if ($request->method === 'GET') {
            return new View('site.login');
        }
        //Если удалось аутентифицировать пользователя, то редирект
        if (Auth::attempt($request->all())) {
            app()->route->redirect('/hello');
        }
        //Если аутентификация не удалась, то сообщение об ошибке
        return new View('site.login', ['message' => 'Такого пользователя нет в системе']);
    }


    public function logout(): void
    {
        Auth::logout();
        app()->route->redirect('/hello');
    }

    public function sgroup(Request $request): string
    {
        if ($request->method === 'POST' && groups::create($request->all())) {
            app()->route->redirect('/hello');
        }
        return new View('site.sgroup');

    }

    public function nstud(Request $request): string
    {
        $groups = groups::all();

        if ($request->method === 'POST' && Student::create($request->all())) {
            app()->route->redirect('/hello');
        }
        return new View('site.nstud', ['groups' => $groups]);
    }

    public function sdis(Request $request): string
    {
        $kontr = kontr::all();

        if ($request->method === 'POST' && dist::create($request->all())) {
            app()->route->redirect('/hello');
        }
        return (new View())->render('site.sdis', ['kontr' => $kontr]);
    }


    public function izm(Request $request): string
    {
        if ($request->method === 'POST' && izm::create($request->all())) {
            app()->route->redirect('/hello');
        }
        return (new View())->render('site.izm');
    }

}

