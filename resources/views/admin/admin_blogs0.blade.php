@extends('layout.admin_master')

@section('content')
  <style>
    /*#test2 {display: none}*/
  </style>

  <div class="page-content">

    <div class="clearfix"></div>
    <div class="content">


      <div class="row-fluid">
        <div class="span12">
          <div class="grid simple ">
            <div class="grid-title">
              <h3>All blog</h3>
              @include('layout.error')
            </div>
            <div class="grid-body ">

              <table class="table table-striped" id="example3">
                <thead>
                <tr>
                  <th>Title</th>
                  <th>Author</th>
                  <th>Created Time</th>
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
    <div class="admin-bar" id="quick-access" style="display:none">
      <div class="admin-bar-inner">
        <div class="form-horizontal">
          <select id="val1" class="select2-wrapper m-r-10">
            <option value="Gecko">Gecko</option>
            <option value="Webkit">Webkit</option>
            <option value="KHTML">KHTML</option>
            <option value="Tasman">Tasman</option>
          </select>
          <select id="val2" class="select2-wrapper">
            <option value="Internet Explorer 10">Internet Explorer 10</option>
            <option value="Firefox 4.0">Firefox 4.0</option>
            <option value="Chrome">Chrome</option>
          </select>
        </div>
        <button class="btn btn-primary btn-cons btn-add" type="button">Add Browser</button>
        <button class="btn btn-white btn-cons btn-cancel" type="button">Cancel</button>
      </div>
    </div>
    <div class="addNewRow"></div>
  </div>


@endsection

@section('page_js')
  <!-- BEGIN PAGE LEVEL PLUGINS -->
  <script src="/admin/assets/plugins/bootstrap-select2/select2.min.js" type="text/javascript"></script>
  <script src="/admin/assets/plugins/jquery-datatable/js/jquery.dataTables.min.js" type="text/javascript"></script>
  <script src="/admin/assets/plugins/jquery-datatable/extra/js/dataTables.tableTools.min.js" type="text/javascript"></script>
  <script type="text/javascript" src="/admin/assets/plugins/datatables-responsive/js/datatables.responsive.js"></script>
  <script type="text/javascript" src="/admin/assets/plugins/datatables-responsive/js/lodash.min.js"></script>
  <!-- END PAGE LEVEL JS INIT -->
  <script src="/admin/assets/js/datatables.js" type="text/javascript"></script>
  <!-- END JAVASCRIPTS -->
@endsection