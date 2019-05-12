@extends('layout.admin_master')

@section('content')


    <div class="page-content">
        <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
        <div id="portlet-config" class="modal hide">
            <div class="modal-header">
                <button data-dismiss="modal" class="close" type="button"></button>
                <h3>Widget Settings</h3>
            </div>
            <div class="modal-body"> Widget settings form goes here </div>
        </div>
        <div class="clearfix"></div>
        <div class="content">

            <div style="display: none" class="row">
                <div class="col-md-12">
                    <div class="grid simple">
                        <div class="grid-title no-border">
                            <h4>Toggle <span class="semi-bold">Controls</span></h4>
                            <div class="tools">
                                <a href="javascript:;" class="collapse"></a>
                                <a href="#grid-config" data-toggle="modal" class="config"></a>
                                <a href="javascript:;" class="reload"></a>
                                <a href="javascript:;" class="remove"></a>
                            </div>
                        </div>
                        <div class="grid-body no-border">
                            <div class="row">
                                <div class="col-md-4">
                                    <h3>Color <span class="semi-bold">Options</span></h3>
                                    <p>Pure CSS radio button with a cool animation. These are available in all primary colors in bootstrap</p>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="radio">
                                                <input id="male" type="radio" name="gender" value="male" checked="checked">
                                                <label for="male">Male</label>
                                                <input id="female" type="radio" name="gender" value="female">
                                                <label for="female">Female</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="radio radio-success">
                                                <input id="yes" type="radio" name="optionyes" value="yes">
                                                <label for="yes">Agree</label>
                                                <input id="no" type="radio" name="optionyes" value="no" checked="checked">
                                                <label for="no">Disagree</label>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <br>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="col-md-4">
                                    <h3>State <span class="semi-bold">Options</span></h3>
                                    <p>Use of different color opacity helps to destigues between different states such as disable</p>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="radio radio-primary">
                                                <input id="Disabled" type="radio" name="Disabled" value="Disabled" disabled="disabled">
                                                <label for="Disabled">Disabled</label>
                                                <input id="ADisabled" type="radio" name="ADisabled" value="ADisabled" checked="checked" disabled="disabled">
                                                <label for="ADisabled">Disabled</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <h3>Slide <span class="semi-bold">Toggle</span></h3>
                                    <p>A cool iOS7 slide toggle. These are cutomize for all boostrap colors</p>
                                    <br>
                                    <div class="row-fluid">
                                        <div class="slide-primary">
                                            <input type="checkbox" name="switch" class="ios" checked="checked" />
                                        </div>
                                        <div class="slide-success">
                                            <input type="checkbox" name="switch" class="iosblue" checked="checked" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="grid simple">
                        <div class="grid-title no-border">
                            <h3>Update Blog Post</h3>
                            @include('layout.error')


                            {!! Form::model($datas,['class'=>'', 'method' => 'PATCH', 'action' => ['BlogController@update', $datas->id]]) !!}

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">

                                        {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Title', 'required']) !!}
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        {!! Form::text('author', null, ['class' => 'form-control', 'placeholder' => 'Author Name/ Source / Tag which show bottom of the blog']) !!}
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        {!! Form::textarea('text', null, ['id' => 'text-editor', 'class' => 'form-control', 'row' => '10', 'placeholder' => 'Enter text ...', 'required']) !!}
                                    </div>
                                </div>

                            </div>


                            {!! Form::submit('Update Post',['class' => 'btn btn-info']) !!}

                            {!! Form::close() !!}
                        </div>

                    </div>
                </div>
            </div>
            <!-- END HTML5 WYSIWG CONTROLS-->
        </div>
    </div>




@endsection


@section('page_js')
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src="{{ asset('/admin/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/admin/assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/admin/assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/admin/assets/plugins/jquery-inputmask/jquery.inputmask.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/admin/assets/plugins/jquery-autonumeric/autoNumeric.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/admin/assets/plugins/ios-switch/ios7-switch.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/admin/assets/plugins/bootstrap-select2/select2.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/admin/assets/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/admin/assets/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/admin/assets/plugins/bootstrap-tag/bootstrap-tagsinput.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/admin/assets/plugins/boostrap-clockpicker/bootstrap-clockpicker.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/admin/assets/plugins/dropzone/dropzone.min.js') }}" type="text/javascript"></script>
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="{{ asset('/admin/assets/js/form_elements.js') }}" type="text/javascript"></script>
    <!-- END PAGE LEVEL SCRIPTS -->
@endsection