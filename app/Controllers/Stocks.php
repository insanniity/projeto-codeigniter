<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ProductModel;
use App\Models\StockModel;

class Stocks extends BaseController
{   

    private $productModel;
    private $stockModel;

    public function __construct()
    {
        $this->productModel = new ProductModel();
        $this->stockModel = new StockModel();
    }

    public function index()
    {
            // load all products
            $products =  $this->productModel->where('restaurant_id', session()->user['restaurant_id'])->findAll();
    
            $data = [
                'title' => 'Stocks',
                'page' => 'Stocks',
                'products' => $products
            ];
    
            return view('painel/stocks/index', $data);
    }


    public function add($enc_id)
    {

        $id = Decrypt($enc_id);
        if (empty($id)) {
            return redirect()->to('/painel/estoque');
        }

        // load product
        $product = $this->productModel->where('product_id', $id)->first();

        // get distinct suppliers within stocks table that belongs to this restaurant
        $stock_suppliers = $this->stockModel->get_stock_suppliers(session()->user['restaurant_id']);

        $data = [
            'title' => 'Stock',
            'page' => 'Adicionar stock',
            'product' => $product,
            'stock_suppliers' => $stock_suppliers,
            'errors' => session()->getFlashdata('errors'),
            'server_error' => session()->getFlashdata('server_error')
        ];

        return view('painel/stocks/add_frm', $data);
    }

    public function add_submit()
    {
        // form validation
        $validation = $this->validate($this->_stock_add_form_validation());

        if (!$validation) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        // check if id_product if valid
        $id_product = Decrypt($this->request->getPost('product_id'));
        if (empty($id_product)) {
            return redirect()->back()->withInput()->with('errors', 'Ocorreu um erro. Tente novamente.');
        }

        // get post data
        $text_stock = $this->request->getPost('text_stock');
        $text_supplier = $this->request->getPost('text_supplier');
        $text_reason = $this->request->getPost('text_reason');
        $text_date = $this->request->getPost('text_date');

        // store stock movement
        $this->stockModel->insert([
            'product_id' => $id_product,
            'stock_quantity' => intval($text_stock),
            'stock_in_out' => 'IN',
            'stock_supplier' => $text_supplier,
            'reason' => $text_reason,
            'movement_date' => $text_date
        ]);

        // increment product stock
        $products_model = new ProductModel();
        $products_model->where('product_id', $id_product)
            ->set('stock', 'stock+' . intval($text_stock), false)
            ->update();

        return redirect()->to('/estoque');
    }


    // --------------------------------------------------------------------
    // remove stock
    // --------------------------------------------------------------------
    public function remove($enc_id)
    {

        $id = Decrypt($enc_id);
        if (empty($id)) {
            return redirect()->to('/painel/estoque');
        }

        // load product
        $product = $this->productModel->where('id', $id)->first();

        $data = [
            'title' => 'Stock',
            'page' => 'Remover stock',
            'product' => $product,
            'errors' => session()->getFlashdata('errors'),
            'server_error' => session()->getFlashdata('server_error')
        ];

        return view('painel/stocks/remove_frm', $data);
    }

    public function remove_submit()
    {
        // form validation
        $validation = $this->validate($this->_stock_remove_form_validation());
        if (!$validation) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        // check if id_product if valid
        $id_product = Decrypt($this->request->getPost('product_id'));
        if (empty($id_product)) {
            return redirect()->back()->withInput()->with('errors', 'Ocorreu um erro. Tente novamente.');
        }

        // get post data
        $text_stock = $this->request->getPost('text_stock');
        $text_reason = $this->request->getPost('text_reason');
        $text_date = $this->request->getPost('text_date');

        // check if stock is available
        $product = $this->productModel->where('product_id', $id_product)->first();
        if ($product->stock < intval($text_stock)) {
            return redirect()->back()->withInput()->with('server_error', 'O stock atual é inferior à quantidade que pretende remover.');
        }

        // store stock movement
        $this->stockModel->insert([
            'id_product' => $id_product,
            'stock_quantity' => intval($text_stock),
            'stock_supplier' => 'Owner',
            'reason' => $text_reason,
            'stock_in_out' => 'OUT',
            'movement_date' => $text_date
        ]);

        // decrement product stock
        $this->productModel->where('product_id', $id_product)
            ->set('stock', 'stock-' . intval($text_stock), false)
            ->update();

        return redirect()->to('/estoque');
    }

