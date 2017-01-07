/**
 * Created by CharlieBarber on 3/15/16.
 */
function createForm()
{
  var confirm = confirm("Are you sure you want to create a new form?");

  if(confirm == true)
  {
    window.location = "New_Form_Controller.php";
    return true;
  }
  else
  {
    return false;
  }
}

function saveForm()
{

}