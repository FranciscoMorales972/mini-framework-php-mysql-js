<?php 
 function headerAdmin($data="")
{
   $view= "./views/layouts/header.php";
   require_once $view;
}
 function footerAdmin($data="")
{
   $view= "./views/layouts/footer.php";
   require_once $view;
}
 function sidebarAdmin()
{
   $view= "./views/layouts/sidebar.php";
   require_once $view;
}


function base_url(){
   return BASE_URL;//llama la constante que tiene la direccion raiz del proyecto y la retorna
}


function arrayFormatter($data)
{
   $format=print_r("<pre>");
   $format .=print_r($data);
   $format .=print_r("</pre>");;
}
?>