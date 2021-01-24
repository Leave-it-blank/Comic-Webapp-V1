@extends('layouts.admin')

@section('content')

<div class=" shadow-xl m-2 py-4 overflow-hidden sm:rounded-lg">
  <div class="px-4 py-5 border-b border-gray-200 sm:px-6">
    <h3 class="text-lg leading-6 font-medium">
      Profile Page
    </h3>
    <p class="mt-1 max-w-2xl text-sm leading-5 text-gray-500">
      Contact admin for any changes.
    </p>
  </div>
  <div>
    <dl>
      <div class="bg-gray-50 px-4 py-5  sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm leading-5 font-medium text-gray-500">
          ID:
        </dt>
        <dd class="mt-1 text-sm leading-5  sm:mt-0 sm:col-span-2">
        {{ Auth::user()->id }}
        </dd>
      </div>
      <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm leading-5 font-medium text-gray-500">
          Username:
        </dt>
        <dd class="mt-1 text-sm leading-5 sm:mt-0 sm:col-span-2">
        {{ Auth::user()->username }}
        </dd>
      </div>
      <div class=" px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm leading-5 font-medium text-gray-500">
          Name:
        </dt>
        <dd class="mt-1 text-sm leading-5 sm:mt-0 sm:col-span-2">
        {{ Auth::user()->name }}
        </dd>
      </div>
      <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm leading-5 font-medium text-gray-500"> 
          Email address:
        </dt>
        <dd class="mt-1 text-sm leading-5 sm:mt-0 sm:col-span-2">
        {{ Auth::user()->email }}
        </dd>
      </div>
      <div class=" px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm leading-5 font-medium text-gray-500">
          Country:
        </dt>
        <dd class="mt-1 text-sm leading-5 sm:mt-0 sm:col-span-2">
        {{ Auth::user()->Country }}
        </dd>
      </div>
      <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm leading-5 font-medium text-gray-500">
          Roles:
        </dt>
        <dd class="mt-1 text-sm leading-5 sm:mt-0 sm:col-span-2">
        {{ Auth::user()->roles->pluck('name') }}
        </dd>
      </div>
      <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm leading-5 font-medium text-gray-500">
          Created at:
        </dt>
        <dd class="mt-1 text-sm leading-5 sm:mt-0 sm:col-span-2">
        {{ Auth::user()->created_at }}
        </dd>
      </div>
    </dl>
  </div>
</div>

@endsection