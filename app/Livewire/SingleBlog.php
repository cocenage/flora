<?php

namespace App\Livewire;

use App\Models\Blog;
use Livewire\Component;

class SingleBlog extends Component
{
     public ?Blog $blog;

    public $slug;
    public $meta_description; //добавили description
    public $meta_keywords; // добавили keywords
    public $meta_title;
    public function mount($slug)
    {
        $this->slug = $slug;
    }
    public function render()
    {
        $blog = Blog::where("slug", $this->slug)->firstOrFail();
        $this->blog = $blog;
        $this->meta_description = $blog->meta_description; //поместили в description описание товара
        $this->meta_keywords =  $blog->meta_keywords; // поместили ключевые слова
        $this->meta_title =  $blog->meta_title;
        return view('livewire.single-blog', [
            'blog' => $blog,
            'image' => $blog->image
        ]);
    }

}
