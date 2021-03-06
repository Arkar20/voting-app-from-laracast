<?php

namespace App\Http\Livewire\Idea;

use App\Models\Idea;
use App\Models\votes;
use App\Models\Status;
use Livewire\Component;
use App\Models\Category;
use Livewire\WithPagination;

class Ideas extends Component
{
    use WithPagination;

    public $category;
    public $status;
    public $sortby = null;
    public $search;

    protected $queryString = ['status', 'category', 'sortby', 'search'];

    protected $listeners = ['FilterStatusChanged'];

    public function updatedCategory()
    {
        if ($this->category == 'All') {
            $this->category = null;
        }
        $this->resetPage();
    }

    public function FilterStatusChanged($newStatus)
    {
        if ($newStatus === 'All Ideas') {
            $this->status = null;
        } elseif ($newStatus === 'All Ideas') {
            $this->status = null;
        } else {
            $this->status = $newStatus;
        }
        $this->resetPage();
    }

    public function render()
    {
        $statuses = cache()
            ->get('statuses')
            ->pluck('id', 'name');

        $categories = cache()
            ->get('categories')
            ->pluck('id', 'name');

        $categories = Category::all()->pluck('id', 'name');

        return view('livewire.idea.ideas', [
            'ideas' => Idea::when(
                $this->status && $this->status !== 'All',
                function ($query) use ($statuses) {
                    return $query->where(
                        'status_id',
                        $statuses->get($this->status)
                    );
                }
            )
                ->when($this->sortby == 'Top Ideas', function ($query) {
                    return $query->orderBy('votes_count', 'desc');
                })
                ->when($this->sortby == 'My Ideas', function ($query) {
                    return $query->where('user_id', auth()->id());
                })
                ->when(strlen($this->search) > 3, function ($query) {
                    return $query
                        ->where('title', 'LIKE', '%' . $this->search . '%')
                        ->orWhere('desc', 'LIKE', '%' . $this->search . '%');
                })
                ->when($this->category, function ($query) use ($categories) {
                    return $query->where(
                        'category_id',
                        $categories->get($this->category)
                    );
                })
                ->addSelect([
                    'voted_at_id' => votes::select('id')
                        ->where('user_id', auth()->id())
                        ->whereColumn('idea_id', 'ideas.id'),
                ])
                ->latest()
                ->simplePaginate(10),
        ]);
    }
}
