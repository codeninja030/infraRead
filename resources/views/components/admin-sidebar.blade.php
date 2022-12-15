<div id="sidebar-info" class="w-full bg-gray-100 lg:w-64 lg:min-h-screen lg:fixed">
  {{--sidebar info--}}
  <div class="lg:justify-between lg:h-full lg:flex lg:flex-col">
      {{-- sidebar top --}}
      <div id="sidebar-top" class="flex flex-col h-48 lg:justify-between">
          {{-- logo --}}
          <a href="/app"><img src="/img/infraread144.png" class="w-12 ml-4 mt-4" alt=""></a>
          <ul class="mt-4 lg:mt-0">
              <li class="hover:bg-primary hover:text-white @if (request()->routeIs('admin.source.index')) bg-gray-200 @endif">
                  <a href="/admin/source" class="w-full pl-4 py-2 block">Sources</a>
              </li>
              <li class="hover:bg-primary hover:text-white @if (request()->routeIs('admin.category.index')) bg-gray-200 @endif">
                  <a href="/admin/category" class="w-full pl-4 py-2 block">Categories</a>
              </li>
          </ul>
      </div>
      {{-- User --}}
      <div class="flex w-full items-center justify-between lg:absolute bottom-8 px-4">
          <span class="uppercase text-sm font-bold text-gray-600">{{ Auth::user()->name }}</span>
          <a href="/logout" class="px-3 py-2 ml-2 text-xs uppercase bg-gray-300 rounded-lg hover:bg-primary hover:text-white">logout</a>
      </div>
  </div>
</div>
