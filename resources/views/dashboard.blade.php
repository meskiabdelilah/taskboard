<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-bold text-2xl bg-gradient-rainbow bg-clip-text text-transparent">
                Dashboard
            </h2>
            <a href="{{ route('tasks.create') }}"
                class="bg-gradient-rainbow text-white px-4 py-2 rounded-xl font-medium hover:shadow-lg transform hover:scale-105 transition-all duration-200 ">
                New Task
            </a>
        </div>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Welcome Section -->
            <div class="mb-8">
                <div class="bg-gradient-to-br from-purple-50 via-pink-50 to-blue-50 rounded-2xl p-8 border border-gray-200 relative overflow-hidden">
                    <!-- Background decoration -->
                    <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-purple-200 to-pink-200 rounded-full opacity-20 blur-2xl"></div>
                    <div class="absolute bottom-0 left-0 w-24 h-24 bg-gradient-to-br from-blue-200 to-cyan-200 rounded-full opacity-20 blur-2xl"></div>

                    <div class="relative z-10">
                        <h1 class="text-3xl font-bold text-gray-900 mb-2">
                            Welcome back, {{ auth()->user()->name }}
                        </h1>
                        <p class="text-gray-600 text-lg">
                            Ready to organize your day and boost your productivity?
                        </p>

                        <div class="flex flex-wrap gap-4 mt-6">
                            <a href="{{ route('tasks.index') }}"
                                class="inline-flex items-center px-6 py-3 bg-white rounded-xl font-medium text-purple-600 border border-purple-200 hover:bg-purple-50 transition-all duration-200 shadow-sm">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>
                                </svg>
                                View All Tasks
                            </a>
                            <a href="{{ route('tasks.create') }}"
                                class="inline-flex items-center px-6 py-3 bg-gradient-rainbow text-white rounded-xl font-medium hover:shadow-lg transform hover:scale-105 transition-all duration-200">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                                </svg>
                                Create Task
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Stats Section -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                <div class="bg-white rounded-2xl shadow-lg p-6 border border-gray-100 hover:-translate-y-1 hover:shadow-2xl transition-all duration-300">
                    <div class="flex items-center justify-between mb-4">
                        <div class="w-12 h-12 bg-gradient-blue rounded-xl flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                            </svg>
                        </div>
                        <span class="text-2xl font-bold text-gray-900">{{ \App\Models\Task::where('user_id', auth()->id())->count() }}</span>
                    </div>
                    <h3 class="text-gray-600 font-medium">Total Tasks</h3>
                </div>

                <div class="bg-white rounded-2xl shadow-lg p-6 border border-gray-100 hover:-translate-y-1 hover:shadow-2xl transition-all duration-300">
                    <div class="flex items-center justify-between mb-4">
                        <div class="w-12 h-12 bg-gradient-green rounded-xl flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <span class="text-2xl font-bold text-gray-900">{{ \App\Models\Task::where('user_id', auth()->id())->where('status', 'completed')->count() }}</span>
                    </div>
                    <h3 class="text-gray-600 font-medium">Completed</h3>
                </div>

                <div class="bg-white rounded-2xl shadow-lg p-6 border border-gray-100 hover:-translate-y-1 hover:shadow-2xl transition-all duration-300">
                    <div class="flex items-center justify-between mb-4">
                        <div class="w-12 h-12 bg-gradient-orange rounded-xl flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <span class="text-2xl font-bold text-gray-900">{{ \App\Models\Task::where('user_id', auth()->id())->where('status', 'in_progress')->count() }}</span>
                    </div>
                    <h3 class="text-gray-600 font-medium">In Progress</h3>
                </div>
                <div class="bg-white rounded-2xl shadow-lg p-6 border border-gray-100 hover:-translate-y-1 hover:shadow-2xl transition-all duration-300">
                    <div class="flex items-center justify-between mb-4">
                        <div class="w-12 h-12 bg-gradient-green rounded-xl flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <span class="text-2xl font-bold text-gray-900">{{ \App\Models\Task::where('user_id', auth()->id())->where('status', 'pending')->count() }}</span>
                    </div>
                    <h3 class="text-gray-600 font-medium">Pending</h3>
                </div>
            </div>

            <!-- Recent Tasks -->
            <div class="bg-white rounded-2xl shadow-lg p-6 border border-gray-100">
                <div class="flex items-center justify-between mb-6">
                    <h3 class="text-xl font-bold text-gray-900">Recent Tasks</h3>
                    <a href="{{ route('tasks.index') }}" class="text-purple-600 hover:text-purple-700 font-medium transition-colors duration-200">
                        View All
                    </a>
                </div>

                @php
                $recentTasks = \App\Models\Task::where('user_id', auth()->id())->latest()->take(5)->get();
                @endphp

                @if($recentTasks->count() > 0)
                <div class="space-y-4">
                    @foreach($recentTasks as $task)
                    <div class="flex items-center justify-between p-4 bg-gray-50 rounded-xl hover:bg-gray-100 transition-colors duration-200">
                        <div class="flex-1">
                            <h4 class="font-medium text-gray-900">{{ $task->title }}</h4>
                            <div class="flex items-center gap-2 mt-1">
                                <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium
                                            @if ($task->priority == 'high') bg-red-100 text-red-800
                                            @elseif ($task->priority == 'medium') bg-yellow-100 text-yellow-800
                                            @else bg-green-100 text-green-800
                                            @endif">
                                    {{ ucfirst($task->priority) }}
                                </span>
                                <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium
                                            @if ($task->status == 'completed') bg-green-100 text-green-800
                                            @elseif ($task->status == 'in_progress') bg-blue-100 text-blue-800
                                            @else bg-gray-100 text-gray-800
                                            @endif">
                                    {{ str_replace('_', ' ', ucfirst($task->status)) }}
                                </span>
                            </div>
                        </div>
                        <div class="flex items-center gap-2">
                            <a href="{{ route('tasks.edit', $task) }}" class="text-blue-600 hover:text-blue-800">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
                @else
                <div class="text-center py-8">
                    <div class="inline-flex items-center justify-center w-16 h-16 bg-gray-100 rounded-2xl mb-4">
                        <svg class="w-8 h-8 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-medium text-gray-900 mb-2">No tasks yet</h3>
                    <p class="text-gray-600 mb-4">Get started by creating your first task</p>
                    <a href="{{ route('tasks.create') }}"
                        class="inline-flex items-center px-4 py-2 bg-gradient-rainbow text-white rounded-xl font-medium hover:shadow-lg transform hover:scale-105 transition-all duration-200">
                        Create Your First Task
                    </a>
                </div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>