@extends('layouts.app')
@section('content')
 @foreach ($users as $user)
        <tr>
           <td>{{ $user->id }}</td>
    
       
                    <td>{{ $user->name }}</td>
           <td><a href = 'edit/{{ $user->name}}'>Edit</a></td>
                    <td>{{ $user->family }}</td>
           <td><a href = 'edit/{{ $user->family}}'>Edit</a></td>
                    <td>{{ $user->phone }}</td>
           <td><a href = 'edit/{{ $user->phone }}'>Edit</a></td>
                    <td>{{ $user->email}}</td>
           <td><a href = 'edit/{{ $user->email }}'>Edit</a></td>
                    <td>{{ $user->password}}</td>
           <td><a href = 'edit/{{ $user->password}}'>Edit</a></td>
        </tr>
        @endforeach