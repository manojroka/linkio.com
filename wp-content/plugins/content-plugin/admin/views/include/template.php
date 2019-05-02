
<?php $this->flash_notice->get_flash(); ?>

<?php 

$module_name = '';
if(isset($_GET['module'])){
    $module_name = '> '.ucfirst($_GET['module']).' Template ';
}


$template_name = '';
if(is_array($data)){
    if(isset($data['template'])){
        $template_name = "> <a href='admin.php?page=lcms&module={$_REQUEST['module']}&mid={$_REQUEST['mid']}&templateid={$_REQUEST['templateid']}'>".ucfirst($data['template']->template_name)."</a>";
    }
} else {
    
    if(isset($data->template_name)){
        $template_name = "> <a href='admin.php?page=lcms&module={$_REQUEST['module']}&mid={$_REQUEST['mid']}&templateid={$_REQUEST['templateid']}'>".ucfirst($data->template_name)."</a>";
    }
    
}
//
//
//echo '<pre>';
//print_r($data);
//    
?>

<p><a href="admin.php?page=lcms">Content Templates</a> <?= $module_name ?><?= $template_name ?>  </p>
<input type="hidden" id="lcm_home_url" value="<?= LCM_HOME_URL ?>">