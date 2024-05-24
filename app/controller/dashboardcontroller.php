<?php

class DashboardController extends Controller
{
    public function index()
    {
        $topupModel = $this->model('Topup');
        $data['topups'] = $topupModel->getAllTopups();
        $this->view('dashboard', $data);
    }

    public function tambah()
    {
        $this->view('tambah');
    }
}
