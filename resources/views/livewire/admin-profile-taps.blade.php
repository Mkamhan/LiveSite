<div>

    <div class="profile-tab height-100-p">
        <div class="tab height-100-p">
            <ul class="nav nav-tabs customtab" role="tablist">
                <li class="nav-item">
                    <a wire:click.pervent='selectTab("personal_details")' class="nav-link {{ $tab=='personal_details' ? 'active':'' }}" data-toggle="tab"
                    href="#personal_details" role="tab">Personal Details</a>
                </li>
                <li class="nav-item">
                    <a wire:click.pervent='selectTab("update_password")' class="nav-link {{ $tab=='update_password' ? 'active':'' }}" data-toggle="tab"
                     href="#update_password" role="tab">Update Password</a>
                </li>
            </ul>
            <div class="tab-content">
                <!-- Timeline Tab start -->
                <div class="tab-pane fade {{ $tab=='personal_details' ? 'show active':'' }}" id="personal_details" role="tabpanel">
                    <div class="pd-20">
                        <form wire:submit.prevent='updateAdminPersonalDetals()'>
                            <div class="row">
                                <div class="col-md-4">


                                    <div class="form-group">
                                        <label for="">Nmae</label>
                                        <input type="text" class="form-control" wire:model='name' placeholder="Enten Full Name">
                                        @error("name")
                                             <div class="d-block text-danger" style="margin-top: 0px; margin-bottom: 15px; ">
                                                 {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Email</label>
                                        <input type="text" class="form-control" wire:model='email' placeholder="Enten Your Email">
                                        @error("email")
                                             <div class="d-block text-danger" style="margin-top: 0px; margin-bottom: 15px; ">
                                                 {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                    <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">UserNmae</label>
                                        <input type="text" class="form-control" wire:model='username' placeholder="Enten  UserName">
                                        @error("username")
                                             <div class="d-block text-danger" style="margin-top: 0px; margin-bottom: 15px; ">
                                                 {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                            </div>
                            <button type="submit" class="btn btn-primary">Save</button>
                          </form>
                    </div>
                </div>
                <!-- Timeline Tab End -->
                <!-- Tasks Tab start -->
                <div class="tab-pane fade {{ $tab=='update_password' ? 'show active':'' }}" id="update_password" role="tabpanel">
                    <div class="pd-20 profile-task-wrap">
                        <form wire:submit.prevent='updatePassword()'>
                            <div class="row">


                                    <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Current Password</label>
                                        <input type="password" class="form-control"  placeholder="Enten Current Password"
                                        wire:model.defer='current_password'>
                                        @error("current_password")
                                             <div class="d-block text-danger" style="margin-top: 0px; margin-bottom: 15px; ">
                                                 {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for=""> New Password</label>
                                        <input type="password" class="form-control"  placeholder="Enten  New Password"
                                        wire:model.defer='new_password'>
                                        @error("new_password")
                                             <div class="d-block text-danger" style="margin-top: 0px; margin-bottom: 15px; ">
                                                 {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Confrim New Password</label>
                                            <input type="password" class="form-control"  placeholder="Enten Confrim New Password"
                                            wire:model.defer='new_password_confrimation'>
                                            @error("new_password_confrimation")
                                                <div class="d-block text-danger" style="margin-top: 0px; margin-bottom: 15px; ">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>



                            </div>
                            <button type="submit" class="btn btn-primary">Update password</button>
                          </form>

                    </div>
                </div>
                <!-- Tasks Tab End -->

            </div>
        </div>
    </div>

</div>
