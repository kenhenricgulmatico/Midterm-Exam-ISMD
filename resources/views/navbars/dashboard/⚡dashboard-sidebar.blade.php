<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<div>
    <!-- ========== MAIN SIDEBAR ========== -->
<div id="hs-pro-sidebar" class="hs-overlay [--body-scroll:true] lg:[--overlay-backdrop:false] [--is-layout-affect:true] [--opened:lg] [--auto-close:lg]
hs-overlay-open:translate-x-0 lg:hs-overlay-layout-open:translate-x-0
-translate-x-full transition-all duration-300 transform
w-60
hidden
fixed inset-y-0 z-60 start-0
bg-sidebar-2
lg:block lg:-translate-x-full lg:end-auto lg:bottom-0" role="dialog" tabindex="-1" aria-label="Sidebar">
  <div class="lg:pt-13 relative flex flex-col h-full max-h-full">
    <!-- Body -->
    <nav class="p-3 size-full flex flex-col overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-none [&::-webkit-scrollbar-track]:bg-scrollbar-track [&::-webkit-scrollbar-thumb]:bg-scrollbar-thumb">

      <!-- Home -->
      <div class="pt-3 mt-3 flex flex-col border-t border-sidebar-2-divider first:border-t-0 first:pt-0 first:mt-0">
        <span class="block ps-2.5 mb-2 font-medium text-xs uppercase text-muted-foreground-1">
          Home
        </span>
        <ul class="flex flex-col gap-y-1">
          <li>
            @role('admin')
            <a class="w-full flex items-center gap-x-2 py-2 px-2.5 text-sm text-sidebar-2-nav-foreground rounded-lg hover:bg-sidebar-2-nav-hover focus:bg-sidebar-2-nav-focus" href="/admin/dashboard">
              Dashboard
            </a>
            @endrole
            @role('owner')
            <a class="w-full flex items-center gap-x-2 py-2 px-2.5 text-sm text-sidebar-2-nav-foreground rounded-lg hover:bg-sidebar-2-nav-hover focus:bg-sidebar-2-nav-focus" href="/owner/dashboard">
              Dashboard
            </a>
            @endrole
            @role('employee')
            <a class="w-full flex items-center gap-x-2 py-2 px-2.5 text-sm text-sidebar-2-nav-foreground rounded-lg hover:bg-sidebar-2-nav-hover focus:bg-sidebar-2-nav-focus" href="/employee/dashboard">
              Dashboard
            </a>
            @endrole
          </li>
        </ul>
      </div>

      <!-- Pages -->
       @role('admin')
      <div class="pt-3 mt-3 flex flex-col border-t border-sidebar-2-divider">
        <span class="block ps-2.5 mb-2 font-medium text-xs uppercase text-muted-foreground-1">
          Pages
        </span>
        <ul class="flex flex-col gap-y-1">
          <li><a class="w-full flex items-center gap-x-2 py-2 px-2.5 text-sm rounded-lg hover:bg-sidebar-2-nav-hover focus:bg-sidebar-2-nav-focus" href="#">Posts</a></li>
          <li><a class="w-full flex items-center gap-x-2 py-2 px-2.5 text-sm rounded-lg hover:bg-sidebar-2-nav-hover focus:bg-sidebar-2-nav-focus" href="#">Members</a></li>
        </ul>
      </div>
      @endrole

       @role('owner')
       <div class="pt-3 mt-3 flex flex-col border-t border-sidebar-2-divider">
        <span class="block ps-2.5 mb-2 font-medium text-xs uppercase text-muted-foreground-1">
          Employee
        </span>
        <ul class="flex flex-col gap-y-1">
          <li><a class="w-full flex items-center gap-x-2 py-2 px-2.5 text-sm rounded-lg hover:bg-sidebar-2-nav-hover focus:bg-sidebar-2-nav-focus" href="#">Task</a></li>
          <li><a class="w-full flex items-center gap-x-2 py-2 px-2.5 text-sm rounded-lg hover:bg-sidebar-2-nav-hover focus:bg-sidebar-2-nav-focus" href="#">Performance</a></li>
        </ul>
      </div>
       @endrole


      <!-- Posts (Hard-coded Roles & Users) -->
      @role('admin')
      <div class="pt-3 mt-3 flex flex-col border-t border-sidebar-2-divider">
        <span class="block ps-2.5 mb-2 font-medium text-xs uppercase text-muted-foreground-1">
          Posts
        </span>
        <ul class="flex flex-col gap-y-1">
          <li><a class="w-full flex items-center gap-x-2 py-2 px-2.5 text-sm rounded-lg hover:bg-sidebar-2-nav-hover focus:bg-sidebar-2-nav-focus" href="/admin/roles">Roles</a></li>
          <li><a class="w-full flex items-center gap-x-2 py-2 px-2.5 text-sm rounded-lg hover:bg-sidebar-2-nav-hover focus:bg-sidebar-2-nav-focus" href="/admin/users">Users</a></li>
          <li><a class="w-full flex items-center gap-x-2 py-2 px-2.5 text-sm rounded-lg hover:bg-sidebar-2-nav-hover focus:bg-sidebar-2-nav-focus" href="#">Published</a></li>
        </ul>
      </div>
      @endrole

      @role('owner')
      <div class="pt-3 mt-3 flex flex-col border-t border-sidebar-2-divider">
        <span class="block ps-2.5 mb-2 font-medium text-xs uppercase text-muted-foreground-1">
          Posts
        </span>
        <ul class="flex flex-col gap-y-1">
          <li><a class="w-full flex items-center gap-x-2 py-2 px-2.5 text-sm rounded-lg hover:bg-sidebar-2-nav-hover focus:bg-sidebar-2-nav-focus" href="/owner/employee">Employees</a></li>
          <li><a class="w-full flex items-center gap-x-2 py-2 px-2.5 text-sm rounded-lg hover:bg-sidebar-2-nav-hover focus:bg-sidebar-2-nav-focus" href="#">Published</a></li>
        </ul>
      </div>
      @endrole

      <!-- Admin Section -->
      @role('admin')
      <div class="pt-3 mt-3 flex flex-col border-t border-sidebar-2-divider">
        <span class="block ps-2.5 mb-2 font-medium text-xs uppercase text-muted-foreground-1">
          Admin
        </span>
        <ul class="flex flex-col gap-y-1">
          <li><a class="w-full flex items-center gap-x-2 py-2 px-2.5 text-sm rounded-lg hover:bg-sidebar-2-nav-hover focus:bg-sidebar-2-nav-focus" href="#">Settings</a></li>
          <li><a class="w-full flex items-center gap-x-2 py-2 px-2.5 text-sm rounded-lg hover:bg-sidebar-2-nav-hover focus:bg-sidebar-2-nav-focus" href="#">Logs</a></li>
          <li><a class="w-full flex items-center gap-x-2 py-2 px-2.5 text-sm rounded-lg hover:bg-sidebar-2-nav-hover focus:bg-sidebar-2-nav-focus" href="#">Permissions</a></li>
        </ul>
      </div>
        @endrole

    </nav>
    <!-- End Body -->

    <!-- Footer -->
    <footer class="mt-auto p-3 flex flex-col">
      <ul class="flex flex-col gap-y-1">
        <li><a class="w-full flex items-center gap-x-2 py-2 px-2.5 text-sm rounded-lg hover:bg-sidebar-2-nav-hover focus:bg-sidebar-2-nav-focus" href="#">What's new?</a></li>
        <li><a class="w-full flex items-center gap-x-2 py-2 px-2.5 text-sm rounded-lg hover:bg-sidebar-2-nav-hover focus:bg-sidebar-2-nav-focus" href="#">Help & support</a></li>
      </ul>
    </footer>
  </div>
</div>
<!-- End Sidebar -->
</div>
