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
                              Add Blogs
                          </header>
                          <div class="panel-body">
                              <div class=" form">
                                  <form class="cmxform form-horizontal tasi-form" enctype="multipart/form-data" id="commentForm" method="POST" action="{{url('dashboard/blog/save')}}">

                                      <div class="form-group ">
                                          <label for="cname" class="control-label col-lg-2">Title</label>
                                          <div class="col-lg-10">
                                              <input class=" form-control"  name="title" minlength="2" type="text" required />
                                          </div>
                                      </div>

                                      <div class="form-group ">
                                          <label for="cemail" class="control-label col-lg-2">Image Header Blog</label>
                                          <div class="col-lg-10">
                                            <input type="file" name="img_header" required />
                                        </div>
                                      </div>

                                      <div class="form-group ">
                                          <label for="cemail" class="control-label col-lg-2">Content</label>
                                          <div class="col-lg-10">
                                          	<textarea class="form-control" id="textarea" name="content" required>Content Blogs Here</textarea>
                                     	  </div>
                                      </div>

                                      <div class="form-group">
                                          <div class="col-lg-offset-2 col-lg-10">
                                              <button class="btn btn-danger" type="submit">Save</button>
                                              <a class="btn btn-default" href="{{URL::to('dashboard')}}">Cancel</a>
                                          </div>
                                      </div>
                                  </form>
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