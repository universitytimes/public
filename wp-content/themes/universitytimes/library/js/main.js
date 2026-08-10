jQuery(function($){
    $('#load_more_posts').on('click', function(e){
        console.log('hi');
        e.preventDefault();
         var $offset = $(this).data('offset');
         var $bylinename = $(this).data('bylinename');
         console.log('var'+$offset);
        $.ajax({
            method: 'POST',
            url: ajax_object.ajax_url,
            type: 'JSON',
            data: {
                offset: $offset,
                name: $bylinename,
                action: 'load_more_posts'
            },
            success:function(response){
                console.log(response);
                $('#load_more_posts').data('offset', parseInt(response.data.offset));

            }
        }); 
    })
});