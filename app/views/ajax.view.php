<script>


  // Check if the email address is valid
  /*var emailRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
  if (!emailRegex.test(email)) {
    return false;
  }
*/
   
$(document).ready(function() {
  $("#myform").submit(function(e) {
    e.preventDefault();
  
    var s_id = $('#s_id').val();
    var program = $('#program').val();
    var batch = $('#batch').val();
    var name = $('#name').val();
    var nic = $('#nic').val();
    var dob = $('#dob').val();
    var gender = $('#gender').val();
    var email = $('#email').val();
    var address = $('#address').val();

    var params = {
      s_id: s_id,
      program: program,
      batch: batch,
      name: name,
      nic: nic,
      dob: dob,
      gender: gender,
      email: email,
      address: address,
      type: 'insert'
    };

    $.ajax({
      url: '<?=ROOT?>/Ajax',
      type: 'POST',
      data: params,
      dataType: 'Text',
      success: function(data) {
       
        console.log(data);
       
       if (typeof data === 'string' && data.includes('ID empty')) {
          alert('Enter the Student ID');
          clear();

       }else if(typeof data === 'string' && data.includes('record exist')) {
          alert('Record Already Exist');
          clear();
        
        } else if (typeof data === 'string' && data.includes('not')) {
          alert('Data Not Inserted');
       
        } else if (typeof data === 'string' && !data.includes('not')) {
          alert('Data Insert Sucessfully');
          $('#table_data').html(data);
          clear();
        }
      }
    });
  });
});
 
function search_id(){
    
    var s_id = $('#s_id').val();

$.ajax({
  url: '<?=ROOT?>/Ajax',
  type: 'POST',
  data: {
    s_id: s_id,
    type: 'search'
  },
  dataType: 'json',
  success: function(data) {
    console.log(data);
    
    var program = $('#program');
    program.val(data.program);
    
    var batch = $('#batch');
    batch.val(data.batch);

    var name_textbox = $('#name');
    name_textbox.val(data.name);
    
    var nic = $('#nic');
    nic.val(data.nic);
    
    var dob = $('#dob');
    dob.val(data.dob);
    
    var gender = $('#gender');
    gender.val(data.gender);

    var email = $('#email');
    email.val(data.email);

    var address = $('#address');
    address.val(data.address);

 
  }
});

}
function update_(){
  
  var s_id = $('#s_id').val();
    var program = $('#program').val();
    var batch = $('#batch').val();
    var name = $('#name').val();
    var nic = $('#nic').val();
    var dob = $('#dob').val();
    var gender = $('#gender').val();
    var email = $('#email').val();
    var address = $('#address').val();

    var params = {
      s_id: s_id,
      program: program,
      batch: batch,
      name: name,
      nic: nic,
      dob: dob,
      gender: gender,
      email: email,
      address: address,
      type: 'update'
    };

    $.ajax({
      url: '<?=ROOT?>/Ajax',
      type: 'POST',
      data: params,
      dataType: 'Text',
      success: function(data) {
       
        console.log(data);
        if (typeof data === 'string' && data.includes('ID empty')) {
          alert('Enter the Student ID');
        } else if (typeof data === 'string' && data.includes('valid id')) {
          alert('Enter The Valid Student ID');  
        } else if (typeof data === 'string' && !data.includes('valid id')) {
          alert('Update Sucessfully');
          $('#table_data').html(data);
          clear();
        }
      }
    });
}
function delete_rec(){
    
    var s_id = $('#s_id').val();

$.ajax({
  url: '<?=ROOT?>/Ajax',
  type: 'POST',
  data: {
    s_id: s_id,
    type: 'delete'
  },
  dataType: 'Text',
  success: function(data) {
    console.log(data);
    if (typeof data === 'string' && data.includes('ID empty')) {
          alert('Enter the Student ID');
        } else if (typeof data === 'string' && data.includes('valid id')) {
          alert('Enter The Valid Student ID');  
        } else if (typeof data === 'string' && !data.includes('valid id')) {
          alert('Record Deleted');
          $('#table_data').html(data);
          clear();
        }
      }
});

}

</script>