@php
use App\Post;
use App\User;

@extends('template')
@yield('pageTitle', 'Todos los post de')

@yield('mainContent')

  @foreach ($posts as $post => $paragraph)
  {{$post ->'title'}}

  @endforeach
