<?php
/**
 * Project: thuvien.
 * File: danhmucController.php.
 * Author: Ken Zaki
 * Email: kenzaki@xiao.vn
 * Create Date: 08:34 - 07/10/2013
 * Website: www.xiao.vn
 */
Class danhmucController extends baseController
{
    public function index()
    {
        $this->view->show('category');
    }
    public function mon($para)
    {

        $mamom = $this->func->getid($para[1]);
        if($this->func->checkid($mamom,"xiaob_subj","subjid"))
        {
            $this->view->data['xdata'] = $mamom;
            $this->view->show('testview');
        }
        else
        {
            $this->view->data['notifi'] = "Xin lỗi, không tồn tại môn này!";
            $this->view->show('404');
        }
    }
    public function lop($para)
    {

        $malop = $this->func->getid($para[1]);
        if($this->func->checkid($malop,"xdata_khoilop","khoilop"))
        {
            $this->view->data['xdata'] = $malop;
            $this->view->show('testview');
        }
        else
        {
            $this->view->data['notifi'] = "Xin lỗi, không tồn tại khối lớp này!";
            $this->view->show('404');
        }
    }
    public function caphoc($para)
    {

        $macaphoc = $this->func->getid($para[1]);
        if($this->func->checkid($macaphoc,"xdata_cap","cap"))
        {
            $this->view->data['xdata'] = $macaphoc;
            $this->view->show('testview');
        }
        else
        {
            $this->view->data['notifi'] = "Xin lỗi, không tồn tại khối lớp này!";
            $this->view->show('404');
        }
    }

}