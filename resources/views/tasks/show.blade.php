@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <div class="max-w-2xl mx-auto">
        <div class="flex justify-between items-center mb-8">
            <h1 class="text-3xl font-bold text-gray-900">Task Details</h1>
            <a href="{{ route('tasks.index') }}" class="text-gray-600 hover:text-gray-800">
                ← Back to Tasks
            </a>
        </div>

        <div class="bg-white shadow-md rounded-lg p-6">
            <div class="mb-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-4">{{ $task->title }}</h2>
                
                @if ($task->description)
                    <p class="text-gray-600 mb-6">{{ $task->description }}</p>
                @endif

                <div class="flex flex-wrap gap-3 mb-6">
                    <span class="inline-flex items-center px-3 py-1.5 rounded-full text-sm font-medium
                        @if ($task->priority == 'high') bg-red-100 text-red-800
                        @elseif ($task->priority == 'medium') bg-yellow-100 text-yellow-800
                        @else bg-green-100 text-green-800
                        @endif">
                        Priority: {{ ucfirst($task->priority) }}
                    </span>
                    
                    <span class="inline-flex items-center px-3 py-1.5 rounded-full text-sm font-medium
                        @if ($task->status == 'completed') bg-green-100 text-green-800
                        @elseif ($task->status == 'in_progress') bg-blue-100 text-blue-800
                        @else bg-gray-100 text-gray-800
                        @endif">
                        Status: {{ str_replace('_', ' ', ucfirst($task->status)) }}
                    </span>
                    
                    @if ($task->deadline)
                        <span class="inline-flex items-center px-3 py-1.5 rounded-full text-sm font-medium bg-purple-100 text-purple-800">
                            Deadline: {{ $task->deadline->format('M d, Y') }}
                        </span>
                    @endif
                </div>
            </div>

            <div class="border-t pt-6">
                <div class="flex justify-between items-center mb-4">
                    <div class="text-sm text-gray-500">
                        Created: {{ $task->created_at->format('M d, Y \a\t h:i A') }}
                    </div>
                    @if ($task->updated_at->gt($task->created_at))
                        <div class="text-sm text-gray-500">
                            Updated: {{ $task->updated_at->format('M d, Y \a\t h:i A') }}
                        </div>
                    @endif
                </div>

                <div class="flex space-x-4">
                    <a href="{{ route('tasks.edit', $task) }}" 
                       class="inline-flex items-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                        </svg>
                        Edit Task
                    </a>
                    
                    <form action="{{ route('tasks.destroy', $task) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this task?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" 
                                class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                            </svg>
                            Delete Task
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
