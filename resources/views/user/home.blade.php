@extends('layouts.frontend')

@section('title', __('labels.user.titles.space'))

@section('content')
        <div class="card">
            <div class="card-header">@lang('labels.user.dashboard')</div>

            <div class="card-body">
                <div class="row">

                    <div class="col-md-12">
                        <div class="media">
                            <img class="media-object mr-3" src="{{ $loggedInUser->avatar }}" alt="@lang('labels.user.avatar')">
                            <div class="media-body">
                                <h4>
                                    {{ $loggedInUser->name }}<br/>
                                </h4>

                                <small>
                                    {{ $loggedInUser->email }}<br/>
                                    @lang('labels.user.member_since', ['date' => $loggedInUser->created_at->formatLocalized('%A %d %B %Y')])
                                </small>

                                <p>
                                    <a href="{{ route('user.account') }}" class="btn btn-info btn-sm">@lang('labels.user.account')</a>

                                    @can('access backend')
                                        <a href="{{ route('admin.home') }}" class="btn btn-danger btn-sm">@lang('labels.user.administration')</a>
                                    @endcan
                                </p>
                            </div>
                        </div>



                        <div class="card">
                            <div class="card-header">
                                <h4>A proposde vous</h4>
                            </div>

                            <div class="card-body">
                                Bienvenu sur votre espace  {{ $loggedInUser->name }}. Vous pouvez accedez à <a href="{{ route('user.account') }}">votre compte</a> ou bien attendre ici patiemment...
                            </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