    // --------------------------------------------------------------------
    // stock movements
    // -------------------------------------------------------------------->
    public function movements($enc_id, $filter = null)
    {
        $id = Decrypt($enc_id);
        if (empty($id)) {
            return redirect()->to('/painel/estoque');
        }

        // load product
        $product = $this->productModel->where('id', $id)->first();

        // get distinct suppliers within stocks table that belongs to this restaurant
        $stock_suppliers = $this->stockModel->get_stock_suppliers(session()->user['restaurant_id']);

        $data = [
            'title' => 'Stock',
            'page' => 'Movimentos de stock',
            'datatables' => true,
            'product' => $product,
            'movements' => $this->_stock_movements($id, $filter),
            'stock_suppliers' => $stock_suppliers,
            'filter' => empty($filter) ? '' : Decrypt($filter)
        ];

        return view('painel/stocks/movements', $data);
    }

    public function export_csv($enc_id)
    {
        $id = Decrypt($enc_id);
        if (empty($id)) {
            return redirect()->to('/estoque');
        }

        // get stock movements for this product and exports to CSV
        $movements = $this->stockModel->where('product_id', $id)
                                  ->orderBy('movement_date', 'DESC')
                                  ->findAll();

        // download csv file with stock movements
        $this->response->setHeader('Content-Type', 'text/csv');
        $this->response->setHeader('Content-Disposition', 'attachment; filename="movimentos.csv"');

        $output = fopen('php://output', 'w');
        
        // header
        fputcsv($output, ['Data do movimento', 'Quantidade', 'Operação', 'Fornecedor', 'Notas']);

        // data
        foreach($movements as $movement){
            fputcsv($output, 
                [
                    $movement->movement_date,
                    $movement->stock_quantity,
                    $movement->stock_in_out,
                    $movement->stock_supplier,
                    $movement->reason,
                ]
            );
        }

        fclose($output);
        
    }



    // --------------------------------------------------------------------
    // private methods
    // -------------------------------------------------------------------->

    private function _stock_add_form_validation()
    {
        // stock form validation rules
        return [
            'product_id' => [
                'rules' => 'required'
            ],
            'text_stock' => [
                'label' => 'Quantidade',
                'rules' => 'required|numeric|greater_than[0]',
                'errors' => [
                    'required' => 'O campo {field} é obrigatório.',
                    'numeric' => 'O campo {field} deve conter apenas números.',
                    'greater_than' => 'O campo {field} deve conter um valor maior que {param}.'
                ]
            ],
            'text_supplier' => [
                'label' => 'Fornecedor',
                'rules' => 'required',
                'errors' => [
                    'required' => 'O campo {field} é obrigatório.'
                ]
            ],
            // text_reason not required
            'text_date' => [
                'label' => 'Data do movimento',
                'rules' => 'required|valid_date[Y-m-d H:i]',
                'errors' => [
                    'required' => 'O campo {field} é obrigatório.',
                    'valid_date' => 'O campo {field} deve conter um data válida AAAA-MM-DD HH:MM.'
                ]
            ]
        ];
    }

    private function _stock_remove_form_validation()
    {
        // stock form validation rules
        return [
            'product_id' => [
                'rules' => 'required'
            ],
            'text_stock' => [
                'label' => 'Quantidade',
                'rules' => 'required|numeric|greater_than[0]',
                'errors' => [
                    'required' => 'O campo {field} é obrigatório.',
                    'numeric' => 'O campo {field} deve conter apenas números.',
                    'greater_than' => 'O campo {field} deve conter um valor maior que {param}.'
                ]
            ],
            // text_reason not required
            'text_date' => [
                'label' => 'Data do movimento',
                'rules' => 'required|valid_date[Y-m-d H:i]',
                'errors' => [
                    'required' => 'O campo {field} é obrigatório.',
                    'valid_date' => 'O campo {field} deve conter um data válida AAAA-MM-DD HH:MM.'
                ]
            ]
        ];
    }

    private function _stock_movements($id_product, $filter)
    {
        // load stock movements for the product limited to 10000 records
        $stocks_model = new StockModel();
        $movements = [];

        $filter = Decrypt($filter);

        // filters goes here
        switch ($filter) {
            case '':
                $movements = $stocks_model->where('product_id', $id_product)
                    ->orderBy('movement_date', 'DESC')
                    ->findAll(10000);
                break;
            case 'IN':
                $movements = $stocks_model->where('product_id', $id_product)
                    ->where('stock_in_out', 'IN')
                    ->orderBy('movement_date', 'DESC')
                    ->findAll(10000);
                break;
            case 'OUT':
                $movements = $stocks_model->where('product_id', $id_product)
                    ->where('stock_in_out', 'OUT')
                    ->orderBy('movement_date', 'DESC')
                    ->findAll(10000);
                break;
            case substr($filter,0,6) == 'stksup':
                $supplier = substr($filter, 7);
                $movements = $stocks_model->where('product_id', $id_product)
                    ->where('stock_supplier', $supplier)
                    ->orderBy('movement_date', 'DESC')
                    ->findAll(10000);
                break;
        }

        return $movements;
    }
}
