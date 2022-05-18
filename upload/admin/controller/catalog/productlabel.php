<?php
class ControllerExtensionModuleProductLabel extends Controller {
    private $error = array();

    public function index() {
        $this->load->language('catalog/productlabel');

        $this->document->setTitle($this->language->get('heading_title'));

        $this->load->model('setting/setting');

        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
            
            $this->model_setting_setting->editSetting('module_product', $this->request->post);

            $this->session->data['success'] = $this->language->get('text_success');

            $this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true));

        }

        if (isset($this->error['warning'])) {
            $data['error_warning'] = $this->error['warning'];
        } else {
            $data['error_warning'] = '';
        }

        $data['breadcrumbs'] = array();

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_extension'),
            'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true)
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('heading_title'),
            'href' => $this->url->link('catalog/productlabel', 'user_token=' . $this->session->data['user_token'], true)
        );

        $data['action'] = $this->url->link('catalog/productlabel', 'user_token=' . $this->session->data['user_token'], true);

        $data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);

        $data['user_token'] = $this->session->data['user_token'];

        if (isset($this->request->post['label_status'])) {
            $data['label_status'] = $this->request->post['label_status'];
        } elseif ($this->config->get('label_status')) {
            $data['label_status'] = $this->config->get('label_status');
        } else {
            $data['label_status'] = 0;
        }

        if (isset($this->request->post['label_position'])) {
            $data['label_position'] = $this->request->post['label_position'];
        }  elseif ($this->config->get('label_position')) {
            $data['label_position'] = $this->config->get('label_position');
        } else {
            $data['label_position'] = "";
        }

    

        if (isset($this->request->post['label_text'])) {
            $data['label_text'] = $this->request->post['label_text'];
        } elseif ($this->config->get('label_text')) {
            $data['label_text'] = $this->config->get('label_text');
        } else {
            $data['label_text'] = "";
        }

        if (isset($this->request->post['label_textsize'])) {
            $data['label_textsize'] = $this->request->post['label_textsize'];
        } elseif ($this->config->get('label_textsize')) {
            $data['label_textsize'] = $this->config->get('label_textsize');
        } else {
            $data['label_textsize'] = 0;
        }

        if (isset($this->request->post['label_textcolor'])) {
            $data['labeltextcolor'] = $this->request->post['label_textcolor'];
        } elseif ($this->config->get('labeltextcolor')) {
            $data['label_textcolor'] = $this->config->get('label_textcolor');
        } else {
            $data['label_textcolor'] = "";
        }

      

        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('catalog/product', $data));

    }

    protected function validate() {
        if (!$this->user->hasPermission('modify', 'catalog/product')) {
            $this->error['warning'] = $this->language->get('error_permission');
        }

        return !$this->error;
    }

    
    public function empty_dir($directory, $delete = false)
    {
        $contents = glob($directory . '*');
        foreach($contents as $item)
        {
            if (is_dir($item))
                self::empty_dir($item . '/', true);
            else
                unlink($item);
        }
        if ($delete === true)
            rmdir($directory);
    }

    public function resize($merged_filename,$filename, $width, $height) {

        $extension = pathinfo($filename, PATHINFO_EXTENSION);
        $image_new = 'cache/' . utf8_substr($filename, 0, utf8_strrpos($filename, '.')) . '-' . $width . 'x' . $height . '.' . $extension;
        $path = '';
        $directories = explode('/', dirname($image_new));
        foreach ($directories as $directory) {
            $path = $path . '/' . $directory;

            if (!is_dir(DIR_IMAGE . $path)) {
                @mkdir(DIR_IMAGE . $path, 0777);
            }
        }
        $image = new Image($merged_filename);
        $image->resize($width, $height);
        $image->save(DIR_IMAGE . $image_new);
    }

    public function productLabel(){

        $json=array();
        try
        {
            
            /*$font_style = $this->config->get('module_watermark_font');
            $position = $this->config->get('module_watermark_position');
            $opacity = $this->config->get('module_watermark_opacity');
            $watermarktext = $this->config->get('module_watermark_watermarktext');
            $watermarktextsize = $this->config->get('module_watermark_watermarktextsize');
            $watermarktextcolor = $this->config->get('module_watermark_watermarktextcolor');*/

            $labelposition = $this->request->post['labelposition'];
            $textlabel = $this->request->post['textlabel'];
            $labeltextsize = $this->request->post['labeltextsize'];
            $labeltextcolor = $this->request->post['labeltextcolor'];

            // $font = dirname(__FILE__) . '/fonts/BRLNSB.TTF';

            //$font_files= glob(DIR_IMAGE.'fonts/'. '*.{ttf,TTF}' , GLOB_BRACE);
            
            //$image_files= glob(DIR_IMAGE.'catalog/demo/'. '*.{png,gif,jpeg,bmp,jpg}' , GLOB_BRACE);

            
            
            $query = $this->db->query("SELECT * FROM `oc_product_label` WHERE 1");

            $product_query = $this->db->query("SELECT * FROM `oc_product_label` WHERE 1");

            $images = $product_query->rows;

            $additional_images = $query->rows;

            $product_images = array_merge($images, $additional_images);

            
            $data['product_images'] = array();

            foreach ($product_images as $product_image){

                
                $pro_image = $product_image['image'];

                if($pro_image == NULL){
                    continue;
                }

                list($width, $height, $image_type) = getimagesize(DIR_IMAGE.$pro_image);

                $dest_image = imagecreatetruecolor($width, $height);
                
                if($label_position == 0){
                    $x=$width/2-100;
                    $y=$height;
                }
                elseif($label_position == 1){
                    $x=$width/2;
                    $y=$height;
                }
                elseif($label_position == 2){
                    $x=0;
                    $y=$height;
                }
                elseif($label_position == 3){
                    $x=$width/2;
                    $y=$height/2;
                }
                

                if($label_textcolor == 0){
                    $r=255;
                    $g=255;
                    $b=255;
                }
                elseif($label_textcolor == 1){
                    $r=255;
                    $g=0;
                    $b=0;
                }
                elseif($label_textcolor == 2){
                    $r=0;
                    $g=0;
                    $b=0;
                }
                else{
                    $r=0;
                    $g=0;
                    $b=255;
                }
        
                
               

                $this->resize($save, $pro_image, $this->config->get('theme_' . $this->config->get('config_theme') . '_image_thumb_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_thumb_height'));
    
                $this->resize($save, $pro_image, $this->config->get('theme_' . $this->config->get('config_theme') . '_image_popup_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_popup_height'));
                $this->resize($save, $pro_image, $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_height'));
                $this->resize($save, $pro_image, $this->config->get('theme_' . $this->config->get('config_theme') . '_image_additional_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_additional_height'));
                $this->resize($save, $pro_image, $this->config->get('theme_' . $this->config->get('config_theme') . '_image_related_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_related_height'));
                $this->resize($save, $pro_image, $this->config->get('theme_' . $this->config->get('config_theme') . '_image_wishlist_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_wishlist_height'));
                $this->resize($save, $pro_image, $this->config->get('theme_' . $this->config->get('config_theme') . '_image_cart_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_cart_height'));
                
                imagedestroy($dest_image);
                
            }
            $json['success']="ProductLabel Created Successfully";
        }
        catch(Exception $e){
           $json['error']=$e;
        }
       $this->response->addHeader('Content-Type: application/json');
       $this->response->setOutput(json_encode($json));  

    }
    
}

