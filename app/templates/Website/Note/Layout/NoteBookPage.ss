<div class="row justify-content-center mb-3">
    $Content
</div>
<div class="row justify-content-center m-3">
    <% if $AllBooks %>
        <% loop $AllBooks %>
            <div class="col-auto col-lg-6 col-md-6 col-sm-12">
                <div class="row justify-content-center">
                    <div class="col-12 mb-1">
                        <div class="note-white">
                            <div class="center">
                                <div class="row justify-content-md-center mt-3">
                                    <div class="col-md-auto">
                                        <a href="$Link" style="font-weight:bolder;word-wrap:break-word;">$Title</a>
                                    </div>
                                </div>
                                <div class="row justify-content-md-center">
                                    <div class="col-md-auto overflow-auto">
                                        <p style="word-wrap:break-word;">$Description</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <% end_loop %>
    <% else %>
        <div class="col-12 m-3">
            <p>No book yet..</p>
        </div>
    <% end_if %>

</div>