@extends('panel/layout')
  @section('content')
<script src="//tinymce.cachefly.net/4.0/tinymce.min.js"></script>
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
      
      @include('panel/menu')

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
                                  {{ Form::open(array('action'=> 'ProfilController@update','class'=>"cmxform form-horizontal tasi-form")) }}

                                        {{Form::hidden('id', $profil->id)}}

                                      <div class="form-group ">
                                          <label for="cname" class="control-label col-lg-2">Username</label>
                                          <div class="col-lg-10">
                                              <input class=" form-control"  name="username"  type="text" value="{{$profil->username}}"  />
                                          </div>
                                      </div>


                                      <div class="form-group ">
                                          <label for="cname" class="control-label col-lg-2">Password</label>
                                          <div class="col-lg-10">
                                              <input class=" form-control"  name="password"  type="text"  />
                                              <br/>
                                              <p>* Kosongkan Jika Tidak di Ganti </p>
                                          </div>
                                      </div>

                                      <div class="form-group ">
                                          <label for="cname" class="control-label col-lg-2">Email</label>
                                          <div class="col-lg-10">
                                              <input class=" form-control"  name="email"  type="text" value="{{$profil->email}}"  />
                                          </div>
                                      </div>

                                      <div class="form-group">
                                          <div class="col-lg-offset-2 col-lg-10">
                                              <button class="btn btn-danger" type="submit">Save</button>
                                              <a class="btn btn-default" href="{{URL::to('dashboard')}}">Cancel</a>
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