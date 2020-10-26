<div class="row justify-content-center mb-3">
    $Content
</div>
<div class="row justify-content-center m-3">
    <% loop $Pins %>
    <div class="col-auto col-lg-3 col-md-6 col-sm-12">
        <div class="row justify-content-center">
            <div class="col-12 mb-1">
                <div class="peg-$Colour overflow-auto">
                    <div class="center">
                        <div class="row">
                            <div class="col-1">
                                <a href="$Link" class="float-left"><img class="small-image" src="/images/peg.png" alt=""></a>
                            </div>
                            <div class="col-10 text-justify">
                                <p style="font-weight:bolder;" style="word-wrap:break-word;">$Title</p>
                            </div>
                        </div>
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

</div>