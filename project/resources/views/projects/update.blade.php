<!-- resources/views/projects/update.blade.php -->

<x-app-layout>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <h2 class="text-2xl font-semibold mb-4">{{ __('Edit Project') }}</h2>

        <form method="POST" action="{{ route('projects.update', ['project' => $project->name]) }}">
            @csrf
            @method('patch')

            <label for="name" class="block text-sm font-medium text-gray-700">{{ __('Project Name') }}</label>
            <input
                type="text"
                name="name"
                value="{{ old('name', $project->name) }}"
                class="mt-1 p-2 border border-gray-300 rounded-md w-full"
            />

            <x-input-error :messages="$errors->get('name')" class="mt-2 text-red-500" />

            <div class="mt-4 space-x-2">
                <x-primary-button>{{ __('Save') }}</x-primary-button>
                <a href="{{ route('projects.index') }}" class="text-blue-500 hover:underline">{{ __('Cancel') }}</a>
            </div>
        </form>
    </div>
</x-app-layout>
