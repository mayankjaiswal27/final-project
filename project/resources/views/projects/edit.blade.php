<<<<<<< HEAD
<!-- resources/views/projects/edit.blade.php -->

<x-app-layout>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <h2 class="text-2xl font-semibold mb-4">{{ __('Edit Project') }}</h2>

        <form method="POST" action="{{ route('projects.update', ['project' => $project->id]) }}">
            @csrf
            @method('patch')

            <label for="name" class="block text-sm font-medium text-gray-700">{{ __('Project Name') }}</label>
=======
<x-app-layout>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <form method="POST" action="{{ route('projects.update', $project) }}">
            @csrf
            @method('patch')
            
            <label for="name">{{ __('Project Name') }}</label>
>>>>>>> d627defc819a9ea8cd2107b7934d404407f5ea93
            <input
                type="text"
                name="name"
                value="{{ old('name', $project->name) }}"
<<<<<<< HEAD
                class="mt-1 p-2 border border-gray-300 rounded-md w-full"
            />

            <x-input-error :messages="$errors->get('name')" class="mt-2 text-red-500" />

            <div class="mt-4 space-x-2">
                <x-primary-button>{{ __('Save') }}</x-primary-button>
                <a href="{{ route('projects.index') }}" class="text-blue-500 hover:underline">{{ __('Cancel') }}</a>
=======
                class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
            />

            <x-input-error :messages="$errors->get('name')" class="mt-2" />

            <div class="mt-4 space-x-2">
                <x-primary-button>{{ __('Save') }}</x-primary-button>
                <a href="{{ route('projects.index') }}">{{ __('Cancel') }}</a>
>>>>>>> d627defc819a9ea8cd2107b7934d404407f5ea93
            </div>
        </form>
    </div>
</x-app-layout>
