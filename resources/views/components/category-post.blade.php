<div class="sidebar-block">
    <h3 class="sidebar-title">Categories</h3>
    <ul class="categories">
        @foreach ($categories as $category)
        <li><a href="{{ $category->category_slug }}">{{ $category->category_name }} <span>{{ $category->post->count() }}</span></a></li>
        @endforeach
    </ul>
</div>
