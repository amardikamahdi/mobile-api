<ol class="flex mb-6 text-gray-500 font-semibold dark:text-white-dark">
    @foreach($breadcrumbs as $breadcrumb)
    @if($loop->first)
    <li><a href="{{ $breadcrumb['route'] }}" class="hover:text-gray-500/70 dark:hover:text-white-dark/70">{{ $breadcrumb['title'] }}</a>
    </li>
    @elseif($loop->last)
    <li class="before:w-1 before:h-1 before:rounded-full before:bg-primary before:inline-block before:relative before:-top-0.5 before:mx-4">
        <a href="{{ $breadcrumb['route'] }}" class="text-primary">{{ $breadcrumb['title'] }}</a></li>
    @else
    <li class="before:w-1 before:h-1 before:rounded-full before:bg-primary before:inline-block before:relative before:-top-0.5 before:mx-4">
        <a href="{{ $breadcrumb['route'] }}" class="hover:text-gray-500/70 dark:hover:text-white-dark/70">{{ $breadcrumb['title'] }}</a></li>
    @endif
    @endforeach
</ol>
