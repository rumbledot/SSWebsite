<div class="row justify-content-center">
    $Content
</div>
<div class="row justify-content-center m-3">
    <% loop $Games %>
    <div class="col-sm-4 col-xs-12 mb-3">
        <div class="card bg-dark rounded-0" style="width: 18rem;">
            <img class="card-img-top" src="$Thumbnail.URL" alt="$Title">
            <div class="card-body bg-dark">
                <h5 class="card-title text-light pixelFont" style="word-wrap:break-word;">$Title</h5>
                <p class="card-text text-light pixelFont" style="word-wrap:break-word;">$Description</p>
                <% if $Location %>
                    <a href="$Location" target="_blank" class="btn btn-warning">
                        <p class="text-light pixelFont">Play!</p>
                    </a>
                <% end_if %>
            </div>
        </div>
    </div>
    <% end_loop %>

</div>