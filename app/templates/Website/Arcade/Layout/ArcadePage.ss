<div class="container" style="margin-top:10vh;">
    <div class="row justify-content-center mb-3">
        $Content
    </div>
    <div class="row">
        <% loop $Games %>
        <div class="card bg-dark" style="width: 18rem;">
            <img class="card-img-top" src="$Thumbnail.URL" alt="$Title">
            <div class="card-body bg-dark">
                <h5 class="card-title text-light pixelFont">$Title</h5>
                <p class="card-text text-light pixelFont">$Description</p>
                <a href="$Location" target="_blank" class="btn btn-warning">Play!</a>
            </div>
        </div>
        <% end_loop %>

    </div>
</div>