
<div class="row">
    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-30">
        <div class="pd-20 card-box height-100-p">

            <div class="profile-photo">
                <a href="javascript:;"  onclick="event.preventDefault();
                document.getElementById('adminProfilePicturefile').click();" class="edit-avatar">
                <i class="fa fa-pencil"></i></a>
                <img src="{{ $admin->picture }}"  class="avatar-photo" alt="" id="adminProfilePicture">
                <input type="file" name="adminProfilePicturefile" id="adminProfilePicturefile" class="d-none"
                style="opacity: 0;">

            </div>


            <h5 class="text-center h5 mb-0" id="adminProfilName">{{ $admin->name }}</h5>
            <p class="text-center text-muted font-14" id="adminProfilEmail">
                {{ $admin->email }}
            </p>
            <div class="form-group">
                <label>Custom file input</label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input">
                    <label class="custom-file-label">Choose file</label>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 mb-30">
        <div class="card-box height-100-p overflow-hidden">

        </div>
    </div>
</div>



<script>
    window.addEventListener('updateAdminInfo',function(event){
        $('#adminProfilName').html(event.detail.adminNmae);
        $('#adminProfilEmail').html(event.detail.adminEmail);


    })

    </script>

