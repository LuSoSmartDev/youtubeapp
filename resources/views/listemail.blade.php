@extends('layouts.master')
@section('content')
<div class="page-content">
    <div class="row">
        <div class="col-xs-12">
            <table id="simple-table" class="table  table-bordered table-hover">
                <thead>
                    <tr>
                        <th class="center">
                            <label class="pos-rel">
                                <input type="checkbox" class="ace" />
                                <span class="lbl"></span>
                            </label>
                        </th>
                        <th class="detail-col">Details</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th class="hidden-480">Recovery Email</th>

                        <th>
                            <i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
                            Last updated
                        </th>
                        <th class="hidden-480">Status</th>

                        <th></th>
                    </tr>
                </thead>

                <tbody>
                     <?php foreach ($emails as $email) : ?>
                    <tr>
                        <td class="center">
                            <label class="pos-rel">
                                <input type="checkbox" class="ace" />
                                <span class="lbl"></span>
                            </label>
                        </td>

                        <td class="center">
                            <div class="action-buttons">
                                <a href="#" class="green bigger-140 show-details-btn" title="Show Details">
                                    <i class="ace-icon fa fa-angle-double-down"></i>
                                    <span class="sr-only">Details</span>
                                </a>
                            </div>
                        </td>

                        <td>
                            <a href="#"><?= $email['email']; ?></a>
                        </td>
                        <td><?= $email['password']; ?></td>
                        <td class="hidden-480"><?= $email['recover_email']; ?></td>
                        <td><?= $email['update_last_time']; ?></td>

                        <td class="hidden-480">
                            <span class="label label-sm label-warning">Expiring</span>
                        </td>

                       
                    </tr>
                    <?php endforeach; ?>
                    
                </tbody>
            </table>
        </div><!-- /.span -->
    </div>
</div>
@endsection