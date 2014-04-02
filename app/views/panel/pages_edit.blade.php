@extends('panel/layout')
  @section('content')
{{HTML::script('tinymce/tinymce.min.js')}}
<script type="text/javascript">
tinymce.init({
    selector: "textarea",
    plugins: [
        "advlist autolink lists link image charmap print preview anchor",
        "searchreplace visualblocks code fullscreen",
        "insertdatetime media table contextmenu paste"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
});
</script>

<section id="container" >
      <!--header start-->
      <header class="header white-bg">
            <div class="sidebar-toggle-box">
                <div data-original-title="Toggle Navigation" data-placement="right" class="icon-reorder tooltips"></div>
            </div>
            <!--logo start-->
            <a href="{{URL::to('dashboard')}}" class="logo"><span>LARA</span>V<span>LABS</span></a>
            <!--logo end-->
            
            <div class="top-nav ">
                <!--search & user info start-->
                <ul class="nav pull-right top-menu">
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <img alt="" src="{{asset('admin/img/avatar1_small.jpg')}}">
                            <span class="username">AGUSC</span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <li><a href="{{URL::to('dashboard/profil')}}"><i class=" icon-suitcase"></i>Profile</a></li>
                            <li><a href="{{URL::to('logout')}}"><i class="icon-key"></i> Log Out</a></li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!--search & user info end-->
            </div>
        </header>
      <!--header end-->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
                  <li>
                      <a class="active" href="{{URL::to('dashboard')}}">
                          <i class="icon-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="icon-laptop"></i>
                          <span>Pages</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="{{URL::to('dashboard/pages')}}">All Pages</a></li>
                          <li><a  href="{{URL::to('dashboard/pages/add')}}">New Pages</a></li>
                      </ul>
                  </li>

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <!-- page start-->
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Edit Pages
                          </header>
                          <div class="panel-body">
                              <div class=" form">
                                  {{ Form::open(array('action'=> 'PagesController@update','class'=>"cmxform form-horizontal tasi-form")) }}

                                        {{Form::hidden('id', $pages->id)}}

                                      <div class="form-group ">
                                          <label for="cname" class="control-label col-lg-2">Title</label>
                                          <div class="col-lg-10">
                                              <input class=" form-control"  name="title"  type="text" value="{{$pages->title}}"  />
                                          </div>
                                      </div>

                                      <div class="form-group ">
                                          <label for="cemail" class="control-label col-lg-2">Content</label>
                                          <div class="col-lg-10">
                                          	<textarea class="form-control" id="editor1" name="content" required>{{$pages->content}}</textarea>
                                     	  </div>
                                      </div>

                                      <div class="form-group ">
                                          <label for="cname" class="control-label col-lg-2">Status</label>
                                          <div class="col-lg-10">
                                          <select class=" form-control"  name="status" required>
                                          	<option value="1">Publish</option>
                                          	<option value="0">Draft</option>
                                          </select>
                                          </div>
                                      </div>

                                      <div class="form-group">
                                          <div class="col-lg-offset-2 col-lg-10">
                                              <button class="btn btn-danger" type="submit">Save</button>
                                              <a class="btn btn-default" href="{{URL::to('dashboard/pages')}}">Cancel</a>
                                          </div>
                                      </div>
                                   {{ Form::close() }}
                              </div>

                          </div>
                      </section>
                  </div>
              </div>

              <!-- page end-->
          </section>

      </section>
      <!--main content end-->
      
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
{{HTML::script('admin/js/jquery.js')}}
{{HTML::script('admin/js/jquery-1.8.3.min.js')}}
{{HTML::script('admin/js/bootstrap.min.js')}}
{{HTML::script('admin/js/jquery.dcjqaccordion.2.7.js')}}
{{HTML::script('admin/js/jquery.scrollTo.min.js')}}
{{HTML::script('admin/js/jquery.sparkline.js')}}
{{HTML::script('admin/js/jquery.customSelect.min.js')}}
{{HTML::script('admin/js/respond.min.js')}}
{{HTML::script('admin/js/jquery.dcjqaccordion.2.7.js')}}
{{HTML::script('admin/js/common-scripts.js')}}

@stop