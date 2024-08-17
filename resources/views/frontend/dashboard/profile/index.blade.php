@extends('frontend.dashboard.master')

@section('content')
    <div class="dashboard_content mt-2 mt-md-0">
        <h3><i class="far fa-user"></i> profile</h3>
        <div class="wsus__dashboard_profile">
            <div class="wsus__dash_pro_area">
                <h4>basic information</h4>
                    <form action="{{ route('user.profile.update')  }}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="row">
                            <div class="col-xl-9">
                                <div class="row">
                                    <div class="col-xl-12 col-md-6">
                                        <div class="wsus__dash_pro_single">
                                            <i class="fas fa-user-tie"></i>
                                            <input type="text" name="name" placeholder="First Name" value="{{ Auth::user()->name }}">
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-md-6">
                                        <div class="wsus__dash_pro_single">
                                            <i class="fal fa-envelope-open"></i>
                                            <input type="email" name="email" placeholder="Email" value="{{ Auth::user()->email }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-sm-3 col-md-3">
                                <div class="wsus__dash_pro_img">
                                    <img src="{{ Auth::user()->image ? asset('uploads/profile_image/'.Auth::user()->image) : asset('/assets/frontend/images/ts-2.jpg') }}" alt="img" class="img-fluid w-100">
                                    <input type="file" name="image">
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <button class="common_btn mb-4 mt-2" type="submit">Update Info</button>
                            </div>
                        </div>
                    </form>

                    <div class="wsus__dash_pass_change mt-2">
                        <form action="{{ route('user.update.password') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-xl-4 col-md-6">
                                    <div class="wsus__dash_pro_single">
                                        <i class="fas fa-unlock-alt"></i>
                                        <input type="password" name="current_password" placeholder="Current Password">
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6">
                                    <div class="wsus__dash_pro_single">
                                        <i class="fas fa-lock-alt"></i>
                                        <input type="password" name="password" placeholder="New Password">
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="wsus__dash_pro_single">
                                        <i class="fas fa-lock-alt"></i>
                                        <input type="password" name="password_confirmation" placeholder="Confirm Password">
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <button class="common_btn" type="submit">Update Password</button>
                                </div>
                            </div>
                        </form>
                    </div>
            </div>
        </div>
    </div>
@endsection
