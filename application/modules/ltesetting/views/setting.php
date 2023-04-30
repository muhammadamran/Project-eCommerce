<link href="<?= base_url('assets/lte/plugins/x-editable-bs4/dist/bootstrap4-editable/css/bootstrap-editable.css'); ?>" rel="stylesheet" />
<link href="<?= base_url('assets/lte/plugins/x-editable-bs4/dist/inputs-ext/address/address.css'); ?>" rel="stylesheet" />
<link href="<?= base_url('assets/lte/plugins/x-editable-bs4/dist/inputs-ext/typeaheadjs/lib/typeahead.js-bootstrap.css'); ?>" rel="stylesheet" />
<link href="<?= base_url('assets/lte/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css'); ?>" rel="stylesheet" />
<link href="<?= base_url('assets/lte/plugins/bootstrap3-wysihtml5-bower/dist/bootstrap3-wysihtml5.min.css'); ?>" rel="stylesheet" />
<link href="<?= base_url('assets/lte/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css'); ?>" rel="stylesheet" />
<link href="<?= base_url('assets/lte/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker3.min.css'); ?>" rel="stylesheet" />
<link href="<?= base_url('assets/lte/plugins/select2/dist/css/select2.min.css'); ?>" rel="stylesheet" />
<script src="<?= base_url('assets/lte/plugins/ckeditor/ckeditor.js'); ?>"></script>
<!-- begin #content -->
<div id="content" class="content">
    <!-- Page Header -->
    <div class="page-header">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="title">
                    <h4>Setting</h4>
                </div>
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <div style="font-size: 12px;display: flex;">
                            <li class="breadcrumb-item"><a href="<?= base_url('ltehome'); ?>">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Setting</li>
                        </div>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- end page-header -->

    <!-- begin row -->
    <div class="row">
        <div class="col-sm-5">
            <div class="row">
                <div class="col-sm-12">
                    <!-- begin panel -->
                    <div class="panel panel-inverse">
                        <div class="panel-heading">
                            <h4 class="panel-title"><i class="fa-solid fa-building"></i> Set Company Website</h4>
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                            </div>
                        </div>
                        <!-- begin table-responsive -->
                        <div class="table-responsive">
                            <table id="user" class="table table-condensed table-bordered">
                                <thead>
                                    <tr>
                                        <th width="20%">Field Name</th>
                                        <th>Field Value</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <form action="<?= base_url('ltesetting/update_setting_') ?>" method="POST">
                                        <tr>
                                            <td class="bg-light">Title Tab</td>
                                            <td>
                                                <input type="text" class="form-control-upload" name="Title" id="IdTitle" placeholder="Enter Your Title" value="<?= $lte_title; ?>" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="bg-light">Application Name</td>
                                            <td>
                                                <input type="text" class="form-control-upload" name="AppName" id="IdAppName" placeholder="Enter Your AppName" value="<?= $lte_appname; ?>" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="bg-light">Company Name</td>
                                            <td>
                                                <input type="text" class="form-control-upload" name="Company" id="IdCompany" placeholder="Enter Your Company" value="<?= $lte_companyname; ?>" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="bg-light">Description</td>
                                            <td>
                                                <input type="text" class="form-control-upload" name="Description" id="IdDescription" placeholder="Enter Your Description" value="<?= $lte_seodesc; ?>" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="bg-light">Tag</td>
                                            <td>
                                                <input type="text" class="form-control-upload" name="Tag" id="IdTag" placeholder="Enter Your Tag" value="<?= $lte_tag; ?>" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="bg-light">Text Loader</td>
                                            <td>
                                                <input type="text" class="form-control-upload" name="TextLoader" id="IdTextLoader" placeholder="Enter Your Text Loader" value="<?= $lte_text_loader; ?>" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="bg-light">Text Footer</td>
                                            <td>
                                                <input type="text" class="form-control-upload" name="TextFooter" id="IdTextFooter" placeholder="Enter Your Text Footer" value="<?= $lte_footer; ?>" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="bg-light">Email Helpdesk</td>
                                            <td>
                                                <input type="email" class="form-control-upload" name="EmailHelpdesk" id="IdEmailHelpdesk" placeholder="Enter Email Helpdesk" value="<?= $lte_email; ?>" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="bg-light">Banner Title</td>
                                            <td>
                                                <input type="text" class="form-control-upload" name="BannerTitle" id="IdBannerTitle" placeholder="Enter Banner Title" value="<?= $lte_banner_title; ?>" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="bg-light">Banner Paragraph</td>
                                            <td>
                                                <textarea type="text" class="ckeditor" name="BannerParagraph" id="IdSubscribeParagraph" rows="20" placeholder="Enter Subscribe Paragraph ..."><?= $lte_banner_paragraph; ?></textarea>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="bg-light">Subscribe Title</td>
                                            <td>
                                                <input type="text" class="form-control-upload" name="SubscribeTitle" id="IdSubscribeTitle" placeholder="Enter Subscribe Title" value="<?= $lte_subscribe_title; ?>" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="bg-light">Subscribe Paragraph</td>
                                            <td>
                                                <textarea type="text" class="ckeditor" name="SubscribeParagraph" id="IdSubscribeParagraph" rows="20" placeholder="Enter Subscribe Paragraph ..."><?= $lte_subscribe_paragraph; ?></textarea>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="bg-light">Action</td>
                                            <td>
                                                <div style="display: flex;justify-content:flex-end;">
                                                    <button type="submit" name="update_setting_" class="btn btn-secondary"><i class="fa-solid fa-pen-to-square"></i> Update</button>
                                                </div>
                                            </td>
                                        </tr>
                                    </form>
                                </tbody>
                            </table>
                        </div>
                        <!-- end table-responsive -->
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-7">
            <div class="row">
                <!-- 1 -->
                <div class="col-sm-12" style="margin-bottom: 15px;">
                    <div style="padding: 11px 0px 11px 10px;background: #1d2226;color: white;border-radius: 3px 3px 0px 0px;">
                        <font style="font-size: 12px;font-weight: 900;">
                            <i class="fa-solid fa-image"></i> Icon | Logo 1 | Logo 2
                        </font>
                    </div>
                </div>
                <!-- Icon -->
                <div class="col-xl-4">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a href="#" class="nav-link active">
                                <span class="d-sm-none">Icon</span>
                                <span class="d-sm-block d-none">
                                    <div>
                                        <h4 class="m-t-0 m-b-15">
                                            <div>
                                                <b>Icon</b>
                                            </div>
                                            <div style="margin-top: 5px;margin-bottom: -15px;">
                                                <small style="color:#fff">Upload your icon here</small>
                                            </div>
                                        </h4>
                                    </div>
                                </span>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="default-tab-1">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="panel panel-inverse" data-sortable-id="index-6">
                                        <div class="row">
                                            <form action="<?= base_url('ltesetting/update_icon_') ?>" method="POST" style="width: 100%;" enctype="multipart/form-data">
                                                <br><br>
                                                <div class="col-sm-12">
                                                    <div style="display: flex;justify-content:center;background: #ddd;">
                                                        <div class="lingkaran">
                                                            <img src="<?= base_url('assets/apps/icon/' . $lte_icon); ?>" style="background-position-x: center;background-repeat: no-repeat;background-size: cover;height: 100px;width: -webkit-fill-available;" height="100px" width=auto alt="Logo">
                                                        </div>
                                                    </div>
                                                </div>
                                                <br><br>
                                                <div class="col-sm-12">
                                                    <hr>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for="IdTitle"><b>Upload New Icon</b> </label>
                                                        <input type="file" name="upload" class="form-control-upload" required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12" style="display: flex;justify-content:flex-end;">
                                                    <button type="submit" name="update_icon_" class="btn btn-secondary"><i class="fa-solid fa-pen-to-square"></i> Update</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Icon -->
                <!-- Logo 1 -->
                <div class="col-xl-4">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a href="#" class="nav-link active">
                                <span class="d-sm-none">Logo 1</span>
                                <span class="d-sm-block d-none">
                                    <div>
                                        <h4 class="m-t-0 m-b-15">
                                            <div>
                                                <b>Logo 1</b>
                                            </div>
                                            <div style="margin-top: 5px;margin-bottom: -15px;">
                                                <small style="color:#fff">Upload your logo 1 here</small>
                                            </div>
                                        </h4>
                                    </div>
                                </span>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="default-tab-1">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="panel panel-inverse" data-sortable-id="index-6">
                                        <div class="row">
                                            <form action="<?= base_url('ltesetting/update_logo_one_') ?>" method="POST" style="width: 100%;" enctype="multipart/form-data">
                                                <br><br>
                                                <div class="col-sm-12">
                                                    <div style="display: flex;justify-content:center;background: #ddd;">
                                                        <div class="lingkaran">
                                                            <img src="<?= base_url('assets/apps/logo/' . $lte_logo_1); ?>" style="background-position-x: center;background-repeat: no-repeat;background-size: cover;height: 100px;width: -webkit-fill-available;" height="100px" width=auto alt="Logo">
                                                        </div>
                                                    </div>
                                                </div>
                                                <br><br>
                                                <div class="col-sm-12">
                                                    <hr>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for="IdTitle"><b>Upload New Logo 1</b> </label>
                                                        <input type="file" name="upload" class="form-control-upload" required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12" style="display: flex;justify-content:flex-end;">
                                                    <button type="submit" name="update_logo_one_" class="btn btn-secondary"><i class="fa-solid fa-pen-to-square"></i> Update</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Logo 1 -->
                <!-- Logo 2 -->
                <div class="col-xl-4">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a href="#" class="nav-link active">
                                <span class="d-sm-none">Logo 2</span>
                                <span class="d-sm-block d-none">
                                    <div>
                                        <h4 class="m-t-0 m-b-15">
                                            <div>
                                                <b>Logo 2</b>
                                            </div>
                                            <div style="margin-top: 5px;margin-bottom: -15px;">
                                                <small style="color:#fff">Upload your logo 2 here</small>
                                            </div>
                                        </h4>
                                    </div>
                                </span>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="default-tab-1">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="panel panel-inverse" data-sortable-id="index-6">
                                        <div class="row">
                                            <form action="<?= base_url('ltesetting/update_logo_two_') ?>" method="POST" style="width: 100%;" enctype="multipart/form-data">
                                                <br><br>
                                                <div class="col-sm-12">
                                                    <div style="display: flex;justify-content:center;background: #ddd;">
                                                        <div class="lingkaran">
                                                            <img src="<?= base_url('assets/apps/logo/' . $lte_logo_2); ?>" style="background-position-x: center;background-repeat: no-repeat;background-size: cover;height: 100px;width: -webkit-fill-available;" height="100px" width=auto alt="Logo">
                                                        </div>
                                                    </div>
                                                </div>
                                                <br><br>
                                                <div class="col-sm-12">
                                                    <hr>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for="IdTitle"><b>Upload New Logo 2</b> </label>
                                                        <input type="file" name="upload" class="form-control-upload" required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12" style="display: flex;justify-content:flex-end;">
                                                    <button type="submit" name="update_logo_two_" class="btn btn-secondary"><i class="fa-solid fa-pen-to-square"></i> Update</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Logo 2 -->
                <!-- End 1 -->

                <!-- 2 -->
                <div class="col-sm-12" style="margin-bottom: 15px;">
                    <div style="padding: 11px 0px 11px 10px;background: #1d2226;color: white;border-radius: 3px 3px 0px 0px;">
                        <font style="font-size: 12px;font-weight: 900;">
                            <i class="fa-solid fa-image"></i> Loader | Banner | Cover Product
                        </font>
                    </div>
                </div>
                <!-- Loader -->
                <div class="col-xl-4">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a href="#" class="nav-link active">
                                <span class="d-sm-none">Loader</span>
                                <span class="d-sm-block d-none">
                                    <div>
                                        <h4 class="m-t-0 m-b-15">
                                            <div>
                                                <b>Loader</b>
                                            </div>
                                            <div style="margin-top: 5px;margin-bottom: -15px;">
                                                <small style="color:#fff">Upload your loader here</small>
                                            </div>
                                        </h4>
                                    </div>
                                </span>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="default-tab-1">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="panel panel-inverse" data-sortable-id="index-6">
                                        <div class="row">
                                            <form action="<?= base_url('ltesetting/update_loader_') ?>" method="POST" style="width: 100%;" enctype="multipart/form-data">
                                                <br><br>
                                                <div class="col-sm-12">
                                                    <div style="display: flex;justify-content:center;background: #ddd;">
                                                        <div class="lingkaran">
                                                            <img src="<?= base_url('assets/apps/loader/' . $lte_loader); ?>" style="background-position-x: center;background-repeat: no-repeat;background-size: cover;height: 100px;width: -webkit-fill-available;" height="100px" width=auto alt="Logo">
                                                        </div>
                                                    </div>
                                                </div>
                                                <br><br>
                                                <div class="col-sm-12">
                                                    <hr>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for="IdTitle"><b>Upload New Loader</b> </label>
                                                        <input type="file" name="upload" class="form-control-upload" required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12" style="display: flex;justify-content:flex-end;">
                                                    <button type="submit" name="update_loader_" class="btn btn-secondary"><i class="fa-solid fa-pen-to-square"></i> Update</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Loader -->
                <!-- Banner -->
                <div class="col-xl-4">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a href="#" class="nav-link active">
                                <span class="d-sm-none">Banner</span>
                                <span class="d-sm-block d-none">
                                    <div>
                                        <h4 class="m-t-0 m-b-15">
                                            <div>
                                                <b>Banner</b>
                                            </div>
                                            <div style="margin-top: 5px;margin-bottom: -15px;">
                                                <small style="color:#fff">Upload your banner here</small>
                                            </div>
                                        </h4>
                                    </div>
                                </span>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="default-tab-1">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="panel panel-inverse" data-sortable-id="index-6">
                                        <div class="row">
                                            <form action="<?= base_url('ltesetting/update_banner_') ?>" method="POST" style="width: 100%;" enctype="multipart/form-data">
                                                <br><br>
                                                <div class="col-sm-12">
                                                    <div style="display: flex;justify-content:center;background: #ddd;">
                                                        <div class="lingkaran">
                                                            <img src="<?= base_url('assets/apps/banner/' . $lte_banner); ?>" style="background-position-x: center;background-repeat: no-repeat;background-size: cover;height: 100px;width: -webkit-fill-available;" height="100px" width=auto alt="Logo">
                                                        </div>
                                                    </div>
                                                </div>
                                                <br><br>
                                                <div class="col-sm-12">
                                                    <hr>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for="IdTitle"><b>Upload New Banner</b> </label>
                                                        <input type="file" name="upload" class="form-control-upload" required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12" style="display: flex;justify-content:flex-end;">
                                                    <button type="submit" name="update_banner_" class="btn btn-secondary"><i class="fa-solid fa-pen-to-square"></i> Update</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Banner -->
                <!-- Cover Product -->
                <div class="col-xl-4">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a href="#" class="nav-link active">
                                <span class="d-sm-none">Cover Product</span>
                                <span class="d-sm-block d-none">
                                    <div>
                                        <h4 class="m-t-0 m-b-15">
                                            <div>
                                                <b>Cover Product</b>
                                            </div>
                                            <div style="margin-top: 5px;margin-bottom: -15px;">
                                                <small style="color:#fff">Upload your cover product here</small>
                                            </div>
                                        </h4>
                                    </div>
                                </span>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="default-tab-1">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="panel panel-inverse" data-sortable-id="index-6">
                                        <div class="row">
                                            <form action="<?= base_url('ltesetting/update_cover_') ?>" method="POST" style="width: 100%;" enctype="multipart/form-data">
                                                <br><br>
                                                <div class="col-sm-12">
                                                    <div style="display: flex;justify-content:center;background: #ddd;">
                                                        <div class="lingkaran">
                                                            <img src="<?= base_url('assets/website/product/cover/' . $lte_cover); ?>" style="background-position-x: center;background-repeat: no-repeat;background-size: cover;height: 100px;width: -webkit-fill-available;" height="100px" width=auto alt="Logo">
                                                        </div>
                                                    </div>
                                                </div>
                                                <br><br>
                                                <div class="col-sm-12">
                                                    <hr>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for="IdTitle"><b>Upload New Cover Product</b> </label>
                                                        <input type="file" name="upload" class="form-control-upload" required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12" style="display: flex;justify-content:flex-end;">
                                                    <button type="submit" name="update_cover_" class="btn btn-secondary"><i class="fa-solid fa-pen-to-square"></i> Update</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Cover -->
                <!-- End 2 -->
            </div>
        </div>
    </div>
</div>