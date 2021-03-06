<?php

namespace App\Http\Livewire\Idea;

use App\Models\Idea;
use Livewire\Component;
use App\Traits\handleRedirecttrait;
use Illuminate\Support\Facades\Mail;
use App\Jobs\NotifyVotersOnStatusChange;
use App\Mail\IdeaSendEmailOnChangeStatus;

class IdeaSetStatus extends Component
{
    use handleRedirecttrait;
    public Idea $idea;
    public $status;
    public $notify_voters;

    /**
     * @Route("Route", name="RouteName")
     */

    public function mount()
    {
        $this->status = $this->idea->status_id;
    }
    public function statusChange()
    {
        $this->redirectToLogin();

        if ($this->notify_voters) {
            NotifyVotersOnStatusChange::dispatch($this->idea);
        }
        $this->idea->updateVote($this->status);
        $this->emit('statusHasChanged');
    }

    public function render()
    {
        return view('livewire.idea.idea-set-status');
    }
}
