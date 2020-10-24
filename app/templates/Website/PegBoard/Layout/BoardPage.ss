	<div class="container" style="margin-top:10vh;">
        <div class="row justify-content-center mb-3">
            $Content
        </div>
		<div class="row">
			<% loop $Pins %>
			<div class="col-auto col-lg-3 col-md-6 col-sm-12">
                <div class="row justify-content-center">
                    <div class="col-12 mb-1">
                        <div class="peg-$Colour">
                            <div class="center">
                                <div class="row justify-content-md-center">
                                    <div class="col-md-auto">
                                        <p style="font-weight:bolder;">$Title</p>
                                    </div>
                                </div>
                                <div class="row justify-content-md-center">
                                    <div class="col-md-auto">
                                        <p>$Description</p>
                                    </div>
                                </div>
                                <div class="row pull-down justify-content-md-center">
                                    <div class="col">
                                        <p><small>$CreatedAt</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-auto">
                                <div class="btn-group">
                                    <a><img class="small-image" src="/images/edit.png" alt=""></a> |
                                    <a  href="$Link"><img class="small-image" src="/images/look.png" alt=""></a> |
                                    <a><img class="small-image" src="/images/delete.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			<% end_loop %>

		</div>
	</div>