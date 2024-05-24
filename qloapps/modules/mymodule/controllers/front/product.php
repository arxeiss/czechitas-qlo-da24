<?php
class MyModuleProductModuleFrontController extends ModuleFrontController
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
        $productId = (int)Tools::getValue('id');
        if (!$productId) {
            $this->sendResponse(['error' => 'Product ID is required'], 400);
            return;
        }

        $product = new Product($productId, true, $this->context->language->id);
        if (!Validate::isLoadedObject($product)) {
            $this->sendResponse(['error' => 'Product not found'], 404);
            return;
        }

        $productData = [
            'id' => $product->id,
            'name' => $product->name,
            'description' => $product->description,
            'description_short' => $product->description_short,
            'price' => $product->price,
            'quantity' => $product->quantity,
            'new' => $product->new,
            'active' => $product->active,

            // Add other product details as needed
        ];

        $this->sendResponse($productData);
    }


    private function post($data)
    {
        $this->sendResponse(['error' => 'Invalid request method'], 405);
    }


    private function put($data)
    {
        $productId = isset($data['id']) ? (int)$data['id'] : null;
        $name = isset($data['name']) ? $data['name'] : null;
        $description = isset($data['description']) ? $data['description'] : null;
        $description_short = isset($data['description_short']) ? $data['description_short'] : null;

        if (!$productId) {
            $this->sendResponse(['error' => 'Product ID and new name are required'], 400);
            return;
        }

        $product = new Product($productId);
        if (!Validate::isLoadedObject($product)) {
            $this->sendResponse(['error' => 'Product not found'], 404);
            return;
        }

        if($name) {
            $product->name = [$this->context->language->id => $name];
        }
        if($description) {
            $product->description = [$this->context->language->id => $description];
        }
        if($description_short) {
            $product->description_short = [$this->context->language->id => $description_short];
        }
        if ($product->update()) {
            $this->sendResponse(['success' => 'Product name updated successfully']);
        } else {
            $this->sendResponse(['error' => 'Failed to update product name'], 500);
        }
    }


    private function sendResponse($data, $status = 200)
    {
        header('Content-Type: application/json');
        http_response_code($status);
        echo json_encode($data);
        exit;
    }
}
