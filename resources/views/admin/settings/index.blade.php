@extends('admin.layout.default')
@section('content')
    <div class="row page-titles mx-0 mb-3">
        <div class="d-flex justify-content-between align-items-center">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item fs-5 fw-500">
                    <a href="{{ route('admin.setting.index') }}">Settings</a>
                </li>
            </ol>
        </div>
    </div>
    <div class="container-fluid">
        @if (Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
        @endif
        <div class="">
            <div class="col-12 settings">
                <div class="col-xl-12 mb-4">
                    <div class="card card-sticky-top border-0 box-shadow">
                        <div class="card-body">
                            <nav class="scrolling-wrapper">
                                <ul class="d-flex align-items-center flex-md-wrap general_settings list-options gap-2">
                                    <li>
                                        <a data_attribute="contact"
                                            class="list-group-item basicinfo p-2 px-3 list-item-secondary d-flex align-items-baseline active"
                                            aria-current="true">
                                            <i class="fa-solid fa-circle-info"></i>
                                            <p class="px-2">Contact Settings</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a data_attribute="social_links"
                                            class="list-group-item basicinfo p-2 px-3 list-item-secondary d-flex align-items-baseline"
                                            aria-current="true">
                                            <i class="fa-solid fa-link"></i>
                                            <p class="px-2">Social Links</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a data_attribute="other"
                                            class="list-group-item basicinfo p-2 px-3 list-item-secondary d-flex align-items-baseline"
                                            aria-current="true">
                                            <i class="fa-solid fa-gears"></i>
                                            <p class="px-2">Other</p>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>

                <div class="col-xl-12">
                    <div id="settingmenuContent">
                        <div id="contact" class="hidechild">
                            <div class="col-12">
                                <div class="card overflow-hidden border-0 box-shadow">
                                    <div class="card-header bg-secondary py-3 d-flex align-items-center text-white">
                                        <i class="fa-solid fa-circle-info fs-5"></i>
                                        <h5 class="px-2">Contact Settings</h5>
                                    </div>
                                    <div class="card-body">
                                        <form action="{{ route('admin.setting.savecontact') }}" method="POST">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-md-6 form-group">
                                                                <label class="form-label">Email
                                                                    <span class="text-danger"> * </span>
                                                                </label>
                                                                <input type="email" class="form-control" name="email"
                                                                    placeholder="Enter Email"
                                                                    value="{{ @$settingsdata->email }}" required="">
                                                            </div>
                                                            <div class="col-md-6 form-group">
                                                                <label class="form-label">Mobile No
                                                                    <span class="text-danger"> * </span>
                                                                </label>
                                                                <input type="text" class="form-control" name="mobile"
                                                                    placeholder="Enter Mobile No"
                                                                    value="{{ @$settingsdata->mobile }}" required="">
                                                            </div>
                                                            <div class="col-md-12 form-group">
                                                                <label class="form-label">Address
                                                                    <span class="text-danger"> * </span>
                                                                </label>
                                                                <textarea name="address" class="form-control" placeholder="Enter Address" rows="3">{{ @$settingsdata->address }}</textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-end">
                                                <button class="btn btn-primary" type="submit">Save</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="social_links" class="hidechild">
                            <div class="col-12">
                                <div class="card border-0 box-shadow">
                                    <div
                                        class="card-header bg-secondary py-3 d-flex align-items-center justify-content-between text-white">
                                        <div class="d-flex align-items-center">
                                            <i class="fa-solid fa-link fs-5"></i>
                                            <h5 class="text-capitalize px-2">Social Links
                                                {{-- <span class="" data-bs-toggle="tooltip" data-bs-placement="top"
                                                    aria-label="Ex. <i class='fa-solid fa-truck-fast'></i> Visit https://fontawesome.com/ for more info"
                                                    data-bs-original-title="Ex. <i class='fa-solid fa-truck-fast'></i> Visit https://fontawesome.com/ for more info">
                                                    <i class="fa-solid fa-circle-info"></i>
                                                </span> --}}
                                            </h5>
                                        </div>
                                        @if (count($getsociallinks) > 0)
                                            <button class="btn btn-primary btn-sm rounded-circle" type="button"
                                                tooltip="Add" onclick="add_social_links('Icon','Link')">
                                                <i class="fa-sharp fa-solid fa-plus"></i>
                                            </button>
                                        @endif
                                    </div>
                                    <div class="card-body">
                                        <form action="{{ route('admin.setting.sociallinks') }}" method="POST">
                                            @csrf
                                            <div class="row">
                                                @forelse ($getsociallinks as $sociallink)
                                                    <div class="col-12">
                                                        <div class="row">
                                                            <input type="hidden" name="edit_icon_key[]"
                                                                value="{{ $sociallink->id }}">
                                                            <div class="col-md-6 form-group">
                                                                <div class="input-group">
                                                                    <input type="text"
                                                                        class="form-control soaciallink_required"
                                                                        onkeyup="show_feature_icon(this)"
                                                                        name="edit_sociallink_icon[{{ $sociallink->id }}]"
                                                                        placeholder="Icon" value="{{ $sociallink->icon }}"
                                                                        required="">
                                                                    <p class="input-group-text">
                                                                        {!! $sociallink->icon !!}
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="col-md-6 d-flex gap-2 align-items-center form-group">
                                                                <input type="text" class="form-control"
                                                                    name="edit_sociallink_link[{{ $sociallink->id }}]"
                                                                    placeholder="Link" value="{{ $sociallink->link }}"
                                                                    required="">
                                                                <button class="btn btn-danger btn-sm rounded-5"
                                                                    type="button" tooltip="Delete"
                                                                    onclick="Delete('{{ $sociallink->id }}','{{ route('admin.setting.deletesociallinks') }}')">
                                                                    <i class="fa fa-trash"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @empty
                                                    <div class="col-12">
                                                        <div class="row">
                                                            <div class="col-md-6 form-group">
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control"
                                                                        onkeyup="show_feature_icon(this)"
                                                                        name="social_icon[]" placeholder="Icon"
                                                                        required="">
                                                                    <p class="input-group-text"></p>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="col-md-6 d-flex gap-2 align-items-center form-group">
                                                                <input type="text" class="form-control"
                                                                    name="social_link[]" placeholder="Link"
                                                                    required="">
                                                                <button class="btn btn-primary btn-sm rounded-circle"
                                                                    type="button" tooltip="Add"
                                                                    onclick="add_social_links('Icon','Link')">
                                                                    <i class="fa-sharp fa-solid fa-plus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforelse

                                                <span class="extra_social_links"></span>
                                                <div class="d-flex gap-2 justify-content-end">
                                                    <button class="btn btn-primary" type="submit">Save</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="other" class="hidechild">
                            <div class="col-12">
                                <div class="card overflow-hidden border-0 box-shadow">
                                    <div class="card-header bg-secondary py-3 d-flex align-items-center text-white">
                                        <i class="fa-solid fa-gears fs-5"></i>
                                        <h5 class="px-2">Other</h5>
                                    </div>
                                    <div class="card-body">
                                        <form action="{{ route('admin.setting.other') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-md-6 form-group">
                                                                <label class="form-label">About Us Page Image</label>
                                                                <input type="file" class="form-control"
                                                                    name="about_us_page_image">
                                                                <img src="{{ @helper::image_path($settingsdata->about_us_page_image) }}"
                                                                    class="img-fluid hw-50 rounded mt-1" alt="">
                                                            </div>
                                                            <div class="col-md-6 form-group">
                                                                <label class="form-label">Our Project Page Image</label>
                                                                <input type="file" class="form-control"
                                                                    name="our_project_page_image">
                                                                <img src="{{ @helper::image_path($settingsdata->our_project_page_image) }}"
                                                                    class="img-fluid hw-50 rounded mt-1" alt="">
                                                            </div>
                                                            <div class="col-md-6 form-group">
                                                                <label class="form-label">Career Page Image</label>
                                                                <input type="file" class="form-control"
                                                                    name="career_page_image">
                                                                <img src="{{ @helper::image_path($settingsdata->career_page_image) }}"
                                                                    class="img-fluid hw-50 rounded mt-1" alt="">
                                                            </div>
                                                            <div class="col-md-6 form-group">
                                                                <label class="form-label">Media Page Image</label>
                                                                <input type="file" class="form-control"
                                                                    name="media_page_image">
                                                                <img src="{{ @helper::image_path($settingsdata->media_page_image) }}"
                                                                    class="img-fluid hw-50 rounded mt-1" alt="">
                                                            </div>
                                                            <div class="col-md-6 form-group">
                                                                <label class="form-label">Blog Page Image</label>
                                                                <input type="file" class="form-control"
                                                                    name="blog_page_image">
                                                                <img src="{{ @helper::image_path($settingsdata->blog_page_image) }}"
                                                                    class="img-fluid hw-50 rounded mt-1" alt="">
                                                            </div>
                                                            <div class="col-md-6 form-group">
                                                                <label class="form-label">Contact Us Page Image</label>
                                                                <input type="file" class="form-control"
                                                                    name="contact_us_page_image">
                                                                <img src="{{ @helper::image_path($settingsdata->contact_us_page_image) }}"
                                                                    class="img-fluid hw-50 rounded mt-1" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-end">
                                                <button class="btn btn-primary" type="submit">Save</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
