@extends('admin.layout.master')
@section('title', __('post.index.title') )
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>{{__('post.index.list_review')}}</h1>
      <ol class="breadcrumb">
        <li><a href=""><i class="fa fa-dashboard"></i></a></li>
        <li class="active">{{__('post.index.review')}}</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">{{__('post.index.show_list_review')}}</h3>
              <div class="box-tools">
                <form class="input-group input-group-sm" style="width: 150px;" action="" method="GET">
                  <input type="text" name="user_name" class="form-control pull-right" placeholder="{{__('user.admin.index.search')}}">
                  <div class="input-group-btn">
                  <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </form>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>{{__('post.index.review_id')}}</th>
                  <th>{{__('post.index.product_id')}}</th>
                  <th>{{__('post.index.product_name')}}</th>
                  <th>{{__('post.index.review')}}</th>
                  <th>{{__('post.index.rate')}}</th>
                  <th>{{__('post.index.user_id')}}</th>
                  <th>{{__('post.index.status')}}</th>
                  <th>{{__('post.index.action')}}</th>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
@endsection
