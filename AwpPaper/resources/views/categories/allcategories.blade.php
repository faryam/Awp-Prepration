@extends('layouts.app')

@section('content')

<div class="container">


    <div class="page-content-wrapper">
                <div class="page-content">

                    <div class="row">
                        <div class="col-md-12">
                            <a href="{{ route('addcategory') }}" class="btn btn-success pull-right" style="margin-bottom: 10px;">Add New Category</a>

                            <div class="portlet box blue">
                                <div class="portlet-title">
                                    <div class="caption">
                                        All Categories
                                        
                                    </div>

                                </div>

                                <div class="portlet-body">
                                    <div class="table-responsive">    
                                   <table class="table table-striped table-hover table-condensed " id="rows">
                                     <tbody>
                                      <tr>
                                           <th> ID</th>
                                           <th> Name</th>
                                           
                                           <th> Action</th>
                                        </tr>
                                    @foreach ($categories as $category)
                                        <tr>
                                           <td >{{$category->id}}</td>
                                           <td>{{$category->name}}</td>
                                           
                                           <td style='white-space: nowrap'>

                                                <a href="{{ route('findcategory') }}?id={{$category->id}}" class="btn btn-primary" title="EDIT category">EDIT</a>
                                                
                                                <form action="{{ route('deletecategory') }}" method="POST" style="display: inline-block;">
                                                   {{ csrf_field() }}
                                                  <input type="hidden" name="id" value="{{$category->id}}">
                                                  <button type="submit" class="btn btn-danger"  title="DELETE category">DELETE</button>
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
</div>
@endsection
