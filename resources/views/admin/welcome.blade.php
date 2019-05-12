@extends('layout.admin_master')

@section('content')
    <style>
        #test2 {display: none}
    </style>

    <div class="page-content">

        <div class="clearfix"></div>
        <div class="content">


            <div class="row-fluid">
                <div class="span12">
                    <div class="grid simple ">
                        <div class="grid-title">
                            <h4>Hello <span class="semi-bold">{{ Auth::user()->name }}</span></h4>

                        </div>
                        <div class="grid-body ">

                            <h1>Welcome to Loan Analysis Solutions</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="admin-bar" id="quick-access" style="display: none">
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
    <script src="{{ asset('admin/assets/plugins/bootstrap-select2/select2.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/plugins/jquery-datatable/js/jquery.dataTables.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/plugins/jquery-datatable/extra/js/dataTables.tableTools.min.js') }}" type="text/javascript"></script>
    <script type="text/javascript" src="{{ asset('admin/assets/plugins/datatables-responsive/js/datatables.responsive.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin/assets/plugins/datatables-responsive/js/lodash.min.js') }}"></script>
    <!-- END PAGE LEVEL JS INIT -->
    <script src="{{ asset('admin/assets/js/datatables.js') }}" type="text/javascript"></script>
    <!-- END JAVASCRIPTS -->
@endsection