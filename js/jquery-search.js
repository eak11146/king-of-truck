	   
	function txtSea(v){
		// alert( v );
		document.getElementById('searchData').value = v;
		document.getElementById('search-result').style.display = "none";
	}

   $(document).ready(function(){
		 
        /*
         Set the inner html of the table, tell the user to enter a search term to get started.
         We could place this anywhere in the document. I chose to place it
         in the table.
        */
       //  $('#results').html('<p style="padding:5px;">Enter a search term to start filtering.</p>');

        /* When the user enters a value such as "j" in the search box
         * we want to run the .get() function. */
        $('#searchData').keyup(function() {
			document.getElementById('search-result').style.display = "block";
            /* Get the value of the search input each time the keyup() method fires so we
             * can pass the value to our .get() method to retrieve the data from the database */
            var searchVal = $(this).val();
			 // alert(searchVal);
            /* If the searchVal var is NOT empty then check the database for possible results
             * else display message to user */
            if(searchVal !== '') {

                /* Fire the .get() method for and pass the searchVal data to the
                 * search-data.php file for retrieval */
                $.get('search-data.php?searchData='+searchVal, function(returnData) {
                    /* If the returnData is empty then display message to user
                     * else our returned data results in the table.  */
                    if (!returnData) {
                    //    $('#results').html('<p style="padding:5px;">Search term entered does not return any data.</p>');
                    } else {
                        $('#search-result').html(returnData);
                    }
                });
            } else {
              //  $('#results').html('<p style="padding:5px;">Enter a search term to start filtering.</p>');
			  document.getElementById('search-result').style.display = "none";
            }

        });
		
		  
		 

    });
	/*
	$('a').click( function(e) {e.preventDefault();  
		alert("test");
		return false; } );
	/*

var all2 = document.getElementsByClassName('list-group-item');
for(var i=0;i<all2.length;i++)
    all2[i].addEventListener('click',function(){//If you're gonna use attachEvent, use 'onclick' instead of 'click'
        this.innerHTML = 'New Text';
    }});
	*/
 
	 