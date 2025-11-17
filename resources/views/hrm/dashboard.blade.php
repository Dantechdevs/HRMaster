<x-app-layout>
    <div class="p-6 space-y-6">

        <!-- Header -->
        <div class="flex items-center justify-between">
            <h1 class="text-3xl font-bold text-gray-800">HRMaster Dashboard</h1>

            <a href="{{ route('profile.edit') }}"
               class="px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg font-medium shadow">
                My Profile
            </a>
        </div>

        <!-- Stats -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

            <!-- Employees -->
            <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
                <div class="flex items-center justify-between">
                    <h2 class="font-semibold text-lg text-gray-800">Employees</h2>
                    <div class="p-3 bg-blue-100 rounded-full">
                        👥
                    </div>
                </div>
                <p class="text-gray-500 mt-2">Manage all employee records</p>
                <a href="#"
                   class="mt-4 inline-block text-blue-600 font-medium hover:underline">
                    View Employees →
                </a>
            </div>

            <!-- Departments -->
            <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
                <div class="flex items-center justify-between">
                    <h2 class="font-semibold text-lg text-gray-800">Departments</h2>
                    <div class="p-3 bg-green-100 rounded-full">
                        🏢
                    </div>
                </div>
                <p class="text-gray-500 mt-2">Define and manage departments</p>
                <a href="#"
                   class="mt-4 inline-block text-green-600 font-medium hover:underline">
                    View Departments →
                </a>
            </div>

            <!-- Attendance -->
            <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
                <div class="flex items-center justify-between">
                    <h2 class="font-semibold text-lg text-gray-800">Attendance</h2>
                    <div class="p-3 bg-yellow-100 rounded-full">
                        🕒
                    </div>
                </div>
                <p class="text-gray-500 mt-2">Track daily attendance</p>
                <a href="#"
                   class="mt-4 inline-block text-yellow-600 font-medium hover:underline">
                    View Attendance →
                </a>
            </div>

        </div>

        <!-- Bottom Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

            <!-- Payroll -->
            <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
                <div class="flex items-center justify-between">
                    <h2 class="font-semibold text-lg text-gray-800">Payroll</h2>
                    <div class="p-3 bg-purple-100 rounded-full">
                        💰
                    </div>
                </div>
                <p class="text-gray-500 mt-2">Manage employee salaries and payments</p>
                <a href="#"
                   class="mt-4 inline-block text-purple-600 font-medium hover:underline">
                    Open Payroll →
                </a>
            </div>

            <!-- Leave Management -->
            <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
                <div class="flex items-center justify-between">
                    <h2 class="font-semibold text-lg text-gray-800">Leave Management</h2>
                    <div class="p-3 bg-red-100 rounded-full">
                        📅
                    </div>
                </div>
                <p class="text-gray-500 mt-2">Handle employee leave requests</p>
                <a href="#"
                   class="mt-4 inline-block text-red-600 font-medium hover:underline">
                    Manage Leave →
                </a>
            </div>

        </div>

    </div>
</x-app-layout>
