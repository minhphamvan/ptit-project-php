<?php

class BaseController {
    const VIEW_FOLDER_NAME = 'Views';

    /*
     * path = Views/.../...
     */
    protected function view($viewPath, array $data = [])
    {
        foreach($data as $key => $value){ // Gán dữ liệu để truyền từ Controller qua View
            $$key = $value;
        }

        return require (self::VIEW_FOLDER_NAME . '/' . str_replace('.', '/', $viewPath) . '.php');
    }
}
