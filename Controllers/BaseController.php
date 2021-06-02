<?php

class BaseController {
    const VIEW_FOLDER_NAME = 'Views';

    const MODEL_FOLDER_NAME = 'Models';

    /*
     * path = Views/.../...
     */
    protected function view($viewPath, array $data = [])
    {
        foreach($data as $key => $value){ // Gán dữ liệu để truyền từ Controller qua View
            $$key = $value;
        }

        require (self::VIEW_FOLDER_NAME . '/' . str_replace('.', '/', $viewPath) . '.php');
    }


    protected function loadModel($modelPath){
        
        require (self::MODEL_FOLDER_NAME . '/' . $modelPath . '.php');
    }
    
}
