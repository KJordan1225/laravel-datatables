<div class="bg-gray-100 py-10">
    <div class="w-full px-4 sm:px-6 lg:px-8"> <!-- FIXED -->

        <!-- header -->
        <div class="sm:flex sm:items-center">
            <div class="sm:flex-auto">
                <h1 class="text-xl font-semibold text-gray-900">Students</h1>
                <p class="mt-2 text-sm text-gray-700">A list of all the students.</p>
            </div>

            <div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none">
                <a href="#"
                    class="inline-flex items-center justify-center rounded-md bg-indigo-600 px-4 py-2 text-sm font-medium text-white hover:bg-indigo-700">
                    Add Student
                </a>
            </div>
        </div>

        <!-- search -->
        <div class="mt-6">
            <input
                type="text"
                placeholder="Search students data..."
                class="w-full sm:w-96 rounded-lg border-0 py-2 px-3 ring-1 ring-gray-200 focus:ring-2 focus:ring-indigo-600"
            />
        </div>

        <!-- table -->
        <div class="mt-8">
            <div class="overflow-x-auto">
                <div class="w-full"> <!-- FIXED -->

                    <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
                        <table class="w-full divide-y divide-gray-300"> <!-- FIXED -->
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-4 py-3 text-left text-sm font-semibold">ID</th>
                                    <th class="px-4 py-3 text-left text-sm font-semibold">Name</th>
                                    <th class="px-4 py-3 text-left text-sm font-semibold">Email</th>
                                    <th class="px-4 py-3 text-left text-sm font-semibold">Class</th>
                                    <th class="px-4 py-3 text-left text-sm font-semibold">Section</th>
                                    <th class="px-4 py-3 text-left text-sm font-semibold">Created</th>
                                    <th class="px-4 py-3 text-right text-sm font-semibold"></th>
                                </tr>
                            </thead>

                            <tbody class="divide-y divide-gray-200 bg-white">
                                @forelse($students as $student)
                                    <tr>
                                        <td class="px-4 py-3">{{ $student->id }}</td>
                                        <td class="px-4 py-3">{{ $student->name }}</td>
                                        <td class="px-4 py-3">{{ $student->email }}</td>
                                        <td class="px-4 py-3">{{ $student->class->name ?? '-' }}</td>
                                        <td class="px-4 py-3">{{ $student->section->name ?? '-' }}</td>
                                        <td class="px-4 py-3">{{ $student->created_at?->diffForHumans() }}</td>
                                        <td class="px-4 py-3 text-right">
                                            <a href="#" class="text-indigo-600">Edit</a>
                                            <button type="button" class="ml-2 text-indigo-600 hover:text-indigo-900">Delete</button>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7" class="text-center py-4">No students found</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <div class="mt-4">
                        {{ $students->links() }}
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>