<div class="row justify-content-center mb-3">
    $Content
</div>
<div class="row justify-content-center m-3">
    <% loop $Pins %>
    <div class="col-sm-4 col-xs-12 mb-3 justify-content-center">
        <div class="row justify-content-center">
            <div class="col-12 mb-1" style="z-index=10;">
                <div class="peg-$Colour overflow-auto stikyNotes">
                    <div class="center">
                        <div class="row">
                            <div class="col-1">
                                <a href="$Link" class="float-left"><img class="small-image" src="$pegPic.URL" alt="$pegPic.URL"></a>
                            </div>
                            <div class="col-10 text-justify">
                                <p style="font-weight:bolder;" style="word-wrap:break-word;">$Title</p>
                            </div>
                        </div>
                        <% if $Pic %>
                            <div class="row justify-content-md-center">
                                <div class="col-md-auto" style="word-wrap:break-word;">
                                <img class="fill-image" src="$Pic.URL" alt="$Pic.URL">
                            </div>
                        </div>
                        <% end_if %>
                        <div class="row justify-content-md-center">
                            <div class="col-md-auto" style="word-wrap:break-word;">
                                <p>$Description</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <% end_loop %>
    <% require javascript("javascript/boardPage.js") %>
</div>