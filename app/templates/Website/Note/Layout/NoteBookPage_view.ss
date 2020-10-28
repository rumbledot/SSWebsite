<% require css("css/gallery.css") %>
<% with $NoteBook %>
<div class="row">
    <div class="col-12">
        <h3>$Title</h3>
    </div>
</div>
<div class="row mb-3">
    <div class="col-12">
        <p>$Description</p>
    </div>
</div>
<div class="row justify-content-center mb-3">
    <div class="col-12">
        <% loop $Notes %>
            <div class="bg-white border-bottom border-info mb-3 p-1" style="word-wrap:break-word;">
                <% if $NoteLine %>
                    <p>$NoteLine</p>
                <% end_if %>
                <% if $Pic %>
                    <img class="img-thumbnail" src="$Pic.URL" alt="$Pic.URL"
                            data-original="$Pic.URL">
                <% end_if %>
            </div>
        <% end_loop %>
    </div>
</div>
<% end_with %>
<% require javascript("javascript/gallery.js") %>

<div class="modal-gallery">
    <img src="" alt="" class="full-img" />
</div>