@extends('errors::minimal')

@section('title', __('Запрещенно'))
@section('code', '403')
@section('message', __($exception->getMessage() ?: 'Запрещенно'))
