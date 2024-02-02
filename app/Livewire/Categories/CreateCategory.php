<?php

namespace App\Livewire\Categories;

use App\Repositories\Categories\CategoryRepository;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;


class CreateCategory extends Component
{
    use WithFileUploads;
    public $title;
    public $description;
    public $image;


    public function render()
    {
        return view('livewire.categories.create-category');
    }

    public function submit(CategoryRepository $categoryRepository){
        $data = $this->validate();
        $categoryRepository->adminCreate($data);

        $this->clear();
        $this->dispatch('reRenderParent');
        $this->dispatch('hide-modal','exampleModal');
        $this->dispatch('show-notify-modal','created-alert');
    }

    public function clear(){
        $this->title = '';
        $this->description = '';
        $this->image = '';
    }

    public function rules(){
        return [
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image',
        ];
    }
}
