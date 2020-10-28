<div class="row justify-content-center mb-3">
    $Content
</div>
<div class="row justify-content-center mb-3">
    <div class="col-sm-6 col-xs-12">
        $CommentForm
    </div>
    <div class="col-sm-6 col-xs-12 overflow-auto" style="overflow-x:hidden;">
        <% if $CheckedComment %>
            <% loop $CheckedComment %>
                <div class="col-10 m-3 bg-white rounded border">
                    <p>$Name</p>
                    <small>$Comment</small>
                </div>
            <% end_loop %>
        <% else %>
            <div class="col-12 m-3">
                <p>No checked comments yet..</p>
            </div>
        <% end_if %>
    </div>

</div>