<?php
class MyModuleApiModuleFrontController extends ModuleFrontController
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

        // Handle API logic here
        $action = Tools::getValue('action');
        switch ($action) {
            case 'getProduct':
                $this->getProduct();
                break;
            default:
                $this->sendResponse(['error' => 'Invalid action'], 400);
                break;
        }
    }

    private function getProduct()
    {
        $productId = (int)Tools::getValue('id_product');
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

    private function sendResponse($data, $status = 200)
    {
        header('Content-Type: application/json');
        http_response_code($status);
        echo json_encode($data);
        exit;
    }
}
