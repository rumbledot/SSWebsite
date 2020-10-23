<div class="container">
    <div class="row justify-content-center mb-3">
        $Content
    </div>
    <div class="row">
        <% loop $AllCategories %>
			<div class="col-auto col-lg-6 col-md-6 col-sm-12">
                <div class="row justify-content-center">
                    <div class="col-12 mb-1">
                        <div class="peg-white">
                            <div class="center">
                                <div class="row justify-content-md-center">
                                    <div class="col-md-auto">
                                        <a href="$Link" style="font-weight:bolder;">$Title</a>
                                    </div>
                                </div>
                                <div class="row justify-content-md-center">
                                    <div class="col-md-auto">
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
</div>