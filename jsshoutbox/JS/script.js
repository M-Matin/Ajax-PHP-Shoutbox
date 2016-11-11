$(document).ready(function(){
//eventhandler for what happend when submit btn is clicked
  $('#submit').on('click', function(){
//define variable for each form value I am going to use
    var name = $('#name').val();
    var shout = $('#shout').val();
//getdate() function is what I am going to define later to show the time of user input
    var date = getdate();
// dataString is the variable I am going to use for all other variable and then with AJAX I will pass this string to index.php
    var dataString = 'name =' + name + "/shout =" + shout + "/date =" + date;

    //validation
    if(name == '' || shout ==''){
      alert('Please fill in your name and commet!');
    } else {
      $.ajax({
        type: 'POST',
        url: '../jsshoutbox.php/shoutbox.php',
        //data I want to use it
        data: dataString,
        cache: false,
        //if it is successful run the function
        success: function(html){//this function is for insert data to htlm file without refresh
          $('#shout ul').prepend(html);
        }
      });
}
    return false;
  });
});
