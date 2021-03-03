{extends file="layout.tpl"}

{block name="body"}
    <div class="container">
    <div class="row">
        <div class="col-12 mt-5">
            <a class="btn btn-success float-right" href="new_feedback.php">New feedback</a>
        </div>
    </div>
    <div class="row">
        <div class="col-12 mt-2">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>email</th>
                        <th>address</th>
                        <th>phone_no</th>
                        <th>Performance</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    {foreach $listdata as $item}
                        <tr>
                            <td>{$item['name']}</td>
                            <td>{$item['email']}</td>
                            <td>{$item['address']}</td>
                            <td>{$item['phone_no']}</td>
                            <td>{$item['performance']}</td>
                            <td>{$item['status']}</td>
                            <td>
                                <a href="edit_feedback.php?edit_id={$item->id}" class="btn btn-info btn-sm">Edit</a>
                                <a href="delete.php?delete_id={$item->id}" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                    {/foreach}
                </tbody>
            </table>
        </div>
    </div>
</div>
{/block}