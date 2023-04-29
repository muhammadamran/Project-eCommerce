<div id="content" class="content">
    <div class="page-header">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="title">
                    <h4>🍳 Analysis Your Workspace</h4>
                </div>
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <div style="font-size: 12px;display: flex;">
                            <li class="breadcrumb-item active"><a href="<?= base_url('ltehome'); ?>"><b>👋 Welcome Back, <?= $this->session->userdata('user_full_name') ?> ...</b></a></li>
                        </div>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="line-page"></div>
    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="widget widget-stats bg-teal">
                <div class="stats-icon stats-icon-lg"><i class="fa-solid fa-cash-register fa-fw"></i></div>
                <div class="stats-content">
                    <div class="stats-title">PRODUCT FOR SALE</div>
                    <div class="stats-number">7,842,900</div>
                    <div class="stats-desc">Better than last week (70.1%)</div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="widget widget-stats bg-blue">
                <div class="stats-icon stats-icon-lg"><i class="fa-solid fa-money-bill-wave fa-fw"></i></div>
                <div class="stats-content">
                    <div class="stats-title">TODAY'S PROFIT</div>
                    <div class="stats-number">180,200</div>
                    <div class="stats-desc">Better than last week (40.5%)</div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="widget widget-stats bg-indigo">
                <div class="stats-icon stats-icon-lg"><i class="fa-solid fa-coins fa-fw"></i></div>
                <div class="stats-content">
                    <div class="stats-title">NEW ORDERS</div>
                    <div class="stats-number">38,900</div>
                    <div class="stats-desc">Better than last week (76.3%)</div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="widget widget-stats bg-dark">
                <div class="stats-icon stats-icon-lg"><i class="fa fa-comment-alt fa-fw"></i></div>
                <div class="stats-content">
                    <div class="stats-title">NEW SUBSCRIBE</div>
                    <div class="stats-number">3,988</div>
                    <div class="stats-desc">Better than last week (54.9%)</div>
                </div>
            </div>
        </div>
    </div>
</div>