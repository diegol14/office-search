<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Branch Finder') }}
        </h2>
    </x-slot>

    {{-- @include('finder.finderform') --}}
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-md sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    {{-- You're logged in! --}}
                   <form method="post" action=" {{-- {{ route('finder.send') }} --}}">
                        @csrf
                        <div class="block mt-4">
                            <x-form-input name="branchnumber" type="text"  label="{{ __('¿Llevamos el mantenimiento de la oficina ?') }}" value="{{ $mantok }}" />

                        </div>
                        {{-- <div class="block mt-4">
                            <x-form-submit>{{ __('Query') }}</x-form-submit>
                        </div> --}}

                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
