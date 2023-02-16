@extends('laratrust::panel.layout')

@section('title', 'Roles Assignment')

@section('content')
    <div class="flex flex-col">
        <div class="py-2 -my-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
            <div
            x-data="{ model: @if($modelKey) '{{$modelKey}}' @else 'initial' @endif }"
            x-init="$watch('model', value => value != 'initial' ? window.location = `?model=${value}` : '')"
            class="inline-block min-w-full p-4 mt-4 overflow-hidden align-middle border-b border-gray-200 shadow sm:rounded-lg"
            >
            <span class="text-gray-700">User model to assign roles/permissions</span>
            <label class="block w-3/12">
                <select class="block w-full mt-1 form-select" x-model="model">
                    <option value="initial" disabled selected>Select a user model</option>
                    @foreach ($models as $model)
                        <option value="{{$model}}">{{ucwords($model)}}</option>
                    @endforeach
                </select>
            </label>
            <div class="flex inline-block min-w-full mt-4 overflow-hidden align-middle shadow sm:rounded-lg ">
                <table class="min-w-full">
                    <thead>
                        <tr>
                            <th class="th">Id</th>
                            <th class="th">Name</th>
                            <th class="th"># Roles</th>
                            @if(config('laratrust.panel.assign_permissions_to_user'))<th class="th"># Permissions</th>@endif
                            <th class="th"></th>
                        </tr>
                    </thead>
                    <tbody class="bg-white">
                        @foreach ($users as $user)
                        <tr>
                            <td class="text-sm leading-5 text-gray-900 td">
                                {{$user->getKey()}}
                            </td>
                            <td class="text-sm leading-5 text-gray-900 td">
                                {{$user->name ?? 'The model doesn\'t have a `name` attribute'}}
                            </td>
                            <td class="text-sm leading-5 text-gray-900 td">
                                {{$user->roles_count}}
                            </td>
                            @if(config('laratrust.panel.assign_permissions_to_user'))
                            <td class="text-sm leading-5 text-gray-900 td">
                                {{$user->permissions_count}}
                            </td>
                            @endif
                            <td class="flex justify-end px-6 py-4 text-sm font-medium leading-5 text-right whitespace-no-wrap border-b border-gray-200">
                                <a href="{{route('laratrust.roles-assignment.edit', ['roles_assignment' => $user->getKey(), 'model' => $modelKey])}}"
                                class="text-blue-600 hover:text-blue-900">Edit</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            @if ($modelKey)
                {{ $users->appends(['model' => $modelKey])->links('laratrust::panel.pagination') }}
            @endif
            </div>
        </div>
    </div>
@endsection