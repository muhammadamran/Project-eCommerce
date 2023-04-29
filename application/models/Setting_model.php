<?php
class Setting_model extends CI_Model
{
    public function setting()
    {
        return $this->db->query("SELECT * FROM tb_setting_ecommerce")->result();
        // Setting
        $dataSetting = $this->Setting_model->setting();
        // Text
        // Title
        $x['web_title'] = $dataSetting[0]->title;
        // Company Name
        $x['web_companyname'] = $dataSetting[0]->company_name;
        // App Name
        $x['web_appname'] = $dataSetting[0]->app_name;
        // SEO Desc
        $x['web_seodesc'] = $dataSetting[0]->seodesc;
        // Tag
        $x['web_tag'] = $dataSetting[0]->tag;
        // Text Loader
        $x['web_text_loader'] = $dataSetting[0]->text_loader;
        // Text Footer
        $x['web_footer'] = $dataSetting[0]->footer;
        // Email HelpDesk
        $x['web_email'] = $dataSetting[0]->email;
        // Banner Title
        $x['web_banner_title'] = $dataSetting[0]->banner_title;
        // Banner Paragraph
        $x['web_banner_paragraph'] = $dataSetting[0]->banner_paragraph;
        // Subscribe Title
        $x['web_subscribe_title'] = $dataSetting[0]->title_subscribe;
        // Subscribe Paragraph
        $x['web_subscribe_paragraph'] = $dataSetting[0]->paragraph_subscribe;
        // End Text

        // Pictures
        // Icon
        $x['web_icon'] = $dataSetting[0]->icon;
        // Logo 1
        $x['web_logo_1'] = $dataSetting[0]->logo_1;
        // Logo 2
        $x['web_logo_2'] = $dataSetting[0]->logo_2;
        // Loader
        $x['web_loader'] = $dataSetting[0]->loader;
        // Banner Images
        $x['web_banner'] = $dataSetting[0]->banner;
        // Images Cover
        $x['web_cover'] = $dataSetting[0]->cover;
        // End Pictures
        // End Setting
    }
}
