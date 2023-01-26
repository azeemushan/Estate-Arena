<?php
function showSessionErr($key)
{
    $str = "";
    if (isset($_SESSION[$key]) && !empty($_SESSION[$key])) {
        $str = " * " . $_SESSION[$key];
    }
    $_SESSION[$key] = '';
    return $str;
}
function ShowGetErr($key)
{
    $str = "";
    if (isset($_GET[$key]) && !empty($_GET[$key])) {
        $str = $_GET[$key];
    }
    $_GET[$key] = '';
    return $str;
}


/* Store form values in session var */
//if( $_SERVER['REQUEST_METHOD']=='POST' )

if($_POST['submit']='Submit')
{
    foreach( $_POST as $field => $value ) $_SESSION[ 'formfields' ][ $field ]=$value;


/* Function used in html - provides previous value or empty string */
function fieldvalue( $field=false ){
        return ( $field && !empty( $field ) && isset( $_SESSION[ 'formfields' ] ) && array_key_exists( $field, $_SESSION[ 'formfields' ] ) ) ? $_SESSION[ 'formfields' ][ $field ] : '';

$inactive=10;

$_SESSION['expire']=time() +  $inactive;

if(time() > $_SESSION['expire']){
session_unset();
session_destroy();

}

 }
 }
/* example */
//echo "<input type='text' id='username' name='username' value='".fieldvalue('username')."' />";}