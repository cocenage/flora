<?php

namespace App\Livewire\Blog;

use App\Models\Blog;
use Livewire\Attributes\Computed;
use Livewire\Component;

class BlogList extends Component
{
    #[Computed()]
    public function blogs()
    {
      return Blog::where('is_active', 1)
               ->orderBy('created_at', 'desc') // рекомендуется добавить сортировку
               ->paginate(10); // 10 - количество элементов на странице
    }
    public function render()
    {
        return view('livewire.blog.blog-list', [
            'blogs' => $this->blogs(),
        ]);
    }
}
