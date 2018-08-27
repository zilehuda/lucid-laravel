<?php
namespace App\Services\Api\Features;

use Lucid\Foundation\Feature;
use Illuminate\Http\Request;
use App\Domains\User\Jobs\ValidateUserInputJob;

class StoreUserFeature extends Feature
{
    public function handle(Request $request)
    {

        $this->run(ValidateUserInputJob::class($request->all()));

    }
}
