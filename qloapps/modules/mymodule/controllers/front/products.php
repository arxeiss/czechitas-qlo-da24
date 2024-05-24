<?php
class MyModuleProductsModuleFrontController extends ModuleFrontController
{
    public function initContent()
    {
        parent::initContent();

        // Define a static token
        $static_token = constant('_MYMODULE_API_TOKEN_');

        // Get token from request
        $token = Tools::getValue('token');

        // Check if the token is valid
        if ($token !== $static_token) {
            $this->sendResponse(['error' => 'Invalid token'], 403);
            return;
        }


        switch ($_SERVER['REQUEST_METHOD']) {
            case 'GET':
                $this->get();
                break;
            case 'POST':
                $postData = file_get_contents('php://input');
                $data = json_decode($postData, true);
                $this->post($data);
                break;
            case 'PUT':
                $postData = file_get_contents('php://input');
                $data = json_decode($postData, true);
                $this->put($data);
                break;
            default:
                $this->sendResponse(['error' => 'Invalid request method'], 405);
        }
    }



    private function get()
    {
        $products = Product::getProducts($this->context->language->id, 0, 0, 'id_product', 'ASC');
        $productData = [];

        foreach ($products as $p) {
            $product = (object) $p;
            $productData[] = [
                'id' => $product->id_product,
                'name' => $product->name,
                'description' => $product->description,
                'description_short' => $product->description_short,
                'price' => $product->price,
                'quantity' => $product->quantity,
                'new' => $product->new,
                'active' => $product->active,
            ];
        }

        $this->sendResponse(['products' => $productData]);
    }


    private function post($data)
    {
        $this->sendResponse(['error' => 'Invalid request method'], 405);
    }


    private function put($data)
    {
        $this->sendResponse(['error' => 'Invalid request method'], 405);
    }


    private function sendResponse($data, $status = 200)
    {
        header('Content-Type: application/json');
        http_response_code($status);
        echo json_encode($data);
        exit;
    }
}
