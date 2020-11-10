<div class="container" style="margin-top:10vh;">
    <div class="row justify-content-center mb-3">
        $Content
    </div>
    <div class="row justify-content-center m-3">
        <% loop $AllCategories %>
			<div class="col-sm-4 col-xs-12 mb-3">
                <div class="row justify-content-center">
                    <div class="col-12 mb-1">
                        <div class="peg-white">
                            <div class="center">
                                <div class="row justify-content-md-center">
                                    <div class="col-md-auto">
                                        <a href="$Link" style="font-weight:bolder;word-wrap:break-word;">$Title</a>
                                    </div>
                                </div>
                                <div class="row justify-content-md-center">
                                    <div class="col-md-auto">
                                        <p style="word-wrap:break-word;">$Description</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		<% end_loop %>
    </div>
</div>