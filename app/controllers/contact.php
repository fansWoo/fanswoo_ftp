<?php

class contact extends CI_controller
{
    public function __construct(){
        parent::__construct();
        $this->data = $this->common_model->common();
        $this->load->helper('form');
        $this->load->library('form_validation');
    }
    
    public function index()
    {
        $data = $this->data;
        $data['page'] = 'contact';

        //global
        $data['global']['style'][] = 'style';
        $data['global']['style'][] = 'contact';
            
        //temp
        $data['temp']['header_up'] = $this->load->view('temp/header_up', $data, TRUE);
        $data['temp']['header_down'] = $this->load->view('temp/header_down', $data, TRUE);
        $data['temp']['topheader'] = $this->load->view('temp/topheader', $data, TRUE);
        $data['temp']['footer'] = $this->load->view('temp/footer', $data, TRUE);
        
        $this->load->view('contact/index', $data);
    }

    public function contact_post()
    {   
        $name = $this->input->post('name');
        $company = $this->input->post('company');
        $telphone = $this->input->post('telphone');
        $email = $this->input->post('email');
        $address = $this->input->post('address');
        $need = $this->input->post('need');
        $need_child = $this->input->post('need_child');
        $money = $this->input->post('money');
        $text = $this->input->post('text');
            
        $message = "
        <p>客戶姓名： $name </p>
        <p>公司名稱： $company </p>
        <p>聯繫電話： $telphone </p>
        <p>電子郵件： $email </p>
        <p>聯繫地址： $address </p>
        <p>詢問項目： $need </p>
        <p>項目細節： $need_child </p>
        <p>客戶預算： $money </p>
        <p>需求內容： $text </p>
        ";

        $this->load->library('mailer');
        $return = $this->mailer->sendmail(
            'service@fanswoo.com',
            $name,
            "$company 的 $name 有一封瘋沃科技的需求單".date('Y-m-d H:i:s'),
            $message
        );

        if( $return !== TRUE )
        {
            echo $return;
        }
        else
        {
            header("Location:".base_url('contact'));
        }

    }
}

?>