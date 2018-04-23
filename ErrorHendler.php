<?
class ErrorHendler
{
  function register ()
  {
    set_error_hendler([$this, "errorHendler"]);
    
  }
function errorHendler()
{
	return true;
}
}
?>
