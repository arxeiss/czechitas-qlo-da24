<?php
class MyModuleProductModuleFrontController extends ModuleFrontController
{
    public function initContent()
    {
        parent::initContent();

        // Define a static token
        $static_token = 'my_static_token';

        // Get token from request
        $token = Tools::getValue('token');

        // Check if the token is valid
        if ($token !== $static_token) {
            $this->sendResponse(['error' => 'Invalid token'], 403);
            return;
        }


        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $this->get();
        } else if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $postData = file_get_contents('php://input');
            $data = json_decode($postData, true);
            $this->post($data);
        } else{
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
            'price' => $product->price,
            // Add other product details as needed
        ];

        $this->sendResponse($productData);
    }


    private function post($data)
    {
        $productId = isset($data['id']) ? (int)$data['id'] : 0;
        $newName = isset($data['name']) ? $data['name'] : '';

        if (!$productId || !$newName) {
            $this->sendResponse(['error' => 'Product ID and new name are required'], 400);
            return;
        }

        $product = new Product($productId);
        if (!Validate::isLoadedObject($product)) {
            $this->sendResponse(['error' => 'Product not found'], 404);
            return;
        }

        $product->name = [$this->context->language->id => $newName];
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
