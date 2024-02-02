<?php

namespace App\Livewire\Categories;

use App\Repositories\Categories\CategoryRepository;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class EditCategory extends Component
{
    use WithFileUploads;

    public $category;
    public $title;
    public $description;
    public $image;

    #[On('getData')]
    public function getData($id, CategoryRepository $categoryRepository)
    {
        $this->category = $categoryRepository->find($id);
        $this->title = $this->category->title;
        $this->description = $this->category->description;
        $this->image = $this->category->image;
    }
    public function render()
    {
        return view('livewire.categories.edit-category');
    }

    public function submit(CategoryRepository $categoryRepository){
        $data = $this->validate();
        $categoryRepository->adminUpdate($data,$this->category);
        return redirect(route('admin.categories.index'))->with('success','Category Updated Successfully');
    }
    public function rules(){
        return [
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image',
        ];
    }
}
