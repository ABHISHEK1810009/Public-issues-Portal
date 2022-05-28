<div class="element-wrapper">
    <h6 class="element-header">Dashboard</h6>
    <div class="element-content">
        <div class="row">
            <div class="col">
                <a class="element-box el-tablo" href="user/queries">
                    <div class="label">Processing Queries</div>
                    <div class="value"><?=sizeof($pro_queries)?></div>
                </a>
            </div>
            <div class="col">
                <a class="element-box el-tablo" href="user/queries">
                    <div class="label">Respond Queries</div>
                    <div class="value"><?=sizeof($res_queries)?></div>
                </a>
            </div>
            <div class="col">
                <a class="element-box el-tablo" href="user/queries">
                    <div class="label">Total Queries</div>
                    <div class="value"><?=sizeof($res_queries)+sizeof($pro_queries)?></div>
                </a>
            </div>
        </div>
    </div>
</div