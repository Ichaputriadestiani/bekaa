<?php

namespace App\View\Components;

use Illuminate\View\Component;

class RecentPost extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $recent_posts;

    public function __construct()
    {
        $this->recent_posts = \App\Models\Post::orderBy('created_at', 'desc')->take(3)->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.recent-post');
    }
}
