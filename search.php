<?php
//create short variable names
$search=$_POST['search'];
if(isset($search))
   $search=addslashes($search);
 if(strstr($search,'about')||strstr($search,'develop')||strstr($search,'IT')||strstr($search,'information')||strstr($search,'technology')||strstr($search,'ICT'))
{
    include('about.php');
}   
else if(strstr($search,'products')||strstr($search,'software')||strstr($search,'graphics')||strstr($search,'networking')||strstr($search,'audit')||strstr($search,'computers')||
     strstr($search,'hardware')||strstr($search,'research')||strstr($search,'development'))
{
    include('product.php');
}   
else if(strstr($search,'profile')||strstr($search,'customers')||strstr($search,'clients')||strstr($search,'companies')||strstr($search,'organizations')||strstr($search,'deal')||
     strstr($search,'worked'))
{
    include('profile.php');
}   
else if(strstr($search,'team')||strstr($search,'workforce')||strstr($search,'professionals')||strstr($search,'innovators')||strstr($search,'auditors'))
{
    include('team.php');
}   
else if(strstr($search,'privacy')||strstr($search,'terms')||strstr($search,'conditions'))
{
    include('privacyTerms.php');
}
else if(strstr($search,'careers')||strstr($search,'employment')||strstr($search,'vacancies')||strstr($search,'jobs')||strstr($search,'apply'))
{
    include('careers.php');
}
else if(strstr($search,'address')||strstr($search,'more inquiries')||strstr($search,'visit')||strstr($search,'contact')||strstr($search,'telephone')
    ||strstr($search,'number')||strstr($search,'phone'))
{
    include('contact.php');
}
else if(strstr($search,'disclaimer'))
{
    include('disclaimer.php');
}
else
    include('index.php');   
   
?>
