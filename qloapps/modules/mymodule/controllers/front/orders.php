<?php
class MyModuleOrdersModuleFrontController extends ModuleFrontController
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
        $orders = Order::getOrdersWithInformations();
        $orderData = [];

        foreach ($orders as $order) {
            $orderData[] = [
                'id' => $order['id_order'],
                'reference' => $order['reference'],
                'total_paid' => $order['total_paid'],
                'date_add' => $order['date_add'],
                // Add other order details as needed
            ];
        }

        $this->sendResponse(['orders' => $orderData]);
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
