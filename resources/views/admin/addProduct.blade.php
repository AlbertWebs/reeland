@extends('admin.master')
@section('content')
<!-- Remember to include jQuery :) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>

<!-- jQuery Modal -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
<style>
    .modal a.close-modal{
        top:0px !important;
        right:0px !important;
    }
</style>
<!--== BODY CONTNAINER ==-->
 <div class="container-fluid sb2">
    <div class="row">
        @include('admin.sidebar')

        <!--== BODY INNER CONTAINER ==-->

        <div class="sb2-2">
            <div class="sb2-2-2">
                <ul>
                    <li><a href="{{url('/')}}"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                    </li>
                    <li class="active-bre"><a href="#"> Add New Product</a>
                    </li>
                    <li class="page-back"><a href="{{url('/')}}/admin/products"><i class="fa fa-backward" aria-hidden="true"></i> All Products</a>
                    </li>
                </ul>

            </div>
            <div class="sb2-2-add-blog sb2-2-1">
                <div class="box-inn-sp">
                    <div class="inn-title">
                        <h4>Add Product</h4>
                        <center>
                            @if(Session::has('message'))
                                          <div class="alert alert-success">{{ Session::get('message') }}</div>
                           @endif

                           @if(Session::has('messageError'))
                                          <div class="alert alert-danger">{{ Session::get('messageError') }}</div>
                           @endif
                        </center>
                    </div>
                    <div class="bor">
                        <form method="POST" action="{{url('/')}}/admin/add_Product" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="row">
                                <div class="input-field col s12">
                                    <input autocomplete="off" name="title" id="list-title" type="text" class="validate" required>
                                    <label for="list-title">Property Name</label>
                                </div>
                                <div class="input-field col s12">
                                    <input autocomplete="off" name="price" id="list-title"  type="number" class="validate" required>
                                    <label for="list-title">Product Price</label>
                                </div>
                                <div class="input-field col s12">
                                    <input autocomplete="off" name="bedrooms" id="list-title" type="text" class="validate" required>
                                    <label for="list-title">Bedrooms</label>
                                </div>
                                <div class="input-field col s12">
                                    <input autocomplete="off" name="bathroom" id="list-title" type="text" class="validate" required>
                                    <label for="list-title">Bathroom</label>
                                </div>
                                <div class="input-field col s12">
                                    <input autocomplete="off" name="location" id="list-title" type="text" class="validate" required>
                                    <label for="list-title">Location</label>
                                </div>
                                <div class="input-field col s12">
                                    <input autocomplete="off" name="sqft" id="list-title" type="text" class="validate" >
                                    <label for="list-title">SQFT</label>
                                </div>

                                {{-- <div class="input-field col s12">
                                    <input autocomplete="off" name="sku" id="list-title" type="text" placeholder="SKU-01" class="validate" required>
                                    <label for="list-title">SKU</label>
                                </div> --}}
                                <div class="input-field col s12">
                                    <div class="file-field">
                                        <div class="btn">
                                            <span>File(600px by 600px)</span>
                                            <input required name="image_one" type="file">
                                        </div>
                                        <div class="file-path-wrapper">
                                            <input  class="file-path validate" type="text" placeholder="Upload Product Main Image, Size 390 by 480">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">

                                {{--  --}}
                                <div class="input-field col s12">
                                    <select required name="category" class="icons" id="mydiv">
                                        <option value="" disabled selected>Choose your Category</option>
                                        @foreach ($Category as $Categories)
                                        <option value="{{$Categories->id}}" data-icon="{{url('/')}}/uploads/categories/{{$Categories->image}}" class="circle">{{$Categories->title}}</option>
                                        @endforeach
                                    </select>
                                    <label>Choose Category</label>
                                </div>
                                <a href="#ex1" rel="modal:open"> <strong>+ Add New Category</strong> </a>
                                {{--  --}}
                                <div class="section-space col s12"></div>
                            </div>

                            <div class="row">

                                {{--  --}}
                                <div class="input-field col s12">
                                    <select required name="type" class="icons" id="mydiv">
                                        <option value="" disabled selected>Choose your Type</option>
                                        <option value="sale" data-icon="{{url('/')}}/theme/images/icon.png" class="circle">Sale</option>
                                        <option value="To Let" data-icon="{{url('/')}}/theme/images/icon.png" class="circle">Rent</option>
                                    </select>
                                    <label>Choose Type</label>
                                </div>

                                {{--  --}}
                                <div class="section-space col s12"></div>
                            </div>



                            <div class="row">

                                {{--  --}}
                                <div class="input-field col s12">
                                    <select required name="condition" class="icons" id="mydiv">
                                        <option value="" disabled selected>Choose Property Condition</option>

                                        <option value="Renovated"  class="circle">Renovated</option>
                                        <option value="New"  class="circle">New</option>

                                    </select>
                                    <label>Property Condition</label>
                                </div>

                                {{--  --}}
                                <div class="section-space col s12"></div>
                            </div>


                            <div class="row">
                                <div class="input-field col s12">
                                    <textarea required name="meta" class="materialize-textarea"></textarea>
                                    <label for="textarea1">Meta Descriptions:</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <textarea required id="article-ckeditor" name="content" class="materialilze-textarea" placeholder="content"></textarea>
                                    {{-- <label for="textarea1">Blog Descriptions:</label> --}}
                                </div>
                            </div><br><br>


                                <script src="{{ asset('ckeditor/ckeditor.js')}}"></script>
                                <script>CKEDITOR.replace('article-ckeditor');</script>



                            <div class="row">
                                <div class="input-field col s12">
                                    <input required autocomplete="off" value="{{Auth::user()->name }}" id="post-auth" name="author" type="text" class="validate">
                                    <label for="post-auth">Author Name</label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="input-field col s12">
                                    <input  type="submit" class="waves-effect waves-light btn-large" value="Submit">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--== BODY INNER CONTAINER ==-->

    </div>
