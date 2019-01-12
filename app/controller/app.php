<?php

namespace app\controller;

class app extends common {

    public function index() {
        $model = new \app\model\app();
        $data = $model->get();
        $this->layout('app/view/layout', [
            'data' => $data
        ]);
    }

}
