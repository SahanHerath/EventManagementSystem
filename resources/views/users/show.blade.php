@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($users->name) ? $users->name : 'Users' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('users.users.destroy', $users->id) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('users.users.index') }}" class="btn btn-primary" title="Show All Users">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('users.users.create') }}" class="btn btn-success" title="Create New Users">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('users.users.edit', $users->id ) }}" class="btn btn-primary" title="Edit Users">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Users" onclick="return confirm(&quot;Delete Users??&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>Name</dt>
            <dd>{{ $users->name }}</dd>
            <dt>Email</dt>
            <dd>{{ $users->email }}</dd>
            <dt>Email Verified At</dt>
            <dd>{{ $users->email_verified_at }}</dd>
            <dt>Category</dt>
            <dd>{{ $users->category }}</dd>
            <dt>City</dt>
            <dd>{{ $users->city }}</dd>
            <dt>Admin</dt>
            <dd>{{ $users->admin }}</dd>
            <dt>Password</dt>
            <dd>{{ $users->password }}</dd>
            <dt>Remember Token</dt>
            <dd>{{ $users->remember_token }}</dd>
            <dt>Created At</dt>
            <dd>{{ $users->created_at }}</dd>
            <dt>Updated At</dt>
            <dd>{{ $users->updated_at }}</dd>

        </dl>

    </div>
</div>

@endsection