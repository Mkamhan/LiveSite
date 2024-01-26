<div>


    <div class="tab">
        <ul class="nav nav-tabs customtab" role="tablist">
            <li class="nav-item">
                <a  wire:click.pervent='selectTab("general_settings")'  class="nav-link {{ $tab=='general_settings' ? 'active':'' }}"
                 data-toggle="tab" href="#general_settings" role="tab" aria-selected="true">General settings</a>
            </li>
            <li class="nav-item">
                <a wire:click.pervent='selectTab("logo_favicon")'  class="nav-link {{ $tab=='logo_favicon' ? 'active':'' }}"
                data-toggle="tab" href="#logo_favicon" role="tab" aria-selected="false">Logo & Favicon</a>
            </li>
            <li class="nav-item">
                <a wire:click.pervent='selectTab("social_networks")' class="nav-link {{ $tab=='social_networks' ? 'active':'' }}"
                 data-toggle="tab" href="#social_networks" role="tab" aria-selected="false">Social networks</a>
            </li>
            <li class="nav-item">
                <a wire:click.pervent='selectTab("payment_methods")'class="nav-link {{ $tab=='payment_methods' ? 'active':'' }}"
                data-toggle="tab" href="#payment_methods" role="tab" aria-selected="false">Payment methods</a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade {{ $tab=='general_settings' ? 'show active':'' }}" id="general_settings" role="tabpanel">
                <div class="pd-20">
                    <form wire:submit.prevent='updateGeneralSettings()'>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for=""><b>Site Name</b></label>
                                    <input type="text" class="form-control" name="" id="" placeholder="Enter Yore Site Name"  wire:model.defer='site_name'>
                                    @error("site_name")
                                             <div class="d-block text-danger" style="margin-top: 0px; margin-bottom: 15px; ">
                                                 {{ $message }}
                                            </div>
                                        @enderror
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for=""><b>Site email</b></label>
                                    <input type="text" class="form-control" name="" id="" placeholder="Enter Yore Site Email"  wire:model.defer='site_email'>
                                    @error("site_email")
                                             <div class="d-block text-danger" style="margin-top: 0px; margin-bottom: 15px; ">
                                                 {{ $message }}
                                            </div>
                                        @enderror
                                </div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for=""><b>Site Phone</b></label>
                                    <input type="text" class="form-control" name="" id="" placeholder="Enter Yore Site phone"  wire:model.defer='site_phone'>
                                    @error("site_phone")
                                             <div class="d-block text-danger" style="margin-top: 0px; margin-bottom: 15px; ">
                                                 {{ $message }}
                                            </div>
                                        @enderror
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for=""><b>Site meta Keywords</b> <small>Separated by coma (a,b,c)</small></label>
                                    <input type="text" class="form-control" name="" id="" placeholder=" Site meta Keywords"  wire:model.defer='site_meta_keywords'>
                                    @error("site_meta_keywords")
                                             <div class="d-block text-danger" style="margin-top: 0px; margin-bottom: 15px; ">
                                                 {{ $message }}
                                            </div>
                                        @enderror
                                </div>

                            </div>
                        </div>
                        <div class="form-group">
                            <label for=""><b>Site meta description</b> </label>
                            <textarea cols="4" rows="4" placeholder="  Site meta description  ...." wire:model.defer='site_meta_descrption'
                            class="form-control"></textarea>

                            @error("site_meta_descrption")
                                     <div class="d-block text-danger" style="margin-top: 0px; margin-bottom: 15px; ">
                                         {{ $message }}
                                    </div>
                                @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
            <div class="tab-pane fade  {{ $tab=='logo_favicon' ? 'show active':'' }}" id="logo_favicon" role="tabpanel">
                <div class="pd-20">
                    <div class="row">
                        <div class="col-md-6">
                            <h5>site logo 1</h5>
                            <div class="mb-2  mt-1" style="max-width:200px ;">
                                <img wire:ignore  src="/images/site/{{ $site_logo }}" class="img-thumbnail" data-ijabo-default-img="/images/site/{{ $site_logo }}"
                                id="site_logo_image_preview" alt="">
                            </div>
                            <form action="{{ route('admin.change-logo') }}" method="POST" enctype="multipart/form-data" id="change_site_logo_form">
                                @csrf
                                <div class="mb-2">
                                    <input type="file" name="site_logo" id="site_logo" class="form-control">
                                    <span class="text-denger error-text site_logo_error"></span>
                                    @error("site_logo")
                                             <div class="d-block text-danger" style="margin-top: 0px; margin-bottom: 15px; ">
                                                 {{ $message }}
                                            </div>
                                 @enderror
                                </div>
                                <button type="submit" class="btn btn-primary">Save Logo</button>
                            </form>
                        </div>
                        <div class="col-md-6">
                            <h5>site fivcon 1</h5>
                            <div class="mb-2  mt-1" style="max-width:100px ;">
                                <img wire:ignore  src="/images/site/{{ $site_favicon }}" class="img-thumbnail"
                                 data-ijabo-default-img="/images/site/{{ $site_favicon }}"
                                id="site_favicon_image_preview" alt="">
                            </div>
                            <form action="{{ route('admin.change-favicon') }}" method="POST" enctype="multipart/form-data" id="change_site_favicon_form">
                                @csrf
                                <div class="mb-2">
                                    <input type="file" name="site_favicon" id="site_favicon" class="form-control">
                                    <span class="text-denger error-text site_favicon_error"></span>
                                    <!-- @error("site_favicon")
                                             <div class="d-block text-danger" style="margin-top: 0px; margin-bottom: 15px; ">
                                                 {{ $message }}
                                            </div>
                                 @enderror -->
                                </div>
                                <button type="submit" class="btn btn-primary">Save favicon</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade  {{ $tab=='social_networks' ? 'show active':'' }}" id="social_networks" role="tabpanel">
                <div class="pd-20">
                    <form wire:submit.prevent='updateSocialNetworks()' action="">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for=""><b>Facebook URL</b> <i class="icon-copy bi bi-facebook"></i></label>
                                    <input type="text" class="form-control" wire:model.defer='facebook_url'
                                    placeholder=" Facebook Url">
                                    @error("facebook_url")
                                    <div class="d-block text-danger" style="margin-top: 0px; margin-bottom: 15px; ">
                                        {{ $message }}
                                   </div>
                               @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for=""><b>X URL</b><i class="icon-copy bi bi-twitter"></i></label>
                                    <input type="text" class="form-control" wire:model.defer='x_url'
                                    placeholder=" X Url">
                                    @error("x_url")
                                    <div class="d-block text-danger" style="margin-top: 0px; margin-bottom: 15px; ">
                                        {{ $message }}
                                   </div>
                               @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for=""><b>Whatsapp URL</b><i class="icon-copy bi bi-whatsapp"></i></label>
                                    <input type="text" class="form-control" wire:model.defer='whatsapp_url'
                                    placeholder=" whatsapp Url">
                                    @error("whatsapp_url")
                                    <div class="d-block text-danger" style="margin-top: 0px; margin-bottom: 15px; ">
                                        {{ $message }}
                                   </div>
                               @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for=""><b>YouTube URL</b> <i class="icon-copy bi bi-youtube"></i></label>
                                    <input type="text" class="form-control" wire:model.defer='youtube_url'
                                    placeholder=" YouTube Url">
                                    @error("youtube_url")
                                    <div class="d-block text-danger" style="margin-top: 0px; margin-bottom: 15px; ">
                                        {{ $message }}
                                   </div>
                               @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for=""><b>Instagram URL</b><i class="icon-copy bi bi-instagram"></i></label>
                                    <input type="text" class="form-control" wire:model.defer='instagram_url'
                                    placeholder=" Instagram Url">
                                    @error("instagram_url")
                                    <div class="d-block text-danger" style="margin-top: 0px; margin-bottom: 15px; ">
                                        {{ $message }}
                                   </div>
                               @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for=""><b>Google Play URL</b><i class="icon-copy fa fa-android" aria-hidden="true"></i></label>
                                    <input type="text" class="form-control" wire:model.defer='google_play_url'
                                    placeholder=" Google Play Url">
                                    @error("google_play_url")
                                    <div class="d-block text-danger" style="margin-top: 0px; margin-bottom: 15px; ">
                                        {{ $message }}
                                   </div>
                               @enderror
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for=""><b> Apple Stor URL</b><i class="icon-copy fa fa-apple" aria-hidden="true"></i></label>
                                    <input type="text" class="form-control" wire:model.defer='apple_stor_url'
                                    placeholder=" Apple Stor Url">
                                    @error("apple_stor_url")
                                    <div class="d-block text-danger" style="margin-top: 0px; margin-bottom: 15px; ">
                                        {{ $message }}
                                   </div>
                               @enderror
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for=""><b>Telegram URL</b><i class="icon-copy fa fa-telegram" aria-hidden="true"></i></label>
                                    <input type="text" class="form-control" wire:model.defer='telegram_url'
                                    placeholder=" Telegram Url">
                                    @error("telegram_url")
                                    <div class="d-block text-danger" style="margin-top: 0px; margin-bottom: 15px; ">
                                        {{ $message }}
                                   </div>
                               @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for=""><b>Tiktok URL</b><i class="icon-copy bi bi-tiktok"></i></label>
                                    <input type="text" class="form-control" wire:model.defer='tiktok_url'
                                    placeholder=" Tiktok Url">
                                    @error("tiktok_url")
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
            <div class="tab-pane fade  {{ $tab=='payment_methods' ? 'show active':'' }}" id="payment_methods" role="tabpanel">
                <div class="pd-20">
                    <a class="btn btn-primary" type="submit" value="Submit" href="{{ route('admin.cache-clear') }}">
                        Clear Cache
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
