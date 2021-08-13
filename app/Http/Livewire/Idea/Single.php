<?php

namespace App\Http\Livewire\Idea;

use App\Models\Idea;
use Livewire\Component;

class Single extends Component
{
    public $idea;
    public $votes_count;
    public $hasVoted;

    public function render()
    {
        return view('livewire.idea.single');
    }
    public function mount($idea)
    {
        $this->idea = $idea;
        $this->votes_count = $idea->votes_count;
        $this->hasVoted = $idea->isVoted();
    }
    public function handleVote()
    {
        if (!auth()->check()) {
            return redirect('/login');
        }
        if ($this->hasVoted) {
            $this->idea->removeVote(auth()->id());
            $this->votes_count--;
            $this->hasVoted = null;
        } else {
            $this->idea->vote(auth()->id());
            $this->votes_count++;
            $this->hasVoted = true;
        }
    }
}