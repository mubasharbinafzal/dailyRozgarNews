
$(document).ready(function(){

    $(".pagination li a").addClass("page-link"); // add class in pagination page link

    $('#country').change(function(){    // on change add country state or city
    	var country_id = $('#country').val();
    	if(country_id != ''){

    		$.ajax({
    			url:"dynamic_dependent/fetch_state",
    			method: "POST",
    			data:{country_id:country_id},
    			success:function(data)
    			{
                    $('#state').html(data);
                    $('#city').html('<option value="">Select City</option>');
    				
    			}
    		});
    	}else{
            
            $('#state').html('<option value="">Select state</option>');
            $('#city').html('<option value="">Select City</option>');
        }
    });


      $('#state').change(function(){    // on change add country state or city
        var state_id = $('#state').val();
        if(state_id != ''){

            $.ajax({
                url:"dynamic_dependent/fetch_city",
                method: "POST",
                data:{state_id:state_id},
                success:function(data)
                {
                    $('#city').html(data);
                }
            });
        }else{

            $('#state').html('<option value="">Select state</option>');
            $('#city').html('<option value="">Select City</option>');
        }
    });



});