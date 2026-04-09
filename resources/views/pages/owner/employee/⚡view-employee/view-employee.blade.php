
<div>
   <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
  <!-- Dashboard Header -->
  <div class="mb-8">
    <h2 class="text-2xl font-bold text-gray-800 dark:text-neutral-200">Owner Dashboard</h2>
    <p class="text-sm text-gray-600 dark:text-neutral-300">Overview of your shop and employees</p>
  </div>

  <!-- Employees Table -->
  <div class="bg-white dark:bg-neutral-800 border border-gray-200 dark:border-neutral-700 rounded-xl shadow overflow-hidden">
    <div class="px-6 py-4 border-b border-gray-200 dark:border-neutral-700">
      <h3 class="text-lg font-semibold text-gray-800 dark:text-neutral-200">Employees</h3>
    </div>

    <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700">
      <thead class="bg-gray-50 dark:bg-neutral-800">
        <tr>
          <th class="px-6 py-3 text-start text-xs font-semibold uppercase text-gray-800 dark:text-neutral-200">Name</th>
          <th class="px-6 py-3 text-start text-xs font-semibold uppercase text-gray-800 dark:text-neutral-200">Role</th>
          <th class="px-6 py-3 text-end text-xs font-semibold uppercase text-gray-800 dark:text-neutral-200">Actions</th>
        </tr>
      </thead>
      <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
        @foreach($this->employees as $employee)
          <tr class="hover:bg-gray-50 dark:hover:bg-neutral-700">
            <td class="px-6 py-2 text-sm text-gray-800 dark:text-neutral-200">{{ $employee->name }}</td>
            <td class="px-6 py-2 text-sm text-gray-500 dark:text-neutral-400">
              {{ $employee->roles->pluck('name')->implode(', ') }}
            </td>
            <td class="px-6 py-2 text-end">
              <a href="{{ route('owner.employee.edit', $employee->id) }}"
                 class="inline-flex items-center px-3 py-1 text-sm font-medium rounded-md bg-blue-600 text-white hover:bg-blue-700">
                Edit
              </a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>

{{-- Live as if you were to die tomorrow. Learn as if you were to live forever. - Mahatma Gandhi --}}
</div>
