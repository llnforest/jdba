
<div class="col-sm-12">
    <table class="table table-bordered">
        <tbody>
            <tr>
                <th>广告位置名称 </th>
                <td>
                    <input class="form-control text" type="text" name="name" value="{$info.name??''}" placeholder="广告位置名称">
                    <span class="form-required">*</span>
                </td>
            </tr>
            <tr>
                <th>位置排序</th>
                <td>
                    <input class="form-control text" type="text" name="sort" value="{$info.sort??''}" placeholder="位置排序">
                </td>
            </tr>
            <tr>
                <td colspan="2" class="text-center">
                    <button type="button" class="btn btn-success form-post " >保存</button>
                    <a class="btn btn-default active" href="JavaScript:history.go(-1)">返回</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>

