
$( document ).ready( () => {
    $( '#state_id' ).change( () => {

        const state_id = $('#state_id option:selected').val();

        //validate 
        if ( state_id )
        {     
            //alert( state_id);
            loadLgas( { 'state_id' : state_id } );
        }
        else
        {
          alert( 'Please select a state' );   
        }

    });

    const loadLgas = ( data ) => {
           
        $.ajax({
            url: './state_lgas',//url 
            method: 'POST', 
            data: data,
            success: ( res ) => {
                //parsing results
                $( '#lga_id' ).html( '' ).html( res );                    
            }
        }); 
        
    };

});
