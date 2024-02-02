<?php

namespace App\Livewire\SubCategories;

use App\Repositories\SubCategories\SubCategoryRepository;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;


class CreateSubCategory extends Component
{
    use WithFileUploads;
    public $title;
    public $description;
    public $image;


    public function render()
    {
        return view('livewire.sub_categories.create-sub_category');
    }

    public function submit(SubCategoryRepository $sub_categoryRepository){
        $data = $this->validate();
        $sub_categoryRepository->adminCreate($data);

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
