<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<?
if (!empty($credits))
    foreach ($credits as $item)
        $this->load->view('user/accaunt/blocks/renderInvests_part.php', compact("item"));
?>