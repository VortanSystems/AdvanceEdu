<?php



      $get_sys_data=DB::select('select * from system_settings_general ');

      $metatitle=$get_sys_data[0]->metatitle;
      $metakeywords=$get_sys_data[0]->metakeywords;
      $metadescription=$get_sys_data[0]->metadescription;
      $metafavicon=$get_sys_data[0]->metafavicon;
      $metalogo=$get_sys_data[0]->metalogo;
      $metablacklogo=$get_sys_data[0]->meta_black_logo;
      $metaimage=$get_sys_data[0]->metaimage;
      $copyrighttext=$get_sys_data[0]->copyright_text;
      $sitebrief=$get_sys_data[0]->site_brief;
      $sitemission=$get_sys_data[0]->site_mission;
      $address=$get_sys_data[0]->address;
      $sitephone=$get_sys_data[0]->site_phone;
      $sitename=$get_sys_data[0]->site_name;
      $support_email=$get_sys_data[0]->support_email;
      $cardtttitlea=$get_sys_data[0]->landing_card_title_1;
      $cardtttexta=$get_sys_data[0]->landing_card_text_1;
      $cardttimage=$get_sys_data[0]->landing_card_image_1;

      $cardtttitleb=$get_sys_data[0]->landing_card_title_2;
      $cardtttextb=$get_sys_data[0]->landing_card_text_2;
      $cardttimagb=$get_sys_data[0]->landing_card_image_2;

      $cardtttitlec=$get_sys_data[0]->landing_card_title_3;
      $cardtttextc=$get_sys_data[0]->landing_card_text_3;
      $cardttimagc=$get_sys_data[0]->landing_card_image_3;
  






    	?>