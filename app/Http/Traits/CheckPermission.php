<?php

namespace App\Http\Traits;

trait CheckPermission {
    /**
     * @param Request $request
     * @return $this|false|string
     */

    public function CheckPermission($action)
    {
        $check = ['status' => true];

        if (!auth()->user()->isAbleTo($action)) {
            $check = [
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

        return $check;
    }
}