</div>

{{--  --}}
<div id="ex1" class="modal">
    <div class="sb2-2-3">
        <div class="row">
            <div class="col-md-12">
                <div class="box-inn-sp">
                    <div class="inn-title">
                        <h4>Add New Category</h4>
                    </div>
                    <div class="tab-inn">
                        <form method="POST" id="categoryAddForm">
                            {{csrf_field()}}
                            <div class="row">
                                <div class="input-field col s12">
                                    <input autocomplete="off" name="title" id="CategoryTitle" type="text" class="validate">
                                    <label for="CategoryName">Category Name</label>
                                </div>
                            </div>
                            <div class="row" id="submitButton">
                                <div class="input-field col s12">
                                    <input  type="submit" class="waves-effect waves-light btn-large" value="Submit">
                                </div>
                            </div>

                            <div class="tab-inn" id="loading-bar">
                                <div class="progress">
                                    <div class="indeterminate"></div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
{{-- <a href="#" rel="modal:close">Close</a> --}}
<script type="text/javascript">
        // A $( document ).ready() block.
    $( document ).ready(function() {
        $('#loading-bar').hide();
    });

    $('#categoryAddForm').on('submit',function(event){
        event.preventDefault();
        $('#loading-bar').show();


        let title = $('#CategoryTitle').val();


        $.ajax({
          url: "{{url('/')}}/admin/addCategoryAjaxRequest",
          type:"POST",
          data:{
            "_token": "{{ csrf_token() }}",
            title:title,
          },
          success:function(response){
            $('#loading-bar').hide();
            $('#submitButton').html('<center><span class="alert-success text-center">Category Added Successfully! Refreshing page...........</span></center>').delay(3000);
            $('#categoryAddForm')[0].reset();
            setTimeout(function() {
                location.reload();
            }, 5000);
          },
         });
        });
      </script>
</div>
{{--  --}}
@endsection
