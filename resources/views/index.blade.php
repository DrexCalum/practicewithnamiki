    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <div class="star-rating">
            <input type="radio" name="rating" value="1"><i></i>
            <input type="radio" name="rating" value="2"><i></i>
            <input type="radio" name="rating" value="3"><i></i>
            <input type="radio" name="rating" value="4"><i></i>
            <input type="radio" name="rating" value="5"><i></i>
        </div>
        
        // Example JavaScript
        $('.star-rating input').click(function() {
            var rating = $(this).val();
            var item_id = $(this).data('item-id'); // Assuming you have a way to get the item ID
            $.ajax({
                url: '/ratings',
                method: 'POST',
                data: {rating: rating, item_id: item_id},
                success: function(response) {
                    // Handle success
                },
                error: function(xhr) {
                    // Handle error
                }
            });
        });
    </body>
    </html>