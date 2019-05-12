@extends('layout.admin_master')

@section('content')
  <style>
    #test2 {display: none}
  </style>
      <!-- END SIDEBAR -->
      <!-- BEGIN PAGE CONTAINER-->
      <div class="page-content">

        <div class="clearfix"></div>
        <div class="content">

          <div class="page-title"> <i class="icon-custom-left"></i>
            <h3>All Blog Post</h3>
          </div>
          <div class="row-fluid">
            <div class="span12">
              <div class="grid simple ">
                <div class="grid-title">
                  <h4>Advance <span class="semi-bold">Options</span></h4>
                  <div class="tools">
                    <a href="javascript:;" class="collapse"></a>
                    <a href="#grid-config" data-toggle="modal" class="config"></a>
                    <a href="javascript:;" class="reload"></a>
                    <a href="javascript:;" class="remove"></a>
                  </div>
                </div>
                <div class="grid-body ">
                  <table class="table" id="example3">
                    <thead>
                      <tr>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Created Time</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($datas as $data)
                      <tr class="odd gradeX">
                        <td>{{ $data->title }}</td>
                        <td>{{ $data->author }}</td>
                        <td>{{ $data->created_at }}</td>
                        <td>
                          <a href="{{ route('admin_blogs.edit',$data->id)}}" class="btn btn-primary" style=" margin-bottom: 10px; float: left">Edit</a>
                          <form method="POST" action="{{ route('admin_blogs.destroy', [$data->id]) }}">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button class="btn btn-danger" style="margin-left: 5px" onclick="return confirm('Are you sure to Delete?')" type="submit">Delete</button>
                          </form>
                        </td>
                      </tr>
                    @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection

@section('page_js')
    <!-- END CORE TEMPLATE JS -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src="{{ asset('admin/assets/plugins/bootstrap-select2/select2.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/plugins/jquery-datatable/js/jquery.dataTables.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/plugins/jquery-datatable/extra/js/dataTables.tableTools.min.js') }}" type="text/javascript"></script>
    <script type="text/javascript" src="{{ asset('admin/assets/plugins/datatables-responsive/js/datatables.responsive.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin/assets/plugins/datatables-responsive/js/lodash.min.js') }}"></script>
    <!-- END PAGE LEVEL JS INIT -->
    <script src="{{ asset('admin/assets/js/datatables.js') }}" type="text/javascript"></script>
    <!-- END JAVASCRIPTS -->
@endsection