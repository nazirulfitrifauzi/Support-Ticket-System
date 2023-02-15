<?php

namespace App\Action;

class CheckPermission
{
    public function handle($action)
    {
        if (auth()->user()->isAbleTo($action)) {
            $result = [ 'status' => true ];
        } else {
            $result = [
                'status' => false,
                'data' => [
                    'title' => 'Error!',
                    'html' => '<div class="leading-8">
                            <b>You dont have permission to do this!</b>
                            <br><p>Please contact administrator.</p>
                        </div>',
                    'icon'  => 'error',
                    'showConfirmButton' => false,
                    'timer' => 2500,
                ]
            ];
        }

        return $result;
    }
}